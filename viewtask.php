<?php
require 'config.php';
require 'includes/header.php';
require 'classes/processdata.php';
$results = new ProcessData();
$result = $results->GetTODO();
$results->delete();
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 col-md-auto">
      <table class="table table-dark">
        <thead>
          <tr>
            <th>#ID</th>
            <th>Todo Name</th>
            <th>Date</th>
            <th>Operation</th>
          </tr>
        </thead>
        <tbody>
          <?php if (is_array($result) || is_object($result)) : ?>
            <?php foreach ($result as $item) : ?>
              <tr>

                <td>
                  <?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td> <?php echo $item['create_date']; ?></td>
                <td>
                  <a href="update-task.php?update=<?php echo $item['id']; ?>" class="btn btn-info">Edit</a>
                  <a href="viewtask.php?delete=<?php echo $item['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?php require 'includes/footer.php'; ?>