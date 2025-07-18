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
        page_title: '���������ߥե����� ������������������',
        page_path: '/xinfo/register/server/xserver/account_input.php'
      });

      gtag('config', 'UA-3789601-22', {
          'linker': {
              'accept_incoming': true,
              'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
          },
          page_title: '���������ߥե����� ������������������',
          page_path: '/xinfo/register/server/xserver/account_input.php'
      });
    </script>
{/literal}
    <meta charset="euc-jp">
    <meta name="copyright" content="Copyright {$smarty.const.G_COMPANY_NAME_EN}">
    <meta name="keywords" content="��󥿥륵���С�,��®,�ⵡǽ,�������">
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <link rel="index" href="{$smarty.const.G_WWW_URL}sitemap.php" title="�����ȥޥå�" />
    <link rel="shortcut icon" href="xserver/img/favicon.ico?date=210604">
    <link rel="apple-touch-icon" href="xserver/img/apple-touch-icon-precomposed.png?date=210415">

    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="xserver/js/tooltip.js?date=241204"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>

    <link href="xserver/css/style.css?date=250626" rel="stylesheet" type="text/css">

    <title>{$smarty.const.G_ACCOUNT_NAME}��Ͽ���Ƥ����ϲ��̡å��å��������С�</title>
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
            <h2 class="quickStart__ttl">�����������ˤ���ǧ��������</h2>
            <div class="quickStart__body">
                <p>WordPress�����ɥᥤ������ʤɤ�ޤȤ�ƹԤ���WordPress�����å��������ȡפ����򤵤�Ƥ��ޤ���<br>
                    �����������˲����ˤĤ��Ƥ���ǧ���ꤤ�������ޤ���</p>
                <ul class="quickStart__attention">
                    <li>�����å��������Ȥˤ�{$specs.services.xserver.trial_days}����̵���Τ�����֤�����ޤ���</li>
                    <li>�������ߤ�Ʊ���˥����С�����Τ���ʧ����ȯ�����ޤ�</li>
                    <li>���󤪻�ʧ���ˤ����Ѥ���륯�쥸�åȥ����ɡ�Paidy��������Ȥϼ�ư�����ѤȤ�����Ͽ���졢����Ϥ����󤬼�ưŪ�˹�������ޤ�</li>
                </ul>

                <p class="modalCloseButton__box"><a id="modalCloseButton">��ǧ���ޤ���</a></p>
            </div>
        </div>
    </div>
</div>

{if $app.can_applied_referral || $app.can_applied_referral_xwrite}
    <div class="friendApply">
        <h3 class="friendApply__mainTtl">�����ͤϡ֤�ͧã�Ҳ�ץ����פ�Ŭ�Ѥ���Ƥ��ޤ���</h3>
        <p><b>����ʧ������</b>����������˱���������򤤤����ޤ���</p>
    </div>
{/if}
{if $app.can_applied_cp250501}
    <div class="friendApply">
        <h3 class="friendApply__mainTtl">�����ͤϡ�eo���桼��������ͥ�Գ���פ�Ŭ�Ѥ���Ƥ��ޤ���</h3>
        <p><b>����ʧ������</b>����������˱���������򤤤����ޤ���</p>
    </div>
{/if}

{* IP���¤������äƤ��硢���顼��å�������ɽ�� *}
{if isset($app.limit_error_message)}
    <header class="header">
        <p class="siteName"><img class="siteName__logo" src="xserver/img/img_logo.png?date=210415" alt="���å��������С�">���������ߥե�����</p>
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
        <p class="siteName"><img class="siteName__logo" src="./xserver/img/img_logo.png?date=210415" alt="���å��������С�">���������ߥե�����</p>
    </header>
    <!-- /.header -->

    <main class="main" role="main">

    <aside class="campaignBnr">
        <div class="campaignBnr__forPC">
            <p class="fukidashi">�� <span>9/4(��)17���ޤǡ�</span>��</p>
            <img src="./xserver/img/campaign_banner_772-130.png?date=250703" alt="Ⱦ�ۥ���å���Хå������ڡ��󡪰���Ū�ϥ����ڥå������С����¼����495�ߤ���Ȥ��롪">
        </div>
        <p class="campaignBnr__forMobile">
            Ⱦ�ۥ���å���Хå����¼����495�ߡ�<br>9/4(��)�ޤǡ�
        </p>
    </aside>
    <!-- /.campaignBnr -->
        
        <div class="flow flow--1">
            <div class="flow__inner cf">
                <h1 class="flow__item isCurrent">����������������</h1>
                <p class="flow__item">{$smarty.const.G_ACCOUNT_NAME}��������</p>
                <p class="flow__item">��ǧ</p>
                <p class="flow__item">��λ</p>
                <p class="flow__next">NEXT:<br>{$smarty.const.G_ACCOUNT_NAME}��Ͽ</p>
            </div>
        </div>
        <!-- /.flow -->

        <div class="intro">
            <p>�������������Ƥ����Ϥ��Ƥ���������</p>
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
                        <h3>�ɥᥤ��ץ쥼���<br class="visible-s">�����ڡ���»��桪  <span class="campaign-date">2019/9/30(��)18:00�ޤ�</span></h3>
                    </div>
                    <div class="form_campaign-banner_info">
                        <p style="padding-bottom:0;">��Yahoo!�������ƥ����������ѤΤ����͸�����</p>
                        <p style="padding-top:0;">���ʤ顢�����С��������������ߤǡ��ɥᥤ���1�Ŀ��衪������⤺�ä�̵����</p>
                    </div>
                </div>
            {/if}

            {* TODO:���� *}
            <input type="hidden" name="service" value="{$app.service.type}" />
            {if $form.input_helper}
                ���������<br>
                <textarea id="input_helper_text" style="width:100%;height:150px;background:#ededed"></textarea>
                <button type="button" id="input_helper_button">���å�</button>
                <br><br>
            {/if}

            <h2 class="form__ttl">�����С���������</h2>
            <div class="form__itemList">
                <div class="form__item form__required">
                    <div class="form__head">
                        <label for="username">�����С�ID</label>
                        <div class="tooltip">
                            <i class="tooltip__target"></i>
                            <div class="tooltip__content">
                                <p>
                                    �����С�ID�Ȥϡ������С�������̤����ͭ��ID�Τ��ȤǤ���<br>
                                    ��˲��������Ӥ����Ѥ��ޤ���
                                </p>
                                <ul class="serverIdInfo">
                                    <li>�����С�����μ��̾���Ȥ�������</li>
                                    <li>FTP�����С�����³����ݤ�����</li>
                                    <li>
                                        https://�����С�ID.xsrv.jp���Ȥ���URL�ǥ����ȸ���������<br>
                                        <span>������URL��Ȥ鷺�˸������ǽ��</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <span class="label label--hissu">ɬ��</span>
                    </div>
                    <div id="form_server_id_box" class="form__body">
                        <div class="serverIdBox">
                            <div class="inputId">
                                <div id="server_id_id_name">
                                    <input type="text" name="username" value="{if $form.username}{$form.username}{else}{$app.autoset_username}{/if}">
                                    <span class="note">Ⱦ�ѱѿ���ʸ����3��12ʸ������</span>
                                </div>
                            </div>
                            {include file="register/server/xserver/form_message_list.tpl" target="username"}
                        </div>
                    </div>
                </div>

                <div class="form__item form__required">
                    <div class="form__head">
                        �ץ��<span class="label label--hissu">ɬ��</span>
                    </div>
                    <div class="form__body">
                        <ul class="form__order form__order--3cols cols_priceSpace">
                            {foreach from=$app.server_plan_list key=k item=f name=planselectxd}
                                {* ����������ɡ��ץ�ߥ��ࡢ�ӥ��ͥ��ʳ�������Ǥ��ʤ��褦�ˤ��� *}
                                {if $k == constant("ServerPlan::XSERVER_STANDARD") ||
                                    $k == constant("ServerPlan::XSERVER_PREMIUM") ||
                                    $k == constant("ServerPlan::XSERVER_BUSINESS")}
                                <li class="priceSpace">
                                    <input type="radio" name="id_server_plan" value="{$k}" id="plan{$k}" {if $form.id_server_plan == $k || !$form.id_server_plan && $f.name === '�����������'}checked{/if} />
                                    <label for="plan{$k}" class="radio">
                                        <span class="priceSpace__planNameArea">
                                            <span class="priceSpace__planName">
                                                {if $f.name === '�����������'}
                                                    �����������
                                                {elseif $f.name === '�ץ�ߥ���'}
                                                    �ץ�ߥ���
                                                {elseif $f.name === '�ӥ��ͥ�'}
                                                    �ӥ��ͥ�
                                                {else}
                                                    {$f.name}
                                                {/if}
                                            </span>
                                            {if $f.name === '�ץ�ߥ���'}<span class="radio_recommend_ico">��������</span>{/if}
                                        </span>
                                        <span class="radio_priceSpace">
                                            <span class="priceSpace__block"><b>���</b><br>
                                                <span class="priceSpace__blockRight"><em class="bold">{$f.per_month_36|number_format}</em>�ߡ�</span></span>
                                            {if $f.cashback_per_month_36}
                                                <span class="priceSpace__block cashback_flg"><span class="priceSpace__blockRight colorRed">����å���Хå���<br><b>�¼�</b><em class="bold">{$f.cashback_per_month_36|number_format}</em>�ߡ�</span></span>
                                            {/if}
                                            <span class="priceSpace__block"><b>vCPU<br class="hidden-l">�ʥ꥽�����ݾڡ�</b><br>
                                                <span class="priceSpace__blockRight"><em>{$f.cpu_core}</em>����</span></span>
                                            <span class="priceSpace__block"><b>����<br class="hidden-l">�ʥ꥽�����ݾڡ�</b><br>
                                                <span class="priceSpace__blockRight"><em>{$f.memory_limit}</em>GB</span></span>
                                            <span class="priceSpace__block"><b>����</b><br>
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
                        <label for="quick_start">WordPress�����å���������</label>
                        <div class="tooltip">
                            <i class="tooltip__target"></i>
                            <div class="tooltip__content">
                                <p>
                                    �֥ɥᥤ�����������ס����ȼ�SSL����ס���WordPress����פ򤪿������ߤ�Ʊ���˹Ԥ��ޤ���<br>
                                    ����WordPress�ˤ��֥����ߤ�������ˤ�������Ǥ���
                                </p>
                            </div>
                        </div>
                        <span class="label label--ninni">Ǥ��</span><br>
                        <span class="font12">(WordPress�ΰ������̵�����ץ����)</span>
                    </div>
                    <div class="form__body">
                        <div class="quickStartPrTxtBox">
                            <b class="quickStartPrTxtBox__ttl">�ɥᥤ���������Ƥ�����WordPress�֥���Ϥ���롪</b><br>
                            <ul class="quickStartPrTxtBox__list">
                                <li>WordPress��������</li>
                                <li>�ȼ�SSL��ư����</li>
                                <li>�ɥᥤ�����������</li>
                            </ul>
                        </div>
                        <div class="formPartsInfo">
                            <span class="formPartsInfo__ttl">�ܥ��ץ����˴ؤ��뤴��ա�</span>
                            <div>
                                <ul class="ul">
                                    <li>����ʧ��ˡ�ϥ��쥸�åȥ�����ʧ��������ʧ���ΤߤȤʤ�ޤ���</li>
                                    <li>���������ߤ�Ʊ���˥����С�����Τ���ʧ����ȯ�����ޤ���</li>
                                    <li><b class="colorRed">{$specs.services.xserver.trial_days}����̵���Τ�����֤Ϥ���ޤ���</b></li>
                                    <li>�����С��ΰ�ž�ˤ��б����Ƥ��ޤ���</li>
                                </ul>
                            </div>
                        </div>
                        <input type="checkbox" name="quick_start" value="1" id="quick_start" {if $form.quick_start}checked="checked" {/if}/>
                        <label for="quick_start" class="checkbox">���Ѥ���</label>
                        {include file="register/server/xserver/form_message_list.tpl" target="quick_start"}
                    </div>
                </div>

                <div class="form__item form__required quick_start_group" style="display: none">
                    <div class="form__head">
                        <label for="kikan">�����С��η������</label><span class="label label--hissu">ɬ��</span>
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
                            ����������
                            <span class="price__total friendPriceApply" data-is-display-referral-server="1" style="display: none;">
                                <s class="price__total serverPrice__txt">----��</s>
                                <b class="fPrice">----��</b><b class="fTxt">[��ͧã�Ҳ�ץ����Ŭ��]</b>
                            </span>
                            <span class="price__total serverPrice__txt" data-is-display-referral-server="0">----��</span>
                            <span class="price__pr PricePr" style="display: none"></span>
                        </p>
                        <span class="note">
                            ����Ϥ��������򤷤����֤Ǽ�ưŪ�˹�������ޤ���<br>
                            ���֤��ѹ��伫ư�����β���Ϥ��ĤǤ�Ԥ��ޤ���
                        </span>
                        {include file="register/server/xserver/form_message_list.tpl" target="register_month"}
                    </div>
                </div>
            </div>
            <!-- /.form__itemList -->

            <div class="quick_start_group" style="display: none">
                <h2 class="form__ttl">�ɥᥤ���������</h2>
                <div class="form__itemList">
                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="domainname">�����ɥᥤ��̾</label><span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <aside class="campaignBalloon cpInfo" id="campaign_domain_info" style="display: none">
                            </aside>
                            <div class="afterInfo" style="display: none">
                                <span class="afterInfo__ttl">����ǧ��</span>̵����ŵ���оݤǤϤʤ��ɥᥤ�����򤵤�Ƥ��ޤ���
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
                                ��Ϣ�����ӥ�<img src="./xserver/img/xdomain_ico.png?date=241204" alt="XServer�ɥᥤ��">�Ǽ�갷���Τ����ȼ��ɥᥤ��������ǽ�Ǥ���<br>
                                ����������ȼ��ɥᥤ���1ǯ���Ȥ˼�ư�Ƿ��󹹿�����ޤ���<br>
                                ��������ŵ��̵���ɥᥤ����������ư�����Ϥ��ĤǤ�����ǽ�Ǥ���<br>
								���������߻��ϡ����ȼ��ɥᥤ��1ǯ̵����ŵ�פ���ŵ��Ŭ�ѤǤ��ޤ���
                            </span>

                            <span class="note">
                                ���ɥᥤ����軰�Ԥ������ʰܴɤ��ɻߤ��뤿�ᡢ�쥸���ȥ��å���������ȼԥ�å���ͭ���ʾ��֤Ǽ�������ޤ���<br>
                                �ɥᥤ��μ����塢¾�Ҥإɥᥤ���ܴɤ���ݤϡ��쥸���ȥ��å���������ȼԥ�å��β�������Ԥ�ɬ�פ�����ޤ���
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.form__itemList -->

                <h2 class="form__ttl">WordPress����</h2>
                <div class="form__itemList">
                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wptitle">�֥�̾</label><span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <input id="wp_blogname" type="text" name="wp_blogname" value="{$form.wp_blogname}" x-data-required="true" placeholder="My Blog" class="sizeLong" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_blogname"}
                            <span class="note">����127ʸ����Ⱦ��255ʸ���˰���<br>
                            ���󥹥ȡ����Ǥ��ѹ���ǽ�Ǥ�</span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wpusername">�桼����̾</label><span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <input type="text" id="wp_username" name="wp_username" value="{$form.wp_username}" x-data-required="true" placeholder="username" class="sizeShort" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_username"}
                            <span class="note">
                                Ⱦ��255ʸ������<br>
                                �ѿ������򡢰��������_-.@�ˤ��Ȥ��ޤ�
                            </span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wppassword">�ѥ����</label><span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <input jq-area-id="wordpressAdminPasswordInput" type="password" id="wppassword" class="sizeShort" name="wp_password_plain" x-data-required="true" value="">
                            <i class="ico ico--eyeClose togglePassword vam" data-toggle-target-id="wppassword" aria-hidden="true"></i>
                            <div class="pwGeneration">
                                <button type="button" jq-event-id="btnWordpressAdminPasswordGenerate" class="btn btn--secondary--def dispIB font14 isNoloading">�ѥ��������</button>
                                <button type="button" jq-event-id="btnCopyToClipboard" class="btn btn--secondary--def dispIB font14 isNoloading">
                                    ���ԡ�
                                    <span jq-area-id="completeCopyToolTip" class="copyBalloon">�ѥ���ɤ򥳥ԡ����ޤ���</span>
                                </button>
                            </div>
                            <div jq-area-id="wordpressAdminPasswordStrength" class="font12 pwSafety pwSafety--def">
                                �ѥ���ɤΰ�������<span></span>
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <ul class="form__msgList" x-data-target="wp_password_plain"></ul>
                            <span class="note">
                                Ⱦ��7ʸ���ʾ塢64ʸ������<br>
                                �ѿ������������!#$%=~^|:_[].+-*/&#123;&#125;@&()<>`;?,�ˤ��Ȥ��ޤ�
                            </span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wpmailaddress">�᡼�륢�ɥ쥹</label><span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <input type="text" id="wp_mailaddress" name="wp_mailaddress" value="{$form.wp_mailaddress}" x-data-required="true" placeholder="name@example.com" class="sizeShort" />
                            {include file="register/server/xserver/form_message_list.tpl" target="wp_mailaddress"}
                            <span class="note">���󥹥ȡ����Ǥ��ѹ���ǽ�Ǥ�</span>
                        </div>
                    </div>

                    <div class="form__item form__required">
                        <div class="form__head">
                            <label for="wp_theme">�ơ���</label>
                            <div class="tooltip">
                                <i class="tooltip__target"></i>
                                <div class="tooltip__content">
                                    <p>
                                        �����ȤΥǥ�����䵡ǽ�ʤɤ����ƥ�ץ졼�ȤǤ���<br>
                                        ������Ӥˤ��碌�����֤Τ���������Ǥ���<br>
                                        �ޤ�����ڤ��Ż�ʤ�̵���ơ��ޡ����ۤ䥫�����ޥ����Τ��䤹�������ݡ��ȽŻ�ʤ�ͭ���ơ��ޤ򤪤����ᤷ�ޤ���<br>
                                        �ơ��ޤϤ��Ȥ���������̤Ǥ������ǽ�Ǥ���<br>
                                        �ޤ������Ѥ���ơ��ޤϤ��ĤǤ��ѹ�����ǽ�Ǥ���
                                    </p>
                                </div>
                            </div>
                            <span class="label label--hissu">ɬ��</span>
                        </div>
                        <div class="form__body">
                            <div>
                                <input type="radio" name="wp_theme" id="default" value="default" {if !$form.wp_theme || $form.wp_theme === 'default'}checked{/if}>
                                <label for="default" class="radio radio--wp_theme">WordPress�ǥե���ȥơ���</label>
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
                                            <span class="wp_theme_name">{$freeTheme.display_name}</span><div class="wp_theme_planGroup"><span class="label label--free">̵��</span></div>
                                            <span class="wp_theme_purpose">������ӡ�{$freeTheme.purpose}</span>
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
                                                    {if count($paidTheme.plans) > 1}<span style="padding-left: 10px; font-size: 10px; color: #E10000; font-weight: bold;">2/4�ޤǥ����ڡ����桪</span>{/if}
                                                {/if}
                                            </span>
                                            {assign var="subscription_counter" value=0}
                                            <div class="wp_theme_planGroup">
                                            {foreach from=$paidTheme.plans key=plan item=item}
                                                {if $plan == 'purchase'}
                                                    <span class="label label--purchase">�㤤�ڤ�</span>
                                                    {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                        <span class="wp_theme_discount_friendprice">{$item.referral_price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                    {else}
                                                        <span class="wp_theme_discount_price">{$item.discount_price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                    {/if}
                                                    <span class="wp_theme_regular_price">{$item.price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                {/if}
                                                {if $plan == 'subscription_yearly' || $plan == 'subscription_monthly'}
                                                    {if $subscription_counter == 0}<span class="label label--subscription">���֥���</span>{/if}
                                                    {assign var="subscription_counter" value="`$subscription_counter+1`"}

                                                    {if count($paidTheme.plans) == 1 && is_null($item.discount_price)}
                                                        <span>{$item.price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                    {elseif count($paidTheme.plans) == 1}
                                                        <span class="wp_theme_discount_price">{$item.discount_price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                        <span class="wp_theme_regular_price">{$item.price|number_format}��{if $subscription_counter > 0}/ǯ{/if}</span>
                                                    {/if}
                                                {/if}
                                            {/foreach}

                                            {if count($paidTheme.plans) > 1}
                                                {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                    <span class="wp_theme_discount_friendprice">{$paidTheme.plans.subscription_monthly.referral_price|number_format}��/���</span>
                                                    <span class="wp_theme_regular_price">{$paidTheme.plans.subscription_monthly.price|number_format}��/���</span>
                                                {else}
                                                    <span class="wp_theme_discount_price">{$paidTheme.plans.subscription_monthly.price|number_format}��/���</span>
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
                                                                    <option value="0" {if $form.wptheme_month == "0"}selected="selected"{/if}>{$display_price|number_format}�ߡ��㤤�ڤ꡿�����ڡ�����ʡ�</option>
                                                                {else}
                                                                    <option value="0" {if $form.wptheme_month == "0"}selected="selected"{/if}>{$display_price|number_format}�ߡ��㤤�ڤ��</option>
                                                                {/if}
                                                            {elseif $plan == 'subscription_yearly'}
                                                                {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                                    <option value="12" {if $form.wptheme_month == "12"}selected="selected"{/if}>{if $item.discount_price}{$display_price|number_format}��/ǯ�ʥ��֥����������ڡ�����ʡ�{else}{$display_price|number_format}��/ǯ�ʥ��֥�����{/if}</option>
                                                                {else}
                                                                    <option value="12" {if $form.wptheme_month == "12"}selected="selected"{/if}>{$display_price|number_format}��/ǯ�ʥ��֥�����</option>
                                                                {/if}
                                                            {elseif $plan == 'subscription_monthly'}
                                                                <option value="1" {if $form.wptheme_month == "1"}selected="selected"{/if}>{$display_price|number_format}��/��ʥ��֥�����</option>
                                                            {/if}
                                                        {/foreach}
                                                    </select>
                                                </div>
                                            {/if}
                                            <span class="wp_theme_purpose">������ӡ�{$paidTheme.purpose}</span>
                                            <span class="note--wp_theme">{$paidTheme.description}</span>
                                            {if $app.can_applied_referral_xwrite && $paidTheme.is_target_referral}
                                                <span class="note--wp_theme_friend">
                                                    �֤�ͧã�Ҳ�ץ����פ�Ŭ�Ѥ���Ƥ��ޤ���
                                                    <br/>
                                                    �����֥����ץ��Ͻ��Τ���ʧ���Τ߾嵭���ʤ�Ŭ�Ѥ���ޤ���
                                                    {if $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= '2025-02-04 23:59:59'}
                                                        <br/>
                                                        �����ߤβ��ʤϡ������ڡ������Ȥ�ͧã�Ҳ�ץ�����ξ����Ŭ�Ѥ��줿��ۤǤ���
                                                    {/if}
                                                </span>
                                            {/if}
                                        </label>
                                    </div>
                                {/foreach}
                                <div class="tac" id="js-paid-theme-expand-text">
                                    <span class="paid_theme_expand__text">¾�Υơ��ޤ�ɽ������</span>
                                </div>

                            </div>

{*                            {foreach from=$app.wp_themes item=wpTheme name=iterate}*}
{*                                {assign var="themeName" value=$wpTheme.name}*}
{*                                <div class="{if !$smarty.foreach.iterate.last}mb5{/if}">*}
{*                                    <input type="radio" name="wp_theme" id="{$wpTheme.name}" value="{$wpTheme.name}" data-child-theme="{$wpTheme.child_theme_name}" data-theme-option-required="{$app.wp_child_theme_required_info.$themeName}" {if $form.wp_theme === $wpTheme.name}checked{/if}>*}
{*                                    <label for="{$wpTheme.name}" class="radio radio--wp_theme">*}
{*                                        {$wpTheme.display_name} / {if $wpTheme.price === '0'}*}
{*                                            ̵��*}
{*                                        {else}*}
{*                                            {if $wpTheme.name === 'xwrite'}*}
{*                                                <span style="text-decoration: line-through; color: gray;">���{$wpTheme.price|number_format}��</span> 1ǯ��̵��*}
{*                                                <span class="note--wp_theme_cp">�ڥ����ڡ��󳫺��桪�۾ܺ٤�<a href="https://xwrite.jp/campaign_220907/" target="_blank">�����顪</a></span>*}
{*                                            {else}*}
{*                                                {$wpTheme.price|number_format}��*}
{*                                            {/if}*}
{*                                        {/if}*}
{*                                        <span class="note--wp_theme">{$wpTheme.description}</span>*}
{*                                    </label>*}
{*                                </div>*}
{*                            {/foreach}*}
                            <p class="note ml15">WordPress�ơ��ޤ˴ؤ��뤪�䤤��碌�ϡ����ݡ����оݳ��Ȥʤ�ޤ���<br>WordPress�ơ��ޤ��󶡸��ؤ��䤤��碌����������</p>
                        </div>
                    </div>

                    <div class="form__item">
                        <div class="form__head">
                            <label for="wp_theme_option">�ơ��ޥ��ץ����</label><span class="label label--ninni">Ǥ��</span>
                        </div>
                        <div class="form__body">
                            <div class="theme-option--child-theme" style="display: none;">
                                <input type="checkbox" name="install_child_theme" id="install_child_theme" value="1">
                                <label for="install_child_theme" class="checkbox" style="border: none;">
                                    �ҥơ��ޤ򥤥󥹥ȡ��뤹��
                                    <div class="tooltip">
                                        <i class="tooltip__target"></i>
                                        <div class="tooltip__content">
                                            <p>
                                                �ҥơ��ޤȤϥơ��ޤ򥫥����ޥ������뤿����Խ��ѥե�����Ǥ���<br>
                                                �ơ��ޤ򥫥����ޥ���������ϡ��ҥơ��ޤΥ��󥹥ȡ��롦���Ѥ�侩���Ƥ��ޤ���
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
                                <label for="wp_plugin">�ץ饰����</label><span class="label label--ninni">Ǥ��</span>
                            </div>
                            <div class="form__body">
                                {foreach from=$app.pluginIncList key=name item=plugin}
                                    <div class="wp_plugin__item">
                                        <input type="hidden" name="install_wp_inc_plugin[{$name}]" value="0">
                                        <input type="checkbox" name="install_wp_inc_plugin[{$name}]" id="{$name}" value="1" {if $form.install_wp_inc_plugin[$name] !== '0'}checked="checked"{/if}>
                                        <label for="{$name}" class="checkbox" style="border: none;">
                                            <span class="wp_plugin_name">{$plugin.display_name}</span>
                                            <a href="{$plugin.site_url}" target="_blank">����������</a>
                                        </label>
                                        <span class="note--wp_plugin">{$plugin.description}</span>
                                    </div>
                                {/foreach}
                                <p class="note ml15">WordPress�ץ饰����˴ؤ��뤪�䤤��碌�ϡ����ݡ����оݳ��Ȥʤ�ޤ���<br>WordPress�ץ饰������󶡸��ؤ��䤤��碌����������</p>
                            </div>
                        </div>
                    {/if}
                </div>
                <!-- /.form__itemList -->
            </div>

            {if $form.form_agencycd}
            <section class="mb30">
                <h2 class="form__ttl">{$smarty.const.G_ACCOUNT_TYPE}�ӥ��ͥ��ѡ��ȥʡ����餴�Ҳ�Τ�����</h2>
                <div class="form__item">
                    <div class="form__head">
                        <label for="form_agencycd">�輡Ź������</label><span class="label label--ninni">Ǥ��</span>
                    </div>
                    <div class="form__body">
                        <input id="form_agencycd" type="text" name="form_agencycd" value="{$form.form_agencycd}">
                        {include file="register/server/xbiz/form_message_list.tpl" target="form_agencycd"}
                    </div>
                </div>
            </section>
            {/if}

            <!-- ���٤����Ϥ���λ���Ƥ����� -->
            <section class="form__btnArea order_body_btn">
                <ul id="api_error" style="display: none;"></ul>
                <input type="button" id="charges" value="{$smarty.const.G_ACCOUNT_NAME}����Ͽ�ؿʤ�" class="form__nextBtn btn btn--primary sizeMiddle">
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
            �ơ��ޥꥹ�Ȥι⤵Ĵ��
            --------------------------------------
            �� setHeight()
               maxDisplayNum �ޤǤι⤵��׻������ơ��ޥꥹ�����Ǥ� style �����ꤷ�ޤ�
               ��ɽ�����Ϲ⤵�������Ǥ��ʤ����ᡢ���Ǥ�ɽ�����줿��˸ƤӽФ��Ƥ�������
            �� removeHeight()
               �ơ��ޥꥹ�����Ǥ� style �����ꤵ�줿�⤵�������ޤ�
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

        // ��ѽ���
        let charge_button = $("#charges");
        charge_button.show();
        charge_button.on("click", function() {
            $("#api_error>.api_error_message").remove();
            $(this).prop('disabled', true);
            $(this).css({'box-shadow':'0px 0 2px 0 rgba(0,0,0,0.2)', 'opacity':'0.6'});

            // ����������ɽ��
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
                $("#form_server_id_box").find("ul:contains('�������ळ�Ȥ���ǽ�Ǥ�')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('������Ͽ�ѤߤΥ����С�ID�Ǥ�')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('�����С�ID�����Ϥ��Ƥ�������')").find("li").remove();
                $("#form_server_id_box").find("ul:contains('�����С�ID�����Ϥ���Ƥ��ޤ���')").find("li").remove();

                checkCampaignDomain($("input[name='id_server_plan']:checked").val(), $(".serverLimit").val());
                updatePrice($(".serverLimit").val(), $("input[name='id_server_plan']:checked").val());
                checkDomain($("input[name='id_server_plan']:checked").val(), $(".serverLimit").val(), $(".domainInputTxt").val(), $(".domainList").val(), 1);
                quickstart_flg(true);
            }

            // �����С��ץ������
            changeServerPlan();

            // �����С��ץ���ѹ���
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
                let hen = $(".domainInputTxt").val().replace(/[��-�ڣ�-����-��]/g,function(s){
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
                this.$priceEl.text(comma(price) + '��');
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

            $('.serverPrice__txt').text('�׻����');
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
                    $('.serverPrice__txt').text(comma(Number(data.total_price)) + String('��'));
                    if (month > 3) {
                        if (Number(data.total_price) < Number(data.compare_price)) {
                            $('.PricePr').show().html(String('3���������ȡ�����<span class="price__diff">') + comma(Number(data.compare_price) - Number(data.total_price)) + String('</span>�ߤ�����'));
                        }
                    } else {
                        $('.PricePr').show().html('6����ʾ�η����<br class="visible-l">������⤬�����ˤʤ�ޤ���');
                    }

                    if ($('.cashback_flg').length){
                        if (month > 6) {
                            if (Number(data.cashback_amount) < Number(data.total_price)) {
                                $('.PricePr').show().html(String('����å���Хå���<span class="price__diff">�¼�') + comma(Number(data.total_price) - Number(data.cashback_amount)) + String('��</span>'));
                            }
                        } else {
                            $('.PricePr').show().html('12����ʾ�Τ������<span class="price__diff">����å���Хå���</span>');
                        }
                    }

                    if (data.referral_discount_amount) {
                        referralServerPrice.enable(data.total_price + data.referral_discount_amount);
                        if (month > 3) {
                            // ����å���Хå������ڡ���»���Ϻ��ۤ�Ҳ�ץ�������ŵ�ȹ�碌����Τˤ���
                            if ($('.cashback_flg').length){
                                if (month >= 12) {
                                    $('.price__diff').text(String('�¼�') + comma(Number(data.total_price) - Number(data.cashback_amount) + Number(data.referral_discount_amount)) + String('��'));
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

            $('#domain_message').show().html("<li id='is_loading'><span class='isLoading'>�������</span><li>");

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
                        $('#domain_message').show().html('<li><span class="isError">���ܸ�ɥᥤ�󤬼����Ǥ��ʤ��ɥᥤ��μ���Ǥ���</span></li>');
                    } else if (data.already_set_domain_flag) {
                        $('.domainInputTxt').addClass('isError');
                        $('#domain_message').show().html('<li><span class="isError">���Ǥ˻��Ѥ���Ƥ���ɥᥤ��̾�Ǥ���</span></li>');
                    } else if (!data.can_get_domain_flag || data.x_domain_record_flag) {
                        $('.domainInputTxt').addClass('isError');
                        $('#domain_message').show().html('<li><span class="isError">���Ǥ˼�������Ƥ��뤫���ѤǤ��ʤ��ɥᥤ��̾�Ǥ���</span></li>');
                    } else if (data.campaign_domain_flag) {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html('<li><span class="isSuccess">�֥ɥᥤ��ץ쥼��ȥ����ڡ������ŵ�ˤ��0�ߤǼ�����ǽ��</span></li>');
                    } else if (data.present_domain_flag) {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html('<li><span class="isSuccess">�ץ����ŵ�ˤ��0�ߤǼ�����ǽ��</span></li>');
                    } else {
                        $('.domainInputTxt').removeClass('isError');
                        $('.domainInputTxt').addClass('isSuccess');
                        $('#domain_message').show().html(String('<li><span class="isSuccess">') + comma(Number(data.total_domain_price)) + String('�ߤǼ�����ǽ��2ǯ�ܰʹߤϹ������⤬Ŭ�Ѥ���ޤ���') + String('</span></li>'));
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
                        $('#campaign_domain_info').show().html('<h3 class="campaignBalloon__ttl"><span>�����С�����������ȼ��ɥᥤ�󤬤��ä�0�ߡ�</span></h3><p>���ʤ饵���С�������ǥɥᥤ��0�ߡ������С���������Ϲ�����0�ߡ�<br>�оݥɥᥤ�� ' + data.campaign_domaintype_text + ' �ʤ�0�ߤǼ�����ǽ����������⤺�ä�0�ߡ�</p>');
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
            // �ѥ���������ܥ��󥯥�å����ν���
            $(document).off('click', '[jq-event-id="btnWordpressAdminPasswordGenerate"]'); // ��ʣ�ɻ�
            $(document).on('click', '[jq-event-id="btnWordpressAdminPasswordGenerate"]', function () {
                const passwordInput = $('[jq-area-id="wordpressAdminPasswordInput"]');
                passwordInput.val(wordpressAdminPasswordGenerate());
                setWordpressAdminPasswordStrength(passwordInput.val());
            });

            /**
            * Wordpress�����ԥѥ���ɤ�����
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
                    // �ѻ� + ���� or ���椬�ҤȤİʾ�ޤޤ�Ƥ��ʤ����Ϻ�����
                    if (!/[a-zA-Z]/.test(password) || !regex.test(password)) {
                        return generatePassword(); 
                    }
    
                    // �ѥ����ɾ�����ǹ�Ǥʤ����Ϻ�����
                    if (evaluatePasswordStrength(password) !==3) {
                        return generatePassword();
                    }
                    return password;
                }

                return generatePassword();
            }

            // �ѥ���ɶ��٤Υꥢ�륿����ɾ��
            $(document).off('change', '[jq-area-id="wordpressAdminPasswordInput"]'); // ��ʣ�ɻ�
            $(document).on('change', '[jq-area-id="wordpressAdminPasswordInput"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val()
                setWordpressAdminPasswordStrength(password)
            });
            $(document).off('keyup', '[jq-area-id="wordpressAdminPasswordInput"]'); // ��ʣ�ɻ�
            $(document).on('keyup', '[jq-area-id="wordpressAdminPasswordInput"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val()
                setWordpressAdminPasswordStrength(password)
            });
    
            /**
             * �ѥ���ɶ��٤�ɾ����̤�ɽ��
             * @param password
             */
            function setWordpressAdminPasswordStrength(password) {
                const strengthViewer = $('[jq-area-id="wordpressAdminPasswordStrength"]');
                // ����ɾ����ꥻ�å�
                strengthViewer.removeClass(function(index, className) {
                    return (className.match(/\bpwSafety--\S+/g) || []).join(' ');
                });

                if(password.length === 0) {
                    strengthViewer.addClass('pwSafety--def');
                    return;
                }

                let score = 0;
                // �������˱�����ɾ����ɽ��
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
             * �ѥ���ɶ��٤�ɾ��
             * @param password
             * @returns {number}
             */
            function evaluatePasswordStrength(password) {
                let score = 0;

                // 1. �����֤���Ϣ³ʸ���θ���
                if (/(.)\1{2,}/.test(password)) {
                    score -= 1;
                }

                if (/(012|123|234|345|456|567|678|789|890|abc|xyz)/i.test(password)) {
                    score -= 1;
                }

                // 2. �����ܡ��ɥѥ�����θ���
                let keyboardPatterns = [
                    "qwerty", "asdfgh", "zxcvbn", "123456", "qazwsx", "1qaz2wsx", "!@#$%^",
                ];
                for (let pattern of keyboardPatterns) {
                    if (password.toLowerCase().includes(pattern)) {
                        score -= 1;
                        break;
                    }
                }

                // 3. ʸ����¿������ɾ��
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

                // 4. �ѥ���ɤ�Ĺ����ɾ��
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

                return Math.max(0, Math.min(3, score)); // �������� 0 ? 3 ���ϰϤ�����
            }

            // �ѥ���ɥ��ԡ��ܥ��󥯥�å����ν���
            $(document).off('click', '[jq-event-id="btnCopyToClipboard"]'); // ��ʣ�ɻ�
            $(document).on('click', '[jq-event-id="btnCopyToClipboard"]', function () {
                const password = $('[jq-area-id="wordpressAdminPasswordInput"]').val();
                navigator.clipboard.writeText(password);

                const completeCopyToolTip = $('[jq-area-id="completeCopyToolTip"]');

                // ���٥ꥻ�åȤ��Ƥ��饢�˥᡼�����¹�
                completeCopyToolTip.removeClass('isShow').hide();
                $(this).css('opacity', '');

                // �����ԤäƤ���ɽ���ʥ��˥᡼�������̤Τ����
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

    <!-- pardot�ȥ�å��󥰥��� -->
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
