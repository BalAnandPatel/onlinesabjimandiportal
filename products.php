<?php
include "include/header.php";
if (isset($_POST['submit'])) {
    $qty = $_POST['quality'];
    $price = $_POST['price'];
    $value = $_POST['value'];
    $name = $_POST['name'];
    $summary = $_POST['summary'];
    $review = $_POST['review'];
    mysqli_query($con, "insert into productreviews(productId,quality,price,value,name,summary,review) values('$pid','$qty','$price','$value','$name','$summary','$review')");
}
?>
<link href="cdn/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--16885347778806__breadcrumb" class="shopify-section t4s-section t4s-pr_breadcrumbs">
        <link href="cdn/shop/t/130/assets/breadcrumbs.aio.min.css" rel="stylesheet" type="text/css" media="all">
        <div class="breadcrumb_pr_wrap" style="--cl_bg:#ffffff;--cl_link:#222222">
            <div class="t4s-container">
                <div class="t4s-row t4s-align-items-center">
                    <div class="t4s-col t4s-col-item">

                        <nav class="t4s-pr-breadcrumb">
                            <a href="index.php" class="t4s-dib">Home</a><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" height="16" fill="currentColor" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M 12.96875 4.28125 L 11.53125 5.71875 L 21.8125 16 L 11.53125 26.28125 L 12.96875 27.71875 L 23.96875 16.71875 L 24.65625 16 L 23.96875 15.28125 Z"></path>
                            </svg><span>Mobile</span>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="shopify-section-template--16885347778806__main" class="shopify-section t4s-section t4s-section-main t4s-section-main-product t4s_tp_flickity">
        <link href="cdn/shop/t/130/assets/popup-styles.aio.min.css" rel="stylesheet" type="text/css" media="all">
        <?php
        $ret = mysqli_query($con, "select * from products where id='" . $_GET['pid'] . "' ");
        while ($rws = mysqli_fetch_array($ret)) {
        ?>


            <div class="t4s-container t4s-main-product__content is--layout_default t4s-product-media__two_columns t4s-product-thumb-size__medium">
                <div class="t4s-row">
                    <div class="t4s-col-item t4s-col-12 t4s-main-area">
                        <div data-product-featured="{&quot;id&quot;:&quot;8520322056438&quot;,&quot;isMainProduct&quot;:true, &quot;sectionId&quot;:&quot;template--16885347778806__main&quot;, &quot;disableSwatch&quot;:true, &quot;media&quot;: true,&quot;enableHistoryState&quot;: true, &quot;formID&quot;: &quot;#product-form-8520322056438template--16885347778806__main&quot;, &quot;removeSoldout&quot;:false, &quot;changeVariantByImg&quot;:true, &quot;isNoPick&quot;:false,&quot;hasSoldoutUnavailable&quot;:false,&quot;enable_zoom_click_mb&quot;:true,&quot;main_click&quot;:&quot;pswp&quot;,&quot;canMediaGroup&quot;:false,&quot;isGrouped&quot;:false,&quot;hasIsotope&quot;:true,&quot;available&quot;:true, &quot;customBadge&quot;:null, &quot;customBadgeHandle&quot;:null,&quot;dateStart&quot;:1713507353, &quot;compare_at_price&quot;:279500,&quot;price&quot;:279500, &quot;isPreoder&quot;:false, &quot;showFirstMedia&quot;:false, &quot;isSticky&quot;:true, &quot;isStickyMB&quot;:true, &quot;stickyShow&quot;:&quot;1&quot;, &quot;useStickySelect&quot;: false }" class="t4s-row t4s-row__product is-zoom-type__external" data-t4s-zoom-main="">

                            <div class="t4s-col-md-7 t4s-col-12 t4s-col-item t4s-product__media-wrapper badge-on_product">

                                <div class="t4s-row t4s-g-0" timeline="" hdt-reveal="slide-in">
                                    <div data-product-single-media-group="" class="t4s-col-12 t4s-col-item t4s-pr pdp-image-gallery-mobile">
                                        <div class="indicators"><span class="dots"></span><span class="dots"></span><span class="dots"></span><span class="dots"></span></div>
                                        <div data-media-sizes="4" data-t4s-gallery="" data-t4s-thumb-true="" data-main-media="" class="t4s-row t4s-g-10 t4s-slide-eff-fade flickityt4s isotopet4s isotopet4s-later carousel-disable-md t4s_ratioadapt t4s_position_8 t4s_contain t4s-flicky-slider t4s-slider-btn-true t4s-slider-btn-style-default t4s-slider-btn-round t4s-slider-btn-small t4s-slider-btn-cl-light t4s-slider-btn-vi-always t4s-slider-btn-hidden-mobile-false " data-isotopet4s-js="{&quot;transitionDuration&quot;: 0,&quot;itemSelector-&quot;:&quot;[data-main-slide]:not(.is--media-hide)&quot;,&quot;filter&quot;: &quot;[data-main-slide]:not(.is--media-hide)&quot;, &quot;layoutMode&quot;:&quot;packery&quot; }" data-flickityt4s-js="{&quot;cellSelector&quot;: &quot;[data-main-slide]:not(.is--media-hide)&quot;,&quot;isFilter&quot;:false,&quot;watchCSS&quot;: true,&quot;imagesLoaded&quot;: 0,&quot;adaptiveHeight&quot;: 1, &quot;contain&quot;: 1, &quot;groupCells&quot;: &quot;100%&quot;, &quot;dragThreshold&quot; : 6, &quot;cellAlign&quot;: &quot;left&quot;,&quot;wrapAround&quot;: true,&quot;prevNextButtons&quot;: true,&quot;percentPosition&quot;: 1,&quot;pageDots&quot;: false, &quot;autoPlay&quot; : 0, &quot;pauseAutoPlayOnHover&quot; : true , &quot;t4sid&quot;: &quot;template--16885347778806__main&quot;, &quot;thumbNav&quot;: false, &quot;thumbVertical&quot;: false, &quot;isMedia&quot;: true }" id="pdp-media-gridAZ">

                                            <div style="width: 100%;" class=" mySlides t4s-col-md-6 t4s-col-12 t4s-col-item t4s-product__media-item " data-media-id="33152436109558" data-nt-media-id="template--16885347778806__main-33152436109558" data-media-type="image" data-grname="" data-grpvl="">
                                                <div data-t4s-gallery--open="" class="t4s_ratio t4s-product__media" style="--aspect-ratioapt:1.0;--mw-media:800px">
                                                    <noscript><img src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage1']); ?>" alt="" width="1090" height="1090" loading="lazy" class="t4s-img-noscript" sizes="(min-width: 1500px) 1500px, (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"></noscript>
                                                    <img loading="lazy" class="t4s-lz--fadeIn lazyautosizes lazyloadt4sed" src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage1']); ?>" width="800" height="800" alt="">
                                                    <span class="lazyloadt4s-loader"></span>
                                                </div>
                                            </div>
                                            <div style="width: 100%;" class="mySlides t4s-col-md-6 t4s-col-12 t4s-col-item t4s-product__media-item " data-media-id="33152436240630" data-nt-media-id="template--16885347778806__main-33152436240630" data-media-type="image" data-grname="" data-grpvl="">
                                                <div data-t4s-gallery--open="" class="t4s_ratio t4s-product__media" style="--aspect-ratioapt:1.0;--mw-media:800px">
                                                    <noscript><img src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage2']); ?>" alt="" width="1090" height="1090" loading="lazy" class="t4s-img-noscript" sizes="(min-width: 1500px) 1500px, (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"></noscript>
                                                    <img loading="lazy" class="t4s-lz--fadeIn lazyautosizes lazyloadt4sed" src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage2']); ?>" width="800" height="800" alt="">
                                                    <span class="lazyloadt4s-loader"></span>
                                                </div>
                                            </div>
                                            <div style="width: 100%;" class="mySlides t4s-col-md-6 t4s-col-12 t4s-col-item t4s-product__media-item " data-media-id="33152435978486" data-nt-media-id="template--16885347778806__main-33152435978486" data-media-type="image" data-grname="" data-grpvl="">
                                                <div data-t4s-gallery--open="" class="t4s_ratio t4s-product__media" style="--aspect-ratioapt:1.0;--mw-media:800px">
                                                    <noscript><img src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage3']); ?>" alt="" width="1090" height="1090" loading="lazy" class="t4s-img-noscript" sizes="(min-width: 1500px) 1500px, (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw - 4rem)"></noscript>
                                                    <img loading="lazy" class="t4s-lz--fadeIn lazyautosizes lazyloadt4sed" src="admin/productimages/<?php echo htmlentities($rws['id']); ?>/<?php echo htmlentities($rws['productImage3']); ?>" width="800" height="800" alt="">
                                                    <span class="lazyloadt4s-loader"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <div style="margin:8px;" class="t4s-d-block t4s-align-items-center">
                                                <button class="t4s-pr t4s-loadmore-btn t4s-btn-loading__svg t4s-btn t4s-btn-base t4s-btn-style-outline t4s-btn-size-large t4s-btn-icon-false t4s-btn-color-primary t4s-btn-effect-rectangle-out t4s-lm-onscroll-init" onclick="plusDivs(-1)">&#10094; Previous</button>
                                                <button class="t4s-pr t4s-loadmore-btn t4s-btn-loading__svg t4s-btn t4s-btn-base t4s-btn-style-outline t4s-btn-size-large t4s-btn-icon-false t4s-btn-color-primary t4s-btn-effect-rectangle-out t4s-lm-onscroll-init" onclick="plusDivs(1)">Next &#10095;</button>
                                            </div>
                                        </center>
                                        <link href="cdn/shop/t/130/assets/single-pr-badge.css" rel="stylesheet" media="all" onload="this.media='all'">
                                        <div data-product-single-badge="" data-sort="sale,new,soldout,preOrder,custom" class="t4s-single-product-badge t4s-pa t4s-pe-none t4s-op-0"></div>
                                    </div>
                                </div>
                            </div>


                            <div data-t4s-zoom-info="" class="t4s-col-md-5 t4s-col-12 t4s-product__info-wrapper t4s-pr">
                                <div id="product-zoom-template--16885347778806__main" class="t4s-product__zoom-wrapper"></div>
                                <div id="ProductInfo-template--template--16885347778806__main__main" class="t4s-product__info-container t4s-product__info-container--sticky" timeline="" hdt-reveal="slide-in">


                                    <div class="t4s-product__title t4s-col-item" style="--title-family:var(--font-family-1);--title-style:none;--title-size:13px;--title-weight:300;--title-line-height:1;--title-spacing:0px;--title-color:#505050;--title-color-hover:#505050;">
                                        <div class="title_reviews_container">
                                            <h1 id="pdp-product-title"><?php echo htmlentities($rws['productName']); ?></h1>
                                            <div class="ratings_container">
                                                <a href="#t4s-tab-reviewtemplate--16885347778806__main" data-go-id="#t4s-tab-reviewtemplate--16885347778806__main" class="t4s-product__review t4s-d-inline-block">
                                                    <div class="jdgm-widget-desktop">


                                                        <div style="" class="jdgm-widget jdgm-preview-badge" data-id="8520322056438" data-template="product" data-auto-install="false">
                                                            <div id="judgeme_preview_badge-average-rating">
                                                                <div style="display:none" class="jdgm-prev-badge" data-average-rating="0.00" data-number-of-reviews="0" data-number-of-questions="0">
                                                                    <span class="jdgm-prev-badge__stars" data-score="0.00" tabindex="0" aria-label="0.00 stars" role="button">
                                                                        <span class="jdgm-star jdgm--off"></span>
                                                                        <span class="jdgm-star jdgm--off"></span>
                                                                        <span class="jdgm-star jdgm--off"></span>
                                                                        <span class="jdgm-star jdgm--off"></span>
                                                                        <span class="jdgm-star jdgm--off"></span>
                                                                    </span>
                                                                    <span class="jdgm_average_rating">0.0</span>
                                                                    <span class="jdgm_separator">|</span>
                                                                    <span class="jdgm_total_reviews">0 Reviews</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var htmlString = "\n    \u003cdiv style='display:none' class='jdgm-prev-badge' data-average-rating='0.00' data-number-of-reviews='0' data-number-of-questions='0'\u003e \u003cspan class='jdgm-prev-badge__stars' data-score='0.00' tabindex='0' aria-label='0.00 stars' role='button'\u003e \u003cspan class='jdgm-star jdgm--off'\u003e\u003c\/span\u003e\u003cspan class='jdgm-star jdgm--off'\u003e\u003c\/span\u003e\u003cspan class='jdgm-star jdgm--off'\u003e\u003c\/span\u003e\u003cspan class='jdgm-star jdgm--off'\u003e\u003c\/span\u003e\u003cspan class='jdgm-star jdgm--off'\u003e\u003c\/span\u003e \u003c\/span\u003e \u003cspan class='jdgm-prev-badge__text'\u003e No reviews \u003c\/span\u003e \u003c\/div\u003e\n";
                                                            var parser = new DOMParser();
                                                            var elementDiv = document.getElementById('judgeme_preview_badge-average-rating');
                                                            var doc = parser.parseFromString(htmlString, "text/html");
                                                            var badgeElement = doc.querySelector(".jdgm-prev-badge");
                                                            if (badgeElement) {
                                                                var averageRating = parseFloat(badgeElement.dataset.averageRating).toFixed(1);
                                                                var totalReviews = badgeElement.dataset.numberOfReviews;
                                                                if (totalReviews == 0) {
                                                                    document.querySelector('.ratings_container').style.height = 12;
                                                                }
                                                                var totalReviewsSpan = badgeElement.querySelector(".jdgm-prev-badge__text");
                                                                badgeElement.removeChild(totalReviewsSpan);
                                                                var totalReviewsSpanNew = document.createElement("span");
                                                                totalReviewsSpanNew.classList.add("jdgm_total_reviews");
                                                                totalReviewsSpanNew.textContent = totalReviews + " Reviews";
                                                                var averageRatingSpan = document.createElement("span");
                                                                averageRatingSpan.classList.add("jdgm_average_rating");
                                                                averageRatingSpan.textContent = averageRating;
                                                                var separatorElem = document.createElement("span");
                                                                separatorElem.classList.add("jdgm_separator");
                                                                separatorElem.textContent = "|";
                                                                badgeElement.appendChild(averageRatingSpan);
                                                                badgeElement.appendChild(separatorElem);
                                                                badgeElement.appendChild(totalReviewsSpanNew);
                                                                elementDiv.appendChild(badgeElement);
                                                            }
                                                        </script>


                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <span id="product-share-icon"><svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg" iconsize="17" class="sc-bcXHqe kMXUYk">
                                                <path fill="#fff" d="M.947.979h16v16h-16z"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.489 3.912c0-1.62 1.266-2.933 2.829-2.933 1.562 0 2.828 1.313 2.828 2.933 0 1.62-1.266 2.933-2.828 2.933a2.784 2.784 0 0 1-2.175-1.057L7.071 8.303a3.007 3.007 0 0 1 .295 1.866l3.643 2.18a2.797 2.797 0 0 1 2.309-1.238c1.562 0 2.828 1.314 2.828 2.934s-1.266 2.933-2.828 2.933c-1.563 0-2.829-1.313-2.829-2.933 0-.172.014-.34.042-.504l-3.636-2.176a2.798 2.798 0 0 1-2.32 1.254c-1.562 0-2.828-1.314-2.828-2.934s1.266-2.933 2.828-2.933a2.75 2.75 0 0 1 1.674.568l4.33-2.673a3.042 3.042 0 0 1-.09-.735Zm4.423 0c0-.914-.714-1.654-1.594-1.654-.88 0-1.595.74-1.595 1.653s.714 1.654 1.595 1.654c.88 0 1.594-.74 1.594-1.654ZM6.17 9.684c0-.913-.714-1.653-1.595-1.653-.88 0-1.594.74-1.594 1.653s.714 1.653 1.594 1.653c.88 0 1.595-.74 1.595-1.653Zm7.148 2.706c.88 0 1.594.74 1.594 1.653s-.714 1.654-1.594 1.654c-.88 0-1.595-.74-1.595-1.654 0-.913.714-1.653 1.595-1.653Z" fill="#353543"></path>
                                                <mask id="share_svg__a" maskUnits="userSpaceOnUse" x="1" y="0" width="16" height="17" style="mask-type: luminance;">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.318.979c-1.563 0-2.829 1.313-2.829 2.933 0 .254.031.5.09.735L6.249 7.32a2.75 2.75 0 0 0-1.674-.568c-1.562 0-2.828 1.313-2.828 2.933 0 1.62 1.266 2.934 2.828 2.934.96 0 1.808-.496 2.32-1.254l3.636 2.176a3.064 3.064 0 0 0-.042.504c0 1.62 1.266 2.933 2.829 2.933 1.562 0 2.828-1.313 2.828-2.933 0-1.62-1.266-2.934-2.828-2.934-.953 0-1.796.49-2.309 1.238l-3.643-2.18a3.06 3.06 0 0 0-.295-1.866l4.072-2.515a2.784 2.784 0 0 0 2.175 1.057c1.562 0 2.828-1.313 2.828-2.933 0-1.62-1.266-2.933-2.828-2.933Z" fill="#fff"></path>
                                                </mask>
                                            </svg></span>
                                    </div>
                                    <div class="price_review_container">
                                        <div id="pdp-price-reviews" class="t4s-product__price-review t4s-col-item" style="--price-size:20px;--price-weight:400;--price-color:#262727;--price-sale-color:#ba4444;">
                                            <div class="t4s-product-price" data-pr-price="" data-product-price="" data-saletype="1">
                                                MRP ₹<?php echo htmlentities($rws['productPrice']); ?>
                                                <small>
                                                    <del>
                                                        ₹<?php echo htmlentities($rws['productPriceBeforeDiscount']); ?>
                                                    </del>
                                                </small>
                                                <span class="price_separator"></span>
                                                <span class="t4s-badge-price"><?php echo round(100 - (($rws['productPrice'] / $rws['productPriceBeforeDiscount']) * 100), 2); ?>% OFF</span>
                                            </div>
                                        </div>
                                        <div class="tax_text t4s-col-item">Inclusion of all taxes</div>
                                    </div>

                                    <div class="t4s-col-item">
                                        <script src="cdn/shop/t/130/assets/dynamic-offers.js"></script>
                                        <link href="cdn/shop/t/130/assets/best-offers-popup.css" rel="stylesheet" type="text/css" media="all">
                                        <link href="cdn/shop/t/130/assets/dynamic-offers.css" rel="stylesheet" type="text/css" media="all">
                                        <script src="cdn/shop/t/130/assets/best-offers-popup.js"></script>

                                    </div>

                                    <div class="t4s-liquid_0a41e004-c096-4334-9d23-1052de9af88a t4s-pr__custom-liquid t4s-rte t4s-col-item"></div>
                                    <link href="cdn/shop/t/130/assets/accordion-pdp.aio.min.css" rel="stylesheet" type="text/css" media="all">
                                    <div class="t4s-col-item product_form_container">
                                        <div class="horizontal-divider-pdp"></div>

                                        <div class="t4s-product-form__variants is-no-pick__false  is-remove-soldout-false is-btn-full-width__false is-btn-atc-txt-3 is-btn-ck-txt-3 is--fist-ratio-false" style=" --wishlist-color: #222222;--wishlist-hover-color: #56cfe1;--wishlist-active-color: #e81e1e;--compare-color: #222222;--compare-hover-color: #56cfe1;--compare-active-color: #222222;">
                                            <div>
                                                <form method="post" action="account/cart.php" accept-charset="UTF-8" class="t4s-form__product is--main-sticky" enctype="multipart/form-data" data-productid="8520322056438" novalidate="novalidate" data-type="add-to-cart-form" data-disable-swatch="true"><input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                                                    <input name="pid" value="<?= $_GET['pid']; ?>" type="hidden">
                                                    <input id="action" name="action" value="cart" type="hidden">
                                                    <input id="buy_now" name="buy_now" value="buy_now" type="hidden">
                                                    <div class="t4s-product-form__buttons" style="--pr-btn-round:40px;">
                                                        <div class="t4s-d- t4s-flex-wrap">
                                                            <div class="t4s-quantity-wrapper t4s-product-form__qty">
                                                                <button type="button" class="t4s-quantity-selector is--minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" aria-label="ATC reduce quantity">
                                                                    <svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                                                        <path d="M10 0v2H0V0z" fill="currentColor"></path>
                                                                    </svg>
                                                                </button>
                                                                <input type="number" class="t4s-quantity-input" step="1" min="1" max="50" name="quantity" value="1" size="4" pattern="[0-9]*" inputmode="numeric" aria-label="ATC quantity">
                                                                <button type="button" class="t4s-quantity-selector is--plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" aria-label="ATC increase quantity">
                                                                    <svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                                                        <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor" fill-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <!-- render t4s_wis_cp.liquid -->
                                                            <!-- <a style="border: 3px solid #e8c463" href="account/cart.php?pid=<?php echo htmlentities($rws['id']) ?>&&action=cart" class="t4s-product-form__submit t4s-btn t4s-btn-style-default t4s-w-100 t4s-justify-content-center  t4s-btn-effect-sweep-to-top t4s-btn-loading__svg">
                                                                Add to Cart
                                                            </a> -->
                                                            <button id="add_to_cart" style="min-width: unset;border: 3px solid #e8c463" type="submit" class="t4s-product-form__submit t4s-btn t4s-btn-style-default t4s-w-100 t4s-justify-content-center  t4s-btn-effect-sweep-to-top t4s-btn-loading__svg">
                                                                Add to Cart
                                                            </button>
                                                            <button id="buy_now_btn" style="min-width: unset;margin: 5px;" type="submit" class="t4s-product-form__submit t4s-btn t4s-btn-style-default t4s-btn-color-primary t4s-w-100 t4s-justify-content-center  t4s-btn-effect-sweep-to-top t4s-btn-loading__svg">
                                                                Buy Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <script>
                                                    $("#buy_now_btn").click(function() {
                                                        $("#action").remove();
                                                    });
                                                    $("#add_to_cart").click(function() {
                                                        $("#buy_now").remove();
                                                    });
                                                </script>
                                                <link href="cdn/shop/t/130/assets/ani-atc.min.css" rel="stylesheet" media="all" onload="this.media='all'">
                                            </div>
                                        </div>
                                        <script>
                                            window.onload = function() {
                                                var url = new URL(window.location.href);
                                                var params = new URLSearchParams(url.search);
                                                if (params.has('variant')) {
                                                    const element = document.querySelector(".t4s-swatch_banner");
                                                    if (element) element.style.display = "none";
                                                }
                                            }
                                        </script>
                                    </div>
                                    <br>
                                    <p>
                                        <?php if (!empty($rws['size'])) {
                                            echo "Size - " . $rws['size'];
                                        } ?>
                                    </p>
                                    <div style="display: flex;">
                                        Color -
                                        <?php if (!empty($rws['color'])) {
                                            $color = explode(',', $rws['color']);
                                            foreach ($color as $item) {
                                        ?>
                                                <p style="background-color: <?= $item ?>; width: 30px;height:30px;margin: 5px"></p>
                                        <?php }
                                        } ?>
                                    </div>

                                    <div id="t4s-delivery" class="t4s-pr_delivery  t4s-ch t4s-dn section delivery-return-section" data-order-delivery="{ &quot;timezone&quot;:false, &quot;format_day&quot;:&quot;t44, t45 t46&quot;, &quot;mode&quot;:&quot;1&quot;, &quot;cut_day&quot;: &quot;SAT,SUN&quot;, &quot;estimateStartDate&quot;: 3, &quot;estimateEndDate&quot;: 5, &quot;time&quot;:&quot;16:00:00&quot;, &quot;hideWithPreorder&quot;:true }" style="display: block;">
                                        <link href="cdn/shop/t/130/assets/ani-atc.min.css" rel="stylesheet" media="all" onload="this.media='all'">
                                        <div class="section">
                                            <div class="section-heading-container">
                                                <img class="map-pin-delivery" height="16" src="cdn/shop/t/130/assets/map-pin-delivery.svg" width="16">
                                                <span class="section-heading">Check Delivery Time</span>
                                            </div>
                                            <div class="section-input-container">
                                                <span class="input-info enter-pincode-text" style="display:none">Please enter PIN code to check delivery time</span>
                                                <div class="locate-container">
                                                    <form id="input-container" class="input-container">
                                                        <img class="check_tick_img" height="16" src="cdn/shop/t/130/assets/check-circle-tick.svg" width="16" style="display: block;">
                                                        <input type="tel" placeholder="Enter PIN code" id="pincode-input" class="pincode-input" maxlength="6" onfocusout="focusOutInput()" style="border: 1px solid var(--discount-badge); font-weight: 600; color: var(--discount-badge); padding-left: 36px;">
                                                        <span class="verified-icon" style="display: block;">
                                                        </span>
                                                        <button type="submit" id="check-button" class="check-button" style="opacity: 0.25;">Applied</button>
                                                        <div class="t4s-cart-ld__bar t4s-pe-none t4s-dn spinner-pincode">
                                                            <span>
                                                                <svg width="16" height="16" class="t4s-cart-spinner" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle class="t4s-path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </form>
                                                    <div class="locate-pincode-wrapper" onclick="getLocationPincode()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_505_32035)">
                                                                <path d="M9.9987 16.6663C13.6806 16.6663 16.6654 13.6816 16.6654 9.99967C16.6654 6.31778 13.6806 3.33301 9.9987 3.33301C6.3168 3.33301 3.33203 6.31778 3.33203 9.99967C3.33203 13.6816 6.3168 16.6663 9.9987 16.6663Z" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M10.276 11.5003C11.1965 11.5003 11.9427 10.7541 11.9427 9.83366C11.9427 8.91318 11.1965 8.16699 10.276 8.16699C9.35557 8.16699 8.60938 8.91318 8.60938 9.83366C8.60938 10.7541 9.35557 11.5003 10.276 11.5003Z" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M18.3333 10H15" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M5.0013 10H1.66797" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M10 5.00033V1.66699" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M10 18.3333V15" stroke="#262727" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_505_32035">
                                                                    <rect width="20" height="20" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        Locate</div>
                                                </div>

                                                <div class="pincode-error-banner t4s-swatch_banner_animator" style="display:none">
                                                    <!-- <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M10.5 2L17.8612 14.75H3.13878L10.5 2Z" fill="#ED546F" stroke="#ED546F" stroke-width="2"/>
  <path d="M11.22 11.552H10.068V5.504H11.22V11.552ZM9.876 13.28C9.876 13.064 9.952 12.88 10.104 12.728C10.264 12.568 10.452 12.488 10.668 12.488C10.884 12.488 11.068 12.568 11.22 12.728C11.38 12.88 11.46 13.064 11.46 13.28C11.46 13.496 11.38 13.684 11.22 13.844C11.068 13.996 10.884 14.072 10.668 14.072C10.452 14.072 10.264 13.996 10.104 13.844C9.952 13.684 9.876 13.496 9.876 13.28Z" fill="white"/>
</svg> -->
                                                    <span class="error-message">Delivery not available on pincode</span>
                                                </div>

                                                <div class="default-estimate-delivery-info" style="display: block;">
                                                    <img alt="Delivery Time Icon" class="mib0 fastDlvyIcon" height="16" loading="lazy" src="https://cdn.shopify.com/s/files/1/0632/2526/6422/files/fastDlvry.png?v=1711973284" width="26">
                                                    <span>Estimated delivery by </span>
                                                    <span class="t4s-default-end_delivery">9:00PM on Fri, 31st May</span>
                                                </div>

                                                <div class="section-delivery-return-container" style="display: none;">
                                                    <div class="delivery-info" style="display: flex;">
                                                        <img alt="Delivery Time Icon" class="mib0 fastDlvyIcon" height="16" loading="lazy" src="https://cdn.shopify.com/s/files/1/0632/2526/6422/files/fastDlvry.png?v=1711973284" width="26">
                                                        <div class="estimate-delivery-info">
                                                            <span>Get it by </span>
                                                            <span class="t4s-end_delivery">9:00PM on Fri, 31st May</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="delivery-fbv-container">

                                                    <link rel="stylesheet" href="cdn/shop/t/130/assets/delivery_date_fbv.css">
                                                    <div class="delivery-info-fbv " id="delivery_date_wrapper_fbv_8357838979318" style="display:none">
                                                        <svg width="51" height="20" viewBox="0 0 51 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="fbv-icon">
                                                            <rect width="50.9091" height="20" rx="10" fill="#E8C463"></rect>
                                                            <path d="M16.7308 5.8277C16.7761 5.63729 16.6317 5.45453 16.436 5.45453H11.0139C10.8748 5.45453 10.7536 5.54916 10.7199 5.68406L10.4926 6.59315C10.4448 6.78441 10.5895 6.96968 10.7866 6.96968H16.2197C16.36 6.96968 16.482 6.87332 16.5145 6.73679L16.7308 5.8277Z" fill="#262727"></path>
                                                            <path d="M25.0608 5.45453C25.2494 5.45453 25.3922 5.62493 25.3591 5.8106L25.1561 6.95279C25.1304 7.09742 25.0046 7.20278 24.8577 7.20278H21.6633C21.5157 7.20278 21.3897 7.30901 21.3646 7.45439L21.1323 8.80378C21.1004 8.98897 21.243 9.15823 21.4309 9.15823H23.4785C23.6678 9.15823 23.8108 9.33003 23.7764 9.51627L23.5775 10.5937C23.551 10.7374 23.4257 10.8417 23.2795 10.8417H21.0151C20.8679 10.8417 20.7419 10.9476 20.7166 11.0926L20.1568 14.2946C20.1314 14.4396 20.0055 14.5454 19.8583 14.5454H18.2597C18.0713 14.5454 17.9286 14.3753 17.9613 14.1897L19.4601 5.70485C19.4857 5.56007 19.6115 5.45453 19.7585 5.45453H25.0608Z" fill="#262727"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33.2167 7.81143C33.1218 8.34669 32.9016 8.79131 32.5563 9.14528C32.3515 9.3552 32.1224 9.52716 31.869 9.66117C31.73 9.73472 31.7349 10.0187 31.8699 10.0995C32.05 10.2072 32.2054 10.3467 32.3361 10.518C32.5865 10.846 32.7117 11.2302 32.7117 11.6705C32.7117 11.8087 32.6987 11.9425 32.6728 12.072C32.5433 12.8317 32.1721 13.4361 31.5591 13.885C30.9462 14.3253 30.1649 14.5454 29.2152 14.5454H25.3418C25.1533 14.5454 25.0106 14.3753 25.0434 14.1897L26.5421 5.70485C26.5677 5.56007 26.6935 5.45453 26.8405 5.45453H30.6785C31.4987 5.45453 32.1333 5.62288 32.5822 5.95958C33.0311 6.29628 33.2556 6.76248 33.2556 7.35818C33.2556 7.50495 33.2426 7.65603 33.2167 7.81143ZM29.5907 9.14528C29.962 9.14528 30.2598 9.06327 30.4843 8.89924C30.7088 8.7352 30.8469 8.49778 30.8987 8.18698C30.9073 8.13519 30.9116 8.06612 30.9116 7.97978C30.9116 7.72942 30.8296 7.53948 30.6656 7.40998C30.5016 7.27185 30.2598 7.20278 29.9404 7.20278H28.745C28.5976 7.20278 28.4716 7.30883 28.4464 7.45406L28.2148 8.7905C28.1827 8.97579 28.3253 9.14528 28.5134 9.14528H29.5907ZM30.4713 11.7741C30.4886 11.6705 30.4972 11.5928 30.4972 11.541C30.4972 11.2907 30.4066 11.0964 30.2253 10.9583C30.044 10.8115 29.7936 10.7381 29.4742 10.7381H28.1224C27.9755 10.7381 27.8497 10.8436 27.8241 10.9883L27.5689 12.4283C27.536 12.614 27.6787 12.7842 27.8672 12.7842H29.1375C29.5174 12.7842 29.8195 12.6979 30.044 12.5252C30.2685 12.3526 30.4109 12.1022 30.4713 11.7741Z" fill="#262727"></path>
                                                            <path d="M38.2691 11.4707C38.1363 11.7343 37.7435 11.6719 37.6989 11.3802L36.8326 5.71178C36.81 5.56382 36.6827 5.45453 36.533 5.45453H34.7981C34.6095 5.45453 34.4667 5.62499 34.4998 5.81068L36.0106 14.2955C36.0364 14.4401 36.1621 14.5454 36.309 14.5454H38.6443C38.7564 14.5454 38.8593 14.4836 38.9119 14.3846L43.4202 5.89975C43.5275 5.69791 43.3812 5.45453 43.1526 5.45453H41.4865C41.3721 5.45453 41.2674 5.51901 41.2159 5.62122L38.2691 11.4707Z" fill="#262727"></path>
                                                            <path d="M11.3986 9.48854C11.426 9.34571 11.5509 9.24241 11.6963 9.24241H15.6508C15.8436 9.24241 15.9874 9.42019 15.9471 9.60879L15.7528 10.5179C15.7229 10.6577 15.5994 10.7576 15.4564 10.7576H11.5225C11.3323 10.7576 11.1892 10.5844 11.2249 10.3976L11.3986 9.48854Z" fill="#262727"></path>
                                                            <path d="M15.2604 13.3856C15.2929 13.2002 15.1502 13.0303 14.962 13.0303H7.98358C7.84453 13.0303 7.72332 13.1249 7.68959 13.2598L7.46232 14.1689C7.41451 14.3602 7.55916 14.5454 7.7563 14.5454H14.8026C14.9497 14.5454 15.0756 14.4397 15.101 14.2947L15.2604 13.3856Z" fill="#262727"></path>
                                                        </svg>
                                                        <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="thundering-icon">
                                                            <path d="M6.85918 1L0.90918 9.4H5.80918L4.75918 15L10.7092 6.6H5.80918L6.85918 1Z" fill="#E8C463" stroke="#262727" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>

                                                        <span class="t4s-end_delivery-fbv" id="t4s-end_delivery_fbv_8357838979318"></span>

                                                        <svg width="12" height="12" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="fbv_info">
                                                            <g clip-path="url(#clip0_11707_2075)">
                                                                <path d="M8.90934 14.6667C12.5912 14.6667 15.576 11.6819 15.576 8.00001C15.576 4.31811 12.5912 1.33334 8.90934 1.33334C5.22744 1.33334 2.24268 4.31811 2.24268 8.00001C2.24268 11.6819 5.22744 14.6667 8.90934 14.6667Z" stroke="#7A7A7A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M6.96924 6.00001C7.12597 5.55446 7.43534 5.17875 7.84254 4.93944C8.24974 4.70012 8.7285 4.61264 9.19402 4.69249C9.65954 4.77234 10.0818 5.01436 10.386 5.3757C10.6901 5.73703 10.8566 6.19436 10.8559 6.66668C10.8559 8.00001 8.8559 8.66668 8.8559 8.66668" stroke="#7A7A7A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M8.90918 11.3333H8.91501" stroke="#7A7A7A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_11707_2075">
                                                                    <rect width="16" height="16" fill="white" transform="translate(0.90918)"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg>



                                                    </div>
                                                    <div style="display:none">

                                                        <div class="return-delivery-info">
                                                            <span><svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7 0C3.13542 0 0 3.07789 0 6.87158V6.85712C0 7.35818 0.401042 7.75186 0.911458 7.75186C1.42188 7.75186 1.82292 7.35818 1.82292 6.85712V6.87158C1.82292 4.08 4.13802 1.78947 7 1.78947C9.86198 1.78947 12.1771 4.06211 12.1771 6.87158C12.1771 9.68105 9.84375 11.9537 7 11.9537H3.73698L5.61458 10.2537C5.97917 9.91368 6.01562 9.35895 5.66927 8.98316C5.32292 8.62526 4.75781 8.58947 4.375 8.92947L0.783854 12.1863C0.601562 12.3474 0.492187 12.5979 0.492187 12.8484C0.492187 13.0989 0.601562 13.3316 0.783854 13.5105L4.375 16.7674C4.55729 16.9284 4.77604 17 4.99479 17C5.23177 17 5.48698 16.9105 5.66927 16.7137C6.01562 16.3558 5.9974 15.7832 5.61458 15.4432L3.73698 13.7432H7C10.8646 13.7432 14 10.6653 14 6.87158C14 3.07789 10.8646 0 7 0Z" fill="#37474F"></path>
                                                                </svg>
                                                            </span>
                                                            <div class="return-info">
                                                                Free Returns Within 48 hours*
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="check-delivery-badges-wrapper">
                                                    <div class="check-delivery-badge-container" onclick="openModal('https://cdn.shopify.com/s/files/1/0632/2526/6422/files/fastdelivery.png?v=1711651779', 'Free Delivery', '<div class=discount-bage-info-text>Free delivery all over India<br/>No minimum purchase value</div>')">
                                                        <div class="check-delivery-badges">
                                                            <img class="delivery-badges-img" height="32" src="cdn/shop/t/130/assets/fastdelivery.svg" width="32">
                                                            <img class="delivery-badges-info-img" height="12" src="cdn/shop/t/130/assets/help-circle.svg" width="12">

                                                        </div>
                                                        <div class="check-delivery-badge-text">
                                                            Free<br>
                                                            Delivery
                                                        </div>
                                                    </div>

                                                    <div class="check-delivery-badge-container" id="return-policy-badge" onclick="openModal(  'https://cdn.shopify.com/s/files/1/0632/2526/6422/files/return.png?v=1711651779',  'Free return within 48 hours' ,  '<ol class=discount-bage-info-text><li>1. Return within 48 hour of delivery under the following conditions:<br/>&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbspa: Damaged or defective product <br/>&amp;nbsp&amp;nbsp&amp;nbsp&amp;nbspb: Wrong or missing product</li><li>2. Product cannot be returned once used.</li><li>3. One free replacement allowed for undamaged products.</li><li>4. Read more about Return &amp; Exchange policy here : <a href=https://vaaree.com/policies/refund-policy>Refund policy</a> </li></ol>'  )">
                                                        <div class="check-delivery-badges">
                                                            <img class="delivery-badges-img" height="32" src="cdn/shop/t/130/assets/freereturn.svg" width="32">
                                                            <img class="delivery-badges-info-img" height="12" src="cdn/shop/t/130/assets/help-circle.svg" width="12">

                                                        </div>
                                                        <div class="check-delivery-badge-text">
                                                            48 Hour <br> Returnable
                                                        </div>
                                                    </div>

                                                    <div class="check-delivery-badge-container" onclick="openModal('https://cdn.shopify.com/s/files/1/0632/2526/6422/files/cod.png', 'Cash on delivery', '<div class=discount-bage-info-text>COD option available for orders valued between ₹500 and ₹10,000. Available in selected PIN codes only.</div>')">
                                                        <div class="check-delivery-badges">
                                                            <img class="delivery-badges-img" height="32" src="cdn/shop/t/130/assets/cod.svg" width="32">
                                                            <img class="delivery-badges-info-img" height="12" src="cdn/shop/t/130/assets/help-circle.svg" width="12">

                                                        </div>
                                                        <div class="check-delivery-badge-text">
                                                            Cash On<br>
                                                            Delivery*
                                                        </div>
                                                    </div>

                                                    <div id="prepaid-badge" class="check-delivery-badge-container" style="display:none" onclick="openModal('https://cdn.shopify.com/s/files/1/0632/2526/6422/files/save30.png?v=1711651779', 'Save with prepaid', '<div class=discount-bage-info-text>Save additional FLAT Rs.30 OFF on orders above Rs.999 on UPI or Card payments.<br/>+ more pre-paid discounts available in checkout page</div>')">

                                                        <div class="check-delivery-badges">
                                                            <img class="delivery-badges-img" height="32" src="cdn/shop/t/130/assets/save30.svg" width="32">
                                                            <img class="delivery-badges-info-img" height="12" src="cdn/shop/t/130/assets/help-circle.svg" width="12">

                                                        </div>
                                                        <div class="check-delivery-badge-text">
                                                            With Prepaid<br>
                                                            Order
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script src="https://cdn.hyperspeed.me/script/vaaree.com/cdn/shop/t/130/assets/edd.js?v=52919982383748354741716714791"></script>
                                    <script>
                                        var pageType = `product`;
                                        var apiUsername = "EraCreatix".trim();
                                        var apiKey = "666df8a8-f2e9-4fdf-a9cf-30350459b629".trim();
                                        var vendorPincodeStr = JSON.stringify({
                                            "Bagooze": "132103",
                                            "Mark Home": "400053",
                                            "Linen Design Company Private Limited": "122003",
                                            "Jaipur Fabric": "302015",
                                            "Jaipur Prime": "302029",
                                            "Kotton Culture": "452010",
                                            "Mrid Cera": "303107",
                                            "Erahome": "132103",
                                            "Haber Living": "641603",
                                            "Lush & Beyond": "122002",
                                            "Hitkari": "121003",
                                            "Indus People": "110030",
                                            "Easy Goods": "302039",
                                            "Rajasthani Kart": "302018",
                                            "Smart Serve": "400064",
                                            "Green Heirloom": "682016",
                                            "The White Ink Decor": "201312",
                                            "Rena Germany": "396230",
                                            "Chhavi India": "132103",
                                            "Devarsh Handicrafts": "302029",
                                            "Export House": "140308",
                                            "Shreshmo": "400002",
                                            "Preciso Fashion": "600018",
                                            "Green Girgit": "121009",
                                            "Naksh": "400062",
                                            "Blessing Crafts": "244001",
                                            "Kanpur Flower Cycling Pvt. Ltd": "209305",
                                            "Vedas Exports": "342008",
                                            "KRJ Retail Private Limited": "201301",
                                            "Mahadev Mill": "380002",
                                            "Aashi Gifts": "302022",
                                            "Tree Of Life": "110020",
                                            "Rad Living": "201305",
                                            "Lighting Hours": "302029",
                                            "New Era Enterprises": "110015",
                                            "Ugaoo Agritech Private Limited": "410507",
                                            "Sino India": "132103",
                                            "Abstract India": "132103",
                                            "JD creations": "201012",
                                            "Femora": "302013",
                                            "Halos": "201010",
                                            "Clasiko India": "132103",
                                            "Decor Mart": "201301",
                                            "Athena": "421302",
                                            "Gayatri Attraction": "302029",
                                            "Shree Radhe": "360003",
                                            "Rajasthan Decor": "302017",
                                            "Klotthe": "245101",
                                            "Home Studios": "382445",
                                            "Edya Home": "281001",
                                            "Blocks Of India": "302029",
                                            "LIT Lamps": "400037",
                                            "The Conversion": "122001",
                                            "Duli India": "110074",
                                            "Embassy": "560018",
                                            "Nestroots": "122016",
                                            "Kolorabia Designs": "122001",
                                            "Wisdom Decor": "132103",
                                            "Hiyanshi Creations": "132103",
                                            "Tailoring India": "394210",
                                            "Urban Dream": "132103",
                                            "Homesake": "201307",
                                            "999 Store": "110047",
                                            "Bella True": "132103",
                                            "Bella Casa": "302022",
                                            "Good Homes": "302001",
                                            "Artment": "110030",
                                            "Art Street": "201308",
                                            "Sambhav Clothings": "560053",
                                            "Elemntl Designs": "201301",
                                            "Arrabi": "245101",
                                            "Aarohi Creations": "302029",
                                            "Sundram Hastkala": "201010",
                                            "The Table Fable": "122003",
                                            "Allo Innoware": "401028",
                                            "Auram Cookware": "400086",
                                            "Advance Cork International": "201301",
                                            "Era Creatix": "132103",
                                            "Asian Handicrafts": "201010",
                                            "Gopalas": "302022",
                                            "Fourwalls": "201301",
                                            "DA Studios": "110025",
                                            "Sourcing India Inc": "131029",
                                            "Craftsman India Online": "686671",
                                            "The Wishing Chair": "110049",
                                            "Akeeratly": "110052",
                                            "Era Creatix Panipat": "132103",
                                            "Flag Bearer": "110037",
                                            "Lock N Lock": "421302",
                                            "Curio Cart": "201301",
                                            "Decor Mart Khurja": "203131",
                                            "Posh N Plush": "282002",
                                            "The Scented Stories": "560062",
                                            "Basik Innovation LLP": "396191",
                                            "SATVIK": "110035",
                                            "Rago Inc": "132103",
                                            "Casa Decor": "201310",
                                            "Coral Tree": "122001",
                                            "AsianHandicrafts": "403505",
                                            "Era Creatix": "403001",
                                            "TreeOfLife": "403901"
                                        });
                                        var vendorPincode = JSON.parse(vendorPincodeStr);
                                        var vendorName = "Sojourn Retail Pvt Ltd";
                                        var productTags = ["badge__Deal Of The Day", "DOD", "Gift Box", "Gifting \u0026 Sets", "Mothers Day", "Mothers2024", "Valentines"];
                                        var fbvFilterTagName = "FBV" || "fbv";
                                        var defaultNumberOfDays = 7;
                                        var defaultNumberOfDaysFBV = 3;

                                        function init() {
                                            if (pageType === 'product') {
                                                var pincodeInputContainer = document.getElementById("input-container");
                                                var defaultEstimateDeliveryInfo = document.getElementsByClassName("default-estimate-delivery-info")[0];
                                                var deliveryTextElement = document.getElementsByClassName(`t4s-default-end_delivery`)[0];
                                                var deliveryInfoFbv = document.getElementsByClassName("delivery-info-fbv")[0];
                                                var estimateDeliveryDateElementFbv = document.getElementsByClassName("t4s-end_delivery-fbv")[0];
                                                if (fbvTagExist(productTags)) {
                                                    deliveryInfoFbv.style.display = "flex";
                                                    defaultEstimateDeliveryInfo.style.display = "none";
                                                    estimateDeliveryDateElementFbv.textContent = `3 Day Delivery`;
                                                } else if (deliveryTextElement) {
                                                    deliveryTextElement.textContent = `9:00PM on ${calculateDeliveryDate(defaultNumberOfDays, 0)}`;
                                                }
                                                var pincodeInput = document.getElementById("pincode-input");
                                                pincodeInputContainer.addEventListener("submit", handleCheckButton);
                                                pincodeInput.addEventListener("input", handlePincodeInput);
                                                pincodeInputContainer.addEventListener("click", () => focusOnInput('pincode-input'));
                                                var storedPincode = getLocalStorageItem(localStorageKeys.deliveryPincode) || document.getElementById("pincode-input").value;
                                                storedPincode && showEstimateDeliveryDate(storedPincode, productTags);
                                            } else {
                                                var pincodeInputContainer = document.getElementById("edd-form-pincode");
                                                setDefaultDateInCollectionPage(defaultNumberOfDays, 8268665290998, productTags);
                                                // var doesPincodeExists = getLocalStorageItem('delivery-pincode');
                                                if (window.innerWidth < 768 && document.querySelector('.sticky-filter-sort-container')) {
                                                    document.querySelector('.sticky-filter-sort-container').style.top = '95px';
                                                }
                                                var storedPincode = getLocalStorageItem(localStorageKeys.deliveryPincode);
                                                pincodeInputContainer && pincodeInputContainer.addEventListener("click", () => focusOnInput('pincode-input-plp'));
                                                storedPincode && showEstimateDeliveryDateonPlpPage(storedPincode, 8268665290998, productTags);
                                                window.addEventListener('popstate', function(event) {
                                                    if (event.state && event.state.page === '/collections.php') {
                                                        window.location.reload();
                                                    }
                                                });
                                            }
                                        }
                                        init();
                                    </script>

                                    <link rel="stylesheet" href="cdn/shop/t/130/assets/estimate-delivery-return.css" media="all">
                                    <script async="" src="cdn/shop/t/130/assets/custom-modal.js"></script>

                                    <div style="margin-top: 40px;"></div>
                                    <br>

                                    <div class="product-highlight-container is--tab-position__external t4s-col-item">
                                        <div class="t4s-tabs t4s-type-accordion t4s-tabs-enabled t4s-tabs-accordion-enabled">
                                            <div class="t4s-tab-wrapper" id="t44_highlight_block_status">
                                                <a id="t44_highlight_block" class="t4s-tab__title t4s-fwm t4s-ch" rel="nofollow">
                                                    <span class="t4s-tab__text">
                                                        Product Highlight
                                                    </span>
                                                    <span class="t4s-tab__icon"></span>
                                                </a>
                                                <div id="t4s-highlight_block" class="t4s-rte t4s-tab-content t4s-remove-border">
                                                    <link href="cdn/shop/t/130/assets/product-highlight.css" rel="stylesheet" type="text/css" media="all">
                                                    <script>
                                                        $('#t44_highlight_block').click(function() {
                                                            $('#t4s-highlight_block').toggle();
                                                            $('#t44_highlight_block_status').toggleClass('t4s-active');
                                                        });
                                                    </script>
                                                    <div class="product-highlight-content">
                                                        <div class="trust-banner-container">
                                                            <span>
                                                                <p><?= $rws['producthighlight']; ?></p>
                                                            </span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-information-container is--tab-position__external t4s-col-item">
                                    <div class="t4s-tabs t4s-type-accordion t4s-tabs-enabled t4s-tabs-accordion-enabled">
                                        <div class="t4s-tab-wrapper" id="t44_description_block_status">
                                            <a id="t44_description_block" class="t4s-tab__title t4s-fwm t4s-ch">
                                                <span class="t4s-tab__text">
                                                    Product Description
                                                </span>
                                                <span class="t4s-tab__icon"></span>
                                            </a>
                                            <div id="t4s-description_block" class="t4s-rte t4s-tab-content t4s-remove-border">
                                                <script>
                                                    $('#t44_description_block').click(function() {
                                                        $('#t4s-description_block').toggle();
                                                        $('#t44_description_block_status').toggleClass('t4s-active');
                                                    });
                                                </script>
                                                <div class="product-information-tab">
                                                    <p><?= $rws['productDescription']; ?></p>
                                                </div>
                                                <style>
                                                    .product-size-table {
                                                        margin-bottom: 15px;
                                                    }

                                                    .product-size-table td {
                                                        font-size: 14px !important;
                                                        border: 1px solid var(--tablecell-border-color) !important;
                                                        min-width: 100px;
                                                        padding: 8px !important;
                                                        padding-left: 12px !important;
                                                        height: 60px;
                                                    }

                                                    .product-size-table td div {
                                                        margin-bottom: 3px;
                                                    }

                                                    .product-size-table .table-header {
                                                        font-weight: 600;
                                                    }

                                                    @media (max-width:767px) {
                                                        .product-size-table td {
                                                            font-size: 12px !important;
                                                            border: 1px solid var(--tablecell-border-color) !important;
                                                        }
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <link href="cdn/shop/t/130/assets/product-tabs.aio.min.css" rel="stylesheet" type="text/css" media="all">
                                <style data-shopify="">
                                    .t4s-product-tabs-wrapper-template--16885347778806__main {
                                        --bg-tabs: #f6f6f8;
                                        --bg-tabs-mb: #ffffff;
                                    }
                                </style>
                                <div class="t4s-product-tabs-wrapper t4s-col-item t4s-product-tabs-wrapper-template--16885347778806__main is--tab-design__accordion is--tab-design-mb__accordion is--tab-layout__content_full is--tab-position__external">
                                    <div class="t4s-container" style="--animation-order: 0;">
                                        <div class="t4s-tabs t4s-accordion-mb-true t4s-tabs-enabled t4s-tabs-accordion-enabled t4s-type-accordion">
                                            <div class="t4s-tab-wrapper " id="t44_info_status">
                                                <a id="t44_info_block" class="t4s-tab__title t4s-fwm t4s-ch">
                                                    <span class="t4s-tab__text">Additional Info</span><span class="t4s-tab__icon"></span></a>
                                                <div id="t4s-info_block" class="t4s-rte t4s-tab-content t4s-active">
                                                    <script>
                                                        $('#t44_info_block').click(function() {
                                                            $('#t4s-info_block').toggle();
                                                            $('#t44_info_status').toggleClass('t4s-active');
                                                        });
                                                    </script>

                                                    <p><?= $rws['additionalInfo']; ?></p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="return-exchange-container is--tab-position__external t4s-col-item">
                                    <div class="t4s-tabs t4s-type-accordion">
                                        <div class="t4s-tab-wrapper" id="t44_policy_block_status">
                                            <a id="t44_policy_block" class="t4s-tab__title t4s-fwm t4s-ch">
                                                <span class="t4s-tab__text">
                                                    Returns and Exchange Policy
                                                </span>
                                                <span class="t4s-tab__icon"></span>
                                            </a>
                                            <div id="t4s-policy_block" class="t4s-rte t4s-tab-content t4s-remove-border">
                                                <script>
                                                    $('#t44_policy_block').click(function() {
                                                        $('#t4s-policy_block').toggle();
                                                        $('#t44_policy_block_status').toggleClass('t4s-active');
                                                    });
                                                </script>
                                                <link href="cdn/shop/t/130/assets/return-exchange.css" rel="stylesheet" type="text/css" media="all">


                                                <div class="return-exchange-content">
                                                    <div class="return-exchange-banner-container">
                                                        <!-- <img src="cdn/shop/t/130/assets/return-exchange-icon.svg" height="32" width="32" alt="return-exchange">
                                                            <span class="return-exchange-text">Free Returns in 48 hours</span> -->
                                                    </div>
                                                    <div class="return-exchange-policy-details">
                                                        <?= $rws['refundandExchange']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- End form -->
                            </div>
                        </div>
                    </div>
                </div>
                <aside data-sidebar-content="" class="t4s-col-item t4s-col-12 t4s-col-lg-3 t4s-sidebar t4s-dn">
                    <div class="t4s-loading--bg"></div>
                </aside>
            </div>
            </div>

        <?php } ?>
        <script>
            const shareButton = document.getElementById('product-share-icon');
            if (shareButton) {
                if (navigator.share) {
                    shareButton.addEventListener('click', async (e) => {
                        e.stopPropagation();
                        const shareProductTitle = "Vida Storage Box"
                        try {
                            await navigator.share({
                                title: shareProductTitle,
                                text: `Hey, I found this really nice product on Era Creatix! Have a look.\n${shareProductTitle}\n`,
                                url: window.location.href
                            });
                        } catch (error) {
                            console.error('Error sharing:', error);
                        }
                    });
                } else {
                    // Fallback for browsers that do not support Web Share API
                    shareButton.style.display = "none";
                    console.warn("Browser do not support Web Share API");
                }
            }
        </script>

        <style>
            .rated {
                color: orange;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                top: -9999px;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            .progress-label-left {
                float: left;
                margin-right: 0.5em;
                line-height: 1em;
            }

            .progress-label-right {
                float: right;
                margin-left: 0.3em;
                line-height: 1em;
            }

            .star-light {
                color: #e9ecef;
            }
        </style>
        <div class="container">
            <h5 class="mt-5 mb-5">Review & Ratings</h5>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <h1 class="text-warning mt-4 mb-4">
                                <b><span id="average_rating">0.0</span> / 5</b>
                            </h1>
                            <div class="mb-3">
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                                <i class="fas fa-star star-light mr-1 main_star"></i>
                            </div>
                            <h3><span id="total_review">0</span> Review</h3>
                        </div>
                        <div class="col-sm-4">
                            <p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>
                            </p>
                            <p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                            </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <h3 class="mt-4 mb-3">Write Review Here</h3>
                            <button type="button" id="add_review" class="btn btn-primary">Review</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="review_content"></div>
        </div>


        <div id="review_modal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Submit Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center mt-2 mb-4">
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                            <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                        </h4>
                        <div class="form-group">

                            <input type="hidden" name="user_id" value="<?php if (isset($_SESSION["id"])) echo $_SESSION["id"]; ?>" id="user_id" />

                            <input type="hidden" name="business_owner" value="<?php echo $_GET['pid']; ?>" id="business_owner" />
                            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" autocomplete="off" />
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="button" class="btn btn-primary" id="save_review">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var rating_data = 0;

            $('#add_review').click(function() {

                $('#review_modal').modal('show');

            });

            $(document).on('mouseenter', '.submit_star', function() {

                var rating = $(this).data('rating');

                reset_background();

                for (var count = 1; count <= rating; count++) {

                    $('#submit_star_' + count).addClass('text-warning');

                }

            });

            function reset_background() {
                for (var count = 1; count <= 5; count++) {

                    $('#submit_star_' + count).addClass('star-light');

                    $('#submit_star_' + count).removeClass('text-warning');

                }
            }

            $(document).on('mouseleave', '.submit_star', function() {

                reset_background();

                for (var count = 1; count <= rating_data; count++) {

                    $('#submit_star_' + count).removeClass('star-light');

                    $('#submit_star_' + count).addClass('text-warning');
                }

            });

            $(document).on('click', '.submit_star', function() {

                rating_data = $(this).data('rating');

            });

            $('#save_review').click(function() {

                var user_email = $('#user_email').val();

                var user_name = $('#user_name').val();

                var user_id = $('#user_id').val();

                var business_owner = $('#business_owner').val();

                var user_review = $('#user_review').val();

                if (rating_data == '') {
                    alert("Please select star to review");
                    return false;
                }

                if (user_name == '' || user_review == '') {
                    alert("Please Fill Both Field");
                    return false;
                } else {
                    $.ajax({
                        url: "admin/insert_rating.php",
                        method: "POST",
                        data: {
                            rating_data: rating_data,
                            user_name: user_name,
                            user_id: user_id,
                            product_id: business_owner,
                            user_review: user_review
                        },
                        success: function(data) {
                            alert(data);
                            $('#review_modal').modal('hide');

                            if (data == "session_expire") {
                                $('#signin').modal('show');
                                return false;
                            } else if (data == "success") {
                                alert("Your Review & Rating Successfully Submitted");
                            }
                            load_rating_data();
                        },
                        error: function(data) {
                            alert(data);
                        }
                    })
                }

            });


            load_rating_data();

            function load_rating_data() {
                const product_id = "<?php echo $_GET['pid']; ?>";

                $.ajax({
                    url: "admin/read_product_rating.php",
                    method: "POST",
                    data: {
                        product_id: product_id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        // alert(data);
                        $('#average_rating').text(data.average_rating);
                        $('#total_review').text(data.total_review);

                        var count_star = 0;

                        $('.main_star').each(function() {
                            count_star++;
                            if (Math.ceil(data.average_rating) >= count_star) {
                                $(this).addClass('text-warning');
                                $(this).addClass('star-light');
                            }
                        });

                        $('#total_five_star_review').text(data.five_star_review);

                        $('#total_four_star_review').text(data.four_star_review);

                        $('#total_three_star_review').text(data.three_star_review);

                        $('#total_two_star_review').text(data.two_star_review);

                        $('#total_one_star_review').text(data.one_star_review);

                        $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

                        $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

                        $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

                        $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

                        $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                        if (data.review_data.length > 0) {
                            var html = '';

                            for (var count = 0; count < data.review_data.length; count++) {
                                html += '<div class="row mb-3">';

                                // html += '<div class="col-sm-1"><div class="rounded-circle bg-secondary py-2" style="max-width:50px;"><h3 class="m-0 text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                                html += '<div class="col-sm-12">';

                                html += '<div class="card">';

                                // html += '<div class="card-header d-flex align-items-center"><div class="rounded-circle bg-secondary p-2 mx-2" style="max-width:50px;"><h3 class="m-0 text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div><b>' + data.review_data[count].user_name + '</b>&nbsp;~&nbsp;<a class="text-decoration-underline" role="button" data-bs-toggle="collapse" data-bs-target="#collapse' + count + '" aria-expanded="true" aria-controls="collapseOne">reply</a></div>';
                                html += '<div class="card-header d-flex align-items-center"><div class="rounded-circle bg-secondary p-2 mx-2" style="max-width:50px;"><h3 class="m-0 text-center">' + data.review_data[count].user_name.charAt(0) + '</h3></div><b>' + data.review_data[count].user_name + '</b></div>';

                                html += '<div class="card-body">';

                                for (var star = 1; star <= 5; star++) {
                                    var class_name = '';

                                    if (data.review_data[count].rating >= star) {
                                        class_name = 'text-warning';
                                    } else {
                                        class_name = 'star-light';
                                    }

                                    html += '<i class="fas fa-star ' + class_name + ' mr-1"></i>';
                                }

                                html += '<br />';

                                html += data.review_data[count].user_review;

                                html += '</div>';

                                html += '<div id="collapse' + count + '" class="accordion-collapse collapse" data-bs-parent="#accordionExample"><div class="accordion-body px-5 pb-5"><hr>';

                                html += '<form id="reviewReplyForm" method="post">';

                                html += '<div class="input-group"><span class="input-group-text mx-1 rounded-circle" id="reply"><?php echo substr($_SESSION['NAME'], 0, 1); ?></span><input type="text" id="review_reply" aria-describedby="reply" class="form-control" required /><input type="hidden" id="review_id" value=' + data.review_data[count].review_id + ' /><input type="hidden" id="reply_by" value="<?php echo $_SESSION['NAME'] ?>" /></div>';

                                html += '<div class="mt-2 d-flex justify-content-end">';

                                html += '<button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' + count + '" aria-expanded="true" aria-controls="collapseOne">Cancel</button>';

                                html += '<button type="button" class="btn btn-success mx-2" onclick="replyRatings()">Submit</button>';

                                html += '</div></form>';

                                html += '</div></div>';

                                html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

                                html += '</div>';

                                html += '</div>';

                                html += '</div>';
                            }

                            $('#review_content').html(html);
                        }
                    },
                    error: function(data) {
                        // alert(data);
                        // alert('failed');
                    }
                })
            }

            function replyRatings() {
                var review_reply = $('#review_reply').val();
                var review_id = $('#review_id').val();
                var reply_by = $('#reply_by').val();
                var business_owner = $('#business_owner').val();
                // alert(review_id); 
                if (review_reply == '') {
                    alert("Please Fill the required Field");
                    return false;
                } else {

                    $.ajax({
                        url: "admin/action/submit_rating_reply.php",
                        method: "POST",
                        data: {
                            review_reply: review_reply,
                            review_id: review_id,
                            reply_by: reply_by,
                            business_owner: business_owner
                        },
                        success: function(data) {
                            if (data == "session_expire") {
                                $('#signin').modal('show');
                                return false;
                            } else if (data == "success") {
                                $("#reviewReplyForm").trigger('reset');
                                alert("Reply sent Successfully");
                            }

                        }
                    });
                }
            }
        </script>

        <template data-icons-thumb="">
            <svg class="t4s-d-none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <symbol id="icon-thumb-video" aria-hidden="true" focusable="false" role="presentation" fill="currentColor" viewBox="0 0 10 14">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48177 0.814643C0.81532 0.448245 0 0.930414 0 1.69094V12.2081C0 12.991 0.858787 13.4702 1.52503 13.0592L10.5398 7.49813C11.1918 7.09588 11.1679 6.13985 10.4965 5.77075L1.48177 0.814643Z"></path>
                </symbol>
                <symbol id="icon-external-youtube" fill="currentColor" viewBox="0 0 576 512">
                    <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                </symbol>
                <symbol id="icon-external-vimeo" fill="currentColor" viewBox="0 0 448 512">
                    <path d="M403.2 32H44.8C20.1 32 0 52.1 0 76.8v358.4C0 459.9 20.1 480 44.8 480h358.4c24.7 0 44.8-20.1 44.8-44.8V76.8c0-24.7-20.1-44.8-44.8-44.8zM377 180.8c-1.4 31.5-23.4 74.7-66 129.4-44 57.2-81.3 85.8-111.7 85.8-18.9 0-34.8-17.4-47.9-52.3-25.5-93.3-36.4-148-57.4-148-2.4 0-10.9 5.1-25.4 15.2l-15.2-19.6c37.3-32.8 72.9-69.2 95.2-71.2 25.2-2.4 40.7 14.8 46.5 51.7 20.7 131.2 29.9 151 67.6 91.6 13.5-21.4 20.8-37.7 21.8-48.9 3.5-33.2-25.9-30.9-45.8-22.4 15.9-52.1 46.3-77.4 91.2-76 33.3.9 49 22.5 47.1 64.7z"></path>
                </symbol>
                <symbol id="icon-thumb-model" fill="currentColor" aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 18 21">
                    <path d="M7.67998 20.629L1.28002 16.723C0.886205 16.4784 0.561675 16.1368 0.337572 15.731C0.113468 15.3251 -0.00274623 14.8686 -1.39464e-05 14.405V6.59497C-0.00238367 6.13167 0.113819 5.6755 0.33751 5.26978C0.561202 4.86405 0.884959 4.52227 1.278 4.27698L7.67796 0.377014C8.07524 0.131403 8.53292 0.000877102 8.99999 9.73346e-08C9.46678 -0.000129605 9.92446 0.129369 10.322 0.374024V0.374024L16.722 4.27399C17.1163 4.51985 17.4409 4.86287 17.6647 5.27014C17.8885 5.67742 18.0039 6.13529 18 6.59998V14.409C18.0026 14.8725 17.8864 15.3289 17.6625 15.7347C17.4386 16.1405 17.1145 16.4821 16.721 16.727L10.321 20.633C9.92264 20.8742 9.46565 21.0012 8.99999 21C8.53428 20.9998 8.07761 20.8714 7.67998 20.629V20.629ZM8.72398 2.078L2.32396 5.97803C2.22303 6.04453 2.14066 6.13551 2.08452 6.24255C2.02838 6.34959 2.00031 6.46919 2.00298 6.59003V14.4C2.00026 14.5205 2.02818 14.6396 2.08415 14.7463C2.14013 14.853 2.22233 14.9438 2.32298 15.01L7.99999 18.48V10.919C8.00113 10.5997 8.08851 10.2867 8.25292 10.0129C8.41732 9.73922 8.65267 9.51501 8.93401 9.36401L15.446 5.841L9.28001 2.08002C9.19614 2.02738 9.09901 1.99962 8.99999 2C8.90251 1.99972 8.8069 2.02674 8.72398 2.078V2.078Z"></path>
                </symbol>
                <symbol id="icon-thumb-360" fill="currentColor" aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 640 512">
                    <path d="M496 64c-44.12 0-79.1 35.89-79.1 80v224c0 44.11 35.88 80 79.1 80s79.1-35.89 79.1-80v-224C576 99.89 540.1 64 496 64zM544 368c0 26.47-21.53 48-47.1 48c-26.47 0-47.1-21.53-47.1-48v-224c0-26.47 21.53-48 47.1-48c26.47 0 47.1 21.53 47.1 48V368zM304 192C285.9 192 269.4 198.3 256 208.4V204.6c0-46.78 29.53-89.05 73.44-105.2l12.06-4.422c8.312-3.031 12.56-12.22 9.531-20.52c-3.031-8.312-12.31-12.56-20.53-9.516L318.4 69.41C261.9 90.11 224 144.4 224 204.6L224 368c0 44.11 35.88 80 79.1 80s79.1-35.89 79.1-80l.0001-96C384 227.9 348.1 192 304 192zM352 368c0 26.47-21.53 48-47.1 48c-26.47 0-47.1-21.53-47.1-48v-96c0-26.47 21.53-48 47.1-48c26.47 0 48 21.53 48 48V368zM608 0c-17.67 0-31.1 14.33-31.1 32c0 17.67 14.33 32 31.1 32C625.7 64 640 49.67 640 32C640 14.33 625.7 0 608 0zM81.44 208l95.03-117.1C180.3 85.23 181.1 78.66 178.4 73.09C175.8 67.53 170.2 64 164 64H16C7.161 64 .0047 71.16 .0047 80S7.161 96 16 96h114.6L35.54 213.1c-3.844 4.797-4.625 11.38-1.969 16.94S41.85 240 48 240h32.72c43.72 0 79.28 35.56 79.28 79.28v17.44C160 380.4 124.4 416 80.72 416c-21.53 0-41.47-10.64-50.81-27.11c-4.375-7.703-14.16-10.38-21.81-6.016c-7.687 4.375-10.37 14.14-5.1 21.83C17.25 431.4 47.38 448 80.72 448c61.37 0 111.3-49.92 111.3-111.3V319.3C192 258.2 142.5 208.4 81.44 208z"></path>
                </symbol>
            </svg>
        </template>
        <link href="cdn/shop/t/130/assets/sticky-atc.aio.min.css" rel="stylesheet" media="all" onload="this.media='all'"><template class="t4s-d-none" id="t4s-sticky-atc-temp">
            <div data-sticky-addtocart="" class="t4s-sticky-atc sticky_layout_mb--minimal t4s-pf t4s-b-0 t4s-l-0 t4s-r-0 t4s-op-0 t4s-pe-none">


                <div class="t4s-sticky-atc__banner" id="t4s-sticky-atc__banner" aria-hidden="true" style="
      color: #fff;
      background-color: #ed546f;
    ">
                    Order now to get Free Delivery worth ₹190
                </div>

                <div class="t4s-sticky-atc__product">
                    <div data-sticky-img="" class="t4s-sticky-atc__img t4s-pr">
                        <img loading="lazy" class="lazyloadt4s t4s-lz--fadeIn" data-orginal="cdn/shop/files/Untitled-1_0001_MHMP044_01.jpg" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20800%20800%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="800" height="800" alt="Vida Storage Box">
                        <span class="lazyloadt4s-loader is-bg-img" style="background: url(cdn/shop/files/Untitled-1_0001_MHMP044_01.jpg)"></span>
                    </div>
                    <!-- <div class="t4s-sticky-atc__infos">
        <div class="t4s-sticky-atc__title">Vida Storage Box</div>
        <div data-sticky-price class="t4s-sticky-atc__price">₹2,795.00</div>
      </div> --><!-- <div  class="t4s-sticky-atc__v-title"></div>-->
                </div>
                <div class="t4s-sticky-atc__btns">
                    <div data-quantity-wrapper="" class="t4s-quantity-wrapper t4s-sticky-atc__qty">
                        <button data-quantity-selector="" data-decrease-qty="" type="button" class="t4s-quantity-selector is--minus" aria-label="ATC descrease quantity"><svg focusable="false" class="icon icon--minus" viewBox="0 0 10 2" role="presentation">
                                <path d="M10 0v2H0V0z" fill="currentColor"></path>
                            </svg></button>
                        <input data-quantity-value="" type="number" class="t4s-quantity-input" step="1" min="1" max="50" name="quantity" value="1" size="4" pattern="[0-9]*" inputmode="numeric" aria-label="ATC quantity">
                        <button data-quantity-selector="" data-increase-qty="" type="button" class="t4s-quantity-selector is--plus" aria-label="ATC increase quantity"><svg focusable="false" class="icon icon--plus" viewBox="0 0 10 10" role="presentation">
                                <path d="M6 4h4v2H6v4H4V6H0V4h4V0h2v4z" fill="currentColor" fill-rule="evenodd"></path>
                            </svg></button>
                    </div>
                    <button data-animation-atc="{ &quot;ani&quot;:&quot;none&quot;,&quot;time&quot;:6000 }" type="button" data-action-atc="" data-variant-id="46448138453238" class="t4s-sticky-atc__atc t4s-btn-loading__svg">
                        <span class="t4s-btn-atc_text">
                            Add to cart
                            <script>
                                const stickyCartBanner = document.getElementById("t4s-sticky-atc__banner");
                                if (stickyCartBanner) {
                                    stickyCartBanner.setAttribute("aria-hidden", "false");
                                    const parentElement = stickyCartBanner.parentElement;
                                    var windowWidth = window.innerWidth;
                                    if (parentElement && window.innerWidth <= 768) {
                                        parentElement.style.borderTopLeftRadius = "28px";
                                        parentElement.style.borderTopRightRadius = "28px";
                                    }
                                }
                            </script>
                        </span>
                        <span class="t4s-loading__spinner" hidden="">
                            <svg width="16" height="16" hidden="" class="t4s-svg-spinner" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="t4s-path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </template>


        <div>

            <div id="verifiedPartnerContainer" class="verified-partner-container">
                <div class="verified-partner-content">
                    <div class="verified-partner-heading">
                        <div class="verified-partner-heading-text">Because Your Home Deserves The Best</div>
                        <div class="modal-close-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 14 14" fill="none">
                                <path d="M1 1L13 13" stroke="#7A7A7A" stroke-width="1" stroke-linecap="round"></path>
                                <path d="M13 1L0.999999 13" stroke="#7A7A7A" stroke-width="1" stroke-linecap="round"></path>
                            </svg>

                        </div>
                    </div>
                    <div class="verified-partner-desc">
                        We have a 30+ verification checks for all our partners. We verify the manufacturing quality, material quality, packaging, dispatch time and customer reviews
                    </div>
                </div>
            </div>

            <script src="https://cdn.hyperspeed.me/script/vaaree.com/cdn/shop/t/130/assets/verified-partner-popup.js?v=86899356996053975681708928286"></script>
        </div>

        <div>
            <div class="best-offer-container" id="best-offer-container">
                <div class="head-border-container">
                    <div class="head-border"></div>
                </div>
                <div class="offer-details">
                    <div class="offers-popup-header">
                        <div class="header-text">
                            <div class="popup-title">Best Offers For You!</div>
                            <div class="offers-to-apply"></div>
                        </div>
                        <div class="popup-close-button mob-close-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 14 14" fill="none">
                                <path d="M1 1L13 13" stroke="#7A7A7A" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M13 1L0.999999 13" stroke="#7A7A7A" stroke-width="2" stroke-linecap="round"></path>
                            </svg>

                        </div>
                    </div>
                    <div class="offers-list"></div>
                </div>
            </div>
        </div>

        <div>
            <div id="show-badges-info-modals">
                <div class="head-border-container">
                    <div class="head-border"></div>
                </div>
                <div class="info-modal-container">
                    <div class="info-modal-wrapper">
                        <div class="info-modal-header">
                            <img src="https://cdn.shopify.com/s/files/1/0632/2526/6422/files/fastdelivery.svg?v=1711640721" height="32" width="32" class="info-modal-img">
                            <span class="info-modal-text"></span>
                        </div>
                        <div id="info-popup-close-button" onclick="closeModal(event)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 14 14" fill="none">
                                <path d="M1 1L13 13" stroke="#7A7A7A" stroke-width="2" stroke-linecap="round"></path>
                                <path d="M13 1L0.999999 13" stroke="#7A7A7A" stroke-width="2" stroke-linecap="round"></path>
                            </svg>

                        </div>
                    </div>

                    <div id="info-modals-text"></div>
                </div>
            </div>
        </div>




        <script defer="" src="cdn/shop/t/130/assets/carousel-indicator.aio.min.js"></script>

        <script>
            $(window).on('load', function() {
                var item = $('[data-swatch-item]');
                if (item.length !== 0) return;
                var formInput = $('[data-type="add-to-cart-form"]').find('[data-quantity-value]');
                var stickyInput = $('[data-sticky-addtocart]').find('[data-quantity-value]');
                stickyInput.val(formInput.val());
                if (formInput.length > 0 && stickyInput.length > 0) {
                    formInput.on('change', function() {
                        stickyInput.val(formInput.val() == 0 ? 1 : formInput.val());
                    });
                    stickyInput.on('change', function() {
                        formInput.val(stickyInput.val() == 0 ? 1 : stickyInput.val());
                    });
                }
            });

            const currentDate = new Date();
            const tomorrow = new Date(currentDate);
            tomorrow.setDate(currentDate.getDate() + 1);
            tomorrow.setHours(0, 0, 0, 0);
            const targetTimestamp = tomorrow.getTime();

            function updateCountdown() {
                const currentTimestamp = new Date().getTime();
                const timeRemaining = targetTimestamp - currentTimestamp;
                const hoursRemaining = Math.floor(timeRemaining / (1000 * 60 * 60));
                const minutesRemaining = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const clockSvg = `<img src=${"cdn/shop/t/130/assets/clock.svg"} height=12 width=12 alt="clock svg">`

                const countdownElement = document.getElementById("countdown-inline");
                if (countdownElement) {
                    countdownElement.innerHTML = `${clockSvg} <span class="ends_in_hrs_mins"><span class="ends_in_text">Ends in</span> <span class="hrs_mins">${hoursRemaining}h:${minutesRemaining}m</span></span>`;
                    countdownElement.style.opacity = 1;
                }
                if (timeRemaining <= 0) {
                    clearInterval(countdownInterval);
                }
            }
            const countdownInterval = setInterval(updateCountdown, 1000);
        </script>
        <style>
            #shopify-section-template--16885347778806__main .trust-banner-wrapper {
                padding: 15px 0px;
            }

            #shopify-section-template--16885347778806__main .trust-banner {
                width: 60%;
            }

            @media (max-width: 767px) {
                #shopify-section-template--16885347778806__main .trust-banner {
                    width: 100%;
                }
            }

            #shopify-section-template--16885347778806__main .best-offer-wrapper {
                width: 70%;
                font-size: 14px;
            }

            @media (max-width: 767px) {
                #shopify-section-template--16885347778806__main .best-offer-wrapper {
                    width: 100%;
                    font-size: 12px;
                }
            }
        </style>
    </section>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var mainSlider = document.querySelector(`.available_offers_content`);
        var sliderContainer = mainSlider.querySelector('.main_content_wrapper');
        var sliderLeftArrow = mainSlider.querySelector('.container-icon-back');
        var sliderRightArrow = mainSlider.querySelector('.container-icon-next');
        var sliderScrollStep = 280;

        sliderLeftArrow.style.opacity = '0';
        sliderContainer.addEventListener('scroll', () => {
            if (sliderContainer.scrollLeft === 0) {
                sliderLeftArrow.style.opacity = '0';
            } else {
                sliderLeftArrow.style.opacity = '1';
            }

            if (sliderContainer.scrollLeft + sliderContainer.clientWidth >= sliderContainer.scrollWidth) {
                sliderRightArrow.style.opacity = '0';
            } else {
                sliderRightArrow.style.opacity = '1';
            }
        });

        sliderLeftArrow.addEventListener("click", function() {
            sliderContainer.scrollBy({
                left: -sliderScrollStep,
                behavior: 'smooth'
            });
        });
        sliderRightArrow.addEventListener("click", function() {
            sliderContainer.scrollBy({
                left: sliderScrollStep,
                behavior: 'smooth'
            });
        });

        if (sliderContainer.scrollWidth > sliderContainer.clientWidth) {
            sliderLeftArrow.style.display = "block";
            sliderRightArrow.style.display = "block";
        } else {
            sliderLeftArrow.style.display = "none";
            sliderRightArrow.style.display = "none";
        }
    });
</script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<?php
include "include/footer.php";
?>