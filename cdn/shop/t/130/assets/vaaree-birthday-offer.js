  document.addEventListener("DOMContentLoaded", function () {
    var openModalBtn = document.getElementById("openbirthdayoffer");
    var offerContainer = document.getElementById(
      "birthday-offer-popup-content"
    );
    var isMobile = window.matchMedia("(max-width: 768px)").matches;
    var overlayElement = document.querySelector(".t4s-close-overlay");
    var closeIcon = document.querySelector(".birthday-offer-popup-close-button");
    var continueShoppingBtn = document.querySelector(".continue-shopping");
    var htmlElement = document.querySelector("html");
    function openModal(e){
       offerContainer.style.display = "block";
       overlayElement.classList.add("is--visible");
       htmlElement.style.overflowY = "hidden";
        setTimeout(function () {
          isMobile ? offerContainer.style.bottom = "0" : "";
        }, 10);
    }
      function closeModal(e) {
      var overlayExist = overlayElement.classList.contains("is--visible");
      var popupClose = e.currentTarget === closeIcon || e.currentTarget === continueShoppingBtn;
      var conditionCheck = overlayExist &&
                             !openModalBtn?.contains(e?.target) &&
                             !offerContainer?.contains(e?.target) &&
                             offerContainer.style.display == "block"  ||
                             popupClose; 
    
      if (!isMobile) {
        if (conditionCheck) {
          setTimeout(function () {
            offerContainer.style.display = "none";
          }, 10);
          overlayElement.classList.remove("is--visible");
          htmlElement.style.overflowY = "unset";
        }
      } else {
        if (conditionCheck) {
          offerContainer.style.bottom = "-100%";
          setTimeout(function () {
            offerContainer.style.display = "none";
          }, 10);
          overlayElement.classList.remove("is--visible");
          htmlElement.style.overflowY = "unset";
        } 
      }
  }
    function redirectUser(){
      window.location.href = "https://vaaree.com/collections/explore-all-products";
    }

      openModalBtn?.addEventListener("click",openModal); 
      document.addEventListener("click", closeModal);
      closeIcon.addEventListener("click",closeModal); 
      continueShoppingBtn.addEventListener("click",redirectUser);
  });