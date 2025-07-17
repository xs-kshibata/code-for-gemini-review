<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「無料独自SSL」と「オプション独自SSL」の違いを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「無料独自SSL」は、当サービスに設置するWebサイトを対象に、「独自IPアドレスなし」で提供する【無料・無制限】で利用可能な独自SSLです。SSLサーバー証明書ブランドに「Let's Encrypt」を採用し、証明書の更新も当サポートで…">

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
            
                <h3 class="sub-ttl">「無料独自SSL」と「オプション独自SSL」の違いを教えてください。</h3>

                <p>「無料独自SSL」は、当サービスに設置するWebサイトを対象に、「独自IPアドレスなし」で提供する【無料・無制限】で利用可能な独自SSLです。<br>
                SSLサーバー証明書ブランドに「Let's Encrypt」を採用し、証明書の更新も当サポートで実施いたします。</p>
                
                <p>「オプション独自SSL」は、著名ブランドのSSLサーバー証明書を選択することが可能で、 
                Webサイト上に設置することでSSLが有効であることをPRできる「サイトシール」や、SSLタイプとして「独自IPアドレスあり」も利用可能な有料の独自SSLです。</p>
                
                <p>詳細は、公式サイト内「<a href="../../functions/service_ssl.php">機能 &gt; 独自SSL</a>」をご参照ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl.php" class="btn btn_gray">「SSL仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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