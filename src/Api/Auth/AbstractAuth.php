<?php

namespace Betaseries\Api\Auth;

use Betaseries\Api\AbstractApi;

abstract class AbstractAuth extends AbstractApi
{

    abstract public function authenticate($options);

}
