<script src='https://www.google.com/recaptcha/api.js?render=6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN'></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    var button_flg = false;
    // reCAPTCHA�ؿ�
    var varLoginFunc = function() {
        // Ϣ³��������
        if (button_flg == true){
            return;
        }
        button_flg = true;
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN', {action: 'homepage'})
                .then(function(token) {
                    $('#login_area').prepend('<input type="hidden" name="g-recaptcha-response-pre" value="' + token + '">');
                    let api_url = "<?php print $SECURE_URL; ?>" + "xinfo/";

                    // reCHAPTCHA ǧ�ڽ���
                    $.ajax({
                        url:api_url,
                        type:'POST',
                        dataType: 'json',
                        data:{
                            'action_register_recaptcha': 'true',
                            'g-recaptcha-response-pre':token,
                            'service':'xserver',
                            'target_tool':$('#target_tool').val()
                        }
                    })
                    // reCHAPTCHA ǧ�ڽ���������
                        .done( function(data){
                            if (data['result'] == true){
                                grecaptcha.execute('6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN', {action: 'homepage'})
                                    .then(function(token) {
                                        $('#login_area').prepend('<input type="hidden" name="g-recaptcha-response-v3" value="' + token + '">');
                                        $('#login_area').submit();
                                    });
                            }else{
                                $('#recaptchav2_button').click();
                            }
                        })
                        // reCHAPTCHA ǧ�ڽ������Ի�
                        .fail( function(data){
                            $('#recaptchav2_button').click();
                        })
                        // Ϣ³����������
                        .always( function(data){
                            button_flg = false;
                        });
                });
        });
    }

    // ���󥿡�������������reCAPTCHA v3�»�
    $(function(){
        $('#login_area').find('input').keypress(function(e){
            if(e.which == 13){
                varLoginFunc();
                return false;
            }
        });
    });

    // reCAPTCHA v3�»�
    function loginFunc(){
        varLoginFunc();
    }

    // reCAPTCHA v2�»�
    function onSubmit(token) {
        $('#login_area').submit();
    }



</script>
<style>
.grecaptcha-badge { 
    margin-bottom: 70px; 
}
</style>