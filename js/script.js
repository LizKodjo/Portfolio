// Contact form elements

const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const message = document.getElementById('message');
const submit = document.getElementsByClassName('btn-primary');
const warnMsg = document.getElementById('errorMsg');

// Prevent submission till validation has been checked.

form.addEventListener('submit', e => {
    e.preventDefault();
    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.errorMsg');

    errorDisplay.innerText = message;
    inputControl.classList.add('errorMsg');
    inputControl.classList.remove('success');
    
};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.errorMsg');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const validateInputs = () => {

    // get the values
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const messageValue = message.value.trim();

    if (!fnameValue) {
        // show error
        setError(fname, 'Please enter your first name.');
    } else {
        // add success class
        setSuccess(fname);
    }

    if (!lnameValue) {
        setError(lname, 'Please enter your last name.');
    } else {
        setSuccess(lname);
    }
    if(!emailValue) {
        setError(email, 'Please enter an email');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Please enter a valid email');
    } else {
        setSuccess(email);
    }
    if (!phoneValue) {
        setError(phone, 'Please enter your phone number');
    } else {
        setSuccess(phone);
    }
    if (!messageValue) {
        setError(message, 'Please enter a message');
    } else {
        setSuccess(message);
    }

}


// Function to check validation of email
function isValidEmail(email) {
    return /^[A-Za-z][\._\-][0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/.test(String(email).toLowerCase());
     
}

// Typing section!!!!!

// function myValidation() {
//     if (!fname) {
//         warnMsg = "Please enter your first name.";
//         document.getElementById('firstInValidMsg').innerHTML = warnMsg;
//         return;
//     }

//     // warnMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
//     // return;

//     if (!lname) {
//         warnMsg = "Please enter your last name";
//         document.getElementById('lastInValidMsg').innerHTML = warnMsg;
//         return;
//     }



//     if (!email || !email.match(/^[A-Za-z][\._\-][0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
//         warnMsg = "Please enter a valid email";
//         document.getElementById('emailInValidMsg').innerHTML = warnMsg;
//         return;
//     }
//     if (!phone || !phone.match(/^\(?(\d{5})\)?[- ]?(\d{6})$/)) {
//         warnMsg = "Please enter a phone number";
//         document.getElementById('phoneInValidMsg').innerHTML = warnMsg;
//         return;
//     }
//     if (!message) {
//         warnMsg = "Please leave a short message.";
//         document.getElementById('msgInValidMsg').innerHTML = warnMsg;
//         return;
//     }
//     if (!fname || !lname || !email || !phone || !message) {
//         warnMsg = "Please complete the form";
//         document.getElementById('submitInValidMsg').innerHTML = warnMsg;
//         return;
//     }
//     warnMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
//     return true;
// }

// Typing effect for headers.
// var i = 0;

// var txt = 'Elizabeth Kodjo';
// var txt2 = 'I am an aspiring Web Developer';

// var speed = 50;

// function typeWriter() {
//     if (i < txt.length) {
//         document.querySelector('.main-title').innerHTML += txt.charAt(i);
//         i++;
//         setTimeout(typeWriter, speed);
//     }
// }

// New function
const mainTitle = document.querySelector('.main-title');
const titleText = 'Elizabeth Kodjo';

function typeWriter(element, titleText, i = 0) {
    if (i === 0) {
        element.textContent = '';
    }

    element.textContent += titleText[i];

    // End of sentence
    if (i === titleText.length - 1) {
        return;
    }
    setTimeout(() => typeWriter(element, titleText, i + 1), 50);

}

typeWriter(mainTitle, titleText);

// Sliding nav
function openRightMenu() {
    document.getElementById('myNavbar').style.display = 'block';
}
function closeRightMenu() {
    document.getElementById('myNavbar').style.display = 'none';
}

// tablet navigation
function openNav() {
    document.getElementById('tabSidebar').style.width = '25%';
    document.getElementsByClassName('main-inner').style.marginLeft = '25%';
    document.getElementById('tabSidebar').style.display = 'block';
    document.getElementById('openbtn').style.display = 'none';
}

function closeNav() {
    document.getElementById('tabSidebar').style.width = '0';
    document.getElementsByClassName('.main-inner').style.marginLeft = '0';
}