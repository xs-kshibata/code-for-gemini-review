<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/support.css"); ?>" rel="stylesheet">

<title>SMS認証・電話認証がうまくいかず、申し込みができません。 - よくある質問 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="SMS認証の認証コードが届かない。ご利用端末の設定や契約によっては、SMSで認証コードが届かない場合があります。認証コードが届かない場合は、電話認証（音声認証）をお試しください。電話認証（音声認証）の電話がかかってこない。着信がくるまでに数分程度…">

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
            
                <h3 class="sub-ttl">SMS認証・電話認証がうまくいかず、申し込みができません。</h3>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SMS認証の認証コードが届かない</dt>
                    <dd>ご利用端末の設定や契約によっては、SMSで認証コードが届かない場合があります。<br>
                        認証コードが届かない場合は、電話認証（音声認証）をお試しください。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>電話認証（音声認証）の電話がかかってこない</dt>
                    <dd>着信がくるまでに数分程度かかる場合があります。<br>
                        携帯電話・固定電話のいずれでも認証が可能です。<br>
                        認証がうまくいかない場合は、SMS認証をお試しください。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>「正しい電話番号をご入力ください。」と表示された</dt>
                    <dd>認証に使用する電話番号は先頭が「0」で始まり、10桁または11桁である必要があります。<br>
                        条件に合致する電話番号で認証をお試しください。<br>
                        XServerアカウントの登録時に入力した電話番号とは異なる番号でも認証が可能です。</dd>
                </dl>

                <dl class="border border_gray">
                    <dt class="mb10"><i class="ico ico_square-fill"></i>SMS認証・電話認証のいずれもうまくいかない</dt>
                    <dd>認証の手続きを省略できるようサポートにて調整をいたします。<br>
                        【<b>XServerアカウントへ登録希望の電話番号</b>】をご記載のうえ、「<a href="https://www.xserver.ne.jp/support/support.php">サポート</a>」のメールのお問い合わせフォーム「新規の方・ログイン情報が不明の方」よりお問い合わせください。</dd>
                </dl>


                <?php include("vote.php"); ?>
                
                <div class="faqList__btnBox">
                    <a href="./faq_contract_new_trouble.php" class="btn btn_gray">「契約・料金のトラブル」のよくある質問一覧に戻る<i class="ico ico_refresh ml5"></i></a>
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