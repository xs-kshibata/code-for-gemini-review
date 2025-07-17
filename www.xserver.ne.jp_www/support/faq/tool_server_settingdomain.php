<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>設定対象ドメインとは何ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーパネル上の各機能において設定対象となるドメインのことです。設定対象ドメインは、ドメイン別に設定を行うようなメニューへとアクセスした際、表示されるドメインの一覧から選択します。異なるメニューへアクセスすると…">

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
            
                <h3 class="sub-ttl">設定対象ドメインとは何ですか？</h3>
                
                <p>サーバーパネル上の各機能において設定対象となるドメインのことです。</p>
                <p>設定対象ドメインは、ドメイン別に設定を行うようなメニューへとアクセスした際、表示されるドメインの一覧から選択します。<br>
                異なるメニューへアクセスすると、設定対象ドメインはリセットされますので、メニューへアクセスする毎に設定を行うドメインを選択してください。</p>
                <p>また、オプション機能として、「設定対象ドメイン」を1つのドメインに固定する機能もあります。<br>
                この機能を利用することで、メニューアクセス時のドメインの一覧画面は表示されなくなり、スムーズなアクセスが可能となりますので、1つのドメインで複数の機能をご利用の場合などに便利です。</p>
                <p>設定対象ドメインを固定する場合、サーバーパネルトップ画面に表示されているセレクトボックスより設定を行うことが可能です。<br>
                なお、別のドメインで設定を行う場合など、設定を解除したい場合は、パネル右上に表示される「クリア」ボタンを押してください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_tool_server.php" class="btn btn_gray">「サーバーパネル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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