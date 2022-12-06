"use strict";
window.addEventListener('load', function(){
    var form = document.getElementById('form');
    console.log(form);
    form.addEventListener('submit', function(e){
        e.preventDefault();

        var firstname = document.getElementById('firstname').value;
        var lastname = document.getElementById('lastname').value;
        var password = document.getElementById('password').value;
        var email = document.getElementById('email').value;
        var role = document.getElementById('role').value;

        console.log(firstname);
        console.log(lastname);
        console.log(password);
        console.log(email);
        console.log(role);

        fetch('newuser.php?firstname=' + firstname + '&lastname=' + lastname + '&password=' + password + '&email=' + email + '&role=' + role)
        .then(response => {
            if(response.ok) {
                return response.text()
            } else {
                return Promise.reject('Something went wrong!')
            }
        })
        .then(data =>{
            
            console.log(data);
            let result = document.querySelector('#result');
            result.innerHTML = data;

                
        })
        .catch(error => console.log('There was an error: ' + error));


    })
})

/*
var form = document.getElementById('form');
    console.log(form);
    form.addEventListener('submit', function(e){
        e.preventDefault();

        var firstname = document.getElementById('firstname').value;
        var lastname = document.getElementById('lastname').value;
        var password = document.getElementById('password').value;
        var email = document.getElementById('email').value;

        console.log(firstname);
        console.log(lastname);
        console.log(password);
        console.log(email);

    })
    */
/* first trial
function save_data(){
    var input = document.getElementsByClassName('input');

    var inputData = new InputData();

    for(var count =0; count < input.length; count++){
        inputData.append(input[count].name, input[count].value);
    }

    document.getElementById('saveuser').disabled = true;

    var ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', 'newuser.php');

    ajax_request.send(inputData);

    ajax_request.onreadystatechange = function(){
        if(ajax_request.readyState == 4 && ajax_request == 200){
            document.getElementById('saveuser').disabled = false;
            document.getElementById('form').reset()
            document.getElementById('message').innerHTML = ajax_request.responseText;
            setTimeout(function(){
                document.getElementById('message').innerHTML = '';
            }, 2000);
        }
    }
}
*/