<?php



function randomPassword($numero, $check) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!(){}=?~/*[]';
    //$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //$alphabet = 'abcdefghijkzzzzaaaaaabbbcceefghijk';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $numero; $i++) {
        $n = rand(0, $alphaLength);
        if($check == false){
            if(!in_array($alphabet[$n], $pass)){
                $pass[] = $alphabet[$n];
            }
        } elseif($check == true){
            $pass[] = $alphabet[$n];
        }
    }
    return implode($pass); 
}

?>