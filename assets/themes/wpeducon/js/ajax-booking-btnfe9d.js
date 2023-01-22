jQuery(document).ready(function($) { 'use strict';

    // Perform AJAX login on form submit
    $('form#bookingbtn').on('submit', function(e){ 'use strict';
        alter('jakir');
        $('form#bookingbtn p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'name': $('form#bookingbtn #btnfield_name').val(), 
                'email': $('form#bookingbtn #btnfield_email').val(), 
                'phone': $('form#bookingbtn #btnfield_phone').val(), 
                'price': $('form#bookingbtn #btnfield_price').val(), 
                'message': $('form#bookingbtn #btnfield_content').val(), 
                'security': $('form#bookingbtn #security').val() },
            success: function(data){
                $('form#bookingbtn div.login-error').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
                if($('.login-error').text() == ''){
                    $('form#login div.login-error').hide();
                }else{
                    $('form#login div.login-error').show();
                }
            }
        });
        e.preventDefault();
    });
    
    if($('.login-error').text() == ''){
        $('form#bookingbtn div.login-error').hide();
    }else{
        $('form#bookingbtn div.login-error').show();
    }

});