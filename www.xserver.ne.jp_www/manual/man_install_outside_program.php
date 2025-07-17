<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>動作確認済みプログラム | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで動作の確認が取れたプロブラムやエックスサーバーでは動作しないプログラムについて記載しています。">

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
            
                <h3 class="sub-ttl">動作確認済みプログラム</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">動作確認済みプログラム</a></li>
                    <li><a href="#link-b">主要な外部プログラムリスト</a>
                        <ul>
                            <li><a href="#link-b01">動作確認済みプログラム</a></li>
                            <li><a href="#link-b02">動作不可プログラム</a></li>
                        </ul>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">動作確認済みプログラム</h4>
                    <div class="section_body">
                        <p>動作環境を満たす外部プログラムを導入することが可能です。</p>
                        <p>しかしながら、近年増加しておりますプログラムの脆弱性を突かれた攻撃などにより、サーバーへ大きな影響を与える事例が数多くございます。</p>
                        <p>外部プログラムを導入の際は、頻繁に脆弱性の修正を含めたプログラムのバージョンアップをご確認ください。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">主要な外部プログラムリスト</h4>
                    <div class="section_body">
						<aside class="msg msg_notice">
							<h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h6>
							<div class="msg_body">
								<p>プログラムにおける技術的なお問い合わせにつきましては、サポート対象外の事項でございます。 各プログラムのユーザーフォーラムや、プログラム開発元へとお問い合わせください。</p>
								<p>また、導入後のトラブルや不正アクセス等につきましては、当サポートで対処いたしかねます。 お客様の自己責任の元、ご利用くださいますようお願いいたします。</p>
							</div>
						</aside>

                        <section class="block mt50">
                            <h5 class="block_ttl" id="link-b01">動作確認済みプログラム</h5>
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
                                                バージョン6.8系(PHP7.4〜PHP8.3)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>EC-CUBE4 (ショッピングカート)</th>
                                            <td class="tac">
                                                ○<br>
                                                <a class="sticker" href="../manual/man_install_auto_ec4.php"><span class="label label_sticker">簡単インストール</span></a><br>
                                                バージョン4.3.0(PHP8.1〜PHP8.3)
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>EC-CUBE3 (ショッピングカート)</th>
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
                                            <th>concrete5 (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン9.2.2 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Joomla (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン5.0.1 / 4.4.1 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>MODX (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン3.0.4-pl -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Movable Type (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン8.0.2 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Drupal (CMS)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン10.1.6 / 9.5.11 / 8.9.20 -->
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Magento Open Source (ショッピングカート)</th>
                                            <td class="tac" >×</td>
                                        </tr>
                                        <tr>
                                            <th>Zen Cart (ショッピングカート)</th>
                                            <td class="tac">
                                                ○<br>
                                                <!-- バージョン1.5.8a -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <p class="tar">（2025年4月22日最終更新）</p>
                                <ul class="note-list note-list_margin">
                                    <li>※特に補足がない場合は、最終更新時点の最新バージョンおよび <b>PHP8.1、MariaDB10.5</b> において動作することを確認しております。</li>
                                    <li>※インストール可能であったプログラムの一覧であり、全機能の動作を保証するものではありません。</li>
                                </ul>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">動作不可プログラム</h5>
                            <div class="block_body">
                                <p>TomcatなどのJAVA実行環境を使用するものや、データベース環境にPostgreSQLを使用するもの、インストールにroot権限が必要なプログラムはご利用いただけません。</p>
                                <div class="border border_blue">
                                    <p class="mb0">（例）グループウェア：<br>
                                    　Aipo（<span class="link"><a href="http://aipostyle.com/" target="_blank" rel="nofollow">http://aipostyle.com/</a><i class="ico ico_new-window base-color"></i></span>）、サイボウズ（<span class="link"><a href="http://cybozu.co.jp/" target="_blank" rel="nofollow">http://cybozu.co.jp</a><i class="ico ico_new-window base-color"></i></span>）</p>
                                </div>
                                
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