<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Whois情報設定手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで管理中のドメイン名について、Whois情報を変更する手順や、Whois代理公開サービスを利用するための手順について記載しています。">

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
            
                <h3 class="sub-ttl">Whois情報設定</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">Whois情報設定</a></li>
                    <li><a href="#link-b">Whois情報編集方法</a>
                        <ul>
                            <li><a href="#link-b01">1.「Whois初期値設定」をクリック</a></li>
                            <li><a href="#link-b02">2.「設定変更」ボタンをクリックする</a></li>
                            <li><a href="#link-b03">3.Whois情報の編集</a></li>
							<li><a href="#link-b04">4.完了</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-c">「Whois代理公開サービス」のご利用方法</a>
                        <ul>
                            <li><a href="#link-c01">1.「Whois初期値設定」をクリック</a></li>
                            <li><a href="#link-c02">2.「有効・無効」の確認</a></li>
                            <li><a href="#link-c03">3.「有効・無効」の切り替え</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-d">「Whois登録者情報非表示設定」のご利用方法</a>
                        <ul>
                            <li><a href="#link-d01">1.「Whois初期値設定」をクリック</a></li>
                            <li><a href="#link-d02">2.「有効・無効」の確認</a></li>
                            <li><a href="#link-d03">2.「有効・無効」の切り替え</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_domain.php">ドメインの移管に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_whois.php">Whoisに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Whois情報設定</h4>
                    <div class="section_body">
                       <p>
                            「Whois初期値設定」では、ドメインの新規取得時や移管完了時のWhois情報の初期値の確認や変更が可能です。Whoisに関する詳細は、マニュアル「<a href="man_domain_about_whois.php">Whoisについて</a>」をご参照ください。
                        </p>
                        <p>取得(登録)が完了したドメイン名のWhois情報を変更する場合、マニュアル「<a href="man_domain_whois.php">Whois情報</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
               <section class="section">
                    <h4 class="section_ttl" id="link-b">Whois情報編集方法</h4>
                    <div class="section_body">
                        
                        <div class="serial-box mb30">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「Whois初期値設定」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「Whois初期値設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_1.png?date=20230130" alt="Whois初期値設定をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「設定変更」ボタンをクリックする</h6>
                                <div class="box_body">
                                    <p>「.JP以外の一般ドメイン名向け」もしくは「汎用JP、都道府県型JP ドメイン名向け」をクリックし、「設定変更」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_2.png?date=20230130" alt="設定変更をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.Whois情報の編集</h6>
                                <div class="box_body">
                                    <p>表示された入力フォームにて編集を行い、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_3.png?date=20230130" alt="確認画面へ進むをクリック"></p>
                                </div>
                            </section>
							
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.完了</h6>
                                <div class="box_body">
                                    <p>確認画面の下部にある「Whois情報（初期値設定）を設定する」ボタンをクリックすることで、Whois情報の変更が完了します。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_4.png?date=20230130" alt="Whois情報（初期値設定）を設定するをクリック"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
                
               <section class="section">
                    <h4 class="section_ttl" id="link-c">「Whois代理公開サービス」のご利用方法</h4>
                    <div class="section_body">
                        
                        <p>Whois情報の代理公開が可能なドメインについて、Whoisで公開される情報を当社(XServer Inc.)名義に設定することができます。</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>Whois情報の代理公開が可能なドメイン一覧</dt>
                            <dd>
                                .com / .net / .org / .biz / .info / .baby / .bar / .black / .blog / .blue / .bz / .cc / .click / .clinic / .college / .company / .design / .earth / .email / .fun / .gift / .group / .help / .host / .ink / .life / .link / .live / .lol / .me / .mobi / .moe / .mom / .monster / .news / .online / .osaka / .photo / .pics / .pink / .press / .red / .rent / .rest / .salon / .sexy / .site / .space / .store / .style / .tech / .tv / .website / .wiki / .works / .world / .ws / .xyz / .jp(※) / .都道府県.jp(※) ドメイン<br>
                                <p class="note">(※).jp / .都道府県.jp ドメインは、公開連絡窓口情報のみ対応</p>
                            </dd>
                        </dl>
                        
                        <div class="serial-box mb30">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「Whois初期値設定」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「Whois初期値設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_1.png?date=20230130" alt="Whois初期値設定をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.「有効・無効」の確認</h6>
                                <div class="box_body">
                                    <p>「.JP以外の一般ドメイン名向け」を表示し、Whois代理公開設定が「<strong>弊社(XServer Inc.)名義で代理公開する</strong>」になっている場合は、代理公開サービスをご利用いただいている状態です。<br>Whois登録者情報非表示設定の右端にある「設定変更」ボタンより、有効・無効を切り替えることができます。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_6.png?date=20230130" alt="設定変更をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.「有効・無効」の切り替え</h6>
                                <div class="box_body">
                                    <p>「設定する」をクリックすると、Whois代理公開設定の切り替えが完了します。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_7.png?date=20230130" alt="有効・無効を選択"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
                
                
               <section class="section">
                    <h4 class="section_ttl" id="link-d">「Whois登録者情報非表示設定」のご利用方法</h4>
                    <div class="section_body">
                        
                        <p>.jp / .都道府県.jp ドメインについて、Whoisで公開される登録者名を非表示にすることができます。<br>登録者名以外の登録者情報は、本設定の状態を問わずWhoisでは非公開になります。</p>
                        
                        <div class="serial-box mb30">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-d01">1.「Whois初期値設定」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「Whois初期値設定」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_1.png?date=20230130" alt="Whois初期値設定をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-d02">2.「有効・無効」の確認</h6>
                                <div class="box_body">
                                    <p>「汎用JP、都道府県型JP ドメイン名向け」を表示し、Whois登録者情報非表示設定が「<strong>有効（登録者名を表示しない）</strong>」になっている場合は、Whoisでの登録者名が非表示になっている状態です。<br>Whois登録者情報非表示設定の右端にある「設定変更」ボタンより、有効・無効を切り替えることができます。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_8.png?date=20230130" alt="設定変更をクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-d03">3.「有効・無効」の切り替え</h6>
                                <div class="box_body">
									<p>「設定する」をクリックすると、Whois登録者情報非表示設定の切り替えが完了します。</p>
                                    <p><img class="img" src="../img/manual/man_order_setting_whois_9.png?date=20230130" alt="Whois登録者情報非表示設定の切り替えが完了"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
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