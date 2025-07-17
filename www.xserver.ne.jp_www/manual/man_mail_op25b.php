<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>OP25Bについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜OP25B（Outbound Port 2.Blocking Message／25番ポートブロック）に関するご案内です。">

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
            
                <h3 class="sub-ttl">OP25Bについて</h3>
 
                 <div class="toc-list">
                <p class="toc-list--head">目次</p>
                    <ul class="toc-list--body">
                        <li><a href="#link-a">OP25B(Outbound Port 2.Blocking Message)について</a></li>
                    </ul>
                </div>               
                                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_service_mail.php">メールに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">OP25B(Outbound Port 2.Blocking Message)について</h4>
                    <div class="section_body">
                        <p>現在、ほぼ全ての大手プロバイダ様にて、迷惑メールの蔓延を防止するための取り組みとして、Message Submission Portを利用した送信のみ行えるようになっております。</p>
                        <p>弊社のメールサーバーをご利用いただく場合でも、回線側はプロバイダ様の物をお借りして弊社メールサーバーへ接続を行う仕組みの為、プロバイダ様内ネットワーク（25番ポート）と外部ネットワーク（587番）とを区別する為に導入されている仕組みでございます。</p>
                        <p>仕組みとしては難しいものではございますが、ユーザ側では、通常、お使いのメールソフトウェアで、送信用ポート（SMTPポート）を、標準の25番ポートではなく、587番へ設定をご変更いただくだけでご利用が可能となります。</p>
                        <p class="note">※迷惑メールが発信されにくくなるように、Message Submission Port のみならず、SMTP AUTH方式の認証を併せて行われるプロバイダ様が増えております。<br>
                        標準の25番ポートで送信エラーが発生する際には、お使いのプロバイダ様での制限をご確認の上、設定変更をお願いしております。</p>
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