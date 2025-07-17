<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>利用期限が過ぎましたが、まだ支払いは間に合いますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="サーバーアカウントの場合…早急にお支払いいただくようお願いいたします。ご利用期限が過ぎ、一定期間が経過いたしますと、アカウントが凍結となりご利用いただけなくなりますのでご注意ください。　独自ドメインの場合…利用期限からどの程度…">

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
            
                <h3 class="sub-ttl">利用期限が過ぎましたが、まだ支払いは間に合いますか？</h3>
                
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーアカウントの場合</dt>
                    <dd>早急にお支払いいただくようお願いいたします。<br>
                    ご利用期限が過ぎ、一定期間が経過いたしますと、アカウントが凍結となりご利用いただけなくなりますのでご注意ください。</dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>独自ドメインの場合</dt>
                    <dd>
                        利用期限からどの程度経過しているかや、ドメインの種類によって、お支払い金額および更新可否が異なります。<br>
                        詳細は、マニュアル「<a href="../../manual/man_domain_how_to_recovery.php">失効ドメイン復旧</a>」をご参照ください。
						<p class="note">※独自ドメインの支払い期限は「利用期限の一か月前」です。ドメインの種類によっては、利用期限前であってもお支払い方法に制約が出る場合がございます。</p>
                    </dd>
                </dl>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_contract_price.php" class="btn btn_gray">「料金」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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