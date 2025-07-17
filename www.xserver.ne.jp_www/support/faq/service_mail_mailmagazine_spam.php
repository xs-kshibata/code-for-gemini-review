<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>メールマガジン機能を利用して送信したメールが、受信側で迷惑メールと判定されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="迷惑メールの判定は受信側のメールサーバーやソフトウェアで行われるため、迷惑メールと判定される原因の特定はいたしかねます。なお、当サービスでは、「DNSレコード設定」においてSPFレコードの追加をお勧めしています。">

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
            
                <h3 class="sub-ttl">メールマガジン機能を利用して送信したメールが、受信側で迷惑メールと判定されます。</h3>

                <p>迷惑メールの判定は受信側のメールサーバーやソフトウェアで行われるため、迷惑メールと判定される原因の特定はいたしかねます。</p>
                            
                <p>なお、当サービスでは、「DNSレコード設定」においてSPFレコードの追加をお勧めしています。<br>
                詳細は、以下のマニュアルをご参照ください。</p>
                
                <strong class="yellow">参考：</strong>
                <a href="https://www.xserver.ne.jp/manual/man_domain_dns_setting.php">ドメインについて&nbsp;&gt;&nbsp;DNSレコードの編集</a>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_mail_mailmagazine.php" class="btn btn_gray">「メールマガジン機能」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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