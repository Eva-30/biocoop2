<?php 
    function Maj($texte){
        $texte = strtoupper($texte);
        $texte = strtr($texte, 
        "äâàáåàéèëêòóôõöøìíîïùúûüýñçþÿæ?ðø",
        "ÄÂÀÁÅàÉÈËÊÒÓÔÕÖØÌÍÎÏÙÚÛÜÝÑÇÞÝÆ?ÐØ");
        return $texte;
    }
    
    function produitsSaisonier(){
        
        $date = date("m");
        $json = file_get_contents("produits.json");
        $decodeJson = json_decode($json);
        

        if(isset($_GET['action'])){
            $date = $_GET['action'];
            if($date > 12){
                $date = 1;
            }
            elseif($date < 1){
                $date = 12;
            }

            if($date < 10){
                $a = 0;
                $date = $a . $date;
            }
        }

        $moisactu = $decodeJson -> {"Produits"}[15] -> {"mois"}[0] -> {$date};

        echo("<main>");
        for($i = 0; $i < 55; $i++){
            $mois = $decodeJson -> {"Produits"}[$i] -> {"mois"}[0] -> {$date};
            if(isset($mois)){
                $nom = $decodeJson -> {"Produits"}[$i] -> {"nom"};
                $image = $decodeJson -> {"Produits"}[$i] -> {"image"};
                echo("<p>$nom<img src='$image' alt='image $nom'></p>");
            }
        }
        $date2 = $date + 1;
        echo("</main>");
        echo("<footer>");
            echo("<a href='index.php?action=". --$date ."'><img src='play1.png' alt='Précédent'></a>");
            echo("<h1>". Maj($moisactu) ."</h1>");
            echo("<a href='index.php?action=". ($date2) ."'><img src='play.png' alt='Suivant'></a>");
        echo("</footer>");

    }
    
    switch($date){

        case "01" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case "02" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case "03" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case "04" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case "05" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '06' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '07' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '08' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '09' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '10' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case '11' : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        case "12" : 
            include 'Vu.html';
            produitsSaisonier();
        break;
    
        default:
            include 'Vu.html';
            produitsSaisonier();
        break;
    }
?>
