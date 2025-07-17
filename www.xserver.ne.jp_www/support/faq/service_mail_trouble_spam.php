<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>配信したメールマガジンの件名に[SPAM]という文字列が付与されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーのスパム検知プログラムによりスパムとして検知された場合に起きる事象です。スパムフィルター設定を「OFF」に切り替えるか、メールマガジンアドレスをホワイトリストに追加することで…">

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
            
                <h3 class="sub-ttl">配信したメールマガジンの件名に[SPAM]という文字列が付与されます。</h3>

                <p>エックスサーバーのスパム検知プログラムによりスパムとして検知された場合に起きる事象です。<br>
                スパムフィルター設定を「OFF」に切り替えるか、メールマガジンアドレスをホワイトリストに追加することで、以降はスパムとして検知されなくなります。</p>
                <p>設定方法は「メールについて &gt; <a href="../../manual/man_mail_spam_setting.php">迷惑メールフィルタ設定</a>」をご覧ください。</p>
                
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