<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>更新したいのですが、「料金支払い &gt; お支払い/請求書発行」の「料金のお支払い手続き」に表示されていません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="異なるXServerアカウントで管理が行われている、ドメインが既に失効している（.jpドメインの場合、ご利用期限間近の場合もXServerアカウントより表示が削除されます）など、いくつかの原因が考えられます。…">

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
            
                <h3 class="sub-ttl">更新したいのですが、「料金支払い &gt; お支払い/請求書発行」の「料金のお支払い手続き」に表示されていません。</h3>

                <p>下記のような原因が考えられます。</p>

                <dl class="border border--gray">
                    <dt class="mb10"><i class="ico ico--squareFill"></i>異なるXServerアカウントで管理が行われている</dt>
                    <dd>
                        <p>複数のXServerアカウントをお持ちの場合、各アカウントにてご確認ください。<br>
                            ログイン情報がご不明な場合、以下の質問をご参照ください。</p>

                        <strong class="yellow">参考：</strong><a href="service_missing_member_id.php">XServerアカウントIDを確認したい。</a><br>
                        <strong class="yellow">参考：</strong><a href="service_missing_infopanel_password.php">XServerアカウントのパスワードが分かりません。</a>
                    </dd>
                </dl>
                <dl class="border border--gray">
                    <dt class="mb10"><i class="ico ico--squareFill"></i>ドメインが既に失効している<br>（.jpドメインの場合、ご利用期限間近の場合もXServerアカウントより表示が削除されます）</dt>
                    <dd>
                        <p>XServerでドメインをご取得いただいた場合、更新期限に先駆けて、以下のような件名でメールをお送りしています。メール内の「利用期限日」をご確認ください。</p>

                        <p>【XServerドメイン】■重要■ドメイン更新期限に関するお知らせ</p>

                        <p>また失効してしまった場合、利用期限日からの経過日数によって、その後の対応が異なります。<br>
                            マニュアル「<a href="../../manual/man_domain_how_to_recovery.php">失効ドメイン復旧</a>」をご確認の上、ご対応くださいませ。</p>
                    </dd>
                </dl>

                <p>上記対応にて解決されない場合は、該当のアカウント名をお書き添えの上、サポートまでお問い合わせください。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_renewal.php" class="btn btn_gray">「契約更新」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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