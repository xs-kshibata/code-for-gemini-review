<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Thunderbirdで送受信ができなくなりました。- よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Thunderbirdの設定が原因となっている可能性があります。送受信のメールサーバーがホスト名(sv***.xserver.jp)に設定されているかをご確認ください…">

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
            
                <h3 class="sub-ttl">Thunderbirdで送受信ができなくなりました。</h3>

                <p>Thunderbirdの設定が原因となっている可能性があります。<br>
                    送受信のメールサーバーがホスト名(sv***.xserver.jp)に設定されているかをご確認ください。</p>

                <p class="note">※「sv***.xserver.jp」の部分は、お客様がご利用のサーバーのホスト名を記入してください。<br>
                    　サーバーパネル内「サーバー情報」より、お客様がご利用のサーバーのホスト名の確認が可能です。</p>

                <p>送受信のメールサーバーを「sv***.xserver.jp」にご変更いただいたあとも 送信・受信のいずれかが出来ない場合、 エラーメッセージや状況をご記載のうえ、「<a href="../support.php">サポート</a>」よりメールにてお問い合わせください。</p>

                <p>設定に関する詳細は、下記ページも併せてご参照ください。</p>

                <p class="mb0"><strong class="yellow">関連質問：</strong><a href="service_mail_setting_ssl.php">メールでSSL（暗号化）通信を行いたい。</a></p>
                <p><strong class="yellow">参考マニュアル：</strong><a href="../../manual/man_mail_setting.php">メールソフトの設定</a></p>

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