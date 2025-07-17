<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>請求書・受領書・見積書 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜請求書、受領書、見積書の発行に関するご案内です。エックスサーバーでは新規契約・更新契約に関する請求書を、XServerアカウントよりPDF形式でダウンロードすることが可能です。">

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
            
                <h3 class="sub-ttl">請求書・受領書・見積書</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">請求書・受領書・見積書・領収書の発行について</a>
                    <ul>
                        <li><a href="#link-a01">請求書の発行について</a></li>
                        <li><a href="#link-a02">受領書の発行について</a></li>
                        <li><a href="#link-a05">請求書・受領書の一括ダウンロードについて</a></li>
                        <li><a href="#link-a03">見積書の発行について</a></li>
						<li><a href="#link-a04">領収書の発行について</a></li>
                    </ul>
                    </li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">請求書・受領書・見積書・領収書の発行について</h4>
                    <div class="section_body">
                    
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">請求書の発行について</h5>
                            <div class="block_body">

								<p>
									請求書はXServerアカウントよりPDFファイル形式でダウンロードすることが可能です。<br>
									また、有料にて書面での発行も承っております。
								</p>
								<p>
									いずれの場合も、請求書の宛名はXServerアカウントの契約名義といたしております。<br>
									任意の宛名への変更はいたしかねますのでご了承ください。
								</p>
                                
                                <dl class="dl mt30">
                                    <dt><i class="ico ico_square-fill"></i>料金お支払い前</dt>
                                    <dd>
                                        <div class="msg msg_caution mt30 mb40 pt10 pb10">
                                            <p>
                                                コンビニエンスストア払い、銀行振り込み、ペイジー決済であれば、料金をお支払いいただく前に請求書の発行が可能です。
                                            </p>
                                        </div>
										<ol class="ol">
                                            <li>
                                                <p>ご希望のお支払い方法にて、お支払い手続きを行ってください。</p>
                                                <ul class="ul mb30">
                                                    <li>「<a href="man_order_pay_method_convenient.php">コンビニエンスストア払いの場合</a>」</li>
                                                    <li>「<a href="man_order_pay_method_bank.php">銀行振り込みの場合</a>」</li>
                                                    <li>「<a href="man_order_pay_method_pay_easy.php">ペイジー決済の場合</a>」</li>
                                                </ul>
                                            </li>
                                            <li>
												<p>お支払い手続き後、料金をお支払いいただく前に<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください。</p>
												<p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                            </li>
                                        	<li>
												<p>請求書を発行したい請求情報の右側にある「詳細」ボタンをクリックします。</p>
												<p><img class="img" src="../img/manual/man_order_pay_bill_2.png?date=20201022" alt="詳細をクリックしているスクリーンショット"></p>
                                            </li>
                                        	<li>
											   <p>当該の請求情報の詳細が表示されますので、「請求書ダウンロード」ボタンをクリックすると請求書をPDFファイルでダウンロードすることが可能です。</p>
												<p><img class="img" src="../img/manual/man_order_pay_bill_3.png?date=20210610" alt="請求書ダウンロードをクリックしているスクリーンショット"></p>
                                            </li>
                                        </ol>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>料金お支払い後</dt>
                                    <dd>
										<ol class="ol">
                                            <li>
											   <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
												<p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いをクリックしているスクリーンショット"></p>
                                            </li>
                                        	<li>
												<p>「お支払い履歴／受領書発行」をクリックします。<br>「お支払い履歴の検索」にて、表示するお支払い履歴にフィルターをかけることができます。</p>
												<p><img class="img" src="../img/manual/man_order_pay_bill_4.png?date=20230130" alt="お支払い履歴／受領書発行をクリックしているスクリーンショット"></p>
                                            </li>
                                        	<li>
												<p>請求書を発行したい請求情報の右側にある「詳細」ボタンをクリックします。</p>
												<p><img class="img" src="../img/manual/man_order_pay_bill_5.png?date=20210610" alt="詳細をクリックしているスクリーンショット"></p>
                                            </li>
                                        	<li>
										<p>当該の請求情報の詳細が表示されますので、「請求書ダウンロード」ボタンをクリックすると請求書をPDFファイルでダウンロードすることが可能です。</p>
												<p><img class="img" src="../img/manual/man_order_pay_bill_6.png?date=20210610" alt="請求書ダウンロードをクリックしているスクリーンショット"></p>
                                            </li>
                                        </ol>
                                    </dd>
                                </dl>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>書面での発行をご希望の場合</dt>
                                    <dd>書面での発行の場合は、別途発行手数料が220円<span class="font-xs">(税込)</span>必要です。<br>
                                    サポートまでその旨をご連絡ください。手順詳細をご案内いたします。</dd>
                                </dl>

                                <div class="msg msg_caution">
                                    <p>サポートへ請求書発行をご希望の際は請求情報の発行が必要です。<br>
                                    当サポートへご連絡いただく際は、あらかじめ<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、上部メニューの「料金支払い」→「お支払い/請求書発行」より料金のお支払い手続きを行い、請求情報が発行されていることをご確認の上、ご連絡ください。</p>
                                </div>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">受領書の発行について</h5>
                            <div class="block_body">
                                <p>2015年7月22日以降に発行された請求情報を対象に、XServerアカウントよりPDFファイル形式でダウンロードすることが可能です。</p>
								<ol class="ol">
									<li>
									   <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
										<p><img class="img" src="../img/manual/man_order_pay_bill_1.png?date=20220216" alt="料金支払いをクリックしているスクリーンショット"></p>
									</li>
									<li>
										<p>「お支払い履歴／受領書発行」をクリックします。<br>「お支払い履歴の検索」にて、表示するお支払い履歴にフィルターをかけることができます。</p>

										<p><img class="img" src="../img/manual/man_order_pay_bill_4.png?date=20230130" alt="お支払い履歴／受領書発行をクリックしているスクリーンショット"></p>
									</li>
									<li>
										<p>受領書を発行したい請求情報の右側にある「詳細」ボタンをクリックします。</p>
										<p><img class="img" src="../img/manual/man_order_pay_bill_5.png?date=20210610" alt="詳細をクリックしているスクリーンショット"></p>
									</li>
									<li>
										<p>当該の請求情報の詳細が表示されますので、「受領書ダウンロード」ボタンをクリックすると受領書をPDFファイルでダウンロードすることが可能です。</p>
										<p><img class="img" src="../img/manual/man_order_pay_bill_7.png?date=202106102" alt="受領書ダウンロードをクリックしているスクリーンショット"></p>
										<p>受領書はPDFファイル形式での発行のみ承っております。書面による発行はいたしておりません。なにとぞご了承ください。</p>
									</li>
								</ol>
                            </div>
                        </section>
                        <!-- /.block -->


                        <section class="block">
                            <h5 class="block_ttl" id="link-a05">請求書・受領書の一括ダウンロードについて</h5>
                            <div class="block_body">
                                <p>2015年7月22日以降に発行された請求情報を対象に、チェックしたお支払い日の請求書・受領書を一括でダウンロードすることが可能です。</p>
                                <p class="note">※X2及びSixcore統合前のお支払いを除く</p>

                                <ol class="ol">
                                    <li>
                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_bill_1.png?date=20220216" alt="料金支払いをクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>「お支払い履歴／受領書発行」をクリックします。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_bill_4.png?date=20230130" alt="お支払い履歴／受領書発行をクリックしているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>ダウンロードしたい請求情報の左側にあるチェックボックスを選択します。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_bill_8.png" alt="請求書情報を選択しているスクリーンショット"></p>
                                    </li>
                                    <li>
                                        <p>「請求書一括ダウンロード」または「受領書一括ダウンロード」のボタンをクリックすると選択したファイルをダウンロードすることが可能です。</p>
                                        <p><img class="img" src="../img/manual/man_order_pay_bill_9.png" alt="請求書一括ダウンロードをクリックしているスクリーンショット"></p>
                                    </li>
                                </ol>

                            </div><!--block_body-->
                        </section>
                        <!-- /.block -->



                            <section class="block">
                            <h5 class="block_ttl" id="link-a03">見積書の発行について</h5>
                            <div class="block_body">
                                <p>見積書は、サービスサイト「<a href="../price/index.php">料金プラン</a>」の<b>料金シミュレーション機能</b>を使用して発行が可能です。</p>
                                <dl class="dl">
                                    <dt>【ご利用を検討中のお客様、料金のお支払い手続きがまだ(請求情報が発行されていない)のお客様】</dt>
                                    <dd>
                                        <p>
                                            サービスサイト「料金プラン」の<b>料金シミュレーション機能</b>にて「プラン」「契約期間」を選択すると、シミュレーション結果下に見積書発行画面が表示されます。<br>
                                            「宛名」を入力して「見積書を発行する」ボタンを押下すると、シミュレーション結果に基づいた見積書がPDFファイル形式で発行されます。
                                        </p>
                                        <img class="img" src="../img/manual/man_order_pay_bill_10.png" alt="シミュレーション結果下に出現する見積書発行のスクリーンショット">
                                        <p class="note" style="text-indent: -1em; margin-left: 1em; margin-top: 1.5em">
                                            ※キャンペーン適用外、サービスサイト内でご確認いただけない範囲のお見積もりをご希望の場合は、サポートまでご連絡ください。<br>
                                            ご連絡の際は「お申し込みのサービス・プラン」「契約期間」「宛名」も併せてお知らせください。PDFファイル形式で発行し、メールで送付いたします。
                                        </p>
                                    </dd>
                                    <dt>【料金のお支払い手続きがお済み(請求情報が発行済み)のお客様】</dt>
                                    <dd>サポートへご連絡の際に「請求情報番号」「宛名」もお知らせください。PDFファイル形式で発行し、メールで送付いたします。</dd>
                                </dl>
                                <p class="note">※書面での発行の場合は、別途発行手数料が220円<span class="font-xs">(税込)</span>必要です。<br>
                                希望する場合は、サポートまでその旨も併せてお知らせください。手順詳細をご案内いたします。</p>
                            </div>
                        </section>
                        <!-- /.block -->

						<section class="block">
							<h5 class="block_ttl" id="link-a04">領収書の発行について</h5>
							<div class="block_body">
								<p>
									弊社での領収書発行は、領収書の二重発行になるため承っておりません。
								</p>
								<p class="note">
									※弊社での領収書発行は、2016年12月14日を以って終了いたしました。
								</p>
								<p>
									各カード会社の利用明細書、各銀行での振込の控え（振込明細）、各コンビニより発行される領収書（レシート）が、それぞれ正式な領収書としてご利用いただけます。
								</p>
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