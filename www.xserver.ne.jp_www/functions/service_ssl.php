<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>独自SSLについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは独自ドメイン名がそのままURLとなる「独自SSL」に対応しています。無制限・無料で利用可能な『無料独自SSL』と著名ブランドのSSLサーバー証明書や独自IPアドレスの利用も可能な『オプション独自SSL』を提供しています。">

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

        <p class="ttl"><span class="label">独自SSL</span></p>
		
        <p class="tac font-bold mb5 font-l">＼ <span class="orange">9/30(火)17時まで！</span>今ならおトク！／</p>
        <p class="tac"><a href="<?php print $SITE_URL; ?>campaign/campaign_250430.php"><img class="hover fluid-sm" src="<?php print $SITE_URL; ?>img/campaign/250430/cp_bnr.png?date=20250626" alt="SSL証明書 最大20%OFFキャンペーン"></a></p>

        <p class="mb40">エックスサーバーでは、多彩なSSL証明書が手軽に導入できます。SSL証明書の仕組みや基礎知識は<a href="ssl/about_ssl.php">「SSL証明書とは」</a>をご参照ください。</p>

        <section class="section">

            <h3 class="section_ttl">エックスサーバーの独自SSL</h3>

            <div class="section_body">

            <section class="feature">
                    <h3 class="feature_ttl clearfix"><span class="feature_ttl_label">お客様によるSSLサーバー証明書のインストール作業なし！</span></h3>
                    <div class="feature_description">
                        <p>SSL証明書のインストール作業は<strong class="font-l bright-yellow">自動</strong>で行われます。<br>
                            お客様においては、お申し込み後にSSL証明書発行ベンダーからのメール連絡に対する認証作業のみお願いいたします。</p>
                    </div>
                </section>
                <!-- /.feature -->

                <section class="feature feature-ssl">
                    <h3 class="feature_ttl clearfix"><span class="feature_ttl_label">用途や予算に応じて柔軟にSSLサーバー証明書の導入が可能！</span></h3>
                    <div class="feature_description-ssl">
                        <p>無制限・無料で利用可能な<strong class="font-l bright-yellow">「無料独自SSL」</strong>と、サイトシールに対応した証明書や企業認証SSL・EV SSLの証明書を取り扱う<strong class="font-l bright-yellow">「オプション独自SSL」</strong>が利用可能です。</p>
                    </div>
                    
                    <div class="ssltype">
                        <section class="block ssltype_block">
                            <a id="free-ssl" name="free-ssl"></a>
                            <h4 class="block_ttl">無料独自SSL</h4>
                            <div class="block_body">
                                <p class="tac mb25"><img src="../img/functions/img_point_freessl.png" class="ssltype_block_img" alt="簡単・手軽に使える" /></p>
                                <p>当サーバーで運営中のドメインに対して、<strong class="bright-yellow">無料・無制限</strong>で設置可能な独自SSLです。短時間で証明書の発行が可能で、簡単・手軽にセキュリティの強化ができます。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block ssltype_block">
                            <a id="option-ssl" name="option-ssl"></a>
                            <h4 class="block_ttl">オプション独自SSL</h4>
                            <div class="block_body">
                                <p class="tac mb25"><img src="../img/functions/img_point_optionssl.png?date=250617" class="ssltype_block_img" alt="高い信頼性を提供" /></p>
                                <p><strong class="bright-yellow">サイトシールに対応</strong>した著名ブランドが選択可能な独自SSLです。<strong class="bright-yellow">セキュリティ診断機能</strong>の付いた証明書や、低コストで導入可能な「ドメイン認証SSL」、<strong class="bright-yellow">最高水準の信頼性</strong>を誇る「EV SSL」まで幅広い証明書が利用できます。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                    </div>
                    
                </section>
                <!-- /.feature -->
                
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">

            <h3 class="section_ttl">取り扱いSSLブランド</h3>
            <div class="section_body">

                <section class="block sslAuth">

                    <div class="authInfo authInfo--dv">

                        <div class="authInfo__head">
                            <h4 class="authInfo__headTtl">ドメイン認証SSL</h4>
                            <div class="authInfo__headLevel">
                                <span class="authInfo__headLevelCopy">認証レベル</span>
                                <img src="../img/functions/img_auth_level_1.png" alt="1">
                            </div>
                        </div>
                        <div class="authInfo__body">
                            <p class="authInfo__copy">スピード重視でセキュリティ強化！無料または低価格で利用可能な証明書</p>
                            <ul>
                                <li class="authInfo__list"><i class="ico ico_check"></i>最短即日で発行、コストパフォーマンスに優れた証明書</li>
                                <li class="authInfo__list"><i class="ico ico_check"></i>手軽にセキュリティを強化したい方にオススメ</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /authInfo -->
                    <table class="table sslauth_table primary-table-l">
                        <thead>
                        <tr>
                            <th>ブランド</th>
                            <th>サービス名</th>
                            <th>年間料金<span class="font-s">(税込)</span></th>
                            <th>
                                <div class="balloon">
                                    セキュリティ<br class="visible-l">診断
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">証明書を利用しているサイトに対して、<br>マルウェアやフィッシングURLといった<br>脅威がないか定期的に診断を行います。<br><a href="#security-diagnosis">セキュリティ診断について</a></span>
                                </span>

                                    <span class="pr">注目</span>
                                </div>
                            </th>
                            <th>
                                サイト<br class="visible-l">シール
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サイト上に掲載することで、<br>信頼性を視覚的にアピールできます。<br><a href="#site-seal">サイトシールについて</a></span>
                                </span>
                            </th>
                            <th>発行速度</th>
                            <th>有効期間</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_letsencrypt.png" alt="Let's Encrypt">
                                <span class="ssllineup_type ssllineup_type-free">無料独自SSL</span>
                            </td>
                            <td>Let's Encrypt</td>
                            <td><b class="font-xl">0</b>円</td>
                            <td><span class="font22">-</span></td>
                            <td><span class="font22">-</span></td>
                            <td>即時〜1日</td>
                            <td>90日</td>
                            <td><a href="ssl/freessl.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_coressl.png?date=230328" alt="クラウドSSL">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>クラウドSSL</td>
                            <td><b class="font-xm"><s>880円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">836</b>円〜※</p></td>
                            <td><span class="font22">-</span></td>
                            <td><span class="font22">○</span></td>
                            <td>即時〜1日</td>
                            <td>1年</td>
                            <td><a href="ssl/coressl.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_securecore.png?date=20250626" alt="クラウドセキュア">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>スピード認証SSL</td>
							<td><b class="font-xm"><s>15,400円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">12,320</b>円〜※</p></td>
                            <td><span class="font22">○</span></td>
                            <td><span class="font22">○</span></td>
                            <td>即時〜1日</td>
                            <td>1年</td>
                            <td><a href="ssl/securecore.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_geotrust.png" alt="geotrust">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>クイックSSL<br class="visible-l">プレミアム</td>
							<td><b class="font-xm"><s>14,300円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">11,440</b>円〜※</p></td>
                            <td><span class="font22">-</span></td>
                            <td><span class="font22">○</span></td>
                            <td>即時〜1日</td>
                            <td>1年</td>
                            <td><a href="ssl/geotrust.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <!-- sslAuth -->

                <section class="block sslAuth">

                    <div class="authInfo authInfo--ov">

                        <div class="authInfo__head">
                            <h4 class="authInfo__headTtl">企業認証SSL</h4>
                            <div class="authInfo__headLevel">
                                <span class="authInfo__headLevelCopy">認証レベル</span>
                                <img src="../img/functions/img_auth_level_2.png" alt="2">
                            </div>
                        </div>
                        <div class="authInfo__body">
                            <p class="authInfo__copy">企業・法人サイトに最適！運営企業の実在性証明が可能！</p>
                            <ul>
                                <li class="authInfo__list"><i class="ico ico_check"></i>運営組織の法的実在性を証明することで、サイトの信頼性がアップ</li>
                                <li class="authInfo__list"><i class="ico ico_check"></i>企業サイトや、重要な個人情報を入力するフォームなどにオススメ</li>
                            </ul>
                        </div>

                    </div>

                    <table class="table sslauth_table primary-table-l">
                        <thead>
                        <tr>
                            <th>ブランド</th>
                            <th>サービス名</th>
                            <th>年間料金<span class="font-s">(税込)</span></th>
                            <th>
                                <div class="balloon">
                                    セキュリティ<br class="visible-l">診断
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">証明書を利用しているサイトに対して、<br>マルウェアやフィッシングURLといった<br>脅威がないか定期的に診断を行います。<br><a href="#security-diagnosis">セキュリティ診断について</a></span>
                                </span>

                                    <span class="pr">注目</span>
                                </div>
                            </th>
                            <th>サイト<br class="visible-l">シール
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サイト上に掲載することで、<br>信頼性を視覚的にアピールできます。<br><a href="#site-seal">サイトシールについて</a></span>
                                </span>
                            </th>
                            <th>発行速度</th>
                            <th>有効期間</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_securecore.png?date=20250626" alt="クラウドセキュア">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>企業認証SSL</td>
							<td><b class="font-xm"><s>33,000円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">26,400</b>円〜※</p></td>
                            <td><span class="font22">○</span></td>
                            <td><span class="font22">○</span></td>
                            <td>最短1営業日</td>
                            <td>1年</td>
                            <td><a href="ssl/securecore_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_digicert.png" alt="digicert">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>セキュア・サーバID</td>
							<td><b class="font-xm"><s>80,300円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">64,240</b>円〜※</p></td>
                            <td><span class="font22">○</span></td>
                            <td><span class="font22">○</span></td>
                            <td>最短3営業日</td>
                            <td>1年</td>
                            <td><a href="ssl/digicert_ov.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- /authInfo -->
                </section>
                <!-- sslAuth -->

                <section class="block sslAuth">

                    <div class="authInfo authInfo--ev">

                        <div class="authInfo__head">
                            <h4 class="authInfo__headTtl">EV SSL</h4>
                            <div class="authInfo__headLevel">
                                <span class="authInfo__headLevelCopy">認証レベル</span>
                                <img src="../img/functions/img_auth_level_3.png" alt="3">
                            </div>

                        </div>
                        <div class="authInfo__body">
                            <p class="authInfo__copy">最高の信頼性と安全性を備えた証明書</p>
                            <ul>
                                <li class="authInfo__list"><i class="ico ico_check"></i>世界標準の厳格な審査を経て発行、もっとも高い信頼性の証明書</li>
                                <li class="authInfo__list"><i class="ico ico_check"></i>物理的にも運営組織の実在性を証明することで、信頼性がさらにアップ</li>
                            </ul>
                        </div>

                    </div>
                    <!-- /authInfo -->

                    <table class="table sslauth_table primary-table-l">
                        <thead>
                        <tr>
                            <th>ブランド</th>
                            <th>サービス名</th>
                            <th>年間料金<span class="font-s">(税込)</span></th>
                            <th>
                                <div class="balloon">
                                    セキュリティ<br class="visible-l">診断
                                    <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">証明書を利用しているサイトに対して、<br>マルウェアやフィッシングURLといった<br>脅威がないか定期的に診断を行います。<br><a href="#security-diagnosis">セキュリティ診断について</a></span>
                                </span>
                                    <span class="pr">注目</span>
                                </div>
                            </th>
                            <th>サイト<br class="visible-l">シール
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">サイト上に掲載することで、<br>信頼性を視覚的にアピールできます。<br><a href="#site-seal">サイトシールについて</a></span>
                                </span>
                            </th>
                            <th>発行速度</th>
                            <th>有効期間</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_securecore.png?date=20250626" alt="クラウドセキュア">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>EV SSL</td>
							<td><b class="font-xm"><s>83,600円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">66,880</b>円〜※</p></td>
                            <td><span class="font22">○</span></td>
                            <td><span class="font22">○</span></td>
                            <td>最短10営業日</td>
                            <td>1年</td>
                            <td><a href="ssl/securecore_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../img/functions/img_brandlist_digicert.png?date=230328" alt="セキュア・サーバID EV">
                                <span class="ssllineup_type ssllineup_type-option">オプション独自SSL</span>
                            </td>
                            <td>セキュア・サーバID EV</td>
							<td><b class="font-xm"><s>165,000円〜</s></b><br><p class="red mt5 mb0"><b class="font-xl">132,000</b>円〜※</p></td>
                            <td><span class="font22">○</span></td>
                            <td><span class="font22">○</span></td>
                            <td>最短3〜5営業日</td>
                            <td>1年</td>
                            <td><a href="ssl/digicert_ev.php" class="btn btn_blue sslauth_btn">詳細<i class="ico ico_chevron-right ml5"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <!-- sslAuth -->
				
                <p class="note mb5">
                    ※<span class="red font-bold">2025年4月30日12:00 - 2025年9月30日17:00までのキャンペーン価格です。</span>
                </p>
                <p class="note mb5">
                    ※表示価格は全て税込です。
                </p>
                <p class="note mb5">
                    ※取得したSSLサーバー証明書は当社の対応サービスでのみ設定可能です。<br>また、当社の対応サービス以外で取得した証明書はご利用いただけません。
                </p>
                <p class="mb5">
                    ※その他のブランドも選択することができます。詳細は、「<a href="ssl/rapidssl.php">ラピッドSSL</a>」をご参照ください。
                </p>
                <p class="note">
                    ※新規お申し込み、更新の受付を終了した「グローバルサイン クイック認証SSL」の仕様については「<a href="ssl/globalsign.php">こちら</a>」をご参照ください。
                </p>

                <p class="tac mt30 mb40"><a href="../price/price_ssl.php" class="button button02--fill">オプション独自SSLの料金一覧を見る</a></p>
                
                <aside class="msg msg-siteseal" id="site-seal">
                    <h6 class="msg_ttl"><i class="ico ico_circle"></i>サイトシールについて</h6>
                    <div class="msg_body media">
                        <div class="media_image media_image_rev">
                            <p class="tac">当社取扱証明書のサイトシール例</p>
                            <img src="../img/functions/img_siteseal_ex.png?date=20250626" alt="サイトシール例"/>
                        </div>
                        <div class="media_body">
                            <p>ウェブサイト上に掲載することで、信頼できる第三者機関（認証局）の認証を受けている証明となり、ウェブサイトを訪れたユーザーに対してセキュリティ対策をしている安全なサイトであることを視覚的にアピールできます。</p>
                            <p>また、<a href="#security-diagnosis">セキュリティ診断</a>などのサービスを付加した証明書では、サイトシールに診断状況が記載されるものがあり、サイトセキュリティ向上への取り組みをさらに高いレベルで示すことができます。</p>
                            <p>サイトシールをクリックすることで「コモンネーム」「有効期間」「ステータス」などを記載した詳細情報が表示され、企業認証やEVの証明書では「組織名」や「住所」など、運営組織のより具体的な情報が確認できます。</p>
                        </div>
                    </div>
                </aside>
                
                <section id="security-diagnosis">
                    <div class="security-diagnosis_band clearfix">
                        <img src="../img/functions/img_shield.png" alt="">
                        <p class="security-diagnosis_ttl">これからのSSL証明書に求められる「安全性」とは</p>
                    </div>
                    <!-- security-diagnosis_band -->

                    <div class="security-diagnosis_inner">
                       <div class="security-diagnosis_inner_ttl">
                           <ul>
                                <li><img src="../img/functions/img_security_diagnosis.png" alt="セキュリティ診断"></li>
                                <li class="txt"><span>対応のSSL証明書について</span></li>
                            </ul>
                        </div>
                        <!-- security-diagnosis_inner_ttl -->

                        <div class="security-diagnosis_desc">
                            <p>ウィルス感染や機密情報の取得などを目的とする攻撃者によって、マルウェアやフィッシングURLをWebサイト上に組み込まれる被害は毎年、多く報告されています。</p>
                            <p>これらの脅威への対策の一環として、セキュリティ診断を付帯させ、Webサイトの総合的な安全性・信頼性を示すサービスとしてもう一歩踏み込んだSSL証明書を提供するブランドも登場しています。</p>
                            <p class="mb0">SSLによる実在証明と暗号化が当たり前になった今、このようなセキュリティ診断対応のSSL証明書を選択することで、サイトセキュリティのさらなる向上に取り組んでみてはいかがでしょうか。</p>
                        </div>
                        <!-- security-diagnosis_desc -->

                       <div class="security-diagnosis_secure_ttl clearfix">
                            <p>エックスサーバーがおすすめする<br class="visible-s">「セキュリティ診断」対応SSL証明書</p>
                            <img src="../img/functions/img_securecore.png?date=20250626" alt="クラウドセキュアロゴ">
                            <ul>
                                <li>ドメイン認証</li>
                                <li>企業認証</li>
                                <li>EV</li>
                            </ul>
                       </div>
                       <!-- security-diagnosis_secure_ttl -->

                       <div class="security-diagnosis_secure_desc">
                            <div class="security-diagnosis_secure_desc_left">
                                <p>「CloudSecure（クラウドセキュア）」は、高い信頼性とコストパフォーマンスに優れるSSL証明書ブランドです。</p>
                                <p>すべてのラインアップでセキュリティ診断サービスに標準対応しており、SSLを利用するサイトにおいてマルウェア、フィッシングURLといった脅威の存在を<strong class="bright-yellow">毎日自動診断</strong>（※）します。</p>
                                <p><strong class="bright-yellow">証明書の利用料のみでご利用いただけます</strong>ので、別途料金は必要ありません。</p>
                                <p class="note mb0">※特定のURLを起点とした既定のページ数の診断を毎日行います。詳細は<a href="https://www.securecore.co.jp/" target="_blank">クラウドセキュア公式サイト</a><i class="ico ico_new-window"></i>をご確認ください。</p>
                            </div>
                           <!-- security-diagnosis_secure_desc_left -->
                            <div class="security-diagnosis_secure_desc_right">
                                <p>診断済みを示すサイトシール付き</p>
                                <div class="security-diagnosis_secure_desc_right_siteseal">
                                    <dl class="mb15">
                                        <dt>安全性が伝わりやすいデザイン</dt>
                                        <dd><img src="../img/functions/img_siteseal_done.png?date=20250626" alt="クラウドセキュアサイトシール"></dd>
                                    </dl>
                                    <dl>
                                        <dt class="gray">問題検知時は解消までこちらを表示</dt>
                                        <dd><img src="../img/functions/img_siteseal_detection.png?date=20250626" alt="問題検知時のクラウドセキュアサイトシール"></dd>
                                    </dl>
                                </div>
                                <!-- security-diagnosis_secure_desc_right_siteseal -->
                            </div>
                           <!-- security-diagnosis_secure_desc_right -->

                        </div>
                        <!-- security-diagnosis_secure_desc -->

                        <div class="security-diagnosis_lineup">
                            <p class="security-diagnosis_lineup_ttl">「クラウドセキュア」<br class="visible-s">ラインアップの詳細はこちら</p>
                            <ul class="security-diagnosis_lineup_list">
                                <li>
                                    <a href="ssl/securecore.php" class="btn btn--primary">クラウドセキュア スピード認証SSL<br><span>認証レベル</span><img src="../img/functions/img_securecore_ssllevel_1.png" alt="1"> <i class="ico ico_chevron-right"></i></a>
                                </li>
                                <li>
                                    <a href="ssl/securecore_ov.php" class="btn btn--primary">クラウドセキュア 企業認証SSL<br><span>認証レベル</span><img src="../img/functions/img_securecore_ssllevel_2.png" alt="2"> <i class="ico ico_chevron-right"></i></a>
                                </li>
                                <li>
                                    <a href="ssl/securecore_ev.php" class="btn btn--primary">クラウドセキュア EV SSL<br><span>認証レベル</span><img src="../img/functions/img_securecore_ssllevel_3.png" alt="3"> <i class="ico ico_chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                      <!-- security-diagnosis_lineup -->
                    </div>
                    <!-- security-diagnosis_inner -->
                    
                    </section>
                    <!-- /.section -->
            
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
