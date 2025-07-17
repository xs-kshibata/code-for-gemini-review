<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>誤って解約申請をしてしまいました。取り消す方法を教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="誤って解約申請をした場合も、解約申請を取り消すことが可能です。解約申請を取り消す方法は、ご契約の種類（サーバー契約、ドメイン契約、SSL契約）やご利用期限が到来しているかなどによって異なります。それぞれ以下を…">

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
            
                <h3 class="sub-ttl">誤って解約申請をしてしまいました。取り消す方法を教えてください。</h3>
                
                <p>誤って解約申請をした場合も、解約申請を取り消すことが可能です。</p>
				<p>解約申請を取り消す方法は、ご契約の種類（サーバー契約、ドメイン契約、SSL契約）やご利用期限が到来しているかなどによって異なります。<br>
				それぞれ以下をご確認ください。</p>
							
				<dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバー契約の解約キャンセルで、利用期限日がまだの場合</dt>
                    <dd>
						<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>にログインしたのち、解約キャンセルを希望するサーバー契約の右端にあるクイックメニュー（<i class="ico-xacc ico-xacc--list"></i>）から「契約情報」をクリックしてください。<br>
						契約情報画面に表示された「解約申請をキャンセルする」ボタンから、解約申請をキャンセルしてください。</p>
						<p><img class="img" src="../../img/faq/faq_contract_alteration5.png" alt="契約情報画面に表示された「解約申請をキャンセルする」ボタンのスクリーンショット"></p>
                    </dd>
                </dl>
							
				<dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバー契約の解約キャンセルで、ご利用期限が過ぎている場合、またはXServerアカウントの退会申請が完了している場合</dt>
                    <dd>
						<p>サポートにご連絡いただきましたら、解約申請を取り消します。<br>
						なお、ご利用期限が到来したサーバー契約は順次削除しているため、ご利用期限日からの経過日数により、解約を取り消すことができない場合があります。</p>
                    </dd>
                </dl>
							
				<dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>ドメイン契約、SSL契約の解約をキャンセルしたい場合</dt>
                    <dd>
						<p>サポートにご連絡いただきましたら、解約申請を取り消します。</p>
                    </dd>
                </dl>
                



                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_cancel.php" class="btn btn_gray">「解約」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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