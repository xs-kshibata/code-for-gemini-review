<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>独自ドメイン永久無料特典（キャンペーン特典） | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜不定期で実施している「ドメインプレゼントキャンペーン」の適用対象となったユーザー様がキャンペーンを利用するための手順について記載しています。">

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
            
                <h3 class="sub-ttl">独自ドメイン永久無料特典（キャンペーン特典）</h3>
                
                <aside class="msg msg_caution">
                   <p class="red font-bold">現在「ドメインプレゼントキャンペーン」は実施していません。</p>
                </aside>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                            <ul class="toc-list--body">
                                <li><a href="#link-previous-a">独自ドメイン永久無料特典（キャンペーン特典）について</a>
                                    <ol>
                                        <li><a href="#link-previous-a01">「ドメインプレゼントキャンペーン」の対象となるご契約</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-b">独自ドメイン永久無料特典（キャンペーン特典）のお申し込み手順</a>
                                    <ol>
                                        <li><a href="#link-previous-b01">1.「各種特典お申し込み」をクリック</a></li>
                                        <li><a href="#link-previous-b02">2.独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリック</a></li>
                                        <li><a href="#link-previous-b03">3.希望するドメイン名を入力</a></li>
                                        <li><a href="#link-previous-b04">4.確認・独自ドメイン永久無料特典（キャンペーン特典）申請</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-c">独自ドメイン永久無料特典（キャンペーン特典）にWordPressをインストールする</a>
                                    <ol>
                                        <li><a href="#link-previous-c01">1.「ドメイン設定」を追加</a></li>
                                        <li><a href="#link-previous-c02">2.「WordPress簡単インストール」からWordPressをインストール</a></li>
                                        <li><a href="#link-previous-c03">「無効なURL」が表示された場合</a></li>
                                        <li><a href="#link-previous-c04">ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合</a></li>
                                    </ol>
                                </li>
                                <li><a href="#link-previous-d">初期ドメイン（.xsrv.jp）で運用しているWordPressサイトを独自ドメインに移行する</a>
                                    <ol>
                                        <li><a href="#link-previous-d01">1.「ドメイン設定」を追加</a></li>
                                        <li><a href="#link-previous-d02">2.「WordPress簡単移行」からWordPressを移行</a></li>
                                    </ol>
                                </li>
                            </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">独自ドメイン永久無料特典（キャンペーン特典）について</h4>
                                <div class="section_body">
                                    <p>
                                        「ドメインプレゼントキャンペーン」実施期間中にサーバーのお申し込みを行われたお客様に、独自ドメイン（.com / .net / .org / .info / .biz　/ .blog のいずれか一つ）を無料で提供いたします。<br>
                                        なお、独自ドメイン永久無料特典（キャンペーン特典）は新規取得・移管申請に対応しています。
                                    </p>
                                    <p class="note">※「.blog」ドメインについては移管に対応していません。</p>

                                    <p>サーバーのご利用料金をお支払いいただき、本契約となりましたら、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>の「各種特典お申し込み」より、独自ドメイン永久無料特典（キャンペーン特典）の申請が可能です。</p>

                                    <h3 class="block_ttl mt50" id="link-previous-a01">「ドメインプレゼントキャンペーン」の対象となるご契約</h3>
                                    <div class="msg_body">
                                        <p class="font-bold">※現在「ドメインプレゼントキャンペーン」は実施していません。</p>
                                        <p>また、独自ドメイン永久無料特典（キャンペーン特典）は、プランごとの契約特典である「独自ドメイン永久無料特典」や「独自ドメイン1年無料特典」とは異なります。<br>
                                            詳しくは、以下のマニュアルをご参照ください。</p>
                                        <ul class="ul">
                                            <li><a href="man_order_present_domain.php">独自ドメイン永久無料特典</a></li>
                                            <li><a href="man_order_oneyear_domain.php">独自ドメイン1年無料特典</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_campaign-flow" class="section">
                                <h4 class="section_ttl" id="link-previous-b">独自ドメイン永久無料特典（キャンペーン特典）のお申し込み手順</h4>
                                <div class="section_body">


                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b01">1.「各種特典お申し込み」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「各種特典お申し込み」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_1.png" alt="「各種特典お申し込み」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b02">2.独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリック</h5>
                                            <div class="box_body">
                                                <p>特典を適用するサーバーを選択し、独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_1_2.png" alt="「この特典を使用する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b03">3.希望するドメイン名を入力</h5>
                                            <div class="box_body">
                                                <p>区分の「新規取得」「移管申請」のいずれかを選択のうえ、ご希望のドメイン名を入力し、「検索する」をクリックします。</p>
                                                <ul class="ul">
                                                    <li>新規取得…ドメインの新規取得をする場合</li>
                                                    <li>移管申請…他社からドメイン移管をご希望の場合</li>
                                                </ul>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_2.png" alt="「検索する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-b04">4.確認・独自ドメイン永久無料特典（キャンペーン特典）申請</h5>
                                            <div class="box_body">
                                                <p>ドメイン名に誤りがないかどうか確認のうえ、「選択したドメインの取得申請をする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_3.png" alt="「選択したドメインの取得申請をする」をクリック"></p>
                                                <p class="note">※ドメイン取得後はドメイン名の変更ができませんのでご注意ください。</p>
                                                <p class="note">※お申し込みには「Whois初期値設定」が必要です。完了していない場合、設定を求める画面が表示される場合があります。</p>
                                            </div>
                                        </section>

                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_wordpress-install" class="section">
                                <h4 class="section_ttl" id="link-previous-c">独自ドメイン永久無料特典（キャンペーン特典）にWordPressをインストールする</h4>
                                <div class="section_body">

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-c01">1.「ドメイン設定」を追加</h5>
                                            <div class="box_body">
                                                <p>「サーバーパネル」にログインし、「ドメイン設定」より取得したドメイン名を追加します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_domain_setting.php" class="btn btn_white">ドメイン設定<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_4.png" alt="サーバーパネル"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-c02">2.「WordPress簡単インストール」からWordPressをインストール</h5>
                                            <div class="box_body">
                                                <p>引き続き、「WordPress簡単インストール」より、WordPressをインストールします。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_install_auto_word.php" class="btn btn_white">WordPress簡単インストール<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_install_auto_1.png" alt="サーバーパネル"></p>
                                                <br><p>以上で独自ドメイン永久無料特典（キャンペーン特典）へのWordPressのインストールは完了です。</p>
                                            </div>
                                        </section>

                                    </div>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c03">「無効なURL」が表示された場合</h5>
                                        <div class="block_body">
                                            <p>「ドメイン設定」を追加してからの経過時間が短い場合に表示されます。<br>
                                                1時間程度お待ちのうえ、ブラウザの「スーパーリロード」をして、サイトが表示されるかご確認ください。</p>
                                            <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_6.png" alt="「無効なURL」が表示された場合"></p>
                                            <aside class="msg">
                                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>スーパーリロードとは</h6>
                                                <div class="msg_body">
                                                    <p>ブラウザに残ったキャッシュをクリアして、サイトにアクセスしなおす方法です。<br>
                                                        Windowsの多くのブラウザでは「Ctrl＋F5」、Macの多くのブラウザでは「Command＋Shift＋R」を押すことで、通常の更新ではなくスーパーリロードとなります。<br>
                                                        ブラウザごとの詳細なスーパーリロードの方法は各ブラウザのマニュアルでご確認ください。<br>
                                                    </p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h5 class="block_ttl" id="link-previous-c04">ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合</h5>
                                        <div class="block_body">
                                            <p>ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合、<br>
                                                1時間程度お待ちのうえ、サーバーパネルの「独自SSL」設定から無料独自SSLを追加してください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_wordpress-mag" class="section">
                                <h4 class="section_ttl" id="link-previous-d">初期ドメイン（.xsrv.jp）で運用しているWordPressサイトを独自ドメインに移行する</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-d01">1.「ドメイン設定」を追加</h5>
                                            <div class="box_body">
                                                <p>「サーバーパネル」にログインし、「ドメイン設定」より取得したドメイン名を追加します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_domain_setting.php" class="btn btn_white">ドメイン設定<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_4.png" alt="サーバーパネル"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-previous-d02">2.「WordPress簡単移行」からWordPressを移行</h5>
                                            <div class="box_body">
                                                <p>引き続き、「WordPress簡単移行」より、初期ドメインにインストールしたWordPressを独自ドメインに移行します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_install_transfer_wp.php" class="btn btn_white">WordPress簡単移行<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_install_transfer_wp_top.png" alt="サーバーパネル"></p>
                                                <p><br>
                                                    例：「https://xsample.xsrv.jp/」にインストールしたWordPressを「https://www.example.com/」に移行する場合
                                                </p>
                                                <p><img class="img" src="../img/manual/previous/man_order_campaign_domain_7.png" alt="WordPress簡単移行"></p>
                                                <p>以上で作業は完了です。</p>
                                            </div>
                                        </section>

                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル-->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">


                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">独自ドメイン永久無料特典（キャンペーン特典）について</a>
                                        <ol>
                                            <li><a href="#link-a01">「ドメインプレゼントキャンペーン」の対象となるご契約</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-b">独自ドメイン永久無料特典（キャンペーン特典）のお申し込み手順</a>
                                        <ol>
                                            <li><a href="#link-b01">1.「各種特典お申し込み」をクリック</a></li>
                                            <li><a href="#link-b02">2.独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリック</a></li>
                                            <li><a href="#link-b03">3.希望するドメイン名を入力</a></li>
                                            <li><a href="#link-b04">4.確認・独自ドメイン永久無料特典（キャンペーン特典）申請</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-c">独自ドメイン永久無料特典（キャンペーン特典）にWordPressをインストールする</a>
                                        <ol>
                                            <li><a href="#link-c01">1.「ドメイン設定」を追加</a></li>
                                            <li><a href="#link-c02">2.「WordPress簡単インストール」からWordPressをインストール</a></li>
                                            <li><a href="#link-c03">「無効なURL」が表示された場合</a></li>
                                            <li><a href="#link-c04">ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#link-d">初期ドメイン（.xsrv.jp）で運用しているWordPressサイトを独自ドメインに移行する</a>
                                        <ol>
                                            <li><a href="#link-d01">1.「ドメイン設定」を追加</a></li>
                                            <li><a href="#link-d02">2.「WordPress簡単移行」からWordPressを移行</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <section class="section">
                                <h4 class="section_ttl" id="link-a">独自ドメイン永久無料特典（キャンペーン特典）について</h4>
                                <div class="section_body">
                                    <p>
                                        「ドメインプレゼントキャンペーン」実施期間中にサーバーのお申し込みを行われたお客様に、独自ドメイン（.com / .net / .org / .info / .biz　/ .blog のいずれか一つ）を無料で提供いたします。<br>
                                        なお、独自ドメイン永久無料特典（キャンペーン特典）は新規取得・移管申請に対応しています。
                                    </p>
                                    <p class="note">※「.blog」ドメインについては移管に対応していません。</p>

                                    <p>サーバーのご利用料金をお支払いいただき、本契約となりましたら、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>の「各種特典お申し込み」より、独自ドメイン永久無料特典（キャンペーン特典）の申請が可能です。</p>

                                    <h5 class="block_ttl mt50" id="link-a01">「ドメインプレゼントキャンペーン」の対象となるご契約</h5>
                                    <div class="msg_body">
                                        <p class="red font-bold">現在、「ドメインプレゼントキャンペーン」は実施していません。</p>
                                        <p>また、独自ドメイン永久無料特典（キャンペーン特典）は、プランごとの契約特典である「独自ドメイン永久無料特典」や「独自ドメイン1年無料特典」とは異なります。<br>
                                            詳しくは、以下のマニュアルをご参照ください。</p>
                                        <ul class="ul">
                                            <li><a href="man_order_present_domain.php">独自ドメイン永久無料特典</a></li>
                                            <li><a href="man_order_oneyear_domain.php">独自ドメイン1年無料特典</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_campaign-flow" class="section">
                                <h4 class="section_ttl" id="link-b">独自ドメイン永久無料特典（キャンペーン特典）のお申し込み手順</h4>
                                <div class="section_body">


                                    <div class="serial-box">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b01">1.「各種特典お申し込み」をクリック</h5>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「各種特典お申し込み」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_1.png?date=2410" alt="「各種特典お申し込み」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b02">2.独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリック</h5>
                                            <div class="box_body">
                                                <p>特典を適用するサーバーを選択し、独自ドメイン永久無料特典（キャンペーン特典）の「この特典を使用する」をクリックします。</p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_1_2.png?date=2410" alt="「この特典を使用する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b03">3.希望するドメイン名を入力</h5>
                                            <div class="box_body">
                                                <p>区分の「新規取得」「移管申請」のいずれかを選択のうえ、ご希望のドメイン名を入力し、「検索する」をクリックします。</p>
                                                <ul class="ul">
                                                    <li>新規取得…ドメインの新規取得をする場合</li>
                                                    <li>移管申請…他社からドメイン移管をご希望の場合</li>
                                                </ul>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_2.png?date=2410" alt="「検索する」をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-b04">4.確認・独自ドメイン永久無料特典（キャンペーン特典）申請</h5>
                                            <div class="box_body">
                                                <p>ドメイン名に誤りがないかどうか確認のうえ、「選択したドメインの取得申請をする」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_3.png?date=2410" alt="「選択したドメインの取得申請をする」をクリック"></p>
                                                <p class="note">※ドメイン取得後はドメイン名の変更ができませんのでご注意ください。</p>
                                                <p class="note">※お申し込みには「Whois初期値設定」が必要です。完了していない場合、設定を求める画面が表示される場合があります。</p>
                                            </div>
                                        </section>

                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_wordpress-install" class="section">
                                <h4 class="section_ttl" id="link-c">独自ドメイン永久無料特典（キャンペーン特典）にWordPressをインストールする</h4>
                                <div class="section_body">

                                    <div class="serial-box mb40">

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c01">1.「ドメイン設定」を追加</h5>
                                            <div class="box_body">
                                                <p>「サーバーパネル」にログインし、「ドメイン設定」より取得したドメイン名を追加します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_domain_setting.php" class="btn btn_white">ドメイン設定<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_4.png?date=2410" alt="サーバーパネル"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h5 class="box_ttl" id="link-c02">2.「WordPress簡単インストール」からWordPressをインストール</h5>
                                            <div class="box_body">
                                                <p>引き続き、「WordPress簡単インストール」より、WordPressをインストールします。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_install_auto_word.php" class="btn btn_white">WordPress簡単インストール<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/man_install_auto_1.png?date=2410" alt="サーバーパネル"></p>
                                                <br><p>以上で独自ドメイン永久無料特典（キャンペーン特典）へのWordPressのインストールは完了です。</p>
                                            </div>
                                        </section>

                                    </div>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-c03">「無効なURL」が表示された場合</h4>
                                        <div class="block_body">
                                            <p>「ドメイン設定」を追加してからの経過時間が短い場合に表示されます。<br>
                                                1時間程度お待ちのうえ、ブラウザの「スーパーリロード」をして、サイトが表示されるかご確認ください。</p>
                                            <p><img class="img" src="../img/manual/man_order_campaign_domain_6.png?date=2410" alt="「無効なURL」が表示された場合"></p>
                                            <aside class="msg">
                                                <h6 class="msg_ttl"><i class="ico ico_circle"></i>スーパーリロードとは</h6>
                                                <div class="msg_body">
                                                    <p>ブラウザに残ったキャッシュをクリアして、サイトにアクセスしなおす方法です。<br>
                                                        Windowsの多くのブラウザでは「Ctrl＋F5」、Macの多くのブラウザでは「Command＋Shift＋R」を押すことで、通常の更新ではなくスーパーリロードとなります。<br>
                                                        ブラウザごとの詳細なスーパーリロードの方法は各ブラウザのマニュアルでご確認ください。<br>
                                                    </p>
                                                </div>
                                            </aside>
                                        </div>
                                    </section>

                                    <section class="block">
                                        <h4 class="block_ttl" id="link-c04">ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合</h4>
                                        <div class="block_body">
                                            <p>ドメイン設定を追加するときに「無料独自SSL」の設定に失敗した場合、<br>
                                                1時間程度お待ちのうえ、サーバーパネルの「独自SSL」設定から無料独自SSLを追加してください。</p>
                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                            <section id="man_wordpress-mag" class="section">
                                <h4 class="section_ttl" id="link-d">初期ドメイン（.xsrv.jp）で運用しているWordPressサイトを独自ドメインに移行する</h4>
                                <div class="section_body">

                                    <div class="serial-box">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d01">1.「ドメイン設定」を追加</h6>
                                            <div class="box_body">
                                                <p>「サーバーパネル」にログインし、「ドメイン設定」より取得したドメイン名を追加します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_domain_setting.php" class="btn btn_white">ドメイン設定<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_4.png?date=2410" alt="サーバーパネル"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-d02">2.「WordPress簡単移行」からWordPressを移行</h6>
                                            <div class="box_body">
                                                <p>引き続き、「WordPress簡単移行」より、初期ドメインにインストールしたWordPressを独自ドメインに移行します。<br><br>
                                                    <a href="<?php print $SITE_URL; ?>manual/man_install_transfer_wp.php" class="btn btn_white">WordPress簡単移行<i class="ico ico_chevron-right"></i></a>
                                                </p>
                                                <p><img class="img" src="../img/manual/man_install_transfer_wp_top.png?date=2410" alt="サーバーパネル"></p>
                                                <p><br>
                                                    例：「https://xsample.xsrv.jp/」にインストールしたWordPressを「https://www.example.com/」に移行する場合
                                                </p>
                                                <p><img class="img" src="../img/manual/man_order_campaign_domain_7.png?date=2410" alt="WordPress簡単移行"></p>
                                                <p>以上で作業は完了です。</p>
                                            </div>
                                        </section>

                                    </div>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル-->
                    </div><!--supportTabWrap-->
                </div><!--supportTabArea-->


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
