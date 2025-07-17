<?php include("../conf.php"); ?>
<?php include("../header.php"); ?>

<link href="<?php print_fileURL("css/contents/manual.css"); ?>" rel="stylesheet">

<title>Whoisについて | <?php print $SITE_TITLE; ?></title>
<meta name="description" content="レンタルサーバー「エックスサーバー」のご利用マニュアル｜Whoisに関するご案内です。">

</head>

<body id="pid-manual">

<?php include("../top.php"); ?>

<div id="wrapper">

<?php include("../header2.php"); ?>

<div id="toggle-target">

<div class="contents">
    
    <section class="main holder-sml" role="main">
    
        <header class="main-header">
        	<h2 class="ttl"><span class="label label_ttl-manual"><i class="ico ico_book"></i>マニュアル</span></h2>
<?php include("subnav.php"); ?>
        </header>
        <!-- /.main-header -->
        
        <?php include("../topicpath.php"); ?>

        <div class="clearfix">
        
            <section class="col-main">
            
                <h3 class="sub-ttl">Whoisについて</h3>
                
                <div class="toc-list">
                <p class="toc-list--head">目次</p>
                <ul class="toc-list--body">
                    <li><a href="#link-a">Whoisとは</a></li>
                    <li><a href="#link-b">Whoisで公開される情報</a></li>
                    <li><a href="#link-c">Whoisで公開される情報の確認</a></li>
                    <li><a href="#link-d">Whoisで公開される情報の変更</a>
                        <ul>
                            <li><a href="#link-d01">新規取得(登録)前、移管完了前の場合</a></li>
                            <li><a href="#link-d02">取得、移管完了後(契約中)の場合</a></li>
                        </ul>
                    </li>
                    <li><a href="#link-e">「Whois代理公開サービス」について</a></li>
                    <li><a href="#link-f">「Whois登録者情報非表示設定」について</a>
                        <ul>
                            <li><a href="#link-f01">「登録者情報非表示設定機能」のご利用に際しての注意事項</a></li>
                        </ul>
                    </li>
                </ul>
                </div>                
                
                <ul class="link-box">
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_multi.php">ドメインに関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_transfer_domain.php">ドメインの移管に関する「よくある質問」</a></li>
                    <li><i class="ico ico_circle-right"></i><a href="../support/faq/faq_domain_whois.php">Whoisに関する「よくある質問」</a></li>
                </ul>
                
                <section class="section">
                    <h4 class="section_ttl" id="link-a">Whoisとは</h4>
                    <div class="section_body">
                       <p>Whoisとは、ドメイン名における登録者などの情報をインターネットの利用者なら誰でも参照することができるサービスのことです。<br>レジストリ(ドメイン名を登録管理する団体)やレジストラ(登録業者)が以下の目的で提供しています。</p>
                        <ul class="ul">
                            <li>ネットワークの安定的な運用を実施するうえで、技術的な問題が発生した際の連絡先に関する情報の提供</li>
                            <li>ドメイン名の申請、届出時に、同一ドメイン名や類似ドメイン名の存在確認に必要な情報の提供</li>
                            <li>ドメイン名と商標などに関するトラブルの自律的な解決に必要な情報の提供</li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-b">Whoisで公開される情報</h4>
                    <div class="section_body">
                       <p>主に、以下の項目が公開されます。<br>公開される項目や内容は、レジストリやレジストラにより異なります。</p>
                        <ul class="ul">
                            <li>登録ドメイン名</li>
                            <li>レジストラ名</li>
                            <li>登録ドメイン名のネームサーバー</li>
                            <li>ドメイン名の登録年月日</li>
                            <li>ドメイン名の有効期限</li>
                            <li>登録者に関する情報</li>
                            <li>技術に関する連絡担当者の情報</li>
                            <li>登録に関する連絡担当者の情報</li>
                            <li>CED(Charter Eligibility Requirement)に関する情報　※.asiaドメインのみ</li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-c">Whoisで公開される情報の確認</h4>
                    <div class="section_body">
                       <p>取得(登録)済みのドメイン名におけるWhois情報は、レジストリやレジストラなどが提供する以下のWhois検索ページで確認することができます。</p>
                        <table class="table"> 
                            <thead>
                                <tr>
                                    <th scope="row" class="col_th">ドメインの種類</th>
                                    <th scope="row" class="col_th">Whois検索ページ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                        
                                    <th >.asia</th>
                                    <td><a href="http://www.whois.asia" target="_blank" rel="nofollow">.Asia WHOIS Service</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
								<tr>                        
                                    <th>.baby</th>
                                    <td><a href="https://whois.nic.baby" target="_blank" rel="nofollow">whois.nic.baby</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.bar</th>
                                    <td><a href="https://whois.nic.bar" target="_blank" rel="nofollow">whois.nic.bar</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.biz</th>
                                    <td><a href="https://www.internic.net/whois.html" target="_blank" rel="nofollow">InterNIC Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.black</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.blog</th>
                                    <td><a href="https://whois.nic.blog/" target="_blank" rel="nofollow">whois.nic.blog</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.blue</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th >.bz</th>
                                    <td><a href="https://www.belizenic.bz/domain-registration/domain-whois-lookup.php" target="_blank" rel="nofollow">Belize NIC Whois Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.cc</th>
                                    <td><a href="https://www.verisign.com/en_US/domain-names/whois/index.xhtml" target="_blank" rel="nofollow">Verisign Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.click</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>

                                <tr>                        
                                    <th >.clinic</th>
                                    <td><a href="http://whois.nic.clinic" target="_blank" rel="nofollow">whois.nic.clinic</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.com</th>
                                    <td><a href="https://www.internic.net/whois.html" target="_blank" rel="nofollow">InterNIC Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.company</th>
                                    <td><a href="http://whois.nic.company/" target="_blank" rel="nofollow">whois.nic.company</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
								<tr>                        
                                    <th>.design</th>
                                    <td><a href="https://whois.nic.design" target="_blank" rel="nofollow">whois.nic.design</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.earth</th>
                                    <td><a href="https://whois.nic.earth/" target="_blank" rel="nofollow">.earth Registry Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.email</th>
                                    <td><a href="http://whois.nic.email/" target="_blank" rel="nofollow">whois.nic.email</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.fun</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.gift</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.group</th>
                                    <td><a href="http://whois.nic.group/" target="_blank" rel="nofollow">whois.nic.group</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th >.help</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>

                                </tr>
                                <tr>                        
                                    <th>.host</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>  
                                <tr>                        
                                    <th>.in</th>
                                    <td><a href="https://registry.in/WHOIS" target="_blank" rel="nofollow">Registry.in Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>   
                                <tr>                        
                                    <th>.info</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>   
                                <tr>                        
                                    <th>.ink</th>
                                    <td><a href="https://whois.nic.ink/" target="_blank" rel="nofollow">whois.nic.ink</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>                   
                                <tr>                        
                                    <th>.jp</th>
                                    <td rowspan="8"><a href="https://whois.jprs.jp" target="_blank" rel="nofollow">JPRS Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.都道府県.jp</th>
                                </tr>
                                <tr>                        
                                    <th>.co.jp</th>
                                </tr>
                                <tr>                        
                                    <th >.or.jp</th>
                                </tr>
                                <tr>                        
                                    <th>.ac.jp</th>
                                </tr>
                                <tr>                        
                                    <th>.ed.jp</th>
                                </tr>
                                <tr>                        
                                    <th>.ne.jp</th>
                                </tr>
                                <tr>                        
                                    <th>.gr.jp</th>
                                </tr>
                                <tr>
                                    <th>.life</th>
                                    <td><a href="http://whois.nic.life/" target="_blank" rel="nofollow">whois.nic.life</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.link</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.live</th>
                                    <td><a href="http://whois.nic.live/" target="_blank" rel="nofollow">whois.nic.live</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.lol</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.me</th>
                                    <td><a href="https://domain.me/" target="_blank" rel="nofollow">domain.ME</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.mobi</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.moe</th>
                                    <td><a href="https://whois.nic.moe/" target="_blank" rel="nofollow">.moe Registry Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.mom</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
								<tr>                        
                                    <th>.monster</th>
                                    <td><a href="https://nic.monster/whois" target="_blank" rel="nofollow">.Monster WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.net</th>
                                    <td><a href="https://www.internic.net/whois.html" target="_blank" rel="nofollow">InterNIC Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.news</th>
                                    <td><a href="http://whois.nic.news/" target="_blank" rel="nofollow">whois.nic.news</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.online</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.org</th>
                                    <td><a href="https://www.internic.net/whois.html" target="_blank" rel="nofollow">InterNIC Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.osaka </th>
                                    <td><a href="https://whois.nic.osaka/" target="_blank" rel="nofollow">.osaka Registry Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.photo</th>
                                    <td rowspan="2"><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.pics</th>
                                </tr>
                                <tr>                        
                                    <th>.pink</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.press</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.red</th>
                                    <td><a href="http://whois.afilias.net" target="_blank" rel="nofollow">Afilias Whois lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
								<tr>                        
                                    <th>.rent</th>
                                    <td><a href="https://nic.rent/whois" target="_blank" rel="nofollow">The .Rent Registry WHOIS</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.rest</th>
                                    <td><a href="https://whois.nic.rest/" target="_blank" rel="nofollow">whois.nic.rest</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.salon</th>
                                    <td><a href="http://whois.nic.salon/" target="_blank" rel="nofollow">whois.nic.salon</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.sexy</th>
                                    <td><a href="https://whois.uniregistry.net/" target="_blank" rel="nofollow">Uniregistry WHOIS Lookup</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.site</th>
                                    <td rowspan="3"><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.space</th>
                                </tr>
                                <tr>                        
                                    <th>.store</th>
                                </tr>
                                <tr>
                                    <th>.style</th>
                                    <td><a href="http://whois.nic.style/" target="_blank" rel="nofollow">whois.nic.style</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.tech</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.tv</th>
                                    <td><a href="https://www.verisign.com/en_US/domain-names/whois/index.xhtml" target="_blank" rel="nofollow">Verisign Whois Search</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.website</th>
                                    <td><a href="https://www.centralnic.com/support/whois" target="_blank" rel="nofollow">CentralNic Whois</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.works</th>
                                    <td><a href="http://whois.nic.works/" target="_blank" rel="nofollow">whois.nic.works</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>
                                    <th>.world</th>
                                    <td><a href="http://whois.nic.world/" target="_blank" rel="nofollow">whois.nic.world</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.wiki</th>
                                    <td><a href="https://whois.nic.wiki/" target="_blank" rel="nofollow">whois.nic.wiki</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.ws</th>
                                    <td><a href="http://www.website.ws/whois.dhtml" target="_blank" rel="nofollow">WebSite.ws Domain Lookup Service</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                                <tr>                        
                                    <th>.xyz</th>
                                    <td><a href="https://nic.xyz/whois" target="_blank" rel="nofollow">Nic.xyz WHOIS</a><i class="ico ico_new-window color-gray"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-d">Whoisで公開される情報の変更</h4>
                    <div class="section_body">
                       <p>ドメインのご契約状況や種類により、手順が異なります。</p>
                            <section class="block">
								<h5 class="block_ttl" id="link-d01">新規取得(登録)前、移管完了前の場合</h5>
                                <p>『エックスサーバー』でご契約のドメインにおける新規取得(登録)・移管完了時点でのWhoisの登録情報は、ドメインの種類により異なります。</p>
								 <div class="block_body mb10">
									<dl class="dl">
										<dt>JPドメイン以外(.com / .net / .org など)のドメイン</dt>
										<dd>
                                        <table class="table"> 
                                            <thead>
                                                <tr>
                                                    <th>項目</th>
                                                    <th>内容</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>                        
                                                    <th>Registrant Contact(登録者情報)</th>
                                                    <td>XServerアカウント『Whois登録情報設定』の登録内容</td>
                                                </tr>
                                                <tr>                        
                                                    <th>Admin Contact(管理者情報)</th>
                                                    <td>XServerアカウント『Whois登録情報設定』の登録内容</td>
                                                </tr>
                                                <tr>                        
                                                    <th>Biliing Contact(経理担当者情報)</th>
                                                    <td>当社(XSERVER Inc.)名義</td>
                                                </tr>
                                                <tr>                        
                                                    <th>Tech Contact(技術担当者情報)</th>
                                                    <td>当社(XSERVER Inc.)名義</td>
                                                </tr>
                                            </tbody>
                                        </table>
										</dd>
										<dt>汎用JP(.jp)、都道府県型JP(.都道府県.jp)ドメイン</dt>
										<dd>
                                            <table class="table mb5"> 
                                                <thead>
                                                    <tr>
                                                        <th>項目</th>
                                                        <th>内容</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>                        
                                                        <th>登録者情報(※)</th>
                                                        <td>XServerアカウント『Whois登録情報設定』の登録内容</td>
                                                    </tr>
                                                    <tr>                        
                                                        <th>公開連絡窓口情報</th>
                                                        <td>当社(エックスサーバー株式会社)名義</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="note">(※)登録者情報としてWhoisで公開される項目は「登録者名(日本語、英語)」のみになります。</p>
										</dd>
										<dt>属性型JP(co.jp / or.jp / ne.jp / gr.jp / ac.jp / ed.jp)ドメイン</dt>
										<dd>
                                            <div class="border border_gray mb5">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>新規取得時</p>
                                                <p class="mb10">取得申請時に記入の内容で登録します。</p>
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>移管(指定事業者変更)時</p>
                                                <p>移管前の登録内容を変更することなく引き継ぎます。</p>
                                            </div>
										</dd>
									</dl>
								 </div><!-- /.block_body -->
                                <p>XServerアカウント『Whois登録情報設定』における登録内容の確認や変更の手順詳細は、マニュアル「<a href="man_member_setting_whois.php">Whois登録情報設定</a>」をご参照ください。</p>
							</section>
                        
                         <section class="block">
								<h5 class="block_ttl" id="link-d02">取得、移管完了後(契約中)の場合</h5>
                                <p>ドメインの種類により異なります。</p>
								 <div class="block_body mb10">
									<dl class="dl">
										<dt>JPドメイン以外(.com / .net / .org など)のドメイン</dt>
										<dd>
                                            <div class="border border_gray mb5">
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>Registrant Contact(登録者情報)、Admin Contact(管理者情報)</p>
                                                <p class="mb10">「ドメインパネル」にて確認・変更が可能です。<br>
                                                手順詳細は、マニュアル「<a href="man_domain_whois.php">Whois情報</a>」をご参照ください。</p>
                                                <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>Biliing Contact(経理担当者情報)、Tech Contact(技術担当者情報)</p>
                                                <p>カスタマーサポートにご依頼いただくことにより、変更が可能です。<br>
                                                詳細は<a href="../support">カスタマーサポート</a>へお問い合わせください。</p>
                                            </div>
										</dd>
										<dt>汎用JP(.jp)、都道府県型JP(.都道府県.jp)ドメイン</dt>
										<dd>
                                            <p>「ドメインパネル」にて確認・変更が可能です。<br>手順詳細は、マニュアル「<a href="man_domain_whois.php">Whois情報</a>」をご参照ください。</p>
										</dd>
										<dt>属性型JP(co.jp / or.jp / ne.jp / gr.jp / ac.jp / ed.jp)ドメイン</dt>
										<dd>
                                            <p>カスタマーサポートにご依頼いただくことにより、変更が可能です。<br>詳細は<a href="../support">カスタマーサポート</a>へお問い合わせください。</p>
										</dd>
									</dl>
								 </div><!-- /.block_body -->
							</section>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-e">「Whois代理公開サービス」について</h4>
                    <div class="section_body">
                        <p>レジストリよりWhois情報の代理公開が許可されている以下のドメイン名では、Whoisで公開される情報を当社(XSERVER Inc.、エックスサーバー株式会社)名義に設定することができます。</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>Whois情報の代理公開が可能なドメイン一覧</dt>
                            <dd>
                                .com / .net / .org / .biz / .info / .baby / .bar / .black / .blog / .blue / .bz / .cc / .click / .clinic / .college / .company / .design / .earth / .email / .fun / .gift / .group / .help / .host / .ink / .life / .link / .live / .lol / .me / .mobi / .moe / .mom / .monster / .news / .online / .osaka / .photo / .pics / .pink / .press / .red / .rent / .rest / .salon / .sexy / .site / .space / .store / .style / .tech / .tv / .website / .wiki / .works / .world / .ws / .xyz / .jp(※) / .都道府県.jp(※) ドメイン<br>
                                <p class="note">(※).jp / .都道府県.jp ドメインは、公開連絡窓口情報のみ対応</p>
                            </dd>
                        </dl>
                        <p>費用は無料です。<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>から申請することができます。<br>手順詳細は、以下のマニュアルをご参照ください。</p>
                        <div class="border border_gray mb15">
                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>新規取得(登録)前、移管完了前の場合</p>
                            <p class="mb10">マニュアル「<a href="man_member_setting_whois.php">Whois登録情報設定</a>」</p>
                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>取得、移管完了後(契約中)の場合</p>
                            <p>マニュアル「<a href="man_domain_whois.php">Whois情報</a>」</p>
                        </div>
                        <p>
                            なお、ドメインに関する国際機関であるICANN(The Internet Corporation for Assigned Names and Numbers)の定めにより、代理公開サービスのご利用にかかわらず、ご本人名義での「ドメイン登録者・管理者情報」(Registrant Contact / Admin Contact)の登録が必要です。
                        </p>
                    </div>
                </section>
                <!-- /.section -->
                
                <section class="section">
                    <h4 class="section_ttl" id="link-f">「Whois登録者情報非表示設定」について</h4>
                    <div class="section_body">
                        <p>レジストリよりWhois情報における登録者情報の非表示が許可されている以下のドメイン名では、「Whois登録者情報非表示設定」を有効にすることができます。</p>
                        <dl class="dl">
                            <dt><i class="ico ico_square-fill"></i>Whois登録者情報非表示設定が可能なドメイン一覧</dt>
                            <dd>
                                .jp / .都道府県.jp ドメイン
                                <p class="note">※設定有無を問わず、「登録者名」(日本語・英語)以外の各項目はWhoisで公開されません</p>
                            </dd>
                        </dl>
                        <p>本機能と「Whois代理公開サービス」いずれも【ON(有効)】にすることにより、Whois情報にお客様の情報が表示されないようになります。</p>
                        <p>費用は無料です。<a href="<?php print $SECURE_URL; ?>xapanel/login/xserver/" target="_blank">XServerアカウント</a>から申請することができます。<br>手順詳細は、以下のマニュアルをご参照ください。</p>
                        <div class="border border_gray mb15">
                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>新規取得(登録)前、移管完了前の場合</p>
                            <p class="mb10">マニュアル「<a href="man_member_setting_whois.php">Whois登録情報設定</a>」</p>
                            <p class="mb5 font-bold"><i class="ico ico_circle base-color"></i>取得、移管完了後(契約中)の場合</p>
                            <p>マニュアル「<a href="man_domain_whois.php">Whois情報</a>」</p>
                        </div>

                        <h5 class="block_ttl" id="link-f01">「登録者情報非表示設定機能」のご利用に際しての注意事項</h5>
                        <p>「登録者情報非表示設定機能」のご利用に際しては、JPRSが定める登録規則とご利用条件をご確認のうえ、遵守する必要があります。</p>
                        <p>登録規則・ご利用条件のうち特に重要な項目は以下の通りです。</p>
                        <ul class="ul">
                            <li>ドメイン名の登録者情報は公開が原則であること</li>
                            <li>登録者情報を非表示とする意図や理由がある場合のみ申し込むことができること</li>
                            <li>Whoisで登録者名を非表示にすることによってトラブルの解決などが遅くなる可能性があること</li>
                            <li>登録規則およびご利用条件を遵守すること</li>
                            <li>登録者の正確な情報を登録すること</li>
                            <li>公開連絡窓口を通じて、登録者に連絡がつくこと</li>
                            <li>
                                Whoisで登録者名が非表示となっている場合でも、以下の場合には登録者名を含む登録情報が第三者に開示・提供されること
                                <ol>
                                    <li>情報開示請求があった場合</li>
                                    <li>JP-DRPによる紛争処理手続きが発生した場合</li>
                                    <li>法令等による要請がある場合</li>
                                    <li>その他「<a href="https://jprs.jp/doc/rule/dom-data-handling.html" target="_blank">JPドメイン名登録情報の取り扱いについて</a>」に定める事項に該当する場合</li>
                                </ol>
                            </li>
                            <li>ご利用条件に違反した場合は、事前の通知なく非表示設定を終了される場合があること。また、登録者情報が不正確である場合は、ドメイン名が削除される場合があること</li>
                        </ul>
                    </div>
                </section>
                <!-- /.section -->
                <?php include("vote.php"); ?>
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