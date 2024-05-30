<?php
include "include/header.php";
?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
  <div id="shopify-section-template--16885347680502__heading" class="shopify-section page_section_heading">
    <link href="cdn/shop/t/130/assets/heading-template.aio.min.css" rel="stylesheet" type="text/css" media="all" />
    <div class="header-banner t4s-heading-fullwidth_false   lazyloadt4s" style="--space-padding-dk:50px;--space-padding-mb:50px;--space-mg-dk:50px;--space-mg-mb:50px;--bg-cl:#000000;--op:0.54;--bg_repeat:no-repeat;--bg_size:cover;--bg_pos:center center;--height-mobile:0px;--height-desktop:0px">
      <div class="page-head t4s-pr t4s-oh page_bg_img t4s-text-center">
        <div class="t4s-container t4s-pr t4s-z-100">
          <h1 data-lh="20" data-lh-md="20" data-lh-lg="20" class="title-head t4s-bl-item t4s-animation-none t4s-text-bl t4s-fnt-fm-inherit t4s-font-italic-false t4s-uppercase-false t4s-hidden-mobile-false t4s-br-mb- t4s-text-shadow-false" id="b_5ceb80b4-7249-43c6-bab2-723276f6f6a2" style="--animation: ;--delay-animation:s;--text-cl:#ffffff;--text-fs:20px;--text-fw:500;--text-lh:20px;--text-ls:0px;--text-mgb:0px;--text-fs-mb:20px;--text-lh-mb:20px;--text-ls-mb:0px;--text-mgb-mb:0px;">TRACK ORDER </h1>
        </div>
      </div>
    </div>
    <style>
      .t4s-heading-fullwidth_true .t4s-container {
        width: 100%;
        max-width: 100%;
      }
    </style>
  </div>
  <section id="shopify-section-template--16885347680502__main" class="shopify-section t4s-section t4s-section-customers t4s-container">
    <p>
      <?php
        if (isset($_SESSION['errmsg'])) {
          echo "<p style='background-color: #f8d7da;color: #58151c;padding: 10px 10px; text-align:center'>".$_SESSION['errmsg']."</p>";
          unset($_SESSION['errmsg']);
        }
      ?>
    </p>
    <div class="t4s-customer is--login t4s-text-start">
      <div id="login">
        <form method="post" action="account/track-order.php" id="customer_login" accept-charset="UTF-8" data-login-with-shop-sign-in="true" novalidate="novalidate">
          <input type="hidden" name="form_type" value="track_order" />
          <input type="hidden" name="utf8" value="✓" />
          <!-- <div class="t4s_field t4s-pr t4s_mb_30">
            <input class="t4s_frm_input" type="text" name="email" id="CustomerEmail" autocomplete="email" autocorrect="off" autocapitalize="off" placeholder="Order No.">
            <label for="CustomerEmail">
              Email <span class="required">*</span>
            </label>
          </div> -->
          <div class="t4s_field t4s-pr t4s_mb_10">
            <input class="t4s_frm_input" type="text" value="" name="order_id" id="CustomerPassword" autocomplete="current-password" placeholder="Mobile No.">
            <label for="CustomerPassword">
              Order Id <span class="required">*</span>
            </label>
          </div>

          <div class="t4s_field t4s_mb_20">
            <button type="submit" class="t4s_btn_submmit t4s-btn t4s-btn-base t4s-btn-full-width t4s-btn-style-default t4s-btn-size-medium t4s-btn-color-dark t4s-btn-effect-overlay-run">
              Track your order
            </button>
          </div>
        </form>
      </div>
      <script>
        function handleInputValidation(inputElements, submitButton) {
          function updateButtonState() {
            const allInputsValid = inputElements.every(input => input.value.trim() !== '');
            if (allInputsValid) {
              submitButton.removeAttribute('disabled');
            } else {
              submitButton.setAttribute('disabled', 'disabled');
            }
          }

          inputElements.forEach(inputElement => {
            inputElement.addEventListener('input', updateButtonState);
          });

          updateButtonState();
        }
        //Login Handler
        var customerLoginEmail = document.getElementById("CustomerEmail");
        var customerLoginPassword = document.getElementById("CustomerPassword");
        var submitLoginButton = document.querySelector("#login .t4s_btn_submmit");
        var loginInputs = [customerLoginEmail, customerLoginPassword]
        handleInputValidation(loginInputs, submitLoginButton);

        //Recover Password Handler
        var recoverEmail = document.getElementById("RecoverEmail");
        var submitButton = document.querySelector("#recover .t4s_btn_submmit");
        handleInputValidation([recoverEmail], submitButton);
      </script>
    </div>
  </section>
</main>

<?php
include "include/footer.php";
?>