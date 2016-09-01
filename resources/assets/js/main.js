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

    var verwijder = $('.delete');
    verwijder.click(function (e) {
        e.preventDefault();
        var token = $(this).data('token');
        var url = $(this).attr('href');
        $.ajax({
            method: "post",
            url: url,
            data: {_method: 'delete', _token: token}
        }).success(function (response) {
            if (response == 1) {
                $(e.currentTarget).closest('article.internship-item').fadeOut(100, function () {
                    $(this).remove();
                });
            }
        });
    });

    var form = $('#search-form');
    form.submit(function(e) {
        e.preventDefault();
        var token = $(this).data('token');
        var url = $(this).data('url');
        var data = $(this).serializeArray();

        console.log(token);

        $.post({
            url: url,
            //type: "POST",
            data: { _token: token, input: data }

        }).success(function(response) {
            var wrapper = $('div.contact-wrapper');
            wrapper.empty();
            if(response.length <= 0) {
                wrapper.append(
                    "<p>There are no results.</p>"
                );
            } else {
                $.each(response, function(key, value) {

                    wrapper.append(
                        "<div class='well'>" +
                        "<a href=''>" + value.voornaam + " " + value.achternaam + "</a>" +
                        "</div>"
                    );
                });
            }
        });

    });

});