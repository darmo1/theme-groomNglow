

window.addEventListener("load", () => {
  const popUp = document.getElementById("close-btn");
  popUp.addEventListener("click", () => {
    const popUp = document.getElementById("pop-up");
    popUp.classList.remove("is-open");
    popUp.classList.add("is-closed");
    const formDetails = document.getElementById("form-details");
    let formDetailslData = new FormData(formDetails);

    const formAdditional = document.getElementById("form-additional");
    let formAdditionalData = new FormData(formAdditional);
    formDetails.reset();
    formAdditional.reset();
    formDetailslData = new FormData(formDetails);
    formAdditionalData = new FormData(formAdditional);
    totalPriceService(0, 0);
  });
});


function totalPriceService(priceOptionsService, priceAdditionalService) {
  var total = priceOptionsService + priceAdditionalService;
  totalPrice = total;
  document.querySelector(".total-price").innerHTML = total;
}