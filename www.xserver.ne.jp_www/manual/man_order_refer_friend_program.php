<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>お友達紹介プログラム | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜お友達紹介プログラムの利用手順について記載しています。">

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
            
                <h3 class="sub-ttl">お友達紹介プログラム</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li>
						<a href="#link-a">紹介手順</a>
						<ul>
							<li><a href="#link-a01">1.「友達紹介」をクリック</a></li>
							<li><a href="#link-a02">2.紹介コードをコピー</a></li>
						</ul>
					</li>
					<li><a href="#link-b">友達紹介メニューの各種機能</a>
                    <ul>
                        <li><a href="#link-b01">今月の振り込み予定額</a></li>
                        <li><a href="#link-b02">報酬発生状況</a></li>
                        <li><a href="#link-b03">振り込み先の銀行口座</a></li>
                        <li><a href="#link-b04">報酬受け取り方法の変更</a></li>
                    </ul>
                    </li>
                    <li><a href="#link-c">月ごとの振り込み金額の確認手順</a>
                    <ul>
                        <li><a href="#link-c01">1.「友達紹介」をクリック</a></li>
                        <li><a href="#link-c02">2.「明細を見る」ボタンをクリック</a></li>
                        <li><a href="#link-c03">3.確認したい月を選択</a></li>
                    </ul>
                    </li>
					<li><a href="#link-d">報酬について</a>
                    <ul>
                        <li>
							<a href="#link-d01">お受け取り方法について</a>
							<ul>
								<li><a href="#link-d02">口座の登録がお済でない場合</a></li>
								<li><a href="#link-d03">口座情報が誤っていた場合</a></li>
							</ul>
						</li>
                    </ul>
                    </li>
                    <li><a href="#link-e">「お友達紹介プログラム」の自己利用について</a>
                        <ul>
                            <li>
                                <a href="#link-e01">利用手順</a>
                                <ul>
                                    <li><a href="#link-e02">1.「友達紹介（自己利用）」をクリック</a></li>
                                    <li><a href="#link-e03">2.「申し込む」ボタンをクリック</a></li>
                                    <li><a href="#link-e04">3.ご契約</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
					
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">紹介手順</h4>
                    <div class="section_body">
						<div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-a01">1.「友達紹介」をクリック</h5>
                                <div class="box_body">
									<p>
										「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「友達紹介」をクリックしてください。
									</p>
									<p><img class="img" src="../img/manual/man_order_refer_friend_program_1.png?date=250526" alt="「友達紹介」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-a02">2.紹介コードをコピー</h5>
                                <div class="box_body">
									<p>紹介したいサービスの「URLをコピーする」ボタンをクリックして紹介コードをコピーしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_refer_friend_program_2.png?date=250425" alt="紹介コードをコピー"></p>
									<p>LINE・メールのいずれかで友達など紹介したい人にシェアしてください。</p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h4 class="section_ttl" id="link-b">友達紹介メニューの各種機能</h4>
                    <div class="section_body">
                        <p>友達紹介メニューで利用できる各種機能について説明しています。</p>
                        <section class="block">
                            <h5 class="block_ttl" id="link-b01">今月の振り込み予定額</h5>
                            <div class="block_body">
								<p>
                                    報酬の受け取り方法の変更や、今月振り込まれる予定額、紹介件数を確認することができます。<br>
									「明細を見る」ボタンをクリックすると、月ごとに紹介日と発生した報酬金額を確認することができます。
								</p>
								<p><img class="img" src="../img/manual/man_order_refer_friend_program_3.png?date=250526" alt="今月の振り込み予定額"></p>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b02">報酬発生状況</h5>
                            <div class="block_body">
                                <p>
									現在発生している報酬額や、これまで紹介した履歴の一覧が確認できます。<br>
									「報酬金額」「対象契約数」は、既にお支払いしている報酬分は含まれておりません。
								</p>
								
								<p><img class="img" src="../img/manual/man_order_refer_friend_program_6.png?date=250526" alt="今月の振り込み予定額"></p>
								
								<p>なお、「状況」ステータスについては下記の通りです。</p>
									<table class="table">
										<tbody>
											<tr>
												<th class="w30per">●●●●年●●月支払予定</th>
												<td>当該の紹介分が振り込まれる予定月を表示しています。</td>
											</tr>
											<tr>
												<th>支払済</th>
												<td>
													当該の紹介分について振り込みが完了しています。
												</td>
											</tr>
											<tr>
												<th>繰り越し</th>
												<td>銀行口座の登録がお済でないため、発生した報酬は自動で繰越されます。</td>
											</tr>
											<tr>
												<th>キャンセル</th>
												<td>
													紹介した方が申し込みをした契約をキャンセルしています。<br>
													報酬については発生いたしません。
												</td>
											</tr>
										</tbody>
									</table>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-b03">振り込み先の銀行口座</h5>
                            <div class="block_body">
                                <p>
									発生した報酬を振り込む口座の登録をすることができます。
								</p>
								<div class="msg msg_notice">
										<h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>口座の登録がお済でない場合</h4>
										<div class="msg_body">
											口座を登録していただくまで発生した報酬は自動的に翌月へ繰越されてしまうため、振り込む口座の登録をしてください。
										</div>
									</div>
                            </div>
                        </section>
                        <!-- /.block -->
                        <section class="block">
                            <h5 class="block_ttl" id="link-b04">報酬受け取り方法の変更</h5>
                            <div class="block_body">
                                <p>
                                    振込先の銀行口座を登録後、必要に応じて報酬受け取り方法の「変更する」から変更してください。
                                    <br>
                                    「繰り越し」、「1,000円以上で振り込み」、「5,000円以上で振り込み」から選択していただけます。
                                </p>
                                <p><img class="img" src="../img/manual/man_order_refer_friend_program_7.png?date=250526" alt="報酬受け取り方法の「変更する」をクリック"></p>
                            </div>
                        </section>
                        <!-- /.block -->
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h4 class="section_ttl" id="link-c">月ごとの振り込み金額の確認手順</h4>
                    <div class="section_body">
						<div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-c01">1.「友達紹介」をクリック</h5>
                                <div class="box_body">
									<p>
										「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「友達紹介」をクリックしてください。
									</p>
									<p><img class="img" src="../img/manual/man_order_refer_friend_program_1.png?date=250526" alt="「友達紹介」をクリック"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 class="box_ttl" id="link-c02">2.「明細を見る」ボタンをクリック</h5>
                                <div class="box_body">
									<p>「今月の振り込み予定額」セクションの「明細を見る」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_refer_friend_program_4.png" alt="「明細を見る」ボタンをクリック"></p>
                                </div>
                            </section>
							<section class="box">
                                <h5 class="box_ttl" id="link-c03">3.確認したい月を選択</h5>
                                <div class="box_body">
									<p>右上のプルダウンより確認したい月を選択することで下部に表示されている表が更新されます。</p>
                                    <p><img class="img" src="../img/manual/man_order_refer_friend_program_5.png" alt="確認したい月を選択"></p>
                                </div>
                            </section>
                        </div>
                        <!-- /.serial-box -->
                    </div>
                </section>
                <!-- /.section -->
				
				<section class="section">
                    <h4 class="section_ttl" id="link-d">報酬について</h4>
                    <div class="section_body">
						<p>
							報酬は紹介された方が成約した日の翌々月にお支払いします。<br>
							お支払い月までに返金を伴うキャンセルなどをされた場合は、報酬が発生しませんのでご注意ください。
						</p>
						<section class="block">
                            <h5 class="block_ttl" id="link-d01">お受け取り方法について</h5>
                            <div class="block_body">
                                <p>
									報酬の受け取り方法は、銀行振込（国内の銀行口座に限ります）です。<br>
									毎月15日にご登録の銀行口座へお支払いいたします（15日が土日祝の場合は翌営業日）。
								</p>
								<p>
									振込手数料は当社負担です。<br>
									お支払いする報酬額は、管理画面トップの「今月の振り込み予定額」に記載しています。
								</p>
                                <p class="red font-bold">※報酬受け取り方法のデフォルト設定は、「繰り越し」です。そのままでは報酬が受け取れませんのでご注意ください。</p>
								
								<p>
									<img class="img" src="../img/manual/man_order_refer_friend_program_3.png?date=250526" alt="お受け取り方法について">
								</p>
								
								<dl class="dl">
									<dt id="link-d02">口座の登録がお済でない場合</dt>
									<dd>
										口座を登録していただくまで発生した報酬は自動的に翌月へ繰越されてしまうため、振り込む口座の登録をしてください。
									</dd>
									
									<dt id="link-d03">口座情報が誤っていた場合</dt>
									<dd>
										当月に振込予定だった報酬は翌月に繰り越しとなります。
									</dd>
								</dl>
                            </div>
                        </section>
                        <!-- /.block -->
                        
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 class="section_ttl" id="link-e">「お友達紹介プログラム」の自己利用について</h4>
                    <div class="section_body">
                        <p>「お友達紹介プログラム」を、ご自身の申し込みにも利用いただけます。<br>
                            新たにサービスをご利用いただく際に、ご自身の紹介用URLを利用してお申し込みいただくと、初回利用料金の割引が適用され、通常よりもお得にご利用いただけます。
                        </p>

                        <aside class="msg msg_caution">
                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h5>
                            <div class="msg_body">
                                <ul class="ul mb0">
                                    <li>割引の適用は、各サービスを「初めてご契約いただく場合」に限ります。</li>
                                    <li>すでにご契約中のサービスは対象外です。</li>
                                    <li>ご自身での利用は1サービスにつき1回限りとなります。</li>
                                    <li>30日未満の契約は特典の対象外です。</li>
                                </ul>
                            </div>
                        </aside>

                        <section class="block">
                            <h4 class="block_ttl" id="link-a">紹介手順</h4>
                            <div class="block_body">
                                <div class="serial-box">
                                    <section class="box">
                                        <h5 class="box_ttl" id="link-e02">1.「友達紹介（自己利用）」をクリック</h5>
                                        <div class="box_body">
                                            <p>「<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>」内、上部メニュー右端のXServerアカウントメニューから「友達紹介（自己利用）」をクリックしてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_refer_friend_program_self_1.png" alt="「友達紹介（自己利用）」をクリック"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 class="box_ttl" id="link-e03">2.「申し込む」ボタンをクリック</h5>
                                        <div class="box_body">
                                            <p>申し込みたいサービスの「申し込む」ボタンをクリックし、申し込みを進めてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_refer_friend_program_self_2.png" alt="「申し込む」ボタンをクリック"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 class="box_ttl" id="link-e04">3.ご契約</h5>
                                        <div class="box_body">
                                            <p>30日以上の契約期間で各サービスをご契約いただくと、契約時に「初回の利用料金の割引特典」が適用されます。</p>
                                        </div>
                                    </section>
                                </div>
                                <!-- /.serial-box -->
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