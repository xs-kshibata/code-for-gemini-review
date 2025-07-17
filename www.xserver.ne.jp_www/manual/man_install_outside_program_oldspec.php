<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>動作確認済みプログラム(移行メンテナンス前) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで動作の確認が取れたプロブラムやエックスサーバーでは動作しないプログラムについて記載しています。sv1999以前でサーバー環境の移行メンテナンスが完了していない方はこちらをご参照ください。">

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
            
                <h3 class="sub-ttl">動作確認済みプログラム(移行メンテナンス前)</h3>
 
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">主要な外部プログラムリスト</a>
                        <ul>
                            <li><a href="#link-a01">動作確認済みプログラム</a></li>
                        </ul>
                    </li>
                </ul>
                </div>              
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">主要な外部プログラムリスト</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">動作確認済みプログラム</h5>
                            <div class="block_body">
                                <p><span class="sticker"><span class="label label_sticker">簡単インストール</span></span>が表示されているプログラムは、<a href="man_install_auto.php">簡単インストール機能</a>にて簡単に導入いただけます。</p>
                                <p>また、簡単インストール機能を用意していない一部のプログラムでは、手動インストールのマニュアルをご用意しております。</p>
                                


                                <table class="table table_striped mb5">
                                    <thead>
                                        <tr>
                                            <th class="w40per">プログラム名</th>
                                            <th>備考</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>WordPress 日本語版 (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <a class="sticker" href="../manual/man_install_auto_word.php"><span class="label label_sticker">簡単インストール</span></a><br>
                                                バージョン5.3系
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>EC-CUBE (ショッピングカート)</th>
                                            <td class="tac">
                                                ○<br>
                                                バージョン3.0.18
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>PukiWiki (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <a class="sticker" href="../manual/man_install_auto_puki.php"><span class="label label_sticker">簡単インストール</span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>XOOPS Cube Legacy (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <a class="sticker" href="../manual/man_install_auto_xoops.php"><span class="label label_sticker">簡単インストール</span></a><br>
                                                PHP5.3
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>concrete5 (CMS)</th>
                                            <td class="tac">○</td>
                                        </tr>
                                        <tr>
                                            <th>Joomla (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                本家＋じゃぱん仕様
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>MODX 日本語版 (CMS)</th>
                                            <td class="tac">○</td>
                                        </tr>
                                        <tr>
                                            <th>Movable Type (CMS)</th>
                                            <td class="tac">○</td>
                                        </tr>
                                        <tr>
                                            <th>Drupal (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                バージョン7.50
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Magento (ショッピングカート)</th>
                                            <td class="tac" >×</td>
                                        </tr>
                                        <tr>
                                            <th>osCommerce 日本語版 (ショッピングカート)</th>
                                            <td class="tac">
                                                ○<br>
                                                バージョン2.2 MS1 (PHP4.3)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Zen Cart 日本語版 (ショッピングカート)</th>
                                            <td class="tac">○</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="tar">（2019年11月19日最終更新）</p>
                                <ul class="note-list note-list_margin">
                                    <li>※サーバー番号の確認方法は<a href="../support/faq/service_server_number.php">こちら</a>をご参照ください。</li>
                                    <li>※特に補足がない場合は、最終更新時点の最新バージョンおよび <b>PHP5.6、MySQL5.7またはMySQL5.5</b> のいずれにおいても動作することを確認しております。</li>
                                    <li>※インストール可能であったプログラムの一覧であり、全機能の動作を保証するものではありません。</li>
                                </ul>
                                
                            </div>
                        </section>
                        
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