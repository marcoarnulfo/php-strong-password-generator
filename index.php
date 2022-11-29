<?php

include __DIR__ . '/functions.php';

$check = $_GET['check'];
$lunghezzaPw = $_GET['pw'];
var_dump($lunghezzaPw);
var_dump($check);

if ($check == 'si'){
    $check = true;
} elseif ($check == 'no'){
    $check = false;
}

var_dump($check);




/*
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
*/

randomPassword($lunghezzaPw, $check);
var_dump(randomPassword($lunghezzaPw, $check));

/*
Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pw generator</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="section text-light text-center">
            <h1>Strong Password Generator</h1>
            <h3>Genera una password sicura</h3>
        </div>
        <div class="container bg-primary p-3 rounded mt-5">
            <div>Nessun parametro valido inserito</div>
        </div>
        <form action="pw.php" method="get">
            <div class="container bg-light text-dark p-5">
                <div class="mb-3 d-flex justify-content-between">
                <label for="pw" class="form-label">Lunghezza password</label>
                <input type="text" name="pw" id="pw" class="rounded" placeholder="Inserisci un Numero" aria-describedby="helpId">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="container-fluid text-dark d-flex ">
                    <label for="check" class="form-label">Consenti ripetizioni di uno o più caratteri: </label>
                    <input type="text" name="check" id="check" class="rounded" placeholder="Si o No" aria-describedby="helpId">
                </div>
            </div>
        </form>
    </div>
</body>
</html>