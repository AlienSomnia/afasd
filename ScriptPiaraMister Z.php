<?php
#----------------------------------------------------------------------------------------------------------|
$token = '920a77e26d16ca38b204ddb2924862f0808a2ee6f2ea53c97ec9191697e72f39c935cb70309ebaa53dc7f&expires_in=0&user_id=400257435';//Андроид  http://servisvk.ru/api/wall.php
$tok3n = '726c7cbda5c3f27876253fd4a221f6e2839c369d27282786372fb238f8d99a1bd092ad4b242f1b1d9e6d4&expires_in=0&user_id=400257435'; //(АЙФОН)  vkhost.github.io/_/
$attachments = 'photo243692247_430567047'; //Фото добавляем в сохраненки, желательно использовать своё фото дабы не словить бан.  // Фото , по желанию , если не нужно , оставьте так. Как нужно вставлять:  'photo1_1' , 'photo2_2'; , пример: 'photo69193_416331051'
$GroupGet = array(
'59221166', '111745449', '53946539','76862936','77404716','104041019', '44133911',
'57929163','42584387','32391312','62340709','33704965','69815411','26734396','65233201','103721540','67004847','85307712' ,'25850386',
'53242527','3399995', '77819881', '60042211','58435717','55262798','35359693','32538224','94766517','382634',
'96955309','52641008','59833666','50061797','114675475','24370682','18924208','43524240','48260982','94512931','74806465','75441946',
'54658026','115090946','41328473','59067700','70146464','49938046','48627440','13672693','58980886','71334356','54305980','35296726',
'102777394','49098642','71480694','72690157','33769416','23990493','77778520','88444026','81768293','29273548','50016775','55888808',
'79765857','65861336','72544603','9436169','57079423','76887857','47901577','57893500','16526901','44723042','58281865','94946045',
'92537219','76949162','48177500','54614892', '55778655','70079183','55149458','76331265','95019548','55734302','47828674',
'73690371','20215278','54224042','51155922','111745449','62630460','47550982','46087024','82335096','32244683','36697600','79289982',
'24375763','20138186','36689965','11266048','50619935','68324713','55367092','67823806','51231761','75390995','28772209','50608558',
'92294735','63966396','62927970','75408673','89406281','108550518','28995074','23905651','55986158','85300923','15336495','30739877',
'79626196','39281112','75460958','55214888','74131389','99867602','60576408','68345935','20295050','73739402','21918698','55530464',
'31443054','47688706', '50125055','63975038','55161898', '59721672','42297612', '67816144', '47160067','27508536','30127198', 
'36352266','36231266','42416529','62584051','72686157','52669455','53966216','39130136','30127198','42059861','53249195','68101640',
'66939974','41356567','28361911','41760883','51609737','58794015','69596891','60682774','44267115','53249195','68101640','54830915');
#----------------------------------------------------------------------------------------------------------|
$Message = 'DO6ABL9ЙTECb B DPY3b9 
-------------
ПPUMУ BCEX
ЛAЙKU B3AUMHO
XOЧУ 10K DPУЗEЙ
---------------'; 
#----------------------------------------------------------------------------------------------------------|
curl('https://api.vk.com/method/account.setOnline?access_token='.$tok3n);
#----------------------------------------------------------------------------------------------------------|
$dr = curl('https://api.vk.com/method/friends.getRequests?out=0&count=100&access_token='. $tok3n);
$json2 = json_decode($dr,1);
$dr2 = $json2['response']['0'];
$q = curl('https://api.vk.com/method/friends.add?user_id='. $dr2 .'&access_token='. $tok3n);
#----------------------------------------------------------------------------------------------------------|
$of = curl('https://api.vk.com/method/friends.getRequests?out=1&count=100&access_token='. $tok3n);
$json2 = json_decode($of,1);
$of2 = $json2['response']['0'];
$q = curl('https://api.vk.com/method/friends.delete?user_id='. $of2 .'&access_token='. $tok3n);
#----------------------------------------------------------------------------------------------------------|

for($i = 0; $lilabogov < count($GroupGet); $lilabogov++) {
 $post = curl('https://api.vk.com/method/wall.post?owner_id=-'.$GroupGet[$lilabogov].'&message='.urlencode($Message).'&attachments='.$attachments.'&access_token='.$token);
}
#----------------------------------------------------------------------------------------------------------|
if($post[response]) {
 echo 'РАБОТАЕМ';
 echo "\n";
} else {
 echo 'НЕ РАБОТАЕТ';
 echo "\n";
}
#----------------------------------------------------------------------------------------------------------|
function curl($url){
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $response = curl_exec($ch);
 curl_close($ch);
 return $response;
}
Echo "

Script By Mister_ZI (overwritten) ";
?>
