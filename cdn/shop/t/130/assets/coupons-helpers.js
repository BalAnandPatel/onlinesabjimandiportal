var couponTypes={PERCENTAGE:"percentage",FIXED:"fixed",BUYXGETY:"buy_x_get_y"},couponSubTexts={order_type:(e,cartData)=>({couponValid:[`Save \u20B9${getDiscountedPriceOD(e,cartData).toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")} with this code`],couponInvalid:[`Add \u20B9${getRemAmtForOD(e,cartData).toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")} more to unlock this code`]}),product_type:(e,cartData)=>({couponValid:[`Save \u20B9${getDiscountedPricePD(e,cartData).toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")} with this code`],couponInvalid:[`Add any ${getRemProductCount(e,cartData)} ${e.product_category} to unlock this code`]})},discountCoupons=[{discount_id:1355335532790,discount_type:"percentage",discount:5,buy_get_free_prereqisite:{buy_prerequisite:[],free_products:[]},min_order_amount:799,min_purchase_count:0,free_product_count:0,description:"On orders above \u20B9799. Use VAAREE5",product_category:"",discount_name:"VAAREE5",entitled_variant_ids:[],entitled_product_ids:[]},{discount_id:1355335762166,discount_type:"percentage",discount:10,buy_get_free_prereqisite:{buy_prerequisite:[],free_products:[]},min_order_amount:1999,min_purchase_count:0,free_product_count:0,description:"On orders above \u20B91,999. Use VAAREE10",product_category:"",discount_name:"VAAREE10",entitled_variant_ids:[],entitled_product_ids:[]},{discount_id:1355335860470,discount_type:"fixed_amount",discount:600,buy_get_free_prereqisite:{buy_prerequisite:[],free_products:[]},min_order_amount:3999,min_purchase_count:0,free_product_count:0,description:"Get Flat \u20B9600 OFF on orders above \u20B93,999",product_category:"",discount_name:"FLAT600",entitled_variant_ids:[],entitled_product_ids:[]},{discount_id:1355335926006,discount_type:"fixed_amount",discount:2e3,buy_get_free_prereqisite:{buy_prerequisite:[],free_products:[]},min_order_amount:9999,min_purchase_count:0,free_product_count:0,description:"Get Flat \u20B92,000 OFF on orders above \u20B99,999",product_category:"",discount_name:"FLAT2000",entitled_variant_ids:[],entitled_product_ids:[]},{discount_id:1202224300278,discount_type:"percentage",discount:100,buy_get_free_prereqisite:{buy_prerequisite:["Cushion Cover Sets","Cushion Covers"],free_products:[]},min_order_amount:0,min_purchase_count:4,free_product_count:1,description:"Buy 4 cushions get 1 FREE!",product_category:"cushions",discount_name:"CUSHIONLOVE",entitled_variant_ids:[],entitled_product_ids:[]}];async function applyDiscount(discountCode){return new Promise(async function(resolve,reject){try{let discountApply=await fetch(window.location.origin+`/discount/${discountCode}`);resolve(1)}catch(error){console.error("Error applying discount:",error),reject(err)}})}async function removeDiscount(){return new Promise(async function(resolve,reject){try{(await fetch(window.location.origin+"/discount/COUPONTEST123")).status===200?resolve(1):reject(0)}catch(error){console.error("Error removing discount:",error),reject(error)}finally{document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show")}})}async function removeFreeProduct(variantId){let updates={id:variantId.toString(),sections:"cart_data,mini_cart",quantity:"0",sections_url:window.location.pathname};fetch(window.Shopify.routes.root+"cart/change.js",{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(updates)}).then(response=>response.json()).then(res=>{document.dispatchEvent(new CustomEvent("cart:refresh"))}).catch(error=>{console.error("Error:",error)})}async function fetchCartData(){try{return await(await fetch(window.Shopify.routes.root+"cart.js",{method:"GET",headers:{"Content-Type":"application/json"}})).json()}catch(error){throw console.error("Error fetching cart data:",error),error}}async function getCartData(){try{const data=await fetchCartData(),totalPrice=data.original_total_price,cartItems=data.items,cartLevlDiscount=data.cart_level_discount_applications;return{totalPrice,cartItems,cartLevlDiscount}}catch(error){console.error("Error:",error)}}function convertToRs(e){var r=parseFloat(e/100).toFixed(2);return r.endsWith(".00")&&(r=parseInt(r)),r}function getDiscountType(couponData){var discountType="";return couponData.discount_type=="fixed_amount"?discountType=couponTypes.FIXED:couponData.discount_type=="percentage"&&(couponData.discount==100?discountType=couponTypes.BUYXGETY:discountType=couponTypes.PERCENTAGE),discountType}function getFilteredItems(product_types,cartData){var{cartItems}=cartData;if(product_types.includes("ALL"))return cartItems;var filteredItems=cartItems.filter(item=>product_types.includes(item.product_type));return filteredItems.length>0?filteredItems:[]}function getProductCount(couponData,cartData){var product_types=couponData.buy_get_free_prereqisite.buy_prerequisite,filteredItems=getFilteredItems(product_types,cartData);if(filteredItems.length>0){var minReqCount=couponData.min_purchase_count+couponData.free_product_count,totalProductCount=0;return filteredItems.forEach(item=>{totalProductCount+=item.quantity}),totalProductCount}return 0}function getVariantIds(couponData,cartData){var variantIds=couponData.entitled_variant_ids;if(variantIds.length==0)return["All Applicable"];var{cartItems}=cartData,filteredVariants=cartItems.filter(item=>variantIds.includes(item.id));return filteredVariants.length>0?filteredVariants:[]}function validateCoupon(couponData,cartData){var isValid=!1,discountType=getDiscountType(couponData);if(discountType==couponTypes.BUYXGETY){var totalProductCount=getProductCount(couponData,cartData),minReqCount=couponData.min_purchase_count+couponData.free_product_count;return totalProductCount>=minReqCount&&(isValid=!0),isValid}else if([couponTypes.PERCENTAGE,couponTypes.FIXED].includes(discountType)){var applicableVariantIds=getVariantIds(couponData,cartData);if(applicableVariantIds.length==0)return!1;var{totalPrice}=cartData;return totalPrice=convertToRs(totalPrice),totalPrice>=couponData.min_order_amount&&(isValid=!0),isValid}else return isValid}function getDiscountedPriceOD(couponData,cartData){var{totalPrice}=cartData;if(totalPrice=convertToRs(totalPrice),totalPrice>=couponData.min_order_amount){var discountType=getDiscountType(couponData);if(discountType==couponTypes.PERCENTAGE){var discountedPrice=totalPrice*couponData.discount*.01;return discountedPrice.toFixed(2)}else if(discountType==couponTypes.FIXED&&validateCoupon(couponData,cartData))return parseFloat(couponData.discount).toFixed(2)}return 0}function getRemAmtForOD(couponData,cartData){var{totalPrice}=cartData;if(totalPrice=convertToRs(totalPrice),couponData.min_order_amount>totalPrice){var remAmount=couponData.min_order_amount-totalPrice;return remAmount.toFixed(2)}return 0}function generatePriceList(filteredItems){var priceArray=[];filteredItems.forEach(item=>{Array.from({length:item.quantity}).forEach(()=>{priceArray.push(convertToRs(item.price))})});var sortedPriceList=priceArray.sort((a,b)=>a-b);return sortedPriceList}function getDiscountedPricePD(couponData,cartData){var totalProductCount=getProductCount(couponData,cartData),minReqCount=couponData.min_purchase_count+couponData.free_product_count;if(totalProductCount>=minReqCount){var product_types=couponData.buy_get_free_prereqisite.buy_prerequisite,filteredItems=getFilteredItems(product_types,cartData),priceList=generatePriceList(filteredItems),discountedProductsCount=totalProductCount/minReqCount,discountedPrice=priceList.slice(0,discountedProductsCount).reduce((acc,curr)=>acc+curr,0);return discountedPrice.toFixed(2)}return 0}function getFreeProductsDiscount(couponData,cartData){var totalProductCount=getProductCount(couponData,cartData),minReqCount=couponData.min_purchase_count+couponData.free_product_count;if(totalProductCount>=minReqCount||couponData.min_order_amount>=cartData.totalPrice){var product_types=couponData.buy_get_free_prereqisite.buy_prerequisite,freeProductsList=couponData.buy_get_free_prereqisite.free_products,filteredItems=getFilteredItems(product_types,cartData),filteredFreeItems=filteredItems.filter(item=>freeProductsList.includes(item.variant_id.toString())),priceList=generatePriceList(filteredFreeItems),discountedPrice=priceList.slice(0,minReqCount).reduce((acc,curr)=>acc+curr,0);return discountedPrice.toFixed(2)}return 0}function getRemProductCount(couponData,cartData){var remCount=0,totalProductCount=getProductCount(couponData,cartData),minReqCount=couponData.min_purchase_count+couponData.free_product_count;return totalProductCount==0?remCount=minReqCount:minReqCount>totalProductCount&&(remCount=minReqCount-totalProductCount),remCount}function getCouponSubText(couponData,cartData){var subtext="",isCouponValid=validateCoupon(couponData,cartData),discType=getDiscountType(couponData),couponValidity=isCouponValid?"couponValid":"couponInvalid",discount_type=null;return discType==couponTypes.BUYXGETY?discount_type="product_type":[couponTypes.PERCENTAGE,couponTypes.FIXED].includes(discType)&&(discount_type="order_type"),discount_type&&(subtext=couponSubTexts[discount_type](couponData,cartData),subtext=subtext[couponValidity]),subtext}function getCouponData(couponToApply){for(let obj of discountCoupons)if(obj.discount_name===couponToApply)return obj;return null}function getFreeGiftData(couponData,cartData){var freeGiftId=null;if(couponData.discount_name==freeGiftCoupon){var freeItemsList=couponData.entitled_product_ids,freeProductData=cartData.cartItems.filter(cartItem=>cartItem.product_id==freeItemsList[0]);freeProductData.length>0&&(freeGiftId=freeProductData[0].variant_id)}return freeGiftId}function getFreeItemInCart(freeItemsList,cartData){let itemsInFreeList=cartData.cartItems.filter(item=>freeItemsList.includes(item.product_id));return itemsInFreeList.length>0?itemsInFreeList[0]:null}function getFreeProductOfferData(couponData,cartData){let freeItemsList=couponData.entitled_product_ids;var filteredItem=getFreeItemInCart(freeItemsList,cartData);if(filteredItem){let discountedAmt=filteredItem.presentment_price;return cartData.totalPrice/100-discountedAmt>=discountedAmt?discountedAmt:0}else return 0}var forward_arrow_svg=`
  <svg class="forward-arrow-icon" width="24" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12 5L10.59 6.41L16.17 12H4V14H16.17L10.59 19.59L12 21L20 13L12 5Z" fill=""/>
  </svg>
`;function generateCouponAppliedtab(coupon){if(coupon.title==freeGiftCoupon)var subText="Birthday Gift";else var subText=`\u20B9${coupon.discountAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")} Saved!`;return`
    <div class="coupons-tab-content-a">
      <div class="coupon-a-head">
        <div class="coupon-title-text">
          '<span id="coupon-title">${coupon.title}</span>' applied
        </div>
        <button 
          type="button" 
          class="remove-coupon-button" 
          onclick="handleRemoveClick(this)"
          data-coupon-title="${coupon.title}"
        >
          Remove
        </button>
      </div>
      <div class="amount-saved">
      <img
        height="16"
        width="16"
        src="https://cdn.shopify.com/s/files/1/0632/2526/6422/files/Mask_group_c894bf9f-47b4-41e4-965e-8d669d1db55c.png?v=1711135230"
         >
        <div class="amount-saved-text">
          <span id="coupon-discount-amount">
            ${subText}
          </span>
        </div>
      </div>
    </div> 
  `}function generateCouponCardHtml(coupon){return`
    <div class="discount-coupon-card">
      <div class="coupon-left-border"></div>
      <div class="coupon-content">
        <div class="coupon-heading">
          <div class="coupon-title">
            ${coupon.title}
          </div>
          <div 
            class="coupon-apply-button" 
            data-coupon-title=${coupon.title} 
            style=${coupon.isValid?"cursor:pointer":""} 
            onclick=${coupon.isValid?`handleCouponClick('${coupon.title}')`:""}
            data-action-coupon
          >
            Apply Now ${forward_arrow_svg}
          </div>
        </div>
        <div class="coupon-description">
          ${coupon.description}
        </div>
        <div class="coupon-subtext">
          ${coupon.subtext}
        </div>
      </div>
    </div>
  `}async function isCouponMismatch(){var cartData=await getCartData(),filteredItems=cartData.cartItems.filter(cartItem=>cartItem.discounts.length>0);if(filteredItems.length>0){var fPrice=parseFloat(cartData.totalPrice/100).toFixed(2);document.getElementsByClassName("t4s-cart__totalPrice")[0].innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`,document.getElementById("finalPriceCheckoutBtn").innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`}}async function applyCouponOnQuantityChange(){var couponToApply=document.cookie.split("; ").find(row=>row.startsWith("discount_code="))?.split("=")[1];if(couponToApply)try{var availableCouponsWrapper=document.getElementById("available-coupons-wrapper"),cartData=await getCartData();if(availableCouponsWrapper&&(availableCouponsWrapper.style.display="none"),document.getElementById("coupons-na-wrapper").style.display="none",document.getElementById("discount-section-wrapper").style.display="none",couponToApply=="COUPONTEST123"){availableCouponsWrapper.style.display="none",document.getElementById("coupons-na-wrapper").style.display="block",document.getElementById("discount-section-wrapper").style.display="none",await isCouponMismatch();return}document.getElementById("spinner-container").removeAttribute("hidden"),document.getElementById("spinner-container").classList.add("spinner-show");var couponData={},couponData=getCouponData(couponToApply);if(!couponData&&(couponData=JSON.parse(localStorage.getItem("couponData")),!couponData)){availableCouponsWrapper.style.display="none",document.getElementById("coupons-na-wrapper").style.display="block",document.getElementById("discount-section-wrapper").style.display="none";return}var discountType=getDiscountType(couponData)||"",discountAmount="";if(discountType==couponTypes.BUYXGETY?discountAmount=couponData.buy_get_free_prereqisite.free_products.length>0?getFreeProductsDiscount(couponData,cartData):couponData.entitled_product_ids.length>0?getFreeProductOfferData(couponData,cartData):getDiscountedPricePD(couponData,cartData):[couponTypes.PERCENTAGE,couponTypes.FIXED].includes(discountType)&&(discountAmount=getDiscountedPriceOD(couponData,cartData)),discountAmount==0){availableCouponsWrapper.style.display="none",document.getElementById("coupons-na-wrapper").style.display="block",document.getElementById("discount-section-wrapper").style.display="none";let cartFreeProduct=getFreeItemInCart([8565727133942,8565735031030],cartData);if(cartFreeProduct){var button=document.querySelector("button[data-action-change-gift]");if(button){button.click(),document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show");return}await removeFreeProduct(cartFreeProduct.variant_id),await removeDiscount()}document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show");return}availableCouponsWrapper.innerHTML="";var coupon={title:couponData.discount_name,discountAmount},couponContent=generateCouponAppliedtab(coupon),newDiv=document.createElement("div");newDiv.className="tab-card",newDiv.innerHTML=couponContent,availableCouponsWrapper.appendChild(newDiv),document.getElementById("coupons-na-wrapper").style.display="none",availableCouponsWrapper.style.display="block",generateDiscountTabMarkup(discountType,couponData,discountAmount,cartData),document.getElementById("discount-section-wrapper").style.display="block"}catch(err2){console.log({err:err2}),console.error(err2)}finally{document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show")}}async function applyCoupon(couponData){document.getElementById("coupons-na-wrapper").style.pointerEvents="all",document.getElementById("spinner-container").removeAttribute("hidden"),document.getElementById("spinner-container").classList.add("spinner-show"),searchedCoupon=couponData;var cartData=await getCartData(),discountType=getDiscountType(couponData),discountAmount="";if(discountType==couponTypes.BUYXGETY?discountAmount=couponData.buy_get_free_prereqisite.free_products.length>0?getFreeProductsDiscount(couponData,cartData):couponData.entitled_product_ids.length>0?getFreeProductOfferData(couponData,cartData):getDiscountedPricePD(couponData,cartData):[couponTypes.PERCENTAGE,couponTypes.FIXED].includes(discountType)&&(discountAmount=getDiscountedPriceOD(couponData,cartData)),discountAmount==0){document.getElementById("coupon-apply-errors").innerText="Coupon code is not applicable",document.getElementById("discount-section-wrapper").style.display="none",document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show");return}var availableCouponsWrapper=document.getElementById("available-coupons-wrapper");availableCouponsWrapper.innerHTML="";var coupon={title:couponData.discount_name,discountAmount},couponContent=generateCouponAppliedtab(coupon),newDiv=document.createElement("div");newDiv.className="tab-card",newDiv.innerHTML=couponContent,availableCouponsWrapper.appendChild(newDiv),document.cookie=`discount_code=${couponData.discount_name};path=/`,document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show"),document.getElementById("cart-item-container").style.display="block",document.querySelector(".cart-checkout-btn-wrapper").style.display="block",document.getElementById("cart-coupons-list-wrapper").style.display="none",availableCouponsWrapper.style.display="block",document.getElementById("coupons-na-wrapper").style.display="none",document.getElementById("discount-section-wrapper").style.display="block",generateDiscountTabMarkup(discountType,couponData,discountAmount,cartData)}function generateDiscountTabMarkup(discountType,couponData,discountAmount,cartData){if(discountType==couponTypes.BUYXGETY){let tempCalc=0,coupon_title="",temp=`<div class="t4s-row t4s-gx-5 t4s-gy-0 t4s-align-items-center t4s-justify-content-between pb-12 minline0">
              <div class="t4s-col-auto">
                <h3 class="t4s-discount-price-title">
                  Coupon discount
                  <span class="t4s-coupon-title">
                    (${couponData.discount_name})
                  </span>
                </h3>
              </div>
              <div class="t4s-col-auto t4s-text-right">
                <div class="total_discount_price">
                  <h3 class="total_discount_amt">-\u20B9${discountAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}</h3>
                </div>
              </div>
          </div>`;document.getElementById("discount-section-wrapper").innerHTML="",document.getElementById("discount-section-wrapper").innerHTML=temp;let fPrice=(parseFloat(cartData.totalPrice/100)-parseFloat(discountAmount)).toFixed(2);document.getElementsByClassName("t4s-cart__totalPrice")[0].innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`,document.getElementById("finalPriceCheckoutBtn").innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`}else{let coupon_amt=0,temp=`<div class="t4s-row t4s-gx-5 t4s-gy-0 t4s-align-items-center t4s-justify-content-between pb-12 minline0" data-cart-discounts>
                  <div class="t4s-col-auto">
                      <h3 class="t4s-discount-price-title coupon-cart-level-discount-price">
                         Coupon discount
                        <span class="t4s-coupon-title coupon-cart-level-title">(${couponData.discount_name})</span>
                      </h3>
                    </div>
                    <div class="t4s-col-auto t4s-text-right">
                      <div class="total_discount_price">
                        <h3 class="total_discount_amt coupon-cart-level-total-amount">
                          -\u20B9${discountAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}
                        </h3>
                      </div>
                    </div>
                    </div>`;document.getElementById("discount-section-wrapper").innerHTML="",document.getElementById("discount-section-wrapper").innerHTML=temp;let fPrice=(parseFloat(cartData.totalPrice/100)-parseFloat(discountAmount)).toFixed(2);document.getElementsByClassName("t4s-cart__totalPrice")[0].innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`,document.getElementById("finalPriceCheckoutBtn").innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`}return 1}function handleCouponClick(couponToApply){var couponData=getCouponData(couponToApply);applyCoupon(couponData)}async function removeAppliedCoupon(e){try{document.cookie="discount_code=COUPONTEST123;path=/",localStorage.setItem("couponData",JSON.stringify({}));let cartData=await getCartData(),fPrice=parseFloat(cartData.totalPrice/100).toFixed(2);if(document.getElementsByClassName("t4s-cart__totalPrice")[0].innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`,document.getElementById("finalPriceCheckoutBtn").innerText=`\u20B9${fPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g,",")}`,e.getAttribute("data-coupon-title")==freeGiftCoupon){let cartFreeProduct=getFreeItemInCart([8565727133942,8565735031030],cartData);cartFreeProduct&&removeFreeProduct(cartFreeProduct.variant_id)}document.getElementById("discount-section-wrapper").style.display="none",document.getElementById("spinner-container").setAttribute("hidden",""),document.getElementById("spinner-container")&&document.getElementById("spinner-container").classList.remove("spinner-show"),document.getElementById("available-coupons-wrapper").style.display="none",document.getElementById("coupons-na-wrapper").style.display="block"}catch(e2){console.error("Error:",e2)}}function handleRemoveClick(event){document.getElementById("spinner-container").removeAttribute("hidden"),document.getElementById("spinner-container").classList.add("spinner-show"),removeAppliedCoupon(event).catch(e=>{console.error("Error:",e)})}async function showCouponsList(){try{document.getElementById("coupons-na-wrapper").style.pointerEvents="none",await generateCouponListHtml(),document.getElementById("cart-item-container").style.display="none",document.querySelector(".cart-checkout-btn-wrapper").style.display="none",document.getElementById("coupon-apply-errors").innerText="",document.getElementById("cart-coupons-list-wrapper").style.display="block"}catch(error){console.error("Error occurred while showing coupons list:",error)}}function showMiniCart(){document.getElementById("coupons-na-wrapper").style.pointerEvents="visible",document.getElementById("cart-item-container").style.display="block",document.querySelector(".cart-checkout-btn-wrapper").style.display="block",document.getElementById("cart-coupons-list-wrapper").style.display="none"}async function generateCouponListHtml(){try{const validCouponsContainer=document.getElementById("valid_coupons_list"),invalidCouponsContainer=document.getElementById("inValid_coupons_list");validCouponsContainer.innerHTML="",invalidCouponsContainer.innerHTML="";var cartData=await getCartData();discountCoupons.forEach(async couponData=>{var isValid=validateCoupon(couponData,cartData),coupon={title:couponData.discount_name,description:couponData.description,subtext:getCouponSubText(couponData,cartData),isValid},couponInnerHtml=generateCouponCardHtml(coupon),newDiv=document.createElement("div");newDiv.className="coupon-card",newDiv.innerHTML=couponInnerHtml,isValid?validCouponsContainer.appendChild(newDiv):invalidCouponsContainer.appendChild(newDiv)})}catch(error){console.error("Error generating coupon list:",error)}}var{base_url,email,password}=env;async function authenticateApi(email2,password2){const url=`${base_url}/login`,payload={email:email2,password:password2};try{const response=await fetch(url,{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify(payload)});if(!response.ok)throw new Error(`HTTP error! Status: ${response.status}`);const data=await response.json();return{token:data.token,tokenExpirationTime:data.exp}}catch(error){throw error}}function isExpOver(expirationTime){const expDate=new Date(expirationTime),currentTime=new Date;return expDate instanceof Date&&!isNaN(expDate)?currentTime>expDate:!0}async function fetchCouponData(discApiAuth,couponToApply){try{var encodedDiscountTitle=encodeURIComponent(couponToApply).trim(),queryParams=`title=${encodedDiscountTitle}`,queryString=new URLSearchParams(queryParams).toString(),url=`https://api.vaaree.com/api/discount_info?${queryParams}`,headers={Authorization:discApiAuth,Cookie:discApiCookie},response=await fetch(url,{method:"GET",headers}),data=await response.json();return data}catch(error){console.error(error.message)}}async function authAndFetchCouponData(couponToApply){try{const token=localStorage.getItem("authToken"),expirationTime=localStorage.getItem("tokenExpirationTime");if(!token||!expirationTime||isExpOver(expirationTime)){const authResponse=await authenticateApi(email,password),authToken=authResponse.token,tokenExpirationTime=authResponse.tokenExpirationTime;localStorage.setItem("authToken",authToken),localStorage.setItem("tokenExpirationTime",tokenExpirationTime);var couponData=await fetchCouponData(authToken,couponToApply);return couponData}else{var couponData=await fetchCouponData(token,couponToApply);return couponData}}catch(e){console.log("Error",e)}}async function getCouponDataFromApi(couponTitle){var couponData={},errorText="",apiCouponData2=await authAndFetchCouponData(couponTitle);return apiCouponData2.errors?errorText=apiCouponData2.errors:couponData=apiCouponData2.discount,{couponData,errorText}}async function getCouponByTitle(couponTitle){var couponFormErrors=document.getElementById("coupon-apply-errors");if(couponTitle){var{couponData,errorText}=await getCouponDataFromApi(couponTitle);couponData?(localStorage.setItem("couponData",JSON.stringify(couponData)),searchedCoupon=couponData,couponFormErrors.innerText="",applyCoupon(couponData)):(localStorage.setItem("couponData",JSON.stringify({})),couponFormErrors.innerText=apiCouponData.errors)}else localStorage.setItem("couponData",JSON.stringify({})),couponFormErrors.innerText="Enter valid coupon"}async function verifyAndApplyCoupon(){try{var couponFormInput=document.getElementById("coupon-input-cart"),couponTitle=couponFormInput.value.trim();getCouponByTitle(couponTitle)}catch(err2){console.log({err:err2})}}async function updateDiscountsOnCartClose(){var docCookie=document.cookie,couponToApply=docCookie.split("; ").find(row=>row.startsWith("discount_code="))?.split("=")[1];!couponToApply||couponToApply=="undefined"||couponToApply=="COUPONTEST123"?await removeDiscount():await applyDiscount(couponToApply)}async function init(){var docCookie=document.cookie,couponToApply=docCookie.split("; ").find(row=>row.startsWith("discount_code="))?.split("=")[1],cartData=await getCartData();if(couponToApply)await applyDiscount(couponToApply);else{var cartData=await getCartData(),filteredItems=cartData.cartItems.filter(cartItem=>cartItem.discounts.length>0);filteredItems.length>0&&(couponToApply=filteredItems[0].discounts[0].title,document.cookie=`discount_code=${couponToApply};path=/;`,await applyDiscount(couponToApply))}}init();
//# sourceMappingURL=/cdn/shop/t/130/assets/coupons-helpers.js.map?v=35049736454262732771714801446