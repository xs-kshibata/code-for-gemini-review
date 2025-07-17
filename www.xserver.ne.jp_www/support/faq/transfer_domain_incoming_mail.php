<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>移管申請に必要な移管承認メールが到着しません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="移管の際の承認メールは、Whois情報にドメイン登録者連絡先として登録されているメールアドレス(Registrant Email)宛てに送信されます。メールが到着しない場合は、以下をご確認ください。Whois情報におけるRegistrant Emailが受信可能なメールアドレスとなっている…">

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
            
                <h3 class="sub-ttl">移管申請に必要な移管承認メールが到着しません。</h3>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.com/.netなど.jp以外のドメイン</dt>
                    <dd><p>移管の際の承認メールは、上位レジストラより、 Whois情報の登録者メールアドレス(Registrant Email)宛てに送信されます。<br>
                            メールが到着しない場合は、以下をご確認ください。</p>
                        <ul class="ul">
                            <li>Whois情報のRegistrant Emailが受信可能なメールアドレスとなっているか</li>
                            <li>迷惑メールとして振り分けられていないか</li>
                        </ul>
                        <p>なお、承認メールは上位機関より送信されるため、再送手続きを行うことができません。<br>
                        承認メールが確認できない場合は、移管が失敗するまでお待ちいただく必要があります。<br>
                        移管が失敗となりましたら、弊社より「ドメイン移管未完了のお知らせ」のメールを登録メールアドレス宛てにお送りいたします。<br>
                            こちらがお手元に届き次第、XServerアカウント内、エックスサーバー契約管理ページより再度「移管申請」を進めてください。</p>
                    </dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>.co.jp/.ne.jpなどの.jpドメイン</dt>
                    <dd>
                        <p>移管元の管理会社へ「移管申請への承認依頼」が送信されます。<br>
                            基本的に移管の承認作業は、移管元の管理会社にて実施されますが、管理会社によっては、ドメインの契約者より管理会社に対して移管承認の申請手続きなどが必要になる場合があります。</p>

                        <p>ドメイン移管のお申し込み後に、別途ドメイン契約者にて手続きが必要になるかどうかは、管理会社によって異なりますので、ご不明な場合は移管元の管理会社へご確認ください。</p>
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