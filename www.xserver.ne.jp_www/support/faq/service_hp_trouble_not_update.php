<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「このWEBスペースへは、まだホームページがアップロードされていません。」というエラーが表示されます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="弊社の初期生成の画面が表示されている状態です。下記項目をご確認ください。　【考えられる要因】・対象ドメインのフォルダ内[ public_html ]にアップロードが完了していない　・トップページのデータはindexというファイル名でアップロード…">

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
            
                <h3 class="sub-ttl">「このWEBスペースへは、まだホームページがアップロードされていません。」というエラーが表示されます。</h3>

                <p>弊社の初期生成の画面が表示されている状態です。下記項目をご確認ください。</p>
                <p><strong>【考えられる要因】</strong></p>
                <ul class="list list_arrow-right">
                    <li>対象ドメインのフォルダ内[ public_html ]にアップロードが完了していない</li>
                    <li>トップページのデータはindexというファイル名でアップロードされていない</li>
                    <li>[ public_html ] フォルダ内にindexファイルが複数存在している</li>
                </ul>
                <p class="note"> ※htmlファイルが優先表示される仕様のため、phpファイルなどその他拡張子のファイルをアップロードされた場合は、index.htmlを削除してください。</p>
                <p>上記をご確認いただき、問題が改善しない場合は、ブラウザ側のキャッシュを削除した上で、再度アクセスをお試しください。</p>

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