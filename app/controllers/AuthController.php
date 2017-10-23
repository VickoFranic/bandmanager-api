<?php

namespace BandManager\Controllers;

class AuthController extends ControllerBase
{
    public function indexAction()
    {
        return $this->serializeToJsonResponse([]);
    }
}

