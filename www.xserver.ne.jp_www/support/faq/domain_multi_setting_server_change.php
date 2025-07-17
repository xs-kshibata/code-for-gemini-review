<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>異なるサーバーIDへドメイン運用サーバーを変更したいです。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは仕様上、すでにいずれかのサーバーIDで運用中のドメイン名を他のサーバーIDに重複して設定することができません。そのため、エックスサーバー間でドメイン運用サーバー（サーバーID）を変更する場合…">

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
            
                <h3 class="sub-ttl">異なるサーバーIDへドメイン運用サーバーを変更したいです。</h3>
                
                <p>エックスサーバーでは仕様上、すでにいずれかのサーバーIDで運用中のドメイン名を他のサーバーIDに重複して設定することができません。</p>
                <p>そのため、エックスサーバー間でドメイン運用サーバー（サーバーID）を変更する場合、現在該当ドメイン名を運用中のサーバーID（以下「移行元サーバー」と呼びます）からドメイン設定をいったん削除し、改めて移動先のサーバーID（以下「移行先サーバー」と呼びます）でドメイン設定を追加する必要があります。</p>
                <div class="border border_gray">
                    <ol class="ol">
                        <li class="mb10">
                            <p class="mb5">FTPソフト等を利用し、移行元サーバー側でホームページデータをバックアップしてください。<br>
                            また、該当ドメイン名で作成したメールアドレスなどの各種設定をメモに控え、POP3接続でメールをお手元に受信するなどの事前準備を行ってください。</p>
                            <p class="note mb0">※該当ドメイン名でPHPプログラムを利用されている場合、「PHPバージョン」や「php.iniの設定内容」などを控えておくことをお勧めします。</p>
                            <p class="note">※データベースをご利用の場合、<a href="../../manual/man_db_man_backup.php">現在のMySQLをダウンロード</a>よりデータベースをバックアップしてください。</p>
                        </li>
                        <li class="mb10">移行元サーバーのサーバーパネルにログインし、「ドメイン設定」メニューより、移行をご希望のドメイン設定を削除してください。
                        </li>
                        <li class="mb10">移行先サーバーのサーバーパネルにログインし、「ドメイン設定」メニューより、移行をご希望のドメイン設定を追加してください。
                        </li>
                        <li>
                            <p>「3」の作業により、移行先サーバー側で、該当ドメイン名を運用するための各種設定やフォルダが作成されます。</p>
                            <ul class="list list_arrow-right">
                                <li>FTPソフトを用いたホームページデータのアップロード</li>
                                <li>メールアカウントの再作成</li>
                            </ul>
                            <p class="mb0">など、ホームページ再開のための作業をおこなってください。<br>
                            ※CGIをご利用の場合、パーミッションにご注意ください。</p>
                        </li>
                    </ol>
                </div>
                <p>なお、ドメイン設定先サーバーの変更はDNSレコード情報の変更が伴うことから、移行元サーバーからのドメイン設定を削除後、移行先サーバーへのドメイン設定を追加し、設定が反映するまでの数時間から最大24時間において、ホームページやメールを利用することができません。</p>
                
                <p>また、移行元サーバーでオプション独自SSLを使用(インストール)している場合は、よくある質問「<a href="./ssl_setting_otherserver.php">オプション独自SSLを他のサーバーアカウントで利用することはできますか？</a>」も併せてご参照ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_multi_setting.php" class="btn btn_gray">「ドメイン設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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