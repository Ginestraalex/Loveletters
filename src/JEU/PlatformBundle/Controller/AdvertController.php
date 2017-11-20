<?php

namespace JEU\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class AdvertController {
   public function indexAction()
                {
                    return new Response("Première page crée !");
                }
}
?>