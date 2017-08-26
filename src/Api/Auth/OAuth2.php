<?php

namespace Betaseries\Api\Auth;

use Betaseries\Api\Auth\AbstractAuth;
use Rtransat\OAuth2\Client\Provider\Betaseries;

class OAuth2 extends AbstractAuth
{
    private $provider;

    // public function __contruct()
    // {
    //     parent::__contruct();
    //
    // }

    public function authenticate($options)
    {
        // $this->provider = new Betaseries([
        //     'clientId'          => '{betaseries-client-id}',
        //     'clientSecret'      => '{betaseries-client-secret}',
        //     'redirectUri'       => $options['callback_url']
        // ]);
        //
        // $url = $this->provider->getAuthorizationUrl();
        return false;
    }
}
