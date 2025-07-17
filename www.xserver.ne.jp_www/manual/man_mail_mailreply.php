<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メール自動応答設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで作成したメールアドレスへメールが到着した際に送信者に対して返信メールを自動で送付する「自動応答設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">自動応答設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">
                
                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">自動応答設定</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.「自動応答設定」をクリック</a></li>
                                            <li><a href="#link-previous-a02">2.「自動応答追加」をクリック</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">自動応答設定</h4>
                                <div class="section_body">

                                    <p>あらかじめ用意した定型文のメールを、自動的に送信者へ返送することができます。</p>

                                    <dl class="dl">
                                        <dt>メール受信時のフローについて</dt>
                                        <dd class="pl0">
                                            <p>メール受信時、図の順番で処理が行われます。</p>
                                            <div class="receiveMail">
                                                <div class="receiveMailContents">
                                                    <ul class="flowNav">
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">受信側DMARC設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">メールの振り分け設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item current">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">自動応答設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">転送設定</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="receiveMailContents">
                                                    <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                        他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.「自動応答設定」をクリック</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「自動応答設定」をクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailreply_1.png" alt="自動応答設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.「自動応答追加」をクリック</h6>
                                            <div class="box_body">
                                                <p>設定するメールアドレスを選択し、各項目の設定を行った後、「確認画面へ進む」をクリックしてください。</p>
                                                <p>確認画面にて内容を確認し、問題がなければ「追加する」をクリックします。</p>
                                                <p>以上で設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_mailreply_2.png?date=2501" alt="「自動応答設定の追加」をフォーカスしているスクリーンショット"></p>

                                                <aside class="msg msg_notice mt30">
                                                    <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「受信メールの引用」設定について</h6>
                                                    <div class="msg_body">
                                                        <p>「受信メールの引用」の設定を行うと、自動応答メールが以下のようになります。</p>
                                                        <p><i class="ico ico_square-fill"></i>「OFF」の場合(標準設定)</p>
                                                        <p class="note">※古い仕様の自動応答設定では「受信メールの引用」が「ON」で設定されている場合があります。</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailreply_4.png" alt="受信メールの引用が「OFF」の場合"></p>
                                                        <p><i class="ico ico_square-fill"></i>「ON」の場合</p>
                                                        <p><img class="img" src="../img/manual/previous/man_mail_mailreply_5.png" alt="受信メールの引用が「ON」の場合"></p>
                                                    </div>
                                                </aside>
                                            </div>
                                        </section>
                                    </div>
                                    <!-- /.serial-box -->
                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /旧パネル -->
                        <input id="tab-new" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-new"><i class="ico ico_chevron-right"></i>新サーバーパネル</label>
                        <!-- 新パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                                <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-a">自動応答設定</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「自動応答設定」をクリック</a></li>
                                            <li><a href="#link-a2">2.「自動応答設定を追加」をクリックして自動応答設定を登録する</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <div class="sectionBody">

                                    <section id="link-a" class="section">
                                        <h4 class="section_ttl">自動応答設定</h4>
                                        <div class="section_body">

                                            <p>あらかじめ用意した定型文のメールを、自動的に送信者へ返送することができます。</p>

                                            <dl class="dl">
                                                <dt>メール受信時のフローについて</dt>
                                                <dd class="pl0">
                                                    <p>メール受信時、図の順番で処理が行われます。</p>
                                                    <div class="receiveMail">
                                                        <div class="receiveMailContents">
                                                            <ul class="flowNav">
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">受信側DMARC設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">迷惑メールフィルタ設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">メールの振り分け設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">自動応答設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">転送設定</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="receiveMailContents">
                                                            <p>本機能は受信箱に配信されたメールを対象に動作します。<br>
                                                                他のメール機能によって受信箱以外へ配信されたメールは対象にならないためご注意ください。</p>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-a1" class="box_ttl">1.「自動応答設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「自動応答設定」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailreply_1.png?date=2410" alt="自動応答設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a2" class="box_ttl">2.「自動応答設定を追加」をクリックして自動応答設定を登録する</h5>
                                                    <div class="box_body">

                                                        <p>「自動応答設定を追加」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailreply_2.png?date=2410" alt="「自動応答設定の追加」をフォーカスしているスクリーンショット"></p>
                                                        <p>設定するメールアドレスを選択し、各項目の設定を行った後、「追加する」をクリックしてください。以上で設定は完了です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_mailreply_3.png?date=2501" alt="自動応答設定画面"></p>

                                                        <aside class="msg msg_notice mt30">
                                                            <h6 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>「受信メールの引用」設定について</h6>
                                                            <div class="msg_body">
                                                                <p>「受信メールの引用」の設定を行うと、自動応答メールが以下のようになります。</p>
                                                                <p><i class="ico ico_square-fill"></i>「OFF」の場合(標準設定)</p>
                                                                <p class="note">※古い仕様の自動応答設定では「受信メールの引用」が「ON」で設定されている場合があります。</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailreply_4.png" alt="受信メールの引用が「OFF」の場合"></p>
                                                                <p><i class="ico ico_square-fill"></i>「ON」の場合</p>
                                                                <p><img class="img" src="../img/manual/man_mail_mailreply_5.png" alt="受信メールの引用が「ON」の場合"></p>
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                        </div>
                                    </section>

                                </div>
                            </section>
                            <!-- /.section -->

                        </div>
                        <!-- /新パネル -->

                    </div>
                </div>
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