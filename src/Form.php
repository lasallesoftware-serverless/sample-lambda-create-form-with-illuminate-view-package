<?php

if (isset($_SERVER['LAMBDA_TASK_ROOT'])) {

    // For Lambda
    require_once './../vendor/autoload.php';
} else {

    // For your local development
    require_once '/var/task/vendor/autoload.php';
}


use Lasallesoftwareserverless\Renderbladelamdba\View;


// Where is your Blade template? 
// Please wrap it in an array
$pathToBladeTemplate = [dirname(__DIR__). '/blade_template'];

// Where is your compiled Blade template?
// Set your local path. The required Lambda path will be set automatically.
$pathToCompiledBladeTemplate = dirname(__DIR__) . '/compiled_blade_template';


$view = new View;

$viewFactory = $view->makeViewFactory($pathToBladeTemplate, $pathToCompiledBladeTemplate);

echo $viewFactory->make('form', [
    'text' => 'Sample PHP Lambda function to create a Blade form with the Illuminate view package, made with the Serverless Framework and Bref',
])->render();