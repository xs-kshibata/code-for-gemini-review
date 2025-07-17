<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>エラーログ | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「エラーログ」の形式や確認手順に関するご案内です。エックスサーバーではエラーログをサーバーパネルから簡単に閲覧することが可能です。">

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
            
                <h3 class="sub-ttl">エラーログ</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">エラーログ</a></li>
                                <li><a href="#link-previous-b">エラーログについて</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">エラーログ</h4>
                                <div class="section_body">

                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>の「エラーログ」より、エラーログの取得が可能です。</p>
                                    <p><img class="img" src="../img/manual/previous/man_server_logerror.png" alt="サーバーパネルのログファイル画面のスクリーンショット"></p>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">エラーログについて</h4>
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
                                            <tr><th>ログファイル提供単位</th><td>ドメイン単位</td></tr>
                                            <tr><th>ログ形式</th><td>テキスト形式 </td></tr>
                                            <tr><th>ログファイル生成周期</th><td>午前3時以降のログを生成。(毎日AM3時にクリアしています)</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※エラーとして出力される内容はプログラムやページ構成により異なります。</p>

                                    <div class="border border_blue">
                                        <em class="font-bold">（表示例）</em><br>
                                        ・.htaccess編集失敗時のエラー<br>
                                        [Fri Nov 02 11:56:17.072078 2018] [core:error] [pid 100956] [client ***.***.***.***:58482] AH00124: Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace., referer: http://****.xsrv.jp/
                                    </div>
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
                                    <li><a href="#link-a">エラーログの取得手順</a></li>
                                    <li><a href="#link-b">エラーログについて</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="section__body">
                                    <h4 id="link-a" class="section_ttl">エラーログの取得手順</h4>
                                    <div class="serial-box">
                                        <section class="box">
                                            <h5 class="box_ttl">1.「エラーログ」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「エラーログ」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_logerror_1.png?date=2410" alt="サーバーパネルのエラーログ画面のスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl">2.アクセス解析の追加</h5>
                                            <div class="box_body">
                                                <p>対象サーバーの列右端にある「ダウンロードする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_logerror_2.png?date=2410" alt="エラーログのスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">エラーログについて</h4>
                                    <p>ダウンロードできるエラーログの仕様については下記の通りです。</p>
                                    <table class="table table_responsive">
                                        <tbody>
                                        <tr>
                                            <th>ログファイル名</th>
                                            <td>
                                                <p>ドメイン名.error_log</p>
                                                <p class="border border_blue break-all">
                                                    <b>(例：example.comドメインの場合)</b><br>
                                                    example.com.error_log
                                                </p>
                                            </td>
                                        </tr>
                                        <tr><th>ログファイル提供単位</th><td>ドメイン単位</td></tr>
                                        <tr><th>ログ形式</th><td>テキスト形式 </td></tr>
                                        <tr><th>ログファイル生成周期</th><td>午前3時以降のログを生成。(毎日AM3時にクリアしています)</td></tr>
                                        </tbody>
                                    </table>
                                    <p class="note">※エラーとして出力される内容はプログラムやページ構成により異なります。</p>

                                    <div class="border border_blue">
                                        <em class="font-bold">（表示例）</em><br>
                                        ・.htaccess編集失敗時のエラー<br>
                                        [Fri Nov 02 11:56:17.072078 2018] [core:error] [pid 100956] [client ***.***.***.***:58482] AH00124: Request exceeded the limit of 10 internal redirects due to probable configuration error. Use 'LimitInternalRecursion' to increase the limit if necessary. Use 'LogLevel debug' to get a backtrace., referer: http://****.xsrv.jp/
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->



                        </div><!-- 新パネル終わり-->
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