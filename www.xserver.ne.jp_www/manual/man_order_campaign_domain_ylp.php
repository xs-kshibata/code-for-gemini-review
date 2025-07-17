<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>キャンペーンドメイン | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜不定期で実施している「ドメインプレゼントキャンペーン」の適用対象となったユーザー様がキャンペーンを利用するための手順について記載しています。">

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
            
                <h3 class="sub-ttl">キャンペーンドメイン</h3>


                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">キャンペーンドメインについて</a></li>
                    <li><a href="#link-b">キャンペーンドメインのお申し込み手順</a>
                        <ol>
                            <li><a href="#link-b01">1.「キャンペーンドメイン」をクリック</a></li>
                            <li><a href="#link-b02">2.希望するドメインを入力</a></li>
                            <li><a href="#link-b03">3.確認・キャンペーンドメイン申請</a></li>
                        </ol>
                    </li>
                </ul>
                </div>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">キャンペーンドメインについて</h4>
                    <div class="section_body">
                        <p>「ドメインプレゼントキャンペーン」実施期間中にサーバーのお申し込みを行われたお客様に、独自ドメイン（.com / .net / .org / .info / .biz のいずれか一つ）を無料で提供いたします。</p>
                        <p>サーバーのご利用料金をお支払いいただき、本契約となりましたら、XServerアカウント内の「キャンペーンドメイン」メニューより、キャンペーンドメインの申請が可能です。</p>
                        <aside class="msg msg_caution">
                            <h6 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>ご注意ください</h6>
                            <div class="msg_body">
                                <p class="red font-bold">現在、「ドメインプレゼントキャンペーン」は実施中です。</p>

                                <p>現在は、下記の期間に実施中のキャンペーンを対象としてドメインの申請が可能です。<br>お申し込みは、下記の期限までに行ってください。</p>
                                <dl class="dl mb0 font-s">
                                    <dd>
                                        <p class="mb0"><em class="font-bold">2018年10月1日(月)〜2020年3月31日(火)で実施中のキャンペーン対象の方</em><br>
                                            →<em class="font-bold red">2020年4月30日(木)まで</em></p>
                                    </dd>
                                </dl>
                            </div>
                        </aside>
                        <p>また、キャンペーンドメインは、プレミアム・ビジネスプランのプレゼントドメインサービスとは異なります。<br>
                        詳しくは、「お申し込みについて &gt; <a href="man_order_present_domain.php">プレゼントドメイン</a>」をご参照ください。</p>
                        
                    </div>
                </section>
                <!-- /.section -->
                        
                <section id="man_campaign-flow" class="section">
                    <h4 class="section_ttl" id="link-b">キャンペーンドメインのお申し込み手順</h4>
                    <div class="section_body">
                        
                                
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「キャンペーンドメイン」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、「キャンペーンドメイン」をクリックします。</p>
                                    <p><img class="img" src="../img/manual/man_order_campaign_domain_1.png?date=20210610" alt="キャンペーンドメインをクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.希望するドメインを入力</h6>
                                <div class="box_body">
                                    <p>ご希望のドメイン名を入力し、適用方法を「新規取得」「移管申請」のいずれかを選択し、「ドメイン検索」をクリックします。</p>
                                    <ul class="ul">
                                        <li>新規取得…ドメインの新規取得をする場合</li>
                                        <li>移管申請…他社からドメイン移管をご希望の場合</li>
                                    </ul>
                                    <p><img class="img" src="../img/manual/man_order_campaign_domain_2.png" alt="ドメイン検索ボタンをクリック"></p>
                                </div>
                            </section>
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.確認・キャンペーンドメイン申請</h6>
                                <div class="box_body">
                                    <p>ドメイン名に誤りがないかどうか確認のうえ、「キャンペーンドメイン申請」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_campaign_domain_3.png" alt="キャンペーンドメイン申請ボタンをクリック"></p>
                                    <p class="note">※ドメイン取得後はドメイン名の変更ができませんのでご注意ください。</p>
                                </div>
                            </section>
                            
                        </div>
                        
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
