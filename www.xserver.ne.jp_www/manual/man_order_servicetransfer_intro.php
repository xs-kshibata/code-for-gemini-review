<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServerビジネスへの変更 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーからXServerビジネスへのサービス変更に関するご案内です。">

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
            
                <h3 class="sub-ttl">XServerビジネスへの変更</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">XServerビジネスへの変更について</a>
                            <ol>
                                <li><a href="#link-a01">STEP1 データコピー</a></li>
                                <li><a href="#link-a02">STEP2 動作確認</a></li>
                                <li><a href="#link-a03">STEP3 切り替え</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-b">サービス変更の可能時期について</a>
                            <ol>
                                <li><a href="#link-b01">試用期間中のサービス変更</a></li>
                                <li><a href="#link-b02">本契約後のサービス変更</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-c">XServerビジネスへの変更方法</a></li>
                        <li><a href="#link-d">XServerビジネスへの変更で移行されるデータ・設定</a></li>
                        <li><a href="#link-e">XServerビジネスへの変更に伴う注意点</a>
                            <ul>
                                <li><a href="#link-e01">サービス変更の機能制限について</a></li>
                                <li><a href="#link-e02">「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります</a></li>
                                <li><a href="#link-e03">プログラムをご利用の場合、「サーバー切り替え」完了から24時間程度、移行元サーバーへデータが書き込まれる場合があります</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>

                <section class="section">
                    <h4 id="link-a" class="section_ttl">XServerビジネスへの変更について</h4>
                    <div class="section_body">
                        <p>
                            ご利用中の「エックスサーバー」のサーバー契約を「データコピー」「動作確認」「切り替え」の3ステップのみで、「XServerビジネス」にサービスを変更できます。
                        </p>
                        <p>「XServerビジネス」への移行機能をご利用いただくことで、
                            現在ご利用中の「エックスサーバー」の契約期間や
                            サーバー内のWebサイトやメールなどのデータを引き継いだまま
                            「XServerビジネス」のサーバー環境へ移行することができます。</p>

                        <p>サーバー環境を切り替える前に
                            お客様ご自身で新サーバーの動作確認を行うことができますので
                            運営中のサイトを停止させることなく、安全に移行することが可能です。
                        </p>
                        <p class="tac mb30"><img class="flex" src="../img/manual/man_order_servicetransfer_intro_1.png?date=20250314" alt="「データコピー」「動作確認」「切り替え」の3ステップイメージ"></p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">STEP1 データコピー</h5>
                            <div class="block_body">
                                <p class="mb0">「データコピー申請」を行っていただくことで、現在ご利用のサーバー内のデータが新しいサーバー環境にコピーされます。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">STEP2 動作確認</h5>
                            <div class="block_body">
                                <p>データコピーが完了すると、移行先サーバーにアクセスすることができます。<br>
                                hostsファイルを編集し、移行先サーバーでWebサイトが問題なく表示されるか、動作を確認してください。<br>
                                動作確認の詳細な手順は、マニュアル「<a href="man_domain_checkproxy.php#link-b">動作確認について ＞ WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>」をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">STEP3 切り替え</h5>
                            <div class="block_body">
                                <p class="mb0">移行先サーバーの動作確認を行い、ご利用料金をお支払いいただくことで、サービスの切り替えが完了します。</p>
                            </div>
                        </section>
                        <aside class="msg msg_notice mb30">
                            <p class="msg_ttl" id="link-a01"><i class="ico ico_circle-arrow-right"></i>XServerビジネスとは</p>
                            <div class="msg_body">
                                    <div>
                                        「XServerビジネス」は、法人・企業様向けの様々な機能やサービスを提供するレンタルサーバーです。<br>
                                        ビジネスの機会損失を防ぐ安定・快適のサーバー環境と、各種設定の無料代行をはじめとする安心のサービス・機能でお客様のビジネスを強くサポートします。
                                        <ul class="list list_arrow-right mt10">
                                            <li><a href="https://business.xserver.ne.jp/">法人・企業様のニーズに特化したレンタルサーバー【XServerビジネス】</a></li>
                                        </ul>
                                    </div>
                            </div>
                        </aside>

                   
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-b" class="section_ttl">サービス変更の可能時期について</h4>
                    <div class="section_body">
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">試用期間中のサービス変更</h5>
                            <div class="block_body">
                                <p>試用期間中は、いつでもサービス変更の申請が可能です。<br>
                                    試用期間はそのまま継続されます。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">本契約後のサービス変更</h5>
                            <div class="block_body">
                                <p>いつでも申請が可能です。<br>
                                    手続きの際に、申請翌日から利用期限日までの差額料金をお支払いください。</p>
                                <p class="note">※銀行振り込みなど即時決済以外の支払い方法で手続きをされた場合は、支払いが反映されるまではサーバー切り替えができません。</p>
                            </div>
                        </section>
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-c" class="section_ttl">XServerビジネスへの変更方法</h4>
                    <div class="section_body">
                        <p>XServerアカウント内「プラン・サービス変更」よりご利用ください。</p>
                        <p>詳細はマニュアル「<a href="man_order_servicetransfer_flow.php">XServerビジネスへの変更 ご利用手順</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">XServerビジネスへの変更で移行されるデータ・設定</h4>
                    <div class="section_body">
                        <p>データコピー時点で設定情報も含めたサーバーアカウントの内容が新しいサーバー環境に移行されます。</p>
                        <p>なお、以下の設定は新しいサーバー環境には移行されません。</p>
                        <div class="border border_gray">
                            <ul class="ul">
                                <li>アクセスログ、エラーログ</li>
                                <li>自動バックアップ処理で取得したバックアップデータ</li>
                                <li>エックスサーバーの初期ドメイン（サーバーID.xsrv.jp）内のデータ</li>
                            </ul>
                        </div>
                        <p>データコピーに関する仕様の詳細は、マニュアル「<a href="man_order_servicetransfer_detail.php">XServerビジネスへの変更 仕様詳細</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">XServerビジネスへの変更に伴う注意点</h4>
                    <div class="section_body">                        
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e01">サービス変更の機能制限について</h5>
                            <div class="block_body">
                                <p>「データコピー申請」を行うと、「サーバー切り替え」を行うまで、以下のお手続きができません。</p>
                                <div class="border border_gray">
                                    <ul class="ul">
                                        <li>対象サーバーのプランの変更</li>
                                        <li>対象サーバーへのオプション独自SSLの新規追加・更新</li>
                                        <li>対象サーバーの解約</li>
                                        <li>対象サーバーに追加している独自ドメインの解約</li>
                                        <li>対象サーバーに追加しているオプション独自SSLの解約</li>
                                        <li>サーバーパネルの各種操作の利用</li>
                                    </ul>
                                </div>
                            </div>
                        </section>
                        

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e02">「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります</h5>
                            <div class="block_body">
                                <p>ネットワークの反映状況により、「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります。</p>
                                <p>移行元サーバーへ届いたメールは、ご利用のメールソフト上で、「POPサーバー名（ホスト名）」を移行元サーバー名(sv***.xserver.jp)に変更してご確認いただく必要があります。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-e03">プログラムをご利用の場合、「サーバー切り替え」完了から24時間程度、移行元サーバーへデータが書き込まれる場合があります</h5>
                            <div class="block_body">
                                <p>CGIやPHP・MySQLなどの、プログラム・データベース処理において、データの書き込み（更新）が随時行われているようなプログラムが稼動している場合、「サーバー切り替え」から最大24時間程度、移行元サーバー側に情報が書き込まれる事があります。</p>
                                <p>移行元サーバーに書き込まれたデータは移行先サーバーへは反映されません。</p>
                                <p>未反映データの移行先サーバーへの反映などは、お客様ご自身で行っていただく必要があります。</p>
                            </div>
                        </section>
                        
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