<?php

// Set the base URL for the web crawler
$baseUrl = "https://books.toscrape.com/catalogue/category/books/science_22/index.html";

// Initialize a DOMDocument object to parse the HTML of the web page
$doc = new DOMDocument();

// Load the HTML of the web page into the DOMDocument object
libxml_use_internal_errors(true);
$doc->loadHTMLFile($baseUrl);

//random id generation function
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//file creation in csv format
$file = fopen('science_listing.csv', 'w');
fputcsv($file, ['id', 'category', 'category_url', 'title', 'price', 'stock','url', 'rating']);



// Initialize a DOMXPath object to query the DOM tree
$xpath = new DOMXPath($doc);
$titles = $xpath->evaluate('//ol[@class="row"]//li//article//h3/a');
$prices = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="price_color"]');
$stocks = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="instock availability"]');
$url = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="image_container"]//a');
$ratings = $xpath->evaluate('//ol[@class="row"]//li//article//p');


for($data=0;$data < count($stocks);$data++){
    fputcsv($file, [$id = generateRandomString(), $category = "Science",  $category_url = "https://books.toscrape.com/catalogue/category/books/science_22/index.html",  $titles[$data]->textContent, $prices[$data]->textContent, trim($stocks[$data]->textContent),"https://books.toscrape.com/".substr($url[$data]->getAttribute('href'),9)]);
 
}

?>
