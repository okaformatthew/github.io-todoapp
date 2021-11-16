<?php
require 'config.php';
require 'includes/header.php';
require 'classes/processdata.php';
$results = new ProcessData();
$result = $results->seletListById();
$results->updateList();

?>

<div class="container mt-3">
  <div class="jumbotron">
    <div class="row">
      <div class="card m-auto">
        <div class="card-header">
          <h1 class="cart-title">Update Todo item</h1>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="">Todo</label>
              <input type="text" class="form-control" name="todo" placeholder="Enter List" value="<?php echo $result['name']; ?>">
            </div>
            <input type="submit" class="btn btn-primary" name="update-list" value="Update List">
            <a href="index.php" class="btn btn-danger">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require 'includes/footer.php'; ?>