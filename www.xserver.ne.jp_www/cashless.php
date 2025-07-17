<?php include("conf.php"); ?>
<?php include("header.php"); ?>

<link href="<?php print_fileURL("css/contents/info.css"); ?>" rel="stylesheet">

<title>【終了いたしました】キャッシュレス・ポイント還元事業 | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="対象のクレジットカードによるお支払いに対して、お支払い金額の5％が還元される「キャッシュレス・ポイント還元事業」についてご案内しています。">

</head>

<body id="pid-info" class="cashless-info">

<?php include("top.php"); ?>

<div id="wrapper">

<?php include("header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
        
        <?php include("topicpath.php"); ?>
            <p class="campaignCopy mb5">＼お申し込みは今がお得！キャッシュレスで5％還元！／</p>
            <h2 class="campaign_visual cashless_visual">
                <img src="img/common/cashless_top_img.png?date=200630" alt="キャッシュレス・ポイント還元事業">
            </h2>
            <p class="cashlessCopy">当社は「キャッシュレス・消費者還元事業」の対象事業者です。</p>


            <h3 class="section_ttl mt50">キャッシュレス・ポイント還元事業について</h3>
            <div class="section_body">
                <section class="block">
                    <div class="media_image media_image_rev"><img src="img/common/img_cashless_point.png" alt=""></div>
                    <div class="media_body">
                        <div class="trust_description">
                            <p class="font-l cashlessDesc">「キャッシュレス・ポイント還元事業」は経済産業省が行っている事業で、還元事業の対象サービスで、<span class="font-bold bright-yellow">クレジットカードなどのキャッシュレス決済を行うとお支払い金額に対して一定額のポイント還元等が受けられる制度</span>のことです。</p>
                        </div>
                    </div>
                    <table class="campaign_table mb10">
                        <tr>
                            <th>対応期間</th>
                            <td>
                                <div class="campaign_table_inner">
                                    <s>
                                    <p class="font-l font-bold mb0">2019年12月1日(日)〜2020年6月30日(火)</p>
                                    <p>※ポイント還元事業自体の終了によって、期日前に対応を終了する場合があります。</p>
                                    </s>
                                    <p class="font-bold" style="color:red;">キャッシュレス・ポイント還元事業は、終了いたしました。</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>対象の決済方法</th>
                            <td>
                                <div class="campaign_table_inner">
                                    <p class="font-l font-bold mb0">クレジットカード決済</p>
                                    <p>※自動引き落とし等のクレジットカード決済も対象です。</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>対象クレジットカード</th>
                            <td>
                                <div class="campaign_table_inner">
                                    <p class="font-l font-bold mb0">VISA、MasterCard&nbsp;…&nbsp;12/1（日）から還元対象</p>
                                    <p class="font-l font-bold">JCB、American Express&nbsp;…&nbsp;12/11（水）から還元対象</p>             
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>還元率について</th>
                            <td>
                                <div class="campaign_table_inner">
                                    <p class="font-l font-bold bright-yellow">お支払い料金の「5％」です。</p>            
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>還元方法について</th>
                            <td>
                                <div class="campaign_table_inner">
                                    <p>ご利用のクレジットカード会社によって異なります。詳しくは各カード発行会社へご確認ください。</p>          
                                </div>
                            </td>
                        </tr>
                    </table>
                    <aside class="msg msg_notice">
                        <h4 class="msg_ttl"><i class="ico ico_circle-arrow-right"></i>ご契約の更新忘れを防止する「カード自動更新設定」について</h4>
                        <div class="msg_body">
                            <p>事前に登録したクレジットカードでご契約を自動的に更新する「 <a href="<?php print $SITE_URL; ?>manual/man_order_pay_method_autopay.php">カード自動更新設定</a>」もポイント還元の対象となります。</p>
                        </div>
                    </aside>

            </section>
        </div>
    </section>
    <!-- /.main -->
    
    <div class="sub">
<?php include("sub_contents.php"); ?>
    </div>
    <!-- /.sub -->
    
</div>
<!-- /.contents -->

<?php include("footer.php"); ?>

</div>
<!-- /#toggle-target -->

</div>
<!-- /#wrapper -->

<?php include("bottom.php"); ?>