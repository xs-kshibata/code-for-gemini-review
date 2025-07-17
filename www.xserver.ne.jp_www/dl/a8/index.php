<?php include("../../conf.php"); ?>
<?php
mb_language('ja');
mb_internal_encoding('EUC-JP');
header ('Content-Type: text/html; charset=EUC-JP');

switch ($_GET["type"]) {
    case "x-catalog":
        $downloadFile = "../xserver-a8-catalog.pdf";
        break;
    case "xbiz-catalog":
        $downloadFile = "../xserverbusiness-a8-catalog.pdf";
        break;
    case "material":
        $downloadFile = "../xserver-a8-material.zip";
        break;
    default:
        $downloadFile = "../xserver-a8-catalog.pdf";
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="ja" class="ltie7 no-js"> <![endif]-->
<!--[if IE 7 ]> <html lang="ja" class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="ja" class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]> <html lang="ja" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ja" class="no-js"> <!--<![endif]-->
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
                'domains': ['www.xserver.ne.jp', 'business.xserver.ne.jp', 'support.xserver.ne.jp', 'www.xdomain.ne.jp', 'www.xdrive.ne.jp', 'www.nextshop.ne.jp', 'secure.xserver.ne.jp', 'shop.xserver.ne.jp', 'drive.xserver.ne.jp', 'domain.xserver.ne.jp', 'ssl.xserver.ne.jp', 'vps.xserver.ne.jp', 'game.xserver.ne.jp', 'ssl.xdomain.ne.jp']
            }
        });
    </script>

    <script>
        setTimeout(downloadFiles, 700);
        function downloadFiles(){
            location.replace("<?php echo $downloadFile?>");
        }
    </script>
    <noscript>
        <meta http-equiv="refresh" content="0;URL=<?php echo $downloadFile?>">
    </noscript>
</head>
<body></body>
</html>