<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>FTP制限設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜FTP接続が可能なIPアドレスを限定することで不正アクセスやファイル改ざんのリスクを減らすことが可能な「FTP制限設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">FTP制限設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">FTP制限設定</a></li>
                                <li><a href="#link-previous-b">設定手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.FTP制限設定を選択</a></li>
                                        <li><a href="#link-previous-b02">2.FTP接続許可IPアドレスの追加</a></li>
                                        <li><a href="#link-previous-b03">3.設定対象の選択とIPアドレスの入力</a></li>
                                        <li><a href="#link-previous-b04">4.設定完了</a></li>
                                    </ol>
                                    <ul>
                                        <li><a href="#link-previous-b011">ファイルマネージャを利用される場合</a></li>
                                        <li><a href="#link-previous-b012">「IPアドレス」の指定方法について</a></li>
                                    </ul>
                                </li>
                                <li><a href="#link-previous-c">サブFTPアカウント利用時の注意事項</a></li>
                            </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">FTP制限設定について</h4>
                                <div class="section_body">
                                    <p>FTPでの接続が可能なIPアドレスを設定し、FTPからのアクセスを制限します。<br>
                                    これにより、不正アクセスやファイル改ざんのリスクを低減できます。<br>
                                    許可設定にIPアドレスを設定した場合、設定されたIPアドレスからのアクセスのみを許容し、それ以外からのアクセスはパスワードが一致した場合でも接続を拒否します。</p>
                                    <p class="note">※当設定を行っておらず、お客様にて「<a href="man_ftp_ftpaccess.php">.ftpaccess</a>」を独自に設定されていない場合はどのIPアドレスからもFTP接続が可能です。</p>
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">設定手順</h4>
                                <div class="section_body">
                                    <div class="serial-box mb30">
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.FTP制限設定を選択</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、現在の設定対象ドメインを確認後、FTP制限設定を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_1.png" alt="FTP制限設定を選択"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.FTP接続許可IPアドレスの追加</h5>
                                            <div class="box_body">
                                                <p>「FTP接続許可IPアドレス追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_2.png" alt="FTPアクセス許可IP一覧から追加設定へ"></p>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.設定対象の選択とIPアドレスの入力</h5>
                                            <div class="box_body">
                                                <p>設定対象、IPアドレスを入力し「確認画面へ進む」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_ftp_id_3.png" alt="許可IPの入力"></p>
                                                <p class="note">※お客様のご利用のプロバイダによってはIPアドレスが変動する場合があります。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>「設定対象」について</dt>
                                                    <dd>
                                                        <p>指定したIPアドレスによる接続制限を「サーバーアカウント全体」にするか「該当ドメインのみ」にするかを設定できます。</p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">「設定対象」に「サーバーアカウント全体」を指定した場合</em><br>
                                                            お客様のサーバーアカウント全体に対して制限が有効となります。
                                                        </div>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">「設定対象」に「ドメイン名」を指定した場合</em><br>
                                                            該当ドメインのフォルダに対して制限が有効となります。
                                                        </div>
                                                        <p>例えば、「example.com」に対して許可IP「192.168.1.100」を設定すると、「example.com」フォルダ以下には、IPアドレスが「192.168.1.100」の環境以外からのFTP接続ができなくなります。</p>
                                                    </dd>
                                                </dl>
                                            </div>
                                        </section>
                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4.設定完了</h5>
                                            <div class="box_body">
                                                <p>確認画面で入力内容を確認していただき、最後に「追加する」をクリックします。</p>
                                                <p>なお、FTP制限設定を設定すると、サーバー内に「.ftpaccess」が設置されます。<br>
                                                .ftpaccessファイルの詳細は<a href="man_ftp_ftpaccess.php">.ftpaccess</a>をご確認ください。</p>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b011">ファイルマネージャを利用される場合</h5>
                                        <div class="block_body">
                                            <p>FTP制限設定をした状態でファイルマネージャを利用するには、「IPアドレス」に「<em class="font-bold">127.0.0.1</em>」と記載した設定を加えてください。</p>
                                            <p class="note">※上記設定を行わなければファイルマネージャから確認ができませんので、ご注意ください。</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-b012">「IPアドレス」の指定方法について</h5>
                                        <div class="block_body">
                                            <p>社内や通信事業者などに割り当てられているIPアドレス全体からの接続を許可する場合など、「IPアドレス」を範囲で設定したい場合は、IPアドレスの先頭箇所を入力してください。</p>
                                            <div class="border border_blue">（例）「192.0.2.1」〜「192.0.2.254」を許可する場合<br>
                                            　→「192.0.2.」までを入力し設定をしてください。</div>
                                            <p class="note">※IPアドレスを範囲指定する場合、末尾は「.」で終わる必要があります。</p>
                                        </div>
                                    </section>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-c">サブFTPアカウント利用時の注意事項</h4>
                                <div class="section_body">
                                    <p>サブFTPアカウントの接続先ディレクトリを以下のように設定する場合、FTP制限設定が適用されません。</p>
                                    <div class="border border_gray mb5">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>サーバーアカウント全体</p>
                                        <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID</em>」よりも下位に指定</p>
                                        <div class="border border_blue">
                                            例）home/サーバーID/example.comを接続先ディレクトリに設定したFTPアカウントでの接続<br>
                                            　→ FTP制限設定は適用されません
                                        </div>
                                    </div>
                                    <div class="border border_gray mt20">
                                        <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>対象ドメイン名</p>
                                        <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID/対象ドメイン名</em>」よりに下位を指定</p>
                                        <div class="border border_blue">
                                            例）home/サーバーID/example.com/public_htmlを接続先ディレクトリに設定したFTPアカウントでの接続<br>
                                            　→ FTP制限設定は適用されません
                                        </div>
                                    </div>
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
                                    <li><a href="#link-a">FTP制限設定について</a></li>
                                    <li>
                                        <a href="#link-b">設定手順</a>
                                        <ol>
                                            <li><a href="#link-b1">1. FTP制限設定を選択</a></li>
                                            <li><a href="#link-b2">2.「FTP接続許可IPアドレスを追加」をクリック</a></li>
                                            <li><a href="#link-b3">3. 設定対象の選択とIPアドレスの入力</a></li>
                                            <li><a href="#link-b4">4. 設定完了</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp.php">ファイル転送（FTP）に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_setting.php">ファイル転送（FTP）の設定に関する「よくある質問」</a></li>
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ftp_trouble.php">ファイル転送（FTP）のトラブルに関する「よくある質問」</a></li>
                            </ul>

                            <section id="link-a" class="section">
                                <div class="section_body">
                                    <h4 class="section_ttl">FTP制限設定について</h4>
                                    <p>FTPでの接続が可能なIPアドレスを設定し、FTPからのアクセスを制限します。<br>
                                        これにより、不正アクセスやファイル改ざんのリスクを低減できます。<br>
                                        許可設定にIPアドレスを設定した場合、設定されたIPアドレスからのアクセスのみを許容し、それ以外からのアクセスはパスワードが一致した場合でも接続を拒否します。</p>
                                    <p class="note">※当設定を行っておらず、お客様にて「<a href="man_ftp_ftpaccess.php">.ftpaccess</a>」を独自に設定されていない場合はどのIPアドレスからもFTP接続が可能です。</p>
                                </div>
                            </section>
                            <!-- /.section -->
                            <section class="section">
                                <div class="section_body">
                                    <h4 id="link-b" class="section_ttl">設定手順</h4>
                                    <div class="serial-box mb30">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b1">1. FTP制限設定を選択</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、FTP制限設定を選択します。</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_1.png?date=2410" alt="FTP制限設定を選択"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b2">2. 「FTP接続許可IPアドレスを追加」をクリック</h5>
                                            <div class="box_body">
                                                <p>「FTP接続許可IPアドレスを追加」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_2.png?date=2410" alt="FTPアクセス許可IP一覧から追加設定へ"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b3">3. 設定対象の選択とIPアドレスの入力</h5>
                                            <div class="box_body">
                                                <p>設定対象、IPアドレスを入力し「追加する」ボタンをクリックします</p>
                                                <p><img class="img" src="../img/manual/man_ftp_id_3.png?date=2410" alt="許可IPの入力"></p>
                                                <p class="note">※お客様のご利用のプロバイダによってはIPアドレスが変動する場合があります。</p>
                                                <dl class="dl">
                                                    <dt><i class="ico ico_square-fill"></i>「設定対象」について</dt>
                                                    <dd>
                                                        <p>指定したIPアドレスによる接続制限を「サーバーアカウント全体」にするか「該当ドメインのみ」にするかを設定できます。</p>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">「設定対象」に「サーバーアカウント全体」を指定した場合</em><br>
                                                            お客様のサーバーアカウント全体に対して制限が有効となります。
                                                        </div>
                                                        <div class="border border_gray">
                                                            <i class="ico ico_circle base-color"></i><em class="font-bold">「設定対象」に「ドメイン名」を指定した場合</em><br>
                                                            該当ドメインのフォルダに対して制限が有効となります。
                                                        </div>
                                                        <p>例えば、「example.com」に対して許可IP「192.168.1.100」を設定すると、「example.com」フォルダ以下には、IPアドレスが「192.168.1.100」の環境以外からのFTP接続ができなくなります。</p>
                                                    </dd>
                                                </dl>
                                                <aside class="msg msg_caution">
                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                    <div class="msg_body">
                                                        <p>FTPアカウントの接続先ディレクトリを以下のように設定する場合、FTP制限設定が適用されません。</p>
                                                        <div class="border border_gray mb5">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>サーバーアカウント全体</p>
                                                            <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID</em>」よりも下位に指定</p>
                                                            <div class="border border_blue">例）home/サーバーID/example.comを接続先ディレクトリに設定したFTPアカウントでの接続<br>
                                                                → FTP制限設定は適用されません</div>
                                                        </div>
                                                        <div class="border border_gray">
                                                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>対象ドメイン名</p>
                                                            <p>接続先ディレクトリを「<em class="font-bold">/home/サーバーID/対象ドメイン名</em>」よりに下位を指定</p>
                                                            <div class="border border_blue">例）home/サーバーID/example.com/public_htmlを接続先ディレクトリに設定したFTPアカウントでの接続<br>
                                                                → FTP制限設定は適用されません</div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b4">4. 設定完了</h5>
                                            <div class="box_body">
                                                <p>確認画面で入力内容を確認していただき、最後に「追加する」をクリックします。</p>
                                                <p>なお、FTP制限設定を設定すると、サーバー内に「.ftpaccess」が設置されます。<br>
                                                    .ftpaccessファイルの詳細は<a href="man_ftp_ftpaccess.php">.ftpaccess</a>をご確認ください。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <section class="block">
                                        <h5 class="block_ttl">ファイルマネージャを利用される場合</h5>
                                        <div class="block_body">
                                            <p>FTP制限設定をした状態でファイルマネージャを利用するには、「IPアドレス」に「<em class="font-bold">127.0.0.1</em>」と記載した設定を加えてください。</p>
                                            <p class="note">※上記設定を行わなければファイルマネージャから確認ができませんので、ご注意ください。</p>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl">「IPアドレス」の指定方法について</h5>
                                        <div class="block_body">
                                            <p>社内や通信事業者などに割り当てられているIPアドレス全体からの接続を許可する場合など、「IPアドレス」を範囲で設定したい場合は、IPアドレスの先頭箇所を入力してください。</p>
                                            <div class="border border_blue">（例）「192.0.2.1」〜「192.0.2.254」を許可する場合<br>
                                                →「192.0.2.」までを入力し設定をしてください。</div>
                                            <p class="note">※IPアドレスを範囲指定する場合、末尾は「.」で終わる必要があります。</p>
                                        </div>
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