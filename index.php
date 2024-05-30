<?php
include "include/header.php";
?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <section id="shopify-section-template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d" class="shopify-section t4s-section t4s_bk_flickity t4s-section-all t4s_tp_cdt t4s-featured-collections">

        <div class="t4s-section-inner t4s_nt_se_template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d t4s_se_template--16885348139254__e21fd993-7204-4a35-aa17-d21b1c47ca2d t4s-container-wrap" style="--bg-color: ;--bg-gradient: ;--border-cl: #e5e5e5;--mg-top: ;--mg-right: auto;--mg-bottom: 30px;--mg-left:auto;--pd-top: 30px;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: ;--mgtb-right: auto;--mgtb-bottom: 30px;--mgtb-left: auto;--pdtb-top: 30px;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: ;--mgmb-right: auto;--mgmb-bottom: 20px;--mgmb-left: auto;--pdmb-top: 20px;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div class="t4s-list-collections t4s-has-collection5 t4s-collection-border-false t4s_ratio1_1 t4s_position_8 t4s_cover t4s-row  t4s-justify-content-center t4s-row-cols-lg-6 t4s-row-cols-md-3 t4s-row-cols-3 t4s-gx-md-30 t4s-gy-md-30 t4s-gx-20 t4s-gy-20" style="--title-cl-pri: #222222;--title-cl-pri-hover: #000000;--title-cl-second: #fff;--title-cl-second-hover: #fff;--subtitle-cl: #ffffff;--subtitle-cl2: #222;--count-cl-pri: #222222;--count-cl-second: #fff;--border-cl: #e5e5e5;--item-rd: 50%;--item-pd: 0px;--space-bottom: 15px;--space-bottom-tb: 20px;--space-bottom-mb: 15px;">


                    <?php $sql = mysqli_query($con, "select id,categoryName, categoryImage  from category limit 6");
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>

                        <div class="t4s-col-item t4s-collection-item t4s-coll-style-5" data-select-flickity>
                            <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline hdt-reveal="slide-in">
                                <div class="t4s-coll-img t4s-pr" data-cacl-slide>

                                    <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="collections.php?cid=<?php echo $row['id']; ?>" target="_self">
                                        <div class="t4s_ratio t4s-bg-11" style="--aspect-ratioapt: 1.0;background: url(cdn/shop/collections/buy-product-title-at-vaaree-online_d4251e91-8e08-4929-b0ec-89c57eb7aa9ccd26.jpg?v=1710244392&amp;width=1); ">
                                            <img src="<?php echo "admin/uploads/category/" . $row['categoryImage']; ?>" width="800" height="800" alt="Buy <?php echo $row['categoryName']; ?> at ERA Creatix , best home decor store in India">
                                        </div>
                                    </a>
                                </div>
                                <div class="t4s-cate-wrapper">
                                    <a class="t4s-cat-title" href="collections.php?cid=<?php echo $row['id']; ?>" target="_self">
                                        <span class="t4s-text"><?php echo $row['categoryName']; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
    </section>

    <div class="t4s-prs-footer t4s-has-btn-view-all t4s-text-center" style="margin-bottom: 25px;">
        <a class="t4s-btn t4s-viewall-btn t4s-btn-base t4s-btn-style-outline t4s-btn-size-large t4s-btn-icon-true t4s-btn-color-dark t4s-btn-effect-default" href="all-collections.php">
            View All
            <svg class="t4s-btn-icon" viewBox="0 0 14 10">
                <use xlink:href="#t4s-icon-btn"></use>
            </svg>
        </a>
    </div>

    <br>

    <!-- <div class="t4s-container">
        <div timeline="" hdt-reveal="slide-in" class="t4s-top-heading t4s_des_title_9 t4s-text-center" style="--heading-height: px; --tophead_mb: 30px; --animation-order: 0;" observed="">
            <div class="heading-testimonials-star ">

                <h3 class="t4s-section-title t4s-title"><span>Transform Your Space</span></h3>
            </div><span class="t4s-section-des t4s-subtitle">Discover Stylish Decor for Every Room!</span>
        </div>
        <div class="isotopet4s t4s-collection-border-false t4s_ratio1_1 t4s_position_8 t4s_cover t4s-row t4s-gx-md-30 t4s-gx-10 t4s-gy-md-30 t4s-gy-10 isotopet4s-enabled" data-isotopet4s-js="{ &quot;itemSelector&quot;: &quot;.grid-item&quot;, &quot;layoutMode&quot;: &quot;packery&quot; }" style="--title-cl-pri: #ffffff; --title-cl-pri-hover: #222222; --title-cl-second: #222; --title-cl-second-hover: #fff; --subtitle-cl: #878787; --subtitle-cl2: #fff; --count-cl-pri: #222222; --count-cl-second: #fff; --border-cl: #e5e5e5; --item-rd: 0%; --item-pd: 0px; --space-bottom: 20px; --space-bottom-mb: 10px; position: relative; height: 578.5px;">
            <div class="t4s-col-item grid-item t4s-collection-item t4s-coll-style-8 t4s-col-lg-3 t4s-col-md-3 t4s-col-6" id="b_template--16885348139254__bbfb4423-3622-497b-a1ed-1df6a22b44b8-collection_item-2" style="position: absolute; left: 0px; top: 0px;">
                <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline="" hdt-reveal="slide-in" observed="">
                    <div class="t4s-coll-img t4s-pr" data-cacl-slide="">
                        <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="/collections/wall-plates" target="_self">
                            <div class="t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="--aspect-ratioapt: 1.0;background: url(//vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1); ">
                                <img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes ls-is-cached lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="600" alt="" data-srcset="//vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1600 1600w" sizes="259px" srcset="//vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/01_Wall_Plates.png?v=1713531816&amp;width=1600 1600w">
                            </div>
                        </a>
                    </div>
                    <div class="t4s-cate-wrapper">
                        <a class="t4s-cat-title" href="/collections/wall-plates" target="_self">
                            <span class="t4s-text">Collection title</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="t4s-col-item grid-item t4s-collection-item t4s-coll-style-8 t4s-col-lg-3 t4s-col-md-3 t4s-col-6" id="b_template--16885348139254__bbfb4423-3622-497b-a1ed-1df6a22b44b8-collection_item-3" style="position: absolute; left: 289.25px; top: 0px;">
                <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline="" hdt-reveal="slide-in" observed="">
                    <div class="t4s-coll-img t4s-pr" data-cacl-slide="">


                        <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="/collections/mirrors" target="_self">


                            <div class="t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="--aspect-ratioapt: 1.0;background: url(//vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1); "><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes ls-is-cached lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="600" alt="" data-srcset="//vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=100 100w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=200 200w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=400 400w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=600 600w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=700 700w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=800 800w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=900 900w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1600 1600w" sizes="259px" srcset="//vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=100 100w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=200 200w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=400 400w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=600 600w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=700 700w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=800 800w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=900 900w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/03_Mirrors.png?v=1713531685&amp;width=1600 1600w"></div>


                        </a>

                    </div>
                    <div class="t4s-cate-wrapper">
                        <a class="t4s-cat-title" href="/collections/mirrors" target="_self">
                            <span class="t4s-text">Collection title</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="t4s-col-item grid-item t4s-collection-item t4s-coll-style-8 t4s-col-lg-6 t4s-col-md-6 t4s-col-12" id="b_template--16885348139254__bbfb4423-3622-497b-a1ed-1df6a22b44b8-collection_item-1" style="position: absolute; left: 578.5px; top: 0px;">
                <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline="" hdt-reveal="slide-in" observed="">
                    <div class="t4s-coll-img t4s-pr" data-cacl-slide="">


                        <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="/collections/showpieces-vases" target="_self">


                            <div class="t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="--aspect-ratioapt: 1.0;background: url(//vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1); "><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes ls-is-cached lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="1270" height="1270" alt="" data-srcset="//vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1600 1600w" sizes="549px" srcset="//vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/05_Showpieces_Vases.png?v=1713531816&amp;width=1600 1600w"></div>


                        </a>

                    </div>
                    <div class="t4s-cate-wrapper">
                        <a class="t4s-cat-title" href="/collections/showpieces-vases" target="_self">
                            <span class="t4s-text">Collection title</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="t4s-col-item grid-item t4s-collection-item t4s-coll-style-8 t4s-col-lg-3 t4s-col-md-3 t4s-col-6" id="b_template--16885348139254__bbfb4423-3622-497b-a1ed-1df6a22b44b8-collection_item-5" style="position: absolute; left: 0px; top: 289.25px;">
                <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline="" hdt-reveal="slide-in" observed="" style="--animation-order: 1;">
                    <div class="t4s-coll-img t4s-pr" data-cacl-slide="">


                        <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="/collections/wall-decor" target="_self">


                            <div class="t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="--aspect-ratioapt: 1.0;background: url(//vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1); "><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes ls-is-cached lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="600" alt="" data-srcset="//vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1600 1600w" sizes="259px" srcset="//vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=100 100w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=200 200w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=400 400w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=600 600w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=700 700w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=800 800w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=900 900w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/02_Wall_Decor.png?v=1713531816&amp;width=1600 1600w"></div>


                        </a>

                    </div>
                    <div class="t4s-cate-wrapper">
                        <a class="t4s-cat-title" href="/collections/wall-decor" target="_self">
                            <span class="t4s-text">Collection title</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="t4s-col-item grid-item t4s-collection-item t4s-coll-style-8 t4s-col-lg-3 t4s-col-md-3 t4s-col-6" id="b_template--16885348139254__bbfb4423-3622-497b-a1ed-1df6a22b44b8-collection_item-6" style="position: absolute; left: 289.25px; top: 289.25px;">
                <div class="t4s-cat-content t4s-source-image t4s-eff t4s-eff-none t4s-eff-img-none t4s-text-center t4s-pr t4s-oh" timeline="" hdt-reveal="slide-in" observed="" style="--animation-order: 2;">
                    <div class="t4s-coll-img t4s-pr" data-cacl-slide="">


                        <a class="t4s_cat_item_link t4s-img-wrap t4s-d-block" href="/collections/clocks" target="_self">


                            <div class="t4s_ratio t4s-bg-11 t4s-child-lazyloaded" style="--aspect-ratioapt: 1.0;background: url(//vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1); "><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff lazyautosizes ls-is-cached lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="600" height="600" alt="" data-srcset="//vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=100 100w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=200 200w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=400 400w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=600 600w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=700 700w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=800 800w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=900 900w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1600 1600w" sizes="259px" srcset="//vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=100 100w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=200 200w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=400 400w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=600 600w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=700 700w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=800 800w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=900 900w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/04_Clocks.png?v=1713531815&amp;width=1600 1600w"></div>


                        </a>

                    </div>
                    <div class="t4s-cate-wrapper">
                        <a class="t4s-cat-title" href="/collections/clocks" target="_self">
                            <span class="t4s-text">Collection title</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <section id="shopify-section-template--16885348139254__7ba2f38b-cb58-4972-8dbd-5f384c4794a8" class="shopify-section t4s-section t4s-section-all t4s_tp_cdt t4s_tp_cd t4s_tp_istope t4s-banner">
        <div class="t4s-section-inner t4s_nt_se_template--16885348139254__7ba2f38b-cb58-4972-8dbd-5f384c4794a8 t4s_se_template--16885348139254__7ba2f38b-cb58-4972-8dbd-5f384c4794a8 t4s-container-wrap " style="--bg-color: ;--bg-gradient: ;--border-cl: ;--mg-top: 10px;--mg-right: auto;--mg-bottom: 20px;--mg-left:auto;--pd-top: ;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: 10px;--mgtb-right: auto;--mgtb-bottom: 20px;--mgtb-left: auto;--pdtb-top: ;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: 10px;--mgmb-right: auto;--mgmb-bottom: 20px;--mgmb-left: auto;--pdmb-top: ;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div class="t4s-banner-holder isotopet4s t4s_position_8 t4s_contain t4s-equal-height-false t4s-row t4s-gx-md-20 t4s-gy-md-20 t4s-gx-10 t4s-gy-10 isotopet4s-enabled" data-isotopet4s-js="{ &quot;itemSelector&quot;: &quot;.t4s-banner-wrap&quot;, &quot;layoutMode&quot;: &quot;packery&quot; }" style="position: relative; height: 584.718px;">
                    <div class="t4s-col-item t4s-banner-wrap t4s-col-lg-8 t4s-col-md-8 t4s-col-12 bl-template--16742562300150__7ba2f38b-cb58-4972-8dbd-5f384c4794a8-1674049403cf4a09cb-0" style="position: absolute; left: 0px; top: 0px;">
                        <div data-t4s-animate="" class="t4s-banner-item t4s-eff t4s-eff-none t4s-eff-img-none t4s_ratioadapt t4scuspx1_true t4scuspx2_true t4scuspx3_true t4s-animate-init t4s_animated" style="--aspect-ratioapt: 2;--aspect-ratioaptmb: 1.6758703481392556;--aspect-ratio-cusdt : 380px;--aspect-ratio-custb : 380px;--aspect-ratio-cusmb :200px;">
                            <div class="t4s-banner-inner" style="--bg-overlay:rgba(0, 0, 0, 0.0);" timeline="" hdt-reveal="slide-in" observed=""><a href="/collections/lamps-lightings" target="_self" class="t4s-d-block t4s_ratio t4s_ratio_hasmb" style="--aspect-ratioapt: 2.036656891495601;--aspect-ratioaptmb: 1.6758703481392556;"><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-md-none lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201396%20833%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="1396" height="833" alt="" data-srcset="//vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=100 100w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=200 200w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=400 400w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=600 600w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=700 700w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=800 800w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=900 900w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1600 1600w" sizes="467px" srcset="//vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=100 100w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=200 200w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=400 400w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=600 600w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=700 700w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=800 800w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=900 900w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-md-none" style="background: url(//vaaree.com/cdn/shop/files/Mob_Banner_01.jpg?v=1715861468&amp;width=1)"></span>
                                    <img loading="eager" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-none t4s-d-md-block lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%204167%202046%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="4167" height="2046" alt="" data-srcset="//vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=100 100w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=200 200w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=400 400w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=600 600w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=700 700w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=800 800w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=900 900w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1600 1600w" sizes="859.4692082111437px" srcset="//vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=100 100w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=200 200w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=400 400w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=600 600w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=700 700w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=800 800w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=900 900w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-none t4s-d-md-block" style="background: url(//vaaree.com/cdn/shop/files/Web_Banner_01_1.jpg?v=1715861454&amp;width=1)"></span></a>
                                <div class="t4s-banner-content t4s-content-position t4s-pa t4s-auto t4s-pe-none t4s-text-md-center t4s-text-center t4s-bg-content-false t4s-br-content-false t4s-br-style-solid" style="--time-animation:1s;--p-left:50%;--p-hx:-50%;--p-top:50%;--p-vy:-50%; --p-left-mb:50%;--p-hx-mb:-50%;--p-top-mb:50%;--p-vy-mb:-50%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="t4s-col-item t4s-banner-wrap t4s-col-lg-4 t4s-col-md-4 t4s-col-6 bl-template--16742562300150__7ba2f38b-cb58-4972-8dbd-5f384c4794a8-1674049403cf4a09cb-3" style="position: absolute; left: 0px; top: 288.656px;">
                        <div data-t4s-animate="" class="t4s-banner-item t4s-eff t4s-eff-none t4s-eff-img-none t4s_ratioadapt t4scuspx1_true t4scuspx2_true t4scuspx3_true t4s-animate-init t4s_animated" style="--aspect-ratioapt: 2;--aspect-ratioaptmb: 0.7990430622009569;--aspect-ratio-cusdt : 200px;--aspect-ratio-custb : 180px;--aspect-ratio-cusmb :200px;">
                            <div class="t4s-banner-inner" style="--bg-overlay:rgba(0, 0, 0, 0.0);" timeline="" hdt-reveal="slide-in" observed=""><a href="/collections/cushions-covers" target="_self" class="t4s-d-block t4s_ratio t4s_ratio_hasmb" style="--aspect-ratioapt: 2.0;--aspect-ratioaptmb: 0.7990430622009569;"><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-md-none lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201670%202090%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="1670" height="2090" alt="" data-srcset="//vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=100 100w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=200 200w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=400 400w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=600 600w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=700 700w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=800 800w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=900 900w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1600 1600w" sizes="228.52631578947364px" srcset="//vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=100 100w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=200 200w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=400 400w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=600 600w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=700 700w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=800 800w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=900 900w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-md-none" style="background: url(//vaaree.com/cdn/shop/files/Artboard_2_4_803aaf42-dc11-43b8-9fee-093a42a67539.jpg?v=1715144269&amp;width=1)"></span>
                                    <img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-none t4s-d-md-block lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%204200%202100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="4200" height="2100" alt="" data-srcset="//vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=100 100w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=200 200w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=400 400w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=600 600w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=700 700w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=800 800w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=900 900w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1600 1600w" sizes="420px" srcset="//vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=100 100w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=200 200w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=400 400w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=600 600w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=700 700w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=800 800w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=900 900w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-none t4s-d-md-block" style="background: url(//vaaree.com/cdn/shop/files/Artboard_1_4_debc1ec3-895d-46e7-8cc2-850bd15d860a.jpg?v=1715144269&amp;width=1)"></span></a>
                                <div class="t4s-banner-content t4s-content-position t4s-pa t4s-auto t4s-pe-none t4s-text-md-center t4s-text-center t4s-bg-content-false t4s-br-content-false t4s-br-style-solid" style="--time-animation:1s;--p-left:50%;--p-hx:-50%;--p-top:50%;--p-vy:-50%; --p-left-mb:50%;--p-hx-mb:-50%;--p-top-mb:50%;--p-vy-mb:-50%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="t4s-col-item t4s-banner-wrap t4s-col-lg-4 t4s-col-md-4 t4s-col-6 bl-ab349601-bf2d-483f-aec9-7fb6f2e747e1" style="position: absolute; left: 238.5px; top: 288.656px;">
                        <div data-t4s-animate="" class="t4s-banner-item t4s-eff t4s-eff-none t4s-eff-img-none t4s_ratioadapt t4scuspx1_true t4scuspx2_true t4scuspx3_true t4s-animate-init t4s_animated" style="--aspect-ratioapt: 2;--aspect-ratioaptmb: 0.79875;--aspect-ratio-cusdt : 200px;--aspect-ratio-custb : 180px;--aspect-ratio-cusmb :200px;">
                            <div class="t4s-banner-inner" style="--bg-overlay:rgba(0, 0, 0, 0.0);" timeline="" hdt-reveal="slide-in" observed=""><a href="/collections/bottles-sippers-flasks" target="_self" class="t4s-d-block t4s_ratio t4s_ratio_hasmb" style="--aspect-ratioapt: 2.0;--aspect-ratioaptmb: 0.79875;"><img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-md-none lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201278%201600%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="1278" height="1600" alt="" data-srcset="//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=100 100w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=200 200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=400 400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=600 600w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=700 700w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=800 800w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=900 900w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1600 1600w" sizes="228.44249999999997px" srcset="//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=100 100w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=200 200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=400 400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=600 600w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=700 700w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=800 800w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=900 900w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-md-none" style="background: url(//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_15.49.38_1.jpg?v=1714997149&amp;width=1)"></span>
                                    <img loading="lazy" class="t4s-lz--fadeIn t4s-obj-eff t4s-d-none t4s-d-md-block lazyautosizes lazyloadt4sed" data-widths="[100,200,400,600,700,800,900,1000,1200,1400,1600]" data-optimumx="2" data-sizes="auto" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%201600%20800%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" width="1600" height="800" alt="" data-srcset="//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=100 100w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=200 200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=400 400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=600 600w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=700 700w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=800 800w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=900 900w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1600 1600w" sizes="420px" srcset="//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=100 100w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=200 200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=400 400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=600 600w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=700 700w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=800 800w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=900 900w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1000 1000w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1200 1200w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1400 1400w, //vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1600 1600w">
                                    <span class="lazyloadt4s-loader is-bg-img t4s-d-none t4s-d-md-block" style="background: url(//vaaree.com/cdn/shop/files/WhatsApp_Image_2024-05-03_at_16.06.26_1.jpg?v=1714997148&amp;width=1)"></span></a>
                                <div class="t4s-banner-content t4s-content-position t4s-pa t4s-auto t4s-pe-none t4s-text-md-center t4s-text-center t4s-bg-content-false t4s-br-content-false t4s-br-style-solid" style="--time-animation:1s;--p-left:50%;--p-hx:-50%;--p-top:50%;--p-vy:-50%; --p-left-mb:50%;--p-hx-mb:-50%;--p-top-mb:50%;--p-vy-mb:-50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section id="shopify-section-template--16885348139254__top_heading_BQcfam" class="shopify-section t4s-section t4s-section-all">


        <link href="cdn/shop/t/130/assets/topheading-section.aio.minbcae.css?v=23351320662196648501703745418" rel="stylesheet" type="text/css" media="all" />
        <div class="t4s-section-inner t4s_nt_se_template--16885348139254__top_heading_BQcfam t4s_nt_se_template--16885348139254__top_heading_BQcfam t4s-container-wrap" style="--bg-color: ;--bg-gradient: ;--border-cl: ;--mg-top: 50px;--mg-right: auto;--mg-bottom: 0px;--mg-left:auto;--pd-top: ;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: 50px;--mgtb-right: auto;--mgtb-bottom: 0px;--mgtb-left: auto;--pdtb-top: ;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: 40px;--mgmb-right: auto;--mgmb-bottom: 0px;--mgmb-left: auto;--pdmb-top: ;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div timeline hdt-reveal="slide-in" class="t4s-top-heading t4s-text-center">
                    <div timeline hdt-reveal="slide-in" class="t4s-top-heading-heading t4s_des_title_9 t4s-text-center">
                        <h3 class="t4s-section-title t4s-title"><span>What we sell<span></h3>
                    </div>
                    <div timeline hdt-reveal="slide-in" class="t4s-top-heading-subheading">
                        <!-- <span class="t4s-section-des t4s-subtitle">So let’s hear from our favourites</span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <section id="shopify-section-template--16885348139254__featured_collection_tg8zAq" class="shopify-section t4s-section t4s_bk_flickity t4s-section-all t4s_tp_cd t4s-featured-products t4s_tp_istope">

        <div data-not-main data-ntajax-options='{"id":"template--16885348139254__featured_collection_tg8zAq","type":"AjaxDefault","isProduct":true}' class="t4s-section-inner t4s_nt_se_template--16885348139254__featured_collection_tg8zAq t4s_se_template--16885348139254__featured_collection_tg8zAq t4s-container-wrap " style="--bg-color: ;--bg-gradient: ;--border-cl: ;--mg-top: ;--mg-right: auto;--mg-bottom: 50px;--mg-left:auto;--pd-top: ;--pd-right: ;--pd-bottom: ;--pd-left: ;--mgtb-top: ;--mgtb-right: auto;--mgtb-bottom: 50px;--mgtb-left: auto;--pdtb-top: ;--pdtb-right: ;--pdtb-bottom: ;--pdtb-left: ;--mgmb-top: ;--mgmb-right: auto;--mgmb-bottom: 30px;--mgmb-left: auto;--pdmb-top: ;--pdmb-right: ;--pdmb-bottom: ;--pdmb-left: ;">
            <div class="t4s-container">
                <div data-collection-url="/collections/deal-of-the-day" data-t4s-resizeobserver class="t4s-flicky-slider t4s_box_pr_slider t4s-products t4s-text-default t4s_ratio1_1 t4s_position_8 t4s_cover     t4s-dots-style-default t4s-dots-cl-dark t4s-dots-round-true t4s-dots-hidden-mobile-false   t4s-row t4s-row-cols-lg-5 t4s-row-cols-md-2 t4s-row-cols-2 t4s-gx-md-30 t4s-gy-md-30 t4s-gx-10 t4s-gy-10  flickityt4s" data-flickityt4s-js='{"setPrevNextButtons":true,"arrowIcon":"2","imagesLoaded": 0,"adaptiveHeight": 0, "contain": 1, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": false,"prevNextButtons": false,"percentPosition": 1,"pageDots": true, "autoPlay" : 0, "pauseAutoPlayOnHover" : true }' style="--space-dots: 10px;--flickity-btn-pos: 30px;--flickity-btn-pos-mb: 10px;--tophead_mb: 30px;">

                    <?php
                    $ret = mysqli_query($con, "select * from products");
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>

                        <div class="t4s-product t4s-pr-grid t4s-pr-style1 t4s-pr-7970515943670  t4s-col-item" id="7970515943670" style="position: relative;" isrecommendation=false data-product-options='{ "id":"7970515943670","cusQty":"1","available":true, "handle":"fly-high-bar-accessories-set-of-seven", "isDefault": false, "VariantFirstID": 44903127843062, "customBadge":["_Deal Of The Day"], "customBadgeHandle":["_deal-of-the-day"],"dateStart":1676358983, "compare_at_price":479000,"price":137400, "isPreoder":false,"isExternal":false,"image2":"\/\/vaaree.com\/cdn\/shop\/products\/0002_04_46c3f5a0-115e-4977-9f1b-b2edb9cdd74f.jpg?v=1686911211\u0026width=1","alt":"Buy Fly High Bar Accessories - Set Of Seven at Vaaree online | Beautiful Cocktail Tools Set to choose from","isGrouped":false,"maxQuantity":9999 }'>

                            <!-- <span class="item__badge badge--deal-of-the-day" style="">
                                Deal Of The Day
                            </span> -->

                            <style>
                                .t4s_ratio img {
                                    object-fit: inherit;
                                }
                            </style>
                            <div class="t4s-product-wrapper">
                                <div class="t4s-product-inner t4s-pr t4s-oh">
                                    <div class="t4s-product-img t4s_ratio">
                                        <img class="t4s-product-main-img" src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>" width="800" height="800" alt="Buy <?php echo htmlentities($row['productName']); ?> | EraCreatix ">
                                    </div>
                                    <div class="t4s-product-badge"></div>
                                    <div class="t4s-product-btns">
                                        <div></div>
                                        <div></div>
                                    </div>
                                    <div class="t4s-product-btns2">
                                        <div data-tooltip="right"></div>
                                        <div data-tooltip="right"></div>
                                    </div>
                                    <a class="t4s-full-width-link" href="products.php?pid=<?= $row['id']; ?>" aria-label="Product View"></a>
                                </div>
                                <div class="t4s-product-info">
                                    <div class="t4s-product-info__inner">
                                        <h3 class="t4s-product-title">
                                            <a href="products.php?pid=<?= $row['id']; ?>">
                                                <?php echo htmlentities($row['productName']); ?>
                                            </a>
                                        </h3>
                                        <p class="grid-product__material">
                                            <?= $row['productCompany'] ?>
                                        </p>
                                        <div class="t4s-product-price">
                                            <span class="t4s-mrp-price">
                                                ₹<?php echo htmlentities($row['productPrice']); ?>
                                            </span>
                                            <del>
                                                ₹<?php echo htmlentities($row['productPriceBeforeDiscount']); ?>
                                            </del>
                                            <span class="t4s-badge-discountprice"><?= round((($row['productPriceBeforeDiscount'] - $row['productPrice']) / $row['productPriceBeforeDiscount']) * 100, 2); ?>%Off</span>
                                            <!-- <div class="todays-offer-price">₹1,374.00 - Today&#39;s Offer</div> -->
                                        </div>
                                        <?php if ($row['productAvailability'] == 'In Stock') { ?>
                                            <div class="text-center">
                                                <a href="account/cart.php?pid=<?php echo htmlentities($row['id']) ?>&action=cart" class="t4s-product-form__submit t4s-btn t4s-btn-style-default 
                                                t4s-btn-color-primary t4s-w-100 t4s-justify-content-center  
                                                t4s-btn-effect-sweep-to-top t4s-btn-loading__svg" style="padding: 10px">
                                                    Add to Cart
                                                </a>
                                            </div>
                                        <?php } else { ?>
                                            <div class="action" style="color:red">Out of Stock</div>
                                        <?php } ?>

                                        <div class="delivery_date_wrapper" id="delivery_date_wrapper_7970515943670" style="display: none;">
                                            <span class="delivery_date_section">Delivery by</span>
                                            <span id="t4s-end_delivery_7970515943670" class="delivery_date"></span>
                                        </div>
                                        <link href="cdn/shop/t/130/assets/delivery_date_fbv1786.css?v=38677654350300697171712046284" rel="stylesheet" type="text/css" media="all" />
                                        <div class="delivery-info-fbv delivery-info-fbv-plp" id="delivery_date_wrapper_fbv_7970515943670" style="display:none">
                                            <svg width="51" height="20" viewBox="0 0 51 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="fbv-icon">
                                                <rect width="50.9091" height="20" rx="10" fill="#E8C463" />
                                                <path d="M16.7308 5.8277C16.7761 5.63729 16.6317 5.45453 16.436 5.45453H11.0139C10.8748 5.45453 10.7536 5.54916 10.7199 5.68406L10.4926 6.59315C10.4448 6.78441 10.5895 6.96968 10.7866 6.96968H16.2197C16.36 6.96968 16.482 6.87332 16.5145 6.73679L16.7308 5.8277Z" fill="#262727" />
                                                <path d="M25.0608 5.45453C25.2494 5.45453 25.3922 5.62493 25.3591 5.8106L25.1561 6.95279C25.1304 7.09742 25.0046 7.20278 24.8577 7.20278H21.6633C21.5157 7.20278 21.3897 7.30901 21.3646 7.45439L21.1323 8.80378C21.1004 8.98897 21.243 9.15823 21.4309 9.15823H23.4785C23.6678 9.15823 23.8108 9.33003 23.7764 9.51627L23.5775 10.5937C23.551 10.7374 23.4257 10.8417 23.2795 10.8417H21.0151C20.8679 10.8417 20.7419 10.9476 20.7166 11.0926L20.1568 14.2946C20.1314 14.4396 20.0055 14.5454 19.8583 14.5454H18.2597C18.0713 14.5454 17.9286 14.3753 17.9613 14.1897L19.4601 5.70485C19.4857 5.56007 19.6115 5.45453 19.7585 5.45453H25.0608Z" fill="#262727" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M33.2167 7.81143C33.1218 8.34669 32.9016 8.79131 32.5563 9.14528C32.3515 9.3552 32.1224 9.52716 31.869 9.66117C31.73 9.73472 31.7349 10.0187 31.8699 10.0995C32.05 10.2072 32.2054 10.3467 32.3361 10.518C32.5865 10.846 32.7117 11.2302 32.7117 11.6705C32.7117 11.8087 32.6987 11.9425 32.6728 12.072C32.5433 12.8317 32.1721 13.4361 31.5591 13.885C30.9462 14.3253 30.1649 14.5454 29.2152 14.5454H25.3418C25.1533 14.5454 25.0106 14.3753 25.0434 14.1897L26.5421 5.70485C26.5677 5.56007 26.6935 5.45453 26.8405 5.45453H30.6785C31.4987 5.45453 32.1333 5.62288 32.5822 5.95958C33.0311 6.29628 33.2556 6.76248 33.2556 7.35818C33.2556 7.50495 33.2426 7.65603 33.2167 7.81143ZM29.5907 9.14528C29.962 9.14528 30.2598 9.06327 30.4843 8.89924C30.7088 8.7352 30.8469 8.49778 30.8987 8.18698C30.9073 8.13519 30.9116 8.06612 30.9116 7.97978C30.9116 7.72942 30.8296 7.53948 30.6656 7.40998C30.5016 7.27185 30.2598 7.20278 29.9404 7.20278H28.745C28.5976 7.20278 28.4716 7.30883 28.4464 7.45406L28.2148 8.7905C28.1827 8.97579 28.3253 9.14528 28.5134 9.14528H29.5907ZM30.4713 11.7741C30.4886 11.6705 30.4972 11.5928 30.4972 11.541C30.4972 11.2907 30.4066 11.0964 30.2253 10.9583C30.044 10.8115 29.7936 10.7381 29.4742 10.7381H28.1224C27.9755 10.7381 27.8497 10.8436 27.8241 10.9883L27.5689 12.4283C27.536 12.614 27.6787 12.7842 27.8672 12.7842H29.1375C29.5174 12.7842 29.8195 12.6979 30.044 12.5252C30.2685 12.3526 30.4109 12.1022 30.4713 11.7741Z" fill="#262727" />
                                                <path d="M38.2691 11.4707C38.1363 11.7343 37.7435 11.6719 37.6989 11.3802L36.8326 5.71178C36.81 5.56382 36.6827 5.45453 36.533 5.45453H34.7981C34.6095 5.45453 34.4667 5.62499 34.4998 5.81068L36.0106 14.2955C36.0364 14.4401 36.1621 14.5454 36.309 14.5454H38.6443C38.7564 14.5454 38.8593 14.4836 38.9119 14.3846L43.4202 5.89975C43.5275 5.69791 43.3812 5.45453 43.1526 5.45453H41.4865C41.3721 5.45453 41.2674 5.51901 41.2159 5.62122L38.2691 11.4707Z" fill="#262727" />
                                                <path d="M11.3986 9.48854C11.426 9.34571 11.5509 9.24241 11.6963 9.24241H15.6508C15.8436 9.24241 15.9874 9.42019 15.9471 9.60879L15.7528 10.5179C15.7229 10.6577 15.5994 10.7576 15.4564 10.7576H11.5225C11.3323 10.7576 11.1892 10.5844 11.2249 10.3976L11.3986 9.48854Z" fill="#262727" />
                                                <path d="M15.2604 13.3856C15.2929 13.2002 15.1502 13.0303 14.962 13.0303H7.98358C7.84453 13.0303 7.72332 13.1249 7.68959 13.2598L7.46232 14.1689C7.41451 14.3602 7.55916 14.5454 7.7563 14.5454H14.8026C14.9497 14.5454 15.0756 14.4397 15.101 14.2947L15.2604 13.3856Z" fill="#262727" />
                                            </svg>
                                            <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="thundering-icon">
                                                <path d="M6.85918 1L0.90918 9.4H5.80918L4.75918 15L10.7092 6.6H5.80918L6.85918 1Z" fill="#E8C463" stroke="#262727" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <span class="t4s-end_delivery-fbv" id="t4s-end_delivery_fbv_7970515943670"></span>

                                        </div>
                                        <div id="t4s-end_delivery_7970515943670"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="t4s-prs-footer t4s-has-btn-view-all t4s-text-center" style="margin-bottom: 25px;">
        <a class="t4s-btn t4s-viewall-btn t4s-btn-base t4s-btn-style-outline t4s-btn-size-large t4s-btn-icon-true t4s-btn-color-dark t4s-btn-effect-default" href="all-products.php">
            View All
            <svg class="t4s-btn-icon" viewBox="0 0 14 10">
                <use xlink:href="#t4s-icon-btn"></use>
            </svg>
        </a>
    </div> -->


    <?php
    include "include/footer.php";
    ?>