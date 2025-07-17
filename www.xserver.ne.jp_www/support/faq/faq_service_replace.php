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
                    <b>※2025年1月〜実施の「新サーバー移行メンテナンス」に関するよくある質問です。</b><br>
                    　<span class="font-s">関連ニュース：<br><a href="https://www.xserver.ne.jp/news_detail.php?view_id=14087">『sv30〜sv1510、sv3001〜sv7800サーバー』ハードウェアの大幅増強および新基盤システムへの移行に関するご案内</a></span>
                </div>
                
                <div class="faq">
                    <dl id="01" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移行メンテナンスのスケジュールの通知がきたのですが、何をすればいいですか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>お知らせのスケジュールにて、お客様のご利用サーバーをより高機能な最新のサーバー環境へ移行いたしたます。<br>
                               お客様による作業はございませんが、サーバーの仕様が最新の仕様となりますので<a href="../../spec_sv_replace.php">移行メンテナンス後のサービス仕様</a>や<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>、<a href="../../manual/man_program_php_ver.php">PHPのバージョン</a>、<a href="../../manual/man_install_outside_program.php">動作確認済みプログラム</a>などを、あらかじめご参照ください。
							</p>
                            </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="02" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>移転前と移転後におけるサーバーの仕様に変更はありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>はい、移転後のサーバー仕様について変更点はございます。<br>
                               主にapacheバージョンが2.2.xから2.4.xに変更となることや、通信プロトコルHTTP/1.1からHTTP/2への対応となるほか、ライブラリやコマンドラインについても変更がございます。<br>
                               詳細については、<a href="../../spec_sv_replace.php">移行メンテナンス後のサービス仕様</a>や<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>、<a href="../../manual/man_program_php_ver.php">PHPのバージョン</a>、<a href="../../manual/man_install_outside_program.php">動作確認済みプログラム</a>などをご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="03" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>メンテナンス実施予定日にサーバーが停止しないような回避策はありますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>事前に「<a href="../../manual/man_order_servertransfer_intro.php">新サーバー簡単移行</a>」にて、手動で移行していただいた場合には、サーバー停止の時間はございません。また、動作確認を事前にすることも可能です。<br>
                            なお、「<a href="../../manual/man_order_servertransfer_intro.php">新サーバー簡単移行</a>」は、メンテナンス実施に伴い以下の日程でご利用いただけなくなります。<br>
                                <a href="https://www.xserver.ne.jp/news_detail.php?view_id=14087">メンテナンス実施予定日</a>をご一読の上、1か月前を目安にご利用いただきますようお願いいたします。</p>
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
    
                            <dl id="07" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>cron / SSH でPHPプログラムが動作しなくなってしまいました。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>サーバー環境の仕様変更により、コマンドパスが変更になっている可能性がございます。<br>
                            問題切り分けのため、<a href="../../manual/man_program_soft.php">プログラム言語・コマンドパス</a>をご確認いただき、パスに相違があれば修正をすることで改善されるかをお試しください。
                            </p>   
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
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>既存のMySQLデータベースをMariaDB 10.5に移行することはできますか？</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>メンテナンス後に『MySQL移行ツール』を用いて、MariaDB 10.5へ移行することができます。</p>
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