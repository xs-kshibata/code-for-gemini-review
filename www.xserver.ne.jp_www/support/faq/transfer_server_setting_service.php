<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転の際に、代行サービスにて対応可能な作業を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転の手順の中で「サーバー移転代行」にて対応できる作業と、対応できない作業があります。サーバー移転代行で対応できる作業。サーバーパネル内で行う設定や、Webサイトのデータ移行。・ドメイン設定・メールアカウントの追加・Webサイトのデー...">
</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">サーバー移転の際に、代行サービスにて対応可能な作業を教えてください。</h3>

                <p>「<a href="../../order/order_transfer_server.php">サーバー移転</a>」の手順の中で、「設定おまかせサポート」や「サーバー移転代行」にて対応できる作業と、対応できない作業があります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>代行サービスにて対応できる作業</dt>
                    <dd>
                        <p>サーバーパネル内で行う設定や、Webサイトのデータ移行。</p>
                        <ul class="ul mb10">
                            <li>ドメイン設定</li>
                            <li>メールアカウントの追加</li>
                            <li>Webサイトのデータ移行（FTPでアクセスができるもの）</li>
                        </ul>
                        <p>※移転元のWebサイトの内容によってはデータ移行ができない場合があります。</p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>代行サービスにて対応できない作業</dt>
                    <dd>
                        <p>サーバーパネル外で行う設定。</p>
                        <ul class="ul mb0">
                            <li>パソコン内のメールソフトの設定</li>
                            <li>Webサイトの動作確認</li>
                            <li>ネームサーバーの変更</li>
                        </ul>
                    </dd>
                </dl>

                <p><strong class="yellow">関連マニュアル：</strong><a href="../../price/service_daiko.php">設定おまかせサポート</a>、<a href="../../price/service_server_daiko.php">サーバー移転代行</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

            </section>
            <!-- /.col-main -->
            
            <aside class="col-side">
<?php include("sidemenu.php"); ?>
            </aside>
            <!-- /.col-side -->
        
        </div>
        <!-- /.clearfix -->
        
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>