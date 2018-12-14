<?php
require "startup.php";


switch($_POST['func']) {
    case "queryES":
        echo getResponseFromElasticSearch($_POST['data']);
        break;
    default:
        http_response_code(404);
}

function getResponseFromElasticSearch(array $data)
{
    try {
        $interpreter = new \App\Controller\RequestInterpreter($data);
    }
    catch(Exception $exception) {
        if(get_class($exception)=='App\Exception\RequestException') {
            http_response_code(400);
            return $exception->getMessage();
        }
        http_response_code(500);
        die();
    }

    $request = $interpreter->getRequest();

    $handler = fopen('..\config.json','rb');
    $config_content = fread($handler,filesize('..\config.json'));
    $config_json = json_decode($config_content);

    $elastic_search = new \App\Model\ElasticSearch($config_json->elasticSearch);

    var_dump($elastic_search);
}