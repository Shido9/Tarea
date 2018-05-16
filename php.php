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
      $pimienta = ord($_POST['pal']);
      $salero = array('a'=>'22', 'e'=>'05','i'=>'20','o'=>'01','u'=>'78');
      $sal = strtr($_POST['pal'],$salero);
      //echo $sal[].$pal.$pimienta[];
    ?>
  </body>
</html>
