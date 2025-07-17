<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アクセスログ・エラーログ(移行メンテナンス前) | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「アクセスログ」「エラーログ」の形式や確認手順に関するご案内です。エックスサーバーではアクセスログ・エラーログをサーバーパネルから簡単に閲覧することが可能です。sv1999以前でサーバー環境の移行メンテナンスが完了していない方はこちらをご参照ください。">

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
            
                <h3 class="sub-ttl">ログ(移行メンテナンス前)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ログ（アクセスログ・エラーログ）</a></li>
                    <li><a href="#link-b">アクセスログについて</a></li>
                    <li><a href="#link-c">過去のアクセスログについて</a></li>
                    <li><a href="#link-d">エラーログについて</a></li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">ログ（アクセスログ・エラーログ）</h4>
                    <div class="section_body">
                        
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本ページのマニュアルについて</h5>
                            <div class="msg_body">
                                <p>
                                    本ページのマニュアルは、サーバー番号がsv1〜sv1999のサーバーにおいてハードウェア大幅増強を行った、より新しいサーバー環境への移行メンテナンスの実施前の提供仕様に基づいた案内になります。
                                    メンテナンスの実施状況は、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4057">移行スケジュールについて</a>をご参照ください。
                                </p>
                                <p class="mb0">
                                    該当しないサーバーをご利用のお客様は、マニュアル「<a href="man_server_log.php">ログ</a>」をご参照ください。
                                </p>
                            </div>
                        </aside>
                    
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「ログファイル」より、アクセスログやエラーログの取得が可能です。</p>
                        <p><img class="img" src="../img/manual/man_server_log_1.png" alt="サーバーパネルのログファイル画面のスクリーンショット"></p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">アクセスログについて</h4>
                    <div class="section_body">
                    
                        <p>アクセスログの仕様は以下のとおりです。</p>
                        
                        <table class="table table_responsive">
                            <tbody>
                                <tr>
                                    <th class="w30per-m w30per-l">ログファイル名</th>
                                    <td>
                                        <p>ドメイン名.access_log</p>
                                        <p class="border border_blue break-all">
                                            <b>(例：example.jpドメインの場合)</b><br>
                                            example.jp.access_log
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ログファイル提供単位</th>
                                    <td>ドメイン・サブドメイン単位</td>
                                </tr>
                                <tr>
                                    <th>ログ形式</th>
                                    <td>テキスト形式</td>
                                </tr>
                                <tr>
                                    <th>ログファイル生成周期</th>
                                    <td>毎日午前3時頃に、前日午前3:00〜当日午前3:00までのログファイルを生成</td>
                                </tr>
                                <tr>
                                    <th>ログ出力内容</th>
                                    <td>
                                        <p>アクセスログは下記の順で出力され記録されます。</p>
                                        <ul class="ul tal">
                                            <li>IPアドレス</li>
                                            <li>クライアントユーザー名(*)</li>
                                            <li>認証ユーザー名(*)</li>
                                            <li>タイムスタンプ</li>
                                            <li>"メソッド URI+QUERY_STRING"</li>
                                            <li>ステータス</li>
                                            <li>転送量(単位:バイト)</li>
                                            <li>リファラ(アクセス元URL)</li>
                                            <li>ユーザエージェント</li>
                                        </ul>
                                        <p class="note">※(*)は通常空欄「-」です。</p>
                                        <p class="border border_blue">
                                            <b>（記載例）</b><br>
                                            192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">過去のアクセスログについて</h4>
                    <div class="section_body">
                    
                        <p>過去のアクセスログデータが必要な場合は、「保存期間設定」より保存期間の設定を行うことで、ログファイルがサーバー(FTP領域)上に生成されます。</p>
                        
                        <table class="table table_responsive">
                            <tbody>
                                <tr><th>ログファイル生成場所</th><td>/home/サーバーID/ドメイン名/log/</td></tr>
                                <tr>
                                    <th>ログファイル名</th>
                                    <td>
                                        <p>ドメイン名.access_log.数字</p>
                                        <p class="border border_blue break-all">
                                            <b>(例：example.jpドメインの1週間前のログファイルの場)</b><br>
                                            example.jp.access_log.1
                                        </p>
                                    </td>
                                </tr>
                                <tr><th>ログファイル提供単位</th><td>ドメイン・サブドメイン単位</td></tr>
                                <tr><th>ログ形式</th><td>テキスト形式 </td></tr>
                                <tr><th>ログファイル生成周期</th><td>毎週日曜午前5時頃に、前週分のログファイルを生成</td></tr>
                            </tbody>
                        </table>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">エラーログについて</h4>
                    <div class="section_body">
                    
                        <p>ダウンロードできるエラーログの仕様については下記の通りです。</p>
                        <table class="table table_responsive">
                            <tbody>
                                <tr>
                                    <th>ログファイル名</th>
                                    <td>
                                        <p>ドメイン名.error_log</p>
                                        <p class="border border_blue break-all">
                                            <b>(例：example.jpドメインの場合)</b><br>
                                            example.jp.error_log
                                        </p>
                                    </td>
                                </tr>
                                <tr><th>ログファイル提供単位</th><td>ドメイン・サブドメイン単位</td></tr>
                                <tr><th>ログ形式</th><td>テキスト形式 </td></tr>
                                <tr><th>ログファイル生成周期</th><td>午前3時以降のログを生成。(毎日AM3時にクリアしています)</td></tr>
                            </tbody>
                        </table>
                        <p class="note">※エラーとして出力される内容はプログラムやページ構成により異なります。</p>
                        
                        <div class="border border_blue">
                            <em class="font-bold">（表示例）</em><br>
                            ・404エラー(Not Found)<br>
                            [Mon Sep 30 17:44:39 2013] [error] [client 192.0.2.0] File does not exist: /home/example/example.xserver.jp/public_html/index.php
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