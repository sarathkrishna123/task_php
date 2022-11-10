function validateUser(){
    var name = document.forms.sign_form.name.value;
    var email = document.forms.sign_form.email.value;
    var phone = document.forms.sign_form.mobnumber.value;
    var address = document.forms.sign_form.address.value;

    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})*$/g; 
    var regPhone=/^\d{10}$/;                                        
    var regName = /^\d+$/;
    if (name == "" || regName.test(name)){
        window.alert("Please enter your name properly.");
        name.focus();
        return false;
    }
     
    if (email == "" || !regEmail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (phone == "" || !regPhone.test(phone)) {
        alert("Please enter valid phone number.");
        phone.focus();
        return false;
    }

    if (address == "") {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }
    return true;

}
function fileValidation(){
    var fileInput = document.getElementById('image');
        
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
    }
    return true;
}




