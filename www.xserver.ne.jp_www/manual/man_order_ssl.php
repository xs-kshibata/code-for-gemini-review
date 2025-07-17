<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>オプション独自SSLのお申し込み手順 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」でオプション独自SSLをご利用いただくための手順のご案内です。エックスサーバーでは有料の「オプション独自SSL」のほか、無料・無制限に利用可能な「無料独自SSL」も取り扱っています。">


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
            
                <h3 class="sub-ttl">オプション独自SSLのお申し込み</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">独自SSLとは</a></li>
                    <li><a href="#link-b">新規取得お申し込み手順</a>
                        <ol>
                            <li><a href="#link-b00">オプション独自SSLお申し込みの前に</a></li>
                            <li><a href="#link-b01">1.「SSL証明書」の「+追加申し込み」をクリック</a></li>
                            <li><a href="#link-b02">2.お申し込みいただく内容を入力してください。</a></li>
                            <li><a href="#link-b03">3.料金のお支払い手続きを行ってください。</a></li>
                            <li><a href="#link-b04">4.証明書の取得申請を行います。</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-c">更新お申し込み手順</a>
                        <ol>
                            <li><a href="#link-c01">1.「料金支払い」へお進みください。</a></li>
                            <li><a href="#link-c02">2.更新するSSLを選択し、料金のお支払い手続きへとお進みください。</a></li>
                            <li><a href="#link-c03">3.お支払い方法を選択してください。</a></li>
                            <li><a href="#link-c04">4.証明書の更新申請を行います。</a></li>
                        </ol>
                    </li>
                    <li><a href="#link-d">「2Way利用」について</a></li>
                     <li><a href="#link-e">「クラウドセキュアのセキュリティ診断サービス」について</a></li>
                    <li><a href="#link-f">「複数年契約」について</a></li>
                </ul>
                </div>
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_ssl_setting.php">SSLの申込・設定方法に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">独自SSLとは</h4>
                    <div class="section_body">
                        <p>SSLとは、インターネット上でやり取りされる情報を暗号化したり、該当するWebサイトの安全性を証明するセキュリティ機能のことです。<br>
                        また、独自SSLとは、他のユーザーと共に利用する共有SSLとは異なり、ご自身でお持ちの独自ドメインやサブドメインを用いて暗号化通信などを行うものを差します。</p>
                        
                        <aside class="msg">
                            <div class="msg_body">
                                <p class="font-bold">無料・無制限で独自SSLが利用可能な「無料独自SSL」のご利用方法は、以下のマニュアルをご参照ください。</p>
                                <ul class="list list_arrow-right mb0">
                                    <li>マニュアル「<a href="man_server_ssl.php">サーバーについて ＞ SSL設定</a>」</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">新規取得お申し込み手順</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b00">オプション独自SSLお申し込みの前に</h6>
                                <div class="box_body">
                                    <p>各SSL発行元より送られる承認メールを受信するためのメールアドレスが必要となります。事前にサーバーパネルで「admin＠ドメイン名」(例：admin@example.com) 等のメールアドレスを追加しておいてください。</p>
                                    
                                    <div class="border border_gray">
                                        <p class="link mb0"><i class="ico ico_square-fill"></i>参考：<a href="man_mail_add.php">「メールアカウントの追加」マニュアル</a><i class="ico ico_chevron-right"></i></p>
                                    </div>
                                    
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「SSL証明書」の「+追加申し込み」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、ページ下部の「SSL証明書」より、「<em class="font-bold">+追加申し込み</em>」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_1.png?date=20220216" alt="SSL証明書の+追加申し込みをクリック"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.お申し込みいただく内容を入力してください。</h6>
                                <div class="box_body">
                                    <p>オプション独自SSLのお申し込みフォームが表示されますので、以下の内容をご入力ください。</p>
                                    <p><img class="img" src="../img/manual/man_order_domain_ssl_3.png?date=20250626" alt="SSLブランドの申し込みをします"></p>
                                    <table class="table mb5">
                                        <tbody>
                                            <tr>
                                                <th class="w30per">SSLブランドを選択</th>
                                                <td>お申し込みいただくSSL証明書を選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>契約期間を選択</th>
                                                <td>契約期間を選択してください。</td>
                                            </tr>
                                            <tr>
                                                <th>独自IPアドレス</th>
                                                <td>独自IPアドレスの利用をご希望の場合は「利用する」を選択してください。</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    
                                    <p>全てご入力いただきましたら、「利用規約」「個人情報の取り扱いについて」をお読みいただき、同意いただける方は「「利用規約」「個人情報の取り扱いについて」に同意する」にチェックを入れ、「<em class="font-bold">お申し込み内容の確認とお支払いへ進む</em>」をクリックしてお進みください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.料金のお支払い手続きを行ってください。</h6>
                                <div class="box_body">
                                    <p>ご利用料金のお支払い方法を、「クレジットカード」「コンビニエンスストア」「銀行振込」「ペイジー」「あと払い（ペイディ）」「プリペイド」の中からお選びいただき、手続きをお進めください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20201022" alt="料金のお支払い方法を選択"></p>
                                    <p><em class="font-bold">取得申請に関するご案内</em>のメールを、ご登録メールアドレス宛にお送り致しますので、ご確認ください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.証明書の取得申請を行います。</h6>
                                <div class="box_body">
                                    <p>
                                        以降の作業はお申し込みしていただいた独自SSLによって異なります。<br>
                                        詳細は下記ページをご参照ください。
                                    </p>
                                    <div class="block_body">
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_domain.php#link-a">ドメイン認証SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドSSL</li>
                                                    <li>クラウドセキュア スピード認証SSL</li>
                                                    <li>RapidSSL</li>
                                                    <li>ジオトラスト クイックSSLプレミアム</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ov.php#link-a">企業認証SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドセキュア 企業認証SSL</li>
                                                    <li>デジサート セキュア・サーバID</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ev.php#link-a">EV SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドセキュア EV SSL</li>
                                                    <li>デジサート セキュア・サーバID EV</li>
                                                </ul>
                                            </dd>


                                        </dl>
                                    </div>
                                </div>
                            </section>
                            

                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section id="update_ssl" class="section">
                    <h4 class="section_ttl" id="link-c">更新お申し込み手順</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「料金支払い」へお進みください。</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニューの「料金支払い」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_renewal1.png?date=20230130" alt="料金支払いに進みます"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.更新するSSLを選択し、料金のお支払い手続きへとお進みください。</h6>
                                <div class="box_body">
                                    <p>ページ下部にある<em class="font-bold">「XServer SSL」</em>より、更新を行うSSL証明書にチェックを入れ、「支払方法を選択する」をクリックしてください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_8.png?date=230331" alt="支払い方法を選択するをクリックしているスクリーンショット"></p>
                                    <aside class="msg msg_notice">
                                        <div class="msg_body">
                                            <p>当サービスでは、2015年9月16日よりオプション独自SSLのサービス拡張をいたしました。<br>
                                            詳細は、<a href="../price/price_ssl.php">公式サイト &gt; 料金 &gt; オプション独自SSL</a>をご参照ください。</p>
                                            <p>なお、現在ご利用のSSL証明書について、更新のお手続き時点で以下の変更をご希望の場合は、本画面からの更新手続きを行わず<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>内、トップページ下部の「SSL証明書」の「+追加申し込み」より、同一のコモンネームでお手続きを行ってください。</p>
                                            <ul class="ul mb0">
                                                <li>SSLブランドを変更する場合</li>
                                                <li>SSLブランドは変更せず、独自IPアドレスの利用有無のみ変更する場合</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.お支払い方法を選択してください。</h6>
                                <div class="box_body">
                                    <p>更新料金のお支払い方法を、「クレジットカード」「コンビニエンスストア」「銀行振込」「ペイジー」「あと払い（ペイディ）」「プリペイド」の中からお選びいただき、手続きをお進めください。</p>
									<p><img class="img" src="../img/manual/man_order_domain_ssl_9.png?date=20210122" alt="更新料金のお支払い方法を選択"></p>
                                    <p><em class="font-bold">更新手続きに関するご案内</em>をメールにてお送り致しますので、ご確認ください。</p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c04">4.証明書の更新申請を行います。</h6>
                                <div class="box_body">
                                    <p>以降の作業はお申し込みしていただいた独自SSLによって異なります。<br>
                                        詳細は下記ページをご参照ください。</p>
                                    <div class="block_body">
                                        <dl class="dl">
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_domain.php#link-b">ドメイン認証SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドSSL</li>
                                                    <li>クラウドセキュア スピード認証SSL</li>
                                                    <li>RapidSSL</li>
                                                    <li>ジオトラスト クイックSSLプレミアム</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ov.php#link-b">企業認証SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドセキュア 企業認証SSL</li>
                                                    <li>デジサート セキュア・サーバID</li>
                                                </ul>
                                            </dd>
                                            <dt><i class="ico ico_square-fill"></i><a href="man_order_ssl_ev.php#link-b">EV SSL</a></dt>
                                            <dd>
                                                <ul class="ul">
                                                    <li>クラウドセキュア EV SSL</li>
                                                    <li>デジサート セキュア・サーバID EV</li>
                                                </ul>
                                            </dd>


                                        </dl>
                                    </div>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
                    </div>
                </section>
                <!-- /.section -->

                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">「2Way利用」について</h4>
                    <div class="section_body">
                        
                        <p>オプション独自SSLは、Subject Alternative Names(SANs)によるコモンネーム(CN)の別名機能を利用した、「wwwあり/なし」いずれのURLでもSSL通信が可能な「2Way利用」に対応しています。</p>
                        <p>SSL証明書のコモンネームを「www.ドメイン名」とする場合に限り、ドメイン(FQDN)のURLに加え、「wwwなし」URLであってもSSL通信が行えます。</p>
                        
                        <table class="table primary-table-l mb5">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>wwwあり(例:www.example.com)でお申し込みの場合</th>
                                    <th>wwwなし(例:example.com)でお申し込みの場合</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>https://www.example.comでの接続</th>
                                    <td class="tac">○</td>
                                    <td class="tac">×</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <th>https://example.comでの接続</th>
                                    <td class="tac">○</td>
                                    <td class="tac">○</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="note">※一部のSSL証明書ブランドにてご利用可能なWebサイト上へのサイトシールの表示は、コモンネームに指定したドメイン(FQDN)のURLのみに限ります。</p>
                        <p class="note">※64文字以上のコモンネームはお申し込みできません。</p>
                        
                        <p>また、いずれのSSL証明書においても、 一部を除くほとんどの携帯電話(フィーチャーフォン)やWebブラウザの旧バージョン、 ごく一部のスマートフォンは、SANsによるコモンネームの別名機能に対応していないことから、「2Way利用」によるコモンネームと異なるURLでのSSL通信は行えません。</p>
                        <p>以上の端末においてSSL通信を行う場合は、 SSL証明書に設定された「コモンネーム」のみをURLにしてご利用ください。</p>
                        <p>なお、各端末、WebブラウザにおけるSSL証明書でのSANs機能への対応状況については、 携帯電話会社やメーカーへお問い合わせください。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">「クラウドセキュアのセキュリティ診断サービス」について</h4>
						<div class="section_body">
							<p>クラウドセキュアブランドのSSL証明書をお申し込みいただいた方のみがご利用できるサービスで、SSL証明書に使用されるホスト名に存在するお客様のWebサイトを毎日自動巡回・診断し、フィッシングURLやマルウェアなどが確認されたときは、すぐにメール通知を行います。</p>
							<p>安全性を確認したWebサイトには、診断日付が記載したセキュアシールを発行し、サイト上に掲載することで、訪問者に安全性の配慮をアピールすることができます。</p>
							<p>機能の詳細については、下記をご参照ください。</p>

							<section class="block">
								<h5 class="block_ttl">診断方法・診断結果について</h5>
								<div class="block_body">
									<dl class="dl">
										<dt><i class="ico ico_square-fill"></i>診断方法について</dt>
										<dd>
											<ul class="ul">
												<li>
													<p>診断開始URLと検知時の通知先メールアドレスは下記の通りです。</p>
													<table class="table mb5">
														<tbody>
															<tr>
																<th class="w45per">診断開始URL</th>
																<td>https://コモンネーム/</td>
															</tr>
															<tr>
																<th class="w45per">検知時の通知先メールアドレス</th>
																<td>契約情報から設定した通知先メールアドレス</td>
															</tr>
														</tbody>
													</table>
													<p class="note">※診断開始URLは「<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">セキュリティ診断管理画面</a><i class="ico ico_new-window base-color"></i>」から変更可能です。</p>
												</li>
												<li>1日1回、診断開始URLからリンクをたどり、30ページ分のWebページを診断します。</li>
												<li>SSL証明書を解約した場合、診断結果が削除されます。</li>
											</ul>
										</dd>

										<dt><i class="ico ico_square-fill"></i>診断結果について</dt>
										<dd>
											<ul class="ul">
												<li>マルウェア、フィッシングサイトを検知した場合、「検知時の通知先メールアドレス」にメールでご案内します。</li>
												<li>検知時の通知先メールアドレスを設定しない場合、診断結果は通知されません。</li>
												<li>診断結果の詳細は「<a href="https://webscanapi.cloudsecure.ne.jp/xssl/login" rel="nofollow" target="_blank">セキュリティ診断管理画面</a><i class="ico ico_new-window base-color"></i>」からご確認ください。<br>（「SSL証明書のコモンネーム」と「パスワード」でログインできます。）</li>
											</ul>
										</dd>
									</dl>
								</div>
							</section>
						</div>
					</section>
					<!-- /.section -->

                <section class="section">
                    <h4 class="section_ttl" id="link-f">「複数年契約」について</h4>
                    <div class="section_body">
                        <p>
                            オプション独自SSLは複数年（2〜5年）での契約が可能です。<br>
                            一度に長くご契約いただくほど、1年あたりの料金が割安になるため、SSL証明書を長く使う方ほどお得です。
                        </p>
                        <p>SSL証明書の有効期間は契約期間に関わらず1年単位となりますが、契約期間中は自動的に証明書の有効期間が延長されます。（※）</p>

                        <div>
                            <p class="mb10">
                                ※SSL証明書のご利用内容によっては契約期間中も<br>
                                　1年に1度、証明書の有効期間を延長するための手続きが必要となる場合があります。<br>
                            </p>
                            <p class="mb5">　詳細は、以下をご参照ください。</p>
                        </div>

                        <dl class="dl ml10">
                            <dt><i class="ico ico_square-fill"></i>「ドメイン認証SSL」 かつ 対象のドメイン名のネームサーバーが当社 の場合</dt>
                            <dd>
                                契約期間内であれば、証明書の有効期間が自動的に延長されます。<br>
                                お客様に行っていただく作業はありません。
                            </dd>

                            <dt class="mb0 pb0"><i class="ico ico_square-fill"></i>「ドメイン認証SSL」 かつ 対象のドメイン名のネームサーバーが当社<b>以外</b>の 場合</dt>
                            <dt class="mb0 pt0 pb0"><i class="ico ico_square-fill"></i>「企業認証SSL」の場合</dt>
                            <dt class="pt0"><i class="ico ico_square-fill"></i>「EV SSL」 の場合</dt>
                            <dd>
                                契約期間内であっても、証明書の有効期間は自動的には延長されません。<br>
                                1年に1度、お客様ご自身で有効期間延長の手続きを行っていただく必要があります。<br>
                                証明書の期限日の45日前にご案内のメールをお送りしますので、<br>
                                案内に沿って、有効期間延長の手続きを行ってください。
                            </dd>
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