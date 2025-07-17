<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>
<?php require_once("price_list.php"); ?>

<link href="<?php print_fileURL("css/contents/price.css"); ?>" rel="stylesheet">

<title>����ץ����� | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="����ץ��ˤĤ��ơ����פʵ�ǽ����ʤΰ㤤����ӤǤ��ޤ����������Ϸ�����֤˱����ư¤��ʤ�Τǡ����ΰ㤤�����⥷�ߥ�졼�����Ǥ���ǧ����������">

</head>

<body id="pid-price">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">

    <section class="main holder-sml" role="main">

        <header class="main-header">
            <h2 class="ttl"><span class="label label_ttl-price"><i class="ico ico_tag"></i>����</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <p class="ttl"><span class="label">����ץ��</span></p>
        <aside class="bnr">
            <p class="tac font-bold mb5 font-l">�� <span class="orange">9/4(��)17���ޤǡ�</span>��</p>
            <div class="mb25">
                <a id="ga-xs-under-cpBnr" href="../campaign/campaign_250703.php"><img class="hover fluid-sm" src="../img/campaign/250703/campaign_banner_772-130.png" alt="Ⱦ�ۥ���å���Хå������ڡ��󡪰���Ū�ϥ����ڥå������С����¼����495�ߤ���Ȥ��롪"></a>
            </div>
        </aside>

        <section class="section pricePagelink">
            <ul>
                <li>
                    <a href="#planComparison" class="button button01">
                        <img src="../img/price/pricepagelink_ico_01.svg" alt="">
                        <span>�ץ�����</span>
                    </a>
                </li>
                <li>
                    <a href="#priceList" class="button button01">
                        <img src="../img/price/pricepagelink_ico_02.svg" alt="">
                        <span>����ɽ</span>
                    </a>
                </li>
                <li>
                    <a href="#priceSimulation" class="button button01">
                        <img src="../img/price/pricepagelink_ico_03.svg" alt="">
                        <span>���⥷�ߥ�졼�����<br>�������Ѥ�</span>
                    </a>
                </li>
            </ul>
        </section>

        <section class="section section--price" id="planComparison">
            <h3 class="section_ttl mb10">�ץ�����</h3>
            <div class="section_body">
                <p class="mb5 tar font-s">���ǹ���</p>

                <table class="table runningTable<?php if ( $runningCpFlag01 ) echo ' is--runningCp01'; if ( $runningCpFlag02 ) echo ' is--runningCp02';  ?>">
                    <thead class="runningTable__head">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col" class="cell_plan standard">�����������</th>
                            <th scope="col" class="cell_plan premium">�ץ�ߥ���</th>
                            <th scope="col" class="cell_plan business">�ӥ��ͥ�</th>
                        </tr>
                        <tr class="tr_desc">
                            <th scope="col"></th>
                            <th scope="col">�����Ѥ�ͥ�줿<br>�͵��ץ��</th>
                            <th scope="col">�絬�ϥ����Ȥ�<br>���Ĥˤ�������</th>
                            <th scope="col">�����ԥ桼��������ʤ�<br>ˡ�͸���</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr_monthlyPrice">
                            <th class="row">
                                <div class="th_priceTxt th_monthlyPriceInr">�������
                                    <?php if ( $runningCpFlag ) echo '<span class="txtCpBalloon">�����ڡ�����!</span>'; ?>
                                </div>
                            </th>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="�����������">
                                    <span class="runningPrice">
                                        <?php if ($standardPlans['36']['cpType'] === 1): // �����CP�� ?>
                                            <s><?php echo $standard36Price; ?>�ߡ�</s><br class="hidden-s">
                                                    <span class="runningPriceArrow visible-s"> �� </span>
                                                    <span class="runningPrice--cp"><?php echo $standard36PriceCp; ?><span class="font-m">�ߡ�</span></span>
                                        <?php elseif ($standardPlans['36']['cpType'] === 2): // ����å���Хå�CP�� ?>
                                            <?php echo $standard36Price; ?>�ߡ�<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">����å���Хå���</span><br>
                                                <span class="font-l">�ڼ¼�<?php echo $standard36PriceCp; ?>�ߡ���</span>
                                            </span>
                                        <?php else: // �̾�� ?>
                                            <span class="runningPrice--usual"><?php echo $standard36Price; ?><span class="font-m">�ߡ�</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="�ץ�ߥ���">
                                    <span class="runningPrice">
                                        <?php if ($premiumPlans['36']['cpType'] === 1): // �����CP�� ?>
                                            <s><?php echo $premium36Price; ?>�ߡ�</s><br class="hidden-s">
                                            <span class="runningPriceArrow visible-s"> �� </span>
                                            <span class="runningPrice--cp"><?php echo $premium36PriceCp; ?><span class="font-m">�ߡ�</span></span>
                                        <?php elseif ($premiumPlans['36']['cpType'] === 2): // ����å���Хå�CP�� ?>
                                            <?php echo $premium36Price; ?>�ߡ�<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">����å���Хå���</span><br>
                                                <span class="font-l">�ڼ¼�<?php echo $premium36PriceCp; ?>�ߡ���</span>
                                            </span>
                                        <?php else: // �̾�� ?>
                                            <span class="runningPrice--usual"><?php echo $premium36Price; ?><span class="font-m">�ߡ�</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="td_priceTxt td_runningInner" data-row-label="�ӥ��ͥ�">
                                    <span class="runningPrice">
                                        <?php if ($businessPlans['36']['cpType'] === 1): // �����CP�� ?>
                                            <s><?php echo $business36Price; ?>�ߡ�</s><br class="hidden-s">
                                            <span class="runningPriceArrow visible-s"> �� </span>
                                            <span class="runningPrice--cp"><?php echo $business36PriceCp; ?><span class="font-m">�ߡ�</span></span>
                                        <?php elseif ($businessPlans['36']['cpType'] === 2): // ����å���Хå�CP�� ?>
                                            <?php echo $business36Price; ?>�ߡ�<br>
                                            <span class="runningPrice--actual">
                                                <span class="font-s">����å���Хå���</span><br>
                                                <span class="font-l">�ڼ¼�<?php echo $business36PriceCp; ?>�ߡ���</span>
                                            </span>
                                        <?php else: // �̾�� ?>
                                            <span class="runningPrice--usual"><?php echo $business36Price; ?><span class="font-m">�ߡ�</span></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="th_diskTxt">�ǥ���������</div>
                            </th>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="�����������">
                                    <span class="runningPrice">500<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="�ץ�ߥ���">
                                    <span class="runningPrice">600<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                            <td>
                                <div class="td_diskTxt td_runningInner" data-row-label="�ӥ��ͥ�">
                                    <span class="runningPrice">700<span class="font-s">GB<br class="visible-l">(NVMe)</span></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="balloon">WordPress
                                    <span class="tooltip">
                                        <i class="imgico imgico_question tooltip_target"></i>
                                        <span class="tooltip_content">���˹⤤�͵�����ĥץ����ǡ���ñ�˥֥���Web�����Ȥκ������Ǥ��ޤ���</span>
                                    </span>
                                </div>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">WordPress�ꥫ�Х꡼
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">WordPress�ǵ����ä�������Ф��ơ������ꥻ�åȤ�Ԥ����Ȥ��Ǥ��ޤ���</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">�����С��ǡ���<br class="hidden-s">��ư�Хå����å�
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">�����С���Υǡ�����������ư�ǥХå����åפ��������С��ΰ��Web���᡼��ǡ����ֲ��14��ʬ�ס�MySQL�ǡ����١����ֲ��14��ʬ�פΥǡ������ݻ����Ƥ��ޤ���<br>
                                        �Хå����åץǡ����ϡ������ѤΥǡ����ʤɤȤ��Ƥ����Ѳ�ǽ�Ǥ���</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">̵���ȼ�SSL
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">�ȼ��ɥᥤ��䥵�֥ɥᥤ����Ѥ��ơ������С��ȥ桼���֤Υǡ�����Ź沽���뤳�Ȥ��Ǥ��ޤ����������С��Ǳ�����Υɥᥤ����Ф���̵����̵���¤��ȼ�SSL�����Ѥ��뤳�Ȥ���ǽ�Ǥ���<br>
                                    �ܺ٤ϡ�<a href="../functions/service_ssl.php#free-ssl">̵���ȼ�SSL</a>�פ򤴻��Ȥ���������</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">�����ԥ桼��������
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">�ɥᥤ�󤴤Ȥ�ʣ���ͤǤΥ����С���������ǽ�Ǥ��������ԥ桼�����ˤ϶�̳���Ƥ˱��������¤����ꤹ�뤳�Ȥ��Ǥ��ޤ���</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice">&times;</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice">&times;</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice"><img loading="lazy" src="../img/common/ico_check.svg" alt="����" width="19" height="13"></span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">���ꤪ�ޤ������ݡ���
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">�����С��ѥͥ���󶡤���Ƶ�ǽ����������ҤΥ��󥸥˥������åդ���Ԥ��ޤ����ʥ��ץ���󥵡��ӥ���</span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice">ͭ��</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice">ͭ��</span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="red runningPrice">̵��</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">�ȼ��ɥᥤ��<br class="hidden-s">�ʵ�̵����ŵ
                                <span class="tooltip">
                                    <i class="imgico imgico_question tooltip_target"></i>
                                    <span class="tooltip_content">
                                        <span>�������椫���ȼ��ɥᥤ���2��̵���ǥץ쥼��ȡ�</span><br><br>
                                        <b>����������ɤξ��</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site �Τ����줫</span><br><br>
                                        <b>�ץ�ߥ���ξ��</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> �Τ����줫</span><br><br>
                                        <b>�ӥ��ͥ��ξ��</b><br>
                                        <span class="break-all">.com / .net / .org / .info / .biz / .xyz / .link / .click / .blog / .online / .site / <span class="orange">.jp</span> / <span class="orange">.co.jp</span>�� / <span class="orange">.or.jp</span>�� / <span class="orange">.ne.jp</span>�� / <span class="orange">.gr.jp</span>�� �Τ����줫</span><br><br>
                                        �����������ˤ�<a href="../manual/man_order_present_domain.php#link-c">�������</a>������ޤ���<br><br>
                                        <span>
                                            �ץ쥼��Ȥ��줿�ɥᥤ��Ϸ��������δ֤��ä�̵����<br>
                                            �ܺ٤ϡ�<a href="../manual/man_order_present_domain.php">�ȼ��ɥᥤ��ʵ�̵����ŵ</a>�פ򤴻��Ȥ���������
                                        </span>
                                    </span>
                                </span>
                            </th>
                            <td>
                                <div class="td_runningInner" data-row-label="�����������"><span class="runningPrice">����<br><span class="font-s disp-ib">.com.net�ʤ�<br>�͵��ɥᥤ��<span class="red">11����</span>����<br class="hidden-s">�����ǽ</span></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ץ�ߥ���"><span class="runningPrice">����<br><span class="font-s disp-ib">.jp�ʤ�<br>�͵��ɥᥤ��<span class="red">12����</span>����<br class="hidden-s">�����ǽ</span></span></div>
                            </td>
                            <td>
                                <div class="td_runningInner" data-row-label="�ӥ��ͥ�"><span class="runningPrice">����<br><span class="font-s disp-ib">.co.jp�ʤ�<br>�͵��ɥᥤ��<span class="red">16����</span>����<br class="hidden-s">�����ǽ</span></span></div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="buttonGroup buttonGroup--center mt20">
                    <div>
                        <a class="button button01--width-xl" href="../functions/">��ǽ�����Ϥ�����</a>
                    </div>
                    <div>
                        <a id="ga-x-apply-page-price-01" class="button buttonCta--width-xl" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">�ޤ���10����̵�����</a>
                    </div>
                </div>

                <?php generateNote(); ?>
            </div>
            <p class="note mb0">���ȼ��ɥᥤ��ʵ�̵����ŵ�Ǽ����Ǥ���ɥᥤ���������ˤĤ��Ƥ�<a href="../manual/man_order_present_domain.php">������</a>�򻲾Ȥ��Ƥ���������</p>
        </section>

        <!-- /.section -->

        <section class="section section--price" id="priceList">
            <h3 class="section_ttl mb10">����ɽ</h3>
            <div class="section_body">
                <p class="mb5 tar font-s">���ǹ���</p>
                <?php generateTable('runningTable'); ?>

                <div class="buttonGroup buttonGroup--center mt20">
                    <div>
                        <a id="ga-x-apply-page-price-02" class="button buttonCta--width-xl" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">�ޤ���10����̵�����</a>
                    </div>
                </div>

                <?php generateNote(); ?>
            </div>
            <p class="note mb0">���ַ������פϤ��������ʬ�������1�������˴���������ۤǤ���</p>
            <p class="note">������ʧ���Ϥ��������ʬ�ΰ����ʧ���Ȥʤ�ޤ���</p>
        </section>
        <!-- /.section -->
        
        <section class="section section--price" id="priceSimulation">
            <h3 class="section_ttl">���⥷�ߥ�졼����󡦤����Ѥ�</h3>
            <div class="section_body">
                <p>���ѽ�ϡ�����˾�Υץ��ȷ�����֤����򡢤���̾���ϤΤ������ָ��ѽ��ȯ�Ԥ���ץܥ��󤫤��������ɤ��Ƥ��������ޤ���</p>
                <p class="note">����������θ��ѽ�Τ�ȯ�Բ�ǽ�Ǥ���</p>

                <noscript>
                    <div class="msg msg_caution">
                        <h4 class="msg_ttl"><i class="ico ico_exclamation-fill"></i>���⥷�ߥ�졼������Ԥ��ˤϡ����Ȥ��Υ֥饦����JavaScript��ͭ�������ꤷ�Ƥ���������</h4>
                    </div>
                </noscript>

                <div id="simulation" class="simulation<?php if ( $runningCpFlag01 ) echo ' is--runningCp01'; if ( $runningCpFlag02 ) echo ' is--runningCp02'; if ( $initialCpFlag ) echo ' is--initialCp'; ?>">
                    <ul class="sim__nav" id="js-sim__nav">
                        <li class="sim__nav__item sim__nav__item--active"><a href="#beginning" class="sim__nav__label">���Ƥ���</a></li>
                        <li class="sim__nav__item"><a href="#contract_renewal" class="sim__nav__label">���󹹿�����</a></li>
                    </ul>

                    <div id="beginning" class="sim__target sim__target--active">
                        <div class="sim__body">
                            <div class="sim__item">
                                <p class="sim__item__ttl">�ץ������򤷤Ƥ�������</p>
                                <?php generateSimPlan('beginning'); ?>
                                    <?php /*
                                    <div class="inputForm__body">
                                        <div class="inputForm__body__inr">
                                            <input class="radioForm" type="radio" name="plan" value="standard" id="standard">
                                            <label class="radioLabelForm" for="standard">����������ɡʵ�X10��</label>
                                        </div>
                                    </div>
                                    */ ?>
                            </div>

                            <div class="sim__item">
                                <p class="sim__item__ttl">
                                    <span class="sim__item__ttl__main">������֤����򤷤Ƥ�������</span>
                                    <?php if ( $runningCpFlag01 ) echo '<span class="sim__item__runningCpNotes"></span>'?>
                                    <?php if ( $initialCpFlag ) echo '<span class="sim__item__initialCpNotes"></span>'?>
                                </p>
                                <?php generateSimPeriod('beginning'); ?>
                                    <?php /*
                                    <div class="inputForm__body">
                                        <div class="inputForm__body__inr">
                                            <input class="radioForm" type="radio" name="period" value="3" id="3months">
                                            <label class="radioLabelForm" for="3months">3����<span class="subLabelForm">--��/��</span></label>
                                        </div>
                                    </div>
                                    */ ?>
                            </div>

                            <div class="sim__result">
                                <h4 class="sim__result__ttl">���ߥ�졼�������</h4>
                                <div class="sim__result__body">
                                    <p class="sim__result__inputNotes">�ץ��ȷ�����֤����򤷤Ƥ�������</p>

                                    <div class="sim__resultDetail">
                                        <div class="sim__resultRunning">
                                            <h5 class="sim__resultDetail__ttl">
                                                <span class="sim__resultDetail__ttl__label">�����</span><span class="js-selectPlan">--�ץ��</span>
                                            </h5>
                                            <dl class="sim__resultDetail__calc">
                                                <dt>
                                                    ������� [ <span class="js-selectPeriod">--����</span> ] <i class="ico ico_cross"></i> <span class="disp-ib">������� [ <span class="js-selectPrice">--��</span> ]</span>
                                                </dt>
                                                <dd><span class="js-total">--��</span></dd>
                                            </dl>
                                        </div>

                                        <?php /*<div class="sim__resultInitial">
                                            <dl class="sim__resultDetail__calc">
                                                <dt>������ѡ����ӡ�</dt>
                                                <dd><span class="js-initial">--��</span></dd>
                                            </dl>
                                            <p class="sim__resultInitial__notes">����������ˤ���ʧ������ȹ绻���Ƥ����ᤵ���Ƥ��������ޤ���</p>
                                        </div>*/ ?>

                                        <?php
                                        if ( $runningCpFlag01 ) echo '<p class="sim__resultDetail__runningCpNotes"></p>';
                                        if ( $initialCpFlag ) echo '<p class="sim__resultDetail__initialCpNotes"></p>';
                                        ?>

                                        <div class="sim__result__estimate">
                                            <p>����Υ��ߥ�졼������̤�<br>���ѽ�Ȥ���ȯ�Ԥ��뤳�Ȥ��Ǥ��ޤ���</p>
                                            <form method="post" action="<?php print $SECURE_URL; ?>xinfo/?action_estimate_index=true" class="estimate_form">
                                                <input type="hidden" value="true" name="action_estimate_index">
                                                <div class="sim__result__estimate__input">
                                                    <input type="text" name="estimate_to" maxlength="255" placeholder="��̾" class="estimate_input" required>
                                                    <select name="suffix">
                                                        <option value="200">����</option>
                                                        <option value="100">��</option>
                                                    </select>
                                                </div>
                                                <button id="ga-xs-price-estimate" class="btn btn--estimate btn--primary" type="submit">���ѽ��ȯ�Ԥ���</button>
                                                <input type="hidden" value="" name="plan_id" id="sim_planId">
                                                <input type="hidden" value="" name="month" id="sim_planMonth">
                                            </form>
                                            <p class="mt30 sim__resultInitial__notes font12">�������ڡ���Ŭ�ѳ��Τ����ѽ�򤴴�˾�ξ��ϥ��ݡ��ȤޤǤ�Ϣ�����������᡼���PDF�����ˤ����դ������ޤ����ʤ�Ϣ��κݤϡ��֤��������ߤΥ����ӥ����ץ��ס֤�������֡סְ�̾�פ�ʻ���Ƥ��Τ餻������������</p>
                                        </div>

                                        <div class="sim__result__buttonCta">
                                            <p class="sim__result__buttonCta__txt">�������С��ץ��10���֤�<span class="disp-ib">̵������Ĥ���</span></p>
                                            <a class="button buttonCta button--lg" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank">���������ߤϤ�����</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-s tar mt10">��ɽ�����ʤϡ����٤��ǹ��ߤǤ���</div>
                    </div><!-- beginning -->

                    <div id="contract_renewal" class="sim__target">
                        <div class="sim__body">
                            <div class="sim__item">
                                <p class="sim__item__ttl">�ץ������򤷤Ƥ�������</p>
                                <?php generateSimPlan('contract_renewal'); ?>
                            </div>

                            <div class="sim__item">
                                <p class="sim__item__ttl">������֤����򤷤Ƥ�������</p>
                                <?php generateSimPeriod('contract_renewal'); ?>
                            </div>

                            <div class="sim__result">
                                <h4 class="sim__result__ttl">���ߥ�졼�������</h4>
                                <div class="sim__result__body">
                                    <p class="sim__result__inputNotes">�ץ��ȷ�����֤����򤷤Ƥ�������</p>

                                    <div class="sim__resultDetail">
                                        <div class="sim__resultRunning">
                                            <h5 class="sim__resultDetail__ttl">
                                                <span class="sim__resultDetail__ttl__label">���󹹿���</span><span class="js-selectPlan">--�ץ��</span>
                                            </h5>
                                            <dl class="sim__resultDetail__calc">
                                                <dt>
                                                    ������� [ <span class="js-selectPeriod">--����</span> ] <i class="ico ico_cross"></i> <span class="disp-ib">������� [ <span class="js-selectPrice">--��</span> ]</span>
                                                </dt>
                                                <dd><span class="js-total">--��</span></dd>
                                            </dl>
                                        </div>

                                        <div class="sim__resultRenewalNote">
                                            <ul class="note-list">
                                                <li>���� �ˡ���ư���������</li>
                                                <li>����ư��������ξܺ٤ϡ�<a href="<?=$SITE_URL?>manual/man_order_pay_method_autopay.php" target="_blank">��ư��������</a>�פ򤴻��Ȥ���������</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="font-s tar mt10">��ɽ�����ʤϡ����٤��ǹ��ߤǤ���</div>
                    </div><!-- contract_renewal -->
                </div>
            </div>
        </section>

        <?php /* php���������������� */ ?>
        <input id='price_list' type='hidden' value='<?php
        $data = $PRICE_LIST;
        mb_convert_variables('UTF-8', 'EUC-JP', $data);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $data = mb_convert_encoding($data, 'EUC-JP', 'UTF-8');
        print $data;
        ?>'>
        <input id='initial_list' type='hidden' value='<?php
        $data = $INITIAL_LIST;
        mb_convert_variables('UTF-8', 'EUC-JP', $data);
        $data = json_encode($data, JSON_UNESCAPED_UNICODE);
        $data = mb_convert_encoding($data, 'EUC-JP', 'UTF-8');
        print $data;
        ?>'>
        <input id='initial_cp_txt' type='hidden' value='<?php echo $initialCpTxt; ?>'>
        <input id='running_cp_txt' type='hidden' value='<?php echo $runningCpTxt; ?>'>

        <section class="section domain-benefit_box forever_domain">
            <h3 class="section_ttl">�ȼ��ɥᥤ��ʵ�̵����ŵ<span>�����С�������о�</span></h3>
            <p>�����Ȥ�᡼��ʤɤ��Ѥ����ȼ��ɥᥤ��̵���Ǥ����Ѥ��������ޤ���</p>

            <h5 class="domain-benefit_subttl">
                <span class="domain-benefit_subttl_sub"><b class="domain-benefit_txt-bold">�͵������֥ɥᥤ��</b>��<b class="domain-benefit_txt-bold">2�ıʵ�̵��</b>�ˡ�</span>
                <span class="domain-benefit_subttl_main"><span class="domain-benefit_target-plan">���ץ���о�</span><span class="domain-benefit_domain-name">�ȼ��ɥᥤ��ʵ�̵����ŵ</span></span>
            </h5>

            <div class="domain-benefit_domain-more">
                <div class="domain-benefit_domain-more_box">
                    <section class="domain-benefit_domain-more_box_item">
                        <h6 class="domain-benefit_domain-more_box_item_ttl"><span>�������餤���줫2�Ĥ���</span><br class="hidden-s hidden-m"><b class="domain-benefit_domain-more_box_item_ttl_marker">�����С���������ϱʵ�̵����</b></h6>
                        <ul class="domain-benefit_domain-list">
                            <li><span>.com</span></li>
                            <li><span>.net</span></li>
                            <li><span>.org</span></li>
                            <li><span>.info</span></li>
                            <li><span>.biz</span></li>
                            <li><span>.xyz</span></li>
                            <li><span>.link</span></li>
                            <li><span>.click</span></li>
                            <li><span>.blog</span></li>
                            <li><span>.online</span></li>
                            <li><span>.site</span></li>
                        </ul>
                    </section>

                    <section class="domain-benefit_domain-more_box_item domain-benefit_domain-more_box_item--x30">
                        <h6 class="domain-benefit_domain-more_box_item_ttl"><b class="domain-benefit_domain-more_box_item_ttl_strong">�ץ�ߥ��ࡦ�ӥ��ͥ��ץ��</b>�ʤ�<br class="hidden-s hidden-m">JP�ɥᥤ��������ǽ</h6>
                        <ul class="domain-benefit_domain-list domain-benefit_domain-list--x30">
                            <li><span>.jp</span></li>
                            <li><span>.co.jp<span class="font-xs">��</span></span></li>
                            <li><span>.or.jp<span class="font-xs">��</span></span></li>
                            <li><span>.ne.jp<span class="font-xs">��</span></span></li>
                            <li><span>.gr.jp<span class="font-xs">��</span></span></li>
                        </ul>
                        <p class="mt5 mb0"><span class="note">���ӥ��ͥ��ץ��ǤΤ������ǽ�Ǥ���</span></p>
                    </section>
                </div>
            </div>
            <ul class="domain-benefit_box_note-list">
                <li>���оݥɥᥤ���ͽ��ʤ��ѹ������礬����ޤ���</li>
                <li>���ȼ��ɥᥤ��ʵ�̵����ŵ�Ǽ����Ǥ���ɥᥤ���������ˤĤ��Ƥ�<a href="../manual/man_order_present_domain.php#link-b">������</a>�򻲾Ȥ��Ƥ���������</li>
            </ul>
            <div class="tac mt40">
                <a id="ga-applyform-order" class="btn btn_orange-l order_apply-btn" href="<?php print $SECURE_URL; ?>xinfo/?action_register_index=on" target="_blank"><span class="label label_order label_order_btn-apply">���������ߤϤ�����<i class="ico ico_new-window"></i></span></a>
            </div>
        </section>

        <section class="section">
            <h3 class="section_ttl">��ʧ����ˡ</h3>
            <p><b>���쥸�åȥ����ɡ���Կ������ڥ�����������ʧ���ʥڥ��ǥ��ˡ�����ӥ�ʧ��</b>�������Ѥ��������ޤ�����<a
                        href="../manual/man_order_pay_etc.php">�ܺ٤Ϥ�����</a>��</p>
        </section>

        <div class="xbiz tac mb20">
            <a href="https://business.xserver.ne.jp/" target="_blank" class="btn">
                <img class="flex" src="../img/price/bnr_xbiz.png?date=200617" alt="ˡ�ͥ����Ȥα��Ѥʤ��XServer�ӥ��ͥ��פ��������ᡪ">
            </a>
        </div>

        <aside class="tac">
            <p class="mb0"><a href="https://drive.xserver.ne.jp/" target="_blank"><img class="hover fluid-sm" src="../img/price/bnr_xd.png?date=20210514" alt="���饦�ɷ���®����饤�󥹥ȥ졼����XServer�ɥ饤�� �����ӥ������Ȥ�"></a></p>
        </aside>
        
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

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // ���٤ƤΥ饸���ܥ�������
        const planRadioButtons = document.querySelectorAll('input[name="beginning_plan"]');
        const hiddenPlanInput = document.getElementById('sim_planId');
        const periodRadioButtons = document.querySelectorAll('input[name="beginning_period"]');
        const hiddenMonthInput = document.getElementById('sim_planMonth');

        planRadioButtons.forEach(function(radio) {
            // �ƥ饸���ܥ���˥��٥�ȥꥹ�ʡ����ɲ�
            radio.addEventListener('change', function() {
                if (radio.checked) {
                    // �����å�����Ƥ���饸���ܥ�����б�����label�����
                    const planLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (planLabel) {
                        // data-id���ͤ�hidden input��value�˥��å�
                        hiddenPlanInput.value = planLabel.getAttribute('data-id');
                    }
                }
            });
        });
        periodRadioButtons.forEach(function(radio) {
            // �ƥ饸���ܥ���˥��٥�ȥꥹ�ʡ����ɲ�
            radio.addEventListener('change', function() {
                if (radio.checked) {
                    // �����å�����Ƥ���饸���ܥ�����б�����label�����
                    const periodLabel = document.querySelector(`label[for="${radio.id}"]`);
                    if (periodLabel) {
                        // data-period���ͤ�hidden input��value�˥��å�
                        hiddenMonthInput.value = periodLabel.getAttribute('data-period');
                    }
                }
            });
        });
    });
</script>