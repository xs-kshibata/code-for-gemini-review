<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/order_branch.css"); ?>" rel="stylesheet">

<title>新規お申し込み | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」の新規お申し込みページ。エックスサーバーを初めて利用するかたは当ページからお申し込みフォームへ、すでにエックスサーバーをご利用中のかたはXServerアカウントよりお申し込みください。">

</head>

<body id="pid-order-branch">

<?php include("../top.php"); ?>

<div class="holder-sml">

    <section class="order">
        
        <header class="order_header">
            <p class="order_logo"><img src="../img/common/img_logo.png" alt="エックスサーバー"></p>
            <h1 class="order_ttl"><span class="label label_ttl-order-form">サービスのお申し込み</span></h1>
        </header>
        <!-- /.order_header -->
        
        <?php include("../topicpath.php"); ?>
        
        <div class="order_body">
            <p class="mb30">初めてご利用の方は専用フォームから、すでにご利用中の方はXServerアカウントへログインしてご利用下さい。</p>
            
            <div class="clearfix">
                <section class="branch branch_left">
                    <h2 class="branch_ttl"><span class="label label_order-blanch label_order-blanch_ttl_beginner">初めてのご利用・新規お申し込みの方</span></h2>
                    <p class="branch_text">今回エックスサーバーのご利用が初めての方は、<br class="visible-l">以下からお申し込み手続きを進めて下さい。</p>
                    <p class="branch_btn"><a class="btn btn_blue" href="https://secure.xserver.ne.jp/xinfo/?action_register_index=on"><span class="label label_order-blanch label_order-blanch_btn_order">新規お申し込み</span></a></p>
                </section>
                <section class="branch branch_right">
                    <h2 class="branch_ttl"><span class="label label_order-blanch label_order-blanch_ttl_user">すでにエックスサーバーをご利用中の方</span></h2>
                    <p class="branch_text">XServerアカウントの登録がお済みの方は、XServerアカウントへログインの上、<br class="visible-l">「追加のお申し込み」からご利用下さい。</p>
                    <p class="branch_btn"><a class="btn btn_blue" href="<?php print $SECURE_URL; ?>xapanel/login/xserver/"><span class="label label_order-blanch label_order-blanch_btn_login">ログイン</span></a></p>
                </section>
            </div>
        </div>
        <!-- /.order_body -->
        
        <footer class="order_footer">
            <p><small>&copy; 2013-<?php print date("Y", time()); ?> XServer Inc.</small></p>
        </footer>
        <!-- /.order_footer -->
        
    </section>
    <!-- /.order -->

</div>
<!-- /.holder-sml -->

<?php include("../bottom.php"); ?>