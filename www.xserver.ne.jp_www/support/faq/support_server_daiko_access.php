<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転作業において、移転元サーバーへのアクセス方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバー移転作業において、弊社エンジニアスタッフによる移転元サーバーへのアクセスには、Web（HTTP/HTTPS）とFTP/FTPSを用います。 アクセス元は、いずれのアクセス方法においても原則としてご利用サーバー（sv*.xserver.jp）に…">

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
            
                <h3 class="sub-ttl">サーバー移転作業において、移転元サーバーへのアクセス方法を教えてください。</h3>
                
                <p>サーバー移転作業において、弊社エンジニアスタッフによる移転元サーバーへのアクセスには、Web（HTTP/HTTPS）とFTP/FTPSを用います。
                    アクセス元は、いずれのアクセス方法においても原則としてご利用サーバー（sv*.xserver.jp）になります。</p>
                <p>アクセス元のホスト名やIPアドレスは、サーバーパネル内の「サーバー情報」で確認することができます。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support_server_daiko.php" class="btn btn_gray">「サーバー移転代行について」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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