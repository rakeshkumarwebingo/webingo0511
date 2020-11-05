<?php

$request = new HttpRequest();
$request->setUrl('https://mysiteauditor.com/api/v1');
$request->setMethod(HTTP_METH_POST);

$request->setQueryData(array(
  'api_key' => 'B5EEE5BA0BE2815960F2FC64038650FD3E7AAE90',
  'audit_id' => 'bd93f81de728fe29e323277511f055fe5f98ff2dcad2c551382143',
  'url' => 'https://webingo.in/',
  'competitor_url' => 'https://aerobit.com/',
  'keyword' => 'website',
  'callback' => 'https://webingo.in/index.php',
  'language' => 'english',
  'audit_pdf' => 'https://mysiteauditor.com/api/v1/pdf/B5EEE5BA0BE2815960F2FC64038650FD3E7AAE90.pdf',
  'audit_data' => 'JSON-formatted array'
));

$request->setHeaders(array(
  'postman-token' => '0fa04a5d-f162-3784-fe10-2ce6709fc96a',
  'cache-control' => 'no-cache'
));

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}