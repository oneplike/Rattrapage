let form = document.querySelector('#register_check');

//Ecouter la modification  du mot de passe
form.email.addEventListener('change', function () {
    validEmail(this);
});

//Ecouter la modification  du mot de passe
form.pwd.addEventListener('change', function () {
    validPassword(this);
});

//Ecouter la modification  de la confirmation du mot de passe
form.conf_pwd.addEventListener('change', function () {
    validConfPassword(this);
});

//Ecouter la modification  le numéro de téléphone
form.phone.addEventListener('change', function () {
    validPhone(this);
});

//Ecouter la modification  le numéro de téléphone
form.zipcode.addEventListener('change', function () {
    validZip(this);
});

//Ecouter la modification de l'adresse
form.addr.addEventListener('change', function () {
    validAddress(this);
});

//Ecouter la modification du prenom
form.firstname.addEventListener('change', function () {
    validFirstname(this);
});

//Ecouter la modification du nom
form.lastname.addEventListener('change', function () {
    validLastname(this);
});

//Ecouter la modification date de naissance
form.birth.addEventListener('change', function () {
    validBirth(this);

});


//Ecouter la soumission du formulaire
form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (
        validEmail(form.email) &&
        validPassword(form.pwd) &&
        validConfPassword(form.conf_pwd) &&
        validPhone(form.phone) &&
        validZip(form.zipcode) &&
        validFirstname(form.firstname) &&
        validLastname(form.lastname) &&
        validAddress(form.addr) ){
        form.submit();
    }
});

//VALIDATION EMAIL
const validEmail = function (inputEmail) {
  let emailRegExp = new RegExp('^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,10}$', 'g');

  let testEmail = emailRegExp.test(inputEmail.value.trim());

  if (testEmail){
      form.email.className += ' is-valid '
      form.email.className = form.email.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
      //console.log(form.email);
      return true;
  }else {
      form.email.className += ' is-invalid '
      form.email.className = form.email.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
      return false;
  }
};

//VALIDATION PASSWORD
const validPassword = function (inputPassword) {

    let msg;
    let valid = false;
    //Au moins 3 caractère
    if(inputPassword.value.length < 3) {
        msg = 'Le mot de passe doit contenir au moins 3 caractères';
    }
    //Au moins une majuscule
    else if (!/[A-Z]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au une majuscule';
    }
    //Au moins 1 minuscule
    else if (!/[a-z]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au une minuscule';
    }
    //Au moins un chiffre
    else if (!/[0-9]/.test(inputPassword.value)) {
        msg = 'Le mot de passe doit contenir au moins un chiffre';
    }
    //mot de passe valide
    else{
        msg ='Le mot de passe est valide';
        valid = true;
    }
    if (valid){
        form.pwd.className += ' is-valid '
        form.pwd.className = form.pwd.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        console.log(form.pwd);
        return true;
    }else {
        form.pwd.className += ' is-invalid '
        form.pwd.className = form.pwd.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
};

//VALID CONFIRMATION PASSWORD
const validConfPassword = function (inputConfPass) {

    if (inputConfPass.value == form.pwd.value){
        form.conf_pwd.className += ' is-valid '
        form.conf_pwd.className = form.conf_pwd.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        console.log(form.conf_pwd);
        return true;
    }else{
        form.conf_pwd.className += ' is-invalid '
        form.conf_pwd.className = form.conf_pwd.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

//VALID PHONE NUMBER
const validPhone = function (inputPhone) {
    let phoneRegExp = new RegExp('^[0][1-9][0-9]{8}$', 'g');

    let testPhone = phoneRegExp.test(inputPhone.value.trim().split(" ").join(""));

    if (testPhone){
        form.phone.className += ' is-valid '
        form.phone.className = form.phone.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.phone);
        return true;
    }else {
        form.phone.className += ' is-invalid '
        form.phone.className = form.phone.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

//VALID ZIP CODE
const validZip = function (inputZip) {
    let zipRegExp = new RegExp('^[0-9]{5}$', 'g');

    let testZip = zipRegExp.test(inputZip.value.trim().split(" ").join(""));

    if (testZip){
        form.zipcode.className += ' is-valid '
        form.zipcode.className = form.zipcode.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.phone);
        return true;
    }else {
        form.zipcode.className += ' is-invalid '
        form.zipcode.className = form.zipcode.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

const validAddress = function (inputAddress) {

    let addressRegExp = new RegExp('[a-zA-Z0-9]$', 'g');

    let testAddress = addressRegExp.test(inputAddress.value.trim().split(" ").join(""));

    if(inputAddress.value.length > 1 && testAddress) {
        form.addr.className += ' is-valid '
        form.addr.className = form.addr.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.address);
        return true;
    }else{
        form.addr.className += ' is-invalid '
        form.addr.className = form.addr.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

const validFirstname = function (inputFirstname) {

    let firstnameRegExp = new RegExp('[a-zA-Z]$', 'g');

    let testFirstname = firstnameRegExp.test(inputFirstname.value.trim().split(" ").join(""));

    if(inputFirstname.value.length > 1 && testFirstname ) {
        form.firstname.className += ' is-valid '
        form.firstname.className = form.firstname.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.address);
        return true;
    }else{
        form.firstname.className += ' is-invalid '
        form.firstname.className = form.firstname.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

const validLastname = function (inputLastname) {

    let lastnameRegExp = new RegExp('[a-zA-Z]$', 'g');

    let testLastname = lastnameRegExp.test(inputLastname.value.trim().split(" ").join(""));

    if(inputLastname.value.length > 1 && testLastname ) {
        form.lastname.className += ' is-valid '
        form.lastname.className = form.lastname.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.address);
        return true;
    }else{
        form.lastname.className += ' is-invalid '
        form.lastname.className = form.lastname.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}

const validBirth = function (inputBirth) {
   if(inputBirth.value.length > 1 ) {
        form.birth.className += ' is-valid '
        form.birth.className = form.birth.className.replace( /(?:^|\s)is-invalid(?!\S)/g , ' ' );
        //console.log(form.address);
        return true;
    }else{
        form.birth.className += ' is-invalid '
        form.birth.className = form.birth.className.replace( /(?:^|\s)is-valid(?!\S)/g , ' ' );
        return false;
    }
}




