<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>DUNSナンバーの取得方法 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」でDUNSナンバーを取得いただくための手順のご案内です。">


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
            
                <h3 class="sub-ttl">DUNSナンバーの取得方法</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">DUNSナンバーとは</a></li>
                    <li><a href="#link-b">DUNSナンバーの取得方法</a></li>
                     <li><a href="#link-c">DUNS登録情報の確認方法</a></li>
                    <li><a href="#link-d">DUNSナンバーの登録が実際と異なっていた場合</a></li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">DUNSナンバーとは</h4>
                    <div class="section_body">
                        <p>DUNSナンバーとは世界中の企業を一意に識別することが可能な９桁の企業コードです。 DUNSナンバーは、顧客の管理や様々なプロプラムに活用されています。</p>
                        <p>当サービスで扱う企業認証SSL・EV SSLにおいては取得申請・更新申請時にDUNSナンバーが必要です。
                            また、DUNS情報（会社名、所在地、電話番号）は正しく登録されている必要があります。</p>

                        <table class="table table_use-caption mb5">
                            <caption>SSL証明書の発行に必要なDUNS登録情報</caption>
                            <tbody>
                            <tr>
                                <th class="w30per">会社名</th>
                                <td>DUNSに登録されている英語会社名</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td>DUNSに登録されている英語住所</td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>DUNSに登録されている電話番号</td>
                            </tr>

                            </tbody>
                        </table>
                        <aside class="msg msg_caution mt20">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                            <div class="msg_body">
                                <p>※DUNSに上記項目のご登録がない、もしくは登録情報に誤りがある場合、申請情報とDUNS情報が一致しないため、SSL証明書が発行されません。そのため、上記3項目が正しく登録されているかを必ずご確認ください。</p>
                            </div>
                        </aside>
                        <p>DUNSナンバーの取得は、下記をご参考に行ってください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">DUNSナンバーの取得方法</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b00">1. 自社のDUNSナンバーを取得するサイトへアクセス</h6>
                                <div class="box_body">
                                    <p>自社のDUNSナンバーを取得するために東京商工リサーチが提供する「<a href="https://duns-number-jp.tsr-net.co.jp/search/jpn/login.asp" target="_blank">DUNSナンバー検索</a><i class="ico ico_new-window base-color"></i>」へアクセスしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_ssl_duns_5.png" alt="DUNSナンバー検索"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">2. SSLサーバ証明書を取得する組織名で検索します</h6>
                                <div class="box_body">
                                    <p>以下の内容を入力し、「検索」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_ssl_duns_1.png?date=20210610" alt="DUNSナンバーの取得方法"></p>
                                    <table class="table table_use-caption mb5">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">インアクティブを除く</th>
                                            <td>チェック</td>
                                        </tr>
                                        <tr>
                                            <th>企業名(日本語)</th>
                                            <td>SSLサーバ証明書を取得する組織名をご入力ください。<br>
                                                (例)サンプル商事</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">3. 自社のDUNS情報を検索結果から探します</h6>
                                <div class="box_body">
                                    <p>自社のDUNS情報を見つけたら該当する行の「DUNS」ボタンをクリックし、次の画面で「同意する」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_ssl_duns_2.png?date=20210610" alt="DUNSナンバーの取得方法"></p>
                                    <aside class="msg msg_notice mb0">
                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>自社のデータが見つからなかった場合</h6>
                                        <div class="msg_body">
                                            <p>DUNSナンバーが登録されておりませんので、「<a href="https://duns-number-jp.tsr-net.co.jp/search/jpn/login.asp" target="_blank">DUNSナンバーの申請</a><i class="ico ico_new-window base-color"></i>」より登録を行ってください。（有料）</p>
                                            <p><img class="img" src="../img/manual/man_order_ssl_duns_6.png" alt="DUNSナンバー申請"></p>
                                        </div>
                                    </aside>

                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">4. 取得手続きを行います</h6>
                                <div class="box_body">
                                    <p>以下の内容を入力し、「確認」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_ssl_duns_3.png?date=20210610" alt="DUNSナンバーの取得方法"></p>

                                    <table class="table table_use-caption mb5">
                                        <caption>どちらのD-U-N-S Numberをお求めですか？</caption>
                                        <tbody>
                                        <tr>
                                            <th>自社のD-U-N-S Numberを取得する(無料)</th>
                                            <td>チェック</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table_use-caption mb5">
                                        <caption>申請者情報</caption>
                                        <tbody>
                                        <tr>
                                            <th>住所</th>
                                            <td>SSLサーバ証明書を取得する組織の所在地をご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>会社名</th>
                                            <td>SSLサーバ証明書を取得する組織の正式名称をご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>氏名</th>
                                            <td>SSLサーバ証明書を取得する申請者の氏名をご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>部署名/役職名</th>
                                            <td>SSLサーバ証明書を取得する申請者の部署名/役職名をご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>TEL</th>
                                            <td>SSLサーバ証明書を取得する組織の代表電話番号をご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>FAX</th>
                                            <td>(任意の項目になります)</td>
                                        </tr>
                                        <tr>
                                            <th>e-mail</th>
                                            <td>SSLサーバ証明書を取得する申請者のメールアドレスをご入力ください</td>
                                        </tr>
                                        <tr>
                                            <th>ご利用目的</th>
                                            <td>「その他の目的」をチェックし、入力欄に「SSLサーバ証明書を取得するため」と記載してください</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p>確認画面にて入力内容に誤りがなければ手続きを完了してください。</p>
                                </div>
                            </section>
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">5. 取得手続き完了</h6>
                                <div class="box_body">
                                    <p>東京商工リサーチより申請したDUNSナンバーと登録情報がメールとFAX(入力時に記載した場合のみ)で届きます。
                                        また、照会した情報に英語の登録情報が無い場合、東京商工リサーチのサイトから追加登録することもできます。</p>

                                </div>
                            </section>

                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="update_ssl" class="section">
                    <h4 class="section_ttl" id="link-c">DUNS登録情報の確認方法</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">

                            <p>DUNS登録情報は、DUNSナンバー照会後に東京商工リサーチから届くメールで確認ができます。</p>
                            <p><img class="img" src="../img/manual/man_order_ssl_duns_4.png?date=20210610" alt="DUNSナンバーの取得方法"></p>
                            <p>DUNS登録情報（会社名、所在地、電話番号）は、正しく登録されている必要があります。
                                登録がない、もしくは登録情報に誤りがある場合、申請情報とDUNS情報が一致しないため、SSL証明書が発行されません。そのため、下記3項目が正しく登録されているかを必ずご確認ください。</p>

                            <table class="table table_use-caption mb5">
                                <caption>SSL証明書の発行に必要なDUNS登録情報</caption>
                                <tbody>
                                <tr>
                                    <th class="w30per">会社名</th>
                                    <td>DUNSに登録されている英語会社名</td>
                                </tr>
                                <tr>
                                    <th>所在地</th>
                                    <td>DUNSに登録されている英語住所</td>
                                </tr>
                                <tr>
                                    <th>電話番号</th>
                                    <td>DUNSに登録されている電話番号</td>
                                </tr>

                                </tbody>
                            </table>

                            <aside class="msg msg_caution mt20">
                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                <div class="msg_body">
                                    <p>※東京商工リサーチから届くメールには電話番号が記載されていません。届いたメールアドレス宛に電話番号の送付を依頼し、登録されている電話番号に誤りがないか必ず確認してください。</p>
                                </div>
                            </aside>

                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">DUNSナンバーの登録が実際と異なっていた場合</h4>
                    <div class="section_body">
                        <p>ローマ字表記の組織名が異なるなど、実際と異なっていた場合は「<a href="https://duns-number-jp.tsr-net.co.jp/search/jpn/login.asp" target="_blank">自社DUNS情報修正</a><i class="ico ico_new-window base-color"></i>」よりご依頼ください。無料でお手続き可能です。</p>
                        <p><img class="img" src="../img/manual/man_order_ssl_duns_7.png" alt="自社DUNS情報修正"></p>
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