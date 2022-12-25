<?php

$json_data = file_get_contents('https://dummyjson.com/products/search?q=Laptop');

$data = json_decode($json_data, true);
$data = $data["products"];
$file = fopen('laptop.csv', 'w');

// Write the column names as the first line of the CSV file
fputcsv($file, ['Title', 'Price', 'Brand']);

// Iterate over the array of data
foreach ($data as $item) {
  fputcsv($file, [$item['title'], $item['price'], $item['brand']]);
}

fclose($file);

?>
