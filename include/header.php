<?php
error_reporting(E_ERROR | E_PARSE);
include "include/config.php";
if (isset($_SESSION['id'])) {
    $num_cart = mysqli_query($con, "select count(id) as items from cart where `userId` = '" . $_SESSION['id'] . "'");
    $count_of_cart = mysqli_fetch_array($num_cart);
} else {
    $count_of_cart = ['items' => 0];
}

?>

<!doctype html>
<html class="t4sp-theme is-header--stuck t4s-hsticky__ready t4s-wrapper__custom rtl_false swatch_color_style_1 pr_border_style_1 pr_img_effect_2 enable_eff_img1_true badge_shape_1 css_for_wis_app_true shadow_round_img_false t4s-header__categories is-remove-unavai-1 t4_compare_false t4s-cart-count-0 t4s-pr-ellipsis-false
 no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="theme-color" content="#fff">
    <link rel="canonical" href="index.php" />
    <link rel="preconnect" href="https://cdn.shopify.com/" crossorigin>
    <link rel="shortcut icon" type="image/png" href="cdn/shop/files/apple-icon-152x152d3ee.png?v=1674062412&amp;width=32">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="cdn/shop/files/apple-icon-152x152c78b.png?v=1674062412&amp;width=152">
    <title>Online Sabji Mandi &amp; Online Sabji At Best Prices &ndash; Online Sabji Mandi</title>
    <meta name="description" content="Buy Best Vegitalbe on online Plateform &amp; Best Quality Product at your door. Safe Delivery every product.">
    <meta name="keywords" content="buy home decor, bedsheets, towels, kitchen, mugs online" />
    <meta name="author" content="Vegitable Market">

    <meta property="og:site_name" content="Online Sabji Mandi">
    <meta property="og:url" content="https://onlinesabjimandi.com/">
    <meta property="og:title" content="Buy Best Quality Vegitale &amp; Vegitable At Best Prices">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Best Quality Vegitable &amp; Best Quality Vegitable in your Door.">
    <meta property="og:image" content="http://onlinesabjimandi.com/media/logoo.png">
    <meta property="og:image:secure_url" content="https://onlinesabjimandi.com/media/logoo.png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="536">
    <meta name="twitter:site" content="@onlinesabjimandi">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Buy Best Quality Vegitable &amp; Best Quality Vegitable at your Door">
    <meta name="twitter:description" content="Vegitable and Fruits at your door &amp; Buy Vegitable for your Home Function.">
    <meta name="facebook-domain-verification" content="xdlnd89oajo8ige0bstdecpvqupqa8">
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/63225266422/digital_wallets/dialog">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Harmonia+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap" media="print" onload="this.media='all'">
    <link href="cdn/shop/t/130/assets/minified_css.minae1a.css" rel="stylesheet">
    <link href="cdn/search.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <img alt="icon" id="svgicon" width="1400" height="1400" style="pointer-events: none; position: absolute; top: 0; left: 0; width: 99vw; height: 99vh; max-width: 99vw; max-height: 99vh;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI5OTk5OXB4IiBoZWlnaHQ9Ijk5OTk5cHgiIHZpZXdCb3g9IjAgMCA5OTk5OSA5OTk5OSIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48ZyBzdHJva2U9Im5vbmUiIGZpbGw9Im5vbmUiIGZpbGwtb3BhY2l0eT0iMCI+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9Ijk5OTk5IiBoZWlnaHQ9Ijk5OTk5Ij48L3JlY3Q+IDwvZz4gPC9zdmc+" loading="lazy">
    <!-- <script defer src="cdn/shop/t/130/assets/searchtap-custome313.js?v=25382822671028881101708928283"></script>
    <script src="cdn/shop/t/130/assets/searchtap-config2ac1.js?v=99608339423431912041706333055"></script>
    <script defer src="cdn/shop/t/130/assets/searchtap7941.js?v=114025972196429877671708928283"></script>

    DeltaX Media optimization Tag Added By AKO 30 11 23-->
    <!-- End of DeltaX Media optimization Tag -->
    <script src="cdn/shop/t/130/assets/starRatingGenerator6987.js?v=143208796052626417531708928283"></script>
    <script
  src="cdn/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script>
        /* Add Reusable function here */
        function setSessionStorageItem(key, value) {
            sessionStorage.setItem(key, value);
        }

        function getSessionStorageItem(key) {
            return sessionStorage.getItem(key);
        }

        function setLocalStorageItem(key, value) {
            localStorage.setItem(key, value);
        }

        function getLocalStorageItem(key) {
            return localStorage.getItem(key);
        }
    </script>


    <script src="../cdn.codeblackbelt.com/scripts/frequently-bought-together/bootstrap.minbac4.js?version=2024041113+0530" async></script>
</head>

<body class="template-index ">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MKZJ5D6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <a class="skip-to-content-link visually-hidden" href="#MainContent">Skip to content</a>
    <div class="t4s-close-overlay t4s-op-0"></div>

    <div class="t4s-website-wrapper">
        <div id="shopify-section-title_config" class="shopify-section t4s-section t4s-section-config t4s-section-admn-fixed">

        </div>
        <div id="shopify-section-pr_item_config" class="shopify-section t4s-section t4s-section-config t4s-section-config-product t4s-section-admn-fixed">

        </div>
        <div id="shopify-section-btn_config" class="shopify-section t4s-section t4s-section-config t4s-section-admn-fixed">

        </div>
        <h2 class="site-header__logo t4s-d-none">Era Creatix</h2>
        <div id="shopify-section-announcement-bar" class="shopify-section t4-section t4-section-announcement-bar t4s_bk_flickity t4s_tp_cd">
            <script>
                try {
                    if (window.Shopify && !Shopify.designMode) {
                        document.getElementById('shopify-section-announcement-bar').remove()
                    } else {
                        document.getElementById('shopify-section-announcement-bar').setAttribute("aria-hidden", true)
                    }
                } catch (err) {}
            </script>
        </div>
        <div id="shopify-section-top-bar" class="shopify-section t4-section t4s_tp_flickity t4s_tp_cd t4s-pr">
            <div id="t4s-hsticky__sentinel" class="t4s-op-0 t4s-pe-none t4s-pa t4s-w-100"></div>

        </div>
        <header id="shopify-section-header-categories-menu" class="shopify-section t4s-section t4s-section-header t4s-is-header-categories-menu">
            <link href="cdn/shop/t/130/assets/searchtap-sticky-mobile59dd.css" rel="stylesheet" type="text/css" media="all" />
            <link href="cdn/shop/t/130/assets/searchbar-animationdb98.css" rel="stylesheet" type="text/css" media="all" />

            <!-- Design 3 code ends-->


            <div data-header-options='{ "isTransparent": false,"isSticky": true,"hideScroldown": false }' class=" t4s-header__wrapper t4s-header__design1 t4s-layout-layout_categories">
                <div class="t4s-section-header__mid t4s-pr">
                    <div class="t4s-container">
                        <div data-header-height class="t4s-row t4s-gx-15 t4s-gx-md-30 t4s-align-items-center" style="">
                            <div class="t4s-col-md-4 t4s-col-3 t4s-d-lg-none t4s-col-item" id="t4s-menu-drawer-opener">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16" fill="currentColor">
                                    <rect width="30" height="1.5"></rect>
                                    <rect y="7" width="20" height="1.5"></rect>
                                    <rect y="14" width="30" height="1.5"></rect>
                                </svg>
                                <!-- <a class="cg" href="mailto:eracreatix@gmail.com">eracreatix@gmail.com</a> -->
                                <!-- <img src="media/logoo.png" class="t4s-d-lg-block" width="50" height="43" alt="Era Creatix" style="width: 50px"> -->
                            </div>
                            <div class="t4s-col-lg-3 t4s-col-md-4 t4s-col-6 t4s-text-center t4s-text-lg-start t4s-col-item">
                                <div class=" t4s-header__logo t4s-lh-1">
                                    <a class="t4s-d-inline-block" href="index.php">
                                        <img src="media/logoo.png" class="header__normal-logo t4s-d-none t4s-d-lg-block" alt="Era Creatix" style="width: 50px">
                                        <img src="media/logoo.png" class="header__sticky-logo t4s-d-none t4s-d-none" alt="Era Creatix" style="width: 50px">
                                        <img src="media/logoo.png" class="header__mobile-logo t4s-d-lg-none" alt="Era Creatix" style="width: 50px">
                                    </a>
                                </div>
                            </div>

                            <!-- Added by team Searchtap -->
                            <div class="st-search-box hidden-mobile">
                                <div class="search-input-container">
                                    <img alt="Delivery Time Icon" class="searchbar-icon" height="11" loading="lazy" src="media/search.png" width="24" />
                                    <input type="text" autocomplete="off" placeholder="Search for products and categories" id="search2" class="st-search-input" onkeydown="key_pressed_in_search(event)" oninput="find_search_results(this)" onfocus="find_search_results(this)">
                                    <div class="placeholder-label animation">
                                        <!-- <span class="common-text">Search for</span> -->

                                        <!-- <span class="text-container-searchbar">

                                            <span class="text">Bedsheets</span>
                                            <span class="text">Cushion covers</span>
                                            <span class="text">Dining sets</span>

                                        </span> -->

                                    </div>
                                </div>
                            </div>
                            <div id="listofsearchresults">
                            </div>

                            <div class="t4s-col-lg-3 t4s-col-md-4 t4s-col-3 t4s-text-end t4s-col-group_btns t4s-col-item t4s-lh-1 t4s-flex-item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="t4s-d-none">
                                    <symbol id="icon-h-search" viewBox="0 0 18 19" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"></path>
                                    </symbol>
                                    <symbol id="icon-h-account" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </symbol>
                                    <symbol id="icon-h-heart" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </symbol>
                                    <symbol id="icon-h-cart" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="9" cy="21" r="1"></circle>
                                        <circle cx="20" cy="21" r="1"></circle>
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                        </path>
                                    </symbol>
                                </svg>
                                <div class="t4s-site-nav__icons t4s-use__kalles is--hover2 t4s-h-cart__design1 t4s-lh-1 t4s-d-inline-flex t4s-align-items-center">
                                    <?php if (isset($_SESSION['login'])) { ?>
                                        <div class="t4s-site-nav__icon t4s-site-nav__account t4s-pr t4s-d-none t4s-d-lg-inline-block">
                                            <a class="t4s-pr" href="account/dashboard.php">
                                                <svg class="t4s-icon t4s-icon--account" aria-hidden="true" focusable="false" role="presentation">
                                                    <use href="#icon-h-account"></use>
                                                </svg> <?php echo $_SESSION['username']; ?>
                                            </a>
                                        </div>
                                        <div class="t4s-site-nav__icon t4s-site-nav__account t4s-pr t4s-d-none t4s-d-lg-inline-block">
                                            <a class="t4s-pr" href="account/logout.php">
                                                <img src="media/logout.png" style="max-width: none;" width="25px" alt="logout">
                                            </a>
                                        </div>
                                    <?php } else { ?>
                                        <div class="t4s-site-nav__icon t4s-site-nav__account t4s-pr t4s-d-md-inline-block">
                                            <a class="t4s-pr" href="login.php">
                                                <svg class="t4s-icon t4s-icon--account" aria-hidden="true" focusable="false" role="presentation">
                                                    <use href="#icon-h-account"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div class="t4s-site-nav__icon t4s-site-nav__cart">
                                        <a href="cart.php" data-drawer-options='{ "id":"#t4s-mini_cart" }'>
                                            <span class="t4s-pr t4s-icon-cart__wrap">
                                                <svg class="t4s-icon t4s-icon--cart" aria-hidden="true" focusable="false" role="presentation">
                                                    <use href="#icon-h-cart"></use>
                                                </svg>
                                                <span data-cart-count class="t4s-pa t4s-op-0 t4s-ts-op t4s-count-box"><?= $count_of_cart['items'] ?></span>
                                            </span>
                                            <span class="t4s-h-cart-totals t4s-dn t4s-truncate">
                                                <span class="t4s-h-cart__divider t4s-dn">/</span>
                                                <span data-cart-tt-price class="t4s-h-cart__total">₹0.00</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="t4s-section-header__bot t4s-d-none t4s-d-lg-block">
                    <div class="t4s-container">
                        <div class="t4s-row t4s-g-0 t4s-align-items-center">
                            <div class="t4s-col t4s-col-item">
                                <nav class="t4s-navigation t4s-text-start t4s-nav__hover_sideup t4s-nav-arrow__true">
                                    <ul data-menu-nav id="t4s-nav-ul" class="t4s-nav__ul t4s-d-inline-flex t4s-flex-wrap t4s-align-items-center">

                                        <?php $sql = mysqli_query($con, "select id,categoryName  from category limit 6");
                                        while ($row = mysqli_fetch_array($sql)) {
                                        ?>
                                            <li id="item_header-categories-menu-<?php echo $row['id']; ?>" data-placement="bottom" class="t4s-type__mega menu-width__cus t4s-menu-item has--children menu-has__offsets ">
                                                <a class="t4s-lh-1 t4s-d-flex t4s-align-items-center t4s-pr" href="collections.php?cid=<?php echo $row['id']; ?>" target="_self">
                                                    <?php echo $row['categoryName']; ?>
                                                </a>
                                            </li>
                                        <?php } ?>

                                        <!-- <li id="item_b56f35b6-1f8e-4c91-833b-2301c3a688ed" class="t4s-type__simple t4s-menu-item ">
                                            <a class="t4s-lh-1 t4s-d-flex t4s-align-items-center t4s-pr" href="pages/lookbook.html" target="_blank" style="color:#EEA289">Inspiration</a>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                            <div class="t4s-col-3 t4s-text-end t4s-col-item t4s-h-cat__html t4s-rte">
                                <div class="return">
                                    <a href="">Return/Exchange</a>
                                    <i class="las la-envelope fs__14 ml__15"></i>
                                    <a class="cg" href="mailto:onlinesabjimandi@gmail.com">onlinesabjimandi@gmail.com</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="header-with-edd">
                    <div class='search-tap-mobile' id="search-tap-with-icons">
                        <!-- <div class="sticky-header-menu t4s-d-lg-none" id="push-menu-sticky">
                            <a href="index.php" data-drawer-options='{ "id":"#t4s-menu-drawer" }' class="t4s-push-menu-btn  t4s-lh-1 t4s-d-flex t4s-align-items-center" aria-label="Sidebar Menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16" fill="currentColor">
                                    <rect width="30" height="1.5"></rect>
                                    <rect y="7" width="20" height="1.5"></rect>
                                    <rect y="14" width="30" height="1.5"></rect>
                                </svg>
                            </a> -->
                    </div>

                    <form class="input-group">
                        <div class="st-search-box hidden-desktop">
                            <!-- <input type="text" autocomplete="off" placeholder="" name="q" id="st-search-mobile" class="st-search-input">  -->
                            <div class="search-input-container">
                                <img alt="Delivery Time Icon" class="searchbar-icon" height="11" loading="lazy" src="media/search.png" width="24" />
                                <input type="text" autocomplete="off" placeholder="Search for products and categories" id="search2" class="st-search-input" onkeydown="key_pressed_in_search(event)" oninput="find_search_results(this)" onfocus="find_search_results(this)">
                                <!-- <button type="button" id="learntocode_searchbtn" class="input-group-text btn btn-primary border-3" onclick="click_learntocode_search_btn()">
                                        <img alt="Delivery Time Icon" height="11" src="media/search.png" width="24" />
                                    </button> -->
                                <div class="placeholder-label animation">
                                    <!-- <span class="common-text">Search for</span>
                                    <span class="text-container-searchbar">

                                        <span class="text">Bedsheets</span>
                                        <span class="text">Cushion covers</span>
                                        <span class="text">Dining sets</span>

                                    </span> -->
                                </div>
                            </div>
                        </div>
                        <div id="listofsearchresults">
                        </div>
                    </form>


                    <div class="t4s-site-nav__icon t4s-site-nav__cart sticky-header-cart-container" id="sticky-header-cart-container">
                        <a href="cart.php" data-drawer-delay- data-drawer-options='{ "id":"#t4s-mini_cart" }'>
                            <span class="t4s-pr t4s-icon-cart__wrap">
                                <svg class="t4s-icon t4s-icon--cart sticky-header-cart-icon" aria-hidden="true" focusable="false" role="presentation">
                                    <use href="#icon-h-cart"></use>
                                </svg>
                                <span data-cart-count class="t4s-pa t4s-op-0 t4s-ts-op t4s-count-box"><?= $count_of_cart['items'] ?></span>
                            </span>
                            <span class="t4s-h-cart-totals t4s-dn t4s-truncate">
                                <span class="t4s-h-cart__divider t4s-dn">/</span>
                                <span data-cart-tt-price class="t4s-h-cart__total">₹0.00</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="sticky-edd-container"></div>
            </div>
            <script src="cdn/shop/t/130/assets/sticky-header-scroll1b87.js"></script>

    </div>

    </header>

    <div id="t4s-menu-drawer" class="t4s-drawer t4s-drawer__left" aria-hidden="true">
        <div class="t4s-drawer__header">
            <span>Menu</span>
        </div>
        <div data-tab-mb-content="" id="shopify-mb_nav" class="t4s-mb-tab__content is--active">
            <div id="shopify-section-mb_nav" class="shopify-section t4s-sp-section-mb-nav">
                <ul id="menu-mb__ul" class="t4s-mb__menu" data-section-id="mb_nav">
                       <li id="item_mb_nav-0" class="t4s-menu-item t4s-item-level-0 t4s-menu-item-has-children t4s-only_icon_false">
                            Home
                        </li>
                    <?php
                    $sql = mysqli_query($con, "select *  from category limit 6");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <li id="item_mb_nav-0" class="t4s-menu-item t4s-item-level-0 t4s-menu-item-has-children t4s-only_icon_false">
                            <a href="collections.php?cid=<?= $row['id']; ?>" target="_self">
                                <span class="t4s-nav_link_txt t4s-d-flex t4s-align-items-center"><?= $row['categoryName']; ?></span>
                                <div class="t4s-mb-nav-right-container">
                                    <span class="t4s-mb-nav__new-product-count-badge t4s-mb-nav__item_level0">
                                        +1 New
                                    </span>
                                    <span class="t4s-mb-nav__vertical-divider"></span>
                                    <!-- <span class="t4s-mb-nav__icon"></span> -->
                                </div>
                            </a>

                        </li>

                    <?php } ?>
                    
                    <li id="item_6085db0f-af41-41b9-ae4b-e133255307e9" class="t4s-menu-item t4s-item-level-0">
                        <a href="" target="_self">Return/Exchange</a>
                    </li>
                    <li id="item_c4affdec-4074-4ce1-8f90-cf3726c5067a" class="t4s-menu-item t4s-item-level-0">
                        <a href="contact.php" target="_self">Contact Us</a>
                    </li>

                    <?php if (isset($_SESSION['login'])) { ?>
                        <li id="account-menu" class="t4s-menu-item t4s-item-level-0 t4s-menu-item-btns t4s-menu-item-acount t4s-menu-item-has-children t4s-only_icon_false">
                            <a>
                                <span class="t4s-d-inline-block">
                                    <svg width="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>My account</span>
                                <span class="t4s-mb-nav__icon"></span>
                            </a>
                            <ul id="account-submenu" class="t4s-sub-menu" style="display: none;">
                                <li><a href="account/dashboard.php">Dashboard</a></li>
                                <li><a href="account/addresses.php">Addresses</a></li>
                                <li><a href="account/logout.php" data-no-instant="">Logout</a></li>
                            </ul>
                        </li>
                        <script>
                            $('#account-menu').click(function() {
                                $('#account-submenu').toggle();
                                $('#account-menu').toggleClass('is--opend');
                            });
                        </script>
                    <?php } else { ?>
                        <li class="t4s-menu-item t4s-item-level-0">
                            <a href="login.php" target="_self">Login</a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </div>
    <button id="t4s-menu-drawer-closer" class="t4s-drawer-menu__close t4s-pe-none t4s-op-0 t4s-pf" aria-hidden="true" aria-label="Close menu, categories">
        <svg class="t4s-iconsvg-close" role="presentation" viewBox="0 0 16 14">
            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd"></path>
        </svg>
    </button>

    <div id="shopify-section-custom-tag-color" class="shopify-section">

    </div>