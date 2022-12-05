$(document).ready(function() {

    $("#loginbtn").on('click', function(event){
        event.preventdefault();
    })
});

function validateForm() {
    let x = document.forms["ContactForm"]["company"].value;
    if (x == "") {
      alert("Error: Please enter all fields");
      return false;
    }
    else{
        alert("Data inserted Successfully");
    }
  }