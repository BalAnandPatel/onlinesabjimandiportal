<?php
include "include/header.php";
$page_category = mysqli_query($con, "select id,categoryName, categoryImage  from category where `id`='" . $_GET['cid'] . "'");
$page_category_row = mysqli_fetch_array($page_category);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $ret = mysqli_query($con, "select * from products where `category` = '" . $_GET['cid'] . "' limit " . $_GET['page'] * 2);
} else {
    $page = 1;
    $ret = mysqli_query($con, "select * from products where `category` = '" . $_GET['cid'] . "' limit 2");
}

?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--16885348434166__41e67383-d98d-47ec-a5d4-87e556f2840d" class="shopify-section t4s-container t4s-heading-container">
        <link rel="stylesheet" href="cdn/shop/t/130/assets/collection-heading.aio.min.css" media="all">
        <div>
            <div class="collection-heading-container">
                <div class="collection-heading-introduction">
                    <h1 class="collection-title"><?= $page_category_row['categoryName']; ?></h1>
                    <div class="collection-description">Grab our varied products styles and design and slumber like a champion.</div>
                </div>
                <div class="collection-sales-count">
                    <div class="collection-sales-count-gif">
                        <!-- <img alt="sales-counter" class="sales-count-gif" height="14px" loading="lazy" src="cdn/shop/t/130/assets/sales_count_live.gif?v=108634221033204322221696354366" width="14px"> -->
                        <!-- <span class="sales-count-value sales-count-value-mobile collection-sales-count-text">14699</span> -->
                    </div>
                    <!-- <div class="collection-sales-count-text">
                        <span class="sales-count-value sales-count-value-desktop">14699</span>
                        <span class="sales-count-text">Bedsheets delivered recently</span>
                    </div> -->
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
                <div class="main-items-slider collection-desktop" style="gap: 10px"></div>
                <!-- <div class="main-items-slider collection-mobile" style="gap: 10px">
                    <div>
                        <a href="collections.php?cid=summer-bedsheets">
                            <div class="banner-collection--img">
                                <img class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes" width="1330" height="1330" alt="first-glance-banner-1" id="image-with-aspect-ratio-mobile-1" >
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="collections/bedsheets?filter.p.m.my_fields.material=100%25+Cotton">
                            <div class="banner-collection--img">
                                <img loading="lazy" style="object-position: " class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="1330" height="1330" alt="first-glance-banner-2" id="image-with-aspect-ratio-mobile-2" data-srcset="cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=100 100w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=200 200w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=400 400w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=600 600w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=700 700w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=800 800w" sizes="320px" srcset="cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=100 100w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=200 200w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=400 400w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=600 600w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=700 700w, cdn/shop/files/Bedding_mobile_1.png?v=1692350055&amp;width=800 800w">
                            </div>
                        </a>
                    </div>
                    <div>
                        <div class="banner-collection--img">
                            <img loading="lazy" style="object-position: " class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="1330" height="1330" alt="first-glance-banner-3" id="image-with-aspect-ratio-mobile-3" data-srcset="cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=100 100w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=200 200w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=400 400w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=600 600w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=700 700w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=800 800w" sizes="320px" srcset="cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=100 100w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=200 200w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=400 400w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=600 600w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=700 700w, cdn/shop/files/TC_Info_dd2b74df-044a-4421-935c-a31d70e11b8b.png?v=1692364337&amp;width=800 800w">
                        </div>
                    </div>
                    <div>
                        <div class="banner-collection--img">
                            <img loading="lazy" style="object-position: " class=" t4s-lz--fadeIn t4s-obj-eff lazyautosizes lazyloadt4sing" data-widths="[100,200,400,600,700,800]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="1330" height="1330" alt="first-glance-banner-4" id="image-with-aspect-ratio-mobile-4" data-srcset="cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=100 100w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=200 200w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=400 400w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=600 600w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=700 700w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=800 800w" sizes="320px" srcset="cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=100 100w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=200 200w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=400 400w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=600 600w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=700 700w, cdn/shop/files/Bedding_mobile_3.png?v=1692350055&amp;width=800 800w">
                        </div>
                    </div>
                </div> -->
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
    <section id="shopify-section-template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d" class="shopify-section t4s-section t4s_bk_flickity t4s-section-all t4s_tp_cdt t4s-featured-collections">

        <div class="t4s-section-inner t4s_nt_se_template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d t4s_se_template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d t4s-container-wrap" style="--bg-color: ;--bg-gradient: ;--border-cl: #e5e5e5;--mg-top: ;--mg-right: auto;--mg-bottom: 30px;--mg-left:auto;--pd-top: 30px;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: ;--mgtb-right: auto;--mgtb-bottom: 30px;--mgtb-left: auto;--pdtb-top: 30px;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: ;--mgmb-right: auto;--mgmb-bottom: 20px;--mgmb-left: auto;--pdmb-top: 20px;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div class="t4s-list-collections t4s-has-collection5 t4s-collection-border-false t4s_ratio1_1 t4s_position_8 t4s_cover t4s-row  t4s-justify-content-center t4s-row-cols-lg-6 t4s-row-cols-md-3 t4s-row-cols-3 t4s-gx-md-30 t4s-gy-md-30 t4s-gx-20 t4s-gy-20" style="--title-cl-pri: #222222;--title-cl-pri-hover: #000000;--title-cl-second: #fff;--title-cl-second-hover: #fff;--subtitle-cl: #ffffff;--subtitle-cl2: #222;--count-cl-pri: #222222;--count-cl-second: #fff;--border-cl: #e5e5e5;--item-rd: 50%;--item-pd: 0px;--space-bottom: 15px;--space-bottom-tb: 20px;--space-bottom-mb: 15px;">


                    <?php $sql = mysqli_query($con, "select * from subcategory where `categoryId` = '" . $_GET['cid'] . "'");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>

                        <div class="t4s-col-item t4s-collection-item t4s-coll-style-5" data-select-flickity>
                            <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline hdt-reveal="slide-in">
                                <div class="t4s-coll-img t4s-pr" data-cacl-slide>

                                    <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="collections.php?cid=<?php echo $row['id']; ?>" target="_self">
                                        <div class="t4s_ratio t4s-bg-11" style="--aspect-ratioapt: 1.0;background: url(cdn/shop/collections/buy-product-title-at-vaaree-online_d4251e91-8e08-4929-b0ec-89c57eb7aa9ccd26.jpg?v=1710244392&amp;width=1); ">
                                            <img src="<?php echo "admin/uploads/subcategory/" . $row['subcategoryImage']; ?>" width="800" height="800" alt="Buy <?php echo $row['subcategory']; ?> at ERA Creatix , best home decor store in India">
                                        </div>
                                    </a>
                                </div>
                                <div class="t4s-cate-wrapper">
                                    <a class="t4s-cat-title" href="collections.php?cid=<?php echo $row['id']; ?>" target="_self">
                                        <span class="t4s-text"><?php echo $row['subcategory']; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
    </section>
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
    <section id="shopify-section-template--16885348434166__main" class="shopify-section t4s-section t4s-section-main t4s-collection-page t4s_bk_flickity t4s_tp_istope t4s_tp_countdown"><!-- sections/main-collection.liquid -->

        <link href="cdn/shop/t/130/assets/collection-pages.aio.min.css?v=8013305485271043971711313785" rel="stylesheet" type="text/css" media="all">

        <link href="cdn/shop/t/130/assets/collection-products-list.aio.min.css?v=63705346789784507521703745383" rel="stylesheet" type="text/css" media="all">
        <link href="cdn/shop/t/130/assets/pagination.aio.min.css?v=136667778103927277341703745401" rel="stylesheet" type="text/css" media="all">

        <div class="t4s-section-inner t4s_nt_se_template--16885348434166__main t4s_se_template--16885348434166__main t4s-se-container " style="--bg-color: ;--bg-gradient: ;--border-cl: ;--mg-top: ;--mg-right: auto;--mg-bottom: 50px;--mg-left:auto;--pd-top: ;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: ;--mgtb-right: auto;--mgtb-bottom: 50px;--mgtb-left: auto;--pdtb-top: ;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: ;--mgmb-right: auto;--mgmb-bottom: 20px;--mgmb-left: auto;--pdmb-top: ;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container t4s-plp">
                <h2 class="hide collection--title" style="display:none">Bedsheets</h2>
                <div class="t4s-container-inner  ">
                    <div class="t4s-collection-header t4s-d-flex 4s-align-items-center t4s-collection-header-plp sticky-filter-sort-container">

                        <div class="t4s-btn-filter-wrapper t4s-btn-filter-wrapper-button">
                            <button data-btn-as-a="" class="t4s-btn-filter" data-drawer-options="{ &quot;id&quot;:&quot;#t4s-filter-hidden&quot; }" aria-label="Show filters">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16">
                                    <path d="M324.4 64C339.6 64 352 76.37 352 91.63C352 98.32 349.6 104.8 345.2 109.8L240 230V423.6C240 437.1 229.1 448 215.6 448C210.3 448 205.2 446.3 200.9 443.1L124.7 385.6C116.7 379.5 112 370.1 112 360V230L6.836 109.8C2.429 104.8 0 98.32 0 91.63C0 76.37 12.37 64 27.63 64H324.4zM144 224V360L208 408.3V223.1C208 220.1 209.4 216.4 211.1 213.5L314.7 95.1H37.26L140 213.5C142.6 216.4 143.1 220.1 143.1 223.1L144 224zM496 400C504.8 400 512 407.2 512 416C512 424.8 504.8 432 496 432H336C327.2 432 320 424.8 320 416C320 407.2 327.2 400 336 400H496zM320 256C320 247.2 327.2 240 336 240H496C504.8 240 512 247.2 512 256C512 264.8 504.8 272 496 272H336C327.2 272 320 264.8 320 256zM496 80C504.8 80 512 87.16 512 96C512 104.8 504.8 112 496 112H400C391.2 112 384 104.8 384 96C384 87.16 391.2 80 400 80H496z"></path>
                                </svg>Filter</button>
                        </div>


                        <link rel="stylesheet" href="cdn/shop/t/130/assets/base_drop.min.css?v=126664663891124449391695367402" media="all">
                        <div class="t4s-filter_sortby_container">
                            <div class="t4s-dropdown t4s-dropdown__sortby">
                                <button class="sort_by_hidden" data-dropdown-open="" data-position="bottom-end" data-id="t4s__sortby"><span class="t4s-d-none t4s-d-md-block" style="display:none!important">Featured</span><span class="t4s-d-mobile-none t4s-d-none t4s-d-md-block">Sort</span><span class="t4s-d-md-none">Sort</span><svg class="t4s-icon-select-arrow" role="presentation" viewBox="0 0 19 12">
                                        <use xlink:href="#t4s-select-arrow"></use>
                                    </svg></button>
                                <div data-dropdown-wrapper="" class="t4s-dropdown__wrapper mm-sort-box t4s-drawer" id="t4s__sortby">
                                    <div class="t4s-dropdown__header">
                                        <span class="t4s-dropdown__title">Sort by:</span>
                                        <button class="sort-close-icon" data-dropdown-close="" aria-label="Close">
                                            <svg role="presentation" class="t4s-iconsvg-close" viewBox="0 0 16 14">
                                                <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="t4s-dropdown__content">
                                        <div class="sort-by-radio  is--selected ">
                                            <input type="checkbox" id="myCheckbox__1" class="t4s-checkbox-wrapper" name="sort option" checked="">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="manual">
                                                Featured</button>
                                        </div>



                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__3" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="title-ascending">
                                                Alphabetically, A-Z</button>
                                        </div>


                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__4" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="title-descending">
                                                Alphabetically, Z-A</button>
                                        </div>


                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__5" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="price-ascending">
                                                Price, low to high</button>
                                        </div>


                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__6" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="price-descending">
                                                Price, high to low</button>
                                        </div>


                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__7" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="created-ascending">
                                                Date, old to new</button>
                                        </div>


                                        <div class="sort-by-radio ">
                                            <input type="checkbox" id="myCheckbox__8" class="t4s-checkbox-wrapper" name="sort option">
                                            <label for="myCheckbox"></label>
                                            <button class="sortPopUpClose" data-dropdown-item="" data-sortby-item="" data-value="created-descending">
                                                Date, new to old</button>
                                        </div>

                                        <script>
                                            document.querySelectorAll('.sort-by-radio').forEach(ele => {
                                                ele.addEventListener('click', () => {
                                                    document.querySelectorAll('.sort-by-radio').forEach(e => {
                                                        e.querySelector('.t4s-checkbox-wrapper').checked = false;
                                                    })
                                                    ele.querySelector('.t4s-checkbox-wrapper').checked = true;
                                                })
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mm-filter-label vaaree-filter-label_mobile">
                            <div class="collection-filter">

                                <div class="collection-filter__label">

                                    <button class="collection-filter__label-button " attr="blockid_1">
                                        Size
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_2">
                                        Product type
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_3">
                                        Design Style
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_4">
                                        Themes
                                    </button>

                                    <button class="collection-filter__label-button " attr="blockid_5">
                                        Material
                                    </button>

                                    <button class="collection-filter__label-button " attr="blockid_6">
                                        Thread Count Range
                                    </button>

                                    <button class="collection-filter__label-button " attr="blockid_7">
                                        Sub Type
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_8">
                                        Price
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_9">
                                        GSM Range
                                    </button>

                                    <button class="collection-filter__label-button " attr="blockid_10">
                                        Color
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_11">
                                        Availability
                                    </button>

                                    <button class="collection-filter__label-button  hideFilter " attr="blockid_12">
                                        FBV
                                    </button>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="t4s-row">
                        <div class="t4s-col-item t4s-col-12 t4s-main-area t4s-main-collection-page is--enabled">
                            <div class="t4s_box_pr_grid t4s-products  t4s-text-default t4s_ratio1_1  t4s_position_default t4s_contain t4s-row  t4s-justify-content-center t4s-row-cols-2 t4s-row-cols-md-3 t4s-row-cols-lg-4 t4s-gx-md-30 t4s-gy-md-10 t4s-gx-15 t4s-gy-4">




                                <?php while ($products = mysqli_fetch_array($ret)) { ?>

                                    <div class="t4s-product t4s-pr-grid t4s-pr-style1 t4s-pr-8195757703414 t4s-col-item is-t4s-pr-created" id="8195757703414" style="position: relative;">

                                        <div class="t4s-product-wrapper">
                                            <div class="t4s-product-inner t4s-pr t4s-oh">
                                                <div class="t4s-product-img t4s_ratio" data-style="--aspect-ratioapt: 1.0">
                                                    <!-- <img data-pr-img=class="t4s-product-main-img lazyautosizes lazyloadt4sed" loading="lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-widths="[100,200,330,400,500,600,700,800,900]" data-optimumx="2" data-sizes="auto" width="800" height="800" alt="Buy Evara Floral Bedsheet - Cream Online in India | Bedsheets" data-srcset="cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=100 100w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=200 200w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=330 330w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=400 400w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=500 500w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=600 600w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=700 700w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=800 800w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=900 900w" sizes="341px" srcset="cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=100 100w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=200 200w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=330 330w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=400 400w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=500 500w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=600 600w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=700 700w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=800 800w, cdn/shop/files/BN1A1188.jpg?v=1697644854&amp;width=900 900w"> -->
                                                    <img class="t4s-product-main-img" src="admin/productimages/<?php echo htmlentities($products['id']); ?>/<?php echo htmlentities($products['productImage1']); ?>" width="800" height="800" alt="Buy <?php echo htmlentities($row['productName']); ?> EraCreatix online | Beautiful Cocktail Tools Set to choose from">

                                                    <span class="lazyloadt4s-loader"></span>
                                                    <noscript><img class="t4s-product-main-img" loading="lazy" src="cdn/shop/files/BN1A1188.jpg?v=1697644854&width=600" alt="Buy Evara Floral Bedsheet - Cream Online in India | Bedsheets on Vaaree"></noscript>
                                                </div>
                                                <div data-product-badge="" data-sort="sale,new,soldout,preOrder,custom" class="t4s-product-badge"><span data-badge-sale="" class="t4s-badge-item t4s-badge-sale">-30%</span></div>
                                                <div class="t4s-product-btns">
                                                </div>
                                                <div class="t4s-product-btns2">
                                                </div><a data-pr-href="" class="t4s-full-width-link is--href-replaced" href="products.php?pid=<?= $products['id'] ?>" aria-label="Product View"></a>
                                            </div>
                                            <div class="t4s-product-info">
                                                <div class="t4s-product-info__inner">
                                                    <h3 class="t4s-product-title"><a data-pr-href="" href="products.php?pid=<?= $products['id'] ?>" class="is--href-replaced"><?= $products['productName']; ?></a></h3>
                                                    <p class="grid-product__material">
                                                        <?= $products['productCompany'] ?>
                                                    </p>
                                                    <div class="t4s-product-price" data-pr-price="" data-product-price="">
                                                        <span class="t4s-price-from">
                                                            <!-- <span class="t4s-price-from">From</span> -->
                                                            ₹<?= $products['productPrice'] ?>
                                                        </span>
                                                        <del>₹<?= $products['productPriceBeforeDiscount'] ?></del>
                                                        <span class="t4s-badge-discountprice">
                                                            <?= round((($products['productPriceBeforeDiscount'] - $products['productPrice']) / $products['productPriceBeforeDiscount']) * 100, 2); ?>%Off</span>
                                                    </div>
                                                    <?php if ($products['productAvailability'] == 'In Stock') { ?>
                                                        <div class="text-center">
                                                            <a href="account/cart.php?pid=<?php echo htmlentities($products['id']) ?>&action=cart" class="t4s-product-form__submit t4s-btn t4s-btn-style-default 
                                                t4s-btn-color-primary t4s-w-100 t4s-justify-content-center  
                                                t4s-btn-effect-sweep-to-top t4s-btn-loading__svg" style="padding: 10px">
                                                                Add to Cart
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="action" style="color:red">Out of Stock</div>
                                                    <?php } ?>
                                                    <div class="delivery_date_wrapper t4s-d-none" id="delivery_date_wrapper_8195757703414">
                                                        <span class="delivery_date_section">Delivery by</span>
                                                        <span id="shipping-estimate-date" class="delivery_date"></span>
                                                    </div>
                                                    <link href="cdn/shop/t/130/assets/delivery_date_fbv.css" rel="stylesheet" type="text/css" media="all">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

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



                            </div>
                            <div class="t4s-row t4s-prs-footer t4s-has-btn-infinite t4s-text-center">
                                <div class="t4s-pagination-wrapper t4s-w-100 hdt-reveal--offscreen">
                                    <a href="collections.php?cid=<?= $_GET['cid']; ?>&page=<?= $page + 1; ?>" class="t4s-pr t4s-loadmore-btn t4s-btn-loading__svg t4s-btn t4s-btn-base t4s-btn-style-outline t4s-btn-size-large t4s-btn-icon-false t4s-btn-color-primary t4s-btn-effect-rectangle-out t4s-lm-onscroll-init">
                                        <span class="t4s-btn-atc_text">Load More</span>

                                        <div class="t4s-loading__spinner t4s-dn">
                                            <svg width="16" height="16" aria-hidden="true" focusable="false" role="presentation" class="t4s-svg__spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                                <circle class="t4s-path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <aside data-sidebar-content="" class="t4s-col-item t4s-col-12 t4s-col-lg-3 t4s-sidebar t4s-dn">
                            <div class="t4s-loading--bg"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

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