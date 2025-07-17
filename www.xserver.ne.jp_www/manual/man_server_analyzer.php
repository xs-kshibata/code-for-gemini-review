<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アクセス解析 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「アクセス解析」機能に関するご案内です。エックスサーバーではサーバーパネルからアクセス解析を簡単に設置することが可能です。">

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
            
                <h3 class="sub-ttl">アクセス解析</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">アクセス解析について</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">集計方法と解析結果について</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-b">アクセス解析の追加手順</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「アクセス解析」をクリック</a></li>
                                            <li><a href="#link-previous-b02">2.アクセス解析の追加</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-previous-c">アクセス解析の用語解説</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">アクセス解析について</h4>
                                <div class="section_body">
                                    <p>ドメインおよびサブドメイン単位でアクセス解析の追加が可能です。</p>
                                    <p>なお、解析は6時間に一回実施されます。</p>
                                </div>
                                <h5 class="block_ttl" id="link-previous-a01">集計方法と解析結果について</h5>
                                <p>
                                    当サービスでは、Webサーバーのアクセスログをもとに解析する「サーバーログ型」のアクセス解析を採用しています。
                                </p>
                                <p>
                                    そのため、Googleアナリティクスなどに代表される、ウェブサイトの各ページに計測タグを貼り付けてアクセス情報を収集する「Webビーコン型」のアクセス解析とは解析結果が異なる場合があります。<br>
                                    「サーバーログ型」のアクセス解析では「Webビーコン型」のアクセス解析に加え、以下のアクセスも解析の対象になります。
                                </p>
                                <ul class="ul">
                                    <li>CookieやJavascriptを無効に設定したブラウザからのアクセス</li>
                                    <li>Javascriptを実行しない検索エンジンロボット・スパイダーによるアクセス</li>
                                </ul>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <div class="section_body">

                                    <h4 class="section_ttl" id="link-previous-b">アクセス解析の追加手順</h4>

                                    <div class="serial-box mb15">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「アクセス解析」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス解析」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_analyzer_1.png" alt="アクセス解析画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.アクセス解析の追加</h6>
                                            <div class="box_body">
                                                <p>アクセス解析を追加するドメインを選択し、「追加する」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_server_analyzer_2.png" alt="アクセス解析設定の追加のスクリーンショット"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <h4 class=" mt50 section_ttl" id="link-previous-c">アクセス解析の用語解説</h4>
                                    <table class="table mb0">
                                        <tbody>
                                        <tr>
                                            <th>訪問者数</th>
                                            <td>ウェブサイトへアクセスした訪問者の数。<br>同一IPをカウントしないユニークなアクセス数。</td>
                                        </tr>
                                        <tr>
                                            <th>訪問回数</th>
                                            <td>ウェブサイトへアクセスされた回数。<br>同一IPの場合、60分以内のアクセスはカウントしません。</td>
                                        </tr>
                                        <tr>
                                            <th>ページビュー</th>
                                            <td>ウェブサイトでHTML文書が表示された回数。<br>同一IPの場合もカウントします。</td>
                                        </tr>
                                        <tr>
                                            <th>ヒット数</th>
                                            <td>
                                                ウェブサイトでファイルが読み込まれた回数。
                                                <p class="mb0">（例）画像ファイルが10個あるページに3回アクセスがあった場合<br>
                                                    　→30ヒット数となります。</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>転送量</th>
                                            <td>ウェブサイトのデータ送受信量</td>
                                        </tr>
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
                                    <li><a href="#link-a">アクセス解析について</a>
                                        <ol>
                                            <li><a href="#link-a01">1.「アクセス解析」をクリック</a></li>
                                            <li><a href="#link-a02">2.アクセス解析の追加</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">アクセス解析の用語解説</a></li>
                                    <li><a href="#link-c">集計方法と解析結果について</a></li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <h4 class="section_ttl">アクセス解析について</h4>
                                <div class="section_body">
                                    <p>ドメインおよびサブドメイン単位でアクセス解析の追加が可能です。</p>
                                    <p>なお、解析は6時間に一回実施されます。</p>

                                    <div class="serial-box mb15">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a01">1.「アクセス解析」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>にログインし、「アクセス解析」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_server_analyzer_1.png?date=2410" alt="アクセス解析画面へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-a02">2.アクセス解析の追加</h5>
                                            <div class="box_body">
                                                <p>変更ボタンをクリックして「ON」にする。</p>
                                                <p><img class="img" src="../img/manual/man_server_analyzer_2.png?date=2410" alt="変更ボタンをクリックして「ON」にする"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl" id="link-b"><i class="ico ico_circle-arrow-right"></i>アクセス解析の用語解説</h4>
                                        <div class="msg_body">
                                            <table class="table table_responsive">
                                                <tbody>
                                                <tr>
                                                    <th>訪問者数</th>
                                                    <td>ウェブサイトへアクセスした訪問者の数。<br>同一IPをカウントしないユニークなアクセス数。</td>
                                                </tr>
                                                <tr>
                                                    <th>訪問回数</th>
                                                    <td>ウェブサイトへアクセスされた回数。<br>同一IPの場合、60分以内のアクセスはカウントしません。</td>
                                                </tr>
                                                <tr>
                                                    <th>ページビュー</th>
                                                    <td>ウェブサイトでHTML文書が表示された回数。<br>同一IPの場合もカウントします。</td>
                                                </tr>
                                                <tr>
                                                    <th>ヒット数</th>
                                                    <td>
                                                        ウェブサイトでファイルが読み込まれた回数。
                                                        <p class="mb0">（例）画像ファイルが10個あるページに3回アクセスがあった場合<br>
                                                            　→30ヒット数となります。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>転送量</th>
                                                    <td>ウェブサイトのデータ送受信量</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </aside>
                                    <aside class="msg msg_notice">
                                        <h4 class="msg_ttl" id="link-c"><i class="ico ico_circle-arrow-right"></i>集計方法と解析結果について</h4>
                                        <div class="msg_body">
                                            <p>当サービスでは、Webサーバーのアクセスログをもとに解析する「サーバーログ型」のアクセス解析を採用しています。</p>
                                            <p class="mb0">そのため、Googleアナリティクスなどに代表される、ウェブサイトの各ページに計測タグを貼り付けてアクセス情報を収集する「Webビーコン型」のアクセス解析とは解析結果が異なる場合があります。<br>
                                                「サーバーログ型」のアクセス解析では「Webビーコン型」のアクセス解析に加え、以下のアクセスも解析の対象になります。</p>
                                            <ul class="ul">
                                                <li>CookieやJavascriptを無効に設定したブラウザからのアクセス</li>
                                                <li>Javascriptを実行しない検索エンジンロボット・スパイダーによるアクセス</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>


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