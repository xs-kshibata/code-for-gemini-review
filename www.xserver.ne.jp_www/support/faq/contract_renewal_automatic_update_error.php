<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>「自動更新未完了のお知らせ」のメールが届きました。対応方法を教えてください。- よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="以下のいずれかをご対応ください。■自動更新をご希望の場合 自動更新をご希望の場合は、期日までにXServerアカウントの「自動更新設定」より再設定を行ってください。再設定の期日は対象サービスによって異なります。サーバー・ドメインの場合…">

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
            
                <h3 class="sub-ttl">「自動更新未完了のお知らせ」のメールが届きました。対応方法を教えてください。</h3>
                
                <p>以下のいずれかをご対応ください。</p>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>自動更新をご希望の場合</dt>
                    <dd><p>自動更新をご希望の場合は、期日までにXServerアカウントの「自動更新設定」より再設定を行ってください。 </p>
                        <p>再設定の期日は対象サービスによって異なります。 </p>
                        <ul class="ul mb20">
                            <li>サーバー・ドメインの場合：末日正午まで</li>
                            <li>オプション独自SSLの場合：SSL証明書有効期限日の前日まで</li>
                        </ul>
						<p><img class="img" src="../../img/faq/faq_contract_renewal3.png?date=20230130" alt="自動更新設定をクリックしているスクリーンショット"></p>
						<p class="note">※自動更新設定後、自動更新を行いたいご契約に対して、自動更新サイクルを設定してください。<br>
						「設定なし」のご契約に対しては、自動更新は行われません。</p>
						詳しくは<a href="../../manual/man_order_pay_method_autopay_resetting.php">「自動更新が失敗した場合の再設定」</a>をご覧ください。
					</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>自動更新以外での更新をご希望の場合</dt>
                    <dd>XServerアカウント内、エックスサーバー契約管理ページの「料金支払い > お支払い/請求書発行」より、手動で更新を行ってください。 </dd>
                </dl>
                
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