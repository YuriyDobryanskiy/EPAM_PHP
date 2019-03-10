<?php
if( isset($_POST['submit']) || isset($_GET['delete'])){
  header("location: ".$_SERVER['PHP_SELF']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Hello, EPAM!</title>
    
    <!-- CSS -->    
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <?php
        require_once ('lib/conn.php');
        include ('lib/FirstClass.php');
    ?>
  </head>

  <body>
    <div class="container-fluid main">
        <h5>My old CV</h5>
        <a><button type="button" class="btn btn-info">PDF</button></a>
    </div>
    <hr/>

    <?php

    $sql = new lib\FirstClass();

      //select
        $sql->selectList($link);
      //add      
      if(isset($_POST['submit']) && ($_POST['id'] == '')){
        $sql->addStudent($link, $sql->HTML($_POST['name']),$_POST['age'],$sql->HTML($_POST['university']));
      }
      //delete
      if(isset($_GET['delete'])){
        $sql->deleteStudent($link, $_GET['delete']);
      }
      //edit
      if(isset($_GET['edit'])){        
        $row = $sql->editStudent($link, $_GET['edit']);
      }
      //save edited
      if(isset($_GET['edit']) && ($_POST['id'] != '')){
        $sql->saveEditStudent($link, $_POST['id'], $sql->HTML($_POST['name']),$_POST['age'],$sql->HTML($_POST['university']));
      }

      mysqli_close($link);    
    ?> 

    <!--FORM-->
    <div class="main row justify-content-center">
      <form action="" method="POST">
        <div class="form-group">
          <input type="text" name="name" placeholder="Name" value="<?=$row['firstName']?>" class="form-control">
        </div>
        <div class="form-group">
          <input type="number" name="age" placeholder="Age" value="<?=$row['age']?>" class="form-control">
        </div>
        <div class="form-group">
          <input type="text" name="university" placeholder="University" value="<?=$row['university']?>" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" name="id" value="<?=$row['id']?>">
          <button type="submit" name="submit" class="btn btn-success">Save</button>
        </div>  
      </form>
    </div>
    <!--FORM-->


    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>