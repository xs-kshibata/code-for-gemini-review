<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>パーミッション設定はどうすればいいですか？ - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="不特定多数の人に公開する目的で設置するファイルなどに関しては特に下記のパーミッションで設定する必要はありませんが、CGIやCGIのデータファイルに関しては適切なパーミッションを設定する必要があります。適切なパーミッション…">

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
            
                <h3 class="sub-ttl">パーミッション設定はどうすればいいですか？</h3>

                <p>不特定多数の人に公開する目的で設置するファイルなどに関しては特に下記のパーミッションで設定する必要はありませんが、CGIやCGIのデータファイルに関しては適切なパーミッションを設定する必要があります。</p>
                <table class="table" summary="適切なパーミッション設定">
                    <caption>適切なパーミッション設定</caption>
                    <tbody>
                        <tr>
                            <th scope="row" class="w50per">ディレクトリ</th>
                            <td>755, 705のいずれか</td>
                        </tr>
                        <tr>
                            <th scope="row">.cgi .pl などの CGI 実行ファイル</th>
                            <td>755, 705のいずれか</td>
                        </tr>
                        <tr>
                            <th scope="row">.cgi .pl などの直接実行されないライブラリファイル</th>
                            <td>600</td>
                        </tr>
                        <tr>
                            <th scope="row">.txt .dat .log などのファイル</th>
                            <td>600</td>
                        </tr>
                    </tbody>
                </table>

                

                
                <?php include("vote.php"); ?>

                <div class="faqList__btnBox">
                    <a href="./faq_service_cgi.php" class="btn btn_gray">「CGI」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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