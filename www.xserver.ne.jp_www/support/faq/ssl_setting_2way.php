<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>オプション独自SSLを契約したいが、コモンネームをwwwあり・なしどちらでも利用したい。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーで発行するオプション独自SSLのSSLサーバー証明書は、コモンネームを「www.ドメイン名」とする場合に限り、 ドメイン(FQDN)のURLに加え、「wwwなし」URLであってもSSL通信が行えます。">

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
            
                <h3 class="sub-ttl">オプション独自SSLを契約したいが、コモンネームをwwwあり・なしどちらでも利用したい。</h3>
                
                <p>エックスサーバーで発行するオプション独自SSLのSSLサーバー証明書は、コモンネームを「www.ドメイン名」とする場合に限り、
                ドメイン(FQDN)のURLに加え、「wwwなし」URLであってもSSL通信が行えます。</p>
                <table class="table primary-table-ml">
                    <thead>
                        <tr class="head">
                            <th></th>
                            <th>「www.example.com」<br>でお申し込みの場合</th>
                            <th>「example.com」<br>でお申し込みの場合</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>https://www.example.com での接続</th>
                            <td>○</td>
                            <td>×</td>
                        </tr>
                        <tr>
                            <th>https://example.com での接続</th>
                            <td>○</td>
                            <td>○</td>
                        </tr>
                    </tbody>
                </table>
                <p class="note mb0">※独自IPアドレスで「2Way対応」をご利用の場合は、サーバーパネル上のDNSレコード設定より、SSL用のIPアドレスを設定していただく必要があります。</p>
                <p class="note">※一部のSSL証明書ブランドにてご利用可能なWebサイト上へのサイトシールの表示は、コモンネームに指定したドメイン(FQDN)のURLのみに限ります。</p>                
                <p>詳細は <a href="../../manual/man_order_ssl.php#link-d">マニュアル ＞ オプション独自SSLのお申し込み ＞ SSL証明書の「2Way利用」について</a> をご覧ください。</p>

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