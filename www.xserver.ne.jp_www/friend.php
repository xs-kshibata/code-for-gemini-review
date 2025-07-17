<?php include("conf.php"); ?>
<?php include("header.php"); ?>
    <meta property="og:title" content="��ͧã�Ҳ�ץ����">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="��ͧã�Ҳ�ץ����ξܺ٤򤴰��⤷�Ƥ��ޤ���">
    <meta property="og:url" content="<?php print $SITE_URL; ?>friend.php">
    <meta property="og:image" content="<?php print $SITE_URL; ?>img/campaign/friend/ogp.png?date=241127">
    <meta property="og:site_name" content="��ͧã�Ҳ�ץ���� | ��󥿥륵���С��ʤ饨�å��������С�">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@xserverjp">
    <title>���ʤ��⤪ͧã����ˤ�������ͧã�Ҳ�ץ���� | <?php print $SITE_TITLE; ?></title>
    <meta name="description" content="��ͧã�Ҳ�ץ���� - ���å��������С������ӥ���ͧã�˥�������">
    <link rel="stylesheet" href="https://use.typekit.net/dbs6xig.css">
</head>

<body id="pid-info" class="pid-info-friend">

<?php include("top.php"); ?>

<header class="header">
    <div class="logo">
        <a href="<?php print $SITE_URL; ?>"><img src="img/common/img_logo_xserver.svg" alt="���å��������С��������"></a>
    </div>
</header>

<main>
    <section class="mv">
        <div class="mvHeader">
            <div class="mv__main">
                <picture>
                    <source media="(max-width:918px)" srcset="img/campaign/friend/img_mv_main_sp.png?date=241127">
                    <img src="img/campaign/friend/img_mv_main.png?date=241127" alt="���ʤ��⤪ͧã����ˤ�������ͧã�Ҳ�ץ����">
                </picture>
            </div>
        </div>

        <div class="mvFooter">
            <div class="wrap">
                <div class="pgLinks"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--primary">��ͧã�Ҳ�ץ��������ѤϤ�����<img src="img/campaign/friend/ico_btnyellow_arrow_right.png" alt=""></a></div>
            </div>
        </div>
    </section>
    <section class="reward">
        <div class="rewardinfo">
            <div class="wrap">
                <h2 class="sttl">��ŵ����</h2>
                <div class="referral-container">
                    <div class="panel panel--referrer">
                        <div class="panel__title-bar"></div>
                        <div class="panel__title">
                            <span class="panel__title__part--large">�Ҳ�</span><span class="panel__title__part--small">����</span><span class="panel__title__part--large">���ʤ�</span>
                        </div>
                        <hr class="panel__dotted-line">
                        <p class="panel__benefit-desc">��ͧã�ν������������</p>
                        <p class="panel__benefit-highlight">
                            <span class="panel__benefit-highlight__max-label">����</span>
                            <span class="panel__benefit-highlight__number">20</span>
                            <span class="panel__benefit-highlight__percent">%</span>
                            <span class="panel__benefit-highlight__particle">��</span>
                            <span class="panel__benefit-highlight__suffix panel__benefit-highlight__suffix--present">�ץ쥼���</span>
                        </p>
                    </div>

                    <div class="panel panel--friend">
                        <div class="panel__title-bar"></div>
                        <div class="panel__title">
                            <span class="panel__title__part--large">�Ҳ�</span><span class="panel__title__part--small">���줿</span><span class="panel__title__part--large">��ͧã</span>
                        </div>
                        <hr class="panel__dotted-line">
                        <p class="panel__benefit-desc">�����������⤫��</p>
                        <p class="panel__benefit-highlight">
                            <span class="panel__benefit-highlight__max-label">����</span>
                            <span class="panel__benefit-highlight__number">20</span>
                            <span class="panel__benefit-highlight__percent">%</span>
                            <span class="panel__benefit-highlight__particle">��</span>
                            <span class="panel__benefit-highlight__suffix panel__benefit-highlight__suffix--discount">���</span>
                        </p>
                        <p class="panel__disclaimer">�����������ӥ������ηϤ��ۤʤ�ޤ���</p>
                    </div>
                </div>
                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text">��������������˽�����Ѥϴޤߤޤ���</p>
                    <p class="rewardinfo--text">���Ҳ𤷤�������ӾҲ𤵤줿��ͧã����ŵ�ϡ������ڡ���μ»ܾ����ˤ����ư�����礬����ޤ���</p>
                    <p class="rewardinfo--text">�������ץ��������30��̤���η������ŵ���оݳ��Ǥ���</p>
                </div>
            </div>
        </div>

        <div class="rewardtable">
            <div class="wrap">
                <h2 class="sttl">��ŵ��</h2>
                <div class="stepListContainer">

                    <div class="reward-table-wrapper js_scrolltip">
                        <div class="reward-table">
                            <div class="reward-table__header">
                                <div class="reward-table__header-row">
                                    <div class="reward-table__header-cell reward-table__header-cell--service">�����ӥ�̾</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--rate">�󽷡����Ψ</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--plan">�ץ��̾</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--period">�������</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--referrer">�Ҳ𤷤���</div>
                                    <div class="reward-table__header-cell reward-table__header-cell--friend">�Ҳ𤵤줿��</div>
                                </div>
                            </div>
                            <div class="reward-table__body">
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver.svg" alt="XServer ��󥿥륵���С�" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">20</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">�����������</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">2,640</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">2,640</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_business.svg" alt="XServer Business" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">��ͭ�����С�<br>�����������</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">5,016</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">5,016</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_drive.svg" alt="XServer Drive" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">���⡼��ӥ��ͥ�</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">3,960</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">3,960</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps.svg" alt="XServer VPS" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GB</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps_win.svg" alt="XServer VPS for Windows Server" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GB</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">2,508</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">2,508</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_vps_game.svg" alt="XServer VPS for Game" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">2GB�ץ��</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,080</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_cloudpc.svg" alt="XServer ���饦��PC" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">����ץ��</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">3,936</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">3,936</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_sns.svg" alt="XServer SNS" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">���ҤȤꤵ�ޥץ��</span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">12</span><span class="reward-table__period__unit">����</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,069</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,069</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service">
                                        <img src="img/campaign/friend/logo_xwrite.svg" alt="XWRITE" class="reward-table__service__logo">
                                        <span class="reward-table__service__note">��1</span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--rate"><span class="reward-table__rate__value">10</span><span class="reward-table__rate__unit">%</span></div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">�㤤�ڤ�ץ��</span></div>
                                    <div class="reward-table__cell reward-table__cell--period">��</div>
                                    <div class="reward-table__cell reward-table__cell--referrer"><span class="reward-table__benefit__value">1,584</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--friend"><span class="reward-table__benefit__value">1,584</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span><span class="reward-table__benefit__off">OFF</span></div>
                                </div>
                                <div class="reward-table__row">
                                    <div class="reward-table__cell reward-table__cell--service"><img src="img/campaign/friend/logo_xserver_games.svg" alt="XServer GAMES" class="reward-table__service__logo"></div>
                                    <div class="reward-table__cell reward-table__cell--rate">
                                        <span class="reward-table__campaign-badge">�����ڡ�����</span><br>
                                        <span class="reward-table__rate__alt">
                                                <s>10%</s><span class="reward-table__rate__value red">20</span><span class="reward-table__rate__unit red">%</span>
                                            </span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--plan"><span class="reward-table__plan__name">Minecraft Java��<br><span class="reward-table__plan__note">(��3��)</span></span></div>
                                    <div class="reward-table__cell reward-table__cell--period"><span class="reward-table__period__value">365</span><span class="reward-table__period__unit reward-table__period__unit--day">��</span></div>
                                    <div class="reward-table__cell reward-table__cell--referrer">
                                        <s><span class="reward-table__benefit__value--before">701</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">��</span></s><br>
                                        <span class="reward-table__benefit__value red">1,402</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">��</span>
                                    </div>
                                    <div class="reward-table__cell reward-table__cell--friend">
                                        <s><span class="reward-table__benefit__value--before">701</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">��</span></s><br>
                                        <span class="reward-table__benefit__value red">1,402</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">��</span><span class="reward-table__benefit__off red">OFF</span>
                                    </div>
                                </div>

                                <div class="reward-table__row reward-table__row--games-combined">
                                    <div class="reward-table__cell reward-table__cell--service reward-table__cell--service-complex">
                                        <img src="img/campaign/friend/logo_xserver_games.svg" alt="XServer GAMEs" class="reward-table__service__logo">
                                        <span class="reward-table__service__name reward-table__service__name--sub">̵�������С�<span class="reward-table__service__note">��2</span></span>
                                    </div>

                                    <div class="reward-table__details-stack"> <div class="reward-item-row"> <div class="reward-table__cell reward-table__cell--rate">
                                                <span class="reward-table__rate__unit reward-table__rate__unit--mini">�ץ�ڥ��ɤ�</span><br>
                                                <span class="reward-table__rate__value">100</span><span class="reward-table__rate__unit reward-table__rate__unit--yen">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--plan">
                                                <span class="reward-table__plan__name">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--period">
                                                <span class="reward-table__period__value">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--referrer">
                                                <span class="reward-table__benefit__value">100</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--friend">
                                                <span class="reward-table__benefit__value">100</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen">��</span>
                                            </div>
                                        </div>

                                        <div class="reward-item-row reward-item-row--upgrade-highlight"> <div class="reward-table__cell reward-table__cell--rate">
                                                <span class="reward-table__campaign-badge">�����ڡ�����</span><br>
                                                <span class="reward-table__rate__condition reward-table__rate__condition--cp">ͭ���˥��åץ��졼�ɻ�</span>
                                                <span class="reward-table__rate__alt">
                                                        100�߰�����<s>10%</s><span class="reward-table__rate__value red">20</span><span class="reward-table__rate__unit red">%</span>
                                                    </span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--plan">
                                                <span class="reward-table__plan__name">Minecraft Java��<br><span class="reward-table__plan__note">(��3��)</span></span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--period">
                                                <span class="reward-table__period__value">365</span><span class="reward-table__period__unit reward-table__period__unit--day">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--referrer">
                                                <s><span class="reward-table__benefit__value--before">601</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">��</span></s><br>
                                                <span class="reward-table__benefit__value red">1,302</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">��</span>
                                            </div>
                                            <div class="reward-table__cell reward-table__cell--friend">
                                                <s><span class="reward-table__benefit__value--before">601</span><span class="reward-table__benefit__unit--before reward-table__benefit__unit--yen--before">��</span></s><br>
                                                <span class="reward-table__benefit__value red">1,302</span><span class="reward-table__benefit__unit reward-table__benefit__unit--yen red">��</span><span class="reward-table__benefit__off red">OFF</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scrollHintfriend1">
                            <div class="scrollHintfriend1_icon">
                                <i class="ico ico_arrow-right"></i>
                                <span>��������Ǥ��ޤ�</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text red">�������ڡ�����֤ϡ�2025/5/26 12:00 - 2025/8/26 12:00�ۤǤ���</p>
                    <p class="rewardinfo--text">��1 XWRITE�ϡ��ʲ��ξ��ˤ�ͧã�Ҳ�ץ�������ŵ��Ŭ�Ѥ���ޤ���</p>
                    <p class="rewardinfo--text">�����å��������С��Τ��������߻��ˡ�WordPress�����å��������ȡפ����Ѥ���XWRITE�����������</p>
                    <p class="rewardinfo--text">��XServer��������ȴ������̤Ρ�WordPress�ơ��ޡץ�˥塼����XWRITE�����������</p>
                    <p class="rewardinfo--text">��2 XServer GAMEs��̵�������С�����ˤ���󽷤ϡ�¨���˥ץ�ڥ��ɤإ��㡼������ޤ���</p>
                </div>

            </div>
        </div>

        <div class="self">
            <div class="wrap">
                <div class="self--img">
                    <picture>
                        <source media="(min-width:1100px)" srcset="img/campaign/friend/img_self_application.png">
                        <img src="img/campaign/friend/img_self_application_sp.png" alt="���ʤ��⤪ͧã����ˤ�������ͧã�Ҳ�ץ����">
                    </picture>
                </div>
                <div class="rewardinfo--contentnote">
                    <p class="rewardinfo--text">��������������˽�����Ѥϴޤߤޤ���</p>
                    <p class="rewardinfo--text">���Ҳ𤷤�������ӾҲ𤵤줿��ͧã����ŵ�ϡ������ڡ���μ»ܾ����ˤ����ư�����礬����ޤ���</p>
                    <p class="rewardinfo--text">�������ץ��������30��̤���η������ŵ���оݳ��Ǥ���</p>
                </div>
            </div>
        </div>

    </section>


    <section class="flow">
        <div class="wrap">
            <h2 class="sttl">��ŵŬ�ѤޤǤ�ή��</h2>

                <div class="section TabArea">

                    <div class="inner">
                        <div class="TabWrap mt40">
                            <input id="tab-new" type="radio" name="tab" class="tab-switch" checked="checked" /><label class="tab-label" for="tab-new">��ͧã�˾Ҳ𤹤���</label>

                            <!-- tab1 -->
                            <div class="TabContents stepListContainer js_scrolltip">
                                <ul class="stepList1">
                                    <li>
                                        <div class="stepItem step1">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step01_friend.png" alt="STEP1"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">�Ҳ𤹤��</span></div>
                                            <p class="stepItem__text">�Ҳ���URL��LINE���᡼��Τ����줫��ͧã�ʤɾҲ𤷤����ͤ˥��������ޤ���</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step2">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step02_friend.png" alt="STEP2"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag guest">�Ҳ𤵤줿��</span></div>
                                            <p class="stepItem__text">�Ҳ���URL���ͳ�����оݥ����ӥ��򿷵��������ߤ��ޤ���</p>
                                        </div>
                                    </li>
                                    <li><div class="stepItem__period">�оݥ����ӥ��ξ������������Ǥ�����</div></li>
                                    <li>
                                        <div class="stepItem step3">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step03_friend.png" alt="STEP3"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag guest">�Ҳ𤵤줿��</span></div>
                                            <p class="stepItem__text">����Τ���ʧ�������ޤ����ܷ���λ�����󽷤�Ŭ�Ѥ���ޤ���</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step4">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step04_friend.png" alt="STEP4"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">�Ҳ𤹤��</span></div>
                                            <p class="stepItem__text">STEP3���⡹��ޤ���¨���󽷤�������ޤ���(<a href="#receive">���������ˡ</a>)</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="scrollHintfriend1">
                                    <div class="scrollHintfriend1_icon">
                                        <i class="ico ico_arrow-right"></i>
                                        <span>��������Ǥ��ޤ�</span>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1 -->

                            <!-- tab2 -->
                            <input id="tab-old" type="radio" name="tab" class="tab-switch" /><label class="tab-label" for="tab-old">�����Ȥο������ߤξ��</label>
                            <div class="TabContents stepListContainer js_scrolltip">
                                <ul class="stepList2">
                                    <li>
                                        <div class="stepItem step1">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step01_self.png" alt="STEP1"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">���ʤ�</span></div>
                                            <p class="stepItem__text">XServer��������Ȥ˥����󤷡�ͧã�Ҳ��˥塼�פ�����󤷤��������ӥ��Ρ֤����Ȥ�����:�����餫��פ򥯥�å�</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="stepItem step2">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step02_self.png" alt="STEP2"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">���ʤ�</span></div>
                                            <p class="stepItem__text">�֤����Ȥ�����:�����餫��פ��ͳ���ơ�������������</p>
                                        </div>
                                    </li>
                                    <li><div class="stepItem__period">�оݥ����ӥ��ξ���<br>���������Ǥ�����</div></li>
                                    <li>
                                        <div class="stepItem step3">
                                            <div class="stepItem__fig"><img src="img/campaign/friend/img_flow_step03_self.png" alt="STEP3"></div>
                                            <div class="stepItem__caption"><span class="stepItem__caption--tag user">���ʤ�</span></div>
                                            <p class="stepItem__text">������ˡֽ�����������γ����ŵ�פ�Ŭ�Ѥ���ޤ���</p>
                                        </div>
                                    </li>
                                    <div class="scrollHintfriend2">
                                        <div class="scrollHintfriend2_icon">
                                            <i class="ico ico_arrow-right"></i>
                                            <span>��������Ǥ��ޤ�</span>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <!-- /tab2 -->

                        </div>
                    </div>
                    <!-- /inner -->

                <!-- /section -->

            </div>
        </div>
    </section>
    <section class="guide">
        <div class="wrap">
            <h2 class="sttl">�Ҳ�ץ����Τ�������ˡ</h2>
            <div class="guideContainer">
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">1</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step01.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">XServer��������Ȥ˥�����</div>
                        <p class="guideItem__detail--text">ͭ���ʥ����ӥ����󤬤���XServer��������Ȥ˥����󤷤ޤ���</p>
                        <div class="guideItem__detail--links"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--secondary">XServer��������� ������ե�����<img src="img/campaign/friend/ico_btnblue_arrow_right.png" alt=""></a></div>
                    </div>
                </div>
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">2</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step02.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">ͧã�Ҳ��˥塼�򥯥�å�</div>
                        <p class="guideItem__detail--text">�Ҳ��ǽ�ʥ����ӥ��ΰ�����ɽ������ޤ���</p>
                    </div>
                </div>
                <div class="guideItem">
                    <div class="guideItem__thumbs">
                        <div class="guideItem__thumbs--num">STEP<span class="num">3</span></div>
                        <div class="guideItem__thumbs--image"><img src="img/campaign/friend/img_guide_step03.png?date=241126" alt=""></div>
                    </div>
                    <div class="guideItem__detail">
                        <div class="guideItem__detail--caption">��ͧã�˾Ҳ𡢤ޤ��Ϥ����Ȥο������ߤ�����</div>
                        <p class="guideItem__detail--text">��ͧã�˾Ҳ𤹤��硧LINE���᡼�뤫�����򤷤Ƥ���������<br>
                            ���Ȥ����Ѥξ�硧���󤷤��������ӥ��Ρ֤����Ȥ����ѡ������餫��פ򥯥�å����Ƥ��������ߤ���������</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="receive" id="receive">
        <div class="wrap">
            <h2 class="sttl">�󽷤μ��������ˡ</h2>
            <div class="receiveGuide">
                <div class="receiveGuide__avatar"><img src="img/campaign/friend/img_avatar_guest.png?date=240603" alt=""></div>
                <div class="receiveGuide__detail">
                    <div class="receiveGuide__detail--caption"><span>�Ҳ𤷤�������</span></div>
                    <p class="receiveGuide__detail--text">
                        <span>����Կ����Ǽ��������</span><br>
                        ��������Ѥθ��¾���ʹ���ζ�Ը��¤˸¤�ޤ��ˤ���Ͽ�塢�Ҳ𤵤줿�����ͤ��ܷ������򵯻����Ȥ��ơ��⡹���15���ˤ���Ͽ�θ��¤˿�����ޤ�ޤ���
                    </p>
                    <p class="receiveGuide__detail--text">
                        <span>���ץ�ڥ��ɤǼ��������</span><br>
                        �Ҳ𤵤줿�����ͤ��ܷ������򵯻����Ȥ��ơ��⡹���1����XServer��������ȤΥץ�ڥ��ɤ˥��㡼������ޤ���
                    </p>
                    <div class="receiveGuide__prepaid">
                        <img src="img/campaign/friend/ico_btnwhite_arrow_right.svg" alt="�ץ�ڥ��ɰ���" class="receiveGuide__prepaid--ico">
                        <span class="receiveGuide__prepaid--ttl">�ץ�ڥ��ɤȤ�</span>
                        <p class="receiveGuide__prepaid--txt">
                            XServer��������Ȥˤ��餫�������⤷����ۤ��ϰ���ǻ�ʧ����Ԥ������Ǥ���<br>
                            ���㡼�����줿�Ĺ�ϡ�XServer�γƥ����ӥ��Ǥ����Ѥ��������ޤ����ʤ����Ĺ�δ���ϤǤ��ޤ���
                        </p>
                    </div>
                </div>
            </div>
            <div class="receiveLinks"><a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank" class="btn btn--primary">��ͧã�Ҳ�ץ��������ѤϤ�����<img src="img/campaign/friend/ico_btnyellow_arrow_right.png" alt=""></a></div>
            <div class="attentions">
                <div class="attentions__caption">��ջ���</div>
                <ul class="attentions__list">
                    <li>
                        <b>�� �󽷤λ�ʧ�������ߥ󥰤ˤĤ���</b><br>
                        <div class="note">
                            ���󽷤ϾҲ𤵤줿�����ͤ��ܷ������򵯻����Ȥ��Ƥ���ʧ�����ޤ�����ʧ����ˡ�ˤ�äƥ����ߥ󥰤��ۤʤ�ޤ���<br>
                            ����Կ����ǤΤ���ʧ�����⡹���15���ˤ�������ߤ��ޤ���<br>
                            ���ץ�ڥ��ɤǤΤ���ʧ�����⡹���1����XServer��������Ȥؽ������ޤ���
                        </div>
                        <div class="note">���Ҳ𤵤줿�����ͤη����ֶ�䥭��󥻥�ʤɤˤ�ꡢ���������Ǥ����󤬽�λ���Ƥ�����ϡ��󽷻�ʧ�����оݳ��Ȥʤ�ޤ���</div>
                    </li>
                    <li>
                        <b>�� ��ŵŬ�ѤΥ����ߥ󥰤ˤĤ���</b><br>
                        <div class="note">
                            ���Ҳ���ŵ�ϼ������륿���ߥ󥰤��ۤʤ�ޤ���<br>
                            ���Ҳ𤷤������͡��־Ҳ𤵤줿�����͡פ�����򤪻�ʧ�����Ƥ��������������ŵ��Ŭ�Ѥ���ޤ���<br>
                            ���Ҳ𤵤줿�����͡�����򤪻�ʧ�����Ƥ��������ݤ���ŵ��Ŭ�Ѥ���ޤ���<br>
                            �������Ȥο������ߤ����Ѥ�����硧����򤪻�ʧ�����Ƥ��������ݤ���ŵ��Ŭ�Ѥ���ޤ���
                        </div>
                        <div class="note">��XServer GAMEs ̵�������С��򤴷���ξ��ϡ��Ҳ𤵤줿�����ͤ�̵�������С�����λ���̤�ɽ�����줿�����ǥץ�ڥ��ɤ�¨����������ޤ���</div>
                    </li>
                    <li>
                        <b>�� �оݤȤʤ����ˤĤ���</b><br>
                        <div class="note">
                            ���Ҳ�URL���餪�������ߤ����������������оݤȤʤ�ޤ���<br>
                            ����ʳ�����ˡ�Ǥ��������ߤ���������������ξ�硢�����⤤�������ޤ��Ƥ���ŵŬ�ѳ��Ȥʤ�ޤ��ΤǤ���դ���������
                        </div>
                        <div class="note">
                            ���Ҳ𤵤줿�����ͤ������оݥ����ӥ��򤴷��󤵤�Ƥ��������ŵŬ�ѳ��Ǥ���<br>
                            ���ˤ����󤵤줿���Ȥ����뤪���ͤ⡢���Ҳ�������������ͭ���ʤ�����̵������оݤȤʤ�ޤ���<br>
                            �ޤ���XServer GAMEs��̵�������С�����η����ͭ�������С��η�������оݤȤʤ�ޤ���
                        </div>
                        <div class="note">
                            ��30��̤���η������ŵ���оݳ��Ǥ������������ʲ��η���Ϸ�����֤˴ؤ�餺��ŵ���оݤˤʤ�ޤ���<br>
                            ��XWRITE���㤤�ڤ�ץ��<br>
                            ��XServer GAMEs��̵�������С��ʡ�ͭ�������С��˥��åץ��졼�ɡפϽ�����
                        </div>
                    </li>
                    <li>
                        <b>�� ��ŵ������뤿��ξ��ˤĤ���</b><br>
                        <div class="note">���Ҳ���ŵ������뤿��ˤϡ��Ҳ𤵤줿�����ͤ�������δ��ְʾ�Ǥ����󤤤�����ɬ�פ�����ޤ���</div>
                        <div class="note">���Ҳ𤵤줿�����ͤ���ŵ����Ϳ���줿���Ȥο�������󥻥�ϡ������ʤ����������ޤ���ΤǤ���դ���������</div>
                    </li>
                    <li>
                        <b>�� ��ŵ�����ƤˤĤ���</b><br>
                        <div class="note">���󽷳ۡ�����ۤˤϽ�����Ѥϴޤޤ�ޤ���</div>
                        <div class="note">�������Ȥο������ߤǤ����Ѥξ�硢��������γ���Τߤ���ŵ�Ȥ���Ŭ�Ѥ��졢�Ҳ��󽷤���ŵ��Ŭ�Ѥ���ޤ���</div>
                        <div class="note">
                            �������Ȥο������ߤǤ����Ѥ�1�����ӥ��ˤĤ�1��ޤǤǤ���<br>
                            ���Ǥˤ�����ѤߤΥ����ӥ��ǤϤ����Ѥ��������ޤ���
                        </div>
                        <div class="note">
                            ��XWRITE�ϡ��ʲ��ξ��ˤ�ͧã�Ҳ�ץ�������ŵ��Ŭ�Ѥ���ޤ���<br>
                            �����å��������С��Τ��������߻��ˡ�WordPress�����å��������ȡפ����Ѥ���XWRITE�����������<br>
                            ��XServer��������ȴ������̤Ρ�WordPress�ơ��ޡץ�˥塼����XWRITE�����������
                        </div>
                        <div class="note">
                            ��XServer GAMEs ̵�������С��ϡ��Ҳ𤵤줿�����ͤη�����ŵ��ץ�ڥ����󽷤ˤʤ�ޤ���<br>
                            �ޤ������ξҲ��ͳ��̵�������С�����󤵤줿�����ͤ�ͭ�������С�����󤹤�ݤϳ����Ŭ�Ѥ���ޤ���<br>
                            �Ҳ𤷤������ͤϡ�̵�������С������󤵤줿�ݤ�ͭ�������С������󤵤줿�ݤˤ��줾����ŵ��Ŭ�Ѥ���ޤ���
                        </div>
                    </li>
                    <li>
                        <b>�� �ץ�������Τ˴ؤ�����ջ���ˤĤ���</b><br>
                        <div class="note">��A8.net���ե��ꥨ���ȥץ���ࡢXServer�ӥ��ͥ��ѡ��ȥʡ��ץ����Ȥ�ʻ�ѤϤǤ��ޤ���</div>
                        <div class="note">���ܥץ�����ͽ��ʤ���λ�����礬����ޤ���</div>
                        <div class="note">
                            ���ܥץ����ϡ����ҥ����ӥ��ˤ���̣���������ˤ��Ҳ𤤤��������Ȥ�տޤ��Ƥ��ޤ���<br>
                            ���Τ��ᡢSNS���̤���������¿�������ؤξҲ�϶ػߤ��Ƥ��ޤ���<br>
                            �ܥץ����μ�ݤ˱��ʤ��Ҳ�����Ҥ�Ƚ�Ǥ������ϡ���ŵ��Ŭ�Ѥ�������뤳�Ȥ�����ޤ���
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </section>

</main>


<footer class="copyright">
    <small>&copy; 2003-<?php echo date("Y"); ?> XServer Inc.</small>
</footer>

<?php include("bottom.php"); ?>
