<?php
require 'config.php';
require 'includes/header.php';
require 'classes/processdata.php';
$process = new ProcessData();
$process->addList();


?>


<div class="container mt-3">
  <div class="jumbotron">
    <div class="row">
      <div class="card m-auto">
        <div class="card-header">
          <h1 class="cart-title">Add Todo item</h1>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="">Todo</label>
              <input type="text" class="form-control" name="todo" placeholder="Enter List">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Add List">
            <a href="viewtask.php" class="btn btn-info">View Task</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>