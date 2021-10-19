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


document.getElementById('phone').addEventListener('input', function(e){
    var number=e.srcElement.value;
    switch(number.length){
        case 3:
            number+="-";
            break;
    case 7:
        number+="-";
        break;
    }
    document.getElementById('phone').value=number;
});



document.getElementById("submitButton").addEventListener("click", function(){
    var nombre = document.getElementById("name");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var message = document.getElementById("message");
    var name_required = document.getElementById("name_required");
    var email_required = document.getElementById("email_required");
    var phone_required = document.getElementById("phone_required");
    var message_required = document.getElementById("message_required");
    var formData = new FormData();
    name_required.style.display="none";
    email_required.style.display="none";
    phone_required.style.display="none";
    message_required.style.display="none";

    if(nombre.value==""){
        name_required.style.display="inline";
    }
    else if(email.value==""){
        email_required.style.display="inline";
        //document.getElementById("email_invalid").style.display="inline";
    }
    else if(phone.value==""){
        phone_required.style.display="inline";
    }
    else if(message.value==""){
        message_required.style.display="inline";
    }
    else{
        formData.append("name", nombre.value);
        formData.append("email", email.value);
        formData.append("phone", phone.value);
        formData.append("message", message.value);
        enviaphp(formData);
    }
});

function parceNumber(){

}

function enviaphp(formData){
    var nombre = document.getElementById("name");
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");
    var message = document.getElementById("message");
    var objXMLHttpRequest = new XMLHttpRequest();
    objXMLHttpRequest.onreadystatechange = function(){
        if(objXMLHttpRequest.readyState == 4 && objXMLHttpRequest.status == 200) {
                alert(objXMLHttpRequest.responseText);
                if(objXMLHttpRequest.responseText=="1"){
                    nombre.value="";
                    email.value="";
                    phone.value="";
                    message.value="";
                    aler("Mensaje enviado. Gracias.");
                }
        }
    }
    objXMLHttpRequest.open('POST', 'php/contact.php');
    objXMLHttpRequest.send(formData);
}