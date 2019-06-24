<?php
session_start();

//session_destroy();
error_reporting(0);
ini_set('display_errors', 0);
$repetidoA = false;
$repetidoB = false;
$testando = 4;
$testando2 = 5;
if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}

switch ($acao) {
    case 'verifica':

        if (isset($_POST['VetorA']) or isset($_POST['VetorB'])) {
            
            
            if(isset($_POST['gravarA'])){
                $_SESSION['countA'] = $_SESSION['countA'] + 1; 
                $antiA = true;
                $_SESSION['antiA'] = $antiA;
                }    else{
                $countA = 0;
                if($_SESSION['antiA'] == true){

                }else{
                    $_SESSION['countA'] = 0;
                }
             
                }
            
            if(isset($_POST['gravarB'])){
                $_SESSION['countB'] = $_SESSION['countB'] + 1; 
                $antiB = true;
                $_SESSION['antiB'] = $antiB;
                }    else{
                $countB = 0;
                if($_SESSION['antiB'] == true){

                }else{
                    $_SESSION['countB'] = 0;
                }
             
                }
           
           
            for ($i=0; $i < $_SESSION['countA']; $i++){ 
                if($_POST['VetorA'] == $_SESSION['arrayA'][$i] and isset($_POST['gravarA'])){
                   
                $repetidoA = true;
                $_SESSION['countA'] = $_SESSION['countA'] - 1; 
                }
             }
             for ($i=0; $i < $_SESSION['countB']; $i++){ 
                if($_POST['VetorB'] == $_SESSION['arrayB'][$i] and isset($_POST['gravarB'])){
                   
                $repetidoB = true;
                $_SESSION['countB'] = $_SESSION['countB'] - 1; 
                }
             }

             if($repetidoA == false and isset($_POST['gravarA']) ){
                $_SESSION['arrayA'][$_SESSION['countA']] = $_POST['VetorA'];
           
 
                }
               if($repetidoB == false and isset($_POST['gravarB'])){
               $_SESSION['arrayB'][$_SESSION['countB']] = $_POST['VetorB'];
            

               }
            if (isset($_POST['fimA'])) {
                $condicaoA = true;
                $_SESSION['condicaoA'] = $condicaoA;
        
            }   
            if (isset($_POST['fimB'])){
                $condicaoB = true;
                $_SESSION['condicaoB'] = $condicaoB;

            }

            if($_SESSION['condicaoA']==true and $_SESSION['condicaoB']==true){


    
               $condicaoGeral = true;
           }

            include 'Trab.php';
           
        }else{
            include 'Trab.php';
        }
        break;
    case 'opcoes':

        $teste = true;
        $condicaoGeral = true;
       
        if(isset($_POST['removeA'])){
            $_SESSION['arrayA'] = null;

        }
 
        if(isset($_POST['removeB'])){
            $_SESSION['arrayB'] = null;
        }
   
        if(isset($_POST['lista'])){
            if ($_SESSION['arrayA']==null) {
                $vazioA = true;
            }else{
                $listaA = true;
            }
            if($_SESSION['arrayB']==null){
                $vazioB = true;
            }else{
                $listaB = true;
            }

        }
  
        if(isset($_POST['uni'])){            
            
            $arrayUni = array_merge($_SESSION['arrayA'],$_SESSION['arrayB']);
            $listaC = true;
 
            
}
        if(isset($_POST['intersecta'])){
            $arrayInter = array_intersect($_SESSION['arrayA'],$_SESSION['arrayB']);
            $listaD = true;
        }
  
        if(isset($_POST['diferencaAB'])){
            foreach($_SESSION['arrayA'] as $AB){
                $a++;
            }
            foreach($_SESSION['arrayB'] as $AB){
                $b++;
            }
        for ($d=1; $d <= $a; $d++) { 


        $arrayAB[$d] = $_SESSION['arrayA'][$d] - $_SESSION['arrayB'][$d];

        }
        $difeAB = true;
        }
 
        if(isset($_POST['diferencaBA'])){
            foreach($_SESSION['arrayA'] as $AB){
                $a++;
            }
            foreach($_SESSION['arrayB'] as $AB){
                $b++;
            }
        for ($d=1; $d <= $a; $d++) { 


        $arrayBA[$d] = $_SESSION['arrayB'][$d] - $_SESSION['arrayA'][$d];

        }
        $difeBA = true;
        }
    
        if(isset($_POST['conterAB'])){
            foreach($_SESSION['arrayA'] as $jooj){
                if (in_array($jooj,$_SESSION['arrayB'])) {
                    $ContidoAB = true;
                }else{
                    $ContidoAB = false;
                    $testando = false;
                    break;
                }
            }
 
        }
     
        if(isset($_POST['conterBA'])){
         
            foreach($_SESSION['arrayB'] as $jooj){
                if (in_array($jooj,$_SESSION['arrayA'])) {
                    $ContidoBA = true;
                }else{
                    $ContidoBA = false;
                    $testando2 = false;
                    break;
                }
            }
        }

        if(isset($_POST['inserir'])){
            $_SESSION['condicaoA'] = false;
            $_SESSION['condicaoB'] = false;
            header('Location: Trabalho.php');
        }

        if(isset($_POST['reseta'])){
            session_destroy();
            header('Location: Trabalho.php');
        }
        include 'Trab.php';
    break;

}
