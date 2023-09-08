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

if (form) {

    form.addEventListener('submit', e => {
        e.preventDefault();
        validateInputs();
    });
}





const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.errorMsg');

    // Grab error message from validation
    errorDisplay.innerText = message;
    // Show error message
    inputControl.classList.add('errorMsg');
    // Do not show the green input outline
    inputControl.classList.remove('success');

};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.errorMsg');

    // Error message will be blank
    errorDisplay.innerText = '';
    // Success class will show
    inputControl.classList.add('success');
    // Error will be removed.
    inputControl.classList.remove('errorMsg');
};

const validateInputs = () => {

    // get the values and remove whitespace
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const messageValue = message.value.trim();

    // Check the fields
    if (!fnameValue) {
        // If first name field is blank, show error
        setError(fname, 'Please enter your first name.');
    } else {
        // add success class
        setSuccess(fname);
    }

    if (!lnameValue) {
        // If last name field is blank, show error
        setError(lname, 'Please enter your last name.');
    } else {
        setSuccess(lname);
    }
    if (!emailValue) {
        // If email field is blank, show error
        setError(email, 'Please enter an email');
    } else if (!isValidEmail(emailValue)) {
        // If email is not valid, show error
        setError(email, 'Please enter a valid email');
    } else {
        setSuccess(email);
    }
    if (!phoneValue) {
        // If phone number field is blank, show error message
        setError(phone, 'Please enter your phone number');
    } else if (!isValidPhone(phoneValue) || isNaN(phoneValue)) {
        // If phone number is not valid
        setError(phone, 'Please enter a valid phone number');
    } else {
        setSuccess(phone);
    }
    if (!messageValue) {
        // If message field is blank, show error
        setError(message, 'Please enter a message');
    } else {
        setSuccess(message);
    }
};


// Function to check validation of email
function isValidEmail(email) {
    return /^[A-Za-z][\._\-][0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/.test(String(email).toLowerCase());

}

// Function to validate phone number
function isValidPhone(phone) {
    return /\s*\(?(0[1-6]{1}[0-9]{3}\)?[0-9]{6})\s*/;
}








// Use a loop to get the letters of the heading.
// for (let i = 0; i < 1; i++) {

// Create an empty array
let testArray = [];
// Fetch the heading
let pageTitle = document.querySelector('.main-title').textContent;
// console.log(pageTitle + ' = text from the title');
// Split the information received into the array
testArray = pageTitle.split('');
// console.log(testArray + ' = letter to use later');
// let testResult = document.querySelector('.type-result');
let testResult = [];

// Make sure the is at least a letter on the page to keep the box from moving
document.querySelector('.main-title').innerText = testArray[0];


for (let i = 0; i < testArray.length; i++) {
    // Set time 
    setTimeout(function () {
        // console.log(testArray[i] + ' = current letter we are adding to title');
        // Save the characters in the array to print on screen
        testResult.push(testArray[i]);
        document.querySelector('.main-title').innerText = testResult.join('');
        // console.log(testResult[i]);

    }, (i + 1) * 250);
}


















// Sliding nav
function openRightMenu() {
    document.getElementById('myNavbar').style.display = 'block';
}
function closeRightMenu() {
    document.getElementById('myNavbar').style.display = 'none';
}



// tablet navigation
function openNav() {
    document.getElementById('tabSidebar').style.left = '0';
    // document.getElementsByClassName('main-inner').style.marginLeft = '25%';
    document.getElementById('tabSidebar').style.display = 'block';
    document.getElementById('openbtn').style.display = 'none';
}

function closeNav() {
    document.getElementById('tabSidebar').style.left = '-250px';
    // document.getElementsByClassName('.main-inner').style.marginLeft = '0';
}

