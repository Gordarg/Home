<?php

class HttpMethods
{
    static public function Post($url, $form, $token = null)
    {
        $options = array(
            'http' => array(
                'method'  => 'POST',
                'content' => json_encode($form),
                'header' =>  "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n" .
                    (($token != null) ? "Authorization: Token $token\r\n" : '')

            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);
        return $response;
    }

    static public function Get($url, $token = null)
    {
        $options = array(
            'http' => array(
                'method'  => 'GET',
                'header' => "Accept: application/json\r\n" .
                    (($token != null) ? "Authorization: Token $token\r\n" : '')
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);
        return $response;
    }
}
