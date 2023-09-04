let fname = document.getElementById('fname').value;
let lname = document.getElementById('lname').value;
let email = document.getElementById('email').value;
let phone = document.getElementById('phone').value;
let message = document.getElementById('message').value;
let submit = document.getElementsByClassName('btn-primary');
let warnMsg;

function myValidation() {
    if (!fname) {
        warnMsg = "Please enter your first name.";
        document.getElementById('firstInValidMsg').innerHTML = warnMsg;
        return;
    }

    warnMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;

    if (!lname) {
        warnMsg = "Please enter your last name";
        document.getElementById('lastInValidMsg').innerHTML = warnMsg;
        return;
    }



    if (!email || !email.match(/^[A-Za-z][\._\-][0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        warnMsg = "Please enter a valid email";
        document.getElementById('emailInValidMsg').innerHTML = warnMsg;
        return;
    }
    if (!phone || !phone.match(/^\(?(\d{5})\)?[- ]?(\d{6})$/)) {
        warnMsg = "Please enter a phone number";
        document.getElementById('phoneInValidMsg').innerHTML = warnMsg;
        return;
    }
    if (!message) {
        warnMsg = "Please leave a short message.";
        document.getElementById('msgInValidMsg').innerHTML = warnMsg;
        return;
    }
    if (!fname || !lname || !email || !phone || !message) {
        warnMsg = "Please complete the form";
        document.getElementById('submitInValidMsg').innerHTML = warnMsg;
        return;
    }
    warnMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
    return true;
}

// Typing effect for headers.
var i = 0;
var txt = 'Elizabeth Kodjo';
var speed = 50;

function typeWriter() {
    if (i < txt.length) {
        document.querySelector('.demo').innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}