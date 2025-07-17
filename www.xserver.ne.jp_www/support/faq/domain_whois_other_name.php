<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Whois情報が他人の名義で公開されています。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="当サービス管理下のドメインは、属性型JPドメイン（.co.jp / .or.jp / .ne.jp / .gr.jp / .ac.jp / .ed.jp）を除き、Whois情報を弊社名義で代理公開することが可能です。なお、ドメインの所有権は取得されたお客様にありますので、ご安心ください。">

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
            
                <h3 class="sub-ttl">Whois情報が他人の名義で公開されています。</h3>
                
                <p>当サービス管理下のドメインは、属性型JPドメイン（.co.jp / .or.jp / .ne.jp / .gr.jp / .ac.jp / .ed.jp）を除き、Whois情報を弊社名義で代理公開することが可能です。</p>
                <p>なお、ドメインの所有権は取得されたお客様にありますので、ご安心ください。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_whois.php" class="btn btn_gray">「Whois」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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