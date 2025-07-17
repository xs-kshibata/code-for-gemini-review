<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>不審なログイン時の認証 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="不審なログイン時の認証は、XServerアカウントへのログイン時にこれまでと異なるIPアドレスや端末からのログインなど、不審なログインを確認した場合に、認証コードの入力を求める画面が表示される機能です。">

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
            
                <h3 class="sub-ttl">不審なログイン時の認証</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">不審なログイン時の認証について</a>
                        <ul>
                            <li><a href="#link-a01">ご利用時の注意事項</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-b">不審なログイン時の設定変更手順</a>
                        <ol>
                            <li><a href="#link-b01">1.「登録情報確認・編集」をクリック</a></li>
                            <li><a href="#link-b02">2.「設定変更」ボタンをクリック</a></li>
                            <li><a href="#link-b03">3.設定を変更する</a></li>
                        </ol>
                    </li>
                </ul>
                </div>

                <section class="section">
                    <h4 class="section_ttl" id="link-a">不審なログイン時の認証について</h4>
                    <div class="section_body">
                        <p>
                            不審なログイン時の認証は、XServerアカウントへのログイン時にこれまでと異なるIPアドレスや端末からのログインなど、不審なログインを確認した場合に、 認証コードの入力を求める画面が表示される機能です。<br>
                            登録メールアドレス宛に送信される認証コードを入力いただくことで、ログインが可能となります。
                        </p>

                        <h5 id="link-a01" class="block_ttl mt50">ご利用時の注意事項</h5>
                        <ul class="ul">
                            <li>
                                セキュリティ対策の観点から、通常は「ON」のまま運用されることを強く推奨します。
                            </li>
                            <li>
                                Web制作会社の方など、登録メールアドレスを確認できない方のログインが想定される場合は、事前に管理画面より「不審なログイン時の認証」の「OFF」への変更をご検討ください。
                            </li>
                            <li>
                                二段階認証が有効になっている場合は「不審なログイン時の認証」は行われません。
                            </li>
                        </ul>

                    </div>
                </section>

                <section class="section">
                    <h4 class="section_ttl" id="link-b">不審なログイン時の設定変更手順</h4>
                    <div class="section_body">

                        <div class="serial-box">

                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「登録情報確認・編集」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「登録情報確認・編集」をクリックしてください。</p>
                                    <p><img class="img" src="../img/faq/faq_contract_alteration1.png?date=20230130" alt="登録情報確認・編集へ"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「設定変更」ボタンをクリック</h6>
                                <div class="box_body">
                                    <p>ログインセキュリティ設定の「設定変更」ボタンをクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_loginsecurity_01.png" alt="設定変更ボタンをクリックするスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.設定を変更する</h6>
                                <div class="box_body">
                                    <p>設定を変更し、「設定を変更する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_loginsecurity_02.png" alt="設定を変更するボタンをクリックするスクリーンショット"></p>
                                </div>
                            </section>

                        </div>
                        <!-- /.serial-box -->

                    </div>
                </section>
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