document.getElementById('amount').addEventListener('input', function() {
    const amount = this.value;
    const paymentInfo = document.getElementById('payment-info');
    const payNowButton = document.getElementById('pay-now');

    // Check if the amount is valid
    if (amount) {
        // Enable the button and update payment info
        payNowButton.disabled = false;
        paymentInfo.textContent = `You are about to pay ₹${amount}. Please click "Pay Now" to proceed.`;
        paymentInfo.style.display = "block";
    } else {
        // Disable the button if the input is empty
        payNowButton.disabled = true;
        paymentInfo.style.display = "none";
    }
});
