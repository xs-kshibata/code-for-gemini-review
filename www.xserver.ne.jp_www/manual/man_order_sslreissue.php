<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>オプション独自SSLの再発行 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜オプション独自SSLの再発行手順を記載しています。">

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
            
                <h3 class="sub-ttl">オプション独自SSLの再発行</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">オプション独自SSLの再発行</a>
                        <ol>
                            <li><a href="#link-a01">1.再発行申請を開始</a></li>
                            <li><a href="#link-a02">2.再発行申請を行う</a></li>
                            <li><a href="#link-a03">3.再発行への承認を行う</a></li>
                            <li><a href="#link-a04">4.再発行手続き完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">オプション独自SSLの再発行</h4>
                    <div class="section_body">
                    
                        <p class="mb5">以下いずれかの条件に該当する場合に限り、SSL証明書の再発行を申請することが可能です。</p>
                        <div class="border border_yellow">
                            <ul class="ul">
                                <li>現在ご利用中の証明書における証明書アルゴリズムが「SHA-1」、期限日が「2016年1月1日以降」の場合</li>
                                <li>「ジオトラスト クイックSSLプレミアム」「ラピッドSSL」の証明書を利用し、以下いずれかの期間に該当する場合<br>
                                <ul>
                                    <li>(A) 2016年5月31日以前に発行・再発行され、有効期限が2018年3月15日以降の場合</li>
                                    <li>(B) 2016年6月1日以降かつ2017年12月1日以前に発行・再発行され、有効期限が2018年9月13日以降の場合</li>
                                </ul></li>
                            </ul>
                        </div>
                        
                        <div class="serial-box mb10">
                            <section class="box">
                                <h3 class="box_ttl" id="link-a01">1.再発行申請を開始</h3>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a> &gt; ページ下部の「SSL証明書」より、対象のSSLの「再発行申請」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_sslreissue_1.png?date=20210921" alt="再発行申請を開始します"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h3 class="box_ttl" id="link-a02">2.再発行申請を行う</h3>
                                <div class="box_body">
                                    <p>再発行用の申請情報を表示します。申請内容をご確認の上、「再発行申請を行う」をクリックしてください。</p>
                                    <p class="note">※この画面に表示される「承認用メールアドレス」に「承認メール」が送付されます。</p>
                                    <p><img class="img" src="../img/manual/man_order_sslreissue_2.png?date=20201022" alt="再発行申請完了画面のスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h3 class="box_ttl" id="link-a03">3.再発行への承認を行う</h3>
                                <div class="box_body">
                                    <p>取得申請完了後、SSL証明書の発行元より「承認メール」が送付されます。<br>
                                    受信した承認メール本文内にある承認用URLにアクセスし、承認作業を行ってください。</p>
                                    <p class="note">※承認メールが受信できない場合、メールアドレスを変更したい場合は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a> &gt; ページ下部の「SSL証明書」にある「承認メール再送」ボタンよりお手続きが可能です。</p>
									<p><img class="img" src="../img/manual/man_order_sslreissue_3.png?date=20210921" alt="再発行申請完了画面のスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section id="s10" class="box">
                                <h6 class="box_ttl" id="link-a04">4.再発行手続き完了</h6>
                                <div class="box_body">
                                    <p>お客様での承認作業後、SSL証明書の発行元において審査を行います。<br>
                                    (審査には数日程度お時間要する場合がございます。あらかじめご了承ください。)</p>
                                    <p>SSL証明書の発行元での審査が完了し、SSL証明書が再発行されましたら、当サポートにてサーバーへのインストール作業を行います。<br>
                                    インストール作業の完了次第、お客様のご登録メールアドレス宛にご連絡いたします。</p>
                                </div>
                            </section>
                        </div>
                        
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