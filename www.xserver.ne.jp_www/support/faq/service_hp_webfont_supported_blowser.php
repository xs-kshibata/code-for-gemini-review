<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>対応するWebブラウザを教えてください。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="TypeSquareを使ったWebフォントの表示をサポートしているWebブラウザは以下の通りです。　Windows/Mac環境…・Internet Explorer 11以降　・Safari 5.0以降　・Firefox 5.0以降　・Chrome 10.0以降　・Microsoft Edge　スマート…">

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
            
                <h3 class="sub-ttl">対応するWebブラウザを教えてください。</h3>

                <p>TypeSquareを使ったWebフォントの表示をサポートしているWebブラウザは以下の通りです。</p>
                            
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>Windows/Mac環境</dt>
                    <dd>
                        <ul class="ul mb0">
                            <li>Internet Explorer 11以降</li>
                            <li>Safari 5.0以降</li>
                            <li>Firefox 5.0以降</li>
                            <li>Chrome 10.0以降</li>
                            <li>Microsoft Edge</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="border border_gray">
                    <dt><i class="ico ico_square-fill"></i>スマートデバイス環境</dt>
                    <dd>
                        <ul class="ul mb0">
                            <li>iOS 9以降</li>
                            <li>Android 4.4以降のChrome</li>
                        </ul>
                    </dd>
                </dl>
                 
                 <p class="note mb5">※AndroidのChromeの対応は、最新版を含め、過去3メジャーバージョンまでサポートいたします。</p>
                 <p class="note mb5">※同じブラウザでも、OSやプラットフォーム、閲覧環境の違いにより書体の見え方に違いが生じることがあります。</p>
                 <p class="note mb5">※JavaScript等のスクリプト言語で直接に文字コードを指定した書き込み処理を行った場合、ブラウザの種別やバージョンにより正しく表示できない場合があります。</p>
                 <p class="note mb5">※上記ブラウザは、日本語環境でのみ確認した内容です。日本語環境以外の場合は正しく表示できない場合があります。</p>
                 <p class="note mb0">※ブラウザの対応状況は、現在の正確な状況とは異なる可能性がありますので、詳細は提供元のサイトをご確認ください。</p>

                 <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_hp_webfont.php" class="btn btn_gray">「Webフォント」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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