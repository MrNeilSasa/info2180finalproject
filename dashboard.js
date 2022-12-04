window.addEventListener('load', function() {
    let allbtn = document.getElementById('all');
    let name = 'dashboard.php?type=Support';
    console.log(name);

    allbtn.addEventListener('click', function(){
        console.log("hey");

        fetch(name)
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