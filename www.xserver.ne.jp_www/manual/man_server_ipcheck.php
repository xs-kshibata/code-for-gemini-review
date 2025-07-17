<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アクセス拒否設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜指定したIPアドレス、ホスト名からのアクセスを拒否できる「アクセス拒否設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">アクセス拒否設定</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">アクセス拒否設定</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「アクセス拒否設定」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.アクセス拒否IPアドレスの追加</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>
                
                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">アクセス拒否設定</h4>
                                <div class="section_body">

                                    <p>指定したIPアドレスからのアクセスを拒否することができます。</p>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「アクセス拒否設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス拒否設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ipcheck_1.png" alt="アクセス拒否設定画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.アクセス拒否IPアドレスの追加</h6>
                                            <div class="box_body">
                                                <p>「アクセス拒否IP追加」をクリックします。<br>
                                                拒否IPアドレス欄にIPアドレスを入力し、「確認画面へ進む」をクリックします。</p>
                                                <p>内容を確認し、問題がなければ「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_ipcheck_2.png" alt="アクセス拒否IPアドレスの追加のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">アクセス拒否設定</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「アクセス拒否設定」をクリック</a></li>
                                            <li><a href="#link-a02">2.アクセス拒否IPアドレスの追加</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">アクセス拒否設定</h4>
                                <div class="section_body">
                                    <p>指定したIPアドレスからのアクセスを拒否することができます。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a01">1.「アクセス拒否設定」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス拒否設定」をクリックしてください。</p>
                                                <p><img alt="アクセス拒否設定画面へ" class="img" src="../img/manual/man_server_ipcheck_1.png?date=2410"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2. アクセス拒否IPアドレスの追加</h5>
                                            <div class="box_body">
                                                <p>「アクセス拒否IPを追加」をクリックします。<br>
                                                    拒否IPアドレス欄にIPアドレスを入力し、「追加する」をクリックします。</p>
                                                <p><img alt="アクセス拒否IPアドレスの追加のスクリーンショット" class="img" src="../img/manual/man_server_ipcheck_2.png?date=2410"></p>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section><!-- /.section -->

                        </div>
                        <!-- /新パネル-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->

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