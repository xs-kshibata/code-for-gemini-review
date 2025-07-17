<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ドメインを取得したのに使えません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="ドメインの状態などにより、さまざまな理由が考えられます。・XServerアカウント内、エックスサーバー契約管理ページのトップページで該当ドメインの表示がある場合・契約管理ページのトップページで該当ドメインの表示がない場合…">

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
            
                <h3 class="sub-ttl">ドメインを取得したのに使えません。</h3>
                
                <p>ドメインの状態などにより、さまざまな理由が考えられます。</p>

                <section class="block">
                    <h4 class="block_ttl">XServerアカウント内、エックスサーバー契約管理ページのトップページで該当ドメインの表示がある場合</h4>
                    <div class="block_body">
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>XServerアカウント内、エックスサーバー契約管理ページのトップページで、該当ドメインのアイコンが「通常」である</dt>
                            <dd>
								<p class="mt5"><img class="img" src="../../img/faq/faq_domain_take1.png?date=20220216" alt="該当ドメインのアイコンが「通常」であることを示しているスクリーンショット"></p>
                                <ol class="ol ol_margin">
                                    <li>サーバーパネル「ドメイン設定」でドメイン設定の追加がされていない<br>
                                    サーバーパネル「ドメイン設定」より、ドメイン設定の追加を行った後、データのアップロードなどを行ってください。</li>
                                    <li>サーバーパネル「ドメイン設定」でのドメイン設定の追加直後である<br>
                                    設定が反映するまで数時間（最大2日程度）のお時間が必要となります。<br>
                                    設定反映までしばらくお待ちください。</li>
                                </ol>
                            </dd>
                        </dl>
                    </div>
                </section>
                <section class="block">
                    <h4 class="block_ttl">XServerアカウント内、エックスサーバー契約管理ページのトップページで該当ドメインの表示がない場合</h4>
                    <div class="block_body">
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>サーバーパネル「ドメイン設定」での設定のみで、ドメインの取得が行われていない</dt>
                            <dd>
                                <p>XServerアカウント内、エックスサーバー契約管理ページの「+ドメイン取得」より、ドメインの取得のお申し込み、取得費用のお支払いをお願いいたします。</p>
								<p class="mb0"><img class="img" src="../../img/faq/faq_domain_take2.png?date=20220216" alt="ドメイン取得をクリックしているスクリーンショット"></p>
                            </dd>
                        </dl>
                        <dl class="border border_gray">
                            <dt class="mb10"><i class="ico ico_square-fill"></i>他社様でドメインは取得済み、ネームサーバーの変更が行われていない</dt>
                            <dd>
                                <p class="mb0">他社様で取得したドメインをご利用いただく際は、ドメイン管理事業者様側にて、
                                    <a href="../../manual/man_domain_namesever_setting.php#link-a">エックスサーバー指定のネームサーバー</a>へご変更ください。<br>
                                なお、他社レンタルサーバーから弊社へお引越し（サーバー移転）のお手続きを行う場合は<a href="../../order/order_transfer_server.php">こちら</a>をご覧ください。</p>
                            </dd>
                        </dl>
                    </div>
                </section>

                <p>上記ご対応の上で解決しない場合、該当ドメイン名をお書き添えの上、サポートまでお問い合わせください。</p>

                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_domain_take.php" class="btn btn_gray">「ドメイン新規取得」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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