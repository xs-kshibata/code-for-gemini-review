<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>新サーバー簡単移行 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバー内で旧仕様のサーバー環境をご利用のお客様が、最新システム基盤の新サーバー環境へ簡単に移動できる「新サーバー簡単移行」機能に関するご案内です。">

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
            
                <h3 class="sub-ttl">新サーバー簡単移行</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">「新サーバー簡単移行」とは</a>
                            <ol>
                                <li><a href="#link-a01">STEP1 データコピー</a></li>
                                <li><a href="#link-a02">STEP2 確認</a></li>
                                <li><a href="#link-a03">STEP3 移行</a></li>
                            </ol>
                        </li>
                        <li><a href="#link-b">最新サーバー環境について</a></li>
                        <li><a href="#link-c">「新サーバー簡単移行」が利用可能なサーバーアカウント</a></li>
                        <li><a href="#link-d">「新サーバー簡単移行」のご利用方法</a></li>
                        <li><a href="#link-e">「新サーバー簡単移行」で移行されるデータ・設定</a></li>
                        <li><a href="#link-f">サーバー環境移行に伴う注意点</a>
                            <ul>
                                <li><a href="#link-f01">移行機能利用中の機能制限について</a></li>
                                <li><a href="#link-f02">メールソフトの送信設定をご確認ください</a></li>
                                <li><a href="#link-f03">「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります</a></li>
                                <li><a href="#link-f04">プログラムをご利用の場合、「サーバー切り替え」完了から24時間程度、移行元サーバーへデータが書き込まれる場合があります</a></li>
                                <li><a href="#link-f05">エックスサーバー以外のネームサーバーを設定中の場合、お客様にてDNSレコードを変更する必要があります</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 id="link-a" class="section_ttl">「新サーバー簡単移行」とは</h4>
                    <div class="section_body">
                        <p>
                            「新サーバー簡単移行」機能とは、旧サーバー環境（サーバー番号がsv1〜sv16000.xserver.jp)をご利用のお客様が、「データコピー」「確認」「移行」の3ステップのみでより新しいサーバー環境へ簡単に移行することができる機能です。
                        </p>
                        <p>同機能を利用することにより、通常煩雑なサーバー移転作業などがクリックのみで簡単に行え、最新システム基盤のサーバー環境を利用することができます。</p>
                        <p class="tac mb30"><img class="flex" src="../img/manual/man_order_servertransfer_intro_1.png?date=20201022" alt="「データコピー」「確認」「移行」の3ステップイメージ"></p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">STEP1 データコピー</h5>
                            <div class="block_body">
                                <p class="mb0">「データコピー申請」を行っていただくことで、現在ご利用のサーバー内のデータが最新サーバー環境にコピーされます。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">STEP2 確認</h5>
                            <div class="block_body">
                                <p>データコピーが完了すると、移行先サーバーにアクセスすることができます。<br>
                                hostsファイルを編集し、移行先サーバーでWebサイトが問題なく表示されるか、動作を確認してください。<br>
                                動作確認の詳細な手順は、マニュアル「<a href="man_domain_checkproxy.php#link-b">動作確認について ＞ WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>」をご参照ください。</p>
                            </div>
                        </section>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">STEP3 移行</h5>
                            <div class="block_body">
                                <p class="mb0">「サーバー切り替え」を行っていただくことで、Webサイトのアクセス先やメールの配送先が最新サーバー環境へ切り替わります。</p>
                            </div>
                        </section>
                   
                    </div>
                </section>
                <!-- /.section -->
                
                
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">最新サーバー環境について</h4>
                    <div class="section_body">
                        <p>移行先サーバーでは最新システム基盤を採用しており、現在ご利用のサーバーに比べ、以下の点が強化・改善されています。</p>
                        <div class="border border_gray">
                            <ul class="ul">
                                <li>高速CPUの『AMD EPYC&trade;』を採用</li>
                                <li>『オールNVMe』RAID10（ストライピング＋ミラーリング）構成を採用、読み込み速度が最大で32倍以上に向上</li>
                                <li>搭載メモリを1TBから1.5TBに増強</li>
                            </ul>
                        </div>
                        <p>最新サーバー環境のご利用により、サーバープログラムの実行速度の上昇や、Webコンテンツの表示レスポンスの改善などが望めます。<br>ハードウェアの増強に関する詳細は下記特設Webページも併せてご参照ください。<br>◇新サーバー特設ページ「<a href="../info/leadingserver/" target="_blank">国内最速サーバーへ</a><i class="ico ico_new-window base-color"></i>」</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-c" class="section_ttl">「新サーバー簡単移行」が利用可能なサーバーアカウント</h4>
                    <p>「sv1.xserver.jp〜sv16000.xserver.jp」サーバーをご利用のお客様を対象としています。</p>
                    <p>なお、対象のサーバーアカウントにおいても、以下のいずれかに該当する場合、「新サーバー簡単移行」はご利用になれません。</p>
                        
                    <div class="border border_gray">
                        <ul class="ul">
                            <li>最新サーバー環境で非対応のPHPバージョンが選択されている場合</li>
                            <li>独自SSLの発行申請中の場合</li>
                            <li>「独自IPアドレスあり」の独自SSL設定が存在する場合</li>
                            <li>サーバー利用期限が1ヶ月以内の場合</li>
                            <li>その他、移行作業で引き継ぐことができない設定情報が存在する場合</li>
                        </ul>
                    </div>
                    <p>以上に該当する場合の対処方法は、お客様のご利用状況により異なります。<br>詳細は、「データコピー申請」を行った際に表示されるメッセージをご確認ください。</p>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">「新サーバー簡単移行」のご利用方法</h4>
                    <div class="section_body">
                        <p>XServerアカウント内「新サーバー簡単移行」よりご利用ください。</p>
                        <p>詳細はマニュアル「<a href="man_order_servertransfer_flow.php">新サーバー簡単移行 ご利用手順</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">「新サーバー簡単移行」で移行されるデータ・設定</h4>
                    <div class="section_body">
                        <p>データコピー時点で設定情報も含めたサーバーアカウントの内容が最新サーバー環境に移行されます。</p>
                        <p>なお、以下の設定は最新サーバー環境には移行されません。</p>
                        <div class="border border_gray">
                            <ul class="ul">
                                <li>アクセスログ、エラーログ</li>
                                <li>自動バックアップ処理で取得したバックアップデータ</li>
                            </ul>
                        </div>
                        <p>データコピーに関する仕様の詳細は、マニュアル「<a href="man_order_servertransfer_detail.php">新サーバー簡単移行 仕様詳細</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-f" class="section_ttl">サーバー環境移行に伴う注意点</h4>
                    <div class="section_body">                        
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-f01">移行機能利用中の機能制限について</h5>
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
                            <h5 class="block_ttl" id="link-f02">メールソフトの送信設定をご確認ください</h5>
                            <div class="block_body">
                                <p>新仕様サーバーでのメールソフトを用いたメールの送信には、SMTP認証(SMTP-AUTH)の設定が必要です。<br>
                                ※新仕様サーバーでは、POP before SMTP方式による認証機能を提供しておりません。</p>
                                <p>SMTP認証設定の確認・設定変更は、マニュアル「<a href="man_mail_setting.php#link-a03">メールソフトの設定 ＞ 各種メールソフトの設定手順</a>」より、メールソフトごとの設定手順にお進みいただき、「SMTP認証設定方法」などをご参照ください。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-f03">「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります</h5>
                            <div class="block_body">
                                <p>ネットワークの反映状況により、「サーバー切り替え」完了から24時間程度、移行元サーバーへメールが届く場合があります。</p>
                                <p>移行元サーバーへ届いたメールは、ご利用のメールソフト上で、「POPサーバー名（ホスト名）」を移行元サーバー名(sv***.xserver.jp)に変更してご確認いただく必要があります。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-f04">プログラムをご利用の場合、「サーバー切り替え」完了から24時間程度、移行元サーバーへデータが書き込まれる場合があります</h5>
                            <div class="block_body">
                                <p>CGIやPHP・MySQLなどの、プログラム・データベース処理において、データの書き込み（更新）が随時行われているようなプログラムが稼動している場合、「サーバー切り替え」から最大24時間程度、移行元サーバー側に情報が書き込まれる事があります。</p>
                                <p>移行元サーバーに書き込まれたデータは移行先サーバーへは反映されません。</p>
                                <p>未反映データの移行先サーバーへの反映などは、お客様ご自身で行っていただく必要があります。</p>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-f05">エックスサーバー以外のネームサーバーを設定中の場合、お客様にてDNSレコードを変更する必要があります</h5>
                            <div class="block_body">
                                <p>最新サーバーへ移行すると、ご利用サーバーの「IPアドレス」「ホスト名(sv***.xserver.jp)」が変更されます。</p>
                                <p>設定しているドメイン名のネームサーバーがエックスサーバー指定のものではなく、他サービスを指定している場合は、「サーバー切り替え」完了後、お客様にてDNSレコードを移行先サーバーのIPアドレスへご変更ください。</p>
                                <p class="note">※MXレコードでホスト名を指定し当サービスのWEBメールを利用している場合、WEBメールのアドレス帳のデータは引き継がれません。<br>
                                アドレス帳のデータを引き継ぐ場合は、DNSレコードを変更する前に、WEBメールよりデータをエクスポートしてください。</p>
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