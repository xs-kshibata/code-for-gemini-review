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
        <div class="gHeaderLogo"><img src="../img/common/logo_xserver_header.png?date=20210513" alt="エックスサーバー"></div>
        <div class="gHeaderTtl">ホームページ制作相談</div>
    </header>
    <main class="contactMain">
        <h1 class="contactTtl">お問い合わせフォーム（無料）</h1>
        <div class="wrap">
            <div class="contactFlow">
                <ul class="contactFlow__list">
                    <li class="isCurrent">お問い合わせ内容の入力</li>
                    <li>入力内容の確認</li>
                    <li>お問い合わせ完了</li>
                </ul>
            </div>
            <div class="contactForm">
                <form method="post" action="confirm.php">
                    <?php if ($err) {　/*エラー有りで表示する部分*/ ?>

                        <div class="formError">
                            <ul class="formError__list">
                                <?php foreach ($err as $f) { ?>
                                <li><?php s_print($f); ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                    <?php } ?>

                    <div class="formBody">
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">XserverアカウントID</div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="user_id" value="<?php s_print($_POST['user_id']); ?>"></div>
                                <div class="formRow__item--text">※当サービスをご利用中のお客様によるご質問の場合は、XserverアカウントIDをご明記ください。</div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">Xserverアカウント</div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input">
                                    <ul class="inputList">
                                        <?php if($_POST['flag'] === '無') { ?>
                                            <li><label for="a01"><input type="radio" name="flag" value="有" id="a01">有</label></li>
                                            <li><label for="a02"><input type="radio" name="flag" value="無" id="a02" checked="checked">無<span class="fs">（新規の方・IDが不明な方はこちら）</span></label></li>
                                        <?php }else{ ?>
                                            <li><label for="a01"><input type="radio" name="flag" value="有" id="a01" checked="checked">有</label></li>
                                            <li><label for="a02"><input type="radio" name="flag" value="無" id="a02">無<span class="fs">（新規の方・IDが不明な方はこちら）</span></label></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">ご担当者名</div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="name" value="<?php s_print($_POST['name']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">会社名</div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="co_name" value="<?php s_print($_POST['co_name']); ?>" class="w100"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">メールアドレス</div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">電話番号</div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="tel" value="<?php s_print($_POST['tel']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">お問い合わせ内容<br><span class="fs">(複数回答可)</span></div>
                                <div class="formRow__ttl--required"><span class="required">必須</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input">
                                    <ul class="inputList">
                                        <li>
                                            <label for="cd01"><input type="checkbox" id="cd01" name="contact_detail_list[company]" value="ホームページ会社の紹介" <?php { if($_POST['contact_detail_list']['company'] != ''){ echo 'checked="checked"'; } } ?>>ホームページ会社の紹介</label>
                                        </li>
                                        <li>
                                            <label for="cd02"><input type="checkbox" id="cd02" name="contact_detail_list[price]" value="相場の情報" <?php { if($_POST['contact_detail_list']['price'] != ''){ echo 'checked="checked"'; } } ?>>相場の情報</label>
                                        </li>
                                        <li>
                                            <label for="cd03"><input type="checkbox" id="cd03" name="contact_detail_list[renewal]" value="リニューアルの相談" <?php { if($_POST['contact_detail_list']['renewal'] != ''){ echo 'checked="checked"'; } } ?>>リニューアルの相談</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="formFooter">
                        <div class="formAgree">
                            <p class="formAgree__text">お問い合わせの際には「<a href="../../support/support_privacy.php" target="_blank">個人情報の取り扱いについて</a>」をお読みいただき、<br>あらかじめ同意の上、お問い合わせください。</p>
                            <div class="formAgree__check"><label for="agree"><input type="checkbox" name="flag_privacy" value="1" id="agree">個人情報の取り扱いについて同意する</label></div>
                        </div>
                        <div class="formSend"><button type="submit" class="btn formBtn confirm">入力内容を確認する</button></div>
                    </div>
                </form>
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