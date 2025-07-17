<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>キャッシュバック特典| <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜不定期で実施している「キャッシュバックキャンペーン」で適用対象となったユーザー様がキャンペーンを利用するための手順について記載しています。">

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
            
                <h3 class="sub-ttl">キャッシュバック特典</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">キャッシュバック特典について</a></li>
                    <li><a href="#link-b">キャッシュバック特典の申請スケジュール</a></li>
                    <li><a href="#link-c">キャッシュバック特典の申請方法</a>
                    <ul>
                        <li><a href="#link-c01">銀行振り込みの場合</a></li>
                        <li><a href="#link-c02">セブン銀行ATM受け取りの場合</a></li>
                        <li><a href="#link-c03">ローソン受け取りの場合</a></li>
                    </ul>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">キャッシュバック特典について</h4>
                    <div class="section_body">
                        <p>「キャッシュバックキャンペーン」実施期間中にサーバーを申し込みされたお客様に、現金をキャッシュバックいたします。</p>
                        <p>キャッシュバックの受け取り方法は銀行振り込み、またはコンビニ(セブン銀行ATM/ローソン)をお選びいただけます。</p>

                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-b">キャッシュバック特典の申請スケジュール</h4>
                    <div class="section_body">
                        <p>サーバーのお申し込みから6ヶ月が経過した日の翌月初旬に、登録メールアドレス宛てに「キャッシュバック特典に関するご案内」のメールが届きます。<br>
                            メールの内容をご確認のうえ、キャッシュバックの申請手続きを行ってください。
                        </p>

                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>銀行振り込みの場合</dt>
                            <dd>申請手続き後、当日中に指定口座へキャッシュバックをお振り込みいたします。</dd>
                            <dt><i class="ico ico_square-fill"></i>コンビニの場合</dt>
                            <dd>専用端末で手続き後、キャッシュバックをお受け取りください。</dd>
                        </dl>

                        <p >※キャッシュバックの受け取り可能期間は、案内メールが到着した日の翌月末までです。<br>
                            　メールが届きましたらお早めにお手続きください。</p>

                        <p>(例)【1月15日】お申し込み → 【8月初旬】案内メール到着 → 【9月30日】申請期限</p>
                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_flow.png?date=202402" alt="キャッシュバック特典の申請スケジュール"></p>

                        <img src="" alt="">
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                            <div class="msg_body">
                                <ul class="ul mb0">
                                    <li>受け取り可能期間の延長はできません。</li>
                                    <li>XServerアカウントの登録メールアドレスにて「support@xserver.ne.jp」からのメールが受信可能となるよう、あらかじめご設定ください。</li>
                                    <li>キャッシュバックの受け取りは、ウェルネット株式会社が提供する送金サービスをご利用いただくことが条件となります。</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">キャッシュバック特典の申請方法</h4>
                    <div class="section_body">
                        <p>「キャッシュバック特典に関するご案内」のメールが届きましたら「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」より申請手続きを行ってください。
                        </p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">銀行振り込みの場合</h5>
                            <div class="block_body">
								<ol class="ol">
									<li>
									   <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「各種特典お申し込み」をクリックします。</p>
										<p><img class="img" src="../img/manual/man_order_campaign_domain_1.png?date=20230130" alt="各種特典お申し込みをクリックしているスクリーンショット"></p>
									</li>
									<li>
										<p>
                                            特典を適用するサーバーを選択し、該当するキャッシュバックキャンペーンの「この特典を使用する」をクリックします。
                                        </p>
										<p><img class="img" src="../img/manual/man_order_campaign_cashback_2.png?date=20231025" alt="この特典を使用するをクリックしているスクリーンショット"></p>
									</li>
									<li>
										<p>キャッシュバック特典を受け取る流れ、注意事項などが表示されます。内容を確認し、「キャッシュバック受け取り手続き」をクリックします。</p>
										<p><img class="img" src="../img/manual/man_order_campaign_cashback_3.png?date=20230130" alt="キャッシュバック受け取り手続きをクリックしているスクリーンショット"></p>
									</li>
                                    <li>
                                        <p>「銀行振込でのお受取り」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_4.png?date=20210731" alt="銀行振込でのお受取りをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>お受取金額に間違いがないかを確認し、「銀行振込で受取る」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_5.png?date=20210731" alt="銀行振込で受取るをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>銀行振込に伴う個人情報の取り扱いについてご確認ください。ご確認・同意いただいた場合は「同意する」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_6.png?date=20240313" alt="同意するをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>お受け取りになるために必要な確認事項や注意事項が表示されます。内容を確認し、「次へ」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_7.png?date=20240313" alt="次へをクリックしているスクリーンショット"></p>
                                        <aside class="msg msg_caution">
                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                            <div class="msg_body">
                                                <p>銀行振り込みの以降の画面につきましては、各画面の中に表示されている「検索」「次へ」「戻る」のボタンを操作して画面の切り替えを行ってください。ブラウザの戻るボタン、進むボタン、更新ボタン、閉じるボタンでの操作を行うと、正しく動作しない場合があります。</p>
                                            </div>
                                        </aside>
                                    </li>
                                    <li>
                                        <p>振込先金融機関の頭1文字以上を入力し、「検索」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_8.png?date=20210731" alt="検索をクリックしているスクリーンショット"></p>
                                        <div class="border border_blue">（例）「三菱UFJ銀行」の場合<br>
                                             &nbsp;&nbsp;&nbsp;→「みつびし」や「み」、「みつ」など、先頭の文字を入力して検索します。
                                        </div>
                                    </li>
                                    <li>
                                        <p>振込先金融機関を選択します。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_9.png?date=20210731" alt="振込先金融機関を選択しているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>振込先支店の頭1文字以上を入力し、「検索」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_10.png?date=20210731" alt="検索をクリックしているスクリーンショット"></p>
                                        <p class="note">※通帳に「○○支店△△出張所」と記載のある場合は、出張所の頭１文字以上を入力し、「検索」ボタンを押してください。</p>
                                    </li>
                                    <li>
                                        <p>振込先支店を選択します。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_11.png?date=20210731" alt="振込先支店を選択しているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>口座種別を「普通」「当座」「貯蓄」「その他」より選択、口座番号（最大7桁）を半角数字で入力し、「次へ」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_12.png?date=20210731" alt="次へをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>口座名義人（カナ）を入力し、「次へ」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_13.png?date=20210731" alt="次へをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>確認用も含めて2か所にメールアドレスを入力し、「次へ」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_14.png?date=20210731" alt="次へをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>確認画面が表示されますので、入力内容に問題がなければ、「振込実行」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_15.png?date=20210731" alt="振込実行をクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>以上で、振込依頼は完了です。キャッシュバック手続き受付完了のお知らせをご指定のメールアドレスに送信します。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_16.png?date=20210731" alt="振込実行をクリックしているスクリーンショット"></p>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>正しい口座情報をご登録いただいている場合</dt>
                                            <dd>
                                                <p>振り込みの手続きが行われ、当日中に振り込みを行います。振り込みが完了しましたら、ご指定の口座への振り込みが完了したことをお知らせするメールをお送りいたします。なお、ご利用されている金融機関・口座状態によっては、振り込み先への入金が翌営業日以降になる場合がございます。</p>
                                            </dd>
                                        </dl>
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i>誤った口座情報をご登録した場合</dt>
                                            <dd>
                                            <p>口座情報の誤入力や、口座名義人の不一致などがありますと、振り込み先の金融機関で入金ができません。その場合、ご登録のメールアドレス宛に原因と、再手続き用のURLが記載されたメールが配信されますので、ご確認のうえ、再度お手続きください。</p>
                                            </dd>
                                        </dl>
                                        <aside class="msg msg_notice mb0">
                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>3〜5金融機関営業日が経過してもご入金が確認できない場合</h6>
                                            <div class="msg_body">
                                                <p>受け取り口座の指定を間違われた可能性があります。<br>その場合は、ご登録のメールアドレス宛に原因と、再手続き用のURLが記載されたメールが配信されますので、ご確認のうえ、再度お手続きください。</p>
                                            </div>
                                        </aside>
                                    </li>
								</ol>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-c02">セブン銀行ATM受け取りの場合</h5>

                            <div class="block_body">
                                <ol class="ol">
                                    <li>
                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「各種特典お申し込み」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_domain_1.png?date=20230130" alt="各種特典お申し込みをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>
                                            特典を適用するサーバーを選択し、該当するキャッシュバックキャンペーンの「この特典を使用する」をクリックします。
                                        </p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_2.png?date=20231025" alt="この特典を使用するをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>キャッシュバック特典を受け取る流れ、注意事項などが表示されます。内容を確認し、「キャッシュバック受け取り手続き」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_3.png?date=20230130" alt="キャッシュバック受け取り手続きをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>「セブン銀行ATMでのお受取り」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_17.png?date=20210731" alt="セブン銀行ATMでのお受取りをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>お受取金額に間違いがないかを確認し、「セブン銀行ATMで受取る」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_18.png?date=20210731" alt="セブン銀行ATMで受取るをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>ATMでお受取りに必要な番号を印刷してください。印刷しない場合はメモやスクリーンショットをお勧めします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_19.png?date=20210731" alt="ATMでお受取りに必要な番号が表示されているスクリーンショット"></p>
                                        <p>以上で、申請手続きは完了です。お近くのセブン銀行ATMにてお受け取り手続きを行ってください。</p>
                                    </li>
                                    <li>
                                        <p>セブン銀行ATM、もしくは、セブンイレブン各店舗の来店後の手順は、以下のとおりです。</p>
                                        <ol class="ol">
                                            <li>ATMの画面に従い、提携先コード、お客様番号、確認番号（電話番号の下4桁）を入力します。</li>
                                            <li>ATMで紙幣をお受け取りください。硬貨は、ATMから発行されるバーコード付きのレシート（硬貨払戻票）をセブンイレブン店頭レジへお持ちいただき、キャッシュバック金額をお受け取りください。</li>
                                        </ol>
                                        <aside class="msg msg_notice mb0">
                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>確認番号について</h6>
                                            <div class="msg_body">
                                                <p>セブン銀行ATM操作時に必要となる確認番号は、XServerアカウントに登録されている<span class="fontBold">電話番号の下4桁</span>です。</p>
                                            </div>
                                        </aside>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-c03">ローソン受け取りの場合</h5>

                            <div class="block_body">
                                <div class="msg msg_notice">
                                    <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>申請手続きの前に</h4>
                                    <div class="msg_body">
                                        ローソンでは、3万円を超えるキャッシュバック額のお受け取りはできません。
                                    </div>
                                </div>
                                <ol class="ol">
                                    <li>
                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「各種特典お申し込み」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_domain_1.png?date=20230130" alt="各種特典お申し込みをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>
                                            特典を適用するサーバーを選択し、該当するキャッシュバックキャンペーンの「この特典を使用する」をクリックします。
                                        </p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_2.png?date=20231025" alt="この特典を使用するをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>キャッシュバック特典を受け取る流れ、注意事項などが表示されます。内容を確認し、「キャッシュバック受け取り手続き」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_3.png?date=20230130" alt="キャッシュバック受け取り手続きをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>「ローソンでのお受取り」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_20.png?date=20210731" alt="ローソンでのお受取りをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>お受取金額に間違いがないかを確認し、「ローソンで受取る」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_21.png?date=20210731" alt="ローソンで受取るをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>受取番号ならびにLoppi専用QRコードを印刷してください。印刷しない場合はメモやスクリーンショットをお勧めします。</p>
                                        <p><img class="img" src="../img/manual/man_order_campaign_cashback_22.png?date=20210731" alt="受取番号ならびにLoppi専用QRコードが表示されているスクリーンショット"></p>
                                        <p>以上で、申請手続きは完了です。お近くのローソン店舗にてお受け取り手続きを行ってください。</p>
                                    </li>
                                    <li>
                                        <p>ローソン店舗ご来店後の手順は、以下のとおりです。</p>
                                        <ol class="ol">
                                            <li>店頭設置のLoppi（ロッピー）で受取番号（11桁の数字）を入力、もしくは、QRコードを読み込みます。</li>
                                            <li>パスワード（電話番号の下4桁）を入力し、申込券を発行します。</li>
                                            <li>申込券を30分以内にレジカウンターまでお持ちいただき、キャッシュバック金額をお受け取りください。</li>
                                        </ol>
                                        
                                        <aside class="msg msg_notice">
                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>パスワードについて</h6>
                                            <div class="msg_body">
                                                <p>Loppi（ロッピー）操作時に必要となるパスワードは、XServerアカウントに登録されている電話番号の下4桁です。</p>
                                            </div>
                                        </aside>
                                        <aside class="msg msg_caution mb0">
                                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                            <div class="msg_body">
                                                <ul class="ul mb0">
                                                    <li>ミニストップ設置のLoppiではご利用いただけません。</li>
                                                    <li>お受け取りいただける時間は、午前7時から午後9時30分までとなります。</li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </li>
                                </ol>
                            </div>
                        </section>
                        <!-- /.block -->
                        
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