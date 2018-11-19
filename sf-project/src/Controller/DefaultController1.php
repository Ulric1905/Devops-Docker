<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController1
{
    public function index()
    {
        return new Response("Notre propre Hello World !");
    }
}
