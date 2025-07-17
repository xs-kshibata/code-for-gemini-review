<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>アカウント・契約の統合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜複数のXServerアカウントを１つのXServerアカウントとして統合する手続きの手順を説明しています。">

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
            
                <h3 class="sub-ttl">アカウント・契約の統合</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li>
                        <a href="#link-a">アカウント・契約の統合とは</a>
                    </li>
                    <li>
                        <a href="#link-b">統合が可能なアカウント</a>
                        <ul>
                            <li><a href="#link-b01">統合できないアカウントと対処方法</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-c">統合手順</a>
                        <ol>
                            <li><a href="#link-c01">1.「アカウントの統合」をクリック</a></li>
                            <li><a href="#link-c02">2.統合するアカウントの情報を入力</a></li>
                            <li><a href="#link-c03">3.統合完了</a></li>
                        </ol>
                    </li>
                </ul>
                </div>
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">アカウント・契約の統合とは</h4>
                    <div class="section_body">
                        <p>XServerアカウント（XServerドメインから管理を統合したIDを含む）を同じ契約名義・契約区分で別々に複数お持ちの場合、いずれかのアカウントに統合することが可能です。</p>
                        <p class="tac"><img class="fluid-sm" src="../img/manual/order_user_merge01.png?date=20250217" alt="統合イメージ"></p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">統合が可能なアカウント</h4>
                    <div class="section_body">
                        <p>
                           お持ちのXServerアカウントについて下記のご登録情報が一致している場合に限り、本機能にて統合することが可能です。
                        </p>
                        <ul class="ul">
                            <li>契約区分（法人/個人）</li>
                            <li>契約名義</li>
                            <li>契約名義（カナ）</li>
                        </ul>

                        <h5 id="link-b01" class="block_ttl mt50">統合できないアカウントと対処方法</h5>
                        <p>以下にあたる場合、本機能によるアカウントの統合はできません。</p>
                        <dl class="dl mb0">
                            <dt><i class="ico ico_square-fill"></i>未払いの請求情報が存在する場合</dt>
                            <dd>
                                <p>該当する請求情報を削除することでアカウントの統合が可能です。</p>
                            </dd>
                            <dt><i class="ico ico_square-fill"></i>新しい利用規約に同意していない、「xd」から始まるXServerアカウントIDが統合対象の場合</dt>
                            <dd>
                                <p>2018年以前にXServerドメインで発行された「xd」から始まるXServerアカウントIDと統合する場合、そのIDでXServerアカウントにログインする前に規約同意画面が表示されます。規約に同意していただくことでアカウントを統合することが可能になります。</p>
                            </dd>

                            <dt><i class="ico ico_square-fill"></i>有効契約の有無にかかわらず、移行元のアカウントに以下サービスの契約がある場合</dt>
                            <dd>
                                以下サービスの契約があるXServerアカウントを「移行先」にしていただくことで、統合が可能です。<br>
                                移行元・移行先それぞれに以下サービスの契約がある場合は、統合することができません。
                                <ul class="ul">
                                    <li>XServer VPS</li>
                                    <li>XServer VPS for Game</li>
                                    <li>XServer クラウドPC</li>
                                    <li>XServer SNS</li>
                                    <li>XServer GAMEs</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">統合手順</h4>
                    <div class="section_body">
                        
                        <aside class="msg msg_caution">
                            <h5 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>統合後のキャンセルはできません。</h5>
                            <div class="msg_body">
                                <p>
                                    統合後、統合前の状態に戻すことはできません。内容をよくご理解の上で統合してください。
                                </p>
                            </div>
                        </aside>
                        
                        <p>
                            本機能により下記が統合されます。
                        </p>
                        
                        <dl class="dl">
                            <dt>ご契約アカウント</dt>
                            <dd>
                                <ul class="ul">
                                    <li>サーバー</li>
                                    <li>独自ドメイン</li>
                                    <li>SSL証明書</li>
                                </ul>
                            </dd>
                            <dt>お支払い履歴</dt>
                            <dd>
                                <p>
                                    これまでお支払いいただいた履歴
                                </p>
                            </dd>
                            <dt>プリペイド</dt>
                            <dd>
                                <p>
                                    プリペイドの残高
                                </p>
                            </dd>
                            <dt>Whois登録情報設定</dt>
                            <dd>
                                <p>
                                    「Whois初期値設定」メニューに登録している内容。<br>
                                    統合元および統合先の両方に登録されている場合、統合先に登録されている内容が優先して適用されます。
                                </p>
                            </dd>
                            <dt>WordPressテーマ</dt>
                            <dd>
                                <p>購入済みWordPressテーマ</p>
                            </dd>
                            <dt>お友達紹介プログラム</dt>
                            <dd>
                                <p>お友達紹介プログラムの報酬および紹介履歴</p>
                            </dd>
                        </dl>
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c01">1.「アカウントの統合」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、上部メニュー右端のXServerアカウントメニューから「アカウントの統合」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/order_user_merge02.png?date=20250217" alt="「アカウントを統合する」ボタンをクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c02">2.統合するアカウント情報を入力</h6>
                                <div class="box_body">
                                    <p>統合するXServerアカウントID・パスワードを入力し、統合方法を選択します。</p>
                                    <p><img class="img" src="../img/manual/order_user_merge03.png?date=20201022" alt="統合する登録情報を入力"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-c03">3.統合完了</h6>
                                <div class="box_body">
                                    <p>統合内容にお間違いがなければ「アカウントを統合する」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/order_user_merge04.png?date=20220216" alt="「アカウントを統合する」をクリック"></p>
                                </div>
                            </section>
                            
                        </div>
                        <!-- /.serial-box -->
                        
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