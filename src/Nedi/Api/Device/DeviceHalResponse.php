<?php

namespace Nedi\Api\Device;


use Nedi\Api\Entity\Device;
use Nocarrier\Hal;
use Nocarrier\HalJsonRenderer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGenerator;

class DeviceHalResponse extends JsonResponse {

    /**
     * @var \Nedi\Api\Entity\Device
     */
    private $device;
    /**
     * @var \Symfony\Component\Routing\Generator\UrlGenerator
     */
    private $urlGenerator;

    public function __construct(Device $device, UrlGenerator $urlGenerator)
    {
        parent::__construct();
        $this->device = $device;
        $this->urlGenerator = $urlGenerator;
        $this->setContent($this->getJson());
    }

    private function getJson()
    {
        $hal = new Hal(
            $this->urlGenerator->generate("controller.device:get", array('device' => $this->device->getName())),
            $this->device->asLongOutputArray()
        );
        $hal->addLink(
            'interfaces',
            $this->urlGenerator->generate("controller.device:getInterfaces", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'modules',
            $this->urlGenerator->generate("controller.device:getModules", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'events',
            $this->urlGenerator->generate("controller.device:getEvents", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'links',
            $this->urlGenerator->generate("controller.device:getLinks", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'nodes',
            $this->urlGenerator->generate("controller.device:getNodes", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'topology',
            $this->urlGenerator->generate("controller.device:getTopology", array('device' => $this->device->getName()))
        );
        $hal->addLink(
            'discover',
            $this->urlGenerator->generate("controller.device:discover", array('device' => $this->device->getName()))
        );

        return $hal->asJson();
    }


} 