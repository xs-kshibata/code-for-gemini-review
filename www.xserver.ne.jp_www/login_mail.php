<?php include("conf.php"); ?>
<?php include("header.php"); ?>
<script src="js/common.js"></script>
<?php include("com_recaptcha.php"); ?>

<title>WEBメール - ログイン | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ブラウザからメールを送受信するための管理ツールです。">

</head>

<body id="pid-login">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-login"><i class="ico ico_unlock"></i>ログイン</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("topicpath.php"); ?>
        
        <section class="login webmail">
            <input type="hidden" id="target_tool" name="target_tool" value="webmail">
            <div class="loginHeader">
                <h3 class="loginHeader__ttl login__ttl--info">WEBメール  ログイン</h3>
                <p class="login__read">ブラウザを使用してメールを閲覧・送信するためのシステムです。</p>
                <img src="img/login/ico_webmail_l.png" alt="" class="srcset loginHeader__img">
            </div>

            <div class="newLogin">
                <div class="newLogin_text">
                    <p class="newLogin_ttl">ログインフォームをリニューアルしました。</p>
                    現在のログインフォームは2022年3月31日に終了予定です。登録しているブックマークなどは、新しいログインフォームのURLで再度登録をお願いいたします。
                </div>
                <div class="newLogin_btn btnarea">
                    <a class="btn" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/mail/" target="_blank">新ログインフォームに切替</a>
                </div>
            </div>

            <noscript>
                <aside class="msg msg_caution">
                    <h6 class="tac msg_ttl">※ご利用にはJavaScriptが必要です。ログイン前にJavaScriptを有効にしてください。</h6>
                </aside>
                <style>
                    #email,
                    #mail_password {
                        opacity: .5 !important;
                    }
                    #submit-btn {
                        background: #e1e1e1 !important;
                        box-shadow: none !important;
                        cursor: default !important;
                        transition: none !important;
                    }
                    #submit-btn:hover {
                        opacity: 1 !important;
                    }
                </style>
            </noscript>

            <form id="login_area" action="<?php print $SECURE_URL; ?>xinfo/loginwebmail.cgi" method="POST">
                <div class="loginForm">
                    <div class="loginForm__item">
                        <div class="loginForm__item--caption"><label for="email">メールアドレス</label></div>
                        <div class="loginForm__item--input"><input id="email" type="text" placeholder="name@example.com" name="email" value=""></div>
                    </div>
                    <div class="loginForm__item">
                        <div class="loginForm__item--caption"><label for="mail_password">メールパスワード</label></div>
                        <div class="loginForm__item--input">
                            <input class="form_show"  class="mb5" type="password" id="mail_password" name="mail_password" value="">
                            <input class="form_hide" type="text" id="password_view" value="" name="" autocomplete="off">
                            <span class="ico_eye_field">
                                <i class="ico_eye ico_eye_close passview" show_from_id="#mail_password" hide_from_id="#password_view" add_name="mail_password"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="btnarea">
                    <button type="button" class="g-recaptcha" data-sitekey="6LePCq4UAAAAAIhwW211vAJelBE_NJS-ANlm1GGT" data-callback='onSubmit' name="b1" hidden id="recaptchav2_button"></button>
                    <input id="submit-btn" type="button" name="b1" class="btn" value="ログイン" onclick="loginFunc()">
                    <input type="hidden" name="SC" value="IS">
                </div>
            </form>

        </section>
        <!-- /.login -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("bottom.php"); ?>