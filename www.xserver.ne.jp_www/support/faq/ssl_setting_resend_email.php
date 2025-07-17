<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>オプション独自SSLのメール認証で承認メールの受信ができません。再送できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、以下の手順で承認メールの再送が可能です。1.XServerアカウント内、SSL証明書メニューの「申請状況確認」をクリックしてください…">

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
            
                <h3 class="sub-ttl">オプション独自SSLのメール認証で承認メールの受信ができません。再送できますか？</h3>
                
                <p>はい、以下の手順で承認メールの再送が可能です。</p>

                <div class="serial-box mb30">

                    <section class="box">
                        <h6 class="box_ttl" id="link-b01">1.XServerアカウント内、SSL証明書メニューの「申請状況確認」をクリックしてください。</h6>
                        <div class="box_body">
                            <img class="img" src="../../img/faq/ssl_setting_resend_email_1.png" alt="「申請状況確認」をクリックしているスクリーンショット">
                        </div>
                    </section>
                    <section class="box">
                        <h6 class="box_ttl" id="link-b01">2.承認メールアドレスの項目の「再送する」をクリックしてください。</h6>
                        <div class="box_body">
                            <img class="img" src="../../img/faq/ssl_setting_resend_email_2.png" alt="「再送する」をクリックしているスクリーンショット">
                        </div>
                    </section>
                    <section class="box">
                        <h6 class="box_ttl" id="link-b01">3.プルダウンから任意の承認メールアドレスを選択してください。</h6>
                        <div class="box_body">
                            <img class="img" src="../../img/faq/ssl_setting_resend_email_3.png" alt="任意の承認メールアドレスを選択しているスクリーンショット">
                        </div>
                    </section>

                </div>

                <p>ブランドによっては、承認メールの再送ボタンが表示されないものがあります。<br>
                    その場合は、「<a href="../support.php">お問い合わせ</a>」よりメールでお問い合わせください</p>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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