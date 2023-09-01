let fname = document.getElementById('fname').value;
let warnMsg;

function myValidation() {
    if (!fname) {
        warnMsg = "Please enter your first name.";
        document.getElementById('formValidMsg').innerHTML = warnMsg;
        return true;
    }
}

// function formValidation() {
//     let name = document.forms["contact-form"]["fname"].value;
//     // let warnMsg;

//     if (name == "") {
//         let warnMsg = "Please enter your first name.";
//         document.getElementById('formValidMsg').innerHTML = warnMsg;
//         return false;
//     }
// }