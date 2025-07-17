<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>.htmlや.htmでPHPを動作させたいのですが、どうすればいいでしょうか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content=".htaccessに以下の記述を追加していただくことで、.htmおよび.htmlにてPHPが動作します。AddHandler fcgid-script .htm .htmlご注意ください.htaccessには、本サーバーパネルで…">

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
            
                <h3 class="sub-ttl">.htmlや.htmでPHPを動作させたいのですが、どうすればいいでしょうか？</h3>

                <p>.htaccessに以下の記述を追加していただくことで、.htmおよび.htmlにてPHPが動作します。</p>

                <pre class="code">AddHandler fcgid-script .htm .html</pre>

                <aside class="msg msg_caution">
                    <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                    <div class="msg_body">
                        <p>.htaccessには、本サーバーパネルで提供している一部機能の設定に関する記述や、WordPressなどのプログラムによる記述が自動的に行われている場合があります。<br>
                            心当たりがない記述であっても不用意に削除なされないようにご注意ください。<br>
                            また、編集後はWebサイトが正常に表示されるかを必ずご確認ください。</p>
                    </div>
                </aside>

                <p>上記対応により解決しない場合、メールサポートへとご相談ください。</p>
                
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_service_php.php" class="btn btn_gray">「PHP」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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