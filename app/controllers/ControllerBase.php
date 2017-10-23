<?php

namespace BandManager\Controllers;

use Phalcon\Dispatcher;
use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public function serializeToJsonResponse($data, $statusCode = 200)
    {
        $response = new Response();
        $response->setJsonContent($data);
        $response->setStatusCode($statusCode);

        return $response->send();
    }

    public function afterExecuteRoute(Dispatcher $dispatcher)
    {
        $this->response->setContentType('application/json');
    }

    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        if ($this->request->getContentType() !== 'application/json') {
            exit;
        }
    }
}
