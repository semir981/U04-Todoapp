<?php 
require 'functions.php';

$get_todo = getTodo();

if(isset($_GET['status']) && $_GET['id']){
    $id = $_GET['id'];
    $status = $_GET['status'];
    if($_GET['status'] === 'undone'){
        changeStatus($id, $status);
    }
    if($_GET['status'] === 'done'){
        changeStatus($id, $status);
    }
}else{
    ?>
    <script>window.href.location ='todo.php';</script>
    <?php
}

if(isset($_GET['action']) && $_GET['id']){
    $id = $_GET['id'];
    if($_GET['action'] === 'delete'){
        delete($id);
    }
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
              <div class="col-lg-12">
               <div class="card">
                   <div class="card-header d-flex align-items-center justify-content-between">
                       <h3>Påminnelse lista</h3>
                       <a href="index.php" class="btn btn-info float-right">Lägg till påminnelse</a>
                   </div>
                   <div class="card-body">
                   <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Påminnelse</th>
                            <th scope="col">Deadline</th>
                            <th>Åtgärder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($get_todo as $todo){
                            ?>
                            <tr>
                                <th><?= $todo['id']; ?></th>
                                <td><?= $todo['todo']; ?></td>
                                <td><?= $todo['todo_time']; ?></td>
                                <td>
                                    <?php 
                                        if($todo['status'] == 1){ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=undone" class="btn btn-success">Färdig</a>
                                       <?php }else{ ?>
                                            <a href="todo.php?id=<?= $todo['id'] ?>&status=done" class="btn btn-secondary">Ofärdig</a>
                                       <?php } ?>
                                   
                                    <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-primary">Redigera</a>
                                    <a href="todo.php?id=<?= $todo['id']; ?>&action=delete" class="btn btn-danger">Radera</a>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                   </div>
               </div>
              </div>
          </div>
      </div>
    
  </body>
</html>