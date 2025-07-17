<?php include("conf.php"); ?>
<?php include("header.php"); ?>
<?php include("com_recaptcha.php"); ?>
<script src="js/common.js"></script>
<title>XServerアカウント - ログイン | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="登録情報の確認や料金のお支払いなど、ご契約に関する管理ツールです。">

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

        <section class="login infopanel">
            <input type="hidden" id="target_tool" name="target_tool" value="info">
            <div class="loginHeader">
                <h3 class="loginHeader__ttl login__ttl--info">XServerアカウント ログイン</h3>
                <p class="login__read">お客様のご登録情報の確認、変更、ご利用期限の確認等を行うための管理システムです。</p>
                <img src="img/login/ico_infopanel_l.png" alt="" class="srcset loginHeader__img">
            </div>

            <div class="newLogin">
                <div class="newLogin_text">
                    <p class="newLogin_ttl">ログインフォームをリニューアルしました。</p>
                    現在のログインフォームは2022年3月31日に終了予定です。登録しているブックマークなどは、新しいログインフォームのURLで再度登録をお願いいたします。
                </div>
                <div class="newLogin_btn btnarea">
                    <a class="btn" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">新ログインフォームに切替</a>
                </div>
            </div>

            <noscript>
                <aside class="msg msg_caution">
                    <h6 class="tac msg_ttl">※ご利用にはJavaScriptが必要です。ログイン前にJavaScriptを有効にしてください。</h6>
                </aside>
                <style>
                    #memberid,
                    #user_password {
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

            <form id="login_area" action="<?php print $SECURE_URL; ?>xapanel/myaccount/login" method="POST">
                <div class="loginForm">
                    <div class="loginForm__item">
                        <div class="loginForm__item--caption"><label for="memberid">メールアドレス</label></div>
                        <div class="loginForm__item--input"><input id="memberid" type="text" placeholder="name@example.com" name="memberid" value=""></div>
                        <div class="loginForm__item--note">XServerアカウントIDでもログインできます</div>
                    </div>
                    <div class="loginForm__item">
                        <div class="loginForm__item--caption"><label for="user_password">パスワード</label></div>
                        <div class="loginForm__item--input">
                            <input class="form_show" type="password" id="user_password" name="user_password" value="">
                            <input class="form_hide" type="text" id="password_view" value="" name="" autocomplete="off">
                            <span class="ico_eye_field">
                                <i class="ico_eye ico_eye_close passview" show_from_id="#user_password" hide_from_id="#password_view" add_name="user_password"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="btnarea">
                    <button type="button" class="g-recaptcha" data-sitekey="6LePCq4UAAAAAIhwW211vAJelBE_NJS-ANlm1GGT" data-callback='onSubmit' name="action_user_login" hidden id="recaptchav2_button"></button>
                    <input type="hidden" name="service_login" value="<?php print $service = in_array($_GET['service_login'], ['xserver', 'xbiz', 'xdomain', 'xdrive', 'nextshop', 'amazongift']) ? $_GET['service_login']:'xserver'; ?>">
                    <input type="hidden" name="request_page" value="<?php print $_GET['request_page']; ?>">
                    <input id="submit-btn" type="button" name="action_user_login" class="btn" value="ログイン" onclick="loginFunc()">
                </div>

                <p class="tac">※パスワードを忘れてしまった方は<a href="<?php print $SECURE_URL; ?>xinfo/?action_reissue_index=true" target="_blank" rel="noopener">こちら</a></p>

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