<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Seguridad</title>
  </head>
  <body>
    <form method='post'>
      <input type='text' name='pal'>
      <input type='submit' name=':v'>
    </form>
    <?php
    if ($_POST['pal']==NULL)
      echo 'Ya lo rompiste';
    else
    {
      $pimienta = ord($_POST['pal']);//3
      if (strlen($pimienta)!=3)
        $pimienta = $pimienta.'0';
      $sal = array('a'=>'22', 'e'=>'05','i'=>'20','o'=>'01','u'=>'78');
      $ca=strtr($_POST['pal'],$sal);
      $carnita =str_split($ca,5);
      $ajo = $pimienta;
      //echo $sal['0'].$pimienta.$.$sal['1'];
      echo $carnita['0'].'  '.$carnita['5'];
    }
    ?>
  </body>
</html>
