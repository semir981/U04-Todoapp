<?php 
require 'functions.php';
if(isset($_POST['todo_update'])){
    updateTodo($_POST);
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $todo = getSingleTodo($id);
    
    

}else{
    ?>
    <script>window.href.location ='todo.php';</script>
    <?php
}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Påminnelse lista</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 m-auto">
               <div class="card">
                   <div class="card-header">
                       <h3>Påminnelse lista</h3>
                   </div>
                   <div class="card-body">
                        <form action="edit.php" method="POST">
                            <input type="hidden" name="id" value="<?= $todo['id']; ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Påminnelse lista</label>
                                <input type="text" class="form-control" value="<?= $todo['todo']; ?>" name="todo" placeholder="Skriv din påmminelse här">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deadline</label>
                                <input type="date" class="form-control" value="<?= $todo['todo_time']; ?>" name="todo_time" >
                            </div>

                            <button type="submit" name="todo_update" class="btn btn-primary">Uppdatera</button>
                        </form>
                   </div>
               </div>
              </div>
          </div>
      </div>
  </body>
</html>