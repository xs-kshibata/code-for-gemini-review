<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アクセスログ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「アクセスログ」の形式や確認手順に関するご案内です。エックスサーバーではアクセスログをサーバーパネルから簡単に閲覧することが可能です。">

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
            
                <h3 class="sub-ttl">アクセスログ</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">アクセスログ</a></li>
                                <li><a href="#link-previous-b">アクセスログについて</a></li>
                                <li><a href="#link-previous-c">過去のアクセスログについて</a></li>
                            </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">アクセスログ</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「アクセスログ」より、アクセスログの取得が可能です。</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_log_1.png" alt="サーバーパネルのログファイル画面のスクリーンショット"></p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">アクセスログについて</h4>
                                <div class="section_body">

                                    <p>アクセスログの仕様は以下のとおりです。</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                            <tr>
                                                <th class="w30per-m w30per-l">ログファイル名</th>
                                                <td>
                                                    <p>ドメイン名.access_log_年月日</p>
                                                    <p class="border border_blue break-all">
                                                        <b>(例：example.jpドメインで2016年1月1日に保存されたログの場合)</b><br>
                                                        example.jp.access_log_20160101
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ログファイル提供単位</th>
                                                <td>ドメイン単位</td>
                                            </tr>
                                            <tr>
                                                <th>ログ形式</th>
                                                <td>テキスト形式</td>
                                            </tr>
                                            <tr>
                                                <th>ログファイル生成周期</th>
                                                <td>毎日午前4時頃に、過去30日分のログファイルを日別に生成</td>
                                            </tr>
                                            <tr>
                                                <th>ログ出力内容</th>
                                                <td>
                                                    <p>アクセスログは下記の順で出力され記録されます。</p>
                                                    <ul class="ul tal">
                                                        <li>バーチャルホスト</li>
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
                                                        example.jp 192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">過去のアクセスログについて</h4>
                                <div class="section_body">

                                    <p>過去のアクセスログデータが必要な場合は、「保存期間設定」より保存期間の設定を行うことで、ログファイルがサーバー(FTP領域)上に生成されます。</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                            <tr><th>ログファイル生成場所</th><td>/home/サーバーID/ドメイン名/log/</td></tr>
                                            <tr>
                                                <th>ログファイル名</th>
                                                <td>
                                                    <p>ドメイン名.access_log_年月日.gz</p>
                                                    <p class="border border_blue break-all">
                                                        <b>(例：example.jpドメインで2016年1月1日に保存されたログの場合)</b><br>
                                                        example.jp.access_log_20160101.gz
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr><th>ログファイル提供単位</th><td>ドメイン単位</td></tr>
                                            <tr><th>ログ形式</th><td>テキスト形式をgzip圧縮</td></tr>
                                            <tr><th>ログファイル生成周期</th><td>毎日午前4時頃に、前日午前4:00〜当日午前4:00までのログファイルを生成</td></tr>
                                        </tbody>
                                    </table>

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
                                    <li><a href="#link-a">アクセスログとは</a></li>
                                    <li><a href="#link-b">アクセスログのダウンロード</a></li>
                                    <li><a href="#link-c">ユーザー領域への保存設定</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-a" class="section_ttl">アクセスログとは</h4>
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「アクセスログ」より、アクセスログの取得が可能です。</p>
                                    <p><img class="img" src="../img/manual/man_server_log_1.png?date=2410" alt="サーバーパネルのログファイル画面のスクリーンショット"></p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">アクセスログのダウンロード</h4>
                                    <p>アクセスログの仕様は以下のとおりです。</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr>
                                            <th class="w30perM w30perL">ログファイル名</th>
                                            <td>
                                                <p>ドメイン名.access_log_年月日</p>
                                                <p class="border border_blue break-all">
                                                    <b>(例：example.comドメインで2016年1月1日に保存されたログの場合)</b><br>
                                                    example.com.access_log_20160101
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>ログファイル提供単位</th>
                                            <td>ドメイン単位</td>
                                        </tr>
                                        <tr>
                                            <th>ログ形式</th>
                                            <td>テキスト形式</td>
                                        </tr>
                                        <tr>
                                            <th>ログファイル生成周期</th>
                                            <td>毎日午前4時頃に、過去30日分のログファイルを日別に生成</td>
                                        </tr>
                                        <tr>
                                            <th>ログ出力内容</th>
                                            <td>
                                                <p>アクセスログは下記の順で出力され記録されます。</p>
                                                <ul class="ul tal">
                                                    <li>バーチャルホスト</li>
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
                                                    example.com 192.0.2.0 - - [11/Jul/2013:12:09:17 +0900] "GET /?action=hoge HTTP/1.0" 200 2602 "-" "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)"
                                                </p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-c" class="section_ttl">ユーザー領域への保存設定</h4>
                                    <p>過去のアクセスログデータが必要な場合は、「ユーザー領域への保存設定」より保存期間の設定を行うことで、ログファイルがサーバー(ユーザーディレクトリ)上に生成されます。</p>

                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr><th>ログファイル生成場所</th><td>/home/サーバーID/ドメイン名/log/</td></tr>
                                        <tr>
                                            <th>ログファイル名</th>
                                            <td>
                                                <p>ドメイン名.access_log_年月日.gz</p>
                                                <p class="border border_blue break-all">
                                                    <b>(例：example.comドメインで2016年1月1日に保存されたログの場合)</b><br>
                                                    example.com.access_log_20160101.gz
                                                </p>
                                            </td>
                                        </tr>
                                        <tr><th>ログファイル提供単位</th><td>ドメイン単位</td></tr>
                                        <tr><th>ログ形式</th><td>テキスト形式をgzip圧縮</td></tr>
                                        <tr><th>ログファイル生成周期</th><td>毎日午前4時頃に、前日午前4:00~当日午前4:00までのログファイルを生成</td></tr>
                                        </tbody>
                                    </table>
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