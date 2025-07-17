<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>バックアップ体制はどうなっていますか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="設備の故障や、その他トラブル等への備えとして、全サーバーで下記のようなバックアップ体制を取っており、ハードディスク障害等によるデータ損失の可能性を低めています。　1. 2台のハードディスクに同じデータを同時に書き込むRAID1による…">

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
            
                <h3 class="sub-ttl">バックアップ体制はどうなっていますか？</h3>
                
                <p>設備の故障や、その他トラブル等への備えとして、全サーバーで下記のようなバックアップ体制を取っており、ハードディスク障害等によるデータ損失の可能性を低めています。</p>
                <ol class="ol">
                    <li>2台のハードディスクに同じデータを同時に書き込むRAID1によるリアルタイムでの全データコピー(ミラーリング)</li>
                    <li>1日1回、深夜から、MySQLデータベース、サーバー領域のWeb・メールデータをバックアップ専用サーバーへと自動バックアップし、サーバー領域のWeb・メールデータ「過去14日分」、MySQLデータベース「過去14日分」のデータを保持</li>
                </ol>
                <p>また、(2)にてバックアップを行ったデータは、お客様への提供も行っています。</p>
                <aside class="msg msg_notice">
                    <h6 class="msg_ttl font-m">
                        <i class="ico ico_circle-arrow-right"></i>
                        sv12301.xserver.jp 以前のサーバーおよび sv1~sv20.xtwo.ne.jp をご利用のお客様について
                    </h6>
                    <div class="msg_body pl30">
                        <p>
                            sv12301.xserver.jp 以前のサーバーおよび sv1~sv20.xtwo.ne.jp についてはWeb・メールの取得可能なデータは「過去7日間」となります。<br>
                            順次バックアップ期間を14日に拡大する予定をしており、提供の準備ができ次第ご案内いたします。
                        </p>
                    </div>
                </aside>
                <p>詳細は<a href="../../functions/service_backup.php">こちら</a>をご確認ください。</p>
                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_server.php" class="btn btn_gray">「サーバー仕様」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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