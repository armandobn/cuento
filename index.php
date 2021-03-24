<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <?php require_once 'app/config.php'; ?>
  <?php require_once 'app/dependencias.php'; ?>
  <!--Indica que traiga las depedendencias que ya escribio,
  (require one) hace revicion del documento y si existe ya no te lo trae y revisa que no este duplicado-->

</head>
<body>

  <?php 
    if(isset($_GET['vista_solicitada'])){ //Esta colocado algun valor(isset), trabaja con url(get)
      switch($_GET['vista_solicitada']){
        
        case 'parte01':{
          require_once 'view/parte01.php';
          break;
        }
        case 'parte02':{
          require_once 'view/parte02.php';
          break;
        }

        case 'parte03':{
          require_once 'view/parte03.php';
          break;
        }

        case 'parte04':{
          require_once 'view/parte04.php';
          break;
        }

        default:{
          require_once 'view/default.php';
          break;
        }

      }

    }else{
      require_once 'view/default.php';
    }

  ?>

</body>
</html>