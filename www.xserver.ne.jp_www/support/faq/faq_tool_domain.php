<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ドメインパネル - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のよくある質問｜ドメインパネルのご利用に関するよくある質問です。">

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
            
                <h3 class="sub-ttl">ドメインパネル</h3>

                <div class="faq">
                    <dl id="01" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>ドメインパネルが見つかりません。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>XServerアカウントのトップページにある「ご契約一覧 &gt; ドメイン」をご確認ください。<br>
                            該当ドメインの右側に<a href="../../manual/man_tool_domain.php">ドメインパネル</a>へのリンクがあります。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="02" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>.co.jpドメインなど、属性型JPドメインのWhois情報の変更が出来ません。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>属性型JP（.co.jp / .or.jp / .ne.jp / .gr.jp / .ac.jp / .ed.jp）ドメインの場合、ドメインパネルからの変更ができません。</p>
                            <p class="note">※Whois情報変更手数料が必要になる場合があります。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                    <dl id="03" class="faq_unit">
                    	<dt class="faq_unit_ttl"><i class="ico ico_square-q label label_support label_support_q"></i>「上位レジストラ変更期間中のため〜」と表示され、各種操作が行えません。</dt>
                        <dd class="faq_unit_body"><i class="ico ico_square-a label label_support label_support_a"></i>
                            <p>上位レジストラ変更期間中はWhois情報の変更やネームサーバーの変更など、ドメイン名に対する各種操作が行えません。</p>
                            <p>大変ご迷惑をおかけいたしますが、上位レジストラ変更作業の完了後に各種操作をお願いいたします。</p>
                            <p class="note">※上位レジストラ変更作業には最大10日程度お時間がかかります。</p>
                            <p>詳細につきましては「<a target="_blank" href="../../news_detail.php?view_id=2040">『.com』『.net』『.org』『.info』『.biz』ドメインにおける上位レジストラ変更のお知らせ</a>」をご参照ください。</p>
                        </dd>
                    </dl>
                    <!-- /.faq_unit -->
                    
                </div>
                <!-- /.faq -->

                
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