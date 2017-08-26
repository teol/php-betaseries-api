<?php

namespace Betaseries\Api\Auth;

use Betaseries\Api\Auth\AbstractAuth;

class BasicAuth extends AbstractAuth
{
    public function authenticate($options)
    {
        if (empty($options['user']) || empty($options['md5Password'])) {
            throw new \Exception('Basic Auth: Missing option(s)');
        }

        $data = $this->post('members/auth', array(
            'login' => $options['user'],
            'password' => $options['md5Password'], //password must be md5 encoded
        ));

        if (!empty($data['token'])) {
            return $data['token'];
        }
        return false;
    }
}
