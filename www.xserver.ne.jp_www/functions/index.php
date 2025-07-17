<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>機能一覧 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーのサーバー契約でご利用可能な機能の一覧です。">

</head>

<body id="pid-functions" class="pid-feature-index">

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

        <p class="ttl"><span class="label">機能一覧</span></p>

        <aside class="bnr">
            <p class="tac font-bold mb5 font-l">＼ <span class="orange">9/4(木)17時まで！</span>／</p>
            <div class="mb25">
                <a id="ga-xs-under-cpBnr" href="../campaign/campaign_250703.php"><img class="hover fluid-sm" src="../img/campaign/250703/campaign_banner_772-130.png" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！"></a>
            </div>
            <div class="mb20">
                <a href="../order/order_transfer_server.php#wptransfer"><img class="hover fluid-sm" src="../img/functions/wptransfer_banner.png?date=230403" alt="WordPress簡単移行"></a>
            </div>
        </aside>
        
        <section class="section">
            <h3 class="section_ttl">主な仕様</h3>
            <div class="section_body">
            <section class="block block_functions">
                <div class="block_body js_scrolltip">
                    <table class="table table_striped">
                    <thead>
                        <tr>
                            <th colspan="2" class="w25per">機能</th>
                            <th class="hidden-s">解説</th>
                            <th class="w15per cell_nowrap pr5 pl5">スタンダード</th>
                            <th class="w15per cell_nowrap pr5 pl5">プレミアム</th>
                            <th class="w15per cell_nowrap pr5 pl5">ビジネス</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th colspan="2">月額費用<span class="font-s">(税込)</span>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">各プランのご利用料金（36ヶ月契約の場合）。</span>
                                </span>
                            </th>
                            <td class="hidden-s">各プランのご利用料金（36ヶ月契約の場合）</td>
                            <td><span class="table_value">990円<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="visible-s">【実質495円】</span></span></td>
                            <td><span class="table_value">1,980円<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="visible-s">【実質990円】</span></span></td>
                            <td><span class="table_value">3,960円<br><span class="font-bold red"><span class="font-s">キャッシュバックで</span><br class="visible-s">【実質1,980円】</span></span></td>
                        </tr>
                        <tr>
                            <th colspan="2">初期費用<span class="font-s">(税込)</span>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">初期サーバー設定費。</span>
                                </span>
                            </th>
                            <td class="hidden-s">初期サーバー設定費</td>
                            <td><b class="table_value">0円</b></td>
                            <td><b class="table_value">0円</b></td>
                            <td><b class="table_value">0円</b></td>
                        </tr>
                        <tr>
                            <th colspan="2">vCPU/メモリ
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ご利用いただくサーバーに割り当てられているCPU/メモリ量です。</span>
                                </span>
                            </th>
                            <td class="hidden-s">ご利用いただくサーバーに割り当てられているCPU/メモリ量です。</td>
                            <td><b class="table_value">256コア/<br class="hidden-s">1,536GB</b></td>
                            <td><b class="table_value">256コア/<br class="hidden-s">1,536GB</b></td>
                            <td><b class="table_value">256コア/<br class="hidden-s">1,536GB</b></td>
                        </tr>
                        <tr>
                            <th colspan="2">vCPU/メモリ リソース保証
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">アカウントに対して最低保証されるCPU・メモリ量です。他ユーザーの影響を受けることなく、安定的なサイト表示速度を維持することが可能です。</span>
                                </span>
                            </th>
                            <td class="hidden-s">アカウントに対して最低保証されるCPU・メモリ量です。他ユーザーの影響を受けることなく、安定的なサイト表示速度を維持することが可能です。</td>
                            <td><b class="table_value">6コア/<br class="hidden-s">8GB</b></td>
                            <td><b class="table_value">8コア/<br class="hidden-s">12GB</b></td>
                            <td><b class="table_value">10コア/<br class="hidden-s">16GB</b></td>
                        </tr>
                        <tr>
                            <th colspan="2">独自ドメイン永久無料特典
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">当社指定の独自ドメインの中から、2つ無料でプレゼント！<br>プレゼントされたドメインは契約期間中なら管理料最大7,000円/年(税抜)も無料！<br>
                                    プレゼントされたドメインは契約期間中の間ずっと無料！<br>
                                    詳細は「<a href="../manual/man_order_present_domain.php">独自ドメイン永久無料特典</a>」をご参照ください。</span>
                                </span>
                            </th>
                            <td class="hidden-s">
                                <p>下記の中から独自ドメインを2つ無料でプレゼント！</p>
                                <ul class="list list_margin list_arrow-right">
                                    <li>
                                        <b>スタンダードの場合</b>
                                        <p class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site のいずれか</p>
                                    </li>
                                    <li>
                                        <b>プレミアムの場合</b>
                                        <p class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> のいずれか</p>
                                    </li>
                                    <li>
                                        <b>ビジネスの場合</b>
                                        <p class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> / <span class="orange">.co.jp</span>※ / <span class="orange">.or.jp</span>※ / <span class="orange">.ne.jp</span>※ / <span class="orange">.gr.jp</span>※ のいずれか</p>
                                        <p class="note font-s">※ 新規取得には<a href="../manual/man_order_present_domain.php#link-c">取得条件</a>があります。</p>
                                    </li>
                                </ul>
                                <p>
                                    プレゼントされたドメインは契約期間中の間ずっと無料！<br>
                                    詳細は「<a href="../manual/man_order_present_domain.php">独自ドメイン永久無料特典</a>」をご参照ください。
                                </p>
                            </td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                            <th colspan="2">独自ドメイン1年無料特典
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">全20種類のドメインが、それぞれ1年間無料で利用可能です。※対象ドメインは予告なく変更する場合があります。<br>※2年目以降は<a href="../domain/">更新料金</a>が発生します。</span>
                                </span>
                            </th>
                            <td class="break-all hidden-s">
                                <p>全20種類の対象ドメインを、それぞれ1年間無料で利用可能！</p>
                                <p class="break-all">
                                    .online / .space / .website / .site / .tech / .store / .osaka / .moe / .earth / .ink / .wiki / .xyz / .group / .email / .live / .life / .world / .mobi / .works / .me を種類ごとに一つずつ、最大で20個のドメインを無料で取得可能
                                </p>
                                <p class="note font-s mb0">※対象ドメインは予告なく変更する場合があります。</p>
                                <p class="note font-s">※2年目以降は更新料金が発生します。</p>

                            </td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
							<th colspan="2">無料お試し期間
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">最大10日間無料で、サーバーのお試し利用ができます。</span>
                                </span>
                            </th>
                            <td class="hidden-s">最大10日間無料で、サーバーのお試し利用ができます。</td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                            <th colspan="2">ディスクスペース(NVMe SSD)
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">Web + Mail にご利用いただけるディスク容量。ストレージにはNVMe SSDを採用。</span>
                                </span>
                            </th>
                            <td class="hidden-s">Web + Mail にご利用いただけるディスク容量<br>ストレージにはNVMe SSDを採用</td>
                            <td><b class="table_value">500GB</b></td>
                            <td><b class="table_value">600GB</b></td>
                            <td><b class="table_value">700GB</b></td>
                        </tr>
                       	<tr>
							<th colspan="2">転送量課金
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ウェブ・メール・FTPのデータ転送量に対する課金。</span>
                                </span>
                            </th>
							<td class="hidden-s">ウェブ・メール・FTPのデータ転送量に対する課金</td>
							<td><b class="table_value">なし</b></td>
							<td><b class="table_value">なし</b></td>
							<td><b class="table_value">なし</b></td>
						</tr>
                        <tr>
                            <th colspan="2">転送量
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ウェブ・メール・FTPのデータ転送量の上限</span>
                                </span>
                            </th>
                            <td class="hidden-s">ウェブ・メール・FTPのデータ転送量の上限</td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                        </tr>
						<tr>
							<th rowspan="2">SSL</th>
							<th><a href="service_ssl.php#free-ssl">無料独自SSL</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">独自ドメインやサブドメインを用いて、サーバーとユーザ間のデータを暗号化することができます。当サーバーで運営中のドメインに対して無料・無制限で独自SSLを利用することが可能です。詳細は「<a href="service_ssl.php#free-ssl">無料独自SSL</a>」をご参照ください。</span>
                                </span>
                            </th>
								<td class="hidden-s">独自ドメインやサブドメインを用いて、サーバーとユーザ間のデータを暗号化することができます。当サーバーで運営中のドメインに対して無料・無制限で独自SSLを利用することが可能です。<br>
									詳細は「<a href="service_ssl.php#free-ssl">無料独自SSL</a>」をご参照ください。</td>
								<td><b class="table_value">無料</b></td>
								<td><b class="table_value">無料</b></td>
								<td><b class="table_value">無料</b></td>
							</tr>
							<tr>
								<th><a href="service_ssl.php#option-ssl">オプション独自SSL</a>
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">著名ブランドのSSLサーバー証明書や独自IPアドレスの利用も可能です。詳細は「<a href="service_ssl.php#option-ssl">オプション独自SSL</a>」をご参照ください。</span>
                                </span>
                                </th>
								<td class="hidden-s">著名ブランドのSSLサーバー証明書や独自IPアドレスの利用も可能です。<br>
								詳細は「<a href="service_ssl.php#option-ssl">オプション独自SSL</a>」をご参照ください。</td>
								<td><span class="table_value">○</span></td>
								<td><span class="table_value">○</span></td>
								<td><span class="table_value">○</span></td>
							</tr>
							<tr>
								<th rowspan="2"><a href="../manual/man_db_spec.php">データベース</a></th>
                                <th>MySQL/MariaDB
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">MariaDB 10.5 を利用したデータベース管理ができます。</span>
                                </span>
                                </th>
                                <td class="hidden-s">MariaDB 10.5 を利用したデータベース管理ができます。</td>
								<td><b class="table_value">無制限</b></td>
								<td><b class="table_value">無制限</b></td>
								<td><b class="table_value">無制限</b></td>
							</tr>
							<tr>
								<th>SQLite
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">SQLiteをご利用いただけます。</span>
                                </span>
                                </th>
								<td class="hidden-s">SQLiteをご利用いただけます。</td>
								<td><span class="table_value">○</span></td>
								<td><span class="table_value">○</span></td>
								<td><span class="table_value">○</span></td>
							</tr>
                      	<tr>
                            <th colspan="2">URLアドレス
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ご利用いただけるURL</span>
                                </span>
                            </th>
                            <td class="hidden-s">ご利用いただけるURL</td>
                            <td><b class="table_value">独自<br class="hidden-s">ドメイン</b></td>
                            <td><b class="table_value">独自<br class="hidden-s">ドメイン</b></td>
                            <td><b class="table_value">独自<br class="hidden-s">ドメイン</b></td>
                        </tr>
                       <tr>
						   <th colspan="2"><a href="../manual/man_domain_spec.php">マルチドメイン</a>
                               <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">独自ドメインの利用できる数</span>
                                </span>
                           </th>
                            <td class="hidden-s">独自ドメインの利用できる数</td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_domain_spec.php">サブドメイン</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サブドメインの利用できる数</span>
                                </span>
                            </th>
                            <td class="hidden-s">サブドメインの利用できる数</td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_mail_add.php">メールアカウント</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">作成できるメールアカウントの数</span>
                                </span>
                            </th>
                            <td class="hidden-s">作成できるメールアカウントの数</td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_ftp_add.php">サブFTPアカウントの追加</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">FTPアカウントの利用できる数</span>
                                </span>
                            </th>
                            <td class="hidden-s">FTPアカウントの利用できる数</td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                            <td><b class="table_value">無制限</b></td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_server_nginx.php">nginx</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">大量の同時アクセスへの処理に最適化されており、「nginx」が未導入の環境に比べ処理速度が速く、突発的にアクセスが集中した場合でも安定したWebサイトの運営が可能です。</span>
                                </span>
                            </th>
                            <td class="hidden-s">大量の同時アクセスへの処理に最適化されており、「nginx」が未導入の環境に比べ処理速度が速く、突発的にアクセスが集中した場合でも安定したWebサイトの運営が可能です。</td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                         <tr>
                            <th colspan="2">RAID構成
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">RAID1のミラーリングと、RAID0のストライピングによって、高速かつ高い障害耐性を兼備する構成です。</span>
                                </span>
                            </th>
                            <td class="hidden-s">RAID1のミラーリングと、RAID0のストライピングによって、高速かつ高い障害耐性を兼備する構成です。</td>
                            <td><b class="table_value">RAID10</b></td>
                            <td><b class="table_value">RAID10</b></td>
                            <td><b class="table_value">RAID10</b></td>
                        </tr>

                        <tr>
							<th rowspan="5">サポート</th>
							<th><a href="../support/#support-mail">メールサポート</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">無料でメールサポートをご利用いただけます。</span>
                                </span>
                            </th>
							<td class="hidden-s">無料でメールサポートをご利用いただけます。</td>
							<td><span class="table_value">○</span></td>
							<td><span class="table_value">○</span></td>
							<td><span class="table_value">○</span></td>
						</tr>
                         <tr>
							 <th><a href="../support/#support-tel">電話サポート</a>
                                 <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">無料で電話サポートをご利用いただけます。</span>
                                </span>
                             </th>
							<td class="hidden-s">無料で電話サポートをご利用いただけます。</td>
							<td><span class="table_value">○</span></td>
							<td><span class="table_value">○</span></td>
							<td><span class="table_value">○</span></td>
						</tr>
                        <tr>
                            <th><a href="../price/service_daiko.php">設定おまかせサポート</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サーバーパネルで提供する各機能の設定を弊社のエンジニアスタッフが代行します。（オプションサービス）</span>
                                </span>
                            </th>
                            <td class="hidden-s">
                                <p>サーバーパネルで提供する各機能の設定を弊社のエンジニアスタッフが代行します。（オプションサービス）</p>
                            </td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                            <th>
                                <a href="../price/service_server_daiko.php">サーバー移転代行</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">Webサイト・WordPressの移転の作業を弊社のエンジニアスタッフが代行します。（オプションサービス）</span>
                                </span>
                            </th>
                            <td class="hidden-s">
                                <p>Webサイト・WordPressの移転の作業を弊社のエンジニアスタッフが代行します。（オプションサービス）</p>
                            </td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                            <th>無料代行サービス
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">設定おまかせサポート・サーバー移転代行が規定回数無料でご利用いただけます</span>
                                </span>
                            </th>
                            <td class="hidden-s">
                                <p>設定おまかせサポート・サーバー移転代行が規定回数無料でご利用いただけます</p>
                            </td>
                            <td><span class="table_value">×</span></td>
                            <td><span class="table_value">×</span></td>
                            <td>
                                <div class="font-s table_value mb10">設定おまかせサポート<b class="table_value">3回/月</b></div>
                                <div class="font-s table_value">サーバー移転代行<b class="table_value">初回のみ無料</b></div>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_server_security_scan.php">Web改ざん検知</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">URLを登録することでWebサイト改ざんやマルウェア、フィッシングURLの存在を毎日自動診断します。</span>
                                </span>
                            </th>
                            <td class="hidden-s">URLを登録することでWebサイト改ざんやマルウェア、フィッシングURLの存在を毎日自動診断します。</td>
                            <td><span class="table_value">×</span></td>
                            <td><span class="table_value">×</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="../manual/man_server_adminuser.php">管理者ユーザー設定</a>
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">ドメインごとに複数人でのサーバー管理が可能です。管理者ユーザーには業務内容に応じた権限を設定することができます。</span>
                                </span>
                            </th>
                            <td class="hidden-s">ドメインごとに複数人でのサーバー管理が可能です。管理者ユーザーには業務内容に応じた権限を設定することができます。</td>
                            <td><span class="table_value">×</span></td>
                            <td><span class="table_value">×</span></td>
                            <td><span class="table_value">○</span></td>
                        </tr>
                        <tr>
                             <th colspan="2">セコムセキュリティ診断
                                 <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">セコムトラストシステムズ社のセキュリティ診断サービスで、ネットワーク上の脆弱性を厳格に診断。客観的なセキュリティチェックを定期的に実施します。</span>
                                </span>
                             </th>
                             <td class="hidden-s">セコムトラストシステムズ社のセキュリティ診断サービスで、ネットワーク上の脆弱性を厳格に診断。客観的なセキュリティチェックを定期的に実施します。</td>
                             <td><span class="table_value">○</span></td>
                             <td><span class="table_value">○</span></td>
                             <td><span class="table_value">○</span></td>
                         </tr>
                    </tbody>
                </table>
                    <div class="scrollHint">
                        <div class="scrollHint_icon">
                            <i class="ico ico_arrow-right"></i>
                            <span>スクロールできます</span>
                        </div>
                    </div>
                </div>
                </section>
                <!-- /.block -->
			</div><!-- /.section_body -->
       	</section>
        <section class="section">
            <h3 class="section_ttl">全プラン共通の仕様</h3>
            <div class="section_body">
                <section class="block block_functions">
                    <h4 class="block_ttl">サーバープログラム</h4>
                    <div class="block_body">
                        <table class="table table_striped planCommons">
                            <thead>
                            <tr>
                                <th colspan="2" class="w25per">機能</th>
                                <th>解説</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th colspan="2"><a href="../manual/man_program_soft.php">オリジナルCGI</a></th>
                                <td>Perl、Ruby、Python、PHPなどで記載された自作のCGIスクリプトをご利用いただけます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_program_php_ver.php">PHP</a></th>
                                <td>PHP8/PHP7/PHP5をご利用いただけます。<br>
                                    詳細はマニュアル「<a href="../manual/man_program_php_ver.php">PHPのバージョンについて</a>」をご参照ください。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_program_cron.php">Cron</a></th>
                                <td>指定時間に指定コマンド（プログラム）を自動的に実行する機能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2">SSI</th>
                                <td>SSIをご利用いただけます。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">運営サポート機能</h4>
                    <div class="block_body">
                        <table class="table table_striped planCommons">
                            <thead>
                            <tr>
                                <th colspan="2" class="w25per">機能</th>
                                <th>解説</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th colspan="2"><a href="../manual/man_install_auto.php">簡単インストール</a></th>
                                <td>WordPress や EC-CUBE などの人気プログラムを、パーミッション変更など面倒な手間なく設置・インストールすることができます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_order_change_plan.php">プラン変更</a></th>
                                <td>上位プランや下位プランへの変更が可能です。</td>
                            </tr>
                            <tr>
                                <th rowspan="5">Webサイト高速化</th>
                                <th class="secondaryCaption"><a href="xaccelerator.php">Xアクセラレータ</a></th>
                                <td>サイト表示を高速化すると共に同時アクセス数を大幅に拡張し、大量のアクセスに対応します。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_http2.php">HTTP/2</a></th>
                                <td>通信効率の改善により、SSL化したWebサイトの表示速度が大幅に向上する新しい通信規格です。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_php_fastcgi.php">FastCGI</a> </th>
                                <td>PHPやCGIによるCPU負荷を軽減し、プログラムを高速化します。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_php_apc.php">OPcache</a></th>
                                <td>
                                    PHPプログラムのキャッシュ・高速化モジュール「OPcache」に対応。<br>
                                    詳細はマニュアル「<a href="../manual/man_server_php_rapid.php">PHPの高速化について</a>」をご参照ください。
                                </td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_expires.php">ブラウザキャッシュ設定</a></th>
                                <td>ブラウザのキャッシュ利用を指示する設定をレスポンスヘッダに付加し、再アクセス時にキャッシュデータを読み込むことでサイト表示速度を向上します。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="xpagespeed.php">XPageSpeed</a></th>
                                <td>Webサイトが表示されるタイミングで自動的に表示データの最適化を行う機能。<br>Google PageSpeed Insightsスコア値アップによるSEO（検索エンジン最適化）が可能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../functions/service_backup.php">自動バックアップ</a></th>
                                <td>サーバー上のデータを毎日自動でバックアップし、サーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持しています。<br>バックアップデータは、復旧用のデータなどとしてご利用可能です。
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2">WAF</th>
                                <td>Webアプリケーションの脆弱性を悪用した攻撃からWebサイトを保護することが可能なWAF(Webアプリケーションファイアウォール)を設定できる機能です。
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="3">アクセス解析</th>
                                <th class="secondaryCaption"><a href="../manual/man_server_analyzer.php">アクセス解析ツール</a></th>
                                <td>Webアクセスログ解析結果を数値やグラフで見ることができます。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_log.php">アクセスログの取得</a></th>
                                <td>アクセスログの取得が可能です。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_server_logerror.php">エラーログの取得</a></th>
                                <td>エラーログの取得が可能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_server_limit.php">Webページアクセス制限</a></th>
                                <td>特定の人だけに公開するページを作ることができます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_server_ssh.php">SSH</a></th>
                                <td>UNIXコマンドを用いて、サーバーの遠隔操作が可能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_server_htaccess.php">.htaccess編集機能</a></th>
                                <td><p>ディレクトリ単位で、アクセス制限やユーザー認証などを設定することができる.htaccessを簡単に編集できる機能です。</p></td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_install_cgi_mailform.php">メールフォームの設置</a></th>
                                <td><p>お問い合わせの受付などにご利用可能なメールフォームをワンクリックで設置することができます。</p></td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="service_webfont.php">Webフォント設定</a></th>
                                <td><p>Webフォントの設定が可能です。</p></td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_server_ads.php">ads.txt</a></th>
                                <td><p>ads.txtの設定が可能です。</p></td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_server_resource_information.php">リソースモニター</a></th>
                                <td><p>当日中のCPU・メモリ・転送量の利用状況を過去3ヶ月分確認することができます。</p></td>
                            </tr>

                            <!--<tr>
                                <th colspan="2"><a href="../manual/man_server_move.php">簡単サーバー移動機能</a></th>
                                <td>一部高負荷サーバーのお客様が、簡単に別のサーバーへ移動できる機能です。</td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                                <td><span class="table_value">○</span></td>
                            </tr>-->
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">WordPress運用支援・セキュリティ設定</h4>
                    <div class="block_body">
                        <table class="table table_striped planCommons">
                            <thead>
                            <tr>
                                <th class="w25per">機能</th>
                                <th>解説</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th><a href="../manual/man_install_auto_word.php">WordPress簡単インストール</a></th>
                                <td>非常に高い人気を持つWordPressを手間なく簡単にインストールすることができます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_wp_theme_install.php">WordPressテーマインストール機能</a></th>
                                <td>WordPressの人気テーマをダウンロードの手間なく簡単にインストールできます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_install_copy_word.php">WordPressのサイトコピー</a></th>
                                <td>「WordPress簡単インストール」機能で作成したWordPressのサイトをコピーし、動作確認用のテストサイトや短時間での新規サイト作成などに活用できます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_install_transfer_wp.php">WordPress簡単移行</a></th>
                                <td>必要な情報を入力するだけで、他社サーバーで運用中のWordPressを自動的にエックスサーバーへ移行できます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_server_wprecovery.php">WordPressリカバリー</a></th>
                                <td>WordPressで起こった問題に対して、復旧やリセットを行うことができます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_server_wpsecurity.php#login">ログイン試行回数制限</a></th>
                                <td>短時間に連続してログイン処理(失敗)が行われた場合にアクセスを制限する機能です。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_server_wpsecurity.php#ipcheck">国外からのアクセス制限（ダッシュボード、XML-RPC、REST API）</a></th>
                                <td>国外からのアクセスを制限することで、不正なログインやDDoS攻撃の踏み台となることを防ぎ、WordPressサイトのセキュリティを向上させることができます。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_server_wpsecurity.php#comment">大量コメント・トラックバック制限</a></th>
                                <td>コメント・トラックバックスパムが行われた場合に、一時的にコメント・トラックバックを制限します。</td>
                            </tr>
                            <tr>
                                <th><a href="../manual/man_server_wpsecurity.php#comment">国外からのコメント・トラックバック制限</a></th>
                                <td>国外からのコメント投稿やトラックバックを制限します。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">FTP</h4>
                    <div class="block_body">
                        <table class="table table_striped planCommons">
                            <thead>
                            <tr>
                                <th colspan="2" class="w25per">機能</th>
                                <th>解説</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th colspan="2">FTP</th>
                                <td>ファイルをサーバーにアップロード（ダウンロード）できます。</td>
                            </tr>
                            <tr>
                                <th rowspan="2">FTPセキュリティ</th>
                                <th class="secondaryCaption">FTP over SSL</th>
                                <td>通信を暗号化し、より安全に送受信ができるFTPSをご利用いただけます。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_ftp_id.php">FTP制限設定</a></th>
                                <td>FTPでの接続が可能なIPアドレスを設定し、他のIPアドレスからの接続を制限します。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_tool_file.php">ファイルマネージャ</a></th>
                                <td>Webブラウザを使用してサーバー上のファイル操作ができるツールです。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block block_functions">
                    <h4 class="block_ttl">メール機能</h4>
                    <div class="block_body">
                        <table class="table table_striped planCommons">
                            <thead>
                            <tr>
                                <th colspan="2">機能</th>
                                <th>解説</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th colspan="2"><a href="../manual/man_mail_mailinglist.php">メーリングリスト</a></th>
                                <td>複数の相手に同じ内容のメールを送信することができるメーリングリストを、簡単にご利用いただける機能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_mail_mailmagazine.php">メールマガジン</a></th>
                                <td>新聞や雑誌のような情報発信をメールで行うことができるメールマガジンを、簡単にご利用いただける機能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2">SMTP-AUTH</th>
                                <td>メールの送信時にSMTPサーバーによってユーザ認証を行う機能です。</td>
                            </tr>
                            <tr>
                                <th colspan="2">IMAP</th>
                                <td>メールをサーバーに残したまま閲覧することができます。</td>
                            </tr>
                            <tr>
                                <th rowspan="8">メールセキュリティ</th>
                                <th class="secondaryCaption">アンチウィルス</th>
                                <td>ウィルスメールの駆除機能です。<img src="../img/common/img_logo_fsecure.png" width="68" height="19" alt="F-Secure." /></td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption">スパムフィルター</th>
                                <td>特定条件の受信メールを排除する機能です。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_mail_spam_setting.php">高性能スパムフィルタ（Cloudmark）</a></th>
                                <td>高い検知精度を誇るCloudmark社のスパムフィルタを使用した設定が可能です。1サーバーアカウント毎に設定できるメールアドレス数に上限があります。<br>
                                    <br>
                                    スタンダード：100個<br>
                                    プレミアム：100個<br>
                                    ビジネス：1,000個</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption">POP over SSL</th>
                                <td>ご利用のメールソフトとサーバー間のPOPによる通信を暗号化し、盗聴を防止する仕組みです。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption">SMTP over SSL</th>
                                <td>ご利用のメールソフトとサーバー間のSMTPによる通信を暗号化し、盗聴を防止する仕組みです。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption">IMAP over SSL</th>
                                <td>ご利用のメールソフトとサーバー間のIMAPによる通信を暗号化し、盗聴を防止する仕組みです。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_mail_dkim.php">DKIM</a></th>
                                <td>送信メールの改ざん・なりすましを防ぐ技術です。送信メールの信頼性向上やメール到達率の向上が期待されます。</td>
                            </tr>
                            <tr>
                                <th class="secondaryCaption"><a href="../manual/man_mail_dmarc.php">DMARC</a></th>
                                <td>対象ドメイン名を使用した不正メール送信を制御することができます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_tool_mail.php">Webメール</a></th>
                                <td>Webブラウザからメールの送受信を行うことができます。スマートフォン・タブレットにも対応しています。</td>
                            </tr>
                            <tr>
                                <th colspan="2">メールボックス容量設定</th>
                                <td>メールボックスの容量を設定できます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_mail_transfer.php">メール転送</a></th>
                                <td>受信したメールをあらかじめ指定したメールアドレスへ自動転送することが可能です。複数の転送先を指定することができます。</td>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="../manual/man_mail_mailreply.php">メール自動返信</a></th>
                                <td>受信したメールに対し定型文を自動で返信することができます。</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->
            </div><!-- /.section_body -->
        </section>
        <section class="section">
        	<h3 class="section_ttl">動作確認済みプログラム一覧</h3>
        	<div class="section_body">
                <p><span class="sticker"><span class="label label_sticker">簡単インストール</span></span>が表示されているプログラムは、<a href="../manual/man_install_auto.php">簡単インストール機能</a>にて簡単に導入いただけます。</p>
                
                <table class="table table_striped mb5">
                    <thead>
                        <tr>
                            <th>プログラム名</th>
                            <th class="w60per">備考</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>WordPress 日本語版 (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <a class="sticker" href="../manual/man_install_auto_word.php"><span class="label label_sticker">簡単インストール</span></a><br>
                                バージョン6.8系(PHP7.4〜PHP8.3)
                            </td>
                        </tr>
						<tr>
                            <th>EC-CUBE4 (ショッピングカート)</th>
                            <td class="tac" colspan="2"> ○<br>
                                <a class="sticker" href="../manual/man_install_auto_ec4.php"><span class="label label_sticker">簡単インストール</span></a><br>バージョン4.3.0(PHP8.1〜PHP8.3)</td>
                        </tr>
                        <tr>
                            <th>EC-CUBE3 (ショッピングカート)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                バージョン3.0.18
                          </td>
                        </tr>
                        <tr>
                            <th>PukiWiki (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <a class="sticker" href="../manual/man_install_auto_puki.php"><span class="label label_sticker">簡単インストール</span></a>
                            </td>
                        </tr>
                        <tr>
                            <th>concrete5 (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <!-- バージョン9.2.2 -->
                            </td>
                        </tr>
                        <tr>
                            <th>Joomla (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <!-- バージョン5.0.1 / 4.4.1 -->
                            </td>
                        </tr>
                        <tr>
                            <th>MODX (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <!-- バージョン3.0.4-pl -->
                            </td>
                        </tr>
                        <tr>
                            <th>Movable Type (CMS)</th>
                            <td class="tac" colspan="2">
                                ○<br>
                                <!-- バージョン8.0.2 -->
                            </td>
                        </tr>
                        <tr>
                            <th>Drupal (CMS)</th>
                            <td class="tac">
                                ○<br>
                                <!-- バージョン10.1.6 / 9.5.11 / 8.9.20 -->
                            </td>
                        </tr>
                        <tr>
                            <th>Magento Open Source (ショッピングカート)</th>
                            <td class="tac" >×</td>
                        </tr>
                        <tr>
                            <th>Zen Cart (ショッピングカート)</th>
                            <td class="tac">
                                ○<br>
                                <!-- バージョン1.5.8a -->
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="tar">（2025年4月22日最終更新）</p>
                <ul class="note-list note-list_margin">
               	  <li>※既にご利用中のサーバーにおける動作確認済みプログラムの一覧は<a href="../manual/man_install_outside_program.php">こちら</a>をご参照ください。</li>
                    <li>※特に補足がない場合は、最終更新時点の最新バージョンおよび <b>PHP8.1、MariaDB10.5</b> において動作することを確認しております。</li>
                    <li>※インストール可能であったプログラムの一覧であり、全機能の動作を保証するものではありません。</li>
                </ul>
                
            </div>
        </section>
        <!-- /.section -->

		<aside class="tac">
            <p class="mb0"><a href="https://drive.xserver.ne.jp/" target="_blank"><img class="hover fluid-sm" src="../img/price/bnr_xd.png?date=20241016" alt="クラウド型高速オンラインストレージ　XServerドライブ サービスサイトへ"></a></p>
        </aside>
        
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
