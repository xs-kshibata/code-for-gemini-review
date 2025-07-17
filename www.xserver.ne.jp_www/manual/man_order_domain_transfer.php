<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>ドメインの譲渡をする場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメイン譲渡とは、他のXServerアカウントIDにドメインの契約を移動するお手続きです。…">

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
            
                <h3 class="sub-ttl">ドメインの譲渡をする場合</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">ドメイン譲渡とは</a></li>
                    <li><a href="#link-b">ドメイン譲渡の前の確認事項</a></li>
                    <li><a href="#link-c">ドメイン譲渡の流れ</a></li>
                    <li><a href="#link-d">ドメイン譲渡の手順</a>
                    <ol>
                        <li><a href="#link-d01">1.XServerアカウントへログインし、右下の「サポート・お問い合わせ」より「お問い合わせ」をクリック</a></li>
                        <li><a href="#link-d02">2.ページ下部の「お問い合わせフォーム」をクリック</a></li>
                        <li><a href="#link-d03">3.「お問い合わせ内容」に必要情報を入力し、「確認画面へ進む」をクリック</a></li>
                        <li><a href="#link-d04">4.内容を確認し、問題なければ「内容を送信する」をクリック</a></li>
                        <li><a href="#link-d05">5.サポートにて手続き開始</a></li>
                        <li><a href="#link-d06">6.手続き完了</a></li>
                    </ol>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">ドメイン譲渡とは</h4>
                    <div class="section_body">
                        <p class="mb5">ドメイン譲渡とは、他のXServerアカウントIDにドメインの契約を移動するお手続きです。</p>
                        <p>ドメインの運用先サーバーは変更されず、ネームサーバー（DNS）は譲渡元での設定がそのまま引き継がれます。</p>
                        <p class="note">※WEBサイト・メールアドレスを運用するサーバーを変更する場合は、別途作業が必要です。</p>
                    
                    </div>
                </section>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">ドメイン譲渡の前の確認事項</h4>
                    <div class="section_body">
                        <ul class="check-box">
                            <li><i class="ico ico_circle-check"></i>ドメイン譲渡ご希望のドメイン名の有効期限に1ヶ月以上の猶予があるか<br>(1ヶ月以上の猶予がない場合は、先に更新をしていただきお手続きを進めてください)</li>
                            <li><i class="ico ico_circle-check"></i>ドメイン譲渡ご希望のドメイン名を「解約」されていないか<br>(ドメイン譲渡の場合は、解約は不要です)</li>
                            <li><i class="ico ico_circle-check"></i>ドメイン譲渡をご希望のドメイン名の自動更新設定を解除しているか<br>(解除されていない場合には当サポートにて解除いたします)</li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                <!-- /.serial-box -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">ドメイン譲渡の流れ</h4>
                    <div class="section_body">
                        <div class="serial-box">
                            <dl class="dl">
                                <dt>1. 必要情報の送信</dt>
                                <dd><p>譲渡元／譲渡先のご契約者様、それぞれが必要情報をお問い合わせフォームからお送りいただきます。</p></dd>
                                <dt>2. 内容の確認</dt>
                                <dd><p>当サポートがメールの内容を確認します。<br>
                                        依頼内容に問題がない場合、手続きを開始します。</p></dd>
                                <dt>3. 手続き完了</dt>
                                <dd><p>必要な情報が揃ってから、2営業日から4営業日ほどで手続きが完了します。<br>
                                        完了後、当サポートより譲渡元/譲渡先のご契約者様へ手続き完了のメールを送信します。</p></dd>
                            </dl>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <section class="section">
                    <h4 class="section_ttl" id="link-d">ドメイン譲渡の手順</h4>
                    <div class="section_body">
                        <div class="serial-box mb30">

                            <section class="box">
                                <h6 class="box_ttl" id="link-d01">1.XServerアカウントへログインし、右下の「サポート・お問い合わせ」より「お問い合わせ」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、右下の「サポート・お問い合わせ」より「お問い合わせ」をクリックしてください。</p>
                                    <p class="note">※譲渡元／譲渡先のご契約者様【それぞれ】がご自身のXServerアカウントへログインをして手続きを行ってください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_1.png" alt="「サポート・お問い合わせ」をクリックしているスクリーンショット"></p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_2.png" alt="「お問い合わせ」をクリックしているスクリーンショット"></p>

                                    <aside class="msg msg_notice">
                                        <h6 class="msg_ttl font-m">
                                            <i class="ico ico_circle-arrow-right"></i>
                                            譲渡先のお客様がXServerアカウントIDをお持ちでない場合
                                        </h6>
                                        <div class="msg_body pl30">
                                            <p>手続きを開始する前に、「<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on">お申し込みフォーム</a>」より当サービスへのお申込手続きを行ってください。</p>
                                        </div>
                                    </aside>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d02">2.ページ下部の「お問い合わせフォーム」をクリック</h6>
                                <div class="box_body">
                                    <p>ページ下部の「お問い合わせフォーム」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_3.png" alt="「お問い合わせフォーム」をクリックしているスクリーンショット"></p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d03">3.「お問い合わせ内容」に必要情報を入力し、「確認画面へ進む」をクリック</h6>
                                <div class="box_body">
                                    <p>「お問い合わせ内容」に必要情報を入力し、「確認画面へ進む」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_4.png?date=250501" alt="「確認画面へ進む」をクリックしているスクリーンショット"></p>

                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <th class="w30per">カテゴリ</th>
                                            <td>サーバーやドメインの契約・料金について</td>
                                        </tr>
                                        <tr>
                                            <th>項目</th>
                                            <td>その他</td>
                                        </tr>
                                        <tr>
                                            <th>お問い合わせ内容</th>
                                            <td>以下のテンプレートの内容</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p>各項目をクリックすると、情報を開閉できます。</p>
                                    <div class="mb5">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">譲渡元のご契約者様<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
                                                    <pre class="p25">■XServerアカウントID間のドメイン譲渡<br>
お客様のXServerアカウントID：<br>譲渡希望ドメイン名：<br>※譲渡するドメインが複数ある場合は全て記載してください。<br><br>以下、譲渡先アカウント情報を記載してください。<br>譲渡先XServerアカウントID：<br>譲渡先契約名義：<br>※法人契約の場合は法人名をご記載ください。</pre>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="mb15">
                                        <section class="box">
                                            <h4 class="box_ttl js--accordion">譲渡先のご契約者様<i class="ico ico_plus"></i></h4>
                                            <div class="box__body">
                                                    <pre class="p25">■XServerアカウントID間のドメイン譲渡<br>
お客様のXServerアカウントID：<br>譲渡希望ドメイン名：<br>※譲渡するドメインが複数ある場合は全て記載してください。<br><br>以下、譲渡元アカウント情報を記載してください。<br>譲渡元XServerアカウントID：<br>譲渡元契約名義：<br>※法人契約の場合は法人名をご記載ください。</pre>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d04">4.内容を確認し、問題なければ「内容を送信する」をクリック</h6>
                                <div class="box_body">
                                    <p>お問い合わせ内容を確認し、問題なければ「内容を送信する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_transfer_5.png?date=250501" alt="「内容を送信する」をクリックしているスクリーンショット"></p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d05">5.サポートにて手続き開始</h6>
                                <div class="box_body">
                                    <p>サポートで譲渡申請を確認しましたら、メールにて受領のご連絡をいたします。<br>
                                        譲渡元／譲渡先それぞれのご契約者様からの申請が確認できましたら、手続きを開始します。<br>
                                        手続きは、譲渡に必要な情報が当社に到着してから、2〜4営業日程度で完了します。</p>
                                    <p class="note">※いただいた情報に不備が見つかった場合、手続きにお日にちをいただく場合があります。</p>

                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-d06">6.手続き完了</h6>
                                <div class="box_body">
                                    <p>手続きが完了しましたら、譲渡元／譲渡先それぞれのご契約者様に「ドメイン譲渡の手続き完了のお知らせ」のメールをお送りします。<br>
                                        XServerアカウントへログインし、契約内容をご確認ください。</p>

                                </div>
                            </section>


                        </div>
                        <!-- /.serial-box -->

                        <h3 class="block_ttl" id="link-a01">譲渡希望ドメインのwhois情報について</h3>
                        <div class="block_body">
                            <p class="mb10">XServerアカウントID間のドメイン譲渡手続きを行ってもWhois情報は現在公開されている情報が引き継がれます。<br>Whois情報が譲渡元ご契約者様の情報にて公開されている場合、必要に応じて譲渡手続き前にWhois情報の変更をお願いいたします。</p>
                        </div>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>譲渡希望ドメインが.com系ドメイン/汎用JPドメインの場合</dt>
                            <dd>XServerアカウントへログインし「ご契約一覧」のドメインタブを選択します。<br>該当ドメイン「ドメインパネル」の「Whois情報の変更」より変更が可能です。</dd>
                            <dt><i class="ico ico_square-fill"></i>譲渡希望ドメインが属性JPドメイン / 都道府県JPドメインの場合</dt>
                            <dd>メールサポートにて変更が可能です。<br>ご希望の場合は、メールサポートへお問い合わせください。</dd>
                        </dl>


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