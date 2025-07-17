<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>取得したドメインのWhois情報を変更したいです。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="Whois情報の変更手順はドメインの種類によって異なります。それぞれ下記をご参照ください。　・.com / .net / .org / .info / .biz / .jp / 都道府県.jp などの属性型JPドメイン以外…XServerアカウント内…">

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
            
                <h3 class="sub-ttl">取得したドメインのWhois情報を変更したいです。</h3>
                
                <p>Whois情報の変更手順はドメインの種類によって異なります。それぞれ下記をご参照ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.com / .net / .org / .info / .biz  / .jp / 都道府県.jp などの属性型JPドメイン以外</dt>
                    <dd>
                        <ol class="ol">
							<li>XServerアカウント内、エックスサーバー契約管理ページのWhois情報を変更したいドメインの右側にある縦三点リーダーメニューをクリックします。</li>
							<li>メニュー内にある「Whois情報設定」より変更手続きが可能です。<br>
								<p class="mt5"><img class="img" src="../../img/faq/faq_domain_whois.png?date=20201022" alt="Whois情報設定をクリックしているスクリーンショット"></p>
							</li>
						</ol>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>属性型JP（.co.jp / .or.jp / .ne.jp / .gr.jp / .ac.jp / .ed.jp）ドメインの場合</dt>
                    <dd>
                        <p>XServerアカウントからの変更ができません。<br>
                        お手数ですがメールサポートへお問い合わせください。</p>
                        <p class="mb0 note">※属性型JPドメインの登録者情報変更は、手数料2,200円<span class="font-xs">(税込)</span>が必要です。なお、担当者情報の変更は無料で承っております。</p>
                    </dd>
                </dl>

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