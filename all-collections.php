<?php
include "include/header.php";
$page_category = mysqli_query($con, "select * from category");
$page_category_row = mysqli_fetch_array($page_category);
// if (isset($_GET['page'])) {
//     $page = $_GET['page'];
//     $ret = mysqli_query($con, "select * from products where `category` = '" . $_GET['cid'] . "' limit " . $_GET['page'] * 2);
// } else {
//     $page = 1;
//     $ret = mysqli_query($con, "select * from products where `category` = '" . $_GET['cid'] . "' limit 2");
// }

?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--16885348434166__41e67383-d98d-47ec-a5d4-87e556f2840d" class="shopify-section t4s-container t4s-heading-container">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/collection-heading.aio.min.css" media="all">
        <div>
            <link href="cdn/shop/t/130/assets/heading-template.aio.min.css" rel="stylesheet" type="text/css" media="all" />
            <div class="header-banner t4s-heading-fullwidth_false  lazyloadt4s" style="--space-padding-dk:50px;--space-padding-mb:50px;--space-mg-dk:50px;--space-mg-mb:50px;--bg-cl:#000000;--op:0.54;--bg_repeat:no-repeat;--bg_size:cover;--bg_pos:center center;--height-mobile:0px;--height-desktop:0px">
                <div class="page-head t4s-pr t4s-oh page_bg_img t4s-text-center">
                    <div class="t4s-container t4s-pr t4s-z-100">
                        <h1 data-lh="20" data-lh-md="20" data-lh-lg="20" class="title-head t4s-bl-item t4s-animation-none t4s-text-bl t4s-fnt-fm-inherit t4s-font-italic-false t4s-uppercase-false t4s-hidden-mobile-false t4s-br-mb- t4s-text-shadow-false" id="b_5ceb80b4-7249-43c6-bab2-723276f6f6a2" style="--animation: ;--delay-animation:s;--text-cl:#ffffff;--text-fs:20px;--text-fw:500;--text-lh:20px;--text-ls:0px;--text-mgb:0px;--text-fs-mb:20px;--text-lh-mb:20px;--text-ls-mb:0px;--text-mgb-mb:0px;">POPULAR CATEGORIES </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="shopify-section-template--16885348434166__0db95a41-2b33-4aee-a91e-f1355720fe38" class="shopify-section">
        <style>
            .banner-collection--img {
                flex: 1 1 calc(100% / 3);
            }

            .banner-collection--img img {
                min-width: 425px;
                height: 100px;
            }

            .collection-mobile {
                display: none;
            }
        </style>
        <link rel="stylesheet" href="cdn/shop/t/130/assets/collection-banner-with-slider-common.aio.min.css" media="all">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/common-slider-container.aio.min.css" media="all">
        <div id="slider-container-test-container-banner" style="padding-top: 5px;padding-bottom: 20px">
            <div class="slider-sub-container">
                <div class="container-icon-back">
                    <span class="back-icon" style="top: 37%; opacity: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                            <circle cx="10" cy="10" r="10" fill="black" fill-opacity="0.4"></circle>
                            <path d="M13 16L7 10L13 4" stroke="white" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
                <div class="container-icon-next">
                    <span class="next-icon" style="top: 37%; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                            <circle cx="10" cy="10" r="10" transform="rotate(-180 10 10)" fill="black" fill-opacity="0.4"></circle>
                            <path d="M7 4L13 10L7 16" stroke="white" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var sliderId = "slider-container-test-container-banner"
                var sliderContainer = document.querySelector(`#${sliderId} .slider-sub-container .main-items-slider`);
                var sliderLeftArrow = document.querySelector(`#${sliderId} .container-icon-back .back-icon`);
                var sliderRightArrow = document.querySelector(`#${sliderId} .container-icon-next .next-icon`);
                var sliderScrollStep = 440;

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
            function removeClassOnMediaQueryBanner(mediaQuery, className) {
                var sliderId = "slider-container-test-container-banner"
                var mainContainer = document.querySelector(`#${sliderId}`);
                var parentElement = mainContainer.parentElement;
                var mediaQueryList = window.matchMedia(mediaQuery);

                function handleMediaQueryChange(event) {
                    if (event.matches) {
                        parentElement.classList.remove(className);
                    } else {
                        parentElement.classList.add(className);
                    }
                }
                handleMediaQueryChange(mediaQueryList);
                mediaQueryList.addEventListener('change', handleMediaQueryChange);
            }

            var mediaQuery = '(max-width: 766px)';
            var classNameToRemove = 't4s-container';
            removeClassOnMediaQueryBanner(mediaQuery, classNameToRemove);
        </script>

    </div>
    <div id="shopify-section-template--16885348434166__1575786c-e189-41b8-bf2e-7d8626ddebe2" class="shopify-section">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/sub-collection-with-slider-common.aio.min.css" media="all">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/common-slider-container.aio.min.css" media="all">
        <div id="slider-container-sub-collection-container" style="padding-top: 10px;padding-bottom: 24px">
            <div class="slider-sub-container">
                <div class="container-icon-back">
                    <span class="back-icon" style="top: 43%; opacity: 0; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                            <circle cx="10" cy="10" r="10" fill="black" fill-opacity="0.4"></circle>
                            <path d="M13 16L7 10L13 4" stroke="white" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>

                <!-- <style>
                    .setsize{
                        width: 180px;
                    }
                </style> -->

                <div class="main-items-slider " id="subcollection-slider" style="gap: 30px; display: flex;">
                    <?php
                    $sql = mysqli_query($con, "select * from category ");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>

                        <div style="max-width: 200px;">
                            <a href="collections.php?cid=<?php echo $row['id']; ?>" class="collection-image_wrapper flex">
                                <div class="collection--img handle-overlap">
                                    <img style="width: 100%; height:100%;" class="t4s-obj-eff subcollection-img collection-image-main lazyautosizes" src="<?php echo "admin/uploads/category/" . $row['categoryImage']; ?>" width="800" height="800" alt="<?= $row['categoryImage']; ?>">
                                    <img style="width: 100%; height:100%;" class="t4s-lz--fadeIn t4s-obj-eff collection-frame" src="https://cdn.shopify.com/s/files/1/0632/2526/6422/files/Category_Icons-24_1_bb87cf2e-e8b4-45b2-814e-5b9229281d11.png?v=1714742226 " alt="subcollection Fabulous Indian ">
                                </div>
                                <div class="collection--text">
                                    <?php echo $row['categoryName']; ?>
                                </div>
                            </a>
                        </div>

                        <!---->

                    <?php } ?>


                </div>
                <div class="container-icon-next">
                    <span class="next-icon" style="top: 43%; display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 20 20" fill="none">
                            <circle cx="10" cy="10" r="10" transform="rotate(-180 10 10)" fill="black" fill-opacity="0.4"></circle>
                            <path d="M7 4L13 10L7 16" stroke="white" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var sliderId = "slider-container-sub-collection-container"
                var sliderContainer = document.querySelector(`#${sliderId} .slider-sub-container .main-items-slider`);
                var sliderLeftArrow = document.querySelector(`#${sliderId} .container-icon-back .back-icon`);
                var sliderRightArrow = document.querySelector(`#${sliderId} .container-icon-next .next-icon`);
                var sliderScrollStep = 220;

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
            function removeClassOnMediaQueryBanner(mediaQuery, className) {
                var sliderId = "slider-container-sub-collection-container"
                var mainContainer = document.querySelector(`#${sliderId}`);
                var parentElement = mainContainer.parentElement;
                var mediaQueryList = window.matchMedia(mediaQuery);

                function handleMediaQueryChange(event) {
                    if (event.matches) {
                        parentElement.classList.remove(className);
                    } else {
                        parentElement.classList.add(className);
                    }
                }
                handleMediaQueryChange(mediaQueryList);
                mediaQueryList.addEventListener('change', handleMediaQueryChange);
            }

            var mediaQuery = '(max-width: 766px)';
            var classNameToRemove = 't4s-container';
            removeClassOnMediaQueryBanner(mediaQuery, classNameToRemove);
        </script>
        <script>
            var subCollectionSlider = document.getElementById("subcollection-slider");
            var subCollectionSize = 6
            if (window.innerWidth >= 768 && subCollectionSize < 3) {
                subCollectionSlider.style.display = "none";
            } else if (window.innerWidth >= 768 && subCollectionSize >= 3) {
                subCollectionSlider.style.display = "flex";
            }
        </script>


    </div>
    <section id="shopify-section-template--16885348434166__8c4f56e8-411a-4a0d-9354-cacd75a338f3" class="shopify-section t4s-section t4s-section-all t4s_tp_cdt t4s_tp_cd t4s_tp_istope t4s-banner"><!-- section/banner.liquid -->
        <div class="t4s-section-inner t4s_nt_se_template--16885348434166__8c4f56e8-411a-4a0d-9354-cacd75a338f3 t4s_se_template--16885348434166__8c4f56e8-411a-4a0d-9354-cacd75a338f3 t4s-container-wrap " style="--bg-color: ;--bg-gradient: ;--border-cl: ;--mg-top: ;--mg-right: auto;--mg-bottom: 50px;--mg-left:auto;--pd-top: ;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: ;--mgtb-right: auto;--mgtb-bottom: 50px;--mgtb-left: auto;--pdtb-top: ;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: ;--mgmb-right: auto;--mgmb-bottom: 30px;--mgmb-left: auto;--pdmb-top: ;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div class="t4s-banner-holder isotopet4s t4s_position_8 t4s_cover t4s-equal-height-false t4s-row t4s-gx-md-30 t4s-gy-md-30 t4s-gx-10 t4s-gy-10 isotopet4s-enabled" data-isotopet4s-js="{ &quot;itemSelector&quot;: &quot;.t4s-banner-wrap&quot;, &quot;layoutMode&quot;: &quot;packery&quot; }" style="position: relative; height: 0px;"></div>
            </div>
        </div>
    </section>
    <div id="shopify-section-template--16885348434166__70870fb9-5b83-4cf6-ac46-548496a84657" class="shopify-section t4s-container">
        <style>
            .horizontal_divider {
                margin-top: 2px;
                margin-bottom: 2px;
                max-width: 100%;
                border-bottom: 2px dashed var(--horizontal-section-divider);
                height: 1px;
            }
        </style>
        <hr class="horizontal_divider">

    </div>

    <script>
        (function() {
            // disable_right_click_img
            document.addEventListener("mousedown", function(event) {
                if ((event.target || event.srcElement).tagName.toLowerCase() === "img") {
                    // Middle-click to open in new tab
                    if (event.which == 2) {
                        event.preventDefault();
                    }
                }
            });
            document.addEventListener("contextmenu", function(event) {
                if ((event.target || event.srcElement).tagName.toLowerCase() === "img") {
                    event.preventDefault();
                }
            });
            // disable_right_click_bg_img
            document.addEventListener("contextmenu", function(event) {
                if ((event.target || event.srcElement).style.backgroundImage) {
                    event.preventDefault();
                }
            });
            // Drag and drop <img loading="lazy"> elements
            const disableDragAndDropT4s = function() {
                document.body.setAttribute("ondragstart", "return false;");
                document.body.setAttribute("ondrop", "return false;");
            };
            if (document.readyState === "complete") {
                disableDragAndDropT4s();
            } else {
                document.addEventListener("DOMContentLoaded", disableDragAndDropT4s);
            }
        }());
    </script>
    </div>
    <div id="shopify-section-slider_config" class="shopify-section t4s-section t4s-section-config t4s_tp_flickity t4s-section-admn-fixed">
        <style data-shopify>
            .t4s-flicky-slider.t4s-slider-btn-cl-custom1 {
                --btn-color: #ffffff;
                --btn-background: #abb1b4;
                --btn-border: #abb1b4;
                --btn-color-hover: #ffffff;
                --btn-background-hover: #E8C463;
                --btn-border-hover: #E8C463;
            }

            .t4s-flicky-slider.t4s-slider-btn-style-outline.t4s-slider-btn-cl-custom1 {
                --btn-color: #abb1b4;
                --btn-border: #abb1b4;
                --btn-color-hover: #ffffff;
                --btn-background-hover: #E8C463;
            }

            .t4s-flicky-slider.t4s-slider-btn-style-simple.t4s-slider-btn-cl-custom1 {
                --btn-color: #abb1b4;
                --btn-border: #abb1b4;
                --btn-color-hover: #E8C463;
                --btn-border-hover: #E8C463;
            }

            .t4s-flicky-slider.t4s-dots-cl-custom1 {
                --dots-background: #abb1b4;
                --dots-background2: #ffffff;
            }

            .t4s-dots-style-number.t4s-dots-cl-custom1 {
                --dots-cl: #ffffff;
                --bg-dots-cl: #abb1b4;
            }
        </style>
        <style data-shopify>
            .t4s-flicky-slider.t4s-slider-btn-cl-custom2 {
                --btn-color: #ffffff;
                --btn-background: #7a7a7a;
                --btn-border: #7a7a7a;
                --btn-color-hover: #ffffff;
                --btn-background-hover: #7a7a7a;
                --btn-border-hover: #7a7a7a;
            }

            .t4s-flicky-slider.t4s-slider-btn-style-outline.t4s-slider-btn-cl-custom2 {
                --btn-color: #7a7a7a;
                --btn-border: #7a7a7a;
                --btn-color-hover: #ffffff;
                --btn-background-hover: #7a7a7a;
            }

            .t4s-flicky-slider.t4s-slider-btn-style-simple.t4s-slider-btn-cl-custom2 {
                --btn-color: #7a7a7a;
                --btn-border: #7a7a7a;
                --btn-color-hover: #7a7a7a;
                --btn-border-hover: #7a7a7a;
            }

            .t4s-flicky-slider.t4s-dots-cl-custom2 {
                --dots-background: #7a7a7a;
                --dots-background2: #ffffff;
            }

            .t4s-dots-style-number.t4s-dots-cl-custom2 {
                --dots-cl: #ffffff;
                --bg-dots-cl: #7a7a7a;
            }
        </style>


        <?php
        include "include/footer.php";
        ?>