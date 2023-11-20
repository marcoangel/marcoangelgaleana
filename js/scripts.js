/*!
* Start Bootstrap - Resume v7.0.2 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            offset: 100,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

document.getElementById("contactForm").addEventListener("submit", (e)=>{
    e.preventDefault();
    var nombre = document.getElementById("name");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var message = document.getElementById("message");
    var formData = new FormData();
    var icon;
    formData.append("name", nombre.value);
    formData.append("email", email.value);
    formData.append("phone", phone.value);
    formData.append("message", message.value);
    enviaphp(formData, "POST", "php/contact.php", function(e){
        jsonresponse = JSON.parse(e.responseText);
        var alerticon=document.getElementById("alerticon");
        if(jsonresponse.status==true)
            icon='<i class="fas fa-circle rounded me-2" style="color: #008000;"></i>';
        else icon='<i class="fas fa-circle rounded me-2" style="color: #ff0000;"></i>';
        alerttoad("Contacto", jsonresponse.message, icon);
        document.getElementById("contactForm").reset();
    });
});

function parceNumber(){

}

function enviaphp(formData, method, link, functionrequest){
    var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.onreadystatechange = function(){
        if(objXMLHttpRequest.readyState == 4 && objXMLHttpRequest.status == 200) {
            functionrequest(objXMLHttpRequest);
        }
    }
    objXMLHttpRequest.open(method, link);
    objXMLHttpRequest.send(formData);
}

function alerttoad(title, message, icon){
    document.getElementById("alertmessage").innerHTML=message;
    document.getElementById("alertitle").innerHTML=title;
    document.getElementById("alerticon").innerHTML=icon;
    let date = new Date();
    document.getElementById("alerttime").innerHTML=date.toLocaleTimeString();
    var toast = new bootstrap.Toast(document.getElementById('alert'));
    toast.show()

}