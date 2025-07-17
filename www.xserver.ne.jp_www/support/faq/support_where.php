<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>どこまでサポートして貰えますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="■電話・チャットサポート…お電話・チャットでのサポートでは、下記のような内容のお問い合わせにお答えすることが可能です。　・新規ご契約に関するご相談　・サーバー料金、各種仕様について　・SSLの種類、料金について…">

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
            
                <h3 class="sub-ttl">どこまでサポートして貰えますか？</h3>
                
                <section class="block">
                    <h4 class="block_ttl">電話・チャットサポート</h4>
                    <div class="block_body">
                        <p>お電話・チャットでのサポートでは、下記のような内容のお問い合わせにお答えすることが可能です。</p>
                        
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>新規ご契約に関するご相談</dt>
                            <dd>
                                <ul class="ul mb0">
                                    <li>サーバー料金、各種仕様について</li>
                                    <li>SSLの種類、料金について</li>
                                    <li>お申し込みからお支払いまでの流れについて</li>
                                    <li>他社からの乗り換え手順について</li>
                                </ul>
                            </dd>
                        </dl>
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>ご契約後の運用に関するお問い合わせ</dt>
                            <dd>
                                <p>お問い合わせ時には、XServerアカウントIDや、サーバーID、ドメイン名などの情報をお知らせください。</p>
                                <ul class="ul mb0">
                                    <li>各種管理パネルへのログイン</li>
                                    <li>各種管理パネル上の操作方法</li>
                                    <li>メールソフトの設定方法</li>
                                    <li>FTPソフトの設定方法</li>
                                    <li>独自ドメイン追加設定方法</li>
                                    <li>サーバーやドメインの契約更新</li>
                                    <li>各種プログラムの自動インストール方法</li>
                                </ul>
                            </dd>
                        </dl>
                        <p>また、お問い合わせ内容に調査の必要があるような場合には、弊社での調査後、折り返しメールでのご連絡とさせていただいております。<br>
                        なお、下記のような内容は「サポート対象外」の事項といたしておりますので、予めご了承願います。</p>
                        <div class="border border_gray">
                            <ul class="ul mb0">
                                <li>お客様が作成されたプログラム等に関する技術的内容のお問い合わせ</li>
                                <li>自動インストール以外でインストールされた各種プログラムのインストールや動作に関するお問い合わせ</li>
								<li>お客様でカスタマイズされたCMSについてのお問い合わせ、それらによって発生したトラブルの解決</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="block">
                    <h4 class="block_ttl">メールサポート</h4>
                    <div class="block_body">
                        <p>初心者の方でも安心してご利用いただけるよう、可能な限りサポートいたしておりますが、下記のような内容のお問い合わせはお断りいたしております。</p>
                        <div class="border border_gray">
                            <ul class="ul mb0">
                                <li>お客様が作成されたプログラム等に関する技術的内容のお問い合わせ</li>
                                <li>自動インストール以外でインストールされた各種プログラムのインストールや動作に関するお問い合わせ</li>
								<li>お客様でカスタマイズされたCMSについてのお問い合わせ、それらによって発生したトラブルの解決</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_support.php" class="btn btn_gray">「サポートについて」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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