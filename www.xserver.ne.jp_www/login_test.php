<?php
if (!preg_match('/^118\.243\.24\.8$/', $_SERVER['REMOTE_ADDR']) &&
    !preg_match('/^118\.243\.181\.74$/', $_SERVER['REMOTE_ADDR']) &&
    !preg_match('/^124\.219\.169\.145$/', $_SERVER['REMOTE_ADDR']) &&
    !preg_match('/^192\.168\.102\.166$/', $_SERVER['REMOTE_ADDR'])) {
    exit;
}
?>

<?php include("conf.php"); ?>
<?php include("header.php"); ?>
    <script src='https://www.google.com/recaptcha/api.js?render=6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // reCAPTCHA�»�
        function loginFunc() {

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
                                'action_register_recaptchatest': 'true',
                                'g-recaptcha-response-pre':token,
                                'service':'xserver',
                                'target_tool':$('#target_tool').val()
                            }
                        })
                        // reCHAPTCHA ǧ�ڽ���������
                            .done( function (data){
                                alert(data['score']);
                                if (data['result'] == true){
                                    grecaptcha.execute('6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN', {action: 'homepage'})
                                        .then( function(token) {
                                            $('#login_area').prepend('<input type="hidden" name="g-recaptcha-response-v3" value="' + token + '">');
                                            $('#login_area').submit();
                                        });
                                }else{
                                    grecaptcha.execute('6LcEB64UAAAAAMDFUwEsxai2gDrcWQcR2uagb4uN', {action: 'homepage'})
                                        .then( function(token) {
                                            $('#login_area').prepend('<input type="hidden" name="g-recaptcha-response-v3" value="' + token + '">');
                                        });
                                    $('#recaptchav2_button').click();
                                }
                            })
                            // reCHAPTCHA ǧ�ڽ������Ի�
                            .fail( function (data){
                                $('#recaptchav2_button').click();
                            });
                    });
            });
        }

        // reCAPTCHA v2�»�
        function onSubmit(token) {
            $('#login_area').submit();
        }
    </script>

    <link href="<?php print_fileURL("css/contents/login.css"); ?>" rel="stylesheet">

    <title>XServer��������� - ������ | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="��Ͽ����γ�ǧ������Τ���ʧ���ʤɡ�������˴ؤ�������ġ���Ǥ���">

    </head>

<body id="pid-login">

<?php include("top.php"); ?>

<div id="wrapper">

    <div id="toggle-target">

        <div class="contents">

            <section class="main holder-sml" role="main">
                <!-- /.main-header -->

                <?php include("topicpath.php"); ?>

                <section class="login infopanel">
                    <input type="hidden" id="target_tool" name="target_tool" value="info">

                    <form id="login_area" action="<?php print $SECURE_URL; ?>xinfo/" method="POST">

                        <div class="btnarea">
                            <button class="g-recaptcha" data-sitekey="6LePCq4UAAAAAIhwW211vAJelBE_NJS-ANlm1GGT" data-callback='onSubmit' name="action_user_logintest" hidden id="recaptchav2_button"></button>
                            <input type="hidden" name="action_user_logintest" value="true">
                            <input type="button" name="action_user_logintest" class="btn" value="������" onclick="loginFunc()">
                        </div>

                    </form>
                </section>
                <!-- /.login -->

            </section>
            <!-- /.main -->

        </div>
        <!-- /.contents -->

    </div>
    <!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("bottom.php"); ?>