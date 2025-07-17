<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>無料お試し期間について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーではサーバーのお申し込みから10日間を「無料お試し期間」としています。利用が制限されている機能もありますが、料金を支払うことなくエックスサーバーを試すことが可能です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">無料お試し期間について</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li>
                        <a href="#link-a">無料お試し期間について</a>
                        <ul>
                            <li><a href="#link-a01">お試し期間中に確認するポイント</a></li>
                            <li><a href="#link-a02">お試し期間中の機能制限について</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#link-b">本契約への移行について</a>
                        
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">無料お試し期間について</h4>
                    <div class="section_body">
                        <p>エックスサーバーではサーバーアカウントお申し込み日から10日間、無料お試し期間を設けています。<br>
                        無料お試し期間を利用し、エックスサーバーを体験してみましょう。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">お試し期間中に確認するポイント</h5>
                            <div class="block_body">
                                <ul class="ul">
                                    <li>「サーバーパネル」などの管理ツールが使いやすいか、各管理ツールにログインして確かめてみる。</li>
                                    <li>WordPressなどのプログラムが簡単に設置できるかや、設置後の動作が満足いくものか、確認してみる。</li>
                                    <li>利用する予定のプログラムが問題なく動作するか、試しに設置してみる。</li>
                                </ul>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">お試し期間中の機能制限について</h5>
                            <div class="block_body">
                                <p>お試し期間中には、以下の機能は利用できません。</p>
                                <ul class="ul">
                                    <li>メールアカウントの作成</li>
                                    <li>その他プログラムを用いたメール送信全般</li>
                                    <li>
                                        サブFTPアカウントの追加
                                        <p class="note mt5 mb0">※サーバー設定完了時に発行された「メインFTPアカウント」のご利用は可能です。<br>
                                        FTP接続は「メインFTPアカウント」で行ってください。</p>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">本契約への移行について</h4>
                    <div class="section_body">
                        <p>お試し期間でエックスサーバーを試し、このまま使い続けても問題ないと思ったら、ご利用料金をお支払いください。</p>
                        <ul class="ul">
                            <li>マニュアル「<a href="man_order_pay_etc.php">料金のお支払い</a>」</li>
                        </ul>
                        <p>お支払いの確認が取れ次第、本契約へと移行します。</p>
                        <p>お試し期間中に設置したプログラムやアップロードしたデータは、本契約への移行後もそのままご利用可能です。</p>                
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>
                
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
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>