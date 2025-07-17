<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「500 Internal Server Error」というエラーが表示されてホームページが見られません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="プログラム自体へのアクセスは行えているが、実行ができない（処理が完了しない）場合に発生するエラーです。サーバーパネル「ログファイル」よりエラーログをダウンロードし、エラー内容をご確認ください。【考えられる要因】CGIやPHPの…">

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
            
                <h3 class="sub-ttl">「500 Internal Server Error」というエラーが表示されてホームページが見られません。</h3>

                <p>プログラム自体へのアクセスは行えているが、実行ができない（処理が完了しない）場合に発生するエラーです。<br>サーバーパネル「エラーログ」よりエラー内容をご確認ください。</p>
                <p><strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_server_logerror.php">エラーログ</a></p>
                <p><strong>【考えられる要因】</strong></p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>CGIやPHPの同時接続数が多くなり、アカウント単位のリソース制限となっている</dt>
                    <dd>
                        <p>PHPへのアクセスにおいて「500 Internal Server Error」エラーが発生し、エラーログ上に「Resource temporarily unavailable」が表示される場合はこちらに該当します。</p>
                        <p>また、CGIへのアクセスにおいて断続的に「500 Internal Server Error」エラーが発生し、CGIが実行できるときとできないときがある場合もこちらに該当する可能性があります。</p>
                        <p>プログラムへのアクセス集中等により発生しますが、すでに稼働中のプロセスが終了し、リソースに余裕が生じるととともに自動的にエラーは解消されますので、しばらくお待ちのうえ、改めて状況をご確認ください。</p>
                        <p class="mb0">あわせて、CRONで頻繁にコマンドを実行されている場合、実行頻度を調整するなどご検討ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>プログラムの記述内容（CGI/PHPのソースコード）に誤りがある</dt>
                    <dd>
                        <p>CGI、PHPへのアクセスに際して「syntax error」「Call to undefined function ******()」「failed to open stream」などのエラーが発生している場合、ご利用のプログラムにおける記述上のミスや必要ファイルの不足、PHPバージョンの相違等によりエラーが発生している可能性が考えられます。</p>
                        <p class="note mb0">※エックスサーバーではCGI、PHP等のプログラムに関する技術的なサポートはいたしておりませんので、ご了承ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.htaccessの記述に誤りがある</dt>
                    <dd>
                        <p>.htaccessに対するエラーにて「Invalid command '*****'」や「Expected &lt;/IfModule&gt; before end of configuration」などがエラーログにある場合、.htaccessの記述が誤っている可能性が考えられます。</p>
                        <p>また、「php_flag」などのPHPに関する各種設定を.htaccess上に記述した場合もエラーが発生します。PHPの設定は「<a href="../../manual/man_server_phpini_edit.php">php.ini設定</a>」にて行ってください。</p>
                        <p class="note mb0">※エックスサーバーでは.htaccessファイルの記述ルールに関する技術的なサポートはいたしておりませんので、ご了承ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>パーミッションに誤りがある</dt>
                    <dd>
                        <p>CGIのパーミッションが適切に設定されているかご確認ください。<br>
                        <strong class="yellow">関連マニュアル：</strong><a href="../../manual/man_server_permission.php">パーミッション</a></p>
                        <p>また、エックスサーバーではセキュリティ上、ユーザー／グループに書き込み権限のあるパーミッション（777など）ではプログラムは実行できません。</p>
                        <p class="mb0">CGIファイルのパーミッションが 777 の場合や、パーミッションが 777 のフォルダ上にプログラムを設置している場合、エラーが発生しますのでご注意ください。</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_trouble.php" class="btn btn_gray">「Webサイト・WordPressのトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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