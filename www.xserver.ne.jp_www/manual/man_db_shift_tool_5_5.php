<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQL5.5移行ツール | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜旧バージョンのMySQLからMySQL5.5へのデータ移行の補助を目的とした「MySQL5.5移行ツール」の利用手順や注意事項に関するご案内です。">

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
            
                <h3 class="sub-ttl">MySQL5.5移行ツール</h3>
                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl">MySQL5.5移行ツール</h4>
                    <div class="section_body">
                        <p>MySQL5.5移行ツールは、旧バージョンのMySQLからMySQL5.5へのデータ移行の補助を目的としたツールです。<br>
                        移行ツール使用中は、一時的に旧バージョンのMySQLとMySQL5.5の両方に接続可能な状態となりますので、スムーズな移行作業が可能となります。</p>
                        <p>移行の際には、旧バージョンのMySQLと同じ内容のデータベースとデータベースユーザがMySQL5.5にも作成され、ご利用のプログラムにて設定されているデータべースホスト名をMySQL5.5の値に変更していただくだけで、移行作業を完了させることができます。<br>
                        また、データベース毎に文字コードを指定した上でMySQL5.5へ移行することも可能です。</p>
                        <p class="note">※移行ツール使用中は、データベースとデータベースユーザの作成が行えなくなりますのでご注意ください。</p>
                        <p class="note">※MySQL5.5ユーザ・データベースが一つでも作成してある状態では移行ツールは利用できません。事前にバックアップをとった上で、全てのMySQL5.5ユーザ・データベースを削除してください。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl">ご利用の流れ</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl">1. サーバーパネルメニュー「MySQL5.5移行ツール」をクリックします。</h5>
                                <div class="box_body">
                                    <p>(現在、旧バージョンのMySQLをご利用の場合は「MySQL5.5移行ツール」のメニューが表示されます。)</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_1.png" alt="「MySQL5.5移行ツール」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">2.「MySQL5.5移行ツールの利用を開始する」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_2.png" alt="「MySQL5.5移行ツールの利用を開始する」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">3. それぞれのデータベースに対して、[設定]欄にて文字コードを選択し、「移行(確認)」をクリックします。</h5>
                                <div class="box_body">
                                    <p class="note">※文字コードはお客様ご利用のプログラムや環境によって異なります。<br>
                                    特に文字コードの指定がない場合は「EUC-JP」をお選びください。</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_3.png" alt="文字コードを入力し、「移行(確認)」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">4. 「MySQL5.5へデータベースの追加（確定）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_4.png" alt="情報確認後、確定ボタンをクリック"></p>
                                    <p>以上の処理でデータベースが一つMySQL5.5へと移行されました。<br>
                                    次に移行されたデータベースの内容の確認を行います。</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">5. 「MySQL5.5用 phpmyadmin」から移行後のデータベースの内容を確認します。</h5>
                                <div class="box_body">
                                    <p>移行処理を行ったMySQL5.5データベースを[ MySQL5.5用 phpmyadmin ]を利用して、日本語が文字化けしていないかなどを確認します。</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_5.png" alt="データベースの内容を確認"></p>
                                    <p>phpmyadminには、「データベースユーザー名」と「データベースユーザーのパスワード」を入力することでログインが可能です。</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">6. ご利用プログラムの設定ファイルを編集しデータベースホスト名を変更します。</h5>
                                <div class="box_body">
                                    <p>移行後のデータベースの中身に問題がない場合、旧バージョンのMySQLを利用していたプログラムの設定ファイルにあるデータベースホスト名を、MySQL5.5のデータベースホスト名へ変更します。</p>
                                    <p>設定ファイルについては、自動インストール機能をご利用の場合、インストール先フォルダの下記ファイルをご変更ください。</p>
                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>変更先ファイル</dt>
                                        <dd>
                                            <table class="table break-word">
                                                <tbody>
                                                    <tr>
                                                        <th>WordPress</th>
                                                        <td>wp-config.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>XOOPS</th>
                                                        <td>mainfile.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>OsCommerce</th>
                                                        <td>admin/includes/configure.php<br>catalog/includes/configure.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>ZenCart</th>
                                                        <td>admin/includes/configure.php<br>includes/configure.php</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Movable Type</th>
                                                        <td>mt-config.cgi<br>(手動インストールにてMySQLを使用の場合)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>変更する箇所</dt>
                                        <dd>
                                            <p>旧バージョンのMySQLホスト名とMySQL5.5ホスト名は、それぞれMySQL移行ツール内の「<em class="font-bold">■使用について</em>」に記載があります。</p>
                                            <p>sv300以前のサーバーにてMySQL4.0.xをご利用のお客様は以下のようにします。<br>
                                            <em class="font-bold">MySQLホスト名：「localhost」→「お客様のMySQL5.5サーバーのホスト名」</em></p>
                                        </dd>
                                    </dl>
                                    <p>データベース名とデータベースユーザー名は同じ内容でMySQL5.5へ移行されるため、移行に伴う設定ファイルの修正箇所はデータベースホスト名だけです。</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">7. (6.)変更後、該当のプログラムが正常に動作するかご確認ください。</h5>
                                <div class="box_body">
                                    <p class="note">※移行処理中では、旧バージョンのMySQLに戻すことも可能です。<br>
                                    そのため、もし移行ツールを使用してもご利用のプログラムが正常に機能しない場合は、一度移行作業を終了し旧バージョンに戻していただくことをお勧めします。</p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">8. 上記(3.)〜(7.)の作業を、移行をご希望のデータベース分だけ実施してください。</h5>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">9. ご希望の全てのデータベースの移行完了後、「バージョンをMySQL5.5に移行する（確認）」をクリックしてください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_6.png" alt="全てのデータベースを移行後、ボタンをクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl">10. 「バージョンをMySQL5.5に移行する（確定）」をクリックしてください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5_5_7.png" alt="内容をご確認の上、確定ボタンをクリック"></p>
                                    <p>以上で、MySQL5.5への移行作業は完了です。</p>
                                    <aside class="msg msg_caution mb0">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>この作業の確定とともに旧バージョンのデータベースが全て削除されます。<br>
                                            移行しなかったデータベースの復元も行えませんので、ご利用プログラムの移行状況を十分ご確認の上、作業を行ってください。</p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
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