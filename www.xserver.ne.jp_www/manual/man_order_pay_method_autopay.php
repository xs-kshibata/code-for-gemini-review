<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>自動更新設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜事前にクレジットカードを登録し、登録したクレジットカードでご利用料金を引き落とす「自動更新設定」に関するご案内です。">

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
            
                <h3 class="sub-ttl">自動更新設定</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">自動更新の金額とタイミング</a>
                        <ul>
                            <li><a href="#link-a01">サーバーの場合</a></li>
                            <li><a href="#link-a02">ドメインの場合</a></li>
                            <li><a href="#link-a03">オプション独自SSLの場合</a></li>
                            <li><a href="#link-a04">WordPressテーマ（月間/年間契約）の場合</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-b">自動更新設定方法</a>
                        <ul>
                            <li><a href="#link-b01">自動更新に使用するクレジットカードのご登録</a></li>
                            <li><a href="#link-b02">自動更新に使用するPaidyアカウントのご登録</a></li>
							<li><a href="#link-b03">自動更新に使用するプリペイドのご登録</a></li>
                        </ul>
                    </li>
                </ul>
                </div>


                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_price.php">お支払いに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section" id="link-a">
                    <h4 id="money_timing" class="section_ttl">自動更新の金額とタイミング</h4>
                    <div class="section_body">
                        <p>
                            自動更新のタイミングや、お引き落とし金額はそれぞれ異なりますので、下記をご参照ください。
                        </p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-a01">サーバーの場合</h5>
                            <div class="block_body">
                                <p>
                                    サーバーのご利用期限月に、設定されている<em class="font-bold">更新期間分</em>のご利用料金を引き落とします。<br>
                                    自動更新処理は毎月20日から末日にかけて順次実施します。<br>
                                    （例：10月31日期限の場合、10月20日より引き落とします）<br>
                                    ご解約時などにより自動更新を希望しない場合は、引き落とし<em class="font-bold">実施当月の19日</em>までに自動更新設定を解除してください。
                                </p>
                                <p>各更新期間における引落額については「<a href="../price/">ご利用料金</a>」の料金シミュレーションよりご確認ください。</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-a02">ドメインの場合</h5>
                            <div class="block_body">
                                <p>
                                    利用期限日の2ヶ月前より、<em class="font-bold">翌年分</em>の更新料金を引き落とします。<br>
                                    自動更新処理は毎月20日から末日にかけて順次実施します。<br>
                                    ご解約時などにより自動更新を希望しない場合は、引き落とし<em class="font-bold">実施当月の19日</em>までに自動更新設定を解除してください。
                                </p>
                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-a03">オプション独自SSLの場合</h5>
                            <div class="block_body">
                                <p>
                                    下記の条件が全て当てはまる契約については、契約終了日の30日前に<em class="font-bold">設定されている更新期間分</em>の自動更新を行います。<br>
                                </p>
                                <ul class="ul">
                                    <li>自動更新が設定されている。</li>
                                    <li>認証レベルが「ドメイン認証」のオプション独自SSLである。</li>
                                    <li>コモンネームに該当するドメイン名のネームサーバー情報が、ご利用になるサービスの内容に設定されている。</li>
                                </ul>
                                <p>
                                    証明書の取得申請では、前回の申請情報を使用します。
                                </p>
                                <p>
                                    自動更新を希望しない場合は、<em class="font-bold">契約終了日の31日前</em>までに自動更新設定を解除してください。
                                </p>
                            </div>
                        </section>
                        <!-- /.block -->

                        <section class="block">
                            <h5 class="block_ttl" id="link-a04">WordPressテーマ（月間/年間契約）の場合</h5>
                            <div class="block_body">
                                <p>
                                    ご契約中のテーマにより異なりますので、下記をご参照ください。
                                </p>
                                <dl class="dl">
                                    <dt><i class="ico ico_square-fill"></i>XWRITE</dt>
                                    <dd>
                                        <p>
                                            利用期限日の10日前より順次、<em class="font-bold">設定されている更新期間分</em>の更新料金を引き落とします。<br>
                                            自動更新を希望しない場合は、<em class="font-bold">利用期限日の11日前</em>までに自動更新設定を解除してください。
                                        </p>
                                    </dd>
									<dt><i class="ico ico_square-fill"></i>Snow Monkey</dt>
									<dd>
										<p>
											利用期限日の10日前より順次、<em class="font-bold">翌年分</em>の更新料金を引き落とします。<br>
											自動更新を希望しない場合は、<em class="font-bold">利用期限日の11日前</em>までに自動更新設定を解除してください。
										</p>
									</dd>
                                </dl>
                            </div>
                        </section>
                        <!-- /.block -->
                    </div>
                </section>
                        
                <section class="section" id="link-b">
                    <h4 id="autopay_method" class="section_ttl">自動更新設定方法</h4>
                    <div class="section_body">   
                        <p>クレジットカードによる自動更新設定、あと払い（ペイディ）による自動更新設定が利用できます。</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">クレジットカードによる自動更新設定</h5>
                            <div class="block_body">
                                <p>クレジットカードによる自動更新設定の手順は、下記をご確認ください。</p>
                                <p>マニュアル「<a href="man_order_pay_method_autopay_credit.php">クレジットカードによる自動更新</a>」</p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">あと払い（ペイディ）による自動更新設定</h5>
                            <div class="block_body">
                                <p>あと払い（ペイディ）による自動更新設定の手順は、下記をご確認ください。</p>
                                <p>マニュアル「<a href="man_order_pay_method_autopay_paidy.php">あと払い（ペイディ）による自動更新</a>」</p>
                            </div>
                        </section>
                        <!-- /.block -->
						
						<section class="block">
                            <h5 class="block_ttl" id="link-b03">プリペイドによる自動更新設定</h5>
                            <div class="block_body">
                                <p>プリペイドによる自動更新設定の手順は、下記をご確認ください。</p>
                                <p>マニュアル「<a href="man_order_pay_method_autopay_prepaid.php">プリペイドによる自動更新</a>」</p>
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