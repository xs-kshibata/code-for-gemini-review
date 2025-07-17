<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>MySQLのバージョンを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーのお申し込み時期によって異なりますが、下記のいずれかのデータベースをご利用いただけます。　・MySQL 5.7.x　・MariaDB 10.5.x">

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
            
                <h3 class="sub-ttl">MySQLのバージョンを教えてください。</h3>

                <p>サーバーのお申し込み時期によって異なりますが、下記のいずれかのデータベースをご利用いただけます。 </p>
                <ul class="ul">
                    <li>MySQL 5.7.x</li>
					<li>MariaDB 10.5.x</li>
                </ul>
                <p>なお、新規でお申し込みいただくサーバーについては「MariaDB 10.5.x」のデータベースとなります。</p>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_db.php" class="btn btn_gray">「データベース」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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