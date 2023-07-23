function toggleService() {
  const toggleServiceContainer = document.querySelector(
    ".toggle-service__container"
  );
  toggleServiceContainer.classList.toggle("is-closed");

  const arrowIcon = document.querySelector(".arrow");
  arrowIcon.classList.toggle("down-arrow");
}
var totalPrice;
window.addEventListener("load", () => {
  const serviceSelected = document.querySelectorAll(`input[name="service"]`);
  if (serviceSelected.length) {
    serviceSelected[0].checked = true;
    const cardToShow = document.getElementById(`${serviceSelected[0].value}`);
    cardToShow.classList.replace("is-closed", "is-open");
    totalPriceService(0, 0);
  }

  const allServices = document.querySelectorAll(`input[name="service"]`);
  const formDetails = document.getElementById("form-details");
  let formDetailslData = new FormData(formDetails);

  const formAdditional = document.getElementById("form-additional");
  let formAdditionalData = new FormData(formAdditional);

  var totalPriceOptionService = 0;
  var totalPriceAdditionalService = 0;

  allServices.forEach(function (service) {
    service.addEventListener("change", function () {
      //Reset forms if user changes the option service and at the same time
      //reset formData Object
      formDetails.reset();
      formAdditional.reset();
      formDetailslData = new FormData(formDetails);
      formAdditionalData = new FormData(formAdditional);
      totalPriceOptionService = 0;
      totalPriceAdditionalService = 0;
      totalPriceService(totalPriceOptionService, totalPriceAdditionalService);

      //Open and Close the card which user has selected
      const ele = document.getElementById(`${service.value}`);
      const cardServiceDetails = document.querySelectorAll(
        ".card-service-detail"
      );
      cardServiceDetails.forEach((card) => {
        card.classList.remove("is-open");
        card.classList.add("is-closed");
      });

      if (this.checked) {
        ele.classList.remove("is-closed");
        ele.classList.add("is-open");
      }
    });
  });

  optionsServiceDetails = document.querySelectorAll(".service-details");
  optionsServiceDetails.forEach(function (el) {
    el.addEventListener("change", function () {
      formDetailslData.delete(this.name);
      if (this.checked) {
        formDetailslData.append(this.name, {
          serviceName: this.value,
          price: this.dataset["price"],
        });
        totalPriceOptionService = Number(this.dataset["price"]);
        totalPriceService(totalPriceOptionService, totalPriceAdditionalService);
      }
    });
  });

  //ADITIONAL SERVICE
  var checkboxes = formAdditional.querySelectorAll('input[type="checkbox"]');
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      if (this.checked) {
        formAdditionalData.append(this.value, this.dataset["price"]);
      } else {
        formAdditionalData.delete(this.value);
      }
      totalPriceAdditionalService = 0;

      totalPriceAdditionalService = Array.from(
        formAdditionalData.entries()
      ).reduce((acc, currentValue) => Number(acc) + Number(currentValue[1]), 0);
      totalPriceService(totalPriceOptionService, totalPriceAdditionalService);
    });
  });
});

function totalPriceService(priceOptionsService, priceAdditionalService) {
  var total = priceOptionsService + priceAdditionalService;
  totalPrice = total;
  document.querySelector(".total-price").innerHTML = total;
}



async function sendForm() {
  const formDetails = document.getElementById("form-details");
  const formDetailslData = new FormData(formDetails);
  const OptionalService = Array.from(formDetailslData.entries()).map(
    ([key, value]) => {
      return {
        name: key,
        value,
      };
    }
  );

  const formAdditional = document.getElementById("form-additional");
  const formAdditionalData = new FormData(formAdditional);
  const additionalService = Array.from(formAdditionalData.entries()).map(
    ([key, value]) => {
      console.log({ key, value });
      return {
        name: key,
        value,
      };
    }
  );

  // OPEN POP UP
  const popUp = document.getElementById("pop-up");
  popUp.classList.remove("is-closed");
  popUp.classList.add("is-open");

  //inject summary Info
  const summaryServices = document.getElementById("all-services");
  console.log("sumary", summaryServices);
  const summaryHTML = `
   <div class="fw-bolder mt-3">Main Service</div>
   ${
     OptionalService.length > 0
       ? OptionalService.map(({ name, value }) => {
           return "<div>" + value + "</div>";
         })
       : "<div> --- </div>"
   }
   <div class="fw-bolder mt-3">Additional Service</div>
   ${
     additionalService.length > 0
       ? additionalService.map(({ name, value }) => {
           return "<div>" + value + "</div>";
         })
       : "<div> --- </div>"
   }
   <div class="my-3">
     <span class="fw-bolder">Total Price $US:</span> <span>${totalPrice}</span>
   </div>
 `;

  summaryServices.innerHTML = summaryHTML;
}


