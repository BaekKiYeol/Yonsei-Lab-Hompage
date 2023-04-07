<?php
//액세스 토큰 발급
// https://api.instagram.com/oauth/authorize?client_id=556258723196545&redirect_uri=https://gori-studio.kr/oauth&scope=user_profile,user_media&response_type=code 
// 장기 액세스 토큰이 발급
// https://graph.instagram.com/access_token?grant_type=ig_exchange_token&client_secret={Instagram 앱 시크릿 코드}&access_token={1시간짜리 액세스 토큰}

$url = "https://api.instagram.com/oauth/access_token";
$post_array = array(
    'client_id'=>'556258723196545',
    'client_secret'=>'3f37dd768023b9b5b72b938b0a2bb2b1',
    'grant_type'=>'authorization_code',
    'redirect_uri'=>'https://gori-studio.kr/oauth',
    'code'=>'AQBTI-G4X7cae862K4unJsoP_K-vGnC_s08fAP3Vf9PNZKdf8UwGraCMOvdtVzURAufd2nr2lR8hJOcdKhd8e1NYph1G82tqT9RJGXTxRLkluBimstPPS5SgX5ueh8JJY7iEGb-5vbVAoGSZ7kpcqsLYTP5SH2o5Q3K5iPk6WzzlcEcGSq9EtzmGgCAt3rDfhqs3nvfpvME8d8-U3rrIJJgEzqMAdFIJewnqe8ULVjFPHA'
);
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_POST,true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_array);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result,true);
print_r($result);
?>

