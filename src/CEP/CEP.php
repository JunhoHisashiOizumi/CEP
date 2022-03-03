<?php

namespace OizumiJunho\CEP;

class CEP
{

    public static function BuscarEnderecoPeloCEP($cep)
    {

        $url = "https://viacep.com.br/ws/{$cep}/json/";
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "sem resultado";
        } else {
            return (array) json_decode($response);
        }
    }
}
