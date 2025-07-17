<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「独自IPアドレスあり」と「独自IPアドレスなし」の違いを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="「独自IPアドレスあり」を利用する場合は、初期設定費用と専用IPアドレス利用料が必要になります。 また、「独自IPアドレスあり」をご利用の場合は、SSL証明書ベンダーによる発行からインストール完了(ご利用開始)まで72時間程度かかる場合が…">

</head>

<body id="pid-faq">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">「独自IPアドレスあり」と「独自IPアドレスなし」の違いを教えてください。</h3>

                <p>「独自IPアドレスあり」を利用する場合は、初期設定費用と専用IPアドレス利用料が必要になります。
                また、「独自IPアドレスあり」をご利用の場合は、SSL証明書ベンダーによる発行からインストール完了(ご利用開始)まで72時間程度かかる場合があります。
                </p>
                <div class="sni_table">
                    <p class="font-s fr mb0">(税込)</p>
                    <table class="table primary-table-l">
                        <thead>
                            <tr>
                                <th>項目名</th>
                                <th class="menu_ipaddress">独自IPアドレスあり</th>
                                <th class="menu_sni">独自IPアドレスなし</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="tac">初期設定費用</th>
                            <td class="tac">8,800円</td>
                            <td class="tac">0円</td>
                        </tr>
                        <tr>
                            <th class="tac">専用IPアドレス利用料</th>
                            <td class="tac">6,600円/年</td>
                            <td class="tac">不要</td>
                        </tr>
                        <tr>
                            <th class="tac">SSL証明書料</th>
                            <td class="tac">880円/年〜</td>
                            <td class="tac">880円/年〜</td>
                        </tr>
                        <tr>
                            <th class="tac">対応ブラウザ</th>
                            <td class="tac"><i class="spec_mark imgico imgico_circle-double"></i><br>
                                携帯電話(フィーチャーフォン)など<br>
                                幅広いブラウザに対応</td>
                            <td class="tac"><i class="spec_mark imgico imgico_circle"></i><br>
                                一部の古いブラウザに非対応</td>
                        </tr>
                        <tr>
                            <th>ご利用開始</th>
                            <td>発行から72時間以内</td>
                            <td>発行から数時間 <span style="font-size:80%">※1</span></td>
                        </tr>
                            </tbody>
                        
                    </table>
                </div>
                
                <p class="note font-s">(※1) 既に同一のコモンネームで「独自IPアドレスあり」をご利用の場合は、発行から72時間以内でのご利用開始となります。</p>
                <p class="note font-s mb0">※ httpsでのみ利用可能です。SMTP over SSL や POP over SSL などのメール機能についてはご利用になれません。</p>
                <p class="note font-s mb0">※ 「独自IPアドレスなし」の場合、一部の古いWebブラウザや携帯端末(スマートフォン・フィーチャーフォン)が対応外となります。より幅広いWebブラウザ環境に対応する場合は、「独自IPアドレスあり」をご利用ご選択ください。</p>
                <p class="note font-s mb0">※ 「独自IPアドレスあり」は、すべてのサーバープラン「スタンダード、プレミアム、ビジネス」でご利用可能です。</p>
                <p class="note font-s mb0">※ 同一のドメイン(コモンネーム)の場合、「独自IPアドレスあり」と「独自IPアドレスなし」の併用はできません。</p>
                <p class="note font-s">※ 初期ドメイン(xsrv.jp)での利用はできません。</p>
                <div class="border border_gray">
                    <h6 class="sni_ttl font-l mb15"><i class="ico ico_circle"></i>「独自IPアドレスなし」に対応するWebブラウザについて</h6>
                    <div class="ml25">
                        <p>「独自IPアドレスなし」の主要な対応ブラウザは以下です。</p>
                        <p>Internet Explorer7　（Windows Vista)以降　※WindowsXPは非対応です。<br>
                            Mozilla Firefox 2.0 以降<br>
                            Google Chrome 6 以降<br>
                            Safari 3.0 以降<br>
                            iOS 4以降のMobileSafari<br>
                            Android 3以降のAndroidデフォルトブラウザ<br>
                            Windows Phone 7以降</p>
                        <p class="note mb0">※上記は当サービスが独自に調査したものであり、提供元の情報と異なる可能性があります。詳細は提供元にご確認ください。</p>
                    </div>
                    <!-- /inner --> 
                </div>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl.php" class="btn btn_gray">「SSL仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
                </div>

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
<?php include("../../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../../bottom.php"); ?>