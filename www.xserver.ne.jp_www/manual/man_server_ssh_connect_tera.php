<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SSHソフトの設定(Tera Term)  | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「Tera Term」を用いてお客様のサーバーアカウントへSSH接続するための手順をご案内しています。">

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
            
                <h3 class="sub-ttl">SSHソフトの設定(Tera Term)</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">SSHソフトの設定(Tera Term)</a>
                        <ol>
                            <li><a href="#link-a01">1.「SSH Authentication...」を選択</a></li>
                            <li><a href="#link-a02">2.「Use RSA/DSA/ECDSA key to log in」を選択し、「Private key file:」をクリック</a></li>
                            <li><a href="#link-a03">3.必要項目の入力</a></li>
                            <li><a href="#link-a04">4.必要項目の入力・選択</a></li>
                            <li><a href="#link-a05">5.接続完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">SSHソフトの設定(Tera Term)</h4>
                    <div class="section_body">
                    
                        <table class="table table_use-caption">
                            <caption>SSHアカウント情報</caption>
                            <tbody>
                                <tr>
                                    <th>サーバー（ホスト名）</th>
                                    <td>
                                        サーバーID.xsrv.jp（お客様の初期ドメイン）
                                        <p class="note">※ホスト名（sv***.xserver.jp）でも設定が可能です。</p>
                                        <p>例：xsample.xsrv.jp</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>ユーザー名</th>
                                    <td>サーバーID<br>例：xsample</td>
                                </tr>
                                <tr>
                                    <th>認証方式</th>
                                    <td>公開鍵認証<br>※パスワード認証は利用できません。</td>
                                </tr>
                                <tr>
                                    <th>接続ポート</th>
                                    <td>10022</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <ul class="note-list note-list_margin mb30">
                            <li>※こちらの手順はバージョン4.75にて記載しています。</li>
                            <li>※文中の画像は、お使いのOSやバージョンにより文言等が一部異なる場合があります。</li>
                        </ul>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.「SSH Authentication...」を選択</h6>
                                <div class="box_body">
                                    <p class="mb0">Tera Termを起動し、「setup」メニューから「SSH Authentication...」を選択します。</p>
                                    <p class="note">※Tera Term起動直後はNew connectionウィンドウが表示される場合があります。こちらのウィンドウが表示されましたら、「Cancel」ボタンをクリックしてウィンドウを閉じてください。</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_1.png" alt="Tera Term SSH Authenticationメニュー"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.「Use RSA/DSA/ECDSA key to log in」を選択し、「Private key file:」をクリック</h6>
                                <div class="box_body">
                                    <p>TTSSH: Authentication Setupウィンドウが表示されますので、「Use RSA/DSA/ECDSA key to log in」を選択し、「Private key file:」ボタンをクリックします。<br>
                                    秘密鍵を選択するダイアログが表示されますので、「<a href="man_server_ssh.php#link-c01">サーバー上で公開鍵認証用鍵ペアの生成を行う場合</a>」の手順4にてダウンロードを行った（「サーバーID」.key）ファイル又は「<a href="man_server_ssh.php#link-c02">公開鍵登録・更新</a>」にて登録されました公開鍵に対応するお手元の秘密鍵を指定し、「OK」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_2.png" alt="TTSSH: Authentication Setup画面"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.必要項目の入力</h6>
                                <div class="box_body">
                                    <p>「File」メニューから「New connection」をお選びいただき、「New connection」ウィンドウを開きます。<br>
                                    「New connection」ウィンドウにてHostにお客さまの初期ドメイン名、TCP port#に「10022」をご入力いただき、下記項目をお選びの上、「OK」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_3.png?date=210406" alt="Tera Term New connection"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.必要項目の入力・選択</h6>
                                <div class="box_body">
                                    <p>SSH Authenticationウィンドウが表示されますので、「User name」にお客さまのサーバーID、「Passphrase」に選択した秘密鍵のパスフレーズを入力し、「Use RSA/DSA/ECDSA key to log in」が選択されている事を確認して「OK」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_4.png" alt="SSH Authentication"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-a05">5.接続完了</h6>
                                <div class="box_body">
                                    <p>Tera Term VTのウィンドウにて下記のプロンプトが表示され接続完了です。</p>
                                    <p><img class="img" src="../img/manual/man_server_ssh_connect_tera_5.png" alt="プロンプト表示"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                        <div class="border border_gray">
                            <p class="link mb0"><i class="ico ico_square-fill"></i>関連：<a href="man_server_ssh.php">SSH設定</a><i class="ico ico_chevron-right"></i></p>
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