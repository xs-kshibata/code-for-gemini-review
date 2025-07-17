<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WEBメールから受信メールが消えてしまいました。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="WEBメールの受信箱で確認できるメール＝サーバーに保存されているメールとなります。当サービスでは、WEBメールの受信箱に届いたメールを…">

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
            
                <h3 class="sub-ttl">WEBメールから受信メールが消えてしまいました。</h3>

                <p>WEBメールの受信箱で確認できるメール＝サーバーに保存されているメールとなります。<br>
                    当サービスでは、WEBメールの受信箱に届いたメールを、一定期間経過後に自動的にサーバーから削除する機能はありません。<br>
                    WEBメールの受信箱からメールが消えた場合は、以下についてご確認ください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メールソフトを利用している場合</dt>
                    <dd>
                        <ul class="list list_arrow-right mb0">
                            <li>
                                <strong>【POPで設定している場合】</strong><br>
                                <p>メールソフトの設定で、メールを受信後に「サーバーから削除する」設定が有効になっている場合、サーバー上のメールが自動的に削除されます。<br>
                                    有効になっている場合は、設定を解除してください。<br>
                                    また、複数のメールソフトに同じメールアドレスをPOPで設定されている場合、1つの端末でも設定が有効になっていると、サーバーからメールが削除されます。<br>
                                    そのため、全ての端末の設定をご確認ください。
                                </p>
                            </li>
                            <li>
                                <strong>【IMAPで設定している場合】</strong><br>
                                <p class="mb0">サーバーとメールソフトが同期される設定となるため、メールソフトの受信トレイよりメールを削除されると、サーバー上の受信メールは削除されます。</p>
                            </li>
                        </ul>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メールの転送設定を有効にされている場合</dt>
                    <dd>
                        <p class="mb0">サーバーパネルのメールアカウントの転送設定にて「メールボックスに残すかどうかの設定」を【残さない】にされている場合、受信メールがサーバーに保存されず削除されます。<br>
                            サーバー上に受信メールを保存される場合は「<a href="../../manual/man_mail_transfer.php">転送設定</a>」の設定を変更してください。</p>
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