<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT product_name, product_id FROM products WHERE product_name LIKE :product';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['product' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="#" class="list-group-item list-group-item-action border-1">' . $row['product_name'] . '</a>';
        echo '<input class="hidden" type="hidden" value="'.$row['product_id'].'" name="prod_id">';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>