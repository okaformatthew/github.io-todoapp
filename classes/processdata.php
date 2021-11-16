<?php
require 'Database.php';
class ProcessData extends Database
{
  public  function addList()
  {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if (isset($post['todo'])) {
      $this->query("INSERT INTO list(name) VALUES(:name)");
      $this->bind(':name',  $post['todo']);
      $this->execute();
      if ($this->lastInsertid()) {
        header('Location:index.php');
      }
    }
    return;
  }
  public function GetTODO()
  {
    $this->query("SELECT * FROM list");
    //$this->execute();
    $results = $this->resultSet();
    return $results;
  }
  public function delete()
  {
    if (isset($_GET['delete'])) {
      $delete = $_GET['delete'];
      $this->query("DELETE  FROM list WHERE id = :id");
      $this->bind(":id", $delete);
      if ($this->execute()) {
        header("Location: viewtask.php");
      }
    }
  }
  public function seletListById()
  {
    if (isset($_GET['update'])) {
      $update = $_GET['update'];
      $this->query("SELECT * FROM list WHERE id =:id");
      $this->bind(':id', $update);
      $results = $this->single();
      return $results;
    }
  }
  public function updateList()
  {
    if (isset($_POST['update-list'])) {
      $name = $_POST['todo'];
      $id =  $_GET['update'];
      $this->query("UPDATE list SET name = :name WHERE id = :id");
      $this->bind(':name', $name);
      $this->bind(':id', $id);
      $this->execute();
      if ($this->lastInsertid()) {
        header('Location: index.php');
      }
    }
    //return;
  }
}
