function updateQuantity() {
  const decrementBtns = document.querySelectorAll('.decrement');
  const incrementBtns = document.querySelectorAll('.increment');
  const quantityInputs = document.querySelectorAll('.quantity-input');

  decrementBtns.forEach(function(decrementBtn) {
    decrementBtn.addEventListener('click', function(event) {
      event.preventDefault();
      const quantityInput = decrementBtn.nextElementSibling;
      if (parseInt(quantityInput.value) > 1) {
        quantityInput.value = parseInt(quantityInput.value) - 1;
      }
    });
  });

  incrementBtns.forEach(function(incrementBtn) {
    incrementBtn.addEventListener('click', function(event) {
      event.preventDefault();
      const quantityInput = incrementBtn.previousElementSibling;
      quantityInput.value = parseInt(quantityInput.value) + 1;
    });
  });
}

updateQuantity();


$(document).ready(function() {
  $('.payment-option').click(function() {
    // $('.payment-option').removeClass('selected');
    // $(this).addClass('selected');
    $('.payment-option').removeClass('selected').addClass('light');
    $(this).removeClass('light').addClass('selected');
    $('#complete-order').prop('disabled', false);
  });
});




