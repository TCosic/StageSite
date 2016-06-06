$(window).load(function(){
    var background = $('#login-background')
    var loginBox = $('#login-box');
    var closeButton = $('#close-button');

    $('#menu-login-button').click(function(e){
        e.preventDefault();
        viewLogin();
    });
    closeButton.click(function(e){
        e.preventDefault();
        viewLogin(true);
    });
    background.click(function(e){
        viewLogin(true);
    });

    function viewLogin(hide = false){
        if(hide){
            loginBox.hide('fast');
            background.css( "display", "none" );
            formSwitch();
        }
        else{
            loginBox.show('fast');
            background.css( "display", "block" );
        }
    }

    // loginbox navigation
    var registerButton = $('#goToRegister');
    var backButton = $('#goBack');

    registerButton.click(function(e){
        e.preventDefault();
        formSwitch(true);
    });
    backButton.click(function(e){
        e.preventDefault();
        formSwitch();
    });

    function formSwitch(register = false){
        if(register){
            $('#sub-container').animate({ left: "-354" }, 200 );
        }else{
            $('#sub-container').animate({ left: "0" }, 200 );
        }
    }

});