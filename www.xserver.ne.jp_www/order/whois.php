<?php

// �����ɥᥤ�󸡺��ϡ����å����ɥᥤ��θ���������¹Ԥ���褦������
// ���������å������פȤʤ뤿�ᥳ���ȥ����ȡ�


///***************************************************************
//*�ڳ��ס�
//*	���Ϥ��줿�ɥᥤ��̾�ȥɥᥤ��μ����whois������������
//*	���Ѳ�ǽ���ɤ������ǧ���륹����ץȡ�
//*
//*�ڥե����빽����
//*	whois.php whois���󥹥���ץ�����
//*	whois.tpl whois���󥹥���ץȥƥ�֥졼��
//*	  |-phplib
//*	     |-idna_convert(puny�������Ѵ��饤�֥��)
//*
//****************************************************************/
//
//if (!defined('PATH_SEPARATOR')) {
//    if (OS_WINDOWS) {
//        /** include_path separator(Windows) */
//        define('PATH_SEPARATOR', ';');
//    } else {
//        /** include_path separator(Unix) */
//        define('PATH_SEPARATOR', ':');
//    }
//}
//
//define('BASE', dirname(dirname(__FILE__)));
//$PEAR = BASE . "/phplib/PEAR";
//$lib  = BASE . "/phplib";
//
//
//define('DomainSearchLogDir',      dirname(BASE).'/ipdata');
//define('DomainSearchLogHtaacess', DomainSearchLogDir.'/.htaccess');// .htaccess
//define('DomainSearchLog',         DomainSearchLogDir.'/domain_search.log');// log�ե�����
//define('DomainSearchLimitedIP',   DomainSearchLogDir.'/domain_search_limited_ip.log');// ���������оݤ�IP���Ǽ����log�ե�����
//
//
///* �����Ǽ����ǥ��쥯�ȥ�˥������������Ѥ� .htaccess ��̵��������� */
//if( !is_file(DomainSearchLogHtaacess) ){
//    file_put_contents(DomainSearchLogHtaacess, 'deny from all');// ����ö�����Ȳ�
//}
//
//
//ini_set('include_path', /*ini_get('include_path') . PATH_SEPARATOR .*/ implode(PATH_SEPARATOR, array($lib,$PEAR)));
//
//mb_internal_encoding('EUC-JP');
//mb_regex_encoding('EUC-JP');
//
//
//if (isset($_POST['name'],$_POST['domain']) && $_POST['name'] && $_POST['humancheck']) {//�ɥᥤ�󸡺��������줿���ν���
//    if( $_POST['humancheck'] != md5($_SERVER['REMOTE_ADDR'].'#x#server#'.$_POST['accesstime']) ){// salt ���Ѥ������� .tpl �� index.php �⽤��
//        $err = '���������⤷������̵���ޤް�����ַвᤷ�ޤ�����'.'������Ǥ���������Ƹ������Ƥ���������';
//    }else{
//        /* �ϥå��夬���פ���С��ϥå���δ����ڤ���ǧ */
//        if( $_POST['accesstime'] < time()-60*10 ){
//            $err = '���������⤷������̵���ޤް�����ַвᤷ�ޤ�����'.'������Ǥ���������Ƹ������Ƥ���������';
//        }else{
//        	if(mb_strlen($_POST['name']) == strlen($_POST['name'])){
//        		if ( preg_match("/^xn--.+$/",$_POST['name']) ){
//        			//$err = "���ܸ�ɥᥤ��θ��������ܸ�Ǥ��ꤤ���ޤ���";
//        			foreach ($_POST['domain'] as $key){
//        				if( !in_array($key, array('com', 'net', 'jp', 'tjp')) ){
//        					$puny_err = "���ܸ�ɥᥤ��̾�ϡ�com�ס�net�ס�jp�ס���ƻ�ܸ�JP�פΤ߼����դ��Ƥ��ޤ���";
//        				}
//        			}
//        			list($r,$data) = main(true);
//        			$puny_name = $_POST['name'];
//        			$puny_beforename = puny_decode($_POST['name']);
//        		}
//        		else if (preg_match("/^[0-9a-zA-Z][0-9a-zA-Z\-]+?[0-9a-zA-Z]$/",$_POST['name'])) {//�̾�ɥᥤ������ϵ�§�����å�
//        			if (strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 63){//ʸ�������¥����å�
//        				list($r,$data) = main();//�ᥤ�����
//        				$puny_beforename = $_POST['name'];
//        			}
//        			else {
//        				$err = "3ʸ���ʾ塢63ʸ���ʲ������Ϥ���������";
//        			}
//        		}else {
//        			if (strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 63){//ʸ�������¥����å�
//        		   $err = "�ϥ��ե��-�װʳ��ε���ϻ��ѤǤ��ޤ���";
//        			}else{
//        				$err = "3ʸ���ʾ塢63ʸ���ʲ������Ϥ���������";
//        		   }
//        		}
//        	}
//        	else{
//        		if (mb_ereg("^[0-9a-zA-Z��-��-����-��С-��\-����������������������]+$",$_POST['name'])) {//���ܸ�ɥᥤ������ϵ�§�����å�
//        			if (mb_strlen($_POST['name']) >= 1 && mb_strlen($_POST['name']) <= 15){//ʸ�������¥����å�
//        				foreach ($_POST['domain'] as $key){
//        					if( !in_array($key, array('com', 'net', 'jp', 'tjp')) ){
//        						$puny_err = "���ܸ�ɥᥤ��̾�ϡ�com�ס�net�ס�jp�ס���ƻ�ܸ�JP�פΤ߼����դ��Ƥ��ޤ���";
//        					}
//        				}
//        				list($r,$data) = main(true);//�ᥤ�����
//        				$puny_name = puny_encode($_POST['name']);
//        				$puny_beforename = $_POST['name'];
//        			}
//        			else {
//        				$err = "���ܸ�ɥᥤ���1ʸ���ʾ塢15ʸ���ʲ������Ϥ���������";
//        			}
//        		}
//        		else{
//        			$err = "�ɥᥤ��̾�ϡ�Ⱦ�ѱѿ��ڤӡ�-�ʥϥ��ե�ˡפΤߤ����Ϥ��Ƥ���������";
//        		}
//        	}
//        }
//    }
//
//
//    foreach($r as $value){
//        if( $value == '2' ){// �ɥᥤ�󸡺�������¤���ã
//            $limiterror = 1;
//        }elseif( !($value == '1' || $value == '0') ){// API���顼
//            $apierror = 1;
//        }
//    }
//
//
//}
//
//
////�ᥤ�����
//function main ($mb=null) {
//
//
//    $RemoteAddr = $_SERVER['REMOTE_ADDR'];// IP���ɥ쥹
//    $ClearLimitTime   = 10800;//   ���¤�������ޤǤλ���(��)// 10800 = 3h
//    $CountTargetTime  = 10800;//   ��������ν����оݤȤ���ޤǤλ���(��)// 10800 = 3h
//    $SerchLimitNum    = 30;//      ���¤��оݤȤ��븡�����// 30
//    $LogSizeThreshold = 5000000;// ���ե���������������// 5000000 = 5MB
//    $NowTime          = time();//  ���߻���
//
//
//    $mailaddress  = "support@xserver.ne.jp";
//    $subject      = "xserver domain search";
//    $body         = "IP:".$RemoteAddr."\n";
//    $body        .= "domainname:".$_POST['name']."\n";
//    $body        .= "domaintype:".implode("\n",$_POST['domain'])."\n";
//
//
//    /* �����꥿����ꥹ�� */
//    $AllLimitIp = array(
//        '119.72.197.106',
//        '180.56.57.120',
//        '119.238.101.20',
//        '61.113.48.82',
//        '126.7.187.100',
//        '118.6.160.140',
//        '122.197.17.94',
//        '61.127.64.89',
//        '118.83.59.35',
//        '118.155.69.192',
//        '203.189.102.89',
//        '124.147.102.113',
//        '61.119.116.147',
//        '116.94.148.86',
//        '101.142.220.68',
//        '180.14.47.33',
//        '61.119.116.12',
//        '180.144.227.63',
//        '153.175.16.117',
//        '118.1.85.150',
//        '36.3.91.91',
//        '126.82.170.235',
//        '202.212.14.178',
//        '61.113.71.204',
//        '118.20.125.98',
//        '223.218.160.98',
//        '219.110.228.42',
//        '119.241.249.189',
//        '125.197.216.49',
//        '153.161.68.202',
//        '223.132.66.166',
//        '223.219.152.254',
//        '60.154.60.50',
//        '111.89.207.246',
//        '122.210.29.208',
//        '114.158.196.135',
//        '54.178.8.220',
//        '125.196.147.245',
//        '61.119.116.11',
//        '121.84.126.228',
//        '203.136.115.4',
//        '210.250.132.33',
//        '27.55.233.178',
//        '157.7.196.95',
//        '106.168.213.127',
//        '220.147.148.87',
//        '114.178.131.8',
//        '114.164.37.230',
//        '153.179.21.202',
//        '180.12.153.164',
//        '119.72.193.241',
//        '220.102.149.66',
//        '122.135.123.58',
//        '61.197.251.112',
//        '219.66.187.244',
//        '118.109.37.86',
//        '220.102.182.43',
//        '111.89.207.184',
//        '121.101.71.115',
//        '124.154.168.20',
//        '180.54.114.122',
//        '202.229.165.21',
//        '153.163.120.110',
//        '112.138.30.96',
//        '106.188.109.43',
//        '180.0.247.114',
//        '54.178.47.89',
//        '211.125.92.233',
//        '210.136.215.141',
//        '203.189.102.100',
//        '122.251.216.41',
//        '220.27.250.7',
//        '61.113.48.20',
//        '211.7.144.107',
//        '183.177.193.233',
//        '27.135.247.162',
//        '106.188.47.17',
//        '101.128.197.36',
//        '114.182.200.213',
//        '61.113.71.201',
//        '203.189.102.41',
//        '119.72.192.195',
//        '61.119.116.154',
//        '184.22.86.111',
//        '122.26.116.115',
//        '220.220.225.254',
//        '42.148.121.38',
//        '114.157.133.5',
//        '114.149.105.111',
//        '210.172.6.94',
//        '61.119.116.156',
//        '210.165.91.30',
//        '211.124.120.27',
//        '122.29.247.149',
//        '114.160.215.114',
//        '27.55.207.76',
//        '202.229.50.112',
//        '219.125.152.190',
//        '101.128.197.18',
//        '61.113.49.98',
//        '219.110.246.79',
//        '221.170.10.37',
//        '114.166.170.163',
//        '222.158.77.74',
//        '218.221.230.177',
//        '125.195.46.77',
//        '61.119.116.20',
//        '220.213.135.243',
//        '180.25.25.117',
//        '36.2.154.226',
//        '118.15.57.162',
//        '118.241.210.36',
//        '153.190.40.161',
//        '126.9.242.23',
//        '223.216.132.193',
//        '111.89.207.241',
//        '114.158.135.176',
//        '221.170.25.64',
//        '118.237.157.245',
//        '220.102.148.153',
//        '180.4.25.51',
//        '114.49.15.97',
//        '110.2.105.58',
//        '61.89.30.78',
//        '202.0.51.214',
//        '117.55.65.139',
//        '218.221.230.91',
//        '125.197.222.152',
//        '119.72.199.151',
//        '115.125.133.154',
//        '27.55.204.1',
//        '114.49.39.48',
//        '221.250.4.92',
//        '49.98.52.129',
//        '103.5.142.25',
//        '158.199.142.174',
//        '211.3.111.231',
//        '114.191.86.94',
//        '180.56.10.134',
//        '61.24.102.37',
//        '219.101.210.86',
//        '27.55.198.233',
//        '27.55.232.166',
//        '223.207.3.205',
//        '117.55.65.140',
//        '27.55.235.64',
//        '182.249.242.25',
//    );
//
//
//    /* �����꥿���� */
//    if( in_array($RemoteAddr, $AllLimitIp) ){
//        return;
//    }
//
//
//    // �Ƽ���ե���������̤�Ķ�ᤷ�Ƥ�����Ͻ����
//    if( is_file(DomainSearchLog) ){
//        if( $LogSizeThreshold < filesize(DomainSearchLog) ){
//            $fpSearch = fopen(DomainSearchLog, "w");
//        }
//    }
//    if( is_file(DomainSearchLimitedIP) ){
//        if( $LogSizeThreshold < filesize(DomainSearchLimitedIP) ){
//            $fpLimit = fopen(DomainSearchLimitedIP, "w");
//        }
//    }
//
//
//    /* �����ѥ��˵��ܤ�̵������ǧ */
//    //$LimitedIpLogRead = file_get_contents(DomainSearchLimitedIP);
//    //$LimitedIpLogData = explode("\n", $LimitedIpLogRead);
//    /* �����ѥ��ǡ������ɤ߹��� */
//    /*
//    $StartTime = time()-$ClearLimitTime;
//    foreach( $LimitedIpLogData as $val ){
//        $val = trim($val);
//        if( $val == '' ){
//            continue;
//        }
//        $LimitedIpLogRecode = explode(',', $val);
//        if( $LimitedIpLogRecode[1] == $RemoteAddr ){
//            if( $StartTime <= $LimitedIpLogRecode[0] ){
//                return;
//            }
//        }
//    }
//    */
//    $fpLimit = fopen(DomainSearchLimitedIP, "r");// �ɤ߹�������
//    if( flock($fpLimit, LOCK_SH) ){// �ե������å�
//        $StartTime = $NowTime-$ClearLimitTime;
//        while( !feof($fpLimit) ){
//            $LimitedIpLogData[] = fgets($fpLimit);// 1�Ԥ��ļ���
//        }
//        foreach( $LimitedIpLogData as $val ){
//            $val = trim($val);
//            if( $val == '' ){
//                continue;
//            }
//            $LimitedIpLogRecode = explode(',', $val);
//            if( $LimitedIpLogRecode[1] == $RemoteAddr ){
//                if( $StartTime <= $LimitedIpLogRecode[0] ){
//                    $r['error'] = 2;
//                    $data = array();
//                    return array($r, $data);
//                }
//            }
//        }
//        flock($fpLimit, LOCK_UN);// ��å����
//    }
//
//
//
//
//    /* �����ġ�������Ѥ���IP���ɥ쥹���Ǽ ������ �����������ॹ�����,IP���ɥ쥹 */
//    //$LogString = time().','.$RemoteAddr;
//    //file_put_contents(DomainSearchLog, $LogString."\n", FILE_APPEND);
//    $LogString = $NowTime.','.$RemoteAddr."\n";
//    $fpSearch = fopen(DomainSearchLog, "a");// �����˽񤭹�������
//    if( flock($fpSearch, LOCK_EX) ){
//        fputs($fpSearch, $LogString);
//        flock($fpSearch, LOCK_UN);// ��å����
//    }
//
//
//
//
//    /* ���ǡ������ɤ߹��� */
//    /*
//    $LogRead = file_get_contents(DomainSearchLog);
//    $LogData = explode("\n", $LogRead);
//
//    $StartTime = time()-$CountTargetTime;
//    foreach( $LogData as $val ){
//        $val = trim($val);
//        if( $val == '' ){
//            continue;
//        }
//        $LogRecode = explode(',', $val);
//        if( $StartTime <= $LogRecode[0] ){
//            if( $LogRecode[1] == $RemoteAddr ){
//                $SerchLogIp[$RemoteAddr] += 1;
//            }
//        }else{
//            continue;
//        }
//        if( $SerchLimitNum < $SerchLogIp[$RemoteAddr] ){
//            break;
//        }
//    }
//    */
//    $fpRead = fopen(DomainSearchLog, "r");// �ɤ߹�������
//    if( flock($fpRead, LOCK_SH) ){// �ե������å�
//        $StartTime = $NowTime-$CountTargetTime;
//        while( !feof($fpRead) ){
//            $LogDataRecode = fgets($fpRead);// 1�Ԥ��ļ���
//            $LogRecode     = explode(',', $LogDataRecode);
//            if( $StartTime <= $LogRecode[0] ){
//                $LogData[] = $LogDataRecode;
//            }else{
//                continue;
//            }
//        }
//        foreach( $LogData as $val ){
//            $val = trim($val);
//            if( $val == '' ){
//                continue;
//            }
//            $LogRecode = explode(',', $val);
//            if( $StartTime <= $LogRecode[0] ){
//                if( $LogRecode[1] == $RemoteAddr ){
//                    $SerchLogIp[$RemoteAddr] += 1;
//                }
//            }else{
//                continue;
//            }
//            if( $SerchLimitNum < $SerchLogIp[$RemoteAddr] ){
//                break;
//            }
//        }
//        flock($fpLimit, LOCK_UN);// ��å����
//    }
//
//
//
//
//    /* ���²������ã�������������ѥ��˵���(������ָ����Ԥ��ʤ�����) */
//    if( $SerchLimitNum < $SerchLogIp[$RemoteAddr] ){
//        //$LimitedIpLogString = time().','.$RemoteAddr;
//        //file_put_contents(DomainSearchLimitedIP, $LimitedIpLogString."\n", FILE_APPEND);
//        $LimitedIpLogString = $NowTime.','.$RemoteAddr."\n";
//        $fpLimit = fopen(DomainSearchLimitedIP, "a");// �񤭹�������
//        if( flock($fpLimit, LOCK_EX) ){
//            fputs($fpLimit, $LimitedIpLogString);
//            flock($fpLimit, LOCK_UN);// ��å����
//        }
//        mail($mailaddress,$subject,$body);
//        $r['error'] = 2;
//        $data = array();
//        return array($r, $data);
//    }
//
//
//
//
//    $url = "https://secure.netowl.jp/star-domain/api.cgi?action_api_domaincheck=true";
//    $password =  "stardomaindomaincheckapi0918";
//	//API URL����ꤹ��
//	$url .= "&stardomain_api_password=".$password;
//	$url .= "&domainname=".$_POST['name'];
//
//	if(in_array('tjp',$_POST['domain'])){
//        foreach ($_POST['domain'] as $k => $f) {
//            if($f == 'tjp'){
//                unset($_POST['domain'][$k]);
//                break;
//            }
//        }
//        $_POST['domain'] = array_merge($_POST['domain'],array('hokkaido.jp','aomori.jp','iwate.jp','miyagi.jp','akita.jp','yamagata.jp','fukushima.jp','ibaraki.jp','tochigi.jp','gunma.jp','saitama.jp','chiba.jp','tokyo.jp','kanagawa.jp','niigata.jp',
//'toyama.jp','ishikawa.jp','fukui.jp','yamanashi.jp','nagano.jp','gifu.jp','shizuoka.jp','aichi.jp','mie.jp','shiga.jp','kyoto.jp','osaka.jp','hyogo.jp','nara.jp','wakayama.jp','tottori.jp',
//'shimane.jp','okayama.jp','hiroshima.jp','yamaguchi.jp','tokushima.jp','kagawa.jp','ehime.jp','kochi.jp','fukuoka.jp','saga.jp','nagasaki.jp','kumamoto.jp','oita.jp','miyazaki.jp',
//'kagoshima.jp','okinawa.jp'));
//    }
//
//	$i = 1;
//	//URL���������
//	foreach ($_POST['domain'] as $f) {
//		$url .= "&domaintype_list[".$i."]=".$f;
//		$i++;
//	}
//
//
//    //SSL������θ��ڤ�Ԥ�ʤ�
//    $context = stream_context_create(array(
//        'ssl' => array(
//        'verify_peer' => false,
//        'verify_peer_name' => false,
//        )
//    ));
//
//	//$res  = file_get_contents($url, false, $context);
//    $ch = curl_init();
//    curl_setopt( $ch, CURLOPT_URL, $url );
//    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//    $res = curl_exec( $ch );
//    curl_close( $ch );
//
//	$array = unserialize($res);
//    //����η�̤�����
//	foreach ($array as $kk => $ff){
//		if ($ff["extra"]){
//		    $r[$ff["type"]] = 0;
//		}elseif($ff["result"]) {
//		    $r[$ff["type"]] = 1;
//		}else{
//		    $r[$ff["type"]] = 0;
//		}
//	}
//	$data = array();
//	return array($r,$data);
//}
//
////Whois���󥵡��Уգң̼�������
//function getWhoisServer($data,$mb=null) {
//	if(!$mb){
//		switch($data) {//�̾�ɥᥤ��
//		    case 'com':
//		    case 'net':
//		        return 'whois.crsnic.net';
//		    case 'org':
//		        return 'whois.corenic.net';
//		    case 'biz':
//		        return 'whois.nic.biz';
//		    case 'bz':
//		        return 'whois.afilias-grs.info';
//		    case 'cc':
//		        return 'ccwhois.verisign-grs.com';
//		    case 'cn':
//		        return 'whois.cnnic.net.cn';
//		    case 'jp':
//		        return 'whois.jprs.jp';
//		    case 'in':
//		        return 'whois.inregistry.net';
//		    case 'info':
//		        return 'whois.afilias.net';
//		    case 'tv':
//		        return 'tvwhois.verisign-grs.com';
//		    case 'ws':
//		        return 'whois.worldsite.ws';
//		    case 'asia':
//		        return 'whois.nic.asia';
//		    case 'mobi':
//		        return 'whois.dotmobiregistry.net';
//		    default:
//		          return false;
//	    }
//	}
//	else {
//		switch($data) {//���ܸ�ɥᥤ��
//		    case 'net':
//	   		    return 'internic.net';
//		    case 'com':
//		        return 'whois.crsnic.net';
//		    case 'jp':
//		        return 'whois.jprs.jp';
//		    default:
//		          return false;
//	    }
//	}
//}
//
////���󥳡��ɽ���
//function puny_encode($val) {
//	require_once 'idna_convert/idna_convert.class.php';
//	$val = mb_convert_encoding($val,"UTF-8","EUC-JP");
//    $idn = new idna_convert();
//    return $idn->encode($val);
//}
//
////�ǥ����ɽ���
//function puny_decode($val) {
//  	require_once 'idna_convert/idna_convert.class.php';
//    $idn = new idna_convert();
//    $val = $idn->decode($val);
//    return mb_convert_encoding($val,"EUC-JP","UTF-8");
//}

//HTML������print�ؿ�
function s_print($var){
	print htmlspecialchars($var, ENT_QUOTES, $charset = "EUC-JP");
}

//�ƥ�ץ졼��
require_once'whois.tpl';
?>
