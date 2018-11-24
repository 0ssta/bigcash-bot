
<?php
function asw($a, $delay, $reff) {
 		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://adscendmedia.com/adwall/api/publisher/25065/profile/5245/user/".$reff."/transactions.json?api_key=Tvj4DCl1YexPjnlRwiRgT2CAiQAhVKQZgJdxG3a0Oljh1pz5AbuK3IOK5vU3&currency_adjustment=1&description=videoBG");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		$headers = array ();
			$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; SM-J320G Build/LMY47V)";
			$headers[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
echo "BOT BIGCASH\n\n";
echo "MASUKKAN REFF   : ";
$reff = trim(fgets(STDIN));
echo "JUMLAH  : ";
$jum   = trim(fgets(STDIN));
echo "\n";
for($a=0;$a<$jum;$a++){
sleep (5);
$oce   = asw($a, $delay, $reff);
echo "".$oce."\n\n";
}
?>
