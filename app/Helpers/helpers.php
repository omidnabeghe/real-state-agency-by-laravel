<?php
use Illuminate\Support\Str;


function sidebarShowSelect($url,$text){
    if(Str::of(url()->current())->is('http://localhost:8000'.$url)){
        return $text;
 }
}

function myUrlImage($image){
    $replaced = Str::replace('\\', '/', $image);
    return $replaced;
}

function briefBody($text, $num1=0, $num2){
    $body = Str::substr($text , $num1, $num2);
    return $body;
}


function sellStatus($status){
    return ($status == 0) ? 'BUY' : 'RENT';

}

function type($type){
    switch ($type) {
        case 0 :
            return 'apartment';
            break;
            case 0 :
                return 'apartment';
                break;
            case 1 :
                return 'vila';
                break;
            case 2 :
                return 'soole';
                break;
            case 3 :
                return 'farm';
                break;


        default:
            # code...
            break;
    }

}

function userType($type){
    return ($type == 1) ? 'admin' : 'user';

}







?>

