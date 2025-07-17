<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>php.ini設定について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜PHPプログラムの設定ファイルである「php.ini」をサーバーパネル上で簡単に編集できる「php.ini設定」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">php.ini設定について</h3>


                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">php.iniとは</a></li>
                                    <li><a href="#link-previous-b">php.ini設定</a>
                                        <ul>
                                            <li><a href="#link-previous-b01">php.ini設定変更</a></li>
                                            <li><a href="#link-previous-b02">php.ini直接編集</a></li>
                                            <li><a href="#link-previous-b03">php.ini設定初期化</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">php.iniとは</h4>
                                <div class="section_body">
                                    <p>
                                        php.iniとは、PHPプログラムの全体的な動作や環境を設定するファイルのことです。<br>
                                        PHPの設定変更が必要な場合や、文字化けするプログラムの文字コード設定を変更したい場合などには、php.iniファイルの変更が必要です。
                                    </p>
                                    <p>
                                        「php.ini設定」は、ドメインごとにphp.iniファイルの設置と編集が可能なサーバーパネル上の機能です。<br>
                                        本機能で設定可能なphp.ini設定については、<a href="man_server_phpini_setting_item.php">php.ini設定で設定可能な項目</a>をご確認ください。
                                    </p>
                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「Xアクセラレータ Ver.2」をご利用中の場合</h6>
                                        <div class="msg_body">
                                            <p>
                                                「Xアクセラレータ Ver.2」利用時、php.ini設定の一部項目が無効となります。<br>
                                                詳細は以下のマニュアルをご確認ください。
                                            </p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">php.ini設定</h4>
                                <div class="section_body">


                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「php.ini設定」をクリックしてください。</p>

                                    <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_1.png" alt="設定対象ドメインを確認して、「php.ini設定」をクリック！"></p>

                                    <p class="mb40">
                                        なお、本機能で設定しているphp.ini設定が優先して適用されます。<br>
                                        php.ini設定を直接編集されたい場合も、php.ini直接編集より編集してください。
                                    </p>
                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b01">php.ini設定変更</h5>
                                        <div class="block_body">
                                            <p>各種設定項目について、設定値の変更が行えます。<br>
                                            設定変更が可能な項目については、<a href="man_server_phpini_setting_item.php">php.ini設定で設定可能な項目</a>をご参照ください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_3.png" alt="php.ini設定変更のスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b02">php.ini直接編集</h5>
                                        <div class="block_body">
                                            <p>お客様で直接php.iniファイルを編集することが可能です。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_4.png" alt="php.ini直接編集のスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b03">php.ini設定初期化</h5>
                                        <div class="block_body">
                                            <p>php.iniの設定を初期値に戻すことが可能です。</p>
                                            <p><img class="img" src="../img/manual/previous/man_server_phpini_edit_5.png" alt="php.ini設定初期化のスクリーンショット"></p>
                                        </div>
                                    </section>

                                    <aside class="msg">
                                        <h6 class="msg_ttl"><i class="ico ico_circle"></i>現在のPHPの設定値確認方法</h6>
                                        <div class="msg_body">
                                            <p>下記のようなPHPファイルを作成し、サーバーにアップロードしてご確認ください。</p>
                                            <pre class="code">
&lt;?php
phpinfo();
?&gt;</pre>
                                            <p class="note">※PHP設定値確認後は作成したphpファイルは削除してください。</p>
                                        </div>
                                    </aside>

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
                                    <li><a href="#link-a">php.iniとは</a></li>
                                    <li><a href="#link-b">php.ini設定</a>
                                        <ul>
                                            <li><a href="#link-b01">php.ini設定変更</a></li>
                                            <li><a href="#link-b02">php.ini直接編集</a></li>
                                            <li><a href="#link-b03">php.ini設定初期化</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">php.iniとは</h4>
                                        <div class="section_body">
                                            <p>
                                                php.iniとは、PHPプログラムの全体的な動作や環境を設定するファイルのことです。<br>
                                                PHPの設定変更が必要な場合や、文字化けするプログラムの文字コード設定を変更したい場合などには、php.iniファイルの変更が必要です。
                                            </p>
                                            <p>「php.ini設定」は、ドメインごとにphp.iniファイルの設置と編集が可能なサーバーパネル上の機能です。<br>
                                                本機能で設定可能なphp.ini設定については、<a href="man_server_phpini_setting_item.php">php.ini設定で設定可能な項目</a>をご確認ください。
                                            </p>

                                            <aside class="msg msg_notice">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「Xアクセラレータ Ver.2」をご利用中の場合</h4>
                                                <div class="msg_body">
                                                    <p>
                                                        「Xアクセラレータ Ver.2」利用時、php.ini設定の一部項目が無効となります。<br>
                                                        詳細は以下のマニュアルをご確認ください。
                                                    </p>
                                                    <ul class="list list_arrow-right">
                                                        <li><a href="man_server_phpini_setting_ignore_item.php">XアクセラレータVer.2利用時に無効となるphp.ini設定について</a></li>
                                                    </ul>
                                                </div>
                                            </aside>

                                        </div>
                                    </section>

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-b">php.ini設定</h4>
                                        <div class="section_body">

                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「php.ini設定」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_server_phpini_edit_1.png?date=2410" alt="「php.ini設定」をクリック"></p>

                                            <p class="mb40">
                                                なお、本機能で設定しているphp.ini設定が優先して適用されます。<br>
                                                php.ini設定を直接編集されたい場合は「php.ini直接編集」メニューより編集してください。
                                            </p>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b01">php.ini設定変更</h5>
                                                <div class="block_body">
                                                    <p>
                                                        各種設定項目について、設定値の変更が行えます。<br>
                                                        設定変更が可能な項目については、<a href="man_server_phpini_setting_item.php">php.ini設定で設定可能な項目</a>をご参照ください。
                                                    </p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_3.png?date=2410" alt="php.ini設定変更のスクリーンショット"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b02">php.ini直接編集</h5>
                                                <div class="block_body">
                                                    <p>お客様で直接php.iniファイルを編集することが可能です。</p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_4.png?date=2410" alt="php.ini直接編集のスクリーンショット"></p>
                                                </div>
                                            </section>

                                            <section class="block">
                                                <h5 class="block_ttl" id="link-b03">php.ini設定初期化</h5>
                                                <div class="block_body">
                                                    <p>php.iniの設定を初期値に戻すことが可能です。</p>
                                                    <p><img class="img" src="../img/manual/man_server_phpini_edit_5.png?date=2410" alt="php.ini設定初期化のスクリーンショット"></p>
                                                </div>
                                            </section>

                                            <div class="msg">
                                                <h5 class="msg_ttl + div.msg_body"><i class="ico ico--circle" aria-hidden="true"></i>現在のPHPの設定値確認方法</h5>
                                                <div class="msg_body">
                                                    <p>下記のようなPHPファイルを作成し、サーバーにアップロードしてご確認ください。</p>
                                                    <pre class="code">&lt;?php
phpinfo();
?&gt;</pre>
                                                    <p class="note">※PHP設定値確認後は作成したphpファイルは削除してください。</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

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