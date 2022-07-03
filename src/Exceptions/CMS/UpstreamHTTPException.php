<?php

namespace Fitness\MSCommon\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class UpstreamHTTPException extends Exception implements HttpExceptionInterface {
    use Httpable;
    protected $message = 'CMS_API_ENDPOINT not set';
    public function getStatusCode()
    {
        return Response::HTTP_INTERNAL_SERVER_ERROR;
    }
}