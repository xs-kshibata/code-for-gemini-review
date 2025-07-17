<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーIDは変更できますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="いいえ、サーバーIDは変更できません。ご希望のサーバーIDをあらためてお申し込みいただく必要があります。　※つづり間違いの場合でも修正できません。　※サーバーアカウントの解約申請を行われても、同じサーバーIDを申し込むことはできません。…">

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
            
                <h3 class="sub-ttl">サーバーIDは変更できますか？</h3>
                
                <p>いいえ、サーバーIDは変更できません。<br>
                ご希望のサーバーIDをあらためてお申し込みいただく必要があります。</p>
                <p class="note mb0">※つづり間違いの場合でも修正できません。</p>
                <p class="note mb0">※サーバーアカウントの解約申請を行われても、同じサーバーIDを申し込むことはできません。</p>
                <p class="note">※既にお支払いをいただいたご利用料金を充当することはできません。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>お申し込みし直す場合</dt>
                    <dd>
						<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、「エックスサーバー契約管理ページ」よりご希望のサーバーIDをお申し込みください。</p>
						<p><img class="img" src="../../img/faq/faq_contract_alteration2.png?date=20220216" alt="追加申し込みをクリックしているスクリーンショット"></p>
                        <p>これまでのサーバーIDは、XServerアカウント内、エックスサーバー契約管理ページの「契約情報」より解約申請を行ってください。</p>
                        <p><img class="img" src="../../img/faq/faq_contract_alteration3.png?date=20230130" alt="契約情報をクリックしているスクリーンショット"></p>
					</dd>
                </dl>

                
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_alteration.php" class="btn btn_gray">「契約変更」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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