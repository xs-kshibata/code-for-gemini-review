<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>サービスお申し込み | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜すでにXServerアカウントIDをお持ちのお客様はXServerアカウントの「サービスお申し込み」からサーバー等を申し込むことで、同一のIDで複数の契約を管理することが可能です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">サービスお申し込み</h3>

                <div class="toc-list">
                    <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">サービスお申し込み</a>
                            <ol>
                                <li><a href="#link-a01">サーバーをお申し込みする場合</a></li>
                                <li><a href="#link-a02">ドメインをお申し込みする場合</a></li>
                                <li><a href="#link-a03">SSL証明書をお申し込みする場合</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>

                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_contract_new.php">新規契約に関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">サービスお申し込み</h4>
                    <div class="section_body">
                        <p>
                            サーバー、およびドメイン、SSLといったサービスは、<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>の「+追加申し込み」「+ドメイン取得」よりお申し込みいただけます。<br>
                            また、XServerアカウントからこれらサービスをお申し込みいただくと同一のIDで契約をまとめて管理できます。
                        </p>
                        <p class="note">※アカウント登録がお済でない方は<a href="<?php print $SECURE_URL; ?>xinfo/?action_register_server_index=on&service=xserver" target="_blank">サーバー新規お申し込みフォーム</a>から登録を行ってください。</p>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a01">サーバーをお申し込みする場合</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「サーバー」より、「+追加申し込み」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_addition_1.png?date=20220216" alt="+追加申し込みをクリック"></p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a02">ドメインをお申し込みする場合</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「ドメイン」より、「+ドメイン取得」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_addition_2.png?date=20220216" alt="+ドメイン取得をクリック"></p>
                            </div>
                        </section>
						
						<section class="block">
                            <h5 class="block_ttl" id="link-a03">SSL証明書をお申し込みする場合</h5>
                            <div class="block_body">
								<p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、トップページ下部の「SSL証明書」より、「+追加申し込み」をクリックしてください。</p>
								<p><img class="img" src="../img/manual/man_order_addition_3.png?date=20220216" alt="+追加申し込みをクリック"></p>
                            </div>
                        </section>
                        
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>

                
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
<?php include("../sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("../footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("../bottom.php"); ?>