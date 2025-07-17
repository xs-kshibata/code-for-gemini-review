<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>WordPressで作ったサイトへのアクセスが増えてきました。負荷対策としてできることはありますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="WordPressで運用中のウェブサイトの場合、アクセスが増えるとともに下記のような状況が発生します。　・CPU負荷が増加する　・転送量が増加する　・突発的なアクセス集中が発生し、HTTPリクエストが多く発生する　昨今、お客様にて運用中の…">

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

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">WordPressで作ったサイトへのアクセスが増えてきました。負荷対策としてできることはありますか？</h3>

                <p>WordPressで運用中のウェブサイトの場合、アクセスが増えるとともに下記のような状況が発生します。</p>
                <ul class="list list_arrow-right">
                    <li>CPU負荷が増加する</li>
                    <li>転送量が増加する</li>
                    <li>突発的なアクセス集中が発生し、HTTPリクエストが多く発生する</li>
                </ul>
                <p>昨今、お客様にて運用中のWordPressがテレビや大手ポータルサイトで紹介されることにより、突発的にアクセスが集中し、サーバー障害へとつながってしまう事例が確認されております。</p>
                <p>一例ではありますが、下記にそれぞれの対策を記載しましたので、負荷上昇に備え、事前に対策を行っておくことをお勧めします。</p>
                <p class="note">※本解説において具体的なプラグイン名を記載しておりますが、エックスサーバーでは各プラグインの開発には携わっておらず、これらプラグインの具体的な操作方法に関するご案内や、プラグインのご利用にて生じた不具合の解消に関する技術的なサポートはいたしておりません。<br><br>
                各プラグインはお客様ご自身の責任で導入してください。</p>
                <section class="block">
                    <h4 class="block_ttl">CPU負荷への対策について</h4>
                    <div class="block_body">
                        <p>CPU負荷とは、プログラム処理によりサーバーのCPUを使用することで発生します。</p>
                        <p>そのため、CPU負荷対策としては、</p>
                        <ul class="list list_arrow-right">
                            <li>プログラム処理で発生するCPU負荷そのものを減らす</li>
                            <li>キャッシュプラグイン（ページキャッシュ）の導入により、プログラムの処理回数を減らす</li>
                        </ul>
                        <p>といった対策が有効です。</p>
                        <dl class="border border_gray">
                            <dt class="mb10">【1】プログラム処理で発生するCPU負荷そのものを減らす</dt>
                            <dd>
                                <p>下記のような方法があります。</p>
                                <ul class="list list_arrow-right">
                                    <li>サーバーパネルで「<a href="../../manual/man_server_php_rapid.php">PHP高速化設定(FastCGI化)</a>」を有効にする</li>
                                    <li>使用していないプラグインを停止する、もしくは削除する</li>
                                    <li>プラグインの負荷状況を計測するプラグイン「P3 (Plugin Performance Profiler)」を利用し、負荷の大きいプラグインを同等の機能の、より負荷の少ないプラグインへ置き換える</li>
                                </ul>
                                <p class="mb0">また、運用中のWordPressに対して「コメントスパム」が多発している場合、コメントスパム対策を行うとともにデータベース上に登録されたスパムコメントを削除することで、主にデータベース負荷やメモリ使用量関連の負荷が削減されます。</p>
                            </dd>
                        </dl>
                        <dl class="border border_gray">
                            <dt class="mb10">【2】キャッシュプラグイン（ページキャッシュ）の導入により、プログラムの処理回数を減らす</dt>
                            <dd>
                                <p>キャッシュプラグイン「WP Super Cache」の「Use mod_rewrite」や「W3 Total Cache」の「Disk(enhanced)」を利用することで非常に大きな負荷軽減につながります。</p>                                            
                                
                                <aside class="msg msg_notice">
                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>キャッシュプラグインのモバイル対応について</h5>
                                    <div class="msg_body">
                                        <p>いずれのプラグインも初期状態では「PCからのアクセス」と「スマートフォンからのアクセス」が同一キャッシュファイルで管理されてしまいますが、「WP Super Cache」の場合は「Mobile device support」の設定を、「W3 Total Cache」の場合は「User Agent Groups」の設定（新しいグループの登録）を行うことで、PC、スマートフォンのアクセスそれぞれに異なるキャッシュを生成することが可能です。</p>
                                    </div>
                                </aside>
                                <aside class="msg msg_notice mb0">
                                    <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>キャッシュプラグインと相性の悪いプラグインについて</h5>
                                    <div class="msg_body">
                                        <p>人気記事ランキングを表示するプラグインの「WordPress Popular Posts」とキャッシュプラグインを併用するため、「WordPress Popular Posts」の設定で「Ajax」を有効にした場合、WordPressへのアクセスのたびにカウント処理などが発生することとなり、キャッシュプラグインによる負荷軽減対策が活かしきれない可能性があります。</p>
                                        <p>非常にアクセス数の多いWordPressにおいて引き続き人気記事ランキングを表示させたい場合、代替するプラグインとして「Simple GA Ranking」などのご利用をご検討ください。</p>
                                        <p class="note">※上記プラグインのご利用に際しPHPバージョンの変更が必要な場合、サーバーパネルの「PHP Ver.切替」よりPHPバージョンを変更してください。</p>
                                    </div>
                                </aside>
                            </dd>
                        </dl>
                        
                    </div>
                </section>
                <section class="block">
                    <h4 class="block_ttl">転送量への対策について</h4>
                    <div class="block_body">
                        <p>WordPress内で容量の大きな画像・動画を掲載している場合やWordPressへのアクセスが非常に多い場合、転送量（データ通信量）が非常に大きなものとなってしまいます。</p>
                        <p><strong class="yellow">参考：</strong><a href="../../manual/man_server_spec.php">サーバー仕様</a></p>
                        <p>転送量への対策としては、下記が有効です。</p>
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>CDNサービスなどを利用し、外部サーバーからデータを配信する</dt>
                            <dd>
                                <p>プラグイン「Jetpack by WordPress.com」の「Photon」を利用することで、記事内の画像などが外部サーバーからの配信に切り替わり、転送量の削減に効果があります。</p>
                                <p>また、CloudFlareなどのCDNサービスを利用した場合、ページ全体の画像やcss、Javascriptファイルなども外部サーバーからキャッシュが配信されることとなり、転送量対策として非常に効果があります。</p>
                                <p class="mb0">なお、各サービスともキャッシュされるファイルの種類等が限定されており、CDNを利用しても動画は外部サーバーから配信されないケースなどもあります。<br>
                                この場合、動画を動画投稿サイトから配信することもご検討ください。</p>
                            </dd>
                        </dl>
                        
                    </div>
                </section>
                <section class="block">
                    <h4 class="block_ttl">突発的なアクセス集中への対策について</h4>
                    <div class="block_body">
                        <p>運用中のWordPressに対する突発的な集中アクセスによりブログ記事やそれに伴う画像、CSS、jsファイル（Javascript）なども含めたHTTPリクエストが増えた場合、リクエストが処理しきれず、サーバー障害の発生につながる恐れがあります。</p>
                        <p>HTTPリクエストを減らす対策としては、下記が有効です。</p>
                        <ul class="list list_arrow-right">
                            <li>CDNサービスなどを利用し、外部サーバーからデータを配信する</li>
                            <li>キャッシュプラグイン（ページキャッシュ）の導入により、WordPressを高速化する</li>
                        </ul>
                        <p>キャッシュプラグインの導入そのものはHTTPリクエスト数自体の削減にはつながりませんが、WordPressの高速化にともないレスポンス速度が向上することにより、アクセス集中への有効な対策となります。</p>
                    </div>
                </section>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_wp.php" class="btn btn_gray">「WordPress」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

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