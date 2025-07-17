<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールソフトへの設定で、送受信のメールサーバーをホスト名(sv***.xserver.jp)ではなく、初期ドメイン(***.xsrv.jp)や、独自ドメインを指定することは可能ですか。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="メールソフトの設定で、送受信のメールサーバーを初期ドメイン(***.xsrv.jp)や、独自ドメインに設定することは可能ですが、SMTP/POP3/IMAP over SSLには対応しておりません。当サービスでは、送受信のメールサーバーをホスト名…">

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
            
                <h3 class="sub-ttl">メールソフトへの設定で、送受信のメールサーバーをホスト名(sv***.xserver.jp)ではなく、初期ドメイン(***.xsrv.jp)や、独自ドメインを指定することは可能ですか。</h3>

                <p>メールソフトの設定で、送受信のメールサーバーを初期ドメイン(***.xsrv.jp)や、独自ドメインに設定することは可能ですが、SMTP/POP3/IMAP over SSLには対応しておりません。</p>
                <p>当サービスでは、送受信のメールサーバーをホスト名(sv***.xserver.jp)に設定し、SMTP/POP3/IMAP over SSL(メール送受信経路の暗号化)を有効にする設定を推奨いたします。</p>
                <p>推奨設定に関する詳細は、以下のマニュアルをご参照ください。<br>
                <a href="../../manual/man_mail_setting.php">メールソフトの設定</a></p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_setting.php" class="btn btn_gray">「メールの設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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