<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>プランの変更 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜サーバー契約の上位プランへの変更・下位プランへの変更について、手続きが可能な期間や手順をご案内しています。">

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
            
                <h3 class="sub-ttl">プランの変更</h3>

                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">プランの変更について</a>
                    <ul>
                        <li><a href="#link-a01">試用期間中のプラン変更</a></li>
                        <li><a href="#link-a02">本契約後の上位プランへの変更</a></li>
                        <li><a href="#link-a03">本契約後の下位プランへの変更</a></li>
                    </ul>
                    </li>
                    <li><a href="#link-b">プランの変更申請</a>
                        <ol>
                            <li><a href="#link-b01">1.「プラン・サービス変更」をクリック</a></li>
                            <li><a href="#link-b02">2.「選択する」をクリック</a></li>
                            <li><a href="#link-b03">3.「変更後のプラン」を選択し、「確認画面へ進む」をクリック</a></li>
                            <li><a href="#link-b04">4.ご利用料金のお支払い</a></li>
                        </ol>
                    </li>
                </ul>
                </div>                
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">プランの変更について</h4>
                    <div class="section_body">
                        <p>ご利用中のサーバーについて、上位プランまたは下位プランへの変更に対応しています。</p>
                        
                        <section class="block">
                            <h3 class="block_ttl" id="link-a01">試用期間中のプラン変更</h3>
                            <div class="block_body">
                                <p>
                                    試用期間中は、いつでもプラン変更の申請が可能です。<br>
                                    プラン変更は申請後、即時適用されます。<br>
                                    試用期間はそのまま継続されます。
                                </p>
                            </div>
                        </section>
                        <section class="block">
                            <h3 class="block_ttl" id="link-a02">本契約後の上位プランへの変更</h3>
                            <div class="block_body">
                                <p>
                                    上位プランへの変更は、いつでも申請が可能です。<br>
                                    プラン変更は申請後、即時適用されます。<br>
                                    手続きの際に、申請翌日から利用期限日までの差額料金をお支払いください。
                                </p>
                                <p class="note">
                                    ※利用期限日当日にプラン変更をされる場合、差額料金の支払いは発生しません。
                                </p>
                                <aside class="msg msg_notice mt30">
                                    <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご確認ください</h4>
                                    <div class="msg_body">
                                        <p>
                                            銀行振り込みなど即時決済以外の支払い方法で手続きをされた場合、14日以内に料金のお支払いが必要です。<br>
                                            支払い期限までにお支払いの確認ができなかった場合、自動的に元のプランに戻ります。
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </section>
                        <section class="block mb40">
                            <h3 class="block_ttl" id="link-a03">本契約後の下位プランへの変更</h3>
                            <div class="block_body">
                                <p>
                                    下位プランへの変更は、サーバーの利用期限月に申請が可能です。<br>
                                    利用期限月の1日〜20日の期間にプラン変更の申請を行ってください。<br>
                                    翌月1日から下位プランへの変更が適用されます。
                                </p>
                                <p>
                                    また、プラン変更の申請時に契約更新が行われます。<br>
                                    契約期間に応じたサーバーの更新料金をお支払いください。
                                </p>
                            </div>
                        </section>
                        <aside class="msg msg_notice">
                            <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>XServerビジネスへのサービス変更について</h4>
                            <div class="msg_body">
                                <p>XServerビジネスへのサービス変更をご希望の場合は、マニュアル「<a href="<?php print $SITE_URL; ?>manual/man_order_servicetransfer_intro.php">XServerビジネスへの変更</a>」をご参照ください。</p>
                            </div>
                        </aside>
                    </div>
                </section>
                <!-- /.section -->
                
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">プランの変更申請</h4>
                    <div class="section_body">
                        
                        <div class="serial-box">
                            
                            <section class="box">
                                <h6 class="box_ttl" id="link-b01">1.「プラン・サービス変更」をクリック</h6>
                                <div class="box_body">
                                    <p><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>へログインし、サービスメニューの「プラン・サービス変更」をクリックしてください。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_plan_1.png?date=20250314" alt="プランの変更画面へ"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b02">2.「選択する」をクリック</h6>
                                <div class="box_body">
                                    <p>プランを変更したいサーバーを選択します。</p>
                                    <p><img class="img" src="../img/manual/man_order_change_plan_2.png?date=20250314" alt="選択するをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b03">3.「変更後のプラン」を選択し、「確認画面へ進む」をクリック</h6>
                                <div class="box_body">
                                    <p>
                                        「変更後のプラン」を選択の上、「確認画面へ進む」をクリックします。
                                    </p>
                                    <p class="note">
                                        ※本契約後の下位プラン変更の場合は、ご希望の契約期間をお選びください。                                 
                                    </p>
                                    <p><img class="img" src="../img/manual/man_order_change_plan_3.png?date=20250314" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>

                            <section class="box">
                                <h6 class="box_ttl" id="link-b04">4.ご利用料金のお支払い</h6>
                                <div class="box_body">
                                    <p>
                                        変更内容をご確認のうえ、料金のお支払い手続きを進めてください。
                                    </p>
                                    <p class="note">
                                        ※試用期間中の変更の場合は、ご利用料金のお支払いはありません。
                                    </p>
                                    <p><img class="img" src="../img/manual/man_order_change_plan_4.png?date=20250314" alt="確認画面へ進むをクリックしているスクリーンショット"></p>
                                </div>
                            </section>
							
                            
                        </div>
                        <!-- /.serial-box -->
                        
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