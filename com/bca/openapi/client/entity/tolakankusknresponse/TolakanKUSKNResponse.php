<?php

namespace com\bca\openapi\client\entity\tolakankusknresponse;

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class TolakanKUSKNResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
    }
}
