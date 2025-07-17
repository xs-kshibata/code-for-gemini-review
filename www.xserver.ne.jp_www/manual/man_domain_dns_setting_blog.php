<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>外部ブログを設定する場合 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜「DNSレコード編集」機能で外部ブログを使用する際の注意事項について記載しています。">

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
            
                <h3 class="sub-ttl">外部ブログを設定する場合</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">外部ブログサービスを設定する場合のDNSレコード編集</a></li>
                    </ul>
                </div>                
                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                </ul>

				<p>
					本マニュアルの設定内容に関して、各ブログサービスごとに内容が異なる場合があります。<br>
					詳しくは各ブログサービスへお問い合わせください。
				</p>
                
                <section class="section mt30">
                    <h4 class="section_ttl" id="link-a">外部ブログサービスを設定する場合のDNSレコード編集</h4>
                    <div class="section_body">
                        <p>まずは、「DNSレコード編集」メニューから「DNSレコード追加」をクリックしてお進みください。</p>
                        <p>DNSレコード編集画面にて、以下の一覧のように設定してください。</p>
                        <p>種別を【A】レコードまたは【CNAME】レコードに設定します。<br>
                            「内容」の入力欄に【A】レコードの場合はお客様ご利用のブログのIPアドレスを、<br>
                            【CNAME】レコードの場合はお客様ご利用のブログのサーバーのホスト名を設定してください。</p>
                        <p>追加方法についての詳細は<a href="man_domain_dns_setting.php">こちら</a>をご参照ください。</p>
                        
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>ホスト名</dt>
                            <dd>空白、またはお客様のサブドメイン</dd>
                            <dt><i class="ico ico_square-fill"></i>種別</dt>
                            <dd>AまたはCNAME</dd>
                            <dt><i class="ico ico_square-fill"></i>内容</dt>
                            <dd>Aレコードの場合はブログのIPアドレスを、CNAMEレコードの場合はサーバーのホスト名を指定</dd>
                            <dt><i class="ico ico_square-fill"></i>TTL</dt>
                            <dd>通常は変更なしで問題ありません</dd>
                            <dt><i class="ico ico_square-fill"></i>優先度</dt>
                            <dd>通常は空白で問題ありません</dd>
                        </dl>
                        
                        <p>内容を確認し、「DNSレコードの追加（確定）」をクリックして追加してください。<br>
                        以上で設定は完了です。</p>
                        <p class="note">※DNSレコード情報の設定反映には、数時間から最大24時間程度を要します。</p>
                        
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