<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>メール転送設定 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜エックスサーバーで作成したメールアドレスに到着したメールを任意のメールアドレスに転送する「メール転送設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">転送設定</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">転送設定について</a></li>
                                    <li><a href="#link-previous-b">転送設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-previous-b01">1.「メールアカウント設定」を選択</a></li>
                                            <li><a href="#link-previous-b02">2.メールアカウントの右側にある[転送]をクリック</a></li>
                                            <li><a href="#link-previous-b03">3.転送先メールアドレスの追加</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>


                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">転送設定について</h4>
                                <div class="section_body">

                                    <p>受信したメールを任意のメールアドレスに転送することが可能です。</p>

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
                                                        <li class="flowNav__item">
                                                            <div class="flowNav__box">
                                                                <p class="flowNav__ttl">自動応答設定</p>
                                                            </div>
                                                        </li>
                                                        <li class="flowNav__item current">
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
                                </div>
                            </section>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-b">転送設定の設定方法</h4>
                                <div class="section_body">

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b01">1.「メールアカウント設定」を選択</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「メールアカウント設定」を選択します。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_add_1.png" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b02">2.メールアカウントの右側にある[転送]をクリック</h6>
                                            <div class="box_body">
                                                <p><img class="img" src="../img/manual/previous/man_mail_transfer_2.png" alt="[転送]をクリック"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-b03">3.転送先メールアドレスの追加</h6>
                                            <div class="box_body">
                                                <p>[転送先アドレス]に転送先となるメールアドレスを入力し「追加する」をクリックします。</p>
                                                <p class="note">※転送先はいくつでも追加可能です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_transfer_3.png" alt="[転送設定の追加]をクリック"></p>
                                                <p>[転送先]一覧にメールアドレスが追加されたら設定は完了です。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_transfer_4.png" alt="設定完了"></p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <dl class="dl">
                                        <dt><i class="ico ico_square-fill"></i>メールボックスに残すかどうかの設定について</dt>
                                        <dd>
                                            <p>追加をする際に、設定元のメールアドレスにメールを残すかどうか設定することが可能です。<br>
                                            「残さない」に設定すると、設定元のメールアドレスにはメールが残らず転送先にのみ送信されます。<br>
                                            「残す」に設定すると、設定元のメールアドレスと転送先にもメールが送信されます。</p>
                                            <aside class="msg msg_caution">
                                                <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                <div class="msg_body">
                                                    <p>転送先を設定せずに「残さない」に設定すると、受信メールはどこにも受信されず消失してしまいます。「残さない」に設定する場合には、転送先メールアドレスを必ずご指定ください。</p>
                                                </div>
                                            </aside>
                                        </dd>
                                    </dl>

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
                                    <li><a href="#link-a">転送設定について</a></li>
                                    <li><a href="#link-b">転送設定の設定方法</a>
                                        <ol>
                                            <li><a href="#link-b1">1.「メールアカウント設定」を選択</a></li>
                                            <li><a href="#link-b2">2.メールアカウントの右側にある[転送]をクリック</a></li>
                                            <li><a href="#link-b3">3.転送先メールアドレスの設定</a></li>
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
                                        <h4 class="section_ttl">転送設定について</h4>
                                        <div class="section_body">

                                            <p>受信したメールを任意のメールアドレスに転送することが可能です。</p>

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
                                                                <li class="flowNav__item">
                                                                    <div class="flowNav__box">
                                                                        <p class="flowNav__ttl">自動応答設定</p>
                                                                    </div>
                                                                </li>
                                                                <li class="flowNav__item current">
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

                                        </div>
                                    </section>

                                    <section id="link-b" class="section">
                                        <h4 class="section_ttl">転送設定の設定方法</h4>
                                        <div class="section_body">

                                            <div class="serial-box">

                                                <section class="box">
                                                    <h5 id="link-b1" class="box_ttl">1. 「メールアカウント設定」を選択</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、メールアカウント設定をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_transfer_1.png?date=2410" alt="メールアカウント設定を選択しているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b2" class="box_ttl">2. メールアカウントの右側にある[転送]をクリック</h5>
                                                    <div class="box_body">
                                                        <p><img class="img" src="../img/manual/man_mail_transfer_2.png?date=2410" alt="[転送]をクリック"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-b3" class="box_ttl">3. 転送先メールアドレスの設定</h5>
                                                    <div class="box_body">
                                                        <p>[受信メール]、[転送先アドレス]を設定し、「設定する」をクリックするとメール転送設定完了です。</p>
                                                        <p class="note">※転送先アドレスの転送先設定は最大100件まで追加可能です。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_transfer_3.png?date=2410" alt="メール転送設定画面"></p>

                                                        <dl class="dl">
                                                            <dt><i class="ico ico_square-fill"></i>メールボックスに残すかどうかの設定について</dt>
                                                            <dd>
                                                                <p>追加をする際に、[受信メール]設定にて、設定元のメールアドレスにメールを残すかどうか設定することが可能です。<br>
                                                                    「メールボックスに残さない」に設定すると、設定元のメールアドレスにはメールが残らず転送先にのみ送信されます。<br>
                                                                    「メールボックスに残す」に設定すると、設定元のメールアドレスと転送先にもメールが送信されます。</p>
                                                                <aside class="msg msg_caution">
                                                                    <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                                                                    <div class="msg_body">
                                                                        <p>転送先を設定せずに「メールボックスに残さない」に設定すると、受信メールはどこにも受信されず消失してしまいます。「メールボックスに残さない」に設定する場合には、転送先メールアドレスを必ずご指定ください。</p>
                                                                    </div>
                                                                </aside>
                                                            </dd>
                                                        </dl>
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