<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>AIチャットについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーでご利用可能な「AIチャット」の利用手順や注意事項に関するご案内です。">

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
            
                <h3 class="sub-ttl">AIチャットについて</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">AIチャットとは</a></li>
                        <li><a href="#link-b">AIチャットの利用方法</a>
							<ul>
								<li><a href="#link-b01">1.「サポートへのお問い合わせ」ページにアクセス</a></li>
								<li><a href="#link-b02">2.「カテゴリ」「項目」を選択し、「お問い合わせ内容」を入力</a></li>
                                <li><a href="#link-b03">3.「AIに質問」ボタンをクリック</a></li>
                                <li><a href="#link-b04">4 .「上記を確認の上でAIチャットを利用する」をクリック</a></li>
                                <li><a href="#link-b05">5.AIチャット利用開始</a></li>
							</ul>
						</li>
                    </ul>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">AIチャットとは</h4>
                    <div class="section_body">
                        <p>エックスサーバーの「AIチャット」は、AIを使用したチャット機能です。 <br>
                            エックスサーバーに関する不明点やお困りごとに対し、AIが回答します。</p>
                    </div>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">AIチャットの利用方法</h4>
                    <div class="section_body">

                        <div class="serial-box">
                            <section class="box">
                                <h5 class="box_ttl" id="link-b01">1.「サポートへのお問い合わせ」ページにアクセス</h5>
                                <div class="box_body">
                                    <p>以下から「サポートへのお問い合わせ」ページにアクセスします。</p>
                                    <ul class="ul">
                                        <li>「<a href="<?php print $SECURE_URL; ?>xapanel/xserver/contact/input" target="_blank">XServerアカウントをお持ちの方</a>」</li>
                                        <li>「<a href="<?php print $SECURE_URL; ?>xapanel/guest/contact/input?service=xserver" target="_blank">新規の方・ログイン情報が不明の方</a>」</li>
                                    </ul>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b02">2.「カテゴリ」「項目」を選択し、「お問い合わせ内容」を入力</h5>
                                <div class="box_body">
                                    <p>「カテゴリ」「項目」を選択後に表示される「お問い合わせ内容」を入力してください。</p>
                                    <p><img class="img" src="../img/manual/man_tool_aichat_1.png" alt="お問い合わせフォームのスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b03">3.「AIに質問」ボタンをクリック</h5>
                                <div class="box_body">
                                    <p>「AIに質問」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_tool_aichat_2.png" alt="「AIに質問」ボタンのスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b04">4.「上記を確認の上でAIチャットを利用する」をクリック</h5>
                                <div class="box_body">
                                    <p><a href="../rule/rule_aichat.php">AIチャット利用の注意事項</a>および<a href="https://docs.miibo.tech/docs/terms" target="_blank">miiboの利用規約 <i class="ico ico_new-window"></i></a>をご確認のうえ、「上記を確認の上でAIチャットを利用する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_tool_aichat_3.png" alt="「上記を確認の上でAIチャットを利用する」ボタンのスクリーンショット"></p>
                                    <p>質問に対して、AIがエックスサーバーのマニュアル・よくある質問のデータを参照して回答します。<br>なお、チャットに入力する質問内容によっては、AIから適切な回答ができない場合があります。</p>

                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>注意事項</h6>
                                        <div class="msg_body">
                                            <p>「上記を確認の上でAIチャットを利用する」を押すことで利用規約に同意いただいたものとさせていただきます。</p>
                                            <p class="mb5">「上記を確認の上でAIチャットを利用する」を押すと以下がAIチャットに送信されます。</p>
                                            <ul class="ul">
                                                <li>カテゴリ</li>
                                                <li>項目</li>
                                                <li>項目選択時に追加表示された一部項目</li>
                                                <li>お問い合わせ内容</li>
                                            </ul>
                                            <ul class="note-list">
                                                <li>※個人情報（氏名やログイン情報など）の送信は行わないようお願いいたします。</li>
                                                <li>※AIチャットへの質問の際は、"必須"表記のある項目でも未入力で送信が可能です。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                            <section class="box">
                                <h5 class="box_ttl" id="link-b05">5.AIチャット利用開始</h5>
                                <div class="box_body">
                                    <p>AIチャットが起動し、入力された内容に応じたAIによる回答が表示されます。</p>
                                    <p><img class="img" src="../img/manual/man_tool_aichat_4.png" alt="AIチャットが起動しているスクリーンショット"></p>
                                    <p>また、AIチャット画面にて続けて質問をすることもできます。</p>
                                    <p><img class="img" src="../img/manual/man_tool_aichat_5.png" alt="AIチャットが回答しているスクリーンショット"></p>
                                    <p>AIチャットを終了したい場合は、AIチャットの右上の「×」ボタンをクリックしてください。</p>

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>AIチャットで回答できる内容</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>エックスサーバーの操作方法や機能に関する不明点やお困りごと</li>
                                            </ul>
                                        </dd>
                                        <dt><i class="ico ico_square-fill"></i>AIチャットで回答できない内容</dt>
                                        <dd>
                                            <ul class="ul mb0">
                                                <li>回答にご契約状況や個人情報等の確認が必要な質問</li>
                                                <li>AIが学習していない質問</li>
                                                <li>エックスサーバーとは関係のない質問</li>
                                                <li>利用規約に違反する質問</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                    <aside class="msg msg_caution">
                                        <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご利用時の注意事項</h6>
                                        <div class="msg_body">
                                            <ul class="ul">
                                                <li>質問する際、個人情報を含めないようにしてください。</li>
                                                <li>回答の文字数によっては、文章生成に時間がかかったり、失敗する場合があります。</li>
                                                <li>本機能は、予告なく仕様を変更したり、提供を終了する場合があります。</li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </section>

                        </div>
                        <!-- /serial-box -->
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