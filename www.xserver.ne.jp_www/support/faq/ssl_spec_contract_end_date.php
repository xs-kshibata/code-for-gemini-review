<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>独自SSLの有効期間と契約終了日が異なります。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="複数年契約の場合でも、証明書の有効期間は最大397日となるため、サイトシールをクリックしたときに表示されるSSL証明書の有効期間とご案内メールや管理パネル上に記載されている「契約終了日」が異なる場合があります。対象のドメイン名の…">

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
            
                <h3 class="sub-ttl">独自SSLの有効期間と契約終了日が異なります。</h3>

                <p>複数年契約の場合でも、証明書の有効期間は最大397日となるため、サイトシールをクリックしたときに表示されるSSL証明書の有効期間とご案内メールや管理パネル上に記載されている「契約終了日」が異なる場合があります。</p>
                <p>対象のドメイン名のネームサーバーが当社指定のものとなっている場合は、契約期間内であれば、SSL証明書の有効期間が自動的に延長されます。</p>
                <p>対象のドメイン名のネームサーバーが当社以外のものとなっている場合は、お客様ご自身でSSL証明書の有効期間を延長する必要があります。</p>

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