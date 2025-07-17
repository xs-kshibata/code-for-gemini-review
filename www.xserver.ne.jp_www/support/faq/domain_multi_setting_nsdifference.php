<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバーパネルにドメイン設定をしましたが、「NS相違」と表示されています。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「NS相違」の表示は、ドメイン設定をしたドメインのネームサーバーが、当サービス所定のネームサーバーとは異なる場合に表示されます。サーバー移転などで、設定時に他社ネームサーバーを参照している場合は「NS相違」と表示されますが...">

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
            
                <h3 class="sub-ttl">サーバーパネルにドメイン設定をしましたが、「NS相違」と表示されています。</h3>
                
                <p>「NS相違」の表示は、ドメイン設定をしたドメインのネームサーバーが、エックスサーバーのネームサーバーとは異なる場合に表示されます。</p>
　　　　　　　　　<dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>最終的にエックスサーバーのネームサーバーに変更する場合</dt>
                 <p>ドメイン設定時点で「NS相違」と表示されていても問題ありません。</p>
                 <p>ネームサーバー変更後、ネームサーバーが浸透すれば「NS相違」の表示は消えます。</p>
                 </dl>
                <dl class="dl">
                 <dt><i class="ico ico_square-fill"></i>他社ネームサーバーを利用される場合</dt>
                 <p>「NS相違」と表示された状態で問題ありません。</p>
                </dl>
                <p><strong class="yellow">参考：</strong><a href="../../manual/man_domain_namesever_setting.php#link-a">ネームサーバーについて</a></p>
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