<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>データベース自動バックアップからのデータ取得 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜MySQLデータベースの自動バックアップデータを取得する方法を説明しています。">

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
            
                <h3 class="sub-ttl">自動バックアップからのデータ取得</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">自動バックアップデータ取得の流れ</a></li>
                                    <li><a href="#link-previous-b">ご利用時の注意事項</a></li>
                                    <li><a href="#link-previous-c">自動バックアップデータ取得申請</a></li>
                                    <li><a href="#link-previous-d">取得したバックアップデータをダウンロードする方法</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>

                            <p>「自動バックアップデータ取得申請」機能では、全プラン標準で提供している「<a href="../functions/service_backup.php">自動バックアップ</a>」機能によって保持しているバックアップデータを取得可能です。<br>
                            取得可能なデータは過去14日分までです。</p>

                            <aside class="msg msg_notice">
                                <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp をご利用のお客様について</h6>
                                <div class="msg_body">
                                    <p>sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。<br>
                                    順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。
                                    </p>
                                </div>
                            </aside>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">自動バックアップデータ取得の流れ</h4>
                                <div class="section_body">

                                    <p>「自動バックアップデータ取得申請」機能により、
                                        自動バックアップ機能で保存されたMySQLデータベースのバックアップデータを、お客様のサーバー上に設置することができます。</p>

                                    <p>設置されたバックアップデータは、FTPソフト等でダウンロードしてご活用いただけます。</p>

                                    <p><img class="flex" src="../img/manual/previous/man_db_download_7.png" alt="自動バックアップデータ取得の流れ"></p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">ご利用時の注意事項</h4>
                                <div class="section_body">
                                    <p>下記に該当するような場合は、バックアップの対象外となります。</p>
                                    <ul class="ul mt30 mb30">
                                        <li>破損等によりバックアップ処理が行えないデータベース</li>
                                        <li>保有するデータベーステーブルの数が「1,000」を超えるデータベース</li>
                                        <li>バックアップの処理に大きな負荷がかかったり、処理が長時間に及ぶようなデータベース</li>
                                    </ul>
                                    <p>バックアップデータは、システムにより自動的に取得されるものであり、当該データの完全性を保証するものではありませんので、あらかじめご了承ください。</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">自動バックアップデータ取得申請</h4>
                                <div class="section_body">

                                    <p>
                                        自動バックアップデータ取得申請は一度に1件まで実行可能であり、複数のデータ取得申請を同時にすることはできません。<br>
                                        データ取得処理が実行中の場合、取得処理が完了したのちにあらためてデータ取得申請をおこなってください。
                                    </p>

                                    <div class="serial-box mt30">
                                        <section class="box">
                                            <h5 class="box_ttl">1.「MySQLバックアップ」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「MySQLバックアップ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_1.png" alt="サーバーパネル・MySQLバックアップのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2.取得するデータベースとバックアップデータを選択し「申請する」をクリック</h5>
                                            <div class="box_body">
                                                <p>「自動バックアップデータ取得申請」メニューにおいて、取得するデータベースと取得元となるバックアップデータを選択し、「申請する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_2.png" alt="バックアップデータを選択したスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">3.「申請する」をクリック</h5>
                                            <div class="box_body">
                                                <p>確認画面で申請情報を確認し、最後に「申請する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_4.png" alt="データベースの取得開始ボタンをクリックしているスクリーンショット"></p>
                                                <p>以上で取得の申請手続きは完了です。</p>
                                                <p class="note">※データベースの容量によっては取得完了までに時間がかかる場合がございます。<br>
                                                「自動バックアップデータ取得申請履歴」から取得状況をご確認いただくことができます。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /serial-box -->
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-d">取得したバックアップデータをダウンロードする方法</h4>
                                <div class="section_body">
                                    <p>FTPソフトまたはファイルマネージャにて、取得したバックアップデータをダウンロードください。</br>
                                        ファイルマネージャを使用してダウンロードする手順は、下記の通りです。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl">1.「MySQLバックアップ」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「MySQLバックアップ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_1.png" alt="サーバーパネル・MySQLバックアップのスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2.バックアップデータ出力先を確認する</h5>
                                            <div class="box_body">
                                                <p>「自動バックアップデータ取得申請履歴」をクリックします。<br>
                                                    対象データベースの取得状況項目より、バックアップデータ出力先を確認します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_5.png" alt="バックアップデータ出力先を表示しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">3.バックアップデータをダウンロードする</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャ</a>にログインし、2.で表示された出力先へアクセスします。<br>
                                                    その後、出力先のパスに表示されているファイルをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_db_download_6.png" alt="バックアップデータをダウンロードしているスクリーンショット"></p>
                                                <p>以上でバックアップデータダウンロードの手続きは完了です。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /serial-box -->
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
                                    <li><a href="#link-a">自動バックアップからのデータ取得</a></li>
                                    <li><a href="#link-b">自動バックアップデータ取得の流れ</a></li>
                                    <li>
                                        <a href="#link-c">自動バックアップデータ取得申請</a>
                                        <ol>
                                            <li><a href="#link-c1">1.「MySQLバックアップ取得・復元」をクリック</a></li>
                                            <li><a href="#link-c2">2.取得するデータベースとバックアップデータを選択し「バックアップ取得・復元」をクリック</a></li>
                                            <li><a href="#link-c3">3.「実行する」をクリック</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">取得したバックアップデータをダウンロードする方法</a>
                                        <ol>
                                            <li><a href="#link-d1">1.「MySQLバックアップ取得・復元」をクリック</a></li>
                                            <li><a href="#link-d2">2.バックアップデータ出力先を確認する</a></li>
                                            <li><a href="#link-d3">3.バックアップデータをダウンロードする</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">自動バックアップからのデータ取得</h4>
                                <div class="section_body">
                                    <p>「自動バックアップデータ取得申請」機能では、全プラン標準で提供している「<a href="../functions/service_backup.php">自動バックアップ</a>」機能によって保持しているバックアップデータを取得可能です。<br>
                                        取得可能なデータは過去14日分までです。</p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp をご利用のお客様について</h6>
                                        <div class="msg_body">
                                            <p>sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。<br>
                                                順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-b" class="section">
                                <h4 class="section_ttl">自動バックアップデータ取得の流れ</h4>
                                <div class="section_body">
                                    <p>「自動バックアップデータ取得申請」機能により、 自動バックアップ機能で保存されたMySQLデータベースのバックアップデータを、お客様のサーバー上に設置することができます。</p>
                                    <p>設置されたバックアップデータは、FTPソフト等でダウンロードしてご活用いただけます。</p>
                                    <p><img class="img" src="../img/manual/man_db_download_7.png?date=2410" alt="自動バックアップデータ取得の流れ"></p>
                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right" aria-hidden="true"></i>注意事項</h5>
                                        <div class="msg_body">
                                            <ul class="ul mb0">
                                                <li>下記に該当するような場合は、バックアップの対象外となります。
                                                    <ul class="ul">
                                                        <li>破損等によりバックアップ処理が行えないデータベース</li>
                                                        <li>保有するデータベーステーブルの数が「1,000」を超えるデータベース</li>
                                                        <li>バックアップの処理に大きな負荷がかかったり、処理が長時間に及ぶようなデータベース</li>
                                                    </ul>
                                                </li>
                                                <li>バックアップデータは、システムにより自動的に取得されるものであり、当該データの完全性を保証するものではありませんので、予めご了承ください。</li>
                                                <li>自動バックアップデータ取得申請は一度に1件まで実行可能であり、複数のデータ取得申請を同時にすることはできません。<br>
                                                    データ取得処理が実行中の場合、取得処理が完了したのちにあらためてデータ取得申請をおこなってください。</li>
                                            </ul>

                                        </div>
                                    </aside>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-c" class="section">
                                <h4 class="section_ttl">自動バックアップデータ取得申請</h4>
                                <div class="section_body">
                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c1">1.「MySQLバックアップ取得・復元」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「MySQLバックアップ取得・復元」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_1.png?date=2410" alt="「MySQLバックアップ取得・復元」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c2">2.取得するデータベースとバックアップデータを選択し「バックアップ取得・復元」をクリック</h5>
                                            <div class="box_body">
                                                <p>「自動バックアップデータの取得と復元」メニューにおいて、取得するデータベースと取得元となるバックアップデータを選択し、「バックアップ取得・復元」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_2.png?date=2410" alt="取得するデータベースとバックアップデータを選択し「バックアップ取得・復元」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c3">3.「実行する」をクリック</h5>
                                            <div class="box_body">
                                                <p>確認画面で申請情報を確認し、最後に「実行する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_3.png?date=2410" alt="「実行する」をクリック"></p>
                                                <p>以上で取得の申請手続きは完了です。</p>
                                                <p class="note">データベースの容量によっては取得完了までに時間がかかる場合がございます。<br>
                                                    「履歴」から取得状況をご確認いただくことができます。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="link-d" class="section">
                                <h4 class="section_ttl">取得したバックアップデータをダウンロードする方法</h4>
                                <div class="section_body">

                                    <p>FTPソフトまたはファイルマネージャにて、取得したバックアップデータをダウンロードください。<br>
                                        ファイルマネージャを使用してダウンロードする手順は、下記の通りです。</p>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d1">1.「MySQLバックアップ取得・復元」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「MySQLバックアップ取得・復元」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_1.png?date=2410" alt="「MySQLバックアップ取得・復元」をクリック"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d2">2.バックアップデータ出力先を確認する</h5>
                                            <div class="box_body">
                                                <p>「履歴」をクリックします。<br>
                                                    対象データベースの取得状況項目より、バックアップデータ出力先を確認します。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_4.png?date=2410" alt="バックアップデータ出力先を確認する"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-d3">3.バックアップデータをダウンロードする</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャ</a>にログインし、2.で表示された出力先へアクセスします。<br>
                                                    その後、出力先のパスに表示されているファイルを選択しダウンロードをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_db_download_5.png?date=2410" alt="バックアップデータをダウンロードする"></p>
                                                <p>以上でバックアップデータダウンロードの手続きは完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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