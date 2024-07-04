<?php 

require __DIR__.'/vendor/autoload.php';

//use \App\Common\Environment;


//Environment::loader(__DIR__);

\App\Common\Environment::loader(__DIR__);

echo getenv('NAME');

 ?>