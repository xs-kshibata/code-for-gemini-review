<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>新サーバーの移行メンテナンス - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜エックスサーバーの新サーバーの移行メンテナンスについて。">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix mt40">
        
            <section class="col-main">


            
                <h3 class="sub-ttl">新サーバーの移行メンテナンス</h3>

                <div class="border border_gray">
                    <b>※2017年11月実施の「新サーバー移行メンテナンス」に関するよくある質問です。</b>
                    </div>
                
                <div class="faq">
                    <dl id="01" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行メンテナンスのスケジュールの通知がきたのですが、何をすればいいですか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>お知らせのスケジュールにて、お客様のご利用サーバーをより高機能な最新のサーバー環境へ移行いたしたます。<br>
                               お客様による作業はございませんが、サーバーの仕様が最新の仕様となりますので<a href="../../spec_replace.php">移行メンテナンス後のサービス仕様</a>や<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>、<a href="../../manual/man_program_php_ver.php">PHPのバージョン</a>、<a href="../../manual/man_install_outside_program.php">動作確認済みプログラム</a>などを、あらかじめご参照ください。
							</p>
                            </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="02" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移転前と移転後におけるサーバーの仕様に変更はありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>はい、移転後のサーバー仕様について変更点はございます。<br>
                               主にapacheバージョンが2.2.xから2.4.xに変更となることや、通信プロトコルHTTP/1.1からHTTP/2への対応となるほか、ライブラリやコマンドラインについても変更がございます。<br>
                               詳細については、<a href="../../spec_replace.php">移行メンテナンス後のサービス仕様</a>や<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>、<a href="../../manual/man_program_php_ver.php">PHPのバージョン</a>、<a href="../../manual/man_install_outside_program.php">動作確認済みプログラム</a>などをご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="03" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>メンテナンス実施予定日にサーバーが停止しないような回避策はありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>事前に「<a href="../../manual/man_order_servertransfer_intro.php">新サーバー簡単移行</a>」にて、手動で移行していただいた場合には、サーバー停止の時間はございません。また、動作確認を事前にすることも可能です。<br>
                            なお、「<a href="../../manual/man_order_servertransfer_intro.php">新サーバー簡単移行</a>」は、メンテナンス実施に伴い以下の日程でご利用いただけなくなります。<br>
                                <a href="https://www.xserver.ne.jp/information_detail.php?view_id=4057">メンテナンス実施予定日</a>をご一読の上、1か月前を目安にご利用いただきますようお願いいたします。</p>
                                <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>移行ツールの新規ご利用</dt>
                                <dd>メンテナンス実施の21日前から利用停止</dd>
                            </dl>
                           <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>移行ツール自体のご利用</dt>
                                <dd>メンテナンス実施の14日前から利用停止</dd>
                            </dl>
                        <p>
                        詳細は<a href="../../manual/man_order_servertransfer_intro.php">新サーバー簡単移行</a>の流れや、<a href="../../manual/man_order_servertransfer_flow.php">ご利用手順</a>などをご参照ください。
                        </p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
            
                    <dl id="04" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>利用しているサーバーの番号はどのように確認すればいいですか?</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>以下のいずれかの箇所でご確認いただけます。</p>                            
                            <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウントの場合</dt>
                                <dd>
									<p>以下のいずれかの箇所でご確認いただけます。</p>
									<ul class="list list_arrow-right">
                                        <li>XServerアカウント内、エックスサーバー契約管理ページ &gt; 料金支払い &gt; お支払い/請求書発行ページ下部にある「料金のお支払い手続き」の「サーバー番号」欄</li>
                                        <p class="mt5"><img class="img" src="../../img/faq/faq_service_server2.png?date=20220216" alt="料金のお支払い手続きから契約情報を確認しているスクリーンショット"></p>
                                        <li class="mt30">XServerアカウント内、エックスサーバー契約管理ページの「契約情報」にある「サーバー番号」欄<br>
										<p class="mt5"><img class="img" src="../../img/faq/faq_contract_alteration3.png?date=20220216" alt="契約情報をクリックしているスクリーンショット"></p>
                                            <p class="mt5"><img class="img" src="../../img/faq/faq_service_server3.png?date=20220216" alt="契約情報を確認しているスクリーンショット"></p>
										</li>
										
									</ul> 
                                </dd>
                            </dl>
                                        <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネルの場合</dt>
                                <dd><p>サーバーパネルへとログイン後、「アカウント > サーバー情報」へお進みください。「サーバー番号」の欄にてご確認いただけます。</p>
                                </dd>
                            </dl>            
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                        <dl id="05" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行後にホームページへアクセスするとファイルのダウンロードが始まってしまいます。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>.htaccessファイルにおいて、「AddType」ディレクティブの記述に誤りがある場合は、コンテンツの表示ではなく、ファイルのダウンロードが実行されてしまいます。</p>
                             <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>誤った記述の例</dt>
                                <dd><p>AddType application/x-httpd-php .php .html</p>
                                </dd>
                            </dl>  
                            <p>.htaccessファイルに上記の記述がある場合は、「削除」もしくは「該当行の冒頭に＃を追記して無効化する」のいずれかにて、改善するかをお試しください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
        
                        <dl id="06" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行後、.html拡張子でPHPプログラムが動作しなくなってしまいました。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>.htaccessにて、AddTypeなどの「.html拡張子でPHPプログラムを動作させる設定」を記述している場合は、新サーバー環境においては記述の修正が必要です。<br>
                            移行メンテナンス時には上記の補正も自動で対応しておりますが、.htaccessに書き込みを許可していないなどのカスタマイズをされている場合は、移行時に補正が働かず、正常に挙動しなくなるといったケースもございます。<br>
                            その場合は、<a href="../../manual/man_server_htaccess.php#link-b">.htaccess編集</a>より、該当の記述を以下の内容に差し替えてください。</p>
                             <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>正しい記述の例</dt>
                                <dd><p>AddHandler fcgid-script .htm .html</p>
                                </dd>
                            </dl>  
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                            <dl id="07" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>cron / SSH でPHPプログラムが動作しなくなってしまいました。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>サーバー環境の仕様変更により、コマンドパスが変更になっている可能性がございます。<br>
                            問題切り分けのため、<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>をご確認いただき、パスに相違があれば修正をすることで改善されるかをお試しください。
                            </p>   
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                        <dl id="08" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行後から、サイトの一部または全てが文字化けしています。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>新環境のサーバーでは、MySQLデータベースに含まれる文字をWEBサイトに出力する場合、文字コードを正確に指定されていないと文字化けが発生してしまいます。文字化けが発生してしまう場合は、まず下記二点のご確認をお願いいたします。 </p>   
                           <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネル「php.ini設定」からPHPの文字コードに関する設定を見直す。</dt>
                                <dd>
                                    <p><b>【対象となる設定の例】</b></p>
                                    <p>
                                　mbstring.language<br>
                                　mbstring.internal_encoding<br>
                                　mbstring.http_input<br>
                                　mbstring.http_output<br>
                                　mbstring.encoding_translation<br>
                                　mbstring.detect_order<br>
                                　mbstring.substitute_character</p>
                                </dd>
                                </dl>
                            <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>PHPプログラムで文字コードを正しく指定する。</dt>
                                <dd>
                                    <p>例【mysql_set_charset("utf8");】など</p>
                                </dd>
                            </dl>
                            <p>上記2通りの両方を試しても解決しない場合、稀ではございますが、ご利用のプログラムが新環境のデータベース「MariaDB 5.5」に対応していない可能性がございます。<br>
                            その場合は、移行後のMariaDB 5.5(旧MySQL5.5)のデータベースをエクスポートしていただき、サーバーパネル『MySQL設定』から新規にMySQL5.7のデータベースを作成していただいたものへインポートすることで文字化けが解決される可能性がございます。
</p>
                            <p>※ 読み込むデータベースの設定もご変更いただく必要がございます。<br>
                            ※ 必ずデータベースのバックアップをした上で作業を行うようご注意ください。データベースのバックアップはサーバーパネル「MySQL設定」の「MySQLバックアップ」から可能です。
</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                        <dl id="09" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行後から403エラーが発生しています。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>新サーバー移行メンテナンスの直後から403エラーが発生している場合、.htaccessの記述が影響していることがあります。<br>
                            例えば、.htaccessに「Optionsディレクティブ」を記述していると＋―での設定を記述しなければ、最新サーバー環境では動作しません。<br>
                            該当の記述を削除するか、項目名の先頭に「＋」を追記してください。
                            </p>
                             <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>変更前</dt>
                                <dd>
                                Options FollowSymLinks<br>
                                    Options SymLinksIfOwnerMatch
                                </dd>
                            </dl>  
                            <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>変更後</dt>
                                <dd>
                                Options +FollowSymLinks<br>
                                Options +SymLinksIfOwnerMatch
                                </dd>
                            </dl>  
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                            <dl id="10" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行後から500エラーが発生しています。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>新サーバー移行メンテナンス直後から500エラーになる場合、.htaccessの記述が影響していることがあります。<br>
                           .html拡張子でPHPプログラムを動作する記述をしている場合は、以下に差し替えるなどの対応をしてください。</p>
                           <dl class="border border_gray">
                                <dt class="mb10"><i class="ico ico_square-fill"></i>正しい記述の例</dt>
                                <dd>
                                 AddHandler fcgid-script .htm .html
                                </dd>
                            </dl> 

                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                    <dl id="11" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行メンテナンス前のアクセスログを確認することができません。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>移行メンテナンス実施直前のアクセスログは確認することができず実施後にダウンロードすることもできません。<br>
                            恐れ入りますが、必要な場合はメンテナンス予定時刻までにあらかじめダウンロードをしていただきますようお願いいたします。
                            </p>

                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
            
                    
                    <dl id="12" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>既存のMySQLデータベースをMySQL 5.7に移行することはできますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>メンテナンス実施に伴い、MariaDB 5.5へ自動的に移行となるため、メンテナンス後に『MySQL 5.7移行ツール』を用いて、MySQL 5.7へ移行することができます。
</p>
</dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                            <dl id="13" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>MySQL5.0からMariaDB5.5に移行されることで、動作しなくなることはありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>移行済みサーバーの実績から申し上げても、動作しなくなるようなことはほぼございません。WordPressやEC-CUBE、Movable Typeなどの著名なCMSにおいては、問題なく動作しております。<br>
                            イレギュラーとして、自作のサーバープログラムや長く更新されていないCMSにおいて、MySQL 5.5で廃止された古い記述がございますと、動作に影響することがございます。</p>
                            <p>※移行メンテナンスによる「MySQLホスト名」の変更等も発生しません。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                            <dl id="14" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>MySQL5.5とMariaDB5.5の互換性に懸念があります。動作しなくなることはありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>MariaDB 5.5は、MySQL 5.5と極めて高い互換性を有しております。<br>
                                既に実施の移行メンテナンスにおける実績からも、動作に問題はございません。<br>
                                MySQL 5.5と比較しても、メモリリークの対処や非常に細やかなエラー処理などの改善が行われていることから、より安定したデータベース環境でのご利用が可能です。
</p>
 </dd>
                    </dl>
                    <!-- /.faq_unit -->
    
                    
                </div>
                <!-- /.faq -->

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>