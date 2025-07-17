<?php
class body {
	protected $body;
	protected $rbody;

	function __construct(){
		$this->body= <<<EOM
────────────────────────────────────
【XServerアカウントＩＤ】
{$_POST['user_id']}

【お名前】
{$_POST['name']}　様

【アカウント】
{$_POST['flag']}

【メールアドレス】
{$_POST['mailaddress']}

【件名】
{$_POST['title']}

【URL】
{$_POST['url']}

【内容】
{$_POST['content']}
────────────────────────────────────
EOM;
		$this->rbody= <<<EOM
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【エックスサーバー】お問い合わせを受け付けました
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

メールアドレス ： {$_POST['mailaddress']}

お問い合わせくださいまして、誠にありがとうございます。
エックスサーバーサポートでございます。

お問い合わせ内容を確認の上、ご返信先メールアドレスへ回答いたします。
いましばらくお待ちくださいますようお願いいたします。


なお、お問い合わせから24時間を経過しましても回答がない場合、
サポートにてお問い合わせ内容を受信できていない可能性がございます。

大変お手数ですが、「support@xserver.ne.jp」まで
再度お問い合わせくださいますようお願いいたします。 

────────────────────────────────────
【XServerアカウントＩＤ】
{$_POST['user_id']}

【お名前】
{$_POST['name']}　様

【アカウント】
{$_POST['flag']}

【メールアドレス】
{$_POST['mailaddress']}

【件名】
{$_POST['title']}

【URL】
{$_POST['url']}

【内容】
{$_POST['content']}

───────────────────────────────────
エックスサーバーサポート
　◇URL   ：https://www.xserver.ne.jp/
　◇E-Mail：support@xserver.ne.jp
　◇TEL   ：[ご契約中のお客様はこちら] 06-6147-2580
            [新規ご契約に関する相談窓口] 0120-183-002
   　　　　（平日10時00分-18時00分、土日祝休）

　ご不明な点につきましては、まずはこちらをご参照ください。
　◆　https://www.xserver.ne.jp/manual/index.php
───────────────────────────────────
EOM;
	}
	
	function getBody() {
		return $this->body;
	}

	function getRbody() {
		return $this->rbody;
	}
}
?>