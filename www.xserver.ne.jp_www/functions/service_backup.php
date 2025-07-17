<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>自動バックアップ機能 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではサーバー故障に備え、RAID1によるミラーリングとともに、サーバーデータを毎日自動で保存し一定期間保持する「自動バックアップ」機能に全プラン標準で対応しています。取得したバックアップデータはお客様への提供も行っています。">

</head>

<body id="pid-functions">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">バックアップ</span></p>

        <section class="section">
        	<h3 class="section_ttl">自動バックアップとは？</h3>
        	<div class="section_body">
                <div class="lede media">
                	<p class="media_image media_image_rev"><img src="../img/functions/img_backup_price.png" alt="標準機能 初期費用 月額費用 0円"></p>
                	<p class="media_body">サーバーデータを毎日自動で保存し、<br class="visible-l">一定期間データを保持する「自動バックアップ」</p>
                </div>
                <p>エックスサーバーでは、サーバ設備の故障その他トラブルに備えて、2台のハードディスクに同じデータを同時に書き込むRAID1によるリアルタイムでの全データコピー(ミラーリング)を行うと共に、サーバー上のデータを1日1回バックアップ専用サーバーに自動コピーし、サーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持する「自動バックアップ」機能にも全プラン標準で対応しています。</p>
                <p>
                    お客様へのデータの提供も行っていますので、<b>消失してしまったデータの復旧用などにご活用ください。</b><br>
                    データの提供は、サーバーパネル上からお申し込みが可能です。
                </p>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">
        	<h3 class="section_ttl">データのバックアップについて</h3>
        	<div class="section_body">
                <p>サーバー上のデータは、1日1回、バックアップ専用サーバーに自動でコピーしており、全サーバープランともサーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持しています。</p>
                <ul class="border border_blue note-list note-list_margin">
                    <li>※sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。</li>
                    <li>※バックアップ処理は、深夜から実行されます。処理速度はサーバーの負荷状況によって変化するため、完了時間は一定ではありません。</li>
                    <li>※サーバー設備のメンテナンスや障害等、弊社がバックアップ処理の実施が困難と判断した場合、バックアップ処理を一時的に停止することがあります。</li>
                    <li>※弊社にて行うバックアップは、データの確実な保全を保証するものではありませんので、データの消失や毀損などの可能性に備え、お客様ご自身でもデータのバックアップを行うことを強くお奨めいたします。</li>
                </ul>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">
        	<h3 class="section_ttl">バックアップ対象データ</h3>
        	<div class="section_body">
                <dl class="backup-dl">
                    <dt><i class="ico ico_circle"></i>サーバー領域データ(Web・メールデータ)</dt>
                    <dd>
                        <p>以下の領域に存在するデータを対象にバックアップを取得します。</p>
                        <ul class="ul">
                            <li>/home/（サーバーID）</li>
                        </ul>
                        
                        <aside class="border border_yellow">
                            <h4 class="bright-yellow mb10">バックアップ対象外のデータについて</h4>
                            <p>POPでのメール受信や、WEBメールからの削除により、バックアップ処理実施時点でサーバー上に残っていないメールデータは保存が行えませんのでご注意ください。</p>
                            <p>また、以下の領域に存在するデータは対象外として、本機能ではバックアップを取得いたしません。あらかじめご了承ください。</p>
                            <ul class="ul">
                                <li>/home/（サーバーID）/（ドメイン名）/public_html/wp-content/cache ディレクトリ配下</li>
								<li>/home/（サーバーID）/（ドメイン名）/public_html/wp-content/plugins/（プラグイン名）/cache ディレクトリ配下</li>
                                <li>/home/（サーバーID）/（ドメイン名）/public_html/wp-content/debug.log</li>
                                <li>/home/（サーバーID）/（ドメイン名）/public_html/（任意のディレクトリ）/wp-content/cache ディレクトリ配下</li>
								<li>/home/（サーバーID）/（ドメイン名）/public_html/（任意のディレクトリ）/wp-content/plugins/（プラグイン名）/cache ディレクトリ配下</li>
                                <li>/home/（サーバーID）/（ドメイン名）/public_html/（任意のディレクトリ）/wp-content/debug.log</li>
                                <li>/home/（サーバーID）/Maildir ディレクトリ配下</li>
                                <li>/home/（サーバーID）/Maildir.（数値） ディレクトリ配下</li>
								<li>/home/サーバーID/ドメイン/xserver_php/session/</li>
                            </ul>                        
                            <p class="mb0">契約サーバーアカウント内に存在するファイル数が非常に多い状況などにより、バックアップの処理に大きな負荷がかかったり、処理があまりにも長時間に及ぶような場合など特殊な事由によって、ごくまれに一部のアカウントに関してバックアップの対象外とする場合があります。<br>
                            万が一対象外とする場合は、該当のお客様個別にお知らせいたします。</p>
                        </aside>
                        
                    </dd>
                    <dt><i class="ico ico_circle"></i>MySQLデータベース</dt>
                    <dd>
                        <p>下記に該当するような場合は、バックアップの対象外となります。</p>
                        <ul class="ul">
                            <li>破損等によりバックアップ処理が行えないデータベース</li>
                            <li>保有するデータベーステーブルの数が「1,000」を超えるデータベース</li>
                            <li>バックアップの処理に大きな負荷がかかったり、処理が長時間に及ぶようなデータベース</li>
                        </ul>
                    </dd>
                </dl>
                <aside class="border border_yellow">
                    <h4 class="bright-yellow mb10">データのバックアップ状況を確認するには</h4>
                    <p class="mb0">
                        下記よりそれぞれご確認いただけます。<br>
                        ・サーバー領域データ(Web・メールデータ)の場合：サーバーパネル上の<b>[バックアップ]⇒[自動バックアップデータ取得・復元]</b><br>
                        ・MySQLデータベースの場合：サーバーパネル上の<b>[データベース]⇒[MySQLバックアップ]</b>
                    </p>
                </aside>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">
        	<h3 class="section_ttl">バックアップデータの提供について</h3>
        	<div class="section_body">
                <p>誤って重要なデータが消失してしまった場合などには、バックアップデータの提供も行っていますので、復旧用のデータなどとしてご活用ください。</p>
                <dl class="backup-dl">

                    <dt><i class="ico ico_circle"></i>お申し込み方法</dt>
                    <dd>
                        <ul class="ul">
                            <li>サーバー領域データの場合<br>
                                <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>上の<b>「バックアップ」</b>より、ご希望のバックアップ対象データをご指定の上、お申し込みください。<br>詳細な手順は<a href="../manual/man_server_download.php">マニュアル</a>をご参照ください。</li>
                            <li>MySQLデータベースの場合<br>
                                <a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>上の<b>「MySQLバックアップ」</b>より、ご希望のバックアップ対象データをご指定の上、お申し込みください。<br>詳細な手順は<a href="../manual/man_db_download.php">マニュアル</a>をご参照ください。</li>
                        </ul>
                        <aside class="border border_yellow">
                            <h4 class="bright-yellow mb10">復元用にバックアップデータをご利用の方へ</h4>
                            <p class="mb0">バックアップデータは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>よりそれぞれ復元できます。
                                詳細な手順はマニュアルをご参照ください。<br>
                                ・サーバー領域データ：<a href="../manual/man_server_restore.php">自動バックアップからのデータ復元</a><br>
                                ・MySQLデータベース：<a href="../manual/man_db_restore.php">自動バックアップからのデータ復元</a>
                            </p>
                        </aside>
                    </dd>
                </dl>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="caution">
            <h3 class="caution_ttl"><i class="ico ico_exclamation-fill"></i>注意事項</h3>
            <div class="caution_body">
                <div class="caution_item">
                	<p>
                	    <i class="ico ico_circle"></i>提供可能なバックアップデータは、弊社にてお申し込みを確認した時点からサーバー領域のWeb・メールデータは14日前、MySQLデータベースは14日前までのデータです。<br>
                	    保管期限間際のデータをご指定の場合は、速やかにお申し込みください。
                    </p>
                </div>
                <div class="caution_item">
                        <p>
                            <i class="ico ico_circle"></i>sv12301.xserver.jp 以前のサーバーおよび sv1〜sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。<br>順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。
                        </p>
                </div>
                <div class="caution_item">
                	<p>
                	    <i class="ico ico_circle"></i>バックアップデータは、システムにより自動的に取得されるものであり、当該データの完全性を保証するものではございませんので、予めご了承ください。
                	</p>
                </div>
                <div class="caution_item">
                	<p>
                	    <i class="ico ico_circle"></i>ご利用期限を超過するなどして、ご契約が有効でない状態のサーバーアカウントではバックアップデータのお申し込みができませんので、予めご了承ください。
                	</p>
                </div>
                <div class="caution_item">
                	<p>
                	    <i class="ico ico_circle"></i>当社がバックアップ対象として指定している以外のデータや、消失または毀損が明らかであるデータのお申し込みは出来ません。<br>
                	    また、データの保管期間を経過してしまった場合も、データの提供が行えませんので、予めご了承ください。<br>
                	</p>
                </div>
            </div>
        </section>
        <!-- /.caution -->
        
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