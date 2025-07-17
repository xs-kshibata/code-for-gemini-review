<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>現在のMySQLデータベースをダウンロード | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜MySQLデータベースについて手動でバックアップを取る手順について案内しています。">

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
            
                <h3 class="sub-ttl">現在のMySQLをダウンロード</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">現在のMySQLデータベースをダウンロード</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">1.「ダウンロード実行」をクリック</a></li>
                                        <li><a href="#link-previous-a02">2.バックアップの開始</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">現在のMySQLデータベースをダウンロード</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「MySQLバックアップ」より、簡単に現在のMySQLデータベースの手動バックアップを行うことができます。</p>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a01">1.「ダウンロード実行」をクリック</h5>
                                            <div class="box_body">
                                                <p>「現在のMySQLをダウンロード」をクリックします。作成したデータベースの中から、バックアップを行いたいデータベースの圧縮形式(圧縮しない/gz形式)を選択し、「ダウンロード実行」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_man_backup_1.png" alt="ダウンロード実行にフォーカスしたスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-a02">2.バックアップの開始</h5>
                                            <div class="box_body">
                                                <p>バックアップが自動的に開始され、ダウンロードできます。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_man_backup_2.png" alt="ダウンロードボタンをクリック"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /serial-box -->

                                    <p>
                                        なお、データベース1個の容量が目安値（MySQLバージョンにかかわらず5GB）を超えている場合、ダウンロードできません。<br>
                                        また、データベースの使用容量が目安値より下回っていても、多量のレコードが存在する場合は、ダウンロードに失敗する場合があります。
                                    </p>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">現在のMySQLデータベースをダウンロード</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「ダウンロードする」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">現在のMySQLデータベースをダウンロード</h4>
                                <div class="section_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>内の「MySQLバックアップ」より、簡単に現在のデータベースの手動バックアップを行うことができます。</p>

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a1">1.「ダウンロードする」をクリック</h5>
                                            <div class="box_body">
                                                <p>「手動バックアップ」をクリックします。作成したデータベースの中から、バックアップを行いたいデータベースの圧縮形式(圧縮しない/gz形式)を選択し、「ダウンロードする」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_db_man_backup_1.png?date=2410" alt="「ダウンロードする」をクリック"></p>
                                                <p>以上でデータベースダウンロードの手続きは完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg msg_caution">
                                        <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h4>
                                        <div class="msg_body">
                                            <p>データベース1個の容量が目安値（MySQLバージョンにかかわらず5GB）を超えている場合、ダウンロードできません。<br>
                                                また、データベースの使用容量が目安値より下回っていても、多量のレコードが存在する場合は、ダウンロードに失敗する場合があります。</p>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル -->

                    </div>
                </div>


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