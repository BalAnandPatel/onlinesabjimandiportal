<?php
include "include/header.php";
$address = mysqli_query($con, "select * from address where `user_id` = '" . $_SESSION['id'] . "' and `for_order` is null ");

?>

<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--16885348368630__heading" class="shopify-section page_section_heading">
        <link href="cdn/shop/t/130/assets/heading-template.aio.min.css" rel="stylesheet" type="text/css" media="all">
        <div class="header-banner t4s-heading-fullwidth_false   lazyloadt4sed" style="--space-padding-dk:50px;--space-padding-mb:50px;--space-mg-dk:50px;--space-mg-mb:50px;--bg-cl:#000000;--op:0.54;--bg_repeat:no-repeat;--bg_size:cover;--bg_pos:center center;--height-mobile:0px;--height-desktop:0px"></div>
        <style>
            .t4s-heading-fullwidth_true .t4s-container {
                width: 100%;
                max-width: 100%;
            }
        </style>
    </div>
    <section id="shopify-section-template--16885348368630__main" class="shopify-section t4s-section t4s-section-customers">
        <link href="cdn/shop/t/130/assets/customer.min.css" rel="stylesheet" type="text/css" media="all">
        <div class="t4s-customer t4s-customer-account is--addresses t4s-row">
            <div class="t4s-col-12 t4s-account-content t4s-text-center">
                <svg style="display: none">
                    <symbol id="icon-caret" viewBox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                        </path>
                    </symbol>
                </svg>
                <div>
                    <form method="post" action="checkout_func.php" id="address_form_new" accept-charset="UTF-8" aria-labelledby="AddressNewHeading" class="t4s-container">
                        <input type="hidden" name="form_type" value="place_order">
                        <input type="hidden" name="utf8" value="✓">

                        <div id="SelectAddress" class="add-form">
                            <div class="address-header-wrapper" id="stickySubHeader">
                                <a class="t4s-d-flex" id="back-arrow-from-new"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42-.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z" fill="#000000" class="color000 svgShape"></path>
                                    </svg></a>
                                <h2 id="AddressNewHeading" class="t4s_title_addresses">Ckeckout option</h2>
                            </div>

                            <div class="select-addr-label top-space">
                                <label for="AddressCountryNew">Select Address</label>
                                <div class="select">
                                    <select id="selectAddressopt" name="address" autocomplete="address" required>
                                        <?php
                                        while ($row = mysqli_fetch_array($address)) {
                                        ?>
                                            <option value="<?= $row['id'] ?>">


                                                <?= $row['mobile_no'] ?> -----
                                                <?= $row['shippingName'] ?> -----
                                                <?= $row['shippingAddress'] ?>
                                                <?= $row['shippingCity'] ?>
                                                <?= $row['shippingPincode'] ?>
                                                <?= $row['shippingState'] ?>
                                                <?= $row['shippingCountry'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>

                                </div>
                            </div>
                            <br>
                            <div>
                                <p><a href="checkout_address.php">Add new address</a></p>
                            </div>
                            <div class="customer-sticky-wrapper save-address">
                                <button type="button" class="t4s_btn_black customer-sticky-button" id="save-address">
                                    Continue
                                </button>
                            </div>
                        </div>
                        <div id="SelectPayment" class="add-form" style="display: none;">
                            <div class="address-header-wrapper" id="stickySubHeader">
                                <a class="t4s-d-flex" id="back-arrow-from-new"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42-.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z" fill="#000000" class="color000 svgShape"></path>
                                    </svg></a>
                                <h2 id="AddressNewHeading" class="t4s_title_addresses">Ckeckout option</h2>
                            </div>

                            <div class="set-default-addr">
                                <label for="address_default_address_new" class="select-addr-label">GSTN (optional)</label>
                                <input type="text" id="address_default_address_new" name="gstn" value="">
                            </div>
                            <!-- <br> -->
                            <hr width="100%" size="5px" style="background-color: #000;max-width: inherit;">
                            <!-- <br> -->
                            <div class="set-default-addr">
                                <input type="radio" id="address_default_address_new" name="method[]" value="COD" required>
                                <label for="address_default_address_new" class="select-addr-label">COD</label>
                            </div>
                            <div class="set-default-addr">
                                <input type="radio" id="address_default_address_new" name="method[]" value="1" disabled>
                                <label for="address_default_address_new" class="select-addr-label">Pay Now (Not avaialable)</label>
                            </div>
                            <!-- <br> -->
                            <div class="customer-sticky-wrapper save-address">
                                <button type="submit" name="submit" class="t4s_btn_black customer-sticky-button">
                                    Place Order
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            $("#save-address").click(function() {
                // alert('Hellooooo');
                var ifselected = $("#selectAddressopt").val();
                // alert(ifselected);
                if (ifselected !== "" && ifselected !== null) {
                    $("#SelectAddress").toggle();
                    $("#SelectPayment").toggle();
                } else {
                    alert('Please select Address.');
                }
            })
        </script>

    </section>
</main>

<?php
include "include/footer.php";
?>