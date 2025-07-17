<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webフォント機能で規定のPV数（75,000PV）を超えた場合はどうなりますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="規定のPV数（75,000PV）を超えた場合は、サーバーパネル内「Webフォント設定」の登録を解除し、Webフォントの配信は停止します。停止後は、閲覧するWebブラウザ標準のフォントで表示されます。　※登録が解除された時点で、メールによる…">

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
            
                <h3 class="sub-ttl">Webフォント機能で規定のPV数（75,000PV）を超えた場合はどうなりますか？</h3>

                <p>規定のPV数（75,000PV）を超えた場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内「Webフォント設定」の登録を解除し、Webフォントの配信は停止します。<br>
				停止後は、閲覧するWebブラウザ標準のフォントで表示されます。</p>
				<p>※登録が解除された時点で、メールによるお知らせをいたします。</p>
				<p>なお、現在のPV数は<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内「Webフォント設定」にて確認することができます。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_webfont.php" class="btn btn_gray">「Webフォント」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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