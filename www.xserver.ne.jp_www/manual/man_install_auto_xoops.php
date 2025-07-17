<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XOOPS Cube 簡単インストール手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜簡単インストール機能で「XOOPS Cube」を設置するための手順を記載しています。エックスサーバーでは簡単な操作で「XOOPS Cube」を設置できる「簡単インストール」機能を提供しています。">

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
            
                <h3 class="sub-ttl">XOOPS Cube</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XOOPS Cube 簡単インストール はじめに</a></li>
                    <li><a href="#link-b">簡単インストール手順</a>
                        <ol>
                            <li><a href="#link-b01">1.XOOPS Cubeのインストール設定</a></li>
                            <li><a href="#link-b02">2.確認し間違いがなければ「インストール」を押してください。</a></li>
                            <li><a href="#link-b03">3.完了画面が表示されればインストール完了です。</a></li>
                            <li><a href="#link-b04">4.インストール確認</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">[参考] MySQL（データベース）の設定</a>
                        <ol>
                            <li><a href="#link-c01">1.MySQLの追加</a></li>
                            <li><a href="#link-c02">2.MySQLユーザの追加</a></li>
                            <li><a href="#link-c03">3.MySQLアクセス権の設定</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">XOOPS Cube 簡単インストール はじめに</h4>
                    <div class="section_body">
                    
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>本機能のご利用について</h5>
                            <div class="msg_body">
                                <p>XOOPS Cubeの簡単インストール機能は、サーバー番号がsv1〜sv1999における一部のサーバーでのみ利用することができます。</p>
                                <p>
                                    弊社では2017年11月より、ご利用のサーバー番号ごとにハードウェアの大幅増強および最新サーバー環境への移行メンテナンスを順次、実施しております。<br>
                                    このメンテナンス作業を完了しますと、XOOPS Cubeを利用することができなくなります。
                                </p>
                                <p>メンテナンスの実施状況は、<a href="https://www.xserver.ne.jp/news_detail.php?view_id=4057">移行スケジュールについて</a>をご参照ください。</p>
                            </div>
                        </aside>
                        
                        <p>お客様側での、パッケージのご用意は必要ありません。<br>
                        なお、インストール後の設定等に関するサポートは行っていません。</p>
                        <table class="table table_use-caption break-word">
                            <caption>XOOPS Cube 簡単インストール 設定例</caption>
                            <tbody>
                                <tr><th class="w20per w30per-s">サーバーID</th><td>xsample</td></tr>
                                <tr><th>ドメイン名</th><td>example.com</td></tr>
                                <tr>
                                    <th>インストールディレクトリ</th>
                                    <td><p class="mb5">/home/xsample/example.com/public_html/xoops</p>
                                        <div class="border border_gray">
                                            [http://example.com]にてXOOPS Cubeにアクセスを希望する場合は[/home/xsample/example.com/public_html/]をインストールディレクトリに指定する必要があります。
                                        </div>
                                    </td>
                                </tr>
                                <tr><th>インストールURL</th><td>http://example.com/xoops/</td></tr>
                            </tbody>
                        </table>
                        
                        <table class="table table_use-caption">
                            <caption>XOOPS Cube 簡単インストール 動作環境</caption>
                            <tbody>
                                <tr><th class="w20per w30per-s">PHPバージョン</th><td>PHP 5.1.6 〜 5.3.3
                                <p class="note">※PHP動作バージョンの変更は、マニュアル「<a href="man_program_php_ver.php">PHPバージョン切り替え</a>」をご参照ください</p>
                                <p class="note mb0">※サードパーティのモジュールの中には、PHP 5.3 に対応していないものがありますので、ご注意ください。</p>
                                </td></tr>
                                <tr><th>データベース</th><td>MySQL5.5<p class="note mb0">※文字コードを EUC-JP に設定してください。</p></td></tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">簡単インストール手順</h4>
                    <div class="section_body">
                    
                        <aside class="msg msg_notice">
                            <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>インストール作業を始める前に　(データベースの作成について)</h5>
                            <div class="msg_body">
                                <p>本マニュアルでは、プログラムのインストールと同時に、使用するデータベースを自動生成する、より簡単な方法をご案内しています。<br>
                                データベースを手動で用意する場合には、簡単インストールを行う前に、「<a href="#link-c">MySQL(データベース)の設定</a>」の項目をご参考の上、予めデータベースを作成しておいてください。</p>
                            </div>
                        </aside>
                        
                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>より簡単インストール→プログラムのインストールをクリックしてください。</p>
                        <p><img class="img" src="../img/manual/man_install_auto_other_1.png?date=210609" alt="簡単インストールにフォーカスしたスクリーンショット"></p>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.XOOPS Cubeのインストール設定</h5>
                                <div class="box_body">
                                    <p>XOOPS Cube のインストール設定をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_1.png" alt="インストール設定をクリック"></p>
                                    <p>各項目を入力し、最後に「インストール」を押してください。</p>
                                    
                                    <table class="table table_use-caption break-word">
                                        <caption>XOOPS Cubeのインストール設定</caption>
                                        <tbody>								                     
                                            <tr>
                                                <th class="w20per w30per-s">インストールURL</th>
                                                <td><p class="mb5">お客様のドメイン名/xoops</p>
                                                    <div class="border border_gray">
                                                        [http://お客様のドメイン名]にて、お客様のXOOPS Cubeにアクセスを希望する場合は[xoops]の部分を空欄としてください。
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><th>XOOPS用メールアドレス</th><td>任意のメールアドレスを設定してください</td></tr>
                                            <tr><th>XOOPS用パスワード</th><td>XOOPSの初期ログインパスワード</td></tr>
                                            <tr>
                                                <th>データベース</th>
                                                <td>
                                                    <p>利用するデータベースを指定します。<br>
                                                    特に利用予定のデータベースが無く、今回新たに作成する場合は、「<em class="font-bold">自動でデータベースを生成する</em>」を選択してください。</p>
                                                    <aside class="msg msg_notice mb0">
                                                        <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>すでに作成済みのデータベースを利用する場合</h6>
                                                        <div class="msg_body">
                                                            <p>すでに作成済みのデータベースを利用する場合は、「作成済みのデータベースを利用する」を選択してください。<br>
                                                            この場合は、下記の項目をご入力ください。</p>
                                                            <dl class="dl">
                                                                <dt><i class="ico ico_square-fill"></i>データベース名</dt>
                                                                <dd>
                                                                    <p>利用するデータベースを指定してください。<br>
                                                                    例)xsample_xoops</p>
                                                                </dd>
                                                                <dt><i class="ico ico_square-fill"></i>データベースユーザー名</dt>
                                                                <dd>
                                                                    <p class="mb0">データベースユーザを指定してください。<br>
                                                                    例)xsample_user</p>
                                                                </dd>
                                                                <dt><i class="ico ico_square-fill"></i>データベース用パスワード</dt>
                                                                <dd>上記で指定したデータベースユーザー名のパスワードを入力してください。</dd>
                                                            </dl>
                                                            
                                                            <p>データベースの作成については「<a href="#link-c">MySQL(データベース)の設定</a>」の項目をご参照ください。</p>
                                                        </div>
                                                    </aside>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_2.png" alt="XOOPS Cube設定画面のスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.確認し間違いがなければ「インストール」を押してください。</h6>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.完了画面が表示されればインストール完了です。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_3.png" alt="XOOPS Cubeインストール完了画面のスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.インストール確認</h5>
                                <div class="box_body">
                                    <p>表示されているリンクからXOOPS Cubeホームページへ移動します。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_4.png" alt="アクセス制限ユーザ設定画面のスクリーンショット"></p>
                                    <p>以上でXOOPSの導入は終了になります。お疲れ様でした。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                
                
                <section class="section">
                    <h4 id="link-c" class="section_ttl">[参考] MySQL（データベース）の設定</h4>
                    <div class="section_body">
                        
                        <p>簡単インストールをする前に、XOOPS Cubeで利用するデータベースを新規作成します。</p>
                        <p><img class="img" src="../img/manual/man_install_auto_2.png" alt="MySQLの設定にフォーカスしたスクリーンショット"></p>
                        
                        <div class="serial-box mb10">
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.MySQLの追加</h5>
                                <div class="box_body">
                                    <p>XOOPSで利用するデータベースを追加します。ご利用になられるデータベース名を指定し、「MySQLの追加」ボタンをクリックしてください。本マニュアルではデータベース名を 「xsample_xoops」 として作成します。</p>
                                    <p class="note">※データベース名は「お客様のサーバID_データベース名」となります。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_5.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.MySQLユーザの追加</h5>
                                <div class="box_body">
                                    <p class="mb0">作成したデータベースにアクセスするためのMySQLユーザを追加します。</p>
                                    <p class="note">※追加済みのMySQLユーザを利用する場合は、MySQLアクセス権の設定に進んでください。</p>
                                    <p class="mb0">ご利用になられるユーザー名とパスワードを設定します。ユーザの追加ボタンをクリックしてください。本マニュアルではユーザー名を「xsample_user」として作成します。</p>
                                    <p class="note">※データベース名と同様に、ユーザー名は「お客様のサーバID_ユーザー名」となります。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_3.png" alt="MySQLの追加にフォーカスしたスクリーンショット"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h5 class="box_ttl" id="link-c03">3.MySQLアクセス権の設定</h5>
                                <div class="box_body">
                                    <p>「MySQLの一覧」から作成したデータベースにアクセス権を追加します。アクセス権未所有ユーザから追加したいMySQLユーザを選択し追加ボタンをクリックしてください。本マニュアルでは「xsample_xoops」に「xsample_user」を追加します。</p>
                                    <p><img class="img" src="../img/manual/man_install_auto_xoops_6.png" alt="MySQLの設定画面：MySQLのユーザの一覧にフォーカスしたスクリーンショット"></p>
                                    <p>以上でMySQLの設定は完了です。<br>
                                    以降は、「<a href="#i1">簡単インストール手順</a>」に沿って、インストールを行ってください。</p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                        
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