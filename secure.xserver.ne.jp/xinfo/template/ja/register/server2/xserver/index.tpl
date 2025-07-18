<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
{literal}
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            actionName: '{/literal}{$app.pageAction}{literal}'
        });
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PHLFQRP');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-22"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-3789601-2', {
        'linker': {
        'accept_incoming': true,
        'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'ssl.xdomain.ne.jp']
        },
        page_title: 'お申し込みフォーム お申し込み内容選択',
        page_path: '/xinfo/register/server/xserver/account_input.php'
      });

      gtag('config', 'UA-3789601-22', {
          'linker': {
              'accept_incoming': true,
              'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
          },
          page_title: 'お申し込みフォーム お申し込み内容選択',
          page_path: '/xinfo/register/server/xserver/account_input.php'
      });
    </script>
{/literal}
    <meta charset="euc-jp">
    <meta name="copyright" content="Copyright {$smarty.const.G_COMPANY_NAME_EN}">
    <meta name="keywords" content="レンタルサーバー,高速,高機能,高安定性">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <link rel="index" href="{$smarty.const.G_WWW_URL}sitemap.php" title="サイトマップ" />
    <link rel="shortcut icon" href="xserver/img/favicon.ico?date=210604">
    <link rel="apple-touch-icon" href="xserver/img/apple-touch-icon-precomposed.png?date=210415">

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="xserver/js/tooltip.js?date=241204"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>

    <link href="xserver/css/style.css?date=250626" rel="stylesheet" type="text/css">

    <title>{$smarty.const.G_ACCOUNT_NAME}登録内容の入力画面｜エックスサーバー</title>
    <meta name="description" content="" />

    {literal}
    <script type="text/javascript" src="https://www.xserver.ne.jp/js/errorlogger.js"></script>
    <script type="text/javascript" src="xserver/js/common.js?date=231005"></script>
    {/literal}
    <script>
        {literal}
        $(function(){

            $("#quick_start").on("click", function() {
                let quick_flg = $("#quick_start").is(':checked');
                if (quick_flg === true ) {
                    document.getElementById('light1').style.display='block';
                }
            });

            $('#modalCloseButton').on('click', function(){
                document.getElementById('light1').style.display='none';
            });
        });
        {/literal}
    </script>
    {literal}
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '423554692430195');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=423554692430195&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    {/literal}
</head>

<body id="id-register-xaccount">
{literal}
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHLFQRP"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
{/literal}
<div id="light1">
    <div class="quickStart_wrapper">
        <div class="quickStart">
            <h2 class="quickStart__ttl">お申込み前にご確認ください</h2>
            <div class="quickStart__body">
                <p>WordPress設定やドメイン取得などをまとめて行う「WordPressクイックスタート」が選択されています。<br>
                    お申込み前に下記についてご確認お願いいたします。</p>
                <ul class="quickStart__attention">
                    <li>クイックスタートには{$specs.services.xserver.trial_days}日間無料のお試し期間がありません</li>
                    <li>お申込みと同時にサーバー料金のお支払いが発生します</li>
                    <li>今回お支払いにご利用されるクレジットカード、Paidyアカウントは自動更新用として登録され、今後はご契約が自動的に更新されます</li>
                </ul>

                <p class="modalCloseButton__box"><a id="modalCloseButton">確認しました</a></p>
            </div>
        </div>
    </div>
</div>

{if $app.can_applied_referral || $app.can_applied_referral_xwrite}
    <div class="friendApply">
        <h3 class="friendApply__mainTtl">お客様は「お友達紹介プログラム」が適用されています。</h3>
        <p><b>お支払い時に</b>ご利用料金に応じた割引をいたします。</p>
    </div>
{/if}
{if $app.can_applied_cp250501}
    <div class="friendApply">
        <h3 class="friendApply__mainTtl">お客様は「eo光ユーザー特別優待割引」が適用されています。</h3>
        <p><b>お支払い時に</b>ご利用料金に応じた割引をいたします。</p>
    </div>
{/if}

{* IP制限がかかってる場合、エラーメッセージを表示 *}
{if isset($app.limit_error_message)}
    <header class="header">
        <p class="siteName"><img class="siteName__logo" src="xserver/img/img_logo.png?date=210415" alt="エックスサーバー">お申し込みフォーム</p>
    </header>
    <!-- /.header -->

    <div class="holder--m input">
        <p>
            {$app.limit_error_message|nl2br}
            <a href="{$smarty.const.G_WWW_SUPPORT_URL}support/support.php">{$smarty.const.G_WWW_SUPPORT_URL}support/support.php</a>
        </p>
    </div>

{else}

    <header class="header">
        <p class="siteName"><img class="siteName__logo" src="./xserver/img/img_logo.png?date=210415" alt="エックスサーバー">お申し込みフォーム</p>
    </header>
    <!-- /.header -->

    <main class="main" role="main">

    <aside class="campaignBnr">
        <div class="campaignBnr__forPC">
            <p class="fukidashi">＼ <span>9/4(木)17時まで！</span>／</p>
            <img src="./xserver/img/campaign_banner_772-130.png?date=250703" alt="半額キャッシュバックキャンペーン！圧倒的ハイスペックサーバーが実質月額495円から使える！">
        </div>
        <p class="campaignBnr__forMobile">
            半額キャッシュバック！実質月額495円〜<br>9/4(木)まで！
        </p>
    </aside>
    <!-- /.campaignBnr -->
        
        <div class="flow flow--1">
            <div class="flow__inner cf">
                <h1 class="flow__item isCurrent">申し込み内容選択</h1>
                <p class="flow__item">{$smarty.const.G_ACCOUNT_NAME}情報入力</p>
                <p class="flow__item">確認</p>
                <p class="flow__item">完了</p>
                <p class="flow__next">NEXT:<br>{$smarty.const.G_ACCOUNT_NAME}登録</p>
            </div>
        </div>
        <!-- /.flow -->

        <div class="intro">
            <p>お申し込み内容を入力してください。</p>
        </div>
        <!-- /.intro -->

        <input type="hidden" id="form_defs" value="{$app.form_defs}" />
        <input type="hidden" id="is_return" value="{if isset($errors) && count($errors) > 0}1{else}0{/if}" />
        <div style="text-align: center;">{include file="inc/error_list.tpl"}</div>
        <form name="register_fm" method="POST" class="form">
            <input type="hidden" value="true" name="action_register_server2_index2" />
            <input type="hidden" value="{$smarty.post.current_action}" name="before_action" />
            <input type="hidden" value="action_register_server2_index" name="current_action" />
            <input type="hidden" value="" name="wp_password" />

            {if $app.view_c181001_banner}
                <div id="form_campaign-banner">
                    <img class="campaign-medal" src="img/common/campaign-medal.png" alt="">
                    <div class="form_campaign-banner_header">
                        <h3>ドメインプレゼント<br class="visible-s">キャンペーン実施中！  <span class="campaign-date">2019/9/30(月)18:00まで</span></h3>
                    </div>
                    <div class="form_campaign-banner_info">
                        <p style="padding-bottom:0;">【Yahoo!ジオシティーズをご利用のお客様向け】</p>
                        <p style="padding-top:0;">今なら、サーバー新規お申し込みで、ドメインを1つ進呈！更新費もずっと無料！</p>
                    </div>
                </div>
            {/if}

            {* TODO:運用 *}
            <input type="hidden" name="service" value="{$app.service.type}" />
            {if $form.input_helper}
                入力補助：<br>
                <textarea id="input_helper_text" style="width:100%;height:150px;background:#ededed"></textarea>
                <button type="button" id="input_helper_button">セット</button>
                <br><br>
            {/if}

            <h2 class="form__ttl">サーバー契約内容</h2>
            <div class="form__itemList">
                <div class="form__item form__required">
                    <div class="form__head">
                        <label for="username">サーバーID</label>
                        <div class="tooltip">
                            <i class="tooltip__target"></i>
                            <div class="tooltip__content">
                                <p>
                                    サーバーIDとは、サーバー契約を識別する固有のIDのことです。<br>
                                    主に下記の用途に利用します。
                                </p>
                                <ul class="serverIdInfo">
                                    <li>サーバー契約の識別情報として利用</li>
                                    <li>FTPサーバーへ接続する際に利用</li>
                                    <li>
                                        https://サーバーID.xsrv.jp※というURLでサイト公開に利用<br>
                                        <span>※このURLを使わずに公開も可能。</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="label label--hissu">必須</span>
                    </div>
                    <div id="form_server_id_box" class="form__body">
                        <div class="serverIdBox">
                            <div class="inputId">
                                <div id="server_id_id_name">
                                    <input type="text" name="username" value="{if $form.username}{$form.username}{else}{$app.autoset_username}{/if}">
                                    <span class="note">半角英数小文字、3〜12文字以内</span>
                                </div>
                            </div>
                            {include file="register/server/xserver/form_message_list.tpl" target="username"}
                        </div>
                    </div>
                </div>

                <div class="form__item form__required">
                    <div class="form__head">
                        プラン<span class="label label--hissu">必須</span>
                    </div>
                    <div class="form__body">
                        <ul class="form__order form__order--3cols cols_priceSpace">
                            {foreach from=$app.server_plan_list key=k item=f name=planselectxd}
                                {* スタンダード、プレミアム、ビジネス以外は選択できないようにする *}
                                {if $k == constant("ServerPlan::XSERVER_STANDARD") ||
                                    $k == constant("ServerPlan::XSERVER_PREMIUM") ||
                                    $k == constant("ServerPlan::XSERVER_BUSINESS")}
                                <li class="priceSpace">
                                    <input type="radio" name="id_server_plan" value="{$k}" id="plan{$k}" {if $form.id_server_plan == $k || !$form.id_server_plan && $f.name === 'スタンダード'}checked{/if} />
                                    <label for="plan{$k}" class="radio">
                                        <span class="priceSpace__planNameArea">
                                            <span class="priceSpace__planName">
                                                {if $f.name === 'スタンダード'}
                                                    スタンダード
                                                {elseif $f.name === 'プレミアム'}
                                                    プレミアム
                                                {elseif $f.name === 'ビジネス'}
                                                    ビジネス
                                                {else}
                                                    {$f.name}
                                                {/if}
                                            </span>
                                            {if $f.name === 'プレミアム'}<span class="radio_recommend_ico">おすすめ</span>{/if}
                                        </span>
                                        <span class="radio_priceSpace">
                                            <span class="priceSpace__block"><b>月額</b><br>
                                                <span class="priceSpace__blockRight"><em class="bold">{$f.per_month_36|number_format}</em>円〜</span></span>
                                            {if $f.cashback_per_month_36}
                                                <span class="priceSpace__block cashback_flg"><span class="priceSpace__blockRight colorRed">キャッシュバックで<br><b>実質</b><em class="bold">{$f.cashback_per_month_36|number_format}</em>円〜</span></span>
                                            {/if}
                                            <span class="priceSpace__block"><b>vCPU<br class="hidden-l">（リソース保証）</b><br>
                                                <span class="priceSpace__blockRight"><em>{$f.cpu_core}</em>コア</span></span>
                                            <span class="priceSpace__block"><b>メモリ<br class="hidden-l">（リソース保証）</b><br>
                                                <span class="priceSpace__blockRight"><em>{$f.memory_limit}</em>GB</span></span>
                                            <span class="priceSpace__block"><b>容量</b><br>
                                                <span class="priceSpace__blockRight"><em>{$f.quota}</em>GB</span></span>
                                        </span>
                                    </label>
                                </li>
                                {/if}
                            {/foreach}
                        </ul>
                        {include file="register/server/xserver/form_message_list.tpl" target="id_server_plan"}
                    </div>
                </div>

                <div class="form__item">
                    <div class="form__head">
                        <label for="quick_start">WordPressクイックスタート</label>
                        <div class="tooltip">
                            <i class="tooltip__target"></i>
                            <div class="tooltip__content">
                                <p>
                                    「ドメイン取得・設定」、「独自SSL設定」、「WordPress設定」をお申し込みと同時に行います。<br>
                                    初めてWordPressによるブログを開設される方におすすめです。
                                </p>
                            </div>
                        </div>
                        <span class="label label--ninni">任意</span><br>
                        <span class="font12">(WordPressの一括設定無料オプション)</span>
                    </div>
                    <div class="form__body">
                        <div class="quickStartPrTxtBox">
                            <b class="quickStartPrTxtBox__ttl">ドメインを取得してすぐにWordPressブログを始められる！</b><br>
                            <ul class="quickStartPrTxtBox__list">
                                <li>WordPress新規設置</li>
                                <li>独自SSL自動設定</li>
                                <li>ドメイン取得・設定</li>
                            </ul>
                        </div>
                        <div class="formPartsInfo">
                            <span class="formPartsInfo__ttl">本オプションに関するご注意：</span>
                            <div>
                                <ul class="ul">
                                    <li>お支払方法はクレジットカード払い・翌月後払いのみとなります。</li>
                                    <li>お申し込みと同時にサーバー料金のお支払いが発生します。</li>
                                    <li><b class="colorRed">{$specs.services.xserver.trial_days}日間無料のお試し期間はありません。</b></li>
                                    <li>サーバーの移転には対応していません。</li>
                                </ul>
                            </div>
                        </div>
                        <input type="checkbox" name="quick_start" value="1" id="quick_start" {if $form.quick_start}checked="checked" {/if}/>
                        <label for="quick_start" class="checkbox">利用する</label>
                        {include file="register/server/xserver/form_message_list.tpl" target="quick_start"}
                    </div>
                </div>

                <div class="form__item form__required quick_start_group" style="display: none">
                    <div class="form__head">
                        <label for="kikan">サーバーの契約期間</label><span class="label label--hissu">必須</span>
                    </div>
                    <div class="form__body">
                        <div class="selectWrap mb15">
                            <select name="register_month" id="register_month" class="select serverLimit">
                                {foreach from=$app.period_list key=k item=f}
                                    <option value="{$k}"{if $form.register_month == $k} selected{/if}>{$f}</option>
                                {/foreach}
                            </select>
                        </div>
                        <p class="price serverPrice">
                            ご利用料金
                            <span class="price__total friendPriceApply" data-is-display-referral-server="1" style="display: none;">
                                <s class="price__total serverPrice__txt">----円</s>
                                <b class="fPrice">----円</b><b class="fTxt">[お友達紹介プログラム適用]</b>
                            </span>
                            <span class="price__total serverPrice__txt" data-is-display-referral-server="0">----円</span>
                            <span class="price__pr PricePr" style="display: none"></span>
                        </p>
                        <span class="note">
                            契約はここで選択した期間で自動的に更新されます。<br>
                            期間の変更や自動更新の解除はいつでも行えます。
                        </span>
                        {include file="register/server/xserver/form_message_list.tpl" target="register_month"}
                    </div>
                </div>
            </div>
            <!-- /.form__itemList -->

            <div class="quick_start_group" style="display: none">
                <h2 class="form__ttl">ドメイン契約内容</h2>
                <div class="form__itemList">
                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="domainname">取得ドメイン名</label><span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <aside class="campaignBalloon cpInfo" id="campaign_domain_info" style="display: none">
                            </aside>
                            <div class="afterInfo" style="display: none">
                                <span class="afterInfo__ttl">ご確認：</span>無料特典の対象ではないドメインが選択されています。
                            </div>

                            <input type="text" id="domain_name" name="domain" value="{$form.domain}" placeholder="name" x-data-required="true" class="sizeShort domainInputTxt" />
                            <div class="selectWrap">
                                <select name="domain_type" id="domain_type" class="select domainList">
                                    {foreach from=$app.domain_type item=f}
                                        <option value="{$f}"{if $form.domain_type == $f} selected{/if}>{$f}</option>
                                    {/foreach}
                                </select>
                            </div>
                            <ul class="form__msgList" id="domain_message" style="display: none">
                            </ul>
                            {include file="register/server/xserver/form_message_list.tpl" target="domain"}
                            <span class="note">
                                関連サービス<img src="./xserver/img/xdomain_ico.png?date=241204" alt="XServerドメイン">で取り扱いのある独自ドメインを取得可能です。<br>
                                取得される独自ドメインは1年ごとに自動で契約更新されます。<br>
                                ご契約特典の無料ドメインを除き、自動更新はいつでも解除可能です。<br>
								お申し込み時は、「独自ドメイン1年無料特典」の特典を適用できません。
                            </span>

                            <span class="note">
                                ※ドメインは第三者の不正な移管を防止するため、レジストラロック・指定事業者ロックが有効な状態で取得されます。<br>
                                ドメインの取得後、他社へドメインを移管する際は、レジストラロック・指定事業者ロックの解除設定を行う必要があります。
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.form__itemList -->

                <h2 class="form__ttl">WordPress情報</h2>
                <div class="form__itemList">
                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wptitle">ブログ名</label><span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <input id="wp_blogname" type="text" name="wp_blogname" value="{$form.wp_blogname}" x-data-required="true" placeholder="My Blog" class="sizeLong" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_blogname"}
                            <span class="note">全角127文字（半角255文字）以内<br>
                            インストール後でも変更可能です</span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wpusername">ユーザー名</label><span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <input type="text" id="wp_username" name="wp_username" value="{$form.wp_username}" x-data-required="true" placeholder="username" class="sizeShort" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_username"}
                            <span class="note">
                                半角255文字以内<br>
                                英数、空白、一部記号（_-.@）が使えます
                            </span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wppassword">パスワード</label><span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <input jq-area-id="wordpressAdminPasswordInput" type="password" id="wppassword" class="sizeShort" name="wp_password_plain" x-data-required="true" value="">
                            <i class="ico ico--eyeClose togglePassword vam" data-toggle-target-id="wppassword" aria-hidden="true"></i>
                            <div class="pwGeneration">
                                <button type="button" jq-event-id="btnWordpressAdminPasswordGenerate" class="btn btn--secondary--def dispIB font14 isNoloading">パスワード生成</button>
                                <button type="button" jq-event-id="btnCopyToClipboard" class="btn btn--secondary--def dispIB font14 isNoloading">
                                    コピー
                                    <span jq-area-id="completeCopyToolTip" class="copyBalloon">パスワードをコピーしました</span>
                                </button>
                            </div>
                            <div jq-area-id="wordpressAdminPasswordStrength" class="font12 pwSafety pwSafety--def">
                                パスワードの安全性：<span></span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <ul class="form__msgList" x-data-target="wp_password_plain"></ul>
                            <span class="note">
                                半角7文字以上、64文字以内<br>
                                英数、一部記号（!#$%=~^|:_[].+-*/&#123;&#125;@&()<>`;?,）が使えます
                            </span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wpmailaddress">メールアドレス</label><span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <input type="text" id="wp_mailaddress" name="wp_mailaddress" value="{$form.wp_mailaddress}" x-data-required="true" placeholder="name@example.com" class="sizeShort" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_mailaddress"}
                            <span class="note">インストール後でも変更可能です</span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wp_theme">テーマ</label>
                            <div class="tooltip">
                                <i class="tooltip__target"></i>
                                <div class="tooltip__content">
                                    <p>
                                        サイトのデザインや機能などを決めるテンプレートです。<br>
                                        主な用途にあわせて選ぶのがおすすめです。<br>
                                        また、手軽さ重視なら無料テーマ、構築やカスタマイズのしやすさ・サポート重視なら有料テーマをおすすめします。<br>
                                        テーマはあとから管理画面でも購入可能です。<br>
                                        また、利用するテーマはいつでも変更が可能です。
                                    </p>
                                </div>
                            </div>
                            <span class="label label--hissu">必須</span>
                        </div>
                        <div class="form__body">
                            <div>
                                <input type="radio" name="wp_theme" id="default" value="default" {if !$form.wp_theme || $form.wp_theme === 'default'}checked{/if}>
                                <label for="default" class="radio radio--wp_theme">WordPressデフォルトテーマ</label>
                            </div>

                            <div class="wp_theme__list hide">
                                {foreach from=$app.freeThemes item=freeTheme name=iterate}
                                    {assign var="themeName" value=$freeTheme.name}
                                    <div class="wp_theme__item">
                                        <input type="radio" name="wp_theme" id="{$freeTheme.name}" value="{$freeTheme.name}"
                                               data-option-type="{$freeTheme.option_type_id}"
                                               data-option-default-check="{if $freeTheme.option_type_id == 1}{$app.wp_child_theme_required_info.$themeName}{elseif $freeTheme.option_type_id == 2}{$app.wp_plugin_required_info.$themeName}{/if}"
                                               data-option-items="{foreach from=$freeTheme.options item=option name=iterate2}{$option.name}{if !$smarty.foreach.iterate2.last},{/if}{/foreach}"
{*                                               data-child-theme="{$freeTheme.child_theme_name}"*}
{*                                               data-theme-option-required="{$app.wp_child_theme_required_info.$themeName}" {if $form.wp_theme === $freeTheme.name}checked{/if}*}
                                        >
                                        <label for="{$freeTheme.name}" class="radio radio--wp_theme">
                                            <span class="wp_theme_name">{$freeTheme.display_name}</span><div class="wp_theme_planGroup"><span class="label label--free">無料</span></div>
                                            <span class="wp_theme_purpose">主な用途：{$freeTheme.purpose}</span>
                                            <span class="note--wp_theme">{$freeTheme.description}</span>
                                        </label>
                                    </div>
                                {/foreach}
                                {foreach from=$app.paidThemes item=paidTheme name=iterate}
                                    {assign var="themeName" value=$paidTheme.name}
                                    <div class="wp_theme__item">
                                        <input type="radio" name="wp_theme" id="{$paidTheme.name}" value="{$paidTheme.name}"
                                               data-option-type="{$paidTheme.option_type_id}"
                                               data-option-default-check="{if $paidTheme.option_type_id == 1}{$app.wp_child_theme_required_info.$themeName}{elseif $paidTheme.option_type_id == 2}{$app.wp_plugin_required_info.$themeName}{/if}"
                                               data-option-items="{foreach from=$paidTheme.options item=option name=iterate2}{$option.name}{if !$smarty.foreach.iterate2.last},{/if}{/foreach}"
                                        >
                                        <label for="{$paidTheme.name}" class="radio radio--wp_theme">
                                            <span class="wp_theme_name">{$paidTheme.display_name}
                                                {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                    {if count($paidTheme.plans) > 1}<span style="padding-left: 10px; font-size: 10px; color: #E10000; font-weight: bold;">2/4までキャンペーン中！</span>{/if}
                                                {/if}
                                            </span>
                                            {assign var="subscription_counter" value=0}
                                            <div class="wp_theme_planGroup">
                                            {foreach from=$paidTheme.plans key=plan item=item}
                                                {if $plan == 'purchase'}
                                                    <span class="label label--purchase">買い切り</span>
                                                    {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                        <span class="wp_theme_discount_friendprice">{$item.referral_price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                    {else}
                                                        <span class="wp_theme_discount_price">{$item.discount_price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                    {/if}
                                                    <span class="wp_theme_regular_price">{$item.price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                {/if}
                                                {if $plan == 'subscription_yearly' || $plan == 'subscription_monthly'}
                                                    {if $subscription_counter == 0}<span class="label label--subscription">サブスク</span>{/if}
                                                    {assign var="subscription_counter" value="`$subscription_counter+1`"}

                                                    {if count($paidTheme.plans) == 1 && is_null($item.discount_price)}
                                                        <span>{$item.price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                    {elseif count($paidTheme.plans) == 1}
                                                        <span class="wp_theme_discount_price">{$item.discount_price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                        <span class="wp_theme_regular_price">{$item.price|number_format}円{if $subscription_counter > 0}/年{/if}</span>
                                                    {/if}
                                                {/if}
                                            {/foreach}

                                            {if count($paidTheme.plans) > 1}
                                                {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                    <span class="wp_theme_discount_friendprice">{$paidTheme.plans.subscription_monthly.referral_price|number_format}円/月〜</span>
                                                    <span class="wp_theme_regular_price">{$paidTheme.plans.subscription_monthly.price|number_format}円/月〜</span>
                                                {else}
                                                    <span class="wp_theme_discount_price">{$paidTheme.plans.subscription_monthly.price|number_format}円/月〜</span>
                                                {/if}
                                            {/if}
                                            </div>
                                            {if count($paidTheme.plans) > 1}
                                                <div class="selectWrap">
                                                    <select name="wptheme_month" class="select wptheme_month">
                                                        {foreach from=$paidTheme.plans key=plan item=item}
                                                            {assign var="display_price" value=$item.price}
                                                            {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral && $item.referral_price}
                                                                {assign var="display_price" value=$item.referral_price}
                                                            {elseif $item.discount_price}
                                                                {assign var="display_price" value=$item.discount_price}
                                                            {/if}
                                                            {if $plan == 'purchase'}
                                                                {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                                    <option value="0" {if $form.wptheme_month == "0"}selected="selected"{/if}>{$display_price|number_format}円（買い切り／キャンペーン価格）</option>
                                                                {else}
                                                                    <option value="0" {if $form.wptheme_month == "0"}selected="selected"{/if}>{$display_price|number_format}円（買い切り）</option>
                                                                {/if}
                                                            {elseif $plan == 'subscription_yearly'}
                                                                {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                                    <option value="12" {if $form.wptheme_month == "12"}selected="selected"{/if}>{if $item.discount_price}{$display_price|number_format}円/年（サブスク／キャンペーン価格）{else}{$display_price|number_format}円/年（サブスク）{/if}</option>
                                                                {else}
                                                                    <option value="12" {if $form.wptheme_month == "12"}selected="selected"{/if}>{$display_price|number_format}円/年（サブスク）</option>
                                                                {/if}
                                                            {elseif $plan == 'subscription_monthly'}
                                                                <option value="1" {if $form.wptheme_month == "1"}selected="selected"{/if}>{$display_price|number_format}円/月（サブスク）</option>
                                                            {/if}
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            {/if}
                                            <span class="wp_theme_purpose">主な用途：{$paidTheme.purpose}</span>
                                            <span class="note--wp_theme">{$paidTheme.description}</span>
                                            {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                <span class="note--wp_theme_friend">
                                                    「お友達紹介プログラム」が適用されています。
                                                    <br/>
                                                    ※サブスクプランは初回のお支払いのみ上記価格が適用されます。
                                                    {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                        <br/>
                                                        ※現在の価格は、キャンペーン割引とお友達紹介プログラムの両方が適用された金額です。
                                                    {/if}
                                                </span>
                                            {/if}
                                        </label>
                                    </div>
                                {/foreach}
                                <div class="tac" id="js-paid-theme-expand-text">
                                    <span class="paid_theme_expand__text">他のテーマを表示する</span>
                                </div>

                            </div>

{*                            {foreach from=$app.wp_themes item=wpTheme name=iterate}*}
{*                                {assign var="themeName" value=$wpTheme.name}*}
{*                                <div class="{if !$smarty.foreach.iterate.last}mb5{/if}">*}
{*                                    <input type="radio" name="wp_theme" id="{$wpTheme.name}" value="{$wpTheme.name}" data-child-theme="{$wpTheme.child_theme_name}" data-theme-option-required="{$app.wp_child_theme_required_info.$themeName}" {if $form.wp_theme === $wpTheme.name}checked{/if}>*}
{*                                    <label for="{$wpTheme.name}" class="radio radio--wp_theme">*}
{*                                        {$wpTheme.display_name} / {if $wpTheme.price === '0'}*}
{*                                            無料*}
{*                                        {else}*}
{*                                            {if $wpTheme.name === 'xwrite'}*}
{*                                                <span style="text-decoration: line-through; color: gray;">月額{$wpTheme.price|number_format}円</span> 1年間無料*}
{*                                                <span class="note--wp_theme_cp">【キャンペーン開催中！】詳細は<a href="https://xwrite.jp/campaign_220907/" target="_blank">こちら！</a></span>*}
{*                                            {else}*}
{*                                                {$wpTheme.price|number_format}円*}
{*                                            {/if}*}
{*                                        {/if}*}
{*                                        <span class="note--wp_theme">{$wpTheme.description}</span>*}
{*                                    </label>*}
{*                                </div>*}
{*                            {/foreach}*}
                            <p class="note ml15">WordPressテーマに関するお問い合わせは、サポート対象外となります。<br>WordPressテーマの提供元へお問い合わせください。</p>
                        </div>
                    </div>

                    <div class="form__item">
                        <div class="form__head">
                            <label for="wp_theme_option">テーマオプション</label><span class="label label--ninni">任意</span>
                        </div>
                        <div class="form__body">
                            <div class="theme-option--child-theme" style="display: none;">
                                <input type="checkbox" name="install_child_theme" id="install_child_theme" value="1">
                                <label for="install_child_theme" class="checkbox" style="border: none;">
                                    子テーマをインストールする
                                    <div class="tooltip">
                                        <i class="tooltip__target"></i>
                                        <div class="tooltip__content">
                                            <p>
                                                子テーマとはテーマをカスタマイズするための編集用ファイルです。<br>
                                                テーマをカスタマイズする場合は、子テーマのインストール・利用を推奨しています。
                                            </p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="theme-option--plugin">
                                {foreach from=$app.pluginOptions item=pluginOption}
                                    <div class="plugin-option" data-theme-id="{$pluginOption.wp_theme_id}">
                                        <input type="checkbox" name="install_plugins[]" id="{$pluginOption.name}" value="{$pluginOption.name}">
                                        <label for="{$pluginOption.name}" class="checkbox" style="border: none;">
                                            {$pluginOption.display_name}
                                            <div class="tooltip">
                                                <i class="tooltip__target"></i>
                                                <div class="tooltip__content">
                                                    <p>
                                                        {$pluginOption.description}
                                                    </p>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                {/foreach}
                            </div>
                            <span class="theme-option--no" style="padding-left: 20px;">-</span>
                        </div>
                    </div>
                    {if $app.show_inc_plugin}
                        <div class="form__item">
                            <div class="form__head">
                                <label for="wp_plugin">プラグイン</label><span class="label label--ninni">任意</span>
                            </div>
                            <div class="form__body">
                                {foreach from=$app.pluginIncList key=name item=plugin}
                                    <div class="wp_plugin__item">
                                        <input type="hidden" name="install_wp_inc_plugin[{$name}]" value="0">
                                        <input type="checkbox" name="install_wp_inc_plugin[{$name}]" id="{$name}" value="1" {if $form.install_wp_inc_plugin[$name] !== '0'}checked="checked"{/if}>
                                        <label for="{$name}" class="checkbox" style="border: none;">
                                            <span class="wp_plugin_name">{$plugin.display_name}</span>
                                            <a href="{$plugin.site_url}" target="_blank">公式サイト</a>
                                        </label>
                                        <span class="note--wp_plugin">{$plugin.description}</span>
                                    </div>
                                {/foreach}
                                <p class="note ml15">WordPressプラグインに関するお問い合わせは、サポート対象外となります。<br>WordPressプラグインの提供元へお問い合わせください。</p>
                            </div>
                        </div>
                    {/if}
                </div>
                <!-- /.form__itemList -->
            </div>

            {if $form.form_agencycd}
            <section class="mb30">
                <h2 class="form__ttl">{$smarty.const.G_ACCOUNT_TYPE}ビジネスパートナーからご紹介のお客様</h2>
                <div class="form__item">
                    <div class="form__head">
                        <label for="form_agencycd">取次店コード</label><span class="label label--ninni">任意</span>
                    </div>
                    <div class="form__body">
                        <input id="form_agencycd" type="text" name="form_agencycd" value="{$form.form_agencycd}">
                        {include file="register/server/xbiz/form_message_list.tpl" target="form_agencycd"}
                    </div>
                </div>
            </section>
            {/if}

            <!-- すべて入力が完了している場合 -->
            <section class="form__btnArea order_body_btn">
                <ul id="api_error" style="display: none;"></ul>
                <input type="button" id="charges" value="{$smarty.const.G_ACCOUNT_NAME}の登録へ進む" class="form__nextBtn btn btn--primary sizeMiddle">
                <div class="form__msgList"></div>
                <span class="form_message_list disp-b tac"></span>
            </section>
        </form>
        <!-- /.form -->

        <div style="display: none;" id="canAppliedCp250501" data-can-applied-cp250501="{if $app.can_applied_cp250501}1{else}0{/if}"></div>
    </main>
    <!-- /.main -->

    <script>
        {**
            テーマリストの高さ調整
            --------------------------------------
            ○ setHeight()
               maxDisplayNum までの高さを計算し、テーマリスト要素の style に設定します
               非表示時は高さが取得できないため、要素が表示された後に呼び出してください
            ○ removeHeight()
               テーマリスト要素の style に設定された高さを削除します
        **}
        {literal}
            function useWpThemeListHeightAdjuster() {
                const $wpThemeList = $('.wp_theme__list');
                const $wpThemeItemList = $wpThemeList.find('.wp_theme__item');
                const $wpThemeExpandText = $('#js-paid-theme-expand-text');
                const maxDisplayNum = 4;
                function calcHeight() {
                    let height = $wpThemeExpandText.outerHeight();
                    $wpThemeItemList.each(function (i) {
                        height += $(this).outerHeight();
                        if (maxDisplayNum === (i + 1)) {
                            return false;
                        }
                    });
                    return height;
                }
                function setHeight() {
                    if (!$wpThemeList.hasClass('hide')) {
                        return;
                    }
                    $wpThemeList.css({ height: calcHeight() });
                }
                function removeHeight() {
                    $wpThemeList.css({ height: '' });
                }
                return { setHeight, removeHeight };
            }
            const wpThemeListHeightAdjuster = useWpThemeListHeightAdjuster();
        {/literal}
    </script>

    <script>
        {literal}

        // 決済処理
        let charge_button = $("#charges");
        charge_button.show();
        charge_button.on("click", function() {
            $("#api_error>.api_error_message").remove();
            $(this).prop('disabled', true);
            $(this).css({'box-shadow':'0px 0 2px 0 rgba(0,0,0,0.2)', 'opacity':'0.6'});

            // ダイアログ非表示
            $(window).off('beforeunload');
            if ($("#quick_start").is(':checked') === true) {
                getWpPass();
            } else {
                $('input[name="domain"]').val('');
                $('input[name="wp_blogname"]').val('');
                $('input[name="wp_username"]').val('');
                $('input[name="wp_password"]').val('');
                $('input[name="wp_mailaddress"]').val('');
                $('form[name="register_fm"]').submit();
            }
        });

        $(function(){

            $('#charges').click(function() {
                sessionStorage.setItem('conf_flag', '1');
                sessionStorage.setItem('session_domain_name', $(".domainInputTxt").val());
            });

            get_conf_flag = sessionStorage.getItem('conf_flag');
            sessionStorage.removeItem('conf_flag');

            get_domain = sessionStorage.getItem('session_domain_name');
            sessionStorage.removeItem('session_domain_name');

            let back_flg = $("#quick_start").is(':checked');
            if (back_flg === true) {
                if (get_domain !== null && get_domain !== '') {
                    $(".domainInputTxt").val(get_domain);
                }
                $("#form_server_id_box").find("ul:contains('申し込むことが可能です')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('既に登録済みのサーバーIDです')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('サーバーIDを入力してください')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('サーバーIDが入力されていません')").find("li").remove();

                checkCampaignDomain($("input[name='id_server_plan']:checked").val(), $(".serverLimit").val());
                updatePrice($(".serverLimit").val(), $("input[name='id_server_plan']:checked").val());
                checkDomain($("input[name='id_server_plan']:checked").val(), $(".serverLimit").val(), $(".domainInputTxt").val(), $(".domainList").val(), 1);
                quickstart_flg(true);
            }

            // サーバープラン初期値
            changeServerPlan();

            // サーバープラン変更時
            $("input[name='id_server_plan']").click(function(){
                changeServerPlan();
            });

            $("input[name='id_usertype']").click(function(){
                nameEnglishForm();
                conameEnglishForm();
            });

            $(".serverLimit").change(function(){
                let month = $(".serverLimit").val();
                let id_server_plan = $("input[name='id_server_plan']:checked").val();
                let domain_name = $(".domainInputTxt").val();
                let domain_type = $(".domainList").val();
                let year = 1;

                checkCampaignDomain(id_server_plan, month);
                updatePrice(month, id_server_plan);
                checkDomain(id_server_plan, month, domain_name, domain_type, year);
            });

            $(".domainInputTxt").change(function(){
                let month = $(".serverLimit").val();
                let id_server_plan = $("input[name='id_server_plan']:checked").val();
                let hen = $(".domainInputTxt").val().replace(/[Ａ-Ｚａ-ｚ０-９]/g,function(s){
                    return String.fromCharCode(s.charCodeAt(0)-0xFEE0);
                });
                $(".domainInputTxt").val(hen);
                let domain_name = $(".domainInputTxt").val();
                let domain_type = $(".domainList").val();
                let year = 1;

                checkCampaignDomain(id_server_plan, month);
                updatePrice(month, id_server_plan);
                checkDomain(id_server_plan, month, domain_name, domain_type, year);
            });

            $(".domainList").change(function(){
                let month = $(".serverLimit").val();
                let id_server_plan = $("input[name='id_server_plan']:checked").val();
                let domain_name = $(".domainInputTxt").val();
                let domain_type = $(".domainList").val();
                let year = 1;

                checkCampaignDomain(id_server_plan, month);
                updatePrice(month, id_server_plan);
                checkDomain(id_server_plan, month, domain_name, domain_type, year);
            });

            $("#quick_start").on("click", function() {
                let quick_flg = $("#quick_start").is(':checked');
                quickstart_flg(quick_flg);
                if ($("input[name='id_server_plan']:checked").length > 0) {
                    updatePrice($(".serverLimit").val(), $("input[name='id_server_plan']:checked").val());
                }
            });
        });

        const referralServerPrice = {
            $showEl: $('[data-is-display-referral-server="1"]'),
            $hideEl: $('[data-is-display-referral-server="0"]'),
            $priceEl: $('.fPrice'),
            init() {
                this.$showEl.hide();
                this.$hideEl.show();
            },
            enable(price) {
                this.$priceEl.text(comma(price) + '円');
                this.$hideEl.hide();
                this.$showEl.show();
            }
        };

        function updatePrice(month, id_server_plan) {
            let json = {
                action_register_server2_getprice: 'true',
                id_server_plan: id_server_plan,
                month: month,
                can_applied_cp250501: document.getElementById('canAppliedCp250501').dataset.canAppliedCp250501,
            };

            $('.serverPrice__txt').text('計算中…');
            $('.PricePr').hide();
            referralServerPrice.init();

            $.ajax({
                url: './',
                type: 'POST',
                dataType: 'json',
                data: json,
                timeout : 30000,
            }).done(function(data){
                if (!data.error) {
                    $('.serverPrice__txt').text(comma(Number(data.total_price)) + String('円'));
                    if (month > 3) {
                        if (Number(data.total_price) < Number(data.compare_price)) {
                            $('.PricePr').show().html(String('3ヶ月契約よりトータル<span class="price__diff">') + comma(Number(data.compare_price) - Number(data.total_price)) + String('</span>円お得！'));
                        }
                    } else {
                        $('.PricePr').show().html('6ヶ月以上の契約で<br class="visible-l">月々の料金がお得になります！');
                    }

                    if ($('.cashback_flg').length){
                        if (month > 6) {
                            if (Number(data.cashback_amount) < Number(data.total_price)) {
                                $('.PricePr').show().html(String('キャッシュバックで<span class="price__diff">実質') + comma(Number(data.total_price) - Number(data.cashback_amount)) + String('円</span>'));
                            }
                        } else {
                            $('.PricePr').show().html('12ヶ月以上のご契約で<span class="price__diff">キャッシュバック！</span>');
                        }
                    }

                    if (data.referral_discount_amount) {
                        referralServerPrice.enable(data.total_price + data.referral_discount_amount);
                        if (month > 3) {
                            // キャッシュバックキャンペーン実施中は差額を紹介プログラムの特典と合わせたものにする
                            if ($('.cashback_flg').length){
                                if (month >= 12) {
                                    $('.price__diff').text(String('実質') + comma(Number(data.total_price) - Number(data.cashback_amount) + Number(data.referral_discount_amount)) + String('円'));
                                }
                            } else {
                                $('.price__diff').text(comma(Number(data.compare_price) - Number(data.total_price) - Number(data.referral_discount_amount)));
                            }
                        }
                    }
                }
            });
        }

        function checkDomain(id_server_plan, month, domain_name, domain_type, year) {
            let paid_domain_flag = false;
            let json = {
                action_register_server2_searchdomain: 'true',
                id_server_plan: id_server_plan,
                month: month,
                domain_name: domain_name,
                domain_type: domain_type,
                year: year,
            };

            nameEnglishForm();
            conameEnglishForm();

            $('#domain_message').show().html("<li id='is_loading'><span class='isLoading'>検索中…</span><li>");

            $.ajax({
                url: './',
                type: 'POST',
                dataType: 'json',
                data: json,
                timeout : 30000,
            }).done(function(data){
                $('#is_loading').remove();
                $('#domain_message').hide();
                $(".afterInfo").hide();
                $('#domain_message > li').remove();
                let li = $("ul[x-data-target='domain']").find("li");
                if (li.length > 0) {
                    return false;
                }

                if (!data.error) {
                    if (data.can_not_get_jp_domain_type_flag) {
                        $('.domainInputTxt').addClass('isError');
                        $('#domain_message').show().html('<li><span class="isError">日本語ドメインが取得できないドメインの種類です。</span></li>');
                    } else if (data.already_set_domain_flag) {
                        $('.domainInputTxt').addClass('isError');
                        $('#domain_message').show().html('<li><span class="isError">すでに使用されているドメイン名です。</span></li>');
                    } else if (!data.can_get_domain_flag || data.x_domain_record_flag) {
                        $('.domainInputTxt').addClass('isError');
                        $('#domain_message').show().html('<li><span class="isError">すでに取得されているか使用できないドメイン名です。</span></li>');
                    } else if (data.campaign_domain_flag) {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html('<li><span class="isSuccess">「ドメインプレゼントキャンペーン」特典により0円で取得可能！</span></li>');
                    } else if (data.present_domain_flag) {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html('<li><span class="isSuccess">プラン特典により0円で取得可能！</span></li>');
                    } else {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html(String('<li><span class="isSuccess">') + comma(Number(data.total_domain_price)) + String('円で取得可能！2年目以降は更新料金が適用されます。') + String('</span></li>'));
                        paid_domain_flag = true;
                    }
                }
                if (data.can_apply_free_domain && paid_domain_flag) {
                    $(".afterInfo").show();
                }
            });
        }

        function checkCampaignDomain(id_server_plan, register_month) {
            let json = {
                action_register_server2_getcampaigndomainlist: 'true',
                id_server_plan: id_server_plan,
                register_month: register_month,
            };

            $.ajax({
                url: './',
                type: 'POST',
                dataType: 'json',
                data: json,
                timeout : 30000,
            }).done(function(data){
                $('#campaign_domain_info').hide();
                if (!data.error) {
                    if (data.campaign_domaintype_text !== '') {
                        $('#campaign_domain_info').show().html('<h3 class="campaignBalloon__ttl"><span>サーバーご利用中は独自ドメインがずっと0円！</span></h3><p>今ならサーバーご契約でドメインが0円！サーバーご利用中は更新も0円！<br>対象ドメイン： ' + data.campaign_domaintype_text + ' なら0円で取得可能！更新料金もずっと0円！</p>');
                    }
                }
            });
        }

        function nameEnglishForm() {
            let domain_type = $(".domainList").val();

            $('#name_english_form').hide();

            if ($("input[name='id_usertype']:checked").val() === '100' && domain_type === '.jp') {
                $("#name_english_form").show();
            }
        }

        function conameEnglishForm() {
            let domain_type = $(".domainList").val();

            $('#co_name_eng_form').hide();

            if ($("input[name='id_usertype']:checked").val() === '200' && domain_type === '.jp') {
                $("#co_name_eng_form").show();
            }
        }

        function comma(num) {
            return String(num).replace( /(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
        }

        function quickstart_flg(flg) {
            if (flg === true) {
                $(".quick_start_group").show();
                $(".quick_start_required").addClass("form-table_required");
                wpThemeListHeightAdjuster.setHeight();
            } else {
                $(".quick_start_group").hide();
                $(".quick_start_required").removeClass("form-table_required");
            }
        }

        function changeServerPlan() {
            let month = $(".serverLimit").val();
            let id_server_plan = $("input[name='id_server_plan']:checked").val();
            let domain_name = $(".domainInputTxt").val();
            let domain_type = $(".domainList").val();
            let year = 1;

            checkCampaignDomain(id_server_plan, month);
            updatePrice(month, id_server_plan);
            checkDomain(id_server_plan, month, domain_name, domain_type, year);
        }

        {/literal}
    </script>

    <script>
        {literal}
        (function() {
            const $paidThemeExpandText = $('#js-paid-theme-expand-text');
            const $noThemeOption = $('.theme-option--no');
            const $themeOptionChildTheme = $('.theme-option--child-theme');
            const $themeOptionPlugin = $('.theme-option--plugin');
            const $themeOptionChildThemeCheckbox = $('input[name="install_child_theme"]');
            const $themeOptionPluginCheckbox = $('input[name="install_plugins[]"]');
            const $themeNameRadioButtons = $('input[name="wp_theme"]');
            const $initialCheckedRadioButton = $('input[name="wp_theme"]:checked');

            window.addEventListener('load', function(e) {
                resetThemeOptionCheckBox();

                if ($initialCheckedRadioButton.val() === 'emanon-business') {
                    $noThemeOption.css('display', 'block');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'none');
                } else if ($initialCheckedRadioButton.data('option-type') !== 1 && $initialCheckedRadioButton.data('option-type') !== 2) {
                    $noThemeOption.css('display', 'block');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'none');
                } else if ($initialCheckedRadioButton.data('option-type') === 1) {
                    $noThemeOption.css('display', 'none');
                    $themeOptionChildTheme.css('display', 'block');
                    $themeOptionPlugin.css('display', 'none');
                } else if ($initialCheckedRadioButton.data('option-type') === 2) {
                    $noThemeOption.css('display', 'none');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'block');
                }
            });

            $themeNameRadioButtons.change(function (e) {
                resetThemeOptionCheckBox();

                const $target = $(e.target);
                const optionType = $target.data('option-type');
                const optionDefaultCheck = !!$target.data('option-default-check');

                if ($target.val() === 'emanon-business') {
                    $noThemeOption.css('display', 'block');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'none');
                    $themeOptionChildThemeCheckbox.prop('checked', true);
                    $themeOptionPluginCheckbox.prop('checked', false);
                } else if (optionType !== 1 && optionType !== 2) {
                    $noThemeOption.css('display', 'block');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'none');
                    $themeOptionChildThemeCheckbox.prop('checked', false);
                    $themeOptionPluginCheckbox.prop('checked', false);
                } else if (optionType === 1) {
                    $noThemeOption.css('display', 'none');
                    $themeOptionChildTheme.css('display', 'block');
                    $themeOptionPlugin.css('display', 'none');
                    $themeOptionChildThemeCheckbox.prop('checked', optionDefaultCheck);
                    $themeOptionPluginCheckbox.prop('checked', false);
                } else if (optionType === 2) {
                    $noThemeOption.css('display', 'none');
                    $themeOptionChildTheme.css('display', 'none');
                    $themeOptionPlugin.css('display', 'block');
                    $themeOptionChildThemeCheckbox.prop('checked', false);
                    $themeOptionPluginCheckbox.prop('checked', optionDefaultCheck);
                }

                let $wpThemeList = $('.wp_theme__list');
                if ($target.val() === 'xwrite' && $wpThemeList.hasClass('hide')) {
                    $wpThemeList.addClass('selected_xwrite');
                } else {
                    $wpThemeList.removeClass('selected_xwrite');
                }
            });

            $paidThemeExpandText.on('click', function () {
                showPaidThemeList();
            });

            function resetThemeOptionCheckBox() {
                $themeOptionChildThemeCheckbox.prop('checked', false);
                $themeOptionPluginCheckbox.prop('checked', false);
            }

            function showPaidThemeList() {
                $paidThemeExpandText.css('display', 'none');
                $('.wp_theme__list').removeClass("hide");
                wpThemeListHeightAdjuster.removeHeight();
            }
        })();
        {/literal}
    </script>

    <script>
        {literal}
            // パスワード生成ボタンクリック時の処理
            $(document).off('click', '[jq-event-id="btnWordpressAdminPasswordGenerate"]'); // 重複防止
            $(document).on('click', '[jq-event-id="btnWordpressAdminPasswordGenerate"]', function () {
                const passwordInput = $('[jq-area-id="wordpressAdminPasswordInput"]');
                passwordInput.val(wordpressAdminPasswordGenerate());
                setWordpressAdminPasswordStrength(passwordInput.val());
            });

            /**
            * Wordpress管理者パスワードを生成
            */
            function wordpressAdminPasswordGenerate(length = 12) {
                const letters = 'abcdefghijklmnopqrstuvwxyz';
                const numbers = '0123456789';
                const symbols = '!#$%=~^|:_[]{}().+-*/@&<>`;?,';
                let allChars = letters + letters.toUpperCase() + numbers + symbols;

                function generatePassword() {
                    let password = '';
                    const regex = /[!#$%=~^|:_\[\]{}().+\-*/@&<>`;?,0123456789]/;
                    for (let i = 0; i < length; i++) {
                        password +=allChars.charAt(Math.floor(Math.random() * allChars.length));
                    }
                    // 英字 + 数字 or 記号がひとつ以上含まれていない場合は再生成
                    if (!/[a-zA-Z]/.test(password) || !regex.test(password)) {
                        return generatePassword(); 
                    }
    
                    // パスワード評価が最高でない場合は再生成
                    if (evaluatePasswordStrength(password) !==3) {
                        return generatePassword();
                    }
                    return password;
                }

                return generatePassword();
            }

            // パスワード強度のリアルタイム評価
            $(document).off('change', '[jq-area-id="wordpressAdminPasswordInput"]'); // 重複防止
            $(document).on('change', '[jq-area-id="wordpressAdminPasswordInput"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val()
                setWordpressAdminPasswordStrength(password)
            });
            $(document).off('keyup', '[jq-area-id="wordpressAdminPasswordInput"]'); // 重複防止
            $(document).on('keyup', '[jq-area-id="wordpressAdminPasswordInput"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val()
                setWordpressAdminPasswordStrength(password)
            });
    
            /**
             * パスワード強度の評価結果を表示
             * @param password
             */
            function setWordpressAdminPasswordStrength(password) {
                const strengthViewer = $('[jq-area-id="wordpressAdminPasswordStrength"]');
                // 一度評価をリセット
                strengthViewer.removeClass(function(index, className) {
                    return (className.match(/\bpwSafety--\S+/g) || []).join(' ');
                });

                if(password.length === 0) {
                    strengthViewer.addClass('pwSafety--def');
                    return;
                }

                let score = 0;
                // スコアに応じて評価を表示
                score = evaluatePasswordStrength(password);

                switch (score) {
                    case 0:
                    case 1:
                        strengthViewer.addClass('pwSafety--low');
                        break
                    case 2:
                        strengthViewer.addClass('pwSafety--medium');
                        break
                    case 3:
                        strengthViewer.addClass('pwSafety--high');
                        break
                }
            }

            /**
             * パスワード強度の評価
             * @param password
             * @returns {number}
             */
            function evaluatePasswordStrength(password) {
                let score = 0;

                // 1. 繰り返しや連続文字の検出
                if (/(.)\1{2,}/.test(password)) {
                    score -= 1;
                }

                if (/(012|123|234|345|456|567|678|789|890|abc|xyz)/i.test(password)) {
                    score -= 1;
                }

                // 2. キーボードパターンの検出
                let keyboardPatterns = [
                    "qwerty", "asdfgh", "zxcvbn", "123456", "qazwsx", "1qaz2wsx", "!@#$%^",
                ];
                for (let pattern of keyboardPatterns) {
                    if (password.toLowerCase().includes(pattern)) {
                        score -= 1;
                        break;
                    }
                }

                // 3. 文字の多様性の評価
                let types = 0;
                if (/[a-z]/.test(password)) types++;
                if (/[A-Z]/.test(password)) types++;
                if (/[0-9]/.test(password)) types++;
                if (/[!#$%=~^|:_\[\]{}().+\-*/@&<>`;?,]/.test(password)) types++;

                if (types >= 3) {
                    score += 1;
                } else if (types === 2) {
                    score += 0;
                } else {
                    score -= 1;
                }

                // 4. パスワードの長さの評価
                let length = password.length;
                if (length >= 16) {
                    score += 3;
                } else if (length >= 12) {
                    score += 2;
                } else if (length >= 8) {
                    score += 1;
                } else {
                    score -= 2;
                }

                return Math.max(0, Math.min(3, score)); // スコアを 0 ? 3 の範囲に制限
            }

            // パスワードコピーボタンクリック時の処理
            $(document).off('click', '[jq-event-id="btnCopyToClipboard"]'); // 重複防止
            $(document).on('click', '[jq-event-id="btnCopyToClipboard"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val();
                navigator.clipboard.writeText(password);

                const completeCopyToolTip = $('[jq-area-id="completeCopyToolTip"]');

                // 一度リセットしてからアニメーション実行
                completeCopyToolTip.removeClass('isShow').hide();
                $(this).css('opacity', '');

                // 少し待ってから表示（アニメーション効果のため）
                setTimeout(() => {
                    completeCopyToolTip.addClass('isShow').show();
                    $(this).css('opacity', '1');
                }, 10);

                setTimeout(() => {
                    completeCopyToolTip.removeClass('isShow');
                    setTimeout(() => {
                        completeCopyToolTip.hide();
                        $(this).css('opacity', '');
                    }, 200);
                }, 2000);
            });
        {/literal}
    </script>
{/if}

<script src="xserver/js/form.function.js?date=20230323"></script>
<script src="js/lib.min.js?date=201701121030"></script>

{include file="inc/footer_copyright.tpl"}
<!-- /.footer -->

{literal}
    <!-- Yahoo Code for your Target List -->
    <script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
    <script>
        window.yjDataLayer = window.yjDataLayer || [];
        function ytag() { yjDataLayer.push(arguments); }
        ytag({
            "type":"yss_retargeting",
            "config": {
                "yahoo_ss_retargeting_id": "1000024944",
                "yahoo_sstag_custom_params": {
                }
            }
        });
    </script>

    <!-- Yahoo Code for your Target List -->
    <script async src="https://s.yimg.jp/images/listing/tool/cv/ytag.js"></script>
    <script>
        window.yjDataLayer = window.yjDataLayer || [];
        function ytag() { yjDataLayer.push(arguments); }
        ytag({
            "type":"yjad_retargeting",
            "config":{
                "yahoo_retargeting_id": "DKA25PHMA5",
                "yahoo_retargeting_label": "",
                "yahoo_retargeting_page_type": "",
                "yahoo_external_transmission_optout": true,
                "yahoo_retargeting_items":[
                    {item_id: '', category_id: '', price: '', quantity: ''}
                ]
            }
        });
    </script>

    <!-- pardotトラッキングタグ -->
    <script type='text/javascript'>
        piAId = '957073';
        piCId = '';
        piHostname = 'prm.xserver.ne.jp';

        (function() {
            function async_load(){
                var s = document.createElement('script'); s.type = 'text/javascript';
                s.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + piHostname + '/pd.js';
                var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
            }
            if(window.attachEvent) { window.attachEvent('onload', async_load); }
            else { window.addEventListener('load', async_load, false); }
        })();
    </script>
{/literal}
</body>
</html>
