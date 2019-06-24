<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trabalho AGT</title>
</head>
<body>
<?php if($condicaoGeral != true): ?> 
    <h2>Digite valores para os vetores</h2>
   
           
    <?php if ($repetidoA == true or $repetidoB == true): ?>
    <h2>ERRO - O valor ja foi inserido anteriormente</h2>
    <?php endif;?>
  
    <form action="?acao=verifica" method="POST" >
   
    <?php  if($_SESSION['condicaoA'] != true): ?>
        <h3>Vetor A</h3>
        <input type="number" name="VetorA" placeholder="Digite um valor">
        <input type="submit" name="gravarA" value="Enviar">
        <input type="submit" name="fimA" value="Finalizar Vetor"><br>
    <?php endif;?>
  
    <?php  if($_SESSION['condicaoB'] != true): ?>
        <h3>Vetor B</h3>
        <input type="number" name="VetorB" placeholder="Digite um valor">
        <input type="submit" name="gravarB" value="Enviar">
        <input type="submit" name="fimB" value="Finalizar Vetor"><br><br><br>
    <?php endif;?>  
        
    </form>
    <?php endif;?>

    <?php if ($teste == true): ?>
        <h1>Escolha uma das opções abaixo</h1>
<?php endif;?>
<?php if($condicaoGeral == true): ?> 
<form action="?acao=opcoes" method="POST">

    <input type="submit" name="inserir" value="Inserir Mais Valores"><br><br>
    <input type="submit" name="removeA" value="Remover Valores de A">
    <input type="submit" name="removeB" value="Remover Valores de B"><br><br>
    <input type="submit" name="lista"  value="Listar Conjuntos"><br><br>
    <input type="submit" name="uni"  value="Unir Conjuntos"><br><br>
    <input type="submit" name="intersecta"  value="Intersecção dos Conjuntos"><br><br>
    <input type="submit" name="diferencaAB"  value="Diferença de A - B">
    <input type="submit" name="diferencaBA"  value="Diferença de B - A"><br><br>
    <input type="submit" name="conterAB"  value="Verificar se A esta contido em B">
    <input type="submit" name="conterBA"  value="Verificar se B esta contido em A"><br><br><br><br>
    

    <input type="submit" name="reseta" value="Recomeçar">
</form>
<?php endif; ?>
<?php if($vazioA == true): ?>
<h2>O conjunto está vazio</h2>
<?php endif; ?>

<?php if($listaA == true): ?>
<h2>vetor A</h2>
<?php foreach ($_SESSION['arrayA'] as $numero): ?>

<li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($vazioB == true): ?>
<h2>O conjunto está vazio</h2>
<?php endif; ?>
<?php if($listaB == true): ?>
<h2>vetor B</h2>
<?php foreach ($_SESSION['arrayB'] as $numero): ?>

  <li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($listaC == true): ?>
<h2>vetor C</h2>
<?php foreach ($arrayUni as $numero): ?>

  <li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($listaD == true): ?>
<h2>vetor C</h2>
<?php foreach ($arrayInter as $numero): ?>

  <li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($difeAB == true): ?>
<h2>vetor Diferença de A - B</h2>
<?php foreach ($arrayAB as $numero): ?>

  <li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($difeBA == true): ?>
<h2>vetor Diferença de B - A</h2>
<?php foreach ($arrayBA as $numero): ?>

  <li><?= $numero;?></li>
        
<?php endforeach;?>     
<?php endif; ?>

<?php if($ContidoAB == true): ?>

<h2>A está contido em B</h2>

<?php endif; ?>

<?php if($testando == false):  ?>

<h2>A não está contido em B</h2>

<?php endif; ?>



<?php if($ContidoBA == true): ?>

<h2>B está contido em A</h2>

<?php endif; ?>

<?php if($testando2 == false): ?>

<h2>B não está contido em A</h2>

<?php endif; ?>
</body>
</html> 