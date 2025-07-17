<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>独自SSLで発行される証明書の署名アルゴリズムはSHA-2ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、すべてのブランドとも、発行されるSSL証明書の署名アルゴリズムは「SHA-2」です。なお、2014年12月4日以前よりSSL証明書をご利用で、2016年1月1日以降が有効期限日のSHA-1証明書については…">

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
            
                <h3 class="sub-ttl">独自SSLで発行される証明書の署名アルゴリズムはSHA-2ですか？</h3>

                <p>はい、すべてのブランドとも、発行されるSSL証明書の署名アルゴリズムは「SHA-2」です。</p>
                <p>なお、2014年12月4日以前よりSSL証明書をご利用で、2016年1月1日以降が有効期限日のSHA-1証明書については、SHA-2を用いた証明書として再発行することが可能です。</p>
                <p>詳細は、<a href="../../sha2.php#02">SSL証明書の署名アルゴリズム「SHA-2」への移行について(2014/12/19) ＞ 証明書の再発行によるSHA-2への移行方法について</a>をご参照ください。</p>
                
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