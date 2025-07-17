<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>PHPのバージョンについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでご利用可能なPHPのバージョンについてや、管理ツール上からPHPバージョンを切り替える方法についてご案内しています。">

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
            
                <h3 class="sub-ttl">PHPのバージョンについて</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">ご利用いただけるPHPのバージョン</a></li>
                                <li><a href="#link-previous-b">PHPのバージョン切り替え</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「PHP Ver.切替」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.変更後のバージョンを設定</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_php.php">PHPに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">ご利用いただけるPHPのバージョン</h4>
                                <div class="section_body">

                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「XアクセラレータVer.2」をご利用中の場合</h5>
                                        <div class="msg_body">
                                            <p>
                                                「Xアクセラレータ Ver.2」が有効となっている場合、PHPバージョンは「8.3x / 8.2x / 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x」がご利用可能です。<br>
                                                Xアクセラレータの詳細については以下のマニュアルをご参照ください。
                                            </p>
                                            <ul class="list list_arrow-right">
                                                <li><a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a></li>
                                            </ul>
                                        </div>
                                    </aside>


                                    <table class="table mb5">
                                        <thead>
                                        <tr><th style="width:105px;">バージョン</th><th>説明</th></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th>PHP 8.3.x</th>
                                            <td>
                                                <p>
                                                    現在公式にサポートされているバージョンです。<br>
                                                    従来のPHPと比較してパフォーマンスが大幅に強化されています。
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.2.x</th>
                                            <td>
                                                <p>Wordpress推奨バージョンです。</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.1.x</th>
                                            <td rowspan="9">
                                                <p>
                                                    旧バージョンです。<br>
                                                    今後バージョンアップの予定はないため新規での利用は推奨しません。<br>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 8.0.x</th>
                                        </tr>

                                        <tr>
                                            <th>PHP 7.4.x</th>
                                        </tr>

                                        <tr>
                                            <th>PHP 7.3.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.2.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.1.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 7.0.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.6.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.5.x</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.4.x</th>
                                            <td rowspan="3">
                                                <p>
                                                    旧バージョンです。<br>
                                                    OSベンダーによるパッチにて、影響の大きな脆弱性を中心にセキュリティ修正が<br>行われます。<br>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.3.3</th>
                                        </tr>
                                        <tr>
                                            <th>PHP 5.1.6</th>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <ul class="note-list">
                                        <li>
                                            ※いずれのバージョンも「FastCGI」と「キャッシュモジュール(APC/OPcache)」が標準で有効です。<br>
                                            各バージョンにおける設定内容については、マニュアルページ「<a href="man_server_php_rapid.php">PHPの高速化について</a>」をご参照ください。
                                        </li>
                                    </ul>

                                </div>

                            </section>
                            <!-- /.section -->

                            <section id="phpver-change" class="section">
                                <h4 class="section_ttl" style="margin-top:45px;" id="link-previous-b">PHPのバージョン切り替え</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.「PHP Ver.切替」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「PHP Ver.切替」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_php_ver_1.png" alt="PHP ver.切替画面へ"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.変更後のバージョンを設定</h5>
                                            <div class="box_body">
                                                <p>現在のバージョンを確認し、「変更後のバージョン」より変更希望のバージョンを選択ください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_program_php_ver_2.png" alt="サーバーパネルでPHP ver.切り替えをクリック"></p>
                                                <p>選択後、「変更」をクリックしてください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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
                                    <li><a href="#link-a">ご利用いただけるPHPのバージョン</a></li>
                                    <li>
                                        <a href="#link-b">PHPのバージョン切り替え</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「PHP Ver.切替」をクリック</a></li>
                                            <li><a href="#link-b2">2.変更後のバージョンを設定</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_php.php">PHPに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section class="section">
                                        <h4 class="section_ttl" id="link-a">ご利用いただけるPHPのバージョン</h4>
                                        <div class="section_body">

                                            <aside class="msg msg_notice">
                                                <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「XアクセラレータVer.2」をご利用中の場合</h5>
                                                <div class="msg_body">
                                                    <p>
                                                        「Xアクセラレータ Ver.2」が有効となっている場合、PHPバージョンは「8.3x / 8.2x / 8.1.x / 8.0.x / 7.4.x / 7.3.x / 7.2.x」がご利用可能です。<br>
                                                        Xアクセラレータの詳細については以下のマニュアルをご参照ください。
                                                    </p>
                                                    <ul class="list list_arrow-right">
                                                        <li><a href="man_server_xaccelerator.php">Xアクセラレータ(エックスアクセラレータ)</a></li>
                                                    </ul>
                                                </div>
                                            </aside>


                                            <table class="table mb5">
                                                <thead>
                                                <tr><th style="width:105px;">バージョン</th><th>説明</th></tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>PHP 8.3.x</th>
                                                    <td>
                                                        <p>
                                                            現在公式にサポートされているバージョンです。<br>
                                                            従来のPHPと比較してパフォーマンスが大幅に強化されています。
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.2.x</th>
                                                    <td>
                                                        <p>Wordpress推奨バージョンです。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.1.x</th>
                                                    <td rowspan="9">
                                                        <p>
                                                            旧バージョンです。<br>
                                                            今後バージョンアップの予定はないため新規での利用は推奨しません。<br>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 8.0.x</th>
                                                </tr>

                                                <tr>
                                                    <th>PHP 7.4.x</th>
                                                </tr>

                                                <tr>
                                                    <th>PHP 7.3.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.2.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.1.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 7.0.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.6.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.5.x</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.4.x</th>
                                                    <td rowspan="3">
                                                        <p>
                                                            旧バージョンです。<br>
                                                            OSベンダーによるパッチにて、影響の大きな脆弱性を中心にセキュリティ修正が<br>行われます。<br>
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.3.3</th>
                                                </tr>
                                                <tr>
                                                    <th>PHP 5.1.6</th>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <ul class="note-list">
                                                <li>
                                                    ※いずれのバージョンも「FastCGI」と「キャッシュモジュール(APC/OPcache)」が標準で有効です。<br>
                                                    各バージョンにおける設定内容については、マニュアルページ「<a href="man_server_php_rapid.php">PHPの高速化について</a>」をご参照ください。
                                                </li>
                                            </ul>

                                        </div>

                                    </section>
                                    <!-- /.section -->

                                    <section id="phpver-change" class="section">
                                        <h4 class="section_ttl" id="link-b">PHPのバージョン切り替え</h4>
                                        <section class="section">
                                            <div class="section_body">

                                                <div class="serial-box">

                                                    <section class="box">
                                                        <h5 class="box_ttl" id="link-b1">1.「PHP Ver.切替」をクリック</h5>
                                                        <div class="box_body">
                                                            <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「PHP Ver.切替」をクリックしてください。</p>
                                                            <p><img class="img" src="../img/manual/man_program_php_ver_1.png?date=2410" alt="PHPver.切替画面へ"></p>
                                                        </div>
                                                    </section>

                                                    <section class="box">
                                                        <h5 class="box_ttl" id="link-b2">2.変更後のバージョンを設定</h5>
                                                        <div class="box_body">
                                                            <p>変更したいドメインの右側にあるペンアイコンをクリックして編集します。<br>現在のバージョンを確認し、「変更後のバージョン」より変更希望のバージョンを選択ください。</p>
                                                            <p><img class="img" src="../img/manual/man_program_php_ver_2.png?date=2410" alt="サーバーパネルでPHPver.切り替えをクリック"></p>
                                                            <p>選択後、「設定する」をクリックしてください。</p>
                                                        </div>
                                                    </section>

                                                </div>
                                                <!-- /.serial-box -->
                                            </div>
                                        </section>
                                    </section>

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