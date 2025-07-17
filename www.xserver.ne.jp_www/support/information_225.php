<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>ご登録メールアドレス再確認のお願い | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="エックスサーバーではXServerアカウントにご登録いただいたメールアドレスへのみ、各種ご案内を送付しております。ご登録メールアドレスが現在もご利用可能なメールアドレスかどうか、ご確認くださいますようお願いいたします。">

</head>

<body id="pid-support">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-support"><i class="ico ico_operator"></i>サポート</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <article class="section">
            <h3 class="section_ttl">ご登録メールアドレス再確認のお願い</h3>
            <div class="section_body">
                <p>
平素は当サービスをご利用いただき、誠にありがとうございます。<br>
<br>
弊社へご登録いただいたメールアドレスは、<br>
サーバー・ドメインの更新案内やログインID・パスワードの再発行など、<br>
重要なご案内の送信先となります。<br>
<br>
ご登録メールアドレスが正確な情報でない場合、<br>
当サービスからのご連絡を行うことができません。<br>
<br>
　※更新のご案内やログイン情報は、ご登録メールアドレス以外への<br>
　　送信は承っておりません。<br>
<br>
<br>
大変お手数ですが、<br>
XServerアカウントメニューの「登録情報」から<br>
お客様の現在ご利用可能なメールアドレスが登録されているか<br>
ご確認いただきますようお願いいたします。<br>
<br>
現在ご利用いただけないメールアドレスが登録されている、<br>
あるいは、ご登録メールアドレスの変更をご希望の場合は<br>
XServerアカウント「登録情報」より、<br>
お客様にてご利用いただける【ご登録メールアドレス】の変更を<br>
お願いいたします。<br>
<br>
<br>
その他何かご不明な点等ございましたら、お気軽にお問い合わせください。<br>
<br>
どうぞ今後とも当サービスを宜しくお願い申し上げます。
                </p>
            </div>
            <footer class="section_footer">
                <p class="tac"><a class="btn btn_blue" href="#" onclick="javascript:window.history.back(-1);return false;">戻る<i class="ico ico_refresh"></i></a></p>
            </footer>
        </article>
        <!-- /.section -->
        
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