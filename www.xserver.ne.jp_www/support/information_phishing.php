<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>エックスサーバーを装ったフィッシングメールにご注意ください | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーを装ったフィッシングメールが複数出回っていることを確認しております。件名や本文に不審な点がある場合は本文中のリンクへのアクセスを絶対に行わないでください。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <article class="section">
            <h3 class="section_ttl">エックスサーバーを装ったフィッシングメールにご注意ください</h3>
            <div class="section_body">
                <p class="mb30">
                    エックスサーバーが提供する<br>
                    <span class="font-bold">サーバーパネルのログイン画面に酷似した偽サイトのURLが貼り付けられている<br>
                        フィッシングメールが複数出回っていることを確認しております。</span><br><br>

                    お客様のログインIDやパスワードを搾取し、個人情報の不正取得やサーバアクセス情報の不正利用による<br>
                    サイト改ざん、メールの送受信などの被害を受ける恐れがあります。<br>
                    件名や本文に不審な点がある場合は本文中のリンクへのアクセスを絶対に行わないでください。
                </p>

                <h4 class="ttl">フィッシングメールとは？</h4>
                    <p>フィッシングメールとは、メールやSMS(ショートメッセージサービス)経由で偽サイトに誘導し、<br>
                        相手に本物だと信じ込ませて不正にログインIDやパスワードを盗み取る手口のことです。</p>
                        <section class="block">
                            <h5 class="block_ttl">不審なメールの特徴</h5>
                            <div class="block_body">
                                <dl class="dl">
                                    <dt>差出人</dt>
                                    <dd><div class="border border_gray disp-ib">”Support”＜support@xserver.jp＞</div>
                                        <p>当サービスサポートのメールアドレスは<span class="font-bold">”support@xserver.ne.jp”</span>です。<br>
                                        正しいアドレスから届いた場合でも、アドレスを偽装している可能性があります。<br>
                                        件名や本文に不審な点がある場合は『本文中のリンクへのアクセス』を絶対に行わないでください。
                                        </p>
                                    </dd>
                                    <dt>本文</dt>
                                    <dd><span class="font-bold">アカウントの確認が必要といった文言で、偽サイトへのURLへのアクセスを促す内容が記載されています。</span></dd>
                                    <dt>URL</dt>
                                    <dd><p>エックスサーバー公式サイトや管理ツールのURLは以下のとおりです。</p>

                                        <div class="border border_gray disp-ib">https://***.xserver.ne.jp/</div>

                                        <p>メールに記載のURLにアクセスする場合、<br>
                                        URLの文字列が上記に合致するか、十分にご確認ください。<br><br>

                                        また、HTMLメールでは、リンク先のURLが「https://***.xserver.ne.jp/」であるかのように<br>
                                            見せかけながら他のサイトに誘導することも仕組み上可能です。</p>
                                    </dd>
                                </dl>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl">不審なメールを受け取った場合</h5>
                            <div class="block_body">
                                <p>不審なメールを受け取った場合、メールに記載のURLにはアクセスしないようにしてください。<br>
                                    また、ご自身での判断が難しい場合には、お手数ですが弊社サポートまでお問い合わせください。</p>
                                <a href="support.php" class="mr5 btn btn_white-borderd">お問い合わせフォーム<i class="ico ico_chevron-right"></i></a>
                            </div>
                        </section>

                    <h4 class="ttl">正規のXServerアカウントログインページの見分け方</h4>
                        <p>XServerアカウントにログインする際は、ブラウザに表示されたURLが正規のものに一致するか確認してください。<br>
                            正規のXServerアカウントの場合、アドレス欄には以下のように表示されます。</p>

                        <p class="font-l"><i class="ico ico_square-fill"></i>Mozilla Firefox</p>
                        <img style="width:100%; max-width:381px;" src="../img/news/detail/news_2106_firefox.png" alt="Mozilla Firefox">
                        <p class="font-l mt20"><i class="ico ico_square-fill"></i>Google Chrome</p>
                        <img style="width:100%; max-width:331px;" src="../img/news/detail/news_2106_chrome.png" alt="Google Chrome">

                        <aside class="msg msg_caution mt20">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                            <div class="msg_body">
                                <p>サイトを開く際に以下のような警告メッセージが表れる場合は、偽サイトの可能性があります。<br>
                                    この場合は、閲覧を中止してください。</p>

                                <p>「このWebサイトのセキュリティ証明書には問題があります。」<br>
                                    「この接続ではプライバシーが保護されません。」<br>
                                    「接続の安全性を確認できません。」</p>

                                <p class="note">※ブラウザの種類やバージョンによって、上記以外の警告メッセージが表示されることがありますが、<br>
                                    同様に閲覧を中止してください。</p>
                            </div>
                        </aside>
                        <section class="block">
                            <h5 class="block_ttl">万が一不審なサイトにアクセスしてしまった場合</h5>
                            <div class="block_body">
                                <p>万が一不審なサイトにアクセスしてしまった場合、速やかに当該ウェブサイトの閲覧を終了してください。<br>
                                    ウェブサイトにアクセスしたのみでは、XServerアカウントのログイン情報が流出することはありません。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl">不審なサイトでログイン情報を入力してしまった場合</h5>
                            <div class="block_body">
                                <p>第三者にログイン情報が漏えいしてしまった可能性があります。<br>
                                    パスワード再発行フォームより、ただちに新しいパスワードを再発行してください。</p>
                            </div>
                        </section>

                <h4 class="ttl">関連情報</h4>
                <div class="border border_gray">
                    <ul class="list list_arrow-right">
                    <?php include("../newsman/create_phishing_news_list.php"); ?>
                    </ul>
                </div>

            </div>
            <footer class="section_footer">
                <p class="tac"><a class="btn btn_blue" href="#" onclick="javascript:window.history.back(-1);return false;">ニュース一覧に戻る<i class="ico ico_refresh"></i></a></p>
            </footer>
        </article>
        <!-- /.section -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>