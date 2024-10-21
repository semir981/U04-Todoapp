<?php 
require 'functions.php';
if(isset($_POST['todo_submit'])){
    createTodo($_POST);

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
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Påminnelse</label>
                                <input type="text" class="form-control" name="todo" placeholder="Skriv din påminnelse här">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deadline</label>
                                <input type="date" class="form-control" name="todo_time" >
                            </div>

                            <button type="submit" name="todo_submit" class="btn btn-primary">Klar</button>
                        </form>
                   </div>
               </div>
              </div>
          </div>
      </div>
  </body>
</html>