<?php
namespace AllegroApi\Orders;
use AllegroApi\Allegro;

Class Orders extends Allegro{
    public static function checkoutForms($data=[],$simple=false){
        if($simple){ 
            //
            self::$curlUrl = "https://api.allegro.pl/order/checkout-forms/$id";
        }
        else {
            $data = http_build_query($data);
            self::$curlUrl = "https://api.allegro.pl/order/checkout-forms?$data";
        }
        $result=self::curlAllegro([
            'Authorization: Bearer '.file_get_contents(__DIR__ . "../../Auth/Token/token.txt"),
            'Accept: application/vnd.allegro.beta.v1+json'
        ]);
       return $result;
        
    }
}