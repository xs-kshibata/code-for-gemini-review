<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>SMTP認証の国外アクセス制限 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜国外IPアドレスからの不正なメール送信を制限し、セキュリティを強化する「SMTP認証の国外アクセス制限設定」機能のご案内です。">

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
            
                <h3 class="sub-ttl">SMTP認証の国外アクセス制限</h3>

                <div class="supportTabArea">
                    <p>本マニュアルは新・旧サーバーパネルに合わせて2種類ご用意しています。</p>
                    <div class="supportTabWrap">
                        <input id="tab-old" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-old"><i class="ico ico_chevron-right"></i>旧サーバーパネル</label>
                        <!-- 旧パネル -->
                        <div class="supportTabContents">

                            <div class="toc-list">
                            <p class="toc-list--head">目次</p>
                                <ul class="toc-list--body">
                                    <li><a href="#link-previous-a">SMTP認証の国外アクセス制限設定</a>
                                        <ol>
                                            <li><a href="#link-previous-a01">1.SMTP認証の国外アクセス制限設定メニューへ</a></li>
                                            <li><a href="#link-previous-a02">2.制限設定の変更</a></li>
                                        </ol>
                                    </li>
                                </ul>
                            </div>

                            <ul class="link-box">
                                <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail_setting.php">メールの設定方法に関する「よくある質問」</a></li>
                            </ul>

                            <section class="section">
                                <h4 class="section_ttl" id="link-previous-a">SMTP認証の国外アクセス制限設定</h4>
                                <div class="section_body">
                                    <p>
                                        本機能は、国外IPアドレスからの不正なメール送信を制限し、セキュリティを強化する機能です。
                                    </p>
                                    <p>
                                        初期状態では「<em class="font-bold">ON(有効)</em>」です。<br>
                                        国外からメールを送信する場合を除き、「有効」のまま運用することを強く推奨します。
                                    </p>
                                    <p>
                                        国外からメール送信をされる場合は、本設定を「OFF(無効)」にしてください。<br>
                                        また、国内IPアドレスからのアクセスであっても、システム上で国外IPアドレスからのアクセスとして誤認され、メール送信が制限されてしまう場合があります。<br>
                                        その際も、制限を解除してください。
                                    </p>
                                    <p>
                                        本制限はドメインごとの設定のみとなります。
                                    </p>

                                    <div class="serial-box mb10">

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a01">1.SMTP認証の国外アクセス制限設定メニューへ</h6>
                                            <div class="box_body">
                                                <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SMTP認証の国外アクセス制限設定」メニューをクリックしてください。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_jpcheck_1.png" alt="「SMTP認証の国外アクセス制限設定」メニューをクリックしているスクリーンショット"></p>
                                            </div>
                                        </section>

                                        <section class="box">
                                            <h6 class="box_ttl" id="link-previous-a02">2.制限設定の変更</h6>
                                            <div class="box_body">
                                                <p>「ONにする（推奨）」、もしくは「OFFにする」にチェックを入れ、「設定する」ボタンをクリックします。</p>
                                                <p><img class="img" src="../img/manual/previous/man_mail_jpcheck_2.png" alt="「ONにする（推奨）」、もしくは「OFFにする」にチェックを入れ、「設定する」ボタンをクリックします。"></p>
                                                <p>現在の設定が変更されていれば、設定完了です。</p>
                                            </div>
                                        </section>

                                    </div>
                                    <!-- /.serial-box -->

                                    <h4 class="section_ttl mt50" id="link-previous-a">制限対象外のホストについて</h4>
                                    <p>国内でも一般的に使用される以下のホスト名は、国外からのアクセスの場合も本機能による制限の対象外としています。</p>
                                    <p>google.com、outlook.com、hotmail.com、ap-northeast-1.amazonaws.com、ap-northeast-1.compute.amazonaws.com、ap-northeast-3.amazonaws.com、ap-northeast-3.compute.amazonaws.com</p>

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
                                    <li><a href="#link-a">SMTP認証の国外アクセス制限設定</a>
                                        <ol>
                                            <li><a href="#link-a1">1.「SMTP認証の国外アクセス制限設定」をクリック</a></li>
                                            <li><a href="#link-a2">2.制限設定の変更</a></li>
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
                                        <h4 class="section_ttl">SMTP認証の国外アクセス制限設定</h4>
                                        <div class="section_body">

                                            <p>本機能は、国外IPアドレスからの不正なメール送信を制限し、セキュリティを強化する機能です。</p>
                                            <p>初期状態では「<em class="font-bold">ON(有効)</em>」です。</p>
                                            <p>国外に在住の方など、国外からメール送信をされる場合は、下記手順を参考に本設定を「OFF(無効)」にしてください。</p>

                                            <div class="serial-box mb30">

                                                <section class="box">
                                                    <h5 id="link-a1" class="box_ttl">1.「SMTP認証の国外アクセス制限設定」をクリック</h5>
                                                    <div class="box_body">
                                                        <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/server/" target="_blank">サーバーパネル</a>へログインし、「SMTP認証の国外アクセス制限設定」をクリックしてください。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_jpcheck_1.png?date=2410" alt="「SMTP認証の国外アクセス制限設定」をクリックしているスクリーンショット"></p>
                                                    </div>
                                                </section>

                                                <section class="box">
                                                    <h5 id="link-a2" class="box_ttl">2.制限設定の変更</h5>
                                                    <div class="box_body">
                                                        <p>設定を変更したいドメインの設定状況の「ON」をクリックします。</p>
                                                        <p><img class="img" src="../img/manual/man_mail_jpcheck_2.png?date=2410" alt="設定状況の「ON」をクリックしているスクリーンショット"></p>
                                                        <p>「OFF」に切り替わったら設定は完了です。</p>
                                                    </div>
                                                </section>

                                            </div>
                                            <!-- /.serial-box -->

                                            <aside class="msg msg_notice">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご利用に関しての補足</h4>
                                                <div class="msg_body">
                                                    <ul class="note-list note-list--margin">
                                                        <li>※国外からアクセスをされる場合を除き「有効」のまま運用されることを強く推奨します。</li>
                                                        <li>※まれに国内IPアドレスからのアクセスであっても、システム上で国外IPアドレスからのアクセスとして誤認され、メール送信が制限されてしまう場合があります。<br>
                                                            その際も、本マニュアルの設定手順に従って、制限を解除してください。</li>
                                                        <li>※本制限は<em class="font-bold">ドメインごと</em>の設定のみとなります。</li>
                                                        <li>※「SMTP認証」については、「<a href="man_mail_spec.php">メールについて&nbsp;&gt;&nbsp;仕様一覧&nbsp;&gt;&nbsp;認証方法</a>」をご参照ください。</li>
                                                    </ul>
                                                </div>
                                            </aside>

                                            <aside class="msg msg_notice">
                                                <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>制限対象外のホストについて</h4>
                                                <div class="msg_body">
                                                    <p>国内でも一般的に使用される以下のホスト名は、国外からのアクセスの場合も本機能による制限の対象外としています。</p>
                                                    <p>google.com、outlook.com、hotmail.com、ap-northeast-1.amazonaws.com、ap-northeast-1.compute.amazonaws.com、ap-northeast-3.amazonaws.com、ap-northeast-3.compute.amazonaws.com</p>
                                                </div>
                                            </aside>

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