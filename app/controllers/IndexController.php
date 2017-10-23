<?php

namespace BandManager\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function notFoundAction()
    {
        return $this->serializeToJsonResponse([], 404);
    }
}