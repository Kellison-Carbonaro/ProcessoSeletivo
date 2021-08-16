<?php

require_once '../vendor/autoload.php';

// rotina/agendaDiaria/1
if ($_GET['url']) {
    $url = explode('/', $_GET['url']);
    if ($url[0] === 'api') {
        array_shift($url);

        $service = 'App\Services\\'.ucfirst($url[0] . 'Service');
        array_shift($url);

        $method = strtolower($_SERVER['REQUEST_METHOD']);
        if(class_exists($service) && method_exists($service, $method)){
            try {
                $response = call_user_func_array(array(new $service, $method), $url);
                http_response_code(200);
                echo json_encode(array('status' => 'sucess', 'data'=>$response), JSON_UNESCAPED_UNICODE);
                exit;
            } catch (\Exception $e) {
                echo json_encode(array('status' => 'error', 'data'=>$e->getMessage()));
                exit;
            }
        }
        else{
            echo json_encode(array('status' => 'error', 'data'=>'Url inválida'), JSON_UNESCAPED_UNICODE);
            exit;
        }

    }
}
