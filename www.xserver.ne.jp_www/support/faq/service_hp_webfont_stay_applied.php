<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>Webフォントの設定を解除したのですが適用されたままです。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ご利用状況に合わせて、下記をご参照ください。　WordPressプラグインでご利用の場合…プラグイン「TypeSquare Webfonts for エックスサーバー」が有効な状態になっている可能性があります。プラグインを無効にした後…">

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
            
                <h3 class="sub-ttl">Webフォントの設定を解除したのですが適用されたままです。</h3>

                <p>ご利用状況に合わせて、下記をご参照ください。</p>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>WordPressプラグインでご利用の場合</dt>
                    <dd>
                        <p>プラグイン「TypeSquare Webfonts for エックスサーバー」が有効な状態になっている可能性があります。<br>
                        プラグインを無効にした後、Webフォントの適用が外れているか確認してください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>HTML記述形式でご利用の場合</dt>
                    <dd>
                        <p class="mb5">Webフォントを設定していたサイトのコード内に下記のJavaScriptファイルが読み込まれたままになっている可能性があります。</p>
                        <pre class="code">&lt;script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"&gt;&lt;/script&gt;</pre>
                        <p class="mb0">上記のJavaScriptファイルの記述を削除した後、Webフォントの適用が外れているか確認してください。</p>
                    </dd>
                </dl>

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