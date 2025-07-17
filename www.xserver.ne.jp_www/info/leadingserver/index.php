<?php
include("../../conf.php");

mb_language("ja");
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');
?>
<!DOCTYPE html>
<html lang="ja" class="no-js">
<head>
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
    'optimize_id': 'GTM-WGFNFH8',
    'linker': {
      'accept_incoming': true,
      'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp']
    }
  });

  gtag('config', 'UA-3789601-22', {
      'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'secure.xserver.ne.jp', 'www.xfree.ne.jp', 'www.shin-server.jp', 'www.wpx.ne.jp', 'secure.wpx.ne.jp',]
      }
  });
</script>
<meta charset="euc-jp">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="copyright" content="Copyright XServer Inc.">
<meta name="keywords" content="��󥿥륵���С�,��®,�ⵡǽ,�������">

<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="index" href="<?= $SITE_URL ?>sitemap.php" title="�����ȥޥå�">
<link rel="shortcut icon" href="<?= $SITE_URL ?>img/common/favicon.ico">
<link rel="apple-touch-icon" href="<?= $SITE_URL ?>img/common/apple-touch-icon-precomposed.png">
<noscript>
    <style>.srcset { visibility: visible !important; }</style>
</noscript>
<script src="<?php print_fileURL("js/google.js"); ?>"></script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
<script type="text/javascript">
    var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
    var element = document.documentElement;
    element.classList.remove('no-js');
</script>
<link href="css/site.css?<?php echo time(); ?>" rel="stylesheet">
<link href="css/slick.css" rel="stylesheet">
<title>��������Ԥ������å��������С� ������Υۥ��ƥ��󥰤�꡼�ɤ�������®�����С��� �� <?= $SITE_TITLE; ?></title>
<meta name="description" content="���å��������С��Ǥϡ�����˹�®���İ��ꤷ�������С��Ķ����󶡤��뤿�ᡢ����ü�Υ����С��ޥ������Ѥ��������®�δĶ���¸����Ƥ��ޤ�����AMD EPYC&trade;�ס��������NVMe�׺��ѡ���3���奨�å��������С��Ϥ���ʤ��ߤء�">
<meta property="og:title" content="��������Ԥ������å��������С� ������Υۥ��ƥ��󥰤�꡼�ɤ�������®�����С��� �� <?= $SITE_TITLE; ?>">
<meta property="og:type" content="article">
<meta property="og:description" content="���å��������С��Ǥϡ�����˹�®���İ��ꤷ�������С��Ķ����󶡤��뤿�ᡢ����ü�Υ����С��ޥ������Ѥ��������®�δĶ���¸����Ƥ��ޤ�����AMD EPYC&trade;�ס��������NVMe�׺��ѡ���3���奨�å��������С��Ϥ���ʤ��ߤء�">
<meta property="og:url" content="<?= $SITE_URL."info/leadingserver/" ?>">
<meta property="og:image" content="<?= $SITE_URL."info/leadingserver/img/ogp.png?date=2411" ?>">
<meta property="og:site_name" content="��󥿥륵���С��ڥ��å��������С���">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xserverjp">
<link rel="canonical" href="<?= $SITE_URL."info/leadingserver/" ?>">
</head>
<body id="pid-info">
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="js/jquery.min.js"></script>
<script>document.write('<script src="<?php print $SECURE_URL; ?>xinfo/js/header/annotation.js?date=' + new Date().getTime() + '"><\/script>');</script>

<?php include("../../top.php"); ?>
<header class="header">
    <div class="wrap">
        <div class="header__unit">
            <div class="sitelogo"><a class="hover" href="<?= $SITE_URL ?>"><img src="<?= $SITE_URL ?>img/common/img_siteid.svg?date=2411" alt="���å��������С�"></a></div>
            <div class="servershare"><img src="img/head_share_no1.png" alt="���������ޤǹ��⥷����No.1"><a href="#servershare">��</a></div>
            <div class="servershare_txt">���������ޤǹ��⥷����<span class="no1">No.1</span><a href="#servershare">��</a></div>
            <div class="registry"><a href="<?= $SECURE_URL;?>xinfo/?action_register_index=on" class="btn btn__primary btn__s" id="ga-x-apply-lp-header">�����������̵��10����</a></div>
        </div>
    </div>
</header>
<main class="main">
    <section class="keyvisual">
        <div class="kv__copy">
            <div class="wrap">
                <h1 class="kv__ttl">
                    <span class="row__01 js__anime--fadein"><img src="img/kv_ttl_01.png" alt="��������Ԥ������å��������С�"></span>
                    <span class="row__02 js__anime--fadein"><img src="img/kv_ttl_02.png" alt="������Υۥ��ƥ��󥰤�꡼�ɤ���"></span>
                    <span class="row__03 js__anime--fadein"><img src="img/kv_ttl_03.png" alt="�����®"><a href="#server" class="anchorlink">���ܺ�</a></span>
                    <span class="row__04 js__anime--fadein"><img src="img/kv_ttl_04.png" alt="�����С���"></span>
                </h1>
            </div>
        </div>
            <p class="kv__desc js__anime--fadein">���å��������С��Ǥϡ�����˹�®���İ��ꤷ�������С��Ķ����󶡤��뤿�ᡢ<br>����ü�Υ����С��ޥ������Ѥ��������®�δĶ���¸����Ƥ��ޤ���</p>
    </section>
    <section class="section section__server" id="server">
        <div class="wrap">
            <h2 class="section__ttl js__anime--fadein">����Ū�ʥ��ڥå���<br>�ֹ����®�פΥ����С��Ķ���</h2>
            <p class="section__desc js__anime--fadein">���Τ����󶡤򳫻Ϥ��륵���С��ν���®�٤�Ĵ�������Ȥ���<br>����μ��ץ�󥿥륵���С������ӥ��ˤ����ơ��Ǥ�®���Ķ��Ǥ���Ȥη�̤��ФƤ��ޤ���</p>
            <div class="sv__graph js__anime--fadein">
                <div class="sv__graph--image">
                    <div class="graph js__anime--graph">
                        <div class="bar__container">
                            <div class="graph__caption">(�ô֥ꥯ�����ȿ�)</div>
                            <div class="bar__group">
                                <div class="bar xserver">
                                    <div class="bar__body">
                                        <div class="colgroup">
                                            <div class="company" style="color: #ffffff; font-weight: bold"><span class="alphabet">���å��������С�</span></div>
                                            <div class="speed"><span class="num">723.446</span></div>
                                            <div class="balloon"><img src="img/img_graph_server_balloon.png" alt="�����С�®��No.1"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bar other__a">
                                    <div class="bar__body"><div class="company"><span class="alphabet">A</span>��</div><div class="bar__speed"><span class="num">307.762</span></div></div>
                                </div>
                                <div class="bar other__b">
                                    <div class="bar__body"><div class="company"><span class="alphabet">B</span>��</div><div class="bar__speed"><span class="num">87.552</span></div></div>
                                </div>
                            </div>
                            <div class="bar__rank">
                                <div class="rank xserver"><img src="img/img_rank_01.png" alt="1��"></div>
                                <div class="rank other__a"><img src="img/img_rank_02.png" alt="2��"></div>
                                <div class="rank other__b"><img src="img/img_rank_03.png" alt="3��"></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sv__graph--footer" id="servershare">
                    <ul class="caution__list">
                        <li id="annotation-server_speedNo1_02">��</li>
                        <li id="annotation-shareNo1_02">���ȳ��Υ�������</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__spec">
        <div class="wrap">
            <h2 class="section__ttl js__anime--fadein">��4����<span class="attention">��AMD EPYC&trade;��</span>����ѡ�<br>������<span class="attention">��NVMe��</span>�б���</h2>
            <p class="section__desc js__anime--fadein"> ����˹�®�������̥��������ˤ⶯���ʤä�����Ū�ʥϥ����ڥå������С�</p>
            <div class="spec__info">
                <section class="infobox js__anime--fadein">
                    <h3 class="infobox__ttl"><span class="maker">��4�����AMD EPYC&trade;�����</span></h3>
                    <div class="infobox__media">
                        <div class="media__image"><img src="img/img_graph_cpu.png" alt="AMD EPYC&trade;"></div>
                        <div class="media__body">
                            <p class="infobox__text">CPU�ˤϡ���4�����AMD EPYC&trade;�פ���Ѥ��ޤ�����</p>
                            <p class="infobox__text">���Ѥ���CPU�ϡ�����Τ�Τ���Ӥ��ơ�<span class="maker">��2.2��<sup>��</sup>��ν�����ǽ��ؤ�ޤ���</span></p>
                            <ul class="infobox__caution">
                                <li>��2024ǯ3�����������Ĵ�١�</li>
                                <li>��CPU��ǽ�ϡ�spec.org��ɾ����̤��Ѥ�����Ӥˤ���Ρ�</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="infobox js__anime--fadein">
                    <h3 class="infobox__ttl">�ɤ߹�����ǽ�Ϻ�����32��<sup>��</sup>��<span class="maker">�������NVMe���б���</span></h3>
                    <p class="infobox__text"><span class="maker">���ƤΥ��ȥ졼���Ǽ�����ι�®��³���󥿡��ե�������NVMe��</span>���б���������˹�®���ɤ߽񤭤��ǽ�Ȥ��륹�ȥ饤�ԥ󥰹����Ȥ��뤳�Ȥǡ�SSD�ι�®��ǽ�����°����Ф����Ȥ��ǽ�Ȥ��ޤ�����<br>������SSD��ԥ奢SSD�ȸƤФ�뽾��Υ����С��Ķ�����Ӥ���<span class="maker">�ɤ߹���®�٤�������32��<sup>��</sup>�˸��夷�ޤ�����</span></p>
                    <ul class="infobox__caution">
                        <li>��2024ǯ3�����������Ĵ�١�</li>
                        <li>��fio���Ѥ������128�������ٻ���Υ�����꡼�ɤΥ��롼�ץå���Ӥˤ���Ρ�</li>
                    </ul>
                    <div class="infobox__image"><img src="img/img_nvme.png?date=240311" alt="�ɤ߹�����ǽ�Ϻ�����32�ܡ��������NVMe���б���"></div>
                </section>
                <div class="infobox__colgroup">
                    <section class="infobox js__anime--fadein">
                        <h3 class="infobox__ttl">��ܥ��꤬1TB����<br class="visible-l">1.5TB�����á�</h3>
                        <p class="infobox__text">��ܥ������ǽ�����1TB����1.5TB�ؤ����ä��Ƥ��ꡢ�ץ���������ǽ����夵���뤳�Ȥǡ�����<span class="maker">��®���İ��ꤷ��ư��</span>���ǽ�Ȥ��Ƥ��ޤ���</p>
                    </section>
                    <section class="infobox js__anime--fadein">
                        <h3 class="infobox__ttl">�����С�������256������<br>����®�������������ǽ��</h3>
                        <p class="infobox__text">�����С��������vCPU���������256�����פ˳�ĥ��������®�ʽ�����ǽ�������ޤ�������������¿��������������ˤ⶯��������ޤǰʾ��<span class="maker">���̤Υ����������Ѥ���</span>���Ȥ���ǽ�Ǥ���</p>
                    </section>
                </div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__history">
        <div class="wrap">
            <div class="history__header">
                <h2 class="section__ttl js__anime--fadein">��˺ǹ�Υ����ӥ����󶡤��뤿��<br>����ü�Υ����С��Ķ����󶡤�³����<br>���å��������С�</h2>
                <p class="section__desc js__anime--fadein">���å��������С��Ǥϡ������ͤ˺ǹ�Υ����ӥ����󶡤���٤���<br>����ޤǾ�˺���ü�Υ����С��Ķ����󶡤�³���Ƥ��ޤ�����</p>
            </div>
            <div class="history__body js__anime--fadein">
                <h3 class="history__ttl"><img src="img/history_ttl.png" alt="SPEC-UP HISTORY"></h3>
                <div class="history__slider">
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2012.png" alt="2012ǯ ��®���İ��ꤷ�������С��Ķ����󶡡�HDD������RAID1����RAID10���ѹ���"></div>
                        <div class="item__spec"><img src="img/history_spec_2012.png" alt="Storage��HDD RAID 1��HDD RAID 10 CPU��6���� Memory��12GB��16GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2013.png" alt="2013ǯ �������̤�1.5�ܤ����̤�����Ŭ��ư��Ķ��򶯲���"></div>
                        <div class="item__spec"><img src="img/history_spec_2013.png" alt="Storage��HDD RAID 10 CPU��6���� Memory��16GB��24GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2015.png" alt="2015ǯ CPU��ǽ�����夷���������̤⤵���4�ܤ����̡�"></div>
                        <div class="item__spec"><img src="img/history_spec_2015.png" alt="Storage��HDD RAID 10 CPU��6������16���� Memory��24GB��96GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2016.png" alt="2016ǯ �����С����פ���������������̤�����������®���İ��ꤷ���Ķ���¸���"></div>
                        <div class="item__spec"><img src="img/history_spec_2016.png" alt="Storage��HDD RAID 10 CPU��16������20���� Memory��96GB��192GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2017.png" alt="2017ǯ ������SSD RAID10��������ѡ��ǥ������ɤ߹���®�٤�48�ܰʾ�˸��塣"></div>
                        <div class="item__spec"><img src="img/history_spec_2017.png" alt="Storage��HDD RAID 10��SSD RAID 10 CPU��20���� Memory��192GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2018.png" alt="2018ǯ Intel Scalable �ץ��å�������Ѥ����ϡ��ɥ�������������������"></div>
                        <div class="item__spec"><img src="img/history_spec_2018.png" alt="Storage��SSD RAID 10 CPU��20������24���� Memory��192GB��256GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2020.png?date=210831" alt="2020ǯ ��2�����AMD EPYC&trade;�ס��������NVMe�׺��ѡ�CPU��ǽ���������̤�������"></div>
                        <div class="item__spec"><img src="img/history_spec_2020.png" alt="Storage��SSD RAID 10��NVMe RAID 10 CPU��24������48���� Memory��256GB��512GB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2021.png?date=240306" alt="2021ǯ ��3�����AMD EPYC&trade;�פ���ѡ�����Ū�ʹ�®�Ķ��ء�"></div>
                        <div class="item__spec"><img src="img/history_spec_2021.png?date=211007" alt="Storage��NVMe RAID 10 vCPU��128���� Memory��512GB��1TB"></div>
                    </div>
                    <div class="slider__item">
                        <div class="item__caption"><img src="img/history_caption_2024.png?date=240306" alt="2024ǯ ��4�����AMD EPYC&trade;�פ���ѡ����ڥå���������������������ʤ��ߤء�"></div>
                        <div class="item__spec"><img src="img/history_spec_2024.png?date=240306" alt="Storage��NVMe RAID 10 vCPU��256���� Memory��1TB��1.5TB"></div>
                    </div>
                </div>
                <div class="history__slider--btns"><button type="button" class="btn prev">����</button><button type="button" class="btn next">����</button></div>
                <ul class="history__slider--indicator">
                    <li class="indicator__01"><button type="button" class="btn btn--indicator is-active"></button></li>
                    <li class="indicator__02"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__03"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__04"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__05"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__06"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__07"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__08"><button type="button" class="btn btn--indicator"></button></li>
                    <li class="indicator__09"><button type="button" class="btn btn--indicator"></button></li>
                </ul>
                <div class="history__chronology"><img src="img/history_bg_arrow.png?date=210831" alt="SPEC-UP HISTORY"></div>
            </div>
        </div>
    </section><!-- /.section -->
    <section class="section section__future" id="js__particle">
        <div class="wrap">
            <div class="section__caption js__anime--fadein"><img src="img/img_tobecontinued.png" alt="To be continued..."></div>
            <h2 class="section__ttl js__anime--fadein">��Ŭ�ʥ����С��Ķ����󶡤Ǥ���褦<br>���å��������С��Ϥ��줫��⤵��˿ʲ���³���Ƥ����ޤ���</h2>
            <div class="registry js__anime--fadein"><a href="<?= $SECURE_URL;?>xinfo/?action_register_index=on" class="btn btn__primary" id="ga-x-apply-lp-footer">�����奵���С��򺣤������!̵��10����</a></div>
            <ul class="snslist js__anime--fadein">
                <li><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-lang="ja" data-url="<?= $SITE_URL."info/leadingserver/" ?>" data-text="��������Ԥ������å��������С� ������Υۥ��ƥ��󥰤�꡼�ɤ�������®�����С��� | ��󥿥륵���С��ڥ��å��������С���">Tweet</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></li>
                <li><div class="fb-like" data-href="<?= $SITE_URL."info/leadingserver/" ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div></li>
                <li><a href="http://b.hatena.ne.jp/entry/<?= $SITE_URL."info/leadingserver/" ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="��������Ԥ������å��������С� ������Υۥ��ƥ��󥰤�꡼�ɤ�������®�����С��� | ��󥿥륵���С��ڥ��å��������С���" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="���Υ���ȥ꡼��ϤƤʥ֥å��ޡ������ɲ�"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="���Υ���ȥ꡼��ϤƤʥ֥å��ޡ������ɲ�" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
            </ul>
        </div>
    </section><!-- /.section -->
</main>
<footer class="footer">
    <p class="copyright"><small>&copy; 2003-<?php print date( "Y" , time() ) ?> XServer Inc.</small></p>
</footer>
<script src="js/particles.min.js"></script>
<script src="js/jquery-numerator.js"></script>
<script src="js/scrollMonitor.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<?php include("../../bottom.php"); ?>