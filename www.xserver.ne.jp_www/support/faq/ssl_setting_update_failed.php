<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>無料独自SSLの自動更新が失敗し、手動更新もできません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="無料独自SSLの手動更新ができない場合は、以下をご確認ください。…">

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
            
                <h3 class="sub-ttl">無料独自SSLの自動更新が失敗し、手動更新もできません。</h3>
                
                <p>無料独自SSLの更新ができない場合は、以下をご確認ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ネームサーバー設定などDNSの確認</dt>
                    <dd>
                        <p class="mb0">対象ドメインのネームサーバー、または「wwwあり/なし」両方のAレコードが当サービスのご契約サーバーを参照しているかをご確認ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>アクセス制限設定の確認</dt>
                    <dd>
                        <p class="mb0">サーバーパネル内で「アクセス制限」が有効になっていないかをご確認ください。<br>
                            アクセス制限がかかっている場合は、一時的に解除したうえで更新をお試しください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>リダイレクト設定の確認</dt>
                    <dd>
                        <p class="mb0">サーバーパネルの「サイト転送設定」が設定されていないか、.htaccessファイルにてリダイレクト設定がされていないかをご確認ください。<br>
                            設定されている場合は、一時的に解除をしたうえで更新をお試しください。</p>
                    </dd>
                </dl>
                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_server_ssl.php">無料独自SSL</a></p>

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