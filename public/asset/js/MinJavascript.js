// document.querySelectorAll("header .navbar-nav .nav-item").forEach((link) => {
//     link.addEventListener("click", highlightActive, false);
// });

// function highlightActive(e) {  document.querySelector(".active").classList.remove("active");
//  e.target.classList.add("active");
//  console.log(`Link clicked: ${e.target}`);
// }

document.querySelectorAll("header .navbar-nav .nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active"); // Add the "active" class

    }
});


// country info add

if(document.querySelector("#FormValidation #cuntry")){
    try{

        fetch('asset/js/json/countriesCodes.json').then(function(response){
            return response.json();
        }).then( function(obj){
        
        const cuntry =document.querySelector("#FormValidation #cuntry");
        const city =document.querySelector("#FormValidation #City");
        const phone_code =document.querySelector("#FormValidation #phone_code");
            obj.forEach(function(value){
                ;
                cuntry.innerHTML += `<option value="${value['name']}">${value['name']}</option>`  ;
               
                city.innerHTML += `<option value="${value['name']}">${value['capital']}</option>`  ;
                phone_code.innerHTML += `<option value="${value['phone_code']}">${value['phone_code']}</option>`  ;
        
            })
            
            
        }).catch(function(error){
            console.error("Country fetch code problem ");
            console.log(error);
        });
        
    }catch($error){
        console.log($error)
    }
}





