function openModal(icon, title, text){
  var isMobile = window.matchMedia("(max-width: 768px)").matches;
  document.getElementsByClassName("info-modal-img")[0].src= icon
  var overlayElement = document.querySelector(".t4s-close-overlay");
  overlayElement.classList.add("is--visible");
  document.getElementById("show-badges-info-modals").style.display = "block";
  document.getElementsByClassName("info-modal-text")[0].textContent= title
  document.getElementById("info-modals-text").innerHTML = text;
  document.querySelector("html").style.overflowY = "hidden";

  setTimeout(function () {
    isMobile ? document.getElementById("show-badges-info-modals").style.bottom = "0" : "";
  }, 10);
}

function closeModal(e) {
  try{
    var isMobile = window.matchMedia("(max-width: 768px)").matches;
    var overlayExist = document.querySelector(".t4s-close-overlay").classList.contains("is--visible");
    var isCloseIconClicked = e.currentTarget === document.getElementById("info-popup-close-button");
    var conditionCheck = overlayExist &&
                           !document.getElementById("show-badges-info-modals")?.contains(e?.target) &&
                           document.getElementById("show-badges-info-modals").style.display == "block" ||
                           isCloseIconClicked;

    if (!isMobile) {
      if (conditionCheck) {
        setTimeout(function () {
          document.getElementById("show-badges-info-modals").style.display = "none";
        }, 10);
        document.querySelector(".t4s-close-overlay").classList.remove("is--visible");
        document.querySelector("html").style.overflowY = "unset";
      }
    } else {
      if (conditionCheck) {
        document.getElementById("show-badges-info-modals").style.bottom = "-100%";
        setTimeout(function () {
          document.getElementById("show-badges-info-modals").style.display = "none";
        }, 10);
        document.querySelector(".t4s-close-overlay").classList.remove("is--visible");
        document.querySelector("html").style.overflowY = "unset";
      } 
    }
  }catch(err){
    console.log({err})
  }

}

// document.addEventListener("DOMContentLoaded",()=>{
//   document.addEventListener("click", closeModal);
// })