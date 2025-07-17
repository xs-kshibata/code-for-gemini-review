<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>再販について | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーでは、有償・無償を問わず、ご契約名義以外の第三者に、サーバーリソースの一部を貸与する行為を「再販」と定義し、特定の条件を全て満たす場合にのみ再販を許可しています。">

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
            
            <h3 class="sub-ttl">再販について</h3>
            
            <p class="mb40">エックスサーバーでは、ウェブ制作会社様など、ご契約者様以外のデータを扱う必要がある場合でも、より簡単かつ柔軟にサービスをお使いいただくために、再販に関してルールを設けています。</p>

            <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">再販について</a></li>
                    <li><a href="#link-b">再販に関する必要条件</a></li>
                    <li><a href="#link-c">事例</a>
                        <ul>
                            <li><a href="#link-c01">再販が可能な事例</a></li>
                            <li><a href="#link-c02">再販が行えない事例</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <section class="section">
                <h4 class="section_ttl" id="link-a">再販について</h4>
                <div class="section_body">
                    <p>当サービスでは、有償・無償を問わず、ご契約名義以外の第三者に、サーバーリソースの一部を貸与する行為を「再販」と定義し、原則として禁止しています。<br>
                    ただし、下記の条件を全て満たす場合にのみ再販を行うことが可能です。</p>
                </div>
            </section>
            
            <section class="section">
                <h4 class="section_ttl" id="link-b">再販に関する必要条件</h4>
                <div class="section_body">
                    <ul class="ul">
                        <li>当サービスの契約者と再販先とは、直接連絡が可能な状態であること</li>
                        <li>不特定の相手を再販先としないこと</li>
                        <li>再販先は、一法人または一個人、または家族やサークルなどの特定の一団体をそれぞれ1ユーザーとし、計5ユーザーまでとすること</li>
                        <li>契約者は、再販先に対して、禁止事項など当サービスにおける利用規約を説明し、遵守させること
                            <p class="mt5"><a href="../rule/rule.php" class="btn btn_gray">エックスサーバー利用規約<i class="ico ico_chevron-right"></i></a></p>
                        </li>
                        <li>再販先へのサービス上のサポートは、契約者自身が行うこと</li>
                        <li>サーバーに多大な負荷をかけないこと</li>
                    </ul>
                </div>
            </section>
            
            <section class="section">
                <h4 class="section_ttl" id="link-c">事例</h4>
                <div class="section_body clearfix">
                    <section class="block">
                        <h5 id="link-c01" class="block_ttl">再販が可能な事例</h5>
                        <div class="block_body">
                            <ul class="ul">
                                <li>ウェブ制作代行業務において、顧客サイトをサーバー上に構築する</li>
                                <li>家族内や友人同士のサークル内などで、サイト作成やメールアドレス使用のためにサーバーを共同で利用する</li>
                            </ul>
                        </div>
                    </section>
                    <section class="block">
                        <h5 id="link-c02" class="block_ttl">再販が行えない事例</h5>
                        <div class="block_body">
                            <ul class="ul">
                                <li>不特定多数へ向けて、ブログやSNS、カウンターCGIなどのレンタルサービスを提供する</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>
        
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