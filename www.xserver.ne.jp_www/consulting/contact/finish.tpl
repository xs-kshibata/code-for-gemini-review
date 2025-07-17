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
                    <li>入力内容の確認</li>
                    <li class="isCurrent">お問い合わせ完了</li>
                </ul>
            </div>
            <div class="contactForm">

                <?php if ($err) { ?>

                    <p class="msgThanks">お問い合わせの受付ができませんでした。</p>
                    <p class="msgThanks">お手数ですが時間を空けてもう一度お問い合わせください。</p>

                <?php } else { ?>

                    <p class="msgThanks">お問い合わせを受け付けました。</p>
                    <p class="msgThanks">
                        お問い合わせくださいました内容を確認の上、<br>
                        ご入力いただいたメールアドレス宛にご返信させていただきます。<br>
                        ご返信まで、しばらくお待ちください。
                    </p>
                    <p class="msgThanks">
                        <br>
                        また、ご返信先メールアドレスへ、<br>
                        以下の受付完了メールを送信しておりますので、ご確認ください。
                    </p>
                    <p class="msgThanks">
                        −−−−−−−−−−−−−−−−−−−<br>
                        送信元：web-consultant@xserver.ne.jp<br>
                        件名　：【Xserver】お問い合わせを受け付けました<br>
                        −−−−−−−−−−−−−−−−−−−<br>
                    </p>
                    <p class="msgThanks">
                        該当のメールがお手元に届いていないという場合、<br>
                        以下の可能性がございますので、お確かめくださいますでしょうか。<br>
                    </p>
                    <p class="msgThanks">
                        ・ご返信先として指定されているメールアドレスが有効ではない<br>
                        ・当サービスからのメールが迷惑メールとして削除または隔離されている<br>
                    </p>
                    <p class="msgThanks">
                        ご返信先として指定されているメールアドレスが有効ではない場合など<br>
                        メールがお手元に届いていないようでしたら、お手数ではございますが、<br>
                        別の有効なメールアドレスで改めてお問い合わせをお願いいたします。<br>
                    </p>
                    <p class="msgThanks">
                        <br>
                        <span style="font-family: sans-serif">■</span>サービス・サーバー利用に関するお問合わせについて<br><br>
                        ホームページ制作に関わらない弊社サービス・サーバーに関する<br>
                        ご不明点やご質問は、下記にてご案内しております。<br><br>
                        あわせてご利用ください。
                    </p>
                    <p class="msgThanks">
                        　◇マニュアル・お問い合わせ<br>
                        　<a href="https://support.xserver.ne.jp/jump/user_support_list.php">https://support.xserver.ne.jp/jump/user_support_list.php</a>
                    </p>

                <?php } ?>

                <div class="formFooter">
                    <div class="formSend"><a href="../" class="btn formBtn home">トップページに戻る</a></div>
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