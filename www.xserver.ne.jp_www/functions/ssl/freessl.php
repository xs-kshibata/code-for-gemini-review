<?php include("../../conf.php"); ?>
<?php include("../../header.php"); ?>

<link href="<?php print_fileURL("css/contents/functions.css"); ?>" rel="stylesheet">

<title>無料独自SSL - 独自SSL | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="無料独自SSLの仕様詳細とご利用料金に関するご案内です。">

</head>

<body id="pid-functions">

<?php include("../../top.php"); ?>

<div id="wrapper">

<?php include("../../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-functions"><i class="ico ico_mouse"></i>機能</span></h2>
<?php include("../subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../../topicpath.php"); ?>
        
        <div class="ssl-brand">
            <div class="ssl-brand-header clearfix">
                <div class="ssl-brand-header_r">
                    <img src="../../img/functions/img_logo_letsencrypt.png" alt="Let's Encrypt">
                </div>
                <div class="ssl-brand-header_l">
                    <h3 class="ssl-brand-header_ttl">無料独自SSL</h3>
                    <div class="ssl-brand-header_auth">
                        <div class="ssl-brand-header_auth_ttl">認証タイプ</div>
                        <div class="ssl-brand-header_auth_body"><img src="../../img/functions/img_auth_level_1.png" alt="1">ドメイン認証</div>
                    </div>
                    <p>無料・無制限(※)で利用できる独自SSLです。<br>
                        面倒な手続きもなく、Web上で誰でも簡単に利用していただけます。</p>
                    <p>※取得したSSLサーバー証明書は当社の対応サービスでのみ設定可能です。また、当社の対応サービス以外で取得した証明書はご利用いただけません。</p>
                </div>
            </div>
            
        </div>

        <section class="section">
            <a id="spec" name="spec"></a>
            <h3 class="section_ttl">仕様一覧</h3>
            <div class="section_body">

                <table class="table">
                    <tr>
                        <th class="w30per">対応サービス</th>
                        <td>エックスサーバー、XServerビジネス、XServerショップ</td>
                    </tr>
                    <tr>
                        <th>対応サーバープラン</th>
                        <td>全プラン対応</td>
                    </tr>
                    <tr>
                        <th>ブランド名</th>
                        <td>Let's Encrypt</td>
                    </tr>
                    <tr>
                        <th>所有者確認方法</th>
                        <td>自動認証(DNS認証、Web認証)</td>
                    </tr>
                    <tr>
                        <th>認証タイプ</th>
                        <td>ドメイン認証型</td>
                    </tr>
                    <tr>
                        <th>企業実在証明</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>発行に要する日数</th>
                        <td>即時〜1日</td>
                    </tr>
                    <tr>
                        <th>有効期間</th>
                        <td>90日 ※自動更新</td>
                    </tr>
                    <tr>
                        <th>セキュリティ診断</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>サイトシール</th>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th>「www.」あり/なし 2Way利用</th>
                        <td colspan="5">
                        <i class="imgico imgico_2way mb10"></i>
                        <b>「www.」あり/なし、どちらのURLでもSSL接続が可能です。</b><br>
                        <span class="font-normal">お申し込みの際の詳しい手順は、下記をご参照ください。</span>
                        <p class="mt5"><a class="btn btn_white btn_white_border" href="#2way">2way利用について<i class="ico ico_chevron-right"></i></a></p>
                        </td>
                    </tr>
                    <tr>
                        <th>対応ブラウザ・スマートフォン</th>
                        <td>
                        Internet Explorer（Windows）<br>
                        Microsoft Edge（Windows10）<br>
                        Google Chrome（Windows、Mac OS X、Linux、Android、iOS）<br>
                        Mozilla Firefox（Windows、Mac OS X、Linux、Android、iOS）<br>
                        Apple Safari（Mac OS X、iOS）<br>
                        </td>
                    </tr>
                </table>
                <!-- /.ssl-table -->
                
                <p class="note mb0">※取得したSSLサーバー証明書は当社の対応サービスでのみ設定可能です。また、当社の対応サービス以外で取得した証明書はご利用いただけません。</p>
                <p class="note mb30">※ブラウザ・OSの対応状況は、現在の正確な状況とは異なる可能性がありますので、詳細は提供元のサイトをご確認ください。</p>
                
            </div>
        </section>
        <!-- /.section -->
        
        <section class="section">
            <h4 id="2way" class="section_ttl">「2Way利用」について</h4>
            <div class="section_body">
                <p>無料独自SSLはSubject Alternative Names(SANs)によるコモンネーム(CN)の別名機能を利用した、「wwwあり/なし」いずれのURLでもSSL通信が可能な「2Way利用」に対応しています。</p>
            </div>
        </section>
        <!-- /.section -->
        
        <section class="caution">
            <h3 class="caution_ttl"><i class="ico ico_exclamation-fill"></i>お申し込み前に必ずお読みください。</h3>
            <div class="caution_body">
                <section class="caution_item">
                    <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>ご利用の範囲</h4>
                    <div class="caution_item_body">
                        <p>
                            本サービスは、利用者が当サーバーで運用している独自ドメインや、サブドメインを利用したSSL接続を提供するものです。<br>
                            当サーバー以外の外部サーバーではご利用いただくことができません。
                        </p>
                        <ul class="note-list font-s">
                            <li>※本サービス以外で取得されたSSLサーバー証明書は、当サーバーにてご利用いただくこと(いわゆる、SSLサーバー証明書の持ち込み対応)はできません</li>
                            <li>※64文字以上のコモンネームはお申し込みできません。</li>
                        </ul>
                    </div>
                </section>
                <!-- /.caution_item -->

                <section class="caution_item">
                    <h4 class="caution_item_ttl"><i class="ico ico_circle"></i>有効期限について</h4>
                    <div class="caution_item_body">
                        <p>当該SSL証明書が発行された日より、90日間が経過するまでが有効期限となります。<br>
                        なお、証明書は有効期限から30日前に自動更新をします。</p>
                    </div>
                </section>
                <!-- /.caution_item -->
            </div>
        </section>
        
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