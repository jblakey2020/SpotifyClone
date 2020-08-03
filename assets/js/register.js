//Start when the page is ready.

$(document).ready(function(){
    //creating a JQuery object
    console.log("document is ready")
    $("#hideLogIn").click(function(){
        $("#loginForm").hide();
        $("#registerForm").show();


    });
    $("#hideRegister").click(function(){
        console.log("Register was pressed");
        $("#loginForm").show();
        $("#registerForm").hide();


    });

});