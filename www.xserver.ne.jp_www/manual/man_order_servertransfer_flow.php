<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>新サーバー簡単移行 ご利用手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜旧仕様のサーバー環境の「新サーバー簡単移行」機能について、サーバー環境を移行するための利用手順に関するご案内です。">

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
            
                <h3 class="sub-ttl">新サーバー簡単移行 ご利用手順</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">新サーバー簡単移行のご利用を開始</a></li>
                    <li><a href="#link-b">データコピー申請</a>
                        <ol>
                            <li><a href="#link-b01">1.「データコピー申請」ボタンをクリックする</a></li>
                            <li><a href="#link-b02">2.申請内容を確認する</a></li>
                            <li><a href="#link-b03">3.申請完了</a></li>
                            <li><a href="#link-b04">4.データコピー完了</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">動作確認</a>
                        <ul>
                            <li><a href="#link-c01">移行元サーバー・移行先サーバーへの操作</a>
								<ol>
									<li><a href="#link-c01-1">1.「移行元・移行先への操作」ボタンをクリックする</a></li>
									<li><a href="#link-c01-2">2.「ファイルマネージャ」「phpMyAdmin」を利用する</a></li>
								</ol>
							</li>
							<li><a href="#link-c02">データコピー実行ログ閲覧</a>
								<ol>
									<li><a href="#i3-2-1">1.「データコピー実行ログ閲覧」ボタンをクリックする</a></li>
									<li><a href="#i3-2-2">2.ログ情報を閲覧する</a></li>
								</ol>
							</li>
							<li><a href="#link-c03">移行期限を延長する</a>
								<ol>
									<li><a href="#link-c03-1">1.「期限を延長」ボタンをクリックする</a></li>
									<li><a href="#link-c03-2">2.内容を確認する</a></li>
									<li><a href="#link-c03-3">3.完了</a></li>
								</ol>
							</li>
                            <li><a href="#link-c04">サーバー移行をキャンセルする</a>
								<ol>
									<li><a href="#link-c04-1">1.「移行キャンセル」をクリックする</a></li>
									<li><a href="#link-c04-2">2.内容を確認する</a></li>
									<li><a href="#link-c04-3">3.移行キャンセル完了</a></li>
								</ol>
							</li>
						</ul>
                    </li>
                    <li><a href="#link-d">サーバー切り替え</a>
                        <ol>
                            <li><a href="#link-d01">1.「サーバー切り替え」ボタンをクリックする</a></li>
                            <li><a href="#link-d02">2.内容を確認する</a></li>
                            <li><a href="#link-d03">3.サーバー切り替え完了</a></li>
                        </ol>
                        <ul>
							<li><a href="#link-d011">移行後、元のサーバー環境に戻す場合</a>
								<ol>
								 <li><a href="#link-d011-1">1.「元のサーバー環境に戻す場合はこちらからお手続きください」をクリックする</a></li>
								 <li><a href="#link-d011-2">2.内容を確認する</a></li>
								 <li><a href="#link-d011-3">3.完了</a></li>
								</ol>
							</li>
						</ul>
					</li>
					</ul>
                </div>

                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_server.php">サーバーに関する「よくある質問」</a></li>
                </ul>
                
                <p>本ツールを利用した移行に関する概要は、マニュアル「<a href="man_order_servertransfer_intro.php">新サーバー簡単移行</a>」をご参照ください。</p>
                
                <section class="section">
                    <h4 id="link-a" class="section_ttl">新サーバー簡単移行のご利用を開始</h4>
                    <div class="section_body">
						<ol class="ol">
							<li>
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「新サーバー簡単移行」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_servertransfer_flow_1.png?date=20230130" alt="新サーバー簡単移行をクリックしているスクリーンショット"></p>
							</li>
							<li>
								<p>最新サーバー環境への移行を希望するサーバーの「選択する」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_servertransfer_flow_2.png?date=20210611" alt="選択するをクリックしているスクリーンショット"></p>
							</li>
						</ol>
                        <p>なお、サーバー一覧に表示されている各ステータスの内容は以下のとおりです。</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>移行可能</dt>
                            <dd>
                                <p>最新サーバー環境への移行が可能なサーバーです。<br>
                                移行を希望する場合は、「<a href="#link-b">データコピー申請</a>」を行ってください。</p>
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>データコピー中</dt>
                            <dd>
                                <p>データコピー申請を受け付けたサーバーです。<br>
                                データコピー処理が完了するまでしばらくお待ちください。</p>
                                <p class="note">※データコピーの開始からデータコピーの完了まではサーバー移行をキャンセルすることができませんのでご注意ください。</p>
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>データコピー完了</dt>
                            <dd>
                                <p>データコピーが完了したサーバーです。<br>
                                この時点ではまだ「移行元サーバー」が参照されています。<br>
                                移行期限までに動作を確認し、「<a href="#link-d">サーバー切り替え</a>」を行ってください。</p>
                                <p class="note">※移行期限を超過した場合、移行先サーバーのデータが削除されます。</p>
                                
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>移行完了</dt>
                            <dd>
                                <p>移行が完了したサーバーです。<br>
                                移行先サーバーが参照されます。</p>
                                <p class="note">※移行後14日間は<a href="#link-d011">元のサーバー環境に戻す</a>ことが可能ですが、それ以降は元サーバーに戻せませんので、ご了承ください。</p>
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>対象外</dt>
                            <dd>
                                <p>現在、「新サーバー簡単移行」機能を利用対象外となっているサーバーです。<br>
                                順次対象サーバーを追加いたしますので、機能提供までお待ちください。<br>
                                現時点での「新サーバー簡単移行」機能利用対象サーバーは<a href="man_order_servertransfer_intro.php#i2">こちら</a>からご確認ください。</p>
                            </dd>
                        </dl>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 id="link-b" class="section_ttl">データコピー申請</h4>
                    <div class="section_body">
                        <p>最新サーバー環境への移行を希望するサーバーアカウントに対して、「データコピー申請」を行ってください。</p>

                        <div class="serial-box">
                            <section class="box">
                                <h5 id="link-b01" class="box_ttl">1.「データコピー申請」ボタンをクリックする</h5>
                                <div class="box_body">
                                    <p>最新サーバー環境への移行を希望するサーバーアカウントの「データコピー申請」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_servertransfer_flow_3.png?date=20201022" alt="「データコピー申請」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-b02" class="box_ttl">2.申請内容を確認する</h5>
                                <div class="box_body">
                                    <p>申請内容の確認画面が表示されます。内容を確認し、「データコピー申請」ボタンをクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_servertransfer_flow_4.png?date=20220216" alt="「データコピー申請」をクリックしているスクリーンショット"></p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-b03" class="box_ttl">3.申請完了</h5>
                                <div class="box_body">
                                    <p>「データコピー申請を受理しました。」と表示されれば申請完了です。<br>
                                    申請内容はメールでもお知らせいたします。併せてご確認ください。</p>
                                </div>
                            </section>
                            <section class="box">
                                <h5 id="link-b04" class="box_ttl">4.データコピー完了</h5>
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
                    <h4 id="link-c" class="section_ttl">動作確認</h4>
                    <div class="section_body">
                        <p>データコピー完了時点では引き続き移行元サーバーを参照していますが、hostsファイルをご利用いただくことで、移行先サーバーの動作確認が可能です。</p>
                        <p>hostsファイルをご利用のうえ、移行先サーバーでWebサイトが問題なく表示されるかどうかなど、動作確認を行ってください。<br>
                        ※詳細は<a href="man_domain_checkproxy.php#link-b">WordPressなどのプログラムを使ったサイトの動作を確認する方法</a>をご参照ください。</p>
                        
                        <p>また、移行元サーバー・移行先サーバーへの操作が必要な場合や、データコピー時の実行ログを閲覧したい場合、以下の「移行サポート機能」をご利用ください。</p>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-c01">移行元サーバー・移行先サーバーへの操作</h5>
                            <div class="block_body">
                                <p>「移行元サーバー」「移行先サーバー」それぞれのサーバー情報の確認や、「ファイルマネージャ」「phpMyAdmin」の利用が可能です。</p>
                                
                                <div class="serial-box">
                                    <section  class="box">
                                        <h6 class="box_ttl" id="link-c01-1">1.「移行元・移行先への操作」ボタンをクリックする</h6>
                                        <div class="box_body">
                                            <p>対象サーバーアカウントの「移行サポート機能」にある「移行元・移行先への操作」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_6.png?date=20201022" alt="「移行元・移行先への操作」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c01-2">2.「ファイルマネージャ」「phpMyAdmin」を利用する</h6>
                                        <div class="box_body">
                                            <p>「移行元」「移行先」それぞれのサーバー情報が表示されます。<br>
                                            「ファイルマネージャ」「phpMyAdmin」の各ツールを利用する場合は、ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_7.png?date=202106112" alt="移行サポート機能画面が表示"></p>
                                            <p>各ツールの操作手順などの詳細は、マニュアル「<a href="man_tool_file.php">ファイルマネージャ</a>」「<a href="man_db_myadmin.php">phpMyAdmin</a>」をご参照ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 class="block_ttl" id="link-c02">データコピー実行ログ閲覧</h5>
                            <div class="block_body">
                                <p>データコピー作業の実行ログを閲覧することが可能です。</p>

                                <div class="serial-box">
                                    <section class="box">
                                        <h6 id="i3-2-1" class="box_ttl">1.「データコピー実行ログ閲覧」ボタンをクリックする</h6>
                                        <div class="box_body">
                                            <p>対象サーバーアカウントの「移行サポート機能」にある「データコピー実行ログ閲覧」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_8.png?date=20201022" alt="「データコピー実行ログ閲覧」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 id="i3-2-2" class="box_ttl">2.ログ情報を閲覧する</h6>
                                        <div class="box_body">
                                            <p>「ファイルコピー時のエラーログ」「ファイル補正ログ」が表示されます。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_9.png?date=20201022" alt="各種ログ情報が表示"></p>
                                            <p>各ログの詳細は、マニュアル「<a href="man_order_servertransfer_detail.php">新サーバー簡単移行 仕様詳細</a>」をご参照ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-c03" class="block_ttl">移行期限を延長する</h5>
                            <div class="block_body">
                                <p>移行期限は原則、データコピー完了から1週間としていますが、以下手順で、移行期限を延長することができます。</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c03-1">1.「期限を延長」ボタンをクリックする</h6>
                                        <div class="box_body">
                                            <p>「移行期限」にある「期限を延長」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_10.png?date=20201022" alt="「期限を延長」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c03-2">2.内容を確認する</h6>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。内容を確認のうえ、「移行期限を延長する」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_11.png?date=20220216" alt="「移行期限を延長する」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c03-3">3.完了</h6>
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
                            <h5 id="link-c04" class="block_ttl">サーバー移行をキャンセルする</h5>
                            <div class="block_body">
                                <p>サーバー環境移行をキャンセルすることができます。<br>
                                キャンセルすると、最新サーバー環境への移行は中止され、移行先サーバーのデータが削除されます。</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c04-1">1.「移行キャンセル」をクリックする</h6>
                                        <div class="box_body">
                                            <p>「移行キャンセル」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_13.png?date=20201022" alt="「移行キャンセル」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c04-2">2.内容を確認する</h6>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。内容を確認のうえ、「移行をキャンセルする」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_14.png?date=20220216" alt="「移行をキャンセルする」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-c04-3">3.移行キャンセル完了</h6>
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
                    <h4 id="link-d" class="section_ttl">サーバー切り替え</h4>
                    <div class="section_body">
                        
                        <section class="block">
                            <div class="block_body">
                                <p>移行先サーバー側のWebページの表示が問題ないことを確認したのち、「サーバー切り替え」ボタンをクリックします。切り替え完了画面が表示されればサーバー移行作業は完了です。</p>
                                <div class="serial-box">
                                    <section class="box">
                                        <h5 id="link-d01" class="box_ttl">1.「サーバー切り替え」ボタンをクリックする</h5>
                                        <div class="box_body">
                                            <p>「サーバー切り替え」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_16.png?date=20201022" alt="「サーバー切り替え」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h5 id="link-d02" class="box_ttl">2.内容を確認する</h5>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。内容を確認し、「サーバー切り替えをする」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_17.png?date=20220216" alt="「サーバー切り替えをする」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h5 id="link-d03" class="box_ttl">3.サーバー切り替え完了</h5>
                                        <div class="box_body">
                                            <p>「サーバー切り替えが完了しました。」と表示されればサーバー切り替えは完了です。<br>
                                            Webサイトの参照先、メールの配送先が移行先サーバーとなります。</p>
                                            <p>なお、サーバー切り替えが完了した旨、メールでもお知らせいたします。併せてご確認ください。</p>
                                        </div>
                                    </section>                      
                                </div>
                            </div>
                        </section>
                        
                        <section class="block">
                            <h5 id="link-d011" class="block_ttl">移行後、元のサーバー環境に戻す場合</h5>
                            <div class="block_body">
                                <p>「サーバー切り替え」を行った後14日間以内であれば、「サーバー切り替え」を取り消し、参照先を移行元サーバーに戻すことができます。</p>
                                
                                <div class="serial-box">
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d011-1">1.「元のサーバー環境に戻す場合はこちらからお手続きください」をクリックする</h6>
                                        <div class="box_body">
                                            <p>「元のサーバー環境に戻す場合はこちらからお手続きください」の「こちら」をクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_19.png?date=20201022" alt="「元のサーバー環境に戻す場合はこちらからお手続きください」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d011-2">2.内容を確認する</h6>
                                        <div class="box_body">
                                            <p>確認画面が表示されます。「元のサーバー環境に戻す」ボタンをクリックします。</p>
                                            <p><img class="img" src="../img/manual/man_order_servertransfer_flow_20.png?date=20220216" alt="「元のサーバー環境に戻す」をクリックしているスクリーンショット"></p>
                                        </div>
                                    </section>  
                                    <section class="box">
                                        <h6 class="box_ttl" id="link-d011-3">3.完了</h6>
                                        <div class="box_body">
                                            <p>「元のサーバー環境に戻しました。」と表示されると、お手続きは完了です。<br>
                                            参照先が移行元サーバーへ戻ります。</p>
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