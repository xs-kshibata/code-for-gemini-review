#!/usr/bin/php5.5
<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<?php if ($_REQUEST['target'] == 'x_man') { ?>
<link href="../css/contents/manual.css?date=20161227" rel="stylesheet">
<?php } else { ?>
<link href="../css/contents/support.css?date=20161227" rel="stylesheet">
<?php } ?>


<title>検索結果 | レンタルサーバー【エックスサーバー】</title>
<meta name="description" content="レンタルサーバーの【エックスサーバー】は、高速かつ高機能、稼働率99.99％以上の高い安定性で、業界トップクラスの高コストパフォーマンスを誇る、月額990円からの高品質レンタルサーバーです。">

</head>

<?php if ($_REQUEST['multi_target']) { ?>
<body id="pid-support">
<?php } elseif ($_REQUEST['target'] == 'x_man') { ?>
<body id="pid-manual">
<?php } else { ?>
<body id="pid-faq">
<?php } ?>

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
        <header class="main-header">
			<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
			<?php include("../support/subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
            <div class="topic-path clearfix"><i class="ico ico_circle"></i><ol><li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" href="<?php print $SITE_URL; ?>"><span itemprop="title">ホーム</span></a><i class="ico ico_chevron-right"></i></li><li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a itemprop="url" href="<?php print $SITE_URL; ?>support/"><span itemprop="title">サポート</span></a><i class="ico ico_chevron-right"></i></li><li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><span class="is-current" itemprop="title">検索結果</span></li></ol></div>
        
        <div class="clearfix">
        
<script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
<div class="gcse-searchresults-only"></div>

</div>
<!-- /.clearfix -->

<div class="support-searchSec">
                                <div class="search search--top">
                                    <h2 class="search_ttl">キーワードから探す</h2>
                                    <div class="search-box-container">
                                        <div class="search-box">
                                            <script>
                                                window.onload = function(){
                                                    document.getElementById('gsc-i-id2').placeholder = '管理画面 ログイン';
                                                };
                                            </script>
                                            <script async src="https://cse.google.com/cse.js?cx=23c1bf11cfc6e40e8"></script>
                                            <div class="gcse-searchbox-only"></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="support-btn_dbl">
                                    <li class="support-btn"><a href="../manual/" class="btn btn_blue btn_blue-secondary">マニュアル一覧から探す<i class="ico ico_chevron-right"></i></a></li>
                                    <li class="support-btn"><a href="../support/faq/" class="btn btn_blue btn_blue-secondary">よくある質問一覧から探す<i class="ico ico_chevron-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- /support-searchSec -->

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
