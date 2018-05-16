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
      $pimienta = ord($_POST['pal']);//3.
      if (strlen($pimienta)!=3)
        $pimienta = $pimienta.'0';
      $ajo = array('a'=>'22', 'e'=>'05','i'=>'20','o'=>'01','u'=>'78');
      $ca=strtr($_POST['pal'],$ajo);
      $sal = str_split($ca,5);//[0]->5.
      $carnita = $pimienta.$sal['0'];
      echo $carnita;
    }
    ?>
  </body>
</html>
