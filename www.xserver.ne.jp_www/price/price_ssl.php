<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>独自SSL - 料金 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーで取り扱っている独自SSLのご利用料金に関するご案内です。エックスサーバーでは【無料】の「無料独自SSL」および【有料】の「オプション独自SSL」を取り扱っています。">

</head>

<body id="pid-price">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
			<h2 class="ttl"><span class="label label_ttl-price"><i class="ico ico_tag"></i>料金</span></h2>
 <?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">独自SSL</span></p>

        <aside class="mb30 tac">
           <p><a href="../functions/service_ssl.php#free-ssl"><img class="hover fluid-sm" src="../img/common/bnr_free_ssl_772-90.png" alt="標準機能 独自SSLが無料・無制限"></a></p>
           <p class="tac font-bold mb5 font-l">＼ <span class="orange">9/30(火)17時まで！</span>今ならおトク！／</p>
           <p><a href="<?php print $SITE_URL; ?>campaign/campaign_250430.php"><img class="hover fluid-sm" src="<?php print $SITE_URL; ?>img/campaign/250430/cp_bnr.png?date=20250626" alt="SSL証明書 最大20%OFFキャンペーン"></a></p>
        </aside>


        <section class="section">
            <h3 class="section_ttl">オプション独自SSL</h3>
            <div class="section_body">
                <p>
                    オプション独自SSLではサイトシールに対応した証明書や著名なブランドなどを取り扱っております。<br>
                    いずれもリーズナブルな価格でご利用していただけます。
                </p>
                <p class="mb30">
                    ご利用料金は、下記の表をご参照ください。<br>
                    新規ご契約の場合と、契約更新の場合とで必要な費用が異なっておりますのでご注意ください。
                </p>

                <section class="block">
                    <h4 class="block_ttl">初回契約時お支払い料金</h4>
                    <div class="block_body">
                        <p>初回契約時にお支払いいただく料金です。</p>
                        <p class="taxCaption font-s tar mb0">（税込）</p>
                        <table class="table optionTable primary-table-l">
                            <thead>
                            <tr>
                                <th>ブランド</th>
                                <th>認証レベル</th>
                                <th>年間料金（税込）</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_coressl_short.png?date=230328" alt="クラウドSSL">
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">880円</div><span class="numYears__price--num">836</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/coressl.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">スピード認証SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">15,400円</div><span class="numYears__price--num">12,320</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/securecore.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">企業認証SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_2.png" alt="認証レベル2"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">33,000円</div><span class="numYears__price--num">26,400</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/securecore_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">EV SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_3.png" alt="認証レベル3"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">83,600円</div><span class="numYears__price--num">66,880</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/securecore_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_geotrust_short.png" alt="geotrust"><span class="sslCaption">クイックSSLプレミアム</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">14,300円</div><span class="numYears__price--num">11,440</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/geotrust.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_digicert_short.png" alt="digicert"><span class="sslCaption">セキュア・サーバID</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_2.png" alt="認証レベル2"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">80,300円</div><span class="numYears__price--num">64,240</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/digicert_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_digicert_short.png" alt="digicert"><span class="sslCaption">セキュア・サーバID EV</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_3.png" alt="認証レベル3"></td>
								<td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price red"><div class="normalPrice">165,000円</div><span class="numYears__price--num">132,000</span>円〜※</div></div></td>
                                <td><a href="../functions/ssl/digicert_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
						<p class="note mb0">※<span class="red font-bold">2025年4月30日12:00 - 2025年9月30日17:00までのキャンペーン価格です。</span></p>
                        <p class="note">※その他のブランドも選択することができます。詳細は、「<a href="../functions/ssl/rapidssl.php">ラピッドSSL</a>」をご参照ください。</p>
                    </div>
                </section>
                <!-- /.block -->

                <section class="block">
                    <h4 class="block_ttl">契約更新時お支払い料金</h4>
                    <div class="block_body">
                        <p>契約更新時にお支払いいただく料金です。</p>
                        <p class="taxCaption font-s tar mb0">（税込）</p>
                        <table class="table optionTable primary-table-l">
                            <thead>
                            <tr>
                                <th>ブランド</th>
                                <th>認証レベル</th>
                                <th>年間料金（税込）</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_coressl_short.png?date=230328" alt="クラウドSSL">
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">880</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/coressl.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">スピード認証SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">15,400</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/securecore.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">企業認証SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_2.png" alt="認証レベル2"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">33,000</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/securecore_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_securecore.png?date=20250626" alt="クラウドセキュア"><span class="sslCaption">EV SSL</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_3.png" alt="認証レベル3"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">83,600</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/securecore_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_geotrust_short.png" alt="geotrust"><span class="sslCaption">クイックSSLプレミアム</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_1.png" alt="認証レベル1"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">14,300</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/geotrust.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_digicert_short.png" alt="digicert"><span class="sslCaption">セキュア・サーバID</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_2.png" alt="認証レベル2"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">80,300</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/digicert_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/functions/img_logo_digicert_short.png" alt="digicert"><span class="sslCaption">セキュア・サーバID EV</span>
                                </td>
                                <td><span class="mr10 hidden-s hidden-m">認証レベル</span><img src="../img/functions/img_auth_level_3.png" alt="認証レベル3"></td>
                                <td><div class="numYears"><div class="numYears__caption">年間料金</div><div class="numYears__price"><span class="numYears__price--num">165,000</span>円〜</div></div></td>
                                <td><a href="../functions/ssl/digicert_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.block -->

                <section class="caution">
                    <h3 class="caution_ttl"><i class="ico ico_exclamation-fill"></i>お申し込み前に必ずお読みください。</h3>
                    <div class="caution_body">
                        <section class="caution_item">
                            <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>ご利用の範囲</h4>
                            <div class="caution_item_body">
                                <p>
                                    本サービスは、利用者が当サーバーで運用している独自ドメインや、サブドメインを利用したSSL接続を提供するものです。<br>
                                    当サーバー以外の外部サーバーではご利用いただくことができません。
                                </p>
                                <ul class="note-list font-s">
                                    <li>※初期ドメイン(xsrv.jp)での利用はできません。</li>
                                    <li>※本サービス以外で取得されたSSLサーバー証明書は、当サーバーにてご利用いただくこと(いわゆる、SSLサーバー証明書の持ち込み対応)はできません</li>
                                    <li>※独自IPアドレスをご利用の場合は、1契約につきIPアドレスを1つ付与いたしますが、SSL接続以外の目的にはご利用いただくことができません。</li>
                                    <li>※64文字以上のコモンネームはお申し込みできません。</li>
                                </ul>
                            </div>
                        </section>
                        <!-- /.caution_item -->

                        <section class="caution_item">
                            <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>有効期限について</h4>
                            <div class="caution_item_body">
                                <p>当該SSL証明書が発行された日より、お申し込み時に選択した契約期間が経過するまでが有効期限となります。</p>
                            </div>
                        </section>
                        <!-- /.caution_item -->

                        <section class="caution_item">
                            <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>更新について</h4>
                            <div class="caution_item_body">
                                <p>本サービスを継続してご利用の場合、有効期限が経過する毎に新たにSSL証明書を取得していただく必要があります。</p>
                                <p>
                                    本サービスの有効期限日85日前から有効期限日までは、更新のお手続きとしてお申し込みいただくことができます。<br>
                                    更新手続きにより独自SSLをお申し込みの場合は、弊社の定める更新価格でSSL証明書の取得が可能です。
                                </p>
                                <p class="note font-s">
                                    ※Apple社などのブラウザベンダーの仕様変更に伴い、2020年9月1日以降に発行されたSSL証明書のうち、有効期間が398日を超えるものは無効化されるようになりました。<br>
                                    そのため、お支払い完了後、更新手続きを有効期限日の約1か月以上前に行われた場合、更新した証明書の有効期間が短くなりますのでご注意ください。
                                </p>
                                <p>
                                    なお、SSLブランドや独自IPアドレスの利用有無を変更される場合は、更新でのお手続きはできません。<br>
                                    新規お申し込みでお手続きを行ってください。
                                </p>
                            </div>
                        </section>
                        <!-- /.caution_item -->


                        <section class="caution_item">
                            <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>複数年契約について</h4>
                            <div class="caution_item_body">
                                <p>複数年契約でご契約の場合、契約期間の更新とは別にSSL証明書の再発行が必要になります。<br>
                                    詳細は マニュアル「<a href="../manual/man_order_ssl.php#link-f">複数年契約について</a>」をご確認ください。
                                </p>
                            </div>
                        </section>
                        <!-- /.caution_item -->

                        <section class="caution_item">
                            <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>解約について</h4>
                            <div class="caution_item_body">
                                <p>
                                    本サービスは、SSL証明書の契約終了日の経過をもって自動解約となります。<br>
                                    また、契約期間内であってもXServerアカウント内より、解約手続きを行うことで途中解約が可能です。<br>
                                    なお、途中解約された場合は、当該SSL証明書の更新に関する通知を停止いたします。<br>
                                </p>
                                <p class="note font-s">※途中解約された場合でも、契約終了日までは引き続きのご利用が可能です。</p>
                            </div>
                        </section>
                        <!-- /.caution_item -->
                    </div>
                </section>

                <p class="tac mt40"><a class="button button02--fill" href="../manual/man_order_ssl.php">お申し込みの手順を確認する</a></p>

            </div>
        </section>
        <!-- /.section -->

        
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