<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>サーバー移転の際に、事前に独自SSLを設定しておくことは可能ですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="はい、可能です。無料独自SSL、オプション独自SSL、それぞれの設定方法は以下をご確認ください…">

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
            
                <h3 class="sub-ttl">サーバー移転の際に、事前に独自SSLを設定しておくことは可能ですか？</h3>

                <p>はい、可能です。<br>
                    無料独自SSL、オプション独自SSL、それぞれの設定方法は以下をご確認ください。</p>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>無料独自SSLの場合</dt>
                    <dd>
                        <p>
                            サーバーパネルの「SSL設定」から設定が可能です。<br>
                            事前に設定をする場合は、移転元にて「Web認証」または「DNS認証」が必要です。
                        </p>
                        <p class="mb0">詳細は「<a href="../../manual/man_server_ssl.php">無料独自SSL設定</a>」マニュアル内の「他社サーバーですでに運用中のサイトに対して無料独自SSLを事前に設定する」をご確認ください。</p>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>オプション独自SSLの場合</dt>
                    <dd>
                        <p>
                            XServerアカウントのSSL証明書メニュー「追加申し込み」よりお申し込みください。<br>
                            事前に設定する場合は、「DNS認証」は利用できません。<br>
                            「メール認証」にて認証作業を行っていただく必要があります。
                        </p>
                        <p class="mb0">詳細は「<a href="../../manual/man_order_ssl.php">オプション独自SSLのお申し込み</a>」のマニュアルをご確認ください。</p>
                    </dd>
                </dl>
               
                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_transfer_server.php" class="btn btn_gray">「サーバー移転」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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