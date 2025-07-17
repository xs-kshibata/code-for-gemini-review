<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールボックスの容量がいっぱいで、メールが受信できません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下をご確認のうえ、メールボックスの容量の変更や、不要なメールの削除などの対応を行ってください。サーバーのメールボックスの容量を変更する。サーバーパネル「メールカウント設定」より、「メールアカウントの容量変更」を行ってください。容量はメー…">

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
            
                <h3 class="sub-ttl">メールボックスの容量がいっぱいで、メールが受信できません。</h3>

                <p>以下をご確認のうえ、メールボックスの容量の変更や、不要なメールの削除などの対応を行ってください。</p>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーのメールボックスの容量を変更する</dt>
                    <p>サーバーパネル「メールカウント設定」より、「<a href="../../manual/man_mail_change_capacity.php">メールアカウントの容量変更</a>」を行ってください。<br>
                    容量はメールアドレスごとに1〜20,000MB(20GB)で設定が可能です。</p>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>WEBメールからメールを削除する</dt>
                    <p>「<a href="https://secure.xserver.ne.jp/xapanel/login/xserver/mail/">WEBメール</a>」へログインのうえ、「受信箱」より不要なメールを削除してください。<br>
                    また、「送信済み」「迷惑メール」「ごみ箱」にメールがある場合は、こちらからも不要なメールを削除してください。</p>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>メールソフトの設定を変更する</dt>
                       <ul class="list list_arrow-right">
                          <li>POPの場合</li>
                          <p>メールソフトの設定で「サーバーにメッセージのコピーを残す」などを有効にされている場合、メールソフトでメールを受信しても、サーバー側のメールは削除されず蓄積されます。<br>
                          メールボックスの容量がいっぱいになってしまう場合は、こちらの設定を無効にするか、「○日後に削除する」などの設定を有効にしてください。<br>
                          （サーバーのメールが削除されても、メールソフト内の受信メールは消えません）</p>
                       </ul>
                       <ul class="list list_arrow-right">
                          <li>IMAPの場合</li>
                          <p>メールソフトとサーバーが同期されているため、メールソフトの受信トレイから不要なメールすると、サーバーからもメールが削除されます。</p>
                       </ul>
                </dl>

                <p>サーバーには古い受信メールを自動的に削除する機能はありません。<br>
                容量がいっぱいにならないよう、定期的にWEBメールなどからメールを削除するか、メールソフトをご利用の場合は、メールソフト側の設定を変更されることをご検討ください。</p>
                
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