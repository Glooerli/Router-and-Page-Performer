<?php
/**
 * Created by PhpStorm.
 * User: Lukas
 * Date: 26.02.2016
 * Time: 09:24
 */

namespace roobique\Queries
{

    use roobique\ValueObjects\Uri;
    use roobique\Wrappers\Curl;

    class FetchAccessTokenFromInstagramQuery
    {
        /**
         * @var Curl
         */
        private $curl;

        /**
         * @var Uri
         */
        private $uri;

        /**
         * FetchAccessTokenFromInstagramQuery constructor.
         * @param Curl $curl
         * @param Uri $uri
         */
        public function __construct(Curl $curl, Uri $uri)
        {
            $this->curl = $curl;
            $this->uri = $uri;
        }

        public function execute($code)
        {
            return json_decode(
                $this->curl->post(
                    $this->uri,
                    [
                        'client_id' => clientID,
                        'client_secret' => clientSecret,
                        'grant_type' => 'authorization_code',
                        'redirect_uri' => redirectURI,
                        'code' => $code
                    ],
                    [CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => true]
                    ),
                true
            );
        }
    }
}