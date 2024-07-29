document.getElementById('paymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: 'pk_test_e02d0a860334dac233aba58e1e68f038edc8ab30', // Replace with your Paystack public key
        email: document.getElementById('email').value,
        amount: document.getElementById('amount').value,
        currency: 'NGN',
        metadata: {
            fullName: document.getElementById('fullName').value,
            amount: document.getElementById('amount').value,
            email: document.getElementById('email').value,
            phoneNumber: document.getElementById('phoneNumber').value,
            birth: document.getElementById('date-input').value,
            gender: document.getElementById('gender').value,
            marital: document.getElementById('marital_status').value,
            country: document.getElementById('country-select').value,
            state: document.getElementById('state-select').value,
            city: document.getElementById('city').value,
            house: document.getElementById('house').value,
            faculty: document.getElementById('faculty').value,
            degree: document.getElementById('degree').value,
            department: document.getElementById('depart').value,
            matric: document.getElementById('matric').value,
            present: document.getElementById('presented').value,
            addressEmployer: document.getElementById('address').value,
            presentPost: document.getElementById('present-rank').value,
            address: document.getElementById('address').value,
        },
        callback: function(response) {
            // Handle successful payment here
            alert('Payment successful. Reference: ' + response.reference);
            saveToDatabase(response);
        },
        onClose: function() {
            alert('Transaction was not completed, window closed.');
        }
    });
    handler.openIframe();
});

function saveToDatabase(paymentDetails) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "verify_payment.php", true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };
    const metadata = paymentDetails.metadata;
    const data = {
        reference: paymentDetails.reference,
        fullName: metadata.fullName,
        amount: paymentDetails.amount,
        email: paymentDetails.email,
        phoneNumber: metadata.phoneNumber,
        birth: metadata.birth,
        gender: metadata.gender,
        marital: metadata.marital,
        country: metadata.country,
        state: metadata.state,
        city: metadata.city,
        house: metadata.house,
        faculty: metadata.faculty,
        degree: metadata.degree,
        department: metadata.department,
        matric: metadata.matric,
        present: metadata.present,
        addressEmployer: metadata.addressEmployer,
        presentPost: metadata.presentPost,
        address: metadata.address,
    };
    xhr.send(JSON.stringify(data));
}