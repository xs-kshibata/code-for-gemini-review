<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>XServerビジネスへの変更 ご利用手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーからXServerビジネスへのサービス変更の利用手順に関するご案内です。">

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
            
                <h3 class="sub-ttl">XServerビジネスへの変更 ご利用手順</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">XServerビジネスへの変更を開始</a></li>
                    <li><a href="#link-b">プランを選択</a></li>
                    <li><a href="#link-c">データコピー申請</a>
                        <ol>
                            <li><a href="#link-c01">1.移行後のサーバーIDを入力し、「確認画面へ進む」をクリックする</a></li>
                            <li><a href="#link-c02">2.申請内容を確認する</a></li>
                            <li><a href="#link-c03">3.申請完了</a></li>
                            <li><a href="#link-c04">4.データコピー完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">動作確認</a>
                        <ul>
                            <li><a href="#link-d01">移行元サーバー・移行先サーバーへの操作</a>
								<ol>
									<li><a href="#link-d01-1">「ファイルマネージャ」「phpMyAdmin」を利用する</a></li>
								</ol>
							</li>
							<li><a href="#link-d02">データコピー実行ログ閲覧</a>
								<ol>
									<li><a href="#link-d02-1">1.「データコピー実行ログ閲覧」ボタンをクリックする</a></li>
									<li><a href="#link-d02-2">2.ログ情報を閲覧する</a></li>
								</ol>
							</li>
							<li><a href="#link-d03">移行期限を延長する</a>
								<ol>
									<li><a href="#link-d03-1">1.「期限を延長」ボタンをクリックする</a></li>
									<li><a href="#link-d03-2">2.内容を確認する</a></li>
									<li><a href="#link-d03-3">3.完了</a></li>
								</ol>
							</li>
                            <li><a href="#link-d04">サーバー移行をキャンセルする</a>
								<ol>
									<li><a href="#link-d04-1">1.「移行キャンセル」をクリックする</a></li>
									<li><a href="#link-d04-2">2.内容を確認する</a></li>
									<li><a href="#link-d04-3">3.移行キャンセル完了</a></li>
								</ol>
							</li>
						</ul>
                    </li>
                    <li><a href="#link-e">サーバー切り替え</a>
                        <ol>
                            <li><a href="#link-e01">1.「サーバー切り替え」ボタンをクリックする</a></li>
                            <li><a href="#link-e02">2.ご利用料金のお支払い</a></li>
                            <li><a href="#link-e03">3.サーバー切り替え完了</a></li>
                        </ol>
					</li>
					</ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <p>XServerビジネスへの変更に関する概要は、マニュアル「<a href="man_order_servicetransfer_intro.php">XServerビジネスへの変更</a>」をご参照ください。</p>
                
                <section class="section">
                    <h4 id="link-a" class="section_ttl">XServerビジネスへの変更を開始</h4>
                    <div class="section_body">
						<ol class="ol">
							<li>
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「プラン・サービス変更」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_servicetransfer_flow_1.png?date=20230130" alt="「プラン・サービス変更」をクリックしているスクリーンショット"></p>
							</li>
							<li>
								<p>XServerビジネスへの変更を希望するサーバーの「選択する」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_servicetransfer_flow_2.png?date=20210611" alt="選択するをクリックしているスクリーンショット"></p>
							</li>
						</ol>
                    </div>
                </section>
                <!-- /.section -->


                <section class="section">
                    <h4 id="link-b" class="section_ttl">プランを選択</h4>
                    <div class="section_body">
                        <p>変更先のプランを選択してください。</p>
                        <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_3.png?date=20210611" alt="プランを選択しているスクリーンショット"></p>


                    </div>
                </section>
                <!-- /.section -->

                <section class="section">
                    <h4 id="link-c" class="section_ttl">データコピー申請</h4>
                    <div class="section_body">
                        <p>XServerビジネスへの移行を希望するサーバーアカウントに対して、「データコピー申請」を行ってください。</p>

                        <div class="serial-box">
                            <section class="box">
                                <h5 id="link-c01" class="box_ttl">1.移行後のサーバーIDを入力し、「確認画面へ進む」をクリックする</h5>
                                <div class="box_body">
                                    <p>移行後のサーバーIDを入力し、「確認画面へ進む」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_4.png?date=20201022" alt="「確認画面へ進む」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c02" class="box_ttl">2.申請内容を確認する</h5>
                                <div class="box_body">
                                    <p>申請内容の確認画面が表示されます。内容を確認し、「データコピー申請」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_5.png?date=20220216" alt="「データコピー申請」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c03" class="box_ttl">3.申請完了</h5>
                                <div class="box_body">
                                    <p>「データコピー申請を受理しました。」と表示されれば申請完了です。<br>
                                    申請内容はメールでもお知らせいたします。併せてご確認ください。</p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-c04" class="box_ttl">4.データコピー完了</h5>
                                <div class="box_body">
                                    <p>データコピーは申請受付後、順番に対応します。<br>
                                    データコピーが完了しましたらメールにてお知らせしますので、しばらくお待ちください。</p>
                                    <p class="note">※申込状況やデータ使用量によっては、データコピー完了までに数時間程度かかる場合があります。</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <!-- /.section -->                
                
                <section class="section">
                    <h4 id="link-d" class="section_ttl">動作確認</h4>
                    <div class="section_body">
                        <p>データコピー完了時点では引き続き移行元サーバーを参照していますが、hostsファイルをご利用いただくことで、移行先サーバーの動作確認が可能です。</p>
                        <p>hostsファイルをご利用のうえ、移行先サーバーでWebサイトが問題なく表示されるかどうかなど、動作確認を行ってください。<br>
                        ※詳細は<a href="man_domain_checkproxy.php#link-b">WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>をご参照ください。</p>

                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d01">移行元サーバー・移行先サーバーへの操作</h5>
                            <div class="block_body">
                                <p>「移行元サーバー」「移行先サーバー」それぞれのサーバー情報の確認や、「ファイルマネージャ」「phpMyAdmin」の利用が可能です。</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d01-1">「ファイルマネージャ」「phpMyAdmin」を利用する</h6>
                                        <div class="box_body">
                                            <p>対象サーバーアカウントの「移行内容の確認」に、「移行元」「移行先」それぞれのサーバー情報が表示されます。<br>
                                            「ファイルマネージャ」「phpMyAdmin」の各ツールを利用する場合は、ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_6.png?date=202106112" alt="サーバー情報が表示"></p>
                                            <p>各ツールの操作手順などの詳細は、マニュアル「<a href="man_tool_file.php">ファイルマネージャ</a>」「<a href="man_db_myadmin.php">phpMyAdmin</a>」をご参照ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-d02">データコピー実行ログ閲覧</h5>
                            <div class="block_body">
                                <p>データコピー作業の実行ログを閲覧することが可能です。</p>

                                <div class="serial-box">
                                    <section class="box">
                                        <h6 id="link-d02-1" class="box_ttl">1.「データコピー実行ログ閲覧」ボタンをクリックする</h6>
                                        <div class="box_body">
                                            <p>対象サーバーアカウントにある「データコピー実行ログ閲覧」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_7.png?date=20250314" alt="「データコピー実行ログ閲覧」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 id="link-d02-2" class="box_ttl">2.ログ情報を閲覧する</h6>
                                        <div class="box_body">
                                            <p>「ファイルコピー時のエラーログ」「ファイル補正ログ」が表示されます。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_8.png?date=20250314" alt="各種ログ情報が表示"></p>
                                            <p>各ログの詳細は、マニュアル「<a href="man_order_servicetransfer_detail.php">XServerビジネスへの変更 仕様詳細</a>」をご参照ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-d03" class="block_ttl">移行期限を延長する</h5>
                            <div class="block_body">
                                <p>移行期限は原則、データコピー完了から1週間としていますが、以下手順で、移行期限を延長することができます。</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-1">1.「期限を延長」ボタンをクリックする</h6>
                                        <div class="box_body">
                                            <p>「移行期限」にある「期限を延長」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_9.png?date=20250314" alt="「期限を延長」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-2">2.内容を確認する</h6>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。内容を確認のうえ、「移行期限を延長する」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_10.png?date=20250314" alt="「移行期限を延長する」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d03-3">3.完了</h6>
                                        <div class="box_body">
                                            <p>「移行期限の延長を完了しました。」と表示されれば完了です。<br>
                                            「移行期限を延長」を実行した時点の1週間後まで期限が延長されます。</p>
                                        </div>
                                    </section>
                                </div>

                                <aside class="msg msg_notice mb10 mt30">
                                    <h5 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>お早めの動作確認および「サーバー切り替え」をお勧めします</h5>
                                    <div class="msg_body">
                                        <p>
                                            データコピーの完了から時間が経過するにしたがって、移行元・移行先サーバーの内容に差異が生じる可能性が高くなります。<br>
                                            移行期限にかかわらず、なるべく早く動作確認および「サーバー切り替え」を行うことをお勧めします。
                                        </p>
                                    </div>
                                </aside>
                                
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-d04" class="block_ttl">サーバー移行をキャンセルする</h5>
                            <div class="block_body">
                                <p>サーバー環境移行をキャンセルすることができます。<br>
                                キャンセルすると、XServerビジネスへの移行は中止され、移行先サーバーのデータが削除されます。</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-1">1.「移行キャンセル」をクリックする</h6>
                                        <div class="box_body">
                                            <p>「移行キャンセル」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_11.png?date=20250314" alt="「移行キャンセル」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-2">2.内容を確認する</h6>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。内容を確認のうえ、「移行をキャンセルする」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_12.png?date=20250314" alt="「移行をキャンセルする」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d04-3">3.移行キャンセル完了</h6>
                                        <div class="box_body">
                                            <p>「移行のキャンセルが完了しました。」と表示されると、移行キャンセルは完了です。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-e" class="section_ttl">サーバー切り替え</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <div class="block_body">
                                <p>移行先サーバー側のWebページの表示が問題ないことを確認したのち、「サーバー切り替え」ボタンをクリックします。ご利用料金のお支払いが完了し、切り替え完了画面が表示されればサーバー移行作業は完了です。</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h5 id="link-e01" class="box_ttl">1.「サーバー切り替え」ボタンをクリックする</h5>
                                        <div class="box_body">
                                            <p>「サーバー切り替え」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_13.png?date=20250314" alt="「サーバー切り替え」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 id="link-e02" class="box_ttl">2.ご利用料金のお支払い</h5>
                                        <div class="box_body">
                                            <p>変更内容をご確認のうえ、料金のお支払い手続きを進めてください。</p>
                                            <p><img class="img" src="../img/manual/man_order_servicetransfer_flow_14.png?date=20250314" alt="「サーバー切り替えをする」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h5 id="link-e03" class="box_ttl">3.サーバー切り替え完了</h5>
                                        <div class="box_body">
                                            <p>「サーバー切り替えが完了しました。」と表示されればサーバー切り替えは完了です。<br>
                                            Webサイトの参照先、メールの配送先が移行先サーバーとなります。</p>
                                            <p>なお、サーバー切り替えが完了した旨、メールでもお知らせいたします。併せてご確認ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
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