<?php
class ListagemCarros
{

    private $url = 'http://apiintranet.kryptonbpo.com.br/test-dev/';

    public function mostrarCarros(){
        $carros = $this->listagemCarro('exercise-1');
        return $carros;
    }

    private function listagemCarro($endPoint)
    {
        $urlApi = $this->url . $endPoint;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://apiintranet.kryptonbpo.com.br/test-dev/exercise-1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response);
        return $response;
    }

    public function pertenceMotor($id_carro){
        $motores = $this->mostrarCarros();
        foreach($motores->motores as $motor){
            if($id_carro == $motor->id){
                return $motor;
            }
        }

    }

    public function listagemCarrosInternos()
    {
        require "../model/listar.php";
        $listagemCtl = new listagemCarrosInternos();
        $carrosInternos = $listagemCtl->listarCarrosInternos();
        return $carrosInternos;
    }
}
