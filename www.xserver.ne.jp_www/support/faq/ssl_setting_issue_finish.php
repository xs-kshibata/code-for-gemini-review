<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>独自SSLの発行が完了しました。SSLページを利用するにはどうすればよいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="すでに運用中のウェブサイトでSSLページを利用するためには、SSLを利用したいウェブページ（お問い合わせフォームなど）へのリンクを書き換える必要があります。　・ホームページ作成ソフトをご利用の場合…ご利用のホームページ作成ソフト…">

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
            
                <h3 class="sub-ttl">独自SSLの発行が完了しました。SSLページを利用するにはどうすればよいですか？</h3>
                
                <p>すでに運用中のウェブサイトでSSLページを利用するためには、SSLを利用したいウェブページ（お問い合わせフォームなど）へのリンクを書き換える必要があります。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ホームページ作成ソフトをご利用の場合</dt>
                    <dd>
                        <p>ご利用のホームページ作成ソフトで、SSLを利用したいウェブページへのリンクをご変更ください。</p>
                        <p class="note mb0">
                            例：http://www.example.com/　からリンクしているフォームお問い合わせフォームのform.html（http://www.example.com/form.html）をSSL化したい場合、「http://www.example.com/」ページ（index.htmlなど）のHTMLソースにおいて、リンク先を「http://www.example.com/form.html」から「https://www.example.com/form.html」へ変更します。
                        </p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ショッピングカートなどのプログラムをご利用の場合</dt>
                    <dd>
                        <p class="mb0">一部のプログラムにおいては、該当プログラムの管理ツール上で「SSLページ用のアドレス」を設定できる場合があります。<br>
                        この場合、SSLページ用のアドレスを設定することで、XServerアカウント登録画面や決済画面などへのアクセスが自動的にSSL化されます。
                        </p>
                    </dd>
                </dl>
                <p>いずれの場合も、サポートによる代行作業はいたしておりませんので、ご了承ください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_ssl_setting.php" class="btn btn_gray">「SSL申込・設定方法」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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