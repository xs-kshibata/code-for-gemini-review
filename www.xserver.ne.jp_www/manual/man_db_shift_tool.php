<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>MySQL移行ツール | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜MySQL4からMySQL5.0へのデータ移行の補助を目的とした「MySQL5.0移行ツール」の利用手順や注意事項に関するご案内です。">

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
            
                <h3 class="sub-ttl">MySQL移行ツール</h3>
                
				<div class="toc-list">
				<p class="toc-list--head">目次</p>
				<ul class="toc-list--body">
					<li><a href="#link-a">MySQL移行ツールについて</a></li>
					<li><a href="#link-b">ご利用の流れ</a>
						<ol>
							<li><a href="#link-b01">1.サーバーパネルメニュー「MySQL移行ツール」をクリックします。</a></li>
							<li><a href="#link-b02">2.「MySQL移行ツールの利用を開始する」をクリックします。</a></li>
							<li><a href="#link-b03">3.それぞれのデータベースに対して、[設定]欄にて文字コードを選択し、「移行(確認)」をクリックします。</a></li>
							<li><a href="#link-b04">4.「MySQLx.xへデータベースの追加（確定）」をクリックします。</a></li>
							<li><a href="#link-b05">5.「MySQLx.x用 phpMyAdmin」から移行後のデータベースの内容を確認します。</a></li>
							<li><a href="#link-b06">6.ご利用プログラムの設定ファイルを編集しデータベースホスト名を変更します。</a></li>
							<li><a href="#link-b07">7.(6.)変更後、該当のプログラムが正常に動作するかご確認ください。</a></li>
							<li><a href="#link-b08">8.上記(3.)〜(7.)の作業を、移行をすべてのデータベースについて実施してください。</a></li>
							<li><a href="#link-b09">9.すべてのデータベースの移行完了後、「バージョンをMySQLx.xに移行する（確認）」をクリックしてください。</a></li>
							<li><a href="#link-b010">10.「バージョンをMySQLx.xに移行する（確定）」をクリックしてください。</a></li>
						</ol>
					</li>
					<li><a href="#link-c">特定のデータベースのみ移行を中止する場合</a>
						<ol>
							<li><a href="#link-c01">1.移行先データベースの個別削除を行う場合、「DB削除（確認）」をクリックします。</a></li>
							<li><a href="#link-c02">2.削除確認画面にて「DB削除（確定）」をクリックします。</a></li>
						</ol>
					</li>
					<li><a href="#link-d">すべてのデータベース移行を中止する場合</a>
						<ol>
							<li><a href="#link-d01">1.MySQL移行ツールの利用を中止する場合、「移行を取り止め、元の状態に戻す（確認）」をクリックします。</a></li>
							<li><a href="#link-d02">2.「移行を取り止め、元の状態に戻す（確定）」をクリックします。</a></li>
						</ol>
					</li>
				</ul>
				</div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_db.php">データベースに関する「よくある質問」</a></li>
                </ul>
                
                <section id="what" class="section">
                    <h4 class="section_ttl" id="link-a">MySQL移行ツールについて</h4>
                    <div class="section_body">
                        <p>『MySQL移行ツール』は、旧バージョンのMySQLデータベースについて、最新バージョンのMySQLへの移行を補助するツールです。</p>
                        <p>
                            本ツールでは、旧バージョンのMySQLと同じ内容のデータベースとMySQLユーザを、最新バージョンに作成します。<br>
                            ご利用のプログラムにて設定のMySQLホスト名を移行先MySQLのホスト名に変更するのみで、最新バージョンのMySQLデータベースを利用することが可能になります。
                        </p>
                        
                        <p class="mb5">次の条件に該当する場合、『MySQL移行ツール』を利用することができません。</p>
                        <div class="border border_gray mb5">
                            <ul class="ul mb0">
                                <li>異なるMySQLバージョンに同名のMySQLユーザ・データベースが存在する場合</li>
                                <li>移行するデータベースの容量が2GBを超えている場合</li>
                                <li>MySQLユーザのパスワード情報が移行ができない形式で保存されている場合</li>
                            </ul>
                        </div>
                        <p class="mb20">
                            以上に該当する場合の対処方法は、お客様のご利用状況により異なります。<br>
                            詳細は、移行ツールの利用を開始する際に表示されるメッセージをご確認ください。
                        </p>
                        
                        <aside class="msg">
                            <h5 class="msg_ttl font-m"><i class="ico ico_circle"></i>『MySQL移行ツール』による移行作業中は、以下の操作をすることができません。</h5>
                            <div class="msg_body">
                                <ul class="ul">
                                    <li>MySQLデータベースの新規作成</li>
                                    <li>MySQLユーザの新規追加</li>
                                </ul>
                            </div>
                        </aside>
                        
                        <p class="mt30">
							ご利用可能なMySQLの最新バージョンは、ご利用のサーバーにより異なります。<br>
							マニュアルにて「MySQLx.x」と記載のある個所は、ご利用の環境に応じた最新バージョンが実際の画面上に表示されます。
						</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="flow" class="section">
                    <h4 class="section_ttl" id="link-b">ご利用の流れ</h4>
                    <div class="section_body">
                    
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.サーバーパネルメニュー「MySQL移行ツール」をクリックします。</h5>
                                <div class="box_body">
                                    <p>(現在、旧バージョンのMySQLをご利用の場合は「MySQL移行ツール」のメニューが表示されます。)</p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_1.png?date=20221020" alt="「MySQL移行ツール」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.「MySQL移行ツールの利用を開始する」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_2.png?date=20220426" alt="「MySQL移行ツールの利用を開始する」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.それぞれのデータベースに対して、[設定]欄にて文字コードを選択し、「移行(確認)」をクリックします。</h5>
                                <div class="box_body">
                                    <p>
                                        移行時にデータベースの文字コードを変換することが可能です。<br>
                                        ご利用のプログラムにおいて、使用する文字コードの指定がない場合は「UTF-8」をお選びください。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_3.png?date=20220426" alt="文字コードを入力し、「移行(確認)」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.「MySQLx.xへデータベースの追加（確定）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_4.png?date=20220426" alt="情報確認後、確定ボタンをクリック"></p>
                                    <p>
                                        以上の処理で、選択したデータベースが最新バージョンのMySQLに移行が完了します。<br>
                                        次に移行が完了したデータベースの内容の確認を行います。
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.「MySQLx.x用 phpMyAdmin」から移行後のデータベースの内容を確認します。</h5>
                                <div class="box_body">
                                    <p>
                                        移行が完了したMySQLデータベースの内容をphpMyAdminで確認することができます。<br>
                                        [ MySQLx.x用 phpmyadmin ]を利用し、データベースの内容を確認します。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_5.png?date=20220426" alt="データベースの内容を確認"></p>
                                    <p>
                                        phpMyAdminのログインには、「MySQLユーザー名」と同「パスワード」が必要です。<br>
                                        ご不明な場合は次の項目に進み、ご利用のプログラムにおける表示内容でご確認ください。
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b06">6.ご利用プログラムの設定ファイルを編集しデータベースホスト名を変更します。</h5>
                                <div class="box_body">
                                    <p>
                                        旧バージョンのMySQLを利用していたプログラムの設定ファイルにある『MySQLホスト名』を、『最新バージョンのMySQLホスト名』に変更します。<br>
                                        自動インストール機能をご利用の場合、インストール先フォルダにある以下の設定ファイルをご変更ください。
                                    </p>
                                    <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>変更対象の設定ファイル</dt>
                                    <dd>
                                        <table class="table break-word">
                                            <tbody>
                                                <tr>
                                                    <th>WordPress</th>
                                                    <td>wp-config.php</td>
                                                </tr>
                                                <tr>
                                                    <th>EC-CUBE 3</th>
                                                    <td>/app/config/eccube/database.yml</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                    <dt><i class="ico ico_square-fill"></i>変更する箇所</dt>
                                    <dd>
                                        <p>
                                            設定ファイルに記載の『MySQLホスト名』になります。旧バージョンのMySQLホスト名と最新バージョンのMySQLホスト名は、それぞれMySQL移行ツール内の「<em class="font-bold">移行時に必要な作業について</em>」に記載があります。
                                        </p>
                                        <p><img class="img" src="../img/manual/man_db_shift_tool_12.png?date=20220426" alt="移行時に必要な作業について"></p>
                                    </dd>
                                </dl>
                                    <p>
                                        移行に伴う設定ファイルの修正箇所は『MySQLホスト名』のみとなります。<br>
                                        本ツールを用いた移行において、「データベース名」と「MySQLユーザー名」の変更はありません。
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b07">7.(6.)変更後、該当のプログラムが正常に動作するかご確認ください。</h5>
                                <div class="box_body">
                                    <p>正常な動作、コンテンツの表示を確認しましたら、最新バージョンへの移行が完了しております。</p>
                                    <p>
                                        なお、移行ツールを使用してもご利用のプログラムが正常に機能しない場合、移行を取り消し、移行前のバージョンで引き続き利用することも可能です。<br>  
                                        移行の取り消す手順詳細は 「<a href="#cancel">移行を取り消す場合</a>」をご参照ください。
                                    </p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b08">8.上記(3.)〜(7.)の作業を、移行をすべてのデータベースについて実施してください。</h5>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b09">9.すべてのデータベースの移行完了後、「バージョンをMySQLx.xに移行する（確認）」をクリックしてください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_6.png?date=20220426" alt="すべてのデータベースを移行後、ボタンをクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-b010">10.「バージョンをMySQLx.xに移行する（確定）」をクリックしてください。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_7.png?date=20220426" alt="内容をご確認の上、確定ボタンをクリック"></p>
                                    <p>以上で、最新バージョンのMySQLへの移行作業は完了です。 </p>
                                    <aside class="msg msg_caution mb0">
                                        <h6 class="msg_ttl font-m"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                        <div class="msg_body">
                                            <p>
												移行を確定する時点で、旧バージョンのデータベースをすべて削除します。<br>
												削除されたデータベースは、自動バックアップ機能からの復元もできません。<br>
												MySQLホスト名の変更が未完了のプログラムが残存していないことをご確認ください。
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="cancel" class="section">
                    <h4 class="section_ttl" id="link-c">特定のデータベースのみ移行を中止する場合</h4>
                    <div class="section_body">
                        
                        <p>特定のデータベースのみ移行を中止する場合の手順です。</p>
                        
                        <p>
                            この操作により、最新バージョンのMySQLから選択したデータベースが削除されます。<br>
                            利用のプログラムにおいて『MySQLホスト名』を変更した場合、『旧バージョンのMySQLホスト名』に変更してください。
                        </p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.移行先データベースの個別削除を行う場合、「DB削除（確認）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_8.png?date=20220426" alt="「DB削除(確認)」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.削除確認画面にて「DB削除（確定）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_9.png?date=20220426" alt="情報確認後、確定ボタンをクリック"></p>
                                </div>
                            </section>
                        </div>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="allcancel" class="section">
                    <h4 class="section_ttl" id="link-d">すべてのデータベース移行を中止する場合</h4>
                    <div class="section_body">
                        
                        <p>
                            すべてのデータベース移行を中止する場合の手順です。<br>
                            この操作により、本ツールで作成した最新バージョンのMySQLデータベースおよびMySQLユーザは、すべて削除されます。
                        </p>
                        
                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-d01">1.MySQL移行ツールの利用を中止する場合、「移行を取り止め、元の状態に戻す（確認）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_10.png?date=20220426" alt="「移行を取り止め、元の状態に戻す（確認）」をクリック"></p>
                                </div>
                            </section>
                        
                            <section class="box">
                                <h5 class="box_ttl" id="link-d02">2.「移行を取り止め、元の状態に戻す（確定）」をクリックします。</h5>
                                <div class="box_body">
                                    <p><img class="img" src="../img/manual/man_db_shift_tool_11.png?date=20220426" alt="移行を取り止め、元の状態に戻す（確定）」をクリック"></p>
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