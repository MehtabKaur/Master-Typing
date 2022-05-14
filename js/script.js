//Group all fields into an object
var fields = {}

//Link all fields to our fields object
document.addEventListener("DOMContentLoader", function() {
  fields.firstname = document.getElementById("firstname");
  fields.lastname = document.getElementById("lastname");
  fields.email = document.getElementById("email");
  fields.message = document.getElementById("message");
})

//Check that field is not empty
function isNotEmpty(value) {
  if (value == null || typeof value == "undefined") return false;
  //check that value is more than 0 characters
  return (value.length > 0);
}

//Check if email is valid
function isEmail(email) {
  let regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
  return regex.test(String(email).toLowerCase());
 }

 //Field validation 
 function fieldValidation(field, validationFunction) {
   //check if field exists
   if (field == null) return false;
  //check if field is valid
   let isFieldValid = validationFunction(field.value)
   if (!isFieldValid) {
     field.className = "Please enter correct info"
   }
   //if field is valid, set className to empty string to clear 
   else {
     field.className = '';
   }
   return isFieldValid;
 }

 //Combine all checks
 function isValid() {
   var valid = true;

   valid &= fieldValidation(fields.firstname, isNotEmpty);
   valid &= fieldValidation(fields.lastname, isNotEmpty);
   valid &= fieldValidation(fields.email, isEmail);
   valid &= fieldValidation(fields.message, isNotEmpty);
  //return combined value of the check
   return valid;
 }



 //Make user class constructor
 class User {
   constructor(firstname, lastname, email, message) {
     this.firstname = firstname;
     this.lastname = lastname;
     this.email = email;
     this.message = message;
   }
 }

 //Send contact form data
function sendEmail() {
  if (isValid()) {
    window.location.assign = "mailto: kaur2shine@gmail.com";
    alert("thanks for your message!")
  }
  else {
    alert("There was an error!")
  }
}


//  function sendEmail() {
//    if (isValid()) {
//      //if contact form is valid we create a new user object
//      let usr = new User(firstname.value, lastname.value, email.value);
//      alert(`${usr.firstname} thanks for your message!`)
//    }
//    //if contact form is not valid - show error message on screen
//    else {
//      alert("There was an error!")
//    }
//  }