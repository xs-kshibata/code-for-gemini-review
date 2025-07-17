<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>解約 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜ご契約を解約するための手順を記載しています。">

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
            
                <h3 class="sub-ttl">解約</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">解約</a>
                        <ol>
                            <li><a href="#link-a01">1.解約ご希望のサービスを選択</a></li>
                            <li><a href="#link-a02">2.「解約する」をクリック</a></li>
							<li><a href="#link-a03">3.「解約申請をする」をクリック</a></li>
                            <li><a href="#link-a04">4.（サーバー契約を解約した場合）ご利用期限までに「ドメイン設定」を削除してください</a></li>
                        </ol>
                    </li>
					<li><a href="#link-c">解約申請のキャンセル</a>
						<ul>
                            <li><a href="#link-c01">利用期限日がまだの場合</a></li>
                            <li><a href="#link-c02">サーバー契約の利用期限日が過ぎている場合、またはXServerアカウントの退会申請が完了している場合</a></li>
                        </ul>
					</li>
                    <li><a href="#link-b">XServerアカウントの退会手順</a></li>
                </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_cancel.php">解約に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">解約</h4>
                    <div class="section_body">
                    
                        <p>解約ご希望の場合は、対象サービスの解約申請を行ってください。<br>
                        なお、解約申請後も利用期限日まで引き続きご利用可能です。</p>
                        
                        <div class="serial-box mb10">
                            <section class="box">
                                <h6 class="box_ttl" id="link-a01">1.解約ご希望のサービスを選択</h6>
                                <div class="box_body">
									<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、解約を希望するサービスの右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_alteration3.png?date=20230130" alt="契約情報をクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-a02">2.「解約する」をクリック</h6>
                                <div class="box_body">
                                    <p>ページ下部の「解約する」をクリックしてください</p>
                                    <p><img class="img" src="../img/manual/man_order_quit_2.png?date=20201022" alt="解約するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-a03">3.「解約申請をする」をクリック</h6>
                                <div class="box_body">
                                    <p>選択したサーバーIDに間違いがないか確認し、 「解約申請をする」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_quit_3.png?date=20201022" alt="解約申請をするをクリックしているスクリーンショット"></p>
                                    <p>「サーバー」で契約欄が「解約」になっていれば、解約は完了です。<br>
                                        ※試用期間の期限までは引き続きサーバーのご利用が可能です。
                                    </p>
									 <p><img class="img" src="../img/manual/man_order_quit_4.png?date=20210611" alt="「サーバー」で契約欄が「解約」"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-a04">4.（サーバー契約を解約した場合）ご利用期限までに「ドメイン設定」を削除してください</h6>
                                <div class="box_body">
                                    <p>サーバーアカウントを解約する際は、サーバーパネル「ドメイン設定」よりドメイン設定を削除してください。</p>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
				
				<section class="section">
                    <h4 class="section_ttl" id="link-c">解約申請のキャンセル</h4>
                    <p>
                        解約手続きをしたサーバー契約はご利用期限の到来後、順次削除しています。<br>
						サーバー契約が削除されるまでであれば、解約申請をキャンセルすることが可能です。
                    </p>
                   <section class="block">
						<h5 class="block_ttl" id="link-c01">利用期限日がまだの場合</h5>
						<div class="block_body">
							<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>にログインしたのち、解約キャンセルを希望するサーバー契約の右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。<br>
						契約情報画面に表示された「解約申請をキャンセルする」ボタンから、解約申請をキャンセルしてください。</p>

							<p><img class="img" src="../img/manual/man_order_quit_5.png" alt="契約情報画面に表示された「解約申請をキャンセルする」ボタン"></p>
						</div>
					</section>
					<section class="block">
						<h5 class="block_ttl" id="link-c02">サーバー契約の利用期限日が過ぎている場合、またはXServerアカウントの退会申請が完了している場合</h5>
						<div class="block_body">
							<p>サポートにご連絡いただきましたら、解約申請を取り消します。<br>
						なお、ご利用期限日からの経過日数により、解約申請を取り消せない場合があります。</p>
						</div>
					</section>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">XServerアカウントの退会手順</h4>
					<aside class="msg msg_caution">
						<h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>プリペイド残高について</h5>
						<div class="msg_body">
							<p>残っているプリペイドは返金されませんのでご注意ください。</p>
						</div>
					</aside>
                    <p>
                        XServerアカウントの退会を申請する際は、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックしてください。<br>
                        「登録情報確認・編集」→「登録情報」の「退会」より、退会の申請を行うことができます。
                    </p>
                    <ul class="note">
                        <li>※「退会」を申請する前に、各サービスのすべての契約で「解約」を済ませておいてください。「解約」が受理されていない契約がある場合は、「退会」を申請することができません。</li>
                    </ul>
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