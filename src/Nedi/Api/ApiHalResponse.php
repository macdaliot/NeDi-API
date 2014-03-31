<?php

namespace Nedi\Api;


use Nedi\Api\Entity\Device;
use Nocarrier\Hal;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGenerator;

class ApiHalResponse extends JsonResponse {

    /**
     * @var \Nedi\Api\Entity\Device
     */
    private $device;
    /**
     * @var \Symfony\Component\Routing\Generator\UrlGenerator
     */
    private $urlGenerator;

    public function __construct(UrlGenerator $urlGenerator)
    {
        parent::__construct();
        $this->urlGenerator = $urlGenerator;
        $this->setContent($this->getJson());
    }

    private function getJson()
    {
        $hal = new Hal(
            $this->urlGenerator->generate("controller.root"),
            array('apiVersion' => 1)
        );
        $hal->addLink(
            'devices',
            $this->urlGenerator->generate("controller.device:getAll")
        );
        $hal->addLink(
            'interfaces',
            $this->urlGenerator->generate("controller.interface:getAll")
        );
        return $hal->asJson();
    }


} 