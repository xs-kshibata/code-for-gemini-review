<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SSL仕様 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜エックスサーバーでご利用可能な独自SSLの仕様に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">SSL仕様</h3>

                <div class="faqList">
                    <ul>
                        <li class="faqList__item"><a href="./ssl_spec_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>独自SSLは利用できますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_mobilesite.php" class="faqList__label"><i class="ico ico_chevron-right"></i>モバイルサイトでも独自SSLは使えますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_wild.php" class="faqList__label"><i class="ico ico_chevron-right"></i>ワイルドカードSSLは使えますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_communication.php" class="faqList__label"><i class="ico ico_chevron-right"></i>独自SSLで利用できるSSL通信を教えてください。</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_sha2.php" class="faqList__label"><i class="ico ico_chevron-right"></i>独自SSLで発行される証明書の署名アルゴリズムはSHA-2ですか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_bring.php" class="faqList__label"><i class="ico ico_chevron-right"></i>他社で購入したSSLサーバー証明書の持ち込みには対応していますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_bring_out.php" class="faqList__label"><i class="ico ico_chevron-right"></i>エックスサーバーで購入したSSLサーバー証明書を持ち出せますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_ip_sni.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「独自IPアドレスあり」と「独自IPアドレスなし」の違いを教えてください。</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_initial_domain.php" class="faqList__label"><i class="ico ico_chevron-right"></i>初期ドメイン(xsrv.jp)で独自SSLは利用できますか。</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_free_option.php" class="faqList__label"><i class="ico ico_chevron-right"></i>「無料独自SSL」と「オプション独自SSL」の違いを教えてください。</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_ip_use.php" class="faqList__label"><i class="ico ico_chevron-right"></i>無料独自SSLは、独自IPアドレスを利用することが可能ですか。</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_multiyear_contract.php" class="faqList__label"><i class="ico ico_chevron-right"></i>オプション独自SSLの複数年契約はできますか？</a></li>
                        <li class="faqList__item"><a href="./ssl_spec_contract_end_date.php" class="faqList__label"><i class="ico ico_chevron-right"></i>独自SSLの有効期間と契約終了日が異なります。</a></li>
                    </ul>
                </div>
                <!-- /.faq -->
                
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