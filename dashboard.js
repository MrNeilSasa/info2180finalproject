window.addEventListener('load', function() {
    let allbtn = document.getElementById('all');
    let supportbtn = document.getElementById('support');
    let salesbtn = document.getElementById('saleslead');
    let allvalue = allbtn.value;
    let supvalue = supportbtn.value;
    let salesvalue = salesbtn.value;
    let all = 'dashboard.php?type=';
    let saleslead = 'dashboard.php?type=SalesLead';
    let support = 'dashboard.php?type=Support';
    let assignedTo = 'dashboard.php?assigned_to=';
    //let filterbtns = document.getElementsByClassName("filterbtn")

    /*filterbtns.forEach(function(btn){
        btn.addEventListener('click', function(e){
            e.preventDefault();
            console.log(e.currentTarget.dataset);
        })
    })
});*/

    allbtn.addEventListener('click', function(event){
        event.preventDefault();
        console.log(all+allvalue)

        fetch(all+allvalue)

        .then(response => {
            if (response.ok) {
                return response.text()
            } else {
                return Promise.reject('something went wrong!')
            }
        })
        .then(data => {
            let btn = document.querySelector('#result');
            btn.innerHTML = data;
            console.log(data);
        })
        .catch(error => console.log('There was an error: ' + error));
}); 
    

    salesbtn.addEventListener('click', function(event){
        event.preventDefault();
        console.log(all+salesvalue);
        

        fetch(all+salesvalue)
        .then(response => {
         if (response.ok) {
             return response.text()
            } else {
                return Promise.reject('something went wrong!')
            }
        })
        .then(data => {
            let btn = document.querySelector('#result');
            btn.innerHTML = data;
            console.log(data);
        })
        .catch(error => console.log('There was an error: ' + error));

});

    supportbtn.addEventListener('click', function(event){
        event.preventDefault();
        console.log(all+supvalue)

        fetch(all+supvalue)
        
        .then(response => {
            if (response.ok) {
                return response.text()
            } else {
                return Promise.reject('something went wrong!')
            }
        })
        .then(data => {
            let btn = document.querySelector('#result');
            btn.innerHTML = data;
            console.log(data);
        })
        .catch(error => console.log('There was an error: ' + error));

    });
})