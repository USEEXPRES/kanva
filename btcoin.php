<?php
//Code by : @tnox1 - @tnox1
while(true){        
$token = "5708173011:AAGxmvNlsBEk56RJLagW4Pg8vK23W4JUyus";
$LLLLi='https://bitpay.com/api/rates'; 
$json=json_decode( file_get_contents( $LLLLi ) ); 
$dollar=$btc=0; 

foreach( $json as $obj ){ 
      if( $obj->code=='USD' )$btc=$obj->rate; 
} 
$btc . "USD<br />"; $dollar=1 / $btc; 
$HHHHr = ['chat_id' =>"@Mahiely",'text' =>$btc.'$',];
$ret = json_decode(file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($HHHHr) ));
sleep(20);
}