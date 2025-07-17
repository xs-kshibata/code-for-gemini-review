<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>セキュリティ対策はどうなっていますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ファイアウォールやIDSなどによる監視をはじめとして、外部企業による定期的なソフトウェアなどの脆弱性診断をサーバー・サービスレベルで実施しています。しかし、近年流行しているPHPスクリプトに対する脆弱性攻撃や…">

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
            
                <h3 class="sub-ttl">セキュリティ対策はどうなっていますか？</h3>
                
                <p>ファイアウォールやIDSなどによる監視をはじめとして、外部企業による定期的なソフトウェアなどの脆弱性診断をサーバー・サービスレベルで実施しています。</p>
                <p>しかし、近年流行しているPHPスクリプトに対する脆弱性攻撃や、個別アカウントのウィルス感染などの、ユーザーレベルでの攻撃に対する対策はご自身で対応いただく必要がございます。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>自身で行う対策の一例</dt>
                    <dd>
                        <ul class="ul mb0">
                            <li>ホームページにて運用中のプログラムの最新版への更新</li>
                            <li>利用者の環境におけるセキュリティソフトの更新、定期的なチェック</li>
                            <li>「Adobe Reader」や「Flash Player」のPCインストールプログラムの更新</li>
                            <li>容易に類推できるパスワード文字列の使用停止</li>
                        </ul>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support.php" class="btn btn_gray">「サポートについて」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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