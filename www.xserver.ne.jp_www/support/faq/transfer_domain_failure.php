<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>他社からエックスサーバーへの移管が失敗してしまいます。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="・.jp 系ドメインの場合…移管元の管理業者様側で承認が行われなかった可能性があります。移管に必要なお手続きが行われているか、移管元の管理業者様側にご確認ください。　・その他ドメインの場合…下記項目をご確認下さい。移管申請時に…">

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
            
                <h3 class="sub-ttl">他社からエックスサーバーへの移管が失敗してしまいます。</h3>
				
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.jp 系ドメインの場合</dt>
                    <dd>移管元の管理業者様側で承認が行われなかった可能性があります。<br>
                    移管に必要なお手続きが行われているか、移管元の管理業者様側にご確認ください。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>その他ドメインの場合</dt>
                    <dd>
                        <p>下記項目をご確認下さい。</p>
                        <ul class="list list_arrow-right">
                            <li>移管申請時に入力いただいた認証鍵（AuthCode）に誤りがないか<br>
                                …レジストリキーやMITキーでは移管が失敗となります。<br>
                                …認証鍵には記号も含まれます。末尾が記号の場合も全てご入力いただく必要があります。</li>
                            <li>Whois情報のメールアドレスはお客様ご自身で確認可能なものに変更されているか</li>
                            <li>移管元でレジストラロックをオフにされているか</li>
                            <li>弊社からの移管申請後に、Whois情報のメールアドレス宛へ届く承認メール(※)の承認作業を行っているか</li>
                            <li>取得から60日以上経過しているか</li>
                            <li>ドメインの利用期限が1週間以内になっていないか</li>
                        </ul>
                        <p>移管失敗理由の調査を行わせていただきますので、再申請を行う前にサポートへご連絡ください。</p>
                        <p class="note_x2">(※)2014年1月6日以前に申し込みされたドメイン、また一部のドメインにおいては、英文の承認メールが届く場合があります。<br>
                            その場合は、メール本文のリンク先をクリック後、「I approve」を選択し、次に「submit」をクリックして承認を行ってください。<br>
                            また、メール自体が迷惑メールフォルダ等に振り分けられてしまう可能性もありますので、ご注意ください。</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_transfer_domain.php" class="btn btn_gray">「ドメイン移管」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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