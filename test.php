<?php 

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) -1 ; //put the length -1 in cache

    echo $alphaLength;

   
    for ($i = 0; $i < 5; $i++) {

        $n = rand(0, $alphaLength);

        $pass[] = $alphabet[$n] ;

        
    }
    return implode($pass) ; //Implode Generated Array


};



$captcha =  randomPassword();



    
    $img = imagecreate(60, 18);

    $r = rand(0,255);
    $g = rand(0,255);
    $g = rand(0,255);

    
    $textbgcolor = imagecolorallocate($img, rand(0,255), rand(0,125), rand(0,255));
    $textcolor = imagecolorallocate($img, 0, 192, 255);
    
    if ($captcha != '') {
        $txt = $captcha;
        imagestring($img, 15, 7, 0, $txt, $textcolor);
        ob_start();
        imagepng($img);
        printf('<img src="data:image/png;base64,%s"/ width="100", height="30">', base64_encode(ob_get_clean()));
    }



