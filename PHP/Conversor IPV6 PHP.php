<!DOCTYPE html>
  <title> Conversor IPV6 </title>
<?php			
  		

$ipv6_compact_saida = "";
$ipv6_expand_saida = "";

if (isset($_POST['expand']))
 $ipv6_compact_saida = compacta();

if (isset($_POST['compact']))
 $ipv6_expand_saida = expand();

function compacta(){
  $dado;
  $quartetos;
  $compact;
  $nrZeros = 0;

  $dado = $_POST['expand'];
  $quartetos = explode(":", $dado);

  for ($control = 0; $control < 8; $control++){
    $quartetos[$control] = remove3ZerosEsq($quartetos[$control]);
  }

  $nrZeros = quatroPts($quartetos);
  $compact = join(":", $quartetos);

  if ($nrZeros == 1){
    $compact = str_replace("*","0", $compact);
  }else{
    $compact = str_replace("*","", $compact);
  }


  $dado = $compact[0];
  if($dado === ":"){
    $compact = ":" + $compact;
  }
  $dado = $compact[strlen($compact) - 1];
  if($dado === ":"){
    $compact = $compact + ":";
  }

  return $compact;
}

function remove3ZerosEsq($quarteto){
  $letra;
  $control = 0;
  $contZeros = 0;

  while($control <= 2){
    $letra = $quarteto[$control];
    if ($letra === "0"){
      $contZeros ++;
    }else{
      $control = 4;
    }
    $control ++;
  }
  $quarteto = substr($quarteto, $contZeros);

  return $quarteto;
}
		
function quatroPts(&$quartetos){
  $control = 0;
  $zerado = 0;
  $posInic = 0;
  $nrQuartetos = 0;
  $quant;
  $posInics=[];
  $nrItens=[];

  while($control < 8){

    if($quartetos[$control] === "0"){
      array_push($posInics, $control);
      array_push($nrItens, 1);
      $control++;
      $control = contZerados($quartetos, $nrItens, $control);
    }
    $control++;
  }

  $control = 0;
  if((count($nrItens) - 1)== -1){
    $quant = 0;
  }else{
    $quant = count($nrItens) - 1;
  }

  while ($control <= $quant){
    if ($nrQuartetos < $nrItens[$control]){
      $posInic = $posInics[$control];
      $nrQuartetos = $nrItens[$control];
    }
    $control++;
  }

  array_splice($quartetos, $posInic, $nrQuartetos,"*");
  if(count($quartetos) == 9){
    array_shift($quartetos);
  }
 
  return $nrQuartetos;
}

function contZerados($quartetos, &$nrItens, $control){
  $ctrl = 0;
  $tamNrItens = count($nrItens);
  $ctrl = $control;
  while ($ctrl <= 8){
    if($quartetos[$ctrl] === "0"){
      $nrItens[$tamNrItens - 1] ++;
      $ctrl ++;
    }else{
      $control = $ctrl;
      $ctrl = 9;
    }
  }
  return $control;
}

				
function expand(){
  $dado;
  $charInic;
  $charFim;
  $quartetos;
  $nmQuartetos = 0;
  $pos4Pts = -1;				
  $insZeros = 0;
  $control = 0;				
  $remove4Pts = -1;
  $descompact;

  $dado = $_POST['compact'];
  $charInic = $dado[0];
  $charFim = $dado[strlen($dado) - 1];
  if ($charInic === ":"){
    $dado = substr($dado, 1);
  }
  if ($charFim === ":"){
    $dado = $dado.substr (0, -1);
  }
  $quartetos = explode(":", $dado);
  $nmQuartetos = count($quartetos) -1;
  $pos4Pts = encont4Pts($quartetos);

  if($pos4Pts != -1){
    $insZeros = 8 - $nmQuartetos;
    while ($control < $insZeros){
      array_splice($quartetos, $pos4Pts,0,"0000");
      $control++;
    }

    $remove4Pts = $pos4Pts + $insZeros;
    array_splice($quartetos, $remove4Pts,1);
  }
  $descompact = join(":", $quartetos);

  return $descompact;
}

function encont4Pts(&$quartetos){
  $nmQuartetos;
  $quarteto;
  $tamQuarteto = 0;
  $fnd4pontos = -1;
  $quantZeros = 0;

  $nmQuartetos = count($quartetos);

  for($control = 0; $control < $nmQuartetos; $control ++){
    $quarteto = $quartetos[$control];
    $tamQuarteto = strlen($quartetos[$control]);

    if ($quarteto === ""){
      $fnd4pontos = $control;
    }else{
      $quantZeros = 4 - $tamQuarteto;
      $quartetos[$control] = str_repeat('0', $quantZeros) . $quarteto;
    }

  }
  return $fnd4pontos;
}
		
?>

<html>
  <head> 
    <meta charset="UTF-8">
    <title> Conversor IPv6 </title>
    <style>
      .btn {width: 10%;}
    </style>	
<script>

function apaga_campo(id_campo){

      }
    </script>

  </head>
  <body>
    <h1>Conversor IPv6</h1>
    <br><br>
    <form method="POST">
      <label for="ipv6_expand_entrada"> Compact </label>
      <input type="text" id="ipv6_expand_entrada" name="expand"
      size="43" value="4BCA:0800:0000:0040:CAFE:00FF:FE00:0001">
      <input type="text" id="ipv6_compact_saida" size="43" value="<?php echo $ipv6_compact_saida; ?>" readonly>
      <br><br>			
      <label for="ipv6_compact_entrada"> Expand </label>
      <input type="text" id="ipv6_compact_entrada" name="compact"
      size="43" value="2940::">			
      <input type="text" id="ipv6_expand_saida" size="43" value="<?php echo $ipv6_expand_saida; ?>" readonly>
      <br>
      <br>
      <input type="submit" value="Start">
    </form>
    </body>
  </html>
