<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ads.txt | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜運営サイトのなりすましによる広告収入減などを防ぐ効果が見込まれるads.txtに関するご案内です。">

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
            
                <h3 class="sub-ttl">ads.txt</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                        <div class="toc-list">
                        <p class="toc-list--head">目次</p>
                        <ul class="toc-list--body">
                            <li><a href="#link-previous-a">ads.txtとは</a></li>
                            <li><a href="#link-previous-b">「ads.txt設定」機能について</a></li>
                            <li><a href="#link-previous-c">「ads.txt設定」機能の利用手順</a>
                                <ul>
                                    <li><a href="#link-previous-c01">１．ads.txt設定をクリック</a></li>
                                    <li><a href="#link-previous-c02">２．「ads.txt設定追加」をクリック</a></li>
                                    <li><a href="#link-previous-c03">３．入力内容を確認し、「追加する」をクリック</a></li>
                                    <li><a href="#link-previous-c04">４．ads.txt設定の追加完了</a></li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                
                        <ul class="link-box">
                            <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                        </ul>

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-a">ads.txtとは</h4>
                            <div class="section_body">
                                <p>
                                    ads.txt（アズテキスト）とは、サイト運営者が認定した販売者のみデジタル広告枠を販売する仕組みです。<br>
                                    ads.txtの設置は必須ではありませんが、運営しているサイトのなりすましによる広告収入減などを防ぐ効果が見込まれます。
                                </p>
                                <p>
                                    Google AdSenseなどをご利用の場合、ads.txtを設置していない場合に警告が届くことがあります。
                                </p>
                                <p>
                                    ads.txtを設置、編集した場合、広告システムにもよりますが、反映まで1ヵ月以上かかる場合があります。<br>
                                    また、CDNサービス等でads.txtがキャッシュされる場合、定期的にキャッシュを最新にする必要があります。
                                </p>
                                <p>
                                    ads.txtの解釈は広告システムによってポリシーが異なります。<br>
                                    詳しい設定方法や機能、各広告システムのポリシーなどの詳細は、インターネット上の資料をご参照ください。
                                </p>

                                <aside class="msg msg_notice">
                                    <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご注意ください</h5>
                                    <div class="msg_body">
                                        <p>
                                            サイトのads.txtに問題があると、取引されている広告システムの広告が表示されなくなる場合があります。
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </section>

                        <section class="section">
                            <h4 class="section_ttl" id="link-previous-b">「ads.txt設定」機能について</h4>
                            <div class="section_body">
                                <p>
                                    当サービスでは、ドメイン単位でads.txtの設定が簡単にできる「ads.txt設定」機能を提供しています。
                                </p>
                                <ul class="ul">
                                    <li>
                                        本機能は、「(設定対象ドメイン名)/public_html/ads.txt」ファイルを編集することができます。<br>
                                        編集対象のファイルが存在しない場合は、編集内容を確定する時点で自動的に生成します。
                                    </li>
                                    <li>本機能を利用した場合は文字コードが「UTF-8」として保存されます。</li>
                                    <li>本機能を利用した場合は改行コードが「CRLF」として保存されます。</li>
                                    <li>
                                        サブドメイン、その他のフォルダに設置したads.txtファイルを編集することはできません。<br>
                                        ファイルマネージャやFTPソフトをご利用ください。<br>
                                        <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャログインフォーム</a><br>
                                        <a href="man_ftp_setting.php">FTPソフトの設定</a>
                                    </li>
                                </ul>
                            </div>
                        </section>

                        <section class="section mt50">
                            <h4 class="section_ttl" id="link-previous-c">「ads.txt設定」機能の利用手順</h4>
                            <div class="serial-box">
                                <section class="box">
                                    <h5 class="box_ttl" id="link-previous-c01">１．ads.txt設定をクリック</h5>
                                    <div class="box_body">
                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「ads.txt設定」メニューをクリックします。</p>
                                        <p><img class="img" src="../img/manual/previous/man_server_ads_1.png" alt="サーバーパネルでads.txt設定を選択しているスクリーンショット"></p>
                                    </div>
                                </section>

                                <section class="box">
                                    <h5 class="box_ttl" id="link-previous-c02">2. 「ads.txt設定追加」をクリック</h5>
                                    <div class="box_body">
                                        <p>販売を許可する広告システムの情報を入力し、「確認画面へ進む」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/previous/man_server_ads_2.png" alt="情報を入力して「確認画面へ進む」をクリックしているスクリーンショット"></p>
                                        <table class="table mb5">
                                            <caption>Google AdSenseの設定の場合</caption>
                                            <tbody>
                                            <tr>
                                                <th class="w20per">広告システム</th>
                                                <td>広告システムには「<b>google.com</b>」を入力します。</td>
                                            </tr>
                                            <tr>
                                                <th>サイト運営者ID</th>
                                                <td>
                                                    <p>サイト運営者IDには、接頭辞「pub-」と 16 桁の数字コードを入力します。（例：pub-1234567890123456）<br>
                                                        ※AdSenseのサイト運営者IDの確認方法は以下です。</p>
                                                    <ol class="ol">
                                                        <li>AdSense アカウントにログインします。</li>
                                                        <li>[アカウント]をクリックします。</li>
                                                        <li>[アカウント情報]セクションで[サイト運営者ID]欄を確認して入力します。</li>
                                                    </ol>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>契約種別</th>
                                                <td>
                                                    サイト運営者ID で指定したアカウントを直接管理している場合、「<b>DIRECT</b>」を選択します。<br>
                                                    サイト運営者ID で指定したアカウントを直接管理していない 場合、「<b>RESELLER</b>」を選択します。
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>認証機関ID</th>
                                                <td>認証機関IDには「<b>f08c47fec0942fa0</b>」を入力します。</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p>※その他の広告システムの入力内容については、利用されている広告システム側でお調べください。</p>
                                    </div>
                                </section>

                                <section class="box">
                                    <h5 class="box_ttl" id="link-previous-c03">3. 入力内容を確認し、「追加する」をクリック</h5>
                                    <div class="box_body">
                                        <p>入力内容を確認します。<br>「追加する」ボタンをクリックすることにより、ads.txtに認定したデジタル販売者が追加されます。</p>
                                        <p><img class="img" src="../img/manual/previous/man_server_ads_3.png" alt="「追加する」をクリックしているスクリーンショット"></p>
                                    </div>
                                </section>

                                <section class="box">
                                    <h5 class="box_ttl" id="link-previous-c04">4. ads.txt設定の追加完了</h5>
                                    <div class="box_body">
                                        <p>「認定済みデジタル販売者の追加が完了しました。」が表示されましたら、ads.txtの追加は完了です。</p>
                                        <p><img class="img" src="../img/manual/previous/man_server_ads_4.png" alt="設定完了画面"></p>
                                    </div>
                                </section>
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
                                    <li><a href="#link-a">ads.txtとは</a></li>
                                    <li><a href="#link-b">ads.txt設定</a>
                                        <ul>
                                            <li><a href="#link-b01">1.ads.txt設定をクリック</a></li>
                                            <li><a href="#link-b02">2.「ads.txt設定を追加」をクリック</a></li>
                                            <li><a href="#link-b03">3.情報を入力し、「追加する」をクリック</a></li>
                                            <li><a href="#link-b04">4.ads.txt設定の追加完了</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <section id="link-a" class="section">
                                <div class="section_body">
                                    <h4 class="section_ttl">ads.txtとは</h4>
                                    <p>
                                        ads.txt（アズテキスト）とは、サイト運営者が認定した販売者のみデジタル広告枠を販売する仕組みです。<br>
                                        これは、必須ではありませんが、運営しているサイトのなりすましによる広告収入減などを防ぐ効果が見込まれます。<br>
                                        Google AdSenseなどをご利用の場合、ads.txt（アズテキスト）を設置していない場合に警告が届くことがございます。<br>
                                    </p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section id="link-b" class="section">
                                <div class="section_body">

                                    <h4 class="section_ttl">ads.txt設定</h4>
                                    <p>サーバーパネルにて、ドメイン単位でads.txtの設定が可能な「ads.txt設定」機能を提供しています。</p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>広告システムにもよりますが、反映まで1ヵ月以上かかる可能性があります。</li>
                                                <li>サイトのads.txtに問題がある場合、取引されている広告システムの広告が表示されなくなります。</li>
                                                <li>CDNサービス等でads.txtがキャッシュされる場合、定期的にキャッシュを最新にする必要があります。</li>
                                                <li>ads.txtの解釈は広告システムによってポリシーが異なります。詳細は各広告システムにお問い合わせください。</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <aside class="msg msg_notice">
                                        <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「ads.txt設定」機能について</h5>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>本機能は、「(設定対象ドメイン名)/public_html/ads.txt」ファイルを編集することができます。</li>
                                                <li>編集対象のファイルが存在しない場合は、編集内容を確定する時点で自動的に生成します。</li>
                                                <li>本機能を利用した場合は文字コードが「UTF-8」として保存されます。</li>
                                                <li>本機能を利用した場合は改行コードが「CRLF」として保存されます。</li>
                                                <li>サブドメイン、その他のフォルダに設置したads.txtファイルの編集をすることはできません。<br>
                                                    ファイルマネージャやFTPソフトウェアによる編集、設置を行ってください。<br>
                                                    <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/ftp/" target="_blank">ファイルマネージャログインフォーム</a><br>
                                                    <a href="man_ftp_setting.php">マニュアル > FTPについて > FTPソフトの設定</a>
                                                </li>
                                                <li>詳しい設定方法や機能については、インターネット上の資料をご参照ください。</li>
                                            </ul>
                                        </div>
                                    </aside>

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1. ads.txt設定をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「ads.txt設定」メニューをクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_ads_1.png?date=2410" alt="ads.txt設定をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2. 「ads.txt設定を追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「ads.txt設定を追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_ads_2.png?date=2410" alt="ads.txt設定をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3. 情報を入力し、「追加する」をクリック</h5>
                                            <div class="box_body">
                                                <p>販売を許可する広告システムの情報を入力し、「追加する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_server_ads_3.png?date=2410" alt="情報を入力し、「追加する」をクリック"></p>
                                                <table class="table mb5">
                                                    <caption>Google AdSenseの設定の場合</caption>
                                                    <tbody>
                                                    <tr>
                                                        <th class="w30per">広告システム</th>
                                                        <td>広告システムには「<b>google.com</b>」を入力します。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>サイト運営者ID</th>
                                                        <td>
                                                            <p>サイト運営者IDには、接頭辞「pub-」と 16 桁の数字コードを入力します。（例：pub-1234567890123456）<br>
                                                                ※AdSenseのサイト運営者IDの確認方法は以下です。</p>
                                                            <ol class="ol">
                                                                <li>AdSense アカウントにログインします。</li>
                                                                <li>[アカウント]をクリックします。</li>
                                                                <li>[アカウント情報]セクションで[サイト運営者ID]欄を確認して入力します。</li>
                                                            </ol>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>契約種別</th>
                                                        <td>
                                                            サイト運営者ID で指定したアカウントを直接管理している場合、「<b>DIRECT</b>」を選択します。<br>
                                                            サイト運営者ID で指定したアカウントを直接管理していない 場合、「<b>RESELLER</b>」を選択します。
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>認証機関ID</th>
                                                        <td>認証機関IDには「<b>f08c47fec0942fa0</b>」を入力します。</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                ※その他の広告システムの入力内容については、利用されている広告システム側でお調べください。
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b04">4. ads.txt設定の追加完了</h5>
                                            <div class="box_body">
                                                <p>入力した情報が一覧に表示されましたら、ads.txtの追加は完了です。</p>
                                                <p><img class="img" src="../img/manual/man_server_ads_4.png?date=2410" alt="追加完了"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->
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