<script src='https://www.google.com/recaptcha/api.js?render=6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN'></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    var button_flg = false;
    // reCAPTCHA関数
    var varLoginFunc = function() {
        // 連続処理制御
        if (button_flg == true){
            return;
        }
        button_flg = true;
        grecaptcha.ready(function() {
            grecaptcha.execute('6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN', {action: 'homepage'})
                .then(function(token) {
                    $('#login_area').prepend('<input type="hidden" name="g-recaptcha-response-pre" value="' + token + '">');
                    let api_url = "<?php print $SECURE_URL; ?>" + "xinfo/";

                    // reCHAPTCHA 認証処理
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
                    // reCHAPTCHA 認証処理成功時
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
                        // reCHAPTCHA 認証処理失敗時
                        .fail( function(data){
                            $('#recaptchav2_button').click();
                        })
                        // 連続処理制御解除
                        .always( function(data){
                            button_flg = false;
                        });
                });
        });
    }

    // エンターキー押下時操作　reCAPTCHA v3実施
    $(function(){
        $('#login_area').find('input').keypress(function(e){
            if(e.which == 13){
                varLoginFunc();
                return false;
            }
        });
    });

    // reCAPTCHA v3実施
    function loginFunc(){
        varLoginFunc();
    }

    // reCAPTCHA v2実施
    function onSubmit(token) {
        $('#login_area').submit();
    }



</script>
<style>
.grecaptcha-badge { 
    margin-bottom: 70px; 
}
</style>