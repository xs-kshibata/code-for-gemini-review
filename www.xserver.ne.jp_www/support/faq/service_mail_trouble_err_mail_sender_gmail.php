<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Gmailへメールが送信できません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「Google社のメール送信者のガイドライン変更」に伴い、Gmailへメールを送信される場合はDKIMやSPFなどの設定が必要になりました。Gmailへのみメールの送信ができない場合は、以下の設定をご確認ください。※設定を変更された場合、DNSの反映には数時間から最大…">

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
            
                <h3 class="sub-ttl">Gmailへメールが送信できません。</h3>

                <p>「<a href="https://www.xserver.ne.jp/news_detail.php?view_id=12026">Google社のメール送信者のガイドライン変更</a>」に伴い、Gmailへメールを送信される場合はDKIMやSPFなどの設定が必要になりました。<br>
                    Gmailへのみメールの送信ができない場合は、以下の設定をご確認ください。</p>

                <p class="note font-m">※設定を変更された場合、DNSの反映には数時間から最大24時間程度かかります。1日程度様子を見たうえでメールの送信をお試しください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>DKIM設定を確認する</dt>
                    <dd>
                        <p>サーバーパネルより「DKIM設定」を確認してください。<br>「DKIM設定一覧」に対象のドメインおよびサブドメインが表示されていれば問題ありません。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_set_notification_2.png" alt="DKIM設定スクリーンショット"></p>
                        <p class="mt30">DKIMが設定されていない場合は、マニュアルをご確認のうえ、設定を追加してください。</p>
                        <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_dkim.php">DKIM設定</a></p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SPF設定を確認する</dt>
                    <dd>
                        <p>サーバーパネルより「SPF設定」を確認してください。 <br>対象のドメインおよびサブドメインの設定内容に【ON (標準設定 + Gmail許可設定)】と表示されていれば問題ありません。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_spf_dkim_set_notification_4.png?date=2408" alt="SPF設定スクリーンショット"></p>
                        <p class="mt30">SPFが設定されていない場合は、マニュアルをご確認のうえ、設定を【ON】へ切り替えし「Gmail許可の追加」をおこなってください。</p>
                        <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_spf.php">SPF設定</a></p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>1日5,000通以上のメールを送信する場合</dt>
                    <dd>
                        <p>Gmailのアドレス宛に1日5,000通以上のメールを送信される場合は、サーバーパネルより上記に加え「DMARC設定」を確認してください。<br>「現在のDMARCポリシー設定」が【未設定】以外の表示になっていれば問題ありません。</p>
                        <p><img class="img" src="../../img/faq/faq_service_mail_trouble_dmarc.png" alt="DMARC設定スクリーンショット"></p>
                        <p class="mt30">DMARCが設定されていない場合は、マニュアルをご確認のうえ、「変更後のDMARCポリシー設定」より任意の項目を選択し、設定をおこなってください。</p>
                        <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_dmarc.php">DMARC設定</a></p>
                       </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>定期購読メールを送信する場合</dt>
                    <dd>
                        <p>Gmailのアドレス宛にメールマガジンなど定期購読メールを送信をされる場合は、メール内に登録解除ができるURLリンクを記載するなど、受信者が簡単に配信登録を解除できる方法を用意してください。</p>
                        <p>また、受信者から登録解除の申請があった場合、2日以内にメール送信を停止できるようご対応ください。</p>
                    </dd>
                </dl>



                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_trouble.php" class="btn btn_gray">「メールトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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