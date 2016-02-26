<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 25.02.2016
 * Time: 20:56
 */

namespace roobique\Logins;
{

    class ConnectToInsta
    {
        function login($code){
            $access_token_settings = array('client_id' => clientID,
                                           'client_secret' => clientSecret,
                                           'grant_type' => 'authorization_code',
                                           'redirect_uri' => redirectURI,
                                           'code' => $code);

            $curl = curl_init(accessTokenURL);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $results = curl_exec($curl);
            curl_close($curl);
            return json_decode($results, true);
        }
    }


}