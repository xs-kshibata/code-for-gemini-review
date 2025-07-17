<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>クレジットカード情報の削除ができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="XServerアカウント内で変更が可能です。詳細はマニュアルページ「メインカードの変更」をご覧ください。">

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
            
                <h3 class="sub-ttl">クレジットカード情報の削除ができません。</h3>
                
                <p>XServerクラウドPCで「14日間無料トライアル」を利用している場合、クレジットカード情報の削除ができません。<br>
                    クレジットカード情報を削除する場合は、以下いずれかの対応を行ってください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>対象サービスを解約してからクレジットカード情報を削除</dt>
                    <dd>XServerクラウドPCの解約については、「<a href="https://www.cloudpc.ne.jp/support/manual/man_order_cancel.php" target="_blank">申し込みの取り消し<i class="ico ico_new-window"></i></a>」をご覧ください。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>新しいメインカードを登録したあと、現在のメインカードを削除</dt>
                    <dd>メインカードの登録方法については、「<a href="../../manual/man_order_pay_method_autopay_credit.php#link-b03">クレジットカードの追加</a>」をご覧ください。</dd>
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