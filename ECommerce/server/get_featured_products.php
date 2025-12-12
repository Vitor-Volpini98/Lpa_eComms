<?php
include('conection.php');

$stmt = $conn->prepare("
   SELECT lpa_stock_ID AS product_id,
          lpa_stock_name AS product_name,
          lpa_stock_price AS product_price,
          lpa_stock_image AS product_image
   FROM lpa_stock
   WHERE show_on_web = 1
   LIMIT 4
");
$stmt->execute();
$featured_products = $stmt->get_result();
?>
