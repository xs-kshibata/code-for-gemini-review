<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="同一のXServerアカウントでご契約のサーバーアカウントの場合は、SSL証明書を引き続き利用することは可能です。移行元サーバーから独自SSLの削除(アンインストール)と、ドメイン設定を削除した後に、 移行先サーバーに対象ドメインの設定追加を…">

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
            
                <h3 class="sub-ttl">オプション独自SSLで発行したSSL証明書を他のサーバーアカウントで利用することはできますか？</h3>
                
                <p>同一のXServerアカウントでご契約のサーバーアカウントの場合は、SSL証明書を引き続き利用することは可能です。</p>
                            
                <p>移行元サーバーから独自SSLの削除(アンインストール)と、ドメイン設定を削除した後に、
                移行先サーバーに対象ドメインの設定追加を行っていただいた後に、サポートにてインストール作業をいたします。</p>
                
                <p>なお、移行元のサーバーアカウントから独自SSLを削除する手順は、
                よくある質問「<a href="./ssl_setting_uninstall.php">インストール済みの独自SSLを削除(アンインストール)することはできますか？</a>」をご参照ください。</p>
                
                <p>また、移行先サーバーへのインストールは、SSL証明書のコモンネームに該当するドメインの設定追加を行った後に、 インストールを希望する「サーバーID」とSSL証明書の「コモンネーム」とともに、サポートへSSL証明書のインストールを希望する旨をご連絡ください。<br>
                ご連絡の内容に基づき、サポートにてSSL証明書のインストール作業をいたします。</p>
                
                <p class="note">※移行元サーバーからSSL証明書を削除する際に申請したオプションSSL証明書の解約キャンセル(取り消し)も、サポートにて承っております。移行先サーバーへのインストールを希望するご連絡の際に、併せてお知らせください。</p>
                <p class="note">※サポートでのインストール作業完了までには、最大48時間程度を要する可能性があります。<br>
                作業完了までの間は、無料独自SSLの利用をご検討ください。<br>
                詳細は、マニュアル「<a href="../../manual/man_server_ssl.php">無料独自SSL設定</a>」をご参照ください。</p>
                            
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