<!doctype html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-3789601-2', {
        'optimize_id': 'GTM-WGFNFH8',
        'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'ssl.xdomain.ne.jp']
        }
      });
    </script>
    <meta charset="euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="Copyright Xserver Inc.">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <link rel="index" href="https://www.xserver.ne.jp/sitemap.php" title="サイトマップ">
    <link rel="shortcut icon" href="https://www.xserver.ne.jp/img/common/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.xserver.ne.jp/img/common/apple-touch-icon-precomposed.png">
    <script src="https://www.xserver.ne.jp/js/google.js?date=20210128"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
    <script type="text/javascript">
        var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
        (function(html){
            html.className = html.className.replace(RegExp(' ?noJS'),'js');
        })(document.documentElement);
    </script>
    <link href="../css/site.css" rel="stylesheet">
    <title>お問い合わせ｜エックスサーバー ホームページ制作相談</title>
    <meta name="description" content="エックスサーバー ホームページ制作相談へのお問い合わせについてご案内しています。">
    <link rel="canonical" href="https://www.xserver.ne.jp/consulting/">
</head>
<body>
<div id="container">
    <header class="gHeader">
        <div class="gHeaderLogo"><img src="../img/common/logo_xserver_header.png" alt="エックスサーバー"></div>
        <div class="gHeaderTtl">ホームページ制作相談</div>
    </header>
    <main class="contactMain">
        <h1 class="contactTtl">お問い合わせフォーム（無料）</h1>
        <div class="wrap">
            <div class="contactFlow">
                <ul class="contactFlow__list">
                    <li>お問い合わせ内容の入力</li>
                    <li class="isCurrent">入力内容の確認</li>
                    <li>お問い合わせ完了</li>
                </ul>
            </div>
            <div class="contactForm">
                <p class="msgConfirm">下記の情報で送信いたします。<br>よろしければ、送信するボタンをクリックしてください。</p>
                    <div class="formBody">
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">XserverアカウントID</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['user_id']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">Xserverアカウント</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['flag']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">ご担当者名</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['name']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">会社名</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['co_name']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">メールアドレス</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['mailaddress']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">電話番号</div>
                            </div>
                            <div class="formRow__item"><?php s_print($_POST['tel']); ?></div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">お問い合わせ内容<br><span class="fs">(複数回答可)</span></div>
                            </div>
                            <div class="formRow__item"><?php s_print($contact_detail); ?></div>
                        </div>
                    </div>
                <div class="formFooter">
                    <div class="formSend">
                        <ul class="formSend__actions">
                            <form method="post" action="./">
                                <input type="hidden" name="trans_id" value="<?php s_print($_SESSION['trans_id']); ?>"/>
                                <input type="hidden" name="user_id" value="<?php s_print($_POST['user_id']); ?>" />
                                <input type="hidden" name="flag" value="<?php s_print($_POST['flag']); ?>"/>
                                <input type="hidden" name="name" value="<?php s_print($_POST['name']); ?>" />
                                <input type="hidden" name="co_name" value="<?php s_print($_POST['co_name']); ?>" />
                                <input type="hidden" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>" />
                                <input type="hidden" name="tel" value="<?php s_print($_POST['tel']); ?>" />
                                <input type="hidden" name="contact_detail_list[company]" value="<?php s_print($_POST['contact_detail_list']['company']); ?>">
                                <input type="hidden" name="contact_detail_list[price]"   value="<?php s_print($_POST['contact_detail_list']['price']); ?>">
                                <input type="hidden" name="contact_detail_list[renewal]" value="<?php s_print($_POST['contact_detail_list']['renewal']); ?>">
                                <li><button type="submit" class="btn formBtn prev">内容を修正する</button></li>
                            </form>
                            <form method="post" action="finish.php">
                                <input type="hidden" name="trans_id" value="<?php s_print($_SESSION['trans_id']); ?>"/>
                                <input type="hidden" name="user_id" value="<?php s_print($_POST['user_id']); ?>" />
                                <input type="hidden" name="flag" value="<?php s_print($_POST['flag']); ?>"/>
                                <input type="hidden" name="name" value="<?php s_print($_POST['name']); ?>" />
                                <input type="hidden" name="co_name" value="<?php s_print($_POST['co_name']); ?>" />
                                <input type="hidden" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>" />
                                <input type="hidden" name="tel" value="<?php s_print($_POST['tel']); ?>" />
                                <input type="hidden" name="contact_detail_list[company]" value="<?php s_print($_POST['contact_detail_list']['company']); ?>">
                                <input type="hidden" name="contact_detail_list[price]"   value="<?php s_print($_POST['contact_detail_list']['price']); ?>">
                                <input type="hidden" name="contact_detail_list[renewal]" value="<?php s_print($_POST['contact_detail_list']['renewal']); ?>">
                                <input type="hidden" name="contact_detail" value="<?php s_print($contact_detail)?>">
                                <li><button type="submit" class="btn formBtn send">送信する</button></li>
                            </form>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="contactFooter">
        <address>&copy; 2003-<?php echo date("Y"); ?> Xserver Inc.</address>
    </div>
</div>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>