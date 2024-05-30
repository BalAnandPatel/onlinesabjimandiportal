<?php
include "include/header.php";
?>

<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <section id="shopify-section-template--16885348630774__main" class="shopify-section t4s-section t4s-section-main t4s-main-cart">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/main-cart.aio.min.css" media="all">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/main-cart-page-new.css" media="all">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/mobile-view-cart-item-page.css" media="all">
        <svg class="t4s-d-none">
            <symbol id="icon-cart-remove" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </symbol>
            <symbol id="icon-cart-edit" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </symbol>
            <symbol id="icon-cart-tag" viewBox="0 0 448 512">
                <path d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"></path>
            </symbol>
            <symbol id="icon-cart-spinner" viewBox="0 0 66 66">
                <circle class="t4s-path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
            </symbol>
            <symbol id="icon-cart-check" viewBox="0 0 448 512">
                <path d="M443.3 100.7C449.6 106.9 449.6 117.1 443.3 123.3L171.3 395.3C165.1 401.6 154.9 401.6 148.7 395.3L4.686 251.3C-1.562 245.1-1.562 234.9 4.686 228.7C10.93 222.4 21.06 222.4 27.31 228.7L160 361.4L420.7 100.7C426.9 94.44 437.1 94.44 443.3 100.7H443.3z"></path>
            </symbol>
            <symbol id="icon-cart-selected" viewBox="0 0 24 24">
                <path d="M9 20l-7-7 3-3 4 4L19 4l3 3z"></path>
            </symbol>
        </svg>
        <div class="t4s-container">


            <div class="t4s-cookie-message t4s-dn">Enable cookies to use the shopping cart</div>
            <div class="cart-page-heading-desktop cart-item-info-label">
                Your Cart (<span><?= $count_of_cart['items'] ?></span>)
            </div>

            <?php
            if ($count_of_cart['items'] > 0) {
            ?>


                <!-- <form data-cart-content="" data-cart-wrapper="" action="account/cart.php" method="post" novalidate="" class="t4s-cartPage__form t4s-pr t4s-oh"> -->
                <div class="t4s-cartPage__form t4s-pr t4s-oh">
                    <div class="cart-page-product-list">
                        <input type="hidden" data-cart-attr-rm="" name="attributes[collection_items_per_row]" value="">
                        <div class="t4s-cartPage__header">
                            <div class="t4s-row t4s-align-items-center cart-item">
                                <div class="t4s-col-item col-width-auto">Products Selected</div>
                                <div class="cart-item-data">
                                    <div class="t4s-text-center">mrp</div>
                                    <div class="t4s-text-center t4s-text-lg-end cart-item-final-price last-col">Final Price</div>
                                </div>
                            </div>
                        </div>
                        <div class="t4s-cartPage__items t4s_ratioadapt t4s-product">
                            <div class="cart-page-heading-mobile">
                                <span class="t4s-back-to-shop" onclick="window.history.go(-1); return false;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 17 14" fill="none">
                                        <rect x="1" y="6.60156" width="16" height="0.8" rx="0.4" fill="black"></rect>
                                        <path d="M7.40039 1L1.40039 7L7.40039 13" stroke="black" stroke-linejoin="round"></path>
                                    </svg>
                                    <span class="cart-item-info-label cart-quantity-text underlined-text">Continue Shopping</span>
                                </span>
                                <span class="cart-item-info-label cart-quantity-text">
                                    Your Cart
                                    (<span><?= $count_of_cart['items'] ?></span> items)
                                </span>
                            </div>

                            <link href="cdn/shop/t/130/assets/mobile-view-cart-item-page.css" rel="stylesheet" type="text/css" media="all">


                            <?php
                            $list = mysqli_query($con, "
                                        select 
                                        products.id,
                                        cart.id as cartId,
                                        cart.quantity,
                                        products.productName, 
                                        products.productImage1,
                                        products.productPrice,
                                        products.productPriceBeforeDiscount,
                                        products.shippingCharge
                                        from products left join 
                                        cart as cart 
                                        on products.id = cart.productId 
                                        where `userId` = '" . $_SESSION['id'] . "'");
                            $cart_mrp = 0;
                            $cart_new_mrp = 0;
                            $cart_shipping = 0;
                            ?>
                            <?php
                            while ($row = mysqli_fetch_array($list)) {
                                $cart_mrp += $row['productPriceBeforeDiscount'] * $row['quantity'];
                                $cart_new_mrp += $row['productPrice'] * $row['quantity'];
                                $cart_shipping += $row['shippingCharge'];
                            ?>

                                <div class="t4s-page_cart__item">
                                    <div class="t4s-row t4s-gx-md-30 t4s-gx-15 cart-item">
                                        <div class="t4s-col-12 t4s-col-md-12 t4s-col-lg-5 t4s-col-item cart-product-info">
                                            <div class="t4s-page_cart__infos t4s-d-flex">

                                                <a href="products.php?pid=<?php echo $row['id']; ?>" class="t4s-page_cart__img t4s-pr t4s-oh t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="background: url(admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>);--aspect-ratioapt:1.0">
                                                    <img loading="lazy" class="lazyautosizes lazyloadt4sed" width="120" height="120" src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" alt="">
                                                    <div class="t4s-cart-ld__bar t4s-pe-none t4s-dn" hidden=""><span>
                                                            <svg width="16" height="16" hidden="" class="t4s-cart-spinner" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                                <circle class="t4s-path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                                            </svg>
                                                            <svg class="t4s-cart-check" viewBox="0 0 448 512" width="16" height="16" hidden="">
                                                                <use href="#icon-cart-check"></use>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </a>

                                                <div class="t4s-page_cart__info">
                                                    <div class="cart_page_title"><?php echo $row['productName']; ?></div>
                                                    <div class="t4s-page_cart__actions t4s-align-items-center t4s-d-flex">
                                                        <span class="cart-item-info-label">Qty :</span>
                                                        <form action="account/cart.php?update_cart=true" name="update_cart" method="post">
                                                            <span class="t4s-quantity-wrapper t4s-quantity-cart-item">
                                                                <input readonly type="hidden" class="t4s-quantity-input" name="id" value="<?= $row['cartId'] ?>">
                                                                <button type="button" class="t4s-quantity-selector is--minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); this.form.submit()" aria-label="ATC reduce quantity">
                                                                    <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                                                        <path d="M10 0v2H0V0z" fill="currentColor"></path>
                                                                    </svg>
                                                                </button>
                                                                <input readonly type="number" class="t4s-quantity-input" step="1" min="1" max="50" name="quantity" value="<?= $row['quantity'] ?>" size="4" pattern="[0-9]*" inputmode="numeric" aria-label="ATC quantity">
                                                                <button type="button" class="t4s-quantity-selector is--plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp(); this.form.submit()" aria-label="ATC increase quantity">
                                                                    <svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                                                        <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </span>
                                                        </form>
                                                    </div>

                                                    <div class="mobile-view-right-block">
                                                        <p>
                                                            <a href="account/cart.php?pid=<?php echo $row['cartId']; ?>&action=delete-item" class="t4s-page_cart__remove t4s-tooltip-actived" alt="Remove this item">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                    <path d="M6.6665 1.33203L5.99984 1.9987H2.6665V3.33203H3.33317V13.332C3.33317 13.6802 3.46072 14.0351 3.71208 14.2865C3.96343 14.5378 4.31836 14.6654 4.6665 14.6654H11.3332C11.6813 14.6654 12.0362 14.5378 12.2876 14.2865C12.539 14.0351 12.6665 13.6802 12.6665 13.332V3.33203H13.3332V1.9987H9.99984L9.33317 1.33203H6.6665ZM4.6665 3.33203H11.3332V13.332H4.6665V3.33203ZM5.99984 4.66536V11.9987H7.33317V4.66536H5.99984ZM8.6665 4.66536V11.9987H9.99984V4.66536H8.6665Z" fill="black"></path>
                                                                </svg>
                                                                Remove from cart
                                                            </a>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="mobile-view-right-block">
                                            <!-- MRP -->
                                            <div class="t4s-text-lg-center t4s-text-md-center t4s-text-end t4s-cart_meta_prices_wrap">
                                                <div class="t4s-cart_meta_prices">
                                                    <div class="t4s-cart_price">
                                                        <div class="vertical-alignment">
                                                            <del>MRP ₹<?php echo $row['productPriceBeforeDiscount']; ?></del>
                                                        </div>
                                                        <ins>₹<?php echo $row['productPrice'] ?></ins>
                                                        <br>
                                                        <ins>Total Price ₹<?php echo $row['productPrice'] * $row['quantity']; ?></ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cart-item-data">
                                            <div class="t4s-text-lg-center t4s-text-md-center t4s-text-start t4s-cart_meta_prices_wrap">
                                                <div class="t4s-cart_meta_prices">
                                                    <div class="t4s-cart_price">
                                                        ₹<?php echo $row['productPrice']; ?>
                                                        <small><del>₹<?php echo $row['productPriceBeforeDiscount']; ?></del></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="t4s-text-lg-end t4s-text-md-center t4s-text-start cart-item-final-price">
                                                <span class="t4s-cart-item-price">₹<?php echo $row['productPrice'] * $row['quantity']; ?>
                                                </span>
                                            </div>
                                            <div class=" t4s-text-md-center t4s-text-start delete-cart-item">
                                                <a href="account/cart.php?pid=<?php echo $row['cartId']; ?>&action=delete-item" class="t4s-page_cart__remove t4s-tooltip-actived" alt="Remove this item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M6.6665 1.33203L5.99984 1.9987H2.6665V3.33203H3.33317V13.332C3.33317 13.6802 3.46072 14.0351 3.71208 14.2865C3.96343 14.5378 4.31836 14.6654 4.6665 14.6654H11.3332C11.6813 14.6654 12.0362 14.5378 12.2876 14.2865C12.539 14.0351 12.6665 13.6802 12.6665 13.332V3.33203H13.3332V1.9987H9.99984L9.33317 1.33203H6.6665ZM4.6665 3.33203H11.3332V13.332H4.6665V3.33203ZM5.99984 4.66536V11.9987H7.33317V4.66536H5.99984ZM8.6665 4.66536V11.9987H9.99984V4.66536H8.6665Z" fill="black"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <div class="t4s-cartPage__footer">
                        <div class="cart-page-checkout">
                            <link href="cdn/shop/t/130/assets/main-cart-checkout.css" rel="stylesheet" type="text/css" media="all">

                            <!-- Heading -->
                            <div class="cart-checkout-heading">Cart Summary</div>
                            <div class="checkout-note shipping-estimate" id="shipping-estimate-date"></div>

                            <div>
                                <!-- Price Total -->
                                <div class="card-col first-item-border">
                                    <div class="checkout-label-normal">Item Total <span class="label-sub-text">(MRP)</span></div>
                                    <div class="checkout-label-normal">
                                        ₹ <?= $cart_mrp; ?>
                                    </div>
                                </div>

                                <!-- Discount -->
                                <div class="card-col">
                                    <div class="checkout-label-normal mobile-text-highlighted">Discount from MRP</div>
                                    <div class="checkout-label-normal mobile-text-highlighted">
                                        <div class="checkout-label-highlighted">-₹<?= $cart_mrp - $cart_new_mrp; ?></div>
                                    </div>
                                </div>
                                <!-- Discount -->
                                <div class="card-col">
                                    <div class="checkout-label-normal mobile-text-highlighted">MRP after discount</div>
                                    <div class="checkout-label-normal mobile-text-highlighted">
                                        <div class="checkout-label-highlighted">₹<?= $cart_new_mrp; ?></div>
                                    </div>
                                </div>
                                <!-- Shipping -->
                                <div class="card-col">
                                    <div class="checkout-label-normal mobile-text-highlighted">
                                        Delivery Charges
                                    </div>
                                    <div class="checkout-label-normal mobile-text-highlighted">
                                        <span class="checkout-label-highlighted">₹<?= $cart_shipping; ?></span>
                                    </div>
                                </div>

                                <!-- Final Amount -->
                                <div class="card-col final-amount">
                                    <div class="checkout-label-normal">Final Amount <span class="label-sub-text">(Tax Included)</span></div>
                                    <div class="t4s-cart__totalPrice checkout-label-normal">
                                        ₹<?= $cart_new_mrp + $cart_shipping ?>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function calculateEstimateDeliveryDate() {
                                    const today = new Date();
                                    const currentHour = today.getHours();
                                    const cutOffHour = 16
                                    const dateEnd = 5;

                                    const daysToAdd = currentHour < cutOffHour ? parseInt(dateEnd) : parseInt(dateEnd) + 1;
                                    const millisecondsInDay = 24 * 60 * 60 * 1000;
                                    let targetDate = new Date(today.getTime() + daysToAdd * millisecondsInDay);

                                    //Exclude Sundays
                                    if (targetDate.getDay() === 0) {
                                        targetDate = new Date(targetDate.getTime() + 1 * millisecondsInDay);
                                    }

                                    return targetDate;
                                }

                                const result = calculateEstimateDeliveryDate();
                                const estimatedDeliveryDateElement = document.getElementById("shipping-estimate-date");

                                const formattedDate = result.toLocaleDateString('en-US', {
                                    day: '2-digit',
                                    month: 'short',
                                    year: 'numeric'
                                });

                                const dateParts = formattedDate.split(" ")
                                const estimatedDeliverDay = dateParts[1].replace(",", "");
                                const estimatedDeliveryMonth = dateParts[0];
                                const estimatedDeliveryYear = dateParts[2]
                                const estimatedDeliveryDate = `${estimatedDeliverDay} ${estimatedDeliveryMonth} ${estimatedDeliveryYear}`;

                                estimatedDeliveryDateElement.textContent = "Estimated Delivery Date : " + estimatedDeliveryDate;
                            </script>
                            <div class="t4s-btn-group__checkout-update">
                                <a href="account/checkout.php" name="checkout" class="t4s-btn__checkout t4s-btn t4s-btn-base t4s-btn-style-default t4s-btn-size-large t4s-btn-color-primary t4s-btn-effect-default t4s-w-100 t4s-justify-content-center t4s-truncate">
                                    Continue To Checkout
                                </a>
                                <!-- <form action="payment/pay.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                                    <input type="hidden" name="amount" value="<?= $cart_new_mrp + $cart_shipping ?>" autocomplete="off" required>
                                    <input type="hidden" name="name" value="<?php echo $_SESSION['username']; ?>" readonly>
                                    <input type="hidden" name="contact" value="<?php echo $_SESSION['contact']; ?>" readonly>
                                    <input type="hidden" name="email" value="<?php echo $_SESSION['login']; ?>" readonly>
                                    <button type="submit" name="checkout" class="t4s-btn__checkout t4s-btn t4s-btn-base t4s-btn-style-default t4s-btn-size-large t4s-btn-color-primary t4s-btn-effect-default t4s-w-100 t4s-justify-content-center t4s-truncate">
                                        Continue To Checkout
                                    </button>
                                </form> -->


                                <!-- <button
                            type="button"
                            id="checkout3"
                            onclick="handleFloCheckoutBtn()"
                            class="checkout-btn-yellow t4s-btn__checkout t4s-btn-effect-default t4s-w-100 t4s-justify-content-center t4s-truncate" name="checkout3"
                          >
                            Continue To Checkout
</button>  -->
                            </div>
                            <div class="checkout-note">Coupon codes can be applied in the next page</div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->



            <?php } else { ?>

                <div class="t4s-mini_cart__emty t4s-text-center">
                    <svg id="icon-cart-emty" widht="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M263.4 103.4C269.7 97.18 279.8 97.18 286.1 103.4L320 137.4L353.9 103.4C360.2 97.18 370.3 97.18 376.6 103.4C382.8 109.7 382.8 119.8 376.6 126.1L342.6 160L376.6 193.9C382.8 200.2 382.8 210.3 376.6 216.6C370.3 222.8 360.2 222.8 353.9 216.6L320 182.6L286.1 216.6C279.8 222.8 269.7 222.8 263.4 216.6C257.2 210.3 257.2 200.2 263.4 193.9L297.4 160L263.4 126.1C257.2 119.8 257.2 109.7 263.4 103.4zM80 0C87.47 0 93.95 5.17 95.6 12.45L100 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H158.2L172.8 352H496C504.8 352 512 359.2 512 368C512 376.8 504.8 384 496 384H160C152.5 384 146.1 378.8 144.4 371.5L67.23 32H16C7.164 32 0 24.84 0 16C0 7.164 7.164 0 16 0H80zM107.3 64L150.1 256H487.8L541.8 64H107.3zM128 456C128 425.1 153.1 400 184 400C214.9 400 240 425.1 240 456C240 486.9 214.9 512 184 512C153.1 512 128 486.9 128 456zM184 480C197.3 480 208 469.3 208 456C208 442.7 197.3 432 184 432C170.7 432 160 442.7 160 456C160 469.3 170.7 480 184 480zM512 456C512 486.9 486.9 512 456 512C425.1 512 400 486.9 400 456C400 425.1 425.1 400 456 400C486.9 400 512 425.1 512 456zM456 432C442.7 432 432 442.7 432 456C432 469.3 442.7 480 456 480C469.3 480 480 469.3 480 456C480 442.7 469.3 432 456 432z"></path>
                    </svg>
                    <h4 class="t4s-cart_page_heading">Your cart is empty.</h4>
                    <div class="t4s-cart_page_txt">
                        Before proceed to checkout you must add some products to your shopping cart.
                        <br>
                        You will find a lot of interesting products on our "Shop" page.
                    </div>
                    <p class="t4s-return-to-shop">
                        <a class="t4s-btn-cart__emty t4s-btn t4s-btn-base t4s-btn-style-default t4s-btn-color-primary t4s-btn-effect-default t4s-justify-content-center t4s-truncate" href="index.php">
                            Return To Shop
                        </a>
                    </p>
                </div>

            <?php } ?>

        </div>
        <script>
            window.cartT4SectionID = "template--16885348630774__main";
        </script>
    </section>
</main>


<?php
include "include/footer.php";
?>