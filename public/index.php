<?php
switch (getenv('ENV_TYPE')) {
    case 'production':
        $envFile = '.env.production';
    break;

    case 'staging':
        $envFile = '.env.staging';
    break;
    
    default:
        $envFile = '.env';
    break;
};

// Added to support `.env` composer package
require_once '../vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__.'/../', $envFile);
$dotenv->load();

// Path to your craft/ folder
$craftPath = '../craft';

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
