<!doctype html>
<html lang="ja">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3789601-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-3789601-2', {
        'optimize_id': 'GTM-WGFNFH8',
        'linker': {
          'accept_incoming': true,
          'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'ssl.xdomain.ne.jp']
        }
      });
    </script>
    <meta charset="euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="copyright" content="Copyright Xserver Inc.">
    <meta name="keywords" content="">

    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no">
    <link rel="index" href="https://www.xserver.ne.jp/sitemap.php" title="�����ȥޥå�">
    <link rel="shortcut icon" href="https://www.xserver.ne.jp/img/common/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.xserver.ne.jp/img/common/apple-touch-icon-precomposed.png">
    <script src="https://www.xserver.ne.jp/js/google.js?date=20210128"></script>
    <script src="//statics.a8.net/a8sales/a8sales.js"></script>
    <script src="//statics.a8.net/a8sales/a8crossDomain.js"></script>
    <script type="text/javascript">
        var conditions_a8= ["www.xserver.ne.jp","secure.xserver.ne.jp","www.xdomain.ne.jp","domain.xserver.ne.jp","ssl.xserver.ne.jp","ssl.xdomain.ne.jp"];
        (function(html){
            html.className = html.className.replace(RegExp(' ?noJS'),'js');
        })(document.documentElement);
    </script>
    <link href="../css/site.css" rel="stylesheet">
    <title>���䤤��碌�å��å��������С� �ۡ���ڡ�����������</title>
    <meta name="description" content="���å��������С� �ۡ���ڡ����������̤ؤΤ��䤤��碌�ˤĤ��Ƥ����⤷�Ƥ��ޤ���">
    <link rel="canonical" href="https://www.xserver.ne.jp/consulting/">
</head>
<body>
<div id="container">
    <header class="gHeader">
        <div class="gHeaderLogo"><img src="../img/common/logo_xserver_header.png?date=20210513" alt="���å��������С�"></div>
        <div class="gHeaderTtl">�ۡ���ڡ�����������</div>
    </header>
    <main class="contactMain">
        <h1 class="contactTtl">���䤤��碌�ե������̵����</h1>
        <div class="wrap">
            <div class="contactFlow">
                <ul class="contactFlow__list">
                    <li class="isCurrent">���䤤��碌���Ƥ�����</li>
                    <li>�������Ƥγ�ǧ</li>
                    <li>���䤤��碌��λ</li>
                </ul>
            </div>
            <div class="contactForm">
                <form method="post" action="confirm.php">
                    <?php if ($err) {��/*���顼ͭ���ɽ��������ʬ*/ ?>

                        <div class="formError">
                            <ul class="formError__list">
                                <?php foreach ($err as $f) { ?>
                                <li><?php s_print($f); ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                    <?php } ?>

                    <div class="formBody">
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">Xserver���������ID</div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="user_id" value="<?php s_print($_POST['user_id']); ?>"></div>
                                <div class="formRow__item--text">���������ӥ���������Τ����ͤˤ�뤴����ξ��ϡ�Xserver���������ID����������������</div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">Xserver���������</div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input">
                                    <ul class="inputList">
                                        <?php if($_POST['flag'] === '̵') { ?>
                                            <li><label for="a01"><input type="radio" name="flag" value="ͭ" id="a01">ͭ</label></li>
                                            <li><label for="a02"><input type="radio" name="flag" value="̵" id="a02" checked="checked">̵<span class="fs">�ʿ���������ID�����������Ϥ������</span></label></li>
                                        <?php }else{ ?>
                                            <li><label for="a01"><input type="radio" name="flag" value="ͭ" id="a01" checked="checked">ͭ</label></li>
                                            <li><label for="a02"><input type="radio" name="flag" value="̵" id="a02">̵<span class="fs">�ʿ���������ID�����������Ϥ������</span></label></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">��ô����̾</div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="name" value="<?php s_print($_POST['name']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">���̾</div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="co_name" value="<?php s_print($_POST['co_name']); ?>" class="w100"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">�᡼�륢�ɥ쥹</div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="mailaddress" value="<?php s_print($_POST['mailaddress']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">�����ֹ�</div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input"><input type="text" name="tel" value="<?php s_print($_POST['tel']); ?>"></div>
                            </div>
                        </div>
                        <div class="formRow">
                            <div class="formRow__ttl">
                                <div class="formRow__ttl--caption">���䤤��碌����<br><span class="fs">(ʣ��������)</span></div>
                                <div class="formRow__ttl--required"><span class="required">ɬ��</span></div>
                            </div>
                            <div class="formRow__item">
                                <div class="formRow__item--input">
                                    <ul class="inputList">
                                        <li>
                                            <label for="cd01"><input type="checkbox" id="cd01" name="contact_detail_list[company]" value="�ۡ���ڡ�����ҤξҲ�" <?php { if($_POST['contact_detail_list']['company'] != ''){ echo 'checked="checked"'; } } ?>>�ۡ���ڡ�����ҤξҲ�</label>
                                        </li>
                                        <li>
                                            <label for="cd02"><input type="checkbox" id="cd02" name="contact_detail_list[price]" value="���ξ���" <?php { if($_POST['contact_detail_list']['price'] != ''){ echo 'checked="checked"'; } } ?>>���ξ���</label>
                                        </li>
                                        <li>
                                            <label for="cd03"><input type="checkbox" id="cd03" name="contact_detail_list[renewal]" value="��˥塼���������" <?php { if($_POST['contact_detail_list']['renewal'] != ''){ echo 'checked="checked"'; } } ?>>��˥塼���������</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="formFooter">
                        <div class="formAgree">
                            <p class="formAgree__text">���䤤��碌�κݤˤϡ�<a href="../../support/support_privacy.php" target="_blank">�Ŀ;���μ�갷���ˤĤ���</a>�פ��ɤߤ���������<br>���餫����Ʊ�դξ塢���䤤��碌����������</p>
                            <div class="formAgree__check"><label for="agree"><input type="checkbox" name="flag_privacy" value="1" id="agree">�Ŀ;���μ�갷���ˤĤ���Ʊ�դ���</label></div>
                        </div>
                        <div class="formSend"><button type="submit" class="btn formBtn confirm">�������Ƥ��ǧ����</button></div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <div class="contactFooter">
        <address>&copy; 2003-<?php echo date("Y"); ?> Xserver Inc.</address>
    </div>
</div>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>