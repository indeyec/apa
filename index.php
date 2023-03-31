<?php
namespace Apa;

require_once 'vendor/autoload.php';

$records =
   [
       'id' => 2135,
       'first_name' => 'John',
       'last_name' => 'Doe',
   ];
var_dump(text($records)->toArray());