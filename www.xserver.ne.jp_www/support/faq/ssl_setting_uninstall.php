<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>インストール済みの独自SSLを削除(アンインストール)することはできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、可能です。ご利用の独自SSLにより手順は異なります。　・無料独自SSLの場合…サーバーパネル内「SSL設定」にて、設定済みの無料独自SSLの「削除」ボタンから削除(アンインストール)することができます。　・オプション独自SSLの場合…">

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
            
                <h3 class="sub-ttl">インストール済みの独自SSLを削除(アンインストール)することはできますか？</h3>
                

                <p>はい、可能です。<br>ご利用の独自SSLにより手順は異なります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>無料独自SSLの場合</dt>
                    <dd><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内「SSL設定」にて、設定済みの無料独自SSLの「削除」ボタンから削除(アンインストール)することができます。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>オプション独自SSLの場合</dt>
                    <dd>
                    	<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、エックスサーバー契約管理ページのトップページより、対象のSSL証明書の縦三点リーダーメニュー内「契約情報」より削除(アンインストール)が可能です。</p>
						<p><img class="img" src="../../img/faq/faq_service_ssl_setting.png?date=230331" alt="契約情報をクリックしているスクリーンショット"></p>
                        <p class="note">※オプション独自SSLを「独自IPアドレスあり」でご利用の場合は、SSL証明書のアンインストールを行う前に、コモンネームに該当するホスト名のDNSレコード情報を、お客様がご利用のサーバーのIPアドレスに変更する必要があります。<br>
                        DNSレコード情報の変更手順は、マニュアル「<a href="../../manual/man_domain_dns_setting.php">DNSレコードの編集</a>」をご参照ください。</p>
                        <p class="note">※利用期限内のSSL証明書は、同一XServerアカウント内、エックスサーバー契約管理ページの他のサーバーアカウントにインストールを行い、引き続き利用することができます。<br>
                        詳細は、よくある質問「<a href="./ssl_setting_otherserver.php">オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？</a>」をご参照ください。</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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