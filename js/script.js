// Contact form elements

const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const message = document.getElementById('message');
const submit = document.getElementsByClassName('btn-primary');
const warnMsg = document.getElementById('errorMsg');
const tabletMenu = document.querySelector('.tabNavbar');
const sidebar = document.querySelector('.mobnavbar')
const subBtn = document.querySelector('.submitbtn');
const formSubmitted = document.querySelector('.formSuccess');

const hamMenu = document.querySelector('.hamburger-menu');
const new_burger = document.querySelector('.tabHamburger');

// Prevent submission till validation has been checked.



// form.addEventListener('submit', e => {
//     e.preventDefault();
//     validateInputs();    
// });

// if (subBtn) {
//     subBtn.addEventListener('click', e => {
//         validateInputs(e);
//     });
// }

// const setError = (element) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.errorMsg');

//     // Grab error message from validation
//     //errorDisplay.innerText = message;
//     // Show error message
//     inputControl.classList.add('errorMsg');
//     // Do not show the green input outline
//     inputControl.classList.remove('success');

// };

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

function validateInputs(e) {

    // get the values and remove whitespace
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const messageValue = message.value.trim();

    // Check the fields
    if (!fnameValue) {
        // If first name field is blank, show error
        setError(fname);
        //e.preventDefault();
    } else if (!fnameValue.match(/^[A-z]\w/g)) {
        setError(fname, 'Please enter a valid name');
        //e.preventDefault();
    } else {
        // add success class
        setSuccess(fname);
    }

    if (!lnameValue) {
        // If last name field is blank, show error
        setError(lname, 'Please enter your last name.');
        // e.preventDefault();
    } else if (!lnameValue.match(/^[A-z]\w/g)) {
        setError(lname, 'Please enter a valid name.');
        // e.preventDefault()
    } else {
        setSuccess(lname);
    }

    if (!emailValue) {
        // If email field is blank, show error
        setError(email, 'Please enter an email');
        // e.preventDefault();
    } else if (!isValidEmail(emailValue)) {
        // If email is not valid, show error
        setError(email, 'Please enter a valid email.');
        //e.preventDefault();
    } else {
        setSuccess(email);
    }

    if (!phoneValue) {
        // If phone number field is blank, show error message
        setError(phone, 'Please enter your phone number');
        // e.preventDefault();
    } else if (!phoneValue.match(/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/g)) {
        //} else if ((!isValidPhone(phoneValue) || isNaN(phoneValue) )) {
        // If phone number is not valid
        setError(phone, 'Please enter a valid phone number.');
        //e.preventDefault();
    } else {
        setSuccess(phone);
    }

    if (!messageValue) {
        // If message field is blank, show error
        setError(message, 'Please enter a message.');
        // e.preventDefault()
    } else {
        setSuccess(message);
    }
    //return form.append("Form submitted successfully.");
};
//submitbtn.addEventListener('click', validateInputs);




// Function to check validation of email
function isValidEmail(email) {
    return /([a-zA-Z0-9.])+@([a-zA-Z0-9-])+(?:\.[a-zA-Z]+)$/g.test(String(email).toLowerCase());

}

// Function to validate phone number
function isValidPhone(phone) {
    return /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/g;
}


// Use a loop to get the letters of the heading.

//Create an empty array
let testArray = [];
// Fetch the heading
let pageTitle = document.querySelector('.sub-title').textContent;
// console.log(pageTitle + ' = text from the title');
// Split the information received into the array
testArray = pageTitle.split('');
// console.log(testArray + ' = letter to use later');
// let testResult = document.querySelector('.type-result');
let testResult = [];

// Make sure the is at least a letter on the page to keep the box from moving
document.querySelector('.sub-title').innerText = testArray[0];


for (let i = 0; i < testArray.length; i++) {
    // Set time 
    setTimeout(function () {
        // console.log(testArray[i] + ' = current letter we are adding to title');
        // Save the characters in the array to print on screen
        testResult.push(testArray[i]);
        document.querySelector('.sub-title').innerText = testResult.join('');
        // console.log(testResult[i]);

    }, (i + 1) * 100);
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

    document.getElementById('tabSidebar').style.display = 'block';
    document.getElementById('openbtn').style.display = 'none';
}

function closeNav() {
    document.getElementById('tabSidebar').style.left = '-250px';
    // document.getElementsByClassName('.main-inner').style.marginLeft = '0';
}

// Collapse mobile menu on homepage
// $('.js-scroll-trigger').click(function() {
//     $('.navbar-collapse').collapse('hide');
// });



// New mobile menu
function showSideBar() {
    sidebar.style.left = '0';
    sidebar.style.display = 'flex';
}

// Hide mobile menu off screen
function hideSidebar() {
    sidebar.style.left = '-766px'
    //sidebar.style.display = 'none';
}

// New burger menu for tablet

hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');
    tabletMenu.classList.toggle('active');
})



new_burger.addEventListener('click', function () {
    new_burger.classList.toggle('is-active');
})