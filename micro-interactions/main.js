const decrementBtn = document.querySelector('.decrement');
const incrementBtn = document.querySelector('.increment');
const quantityInput = document.querySelector('.quantity-input');

const myButton = document.getElementById("my-button");

decrementBtn.addEventListener('click', function () {
  if (parseInt(quantityInput.value) > 1) {
    quantityInput.value = parseInt(quantityInput.value) - 1;
  }
});

incrementBtn.addEventListener('click', function () {
  quantityInput.value = parseInt(quantityInput.value) + 1;
});

quantityInput.addEventListener('change', function () {
  // send the updated quantity to the food truck here
});


myButton.addEventListener("mousedown", function() {
  myButton.classList.add("clicked");
});

myButton.addEventListener("mouseup", function() {
  myButton.classList.remove("clicked");
});

