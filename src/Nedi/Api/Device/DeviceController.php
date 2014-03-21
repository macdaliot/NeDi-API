<?php

namespace Nedi\Api\Device;


use Nedi\Api\Entity\Device;
use Nedi\Api\Repository\DeviceRepository;
use Nocarrier\Hal;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Generator\UrlGenerator;

class DeviceController
{

    /**
     * @var DeviceRepository
     */
    private $repository;
    /**
     * @var UrlGenerator
     */
    private $urlGenerator;

    function __construct(DeviceRepository $repository, UrlGenerator $urlGenerator)
    {
        $this->repository = $repository;
        $this->urlGenerator = $urlGenerator;
    }

    public function getAll()
    {
        $result = array();
        $hal = new Hal($this->urlGenerator->generate("controller.device:getAll"));

        foreach ($this->repository->findAll() as $device) {
            /** @var Device $device */
            $resource = new Hal(
                $this->urlGenerator->generate("controller.device:get", array('device' => $device)),
                array(
                    'name' => $device->getName(),
                    'ip' => $device->getIp(),
                    'serial' => $device->getSerial()
                )
            );
            $hal->addResource("device", $resource);
        }

        return $hal->asJson();
    }

    public function get($device)
    {
        /** @var Device $deviceObject */
        $deviceObject = $this->repository->find($device);

        $hal = new Hal(
            $this->urlGenerator->generate("controller.device:get", array('device' => $device)),
            $deviceObject->asLongOutputArray()
        );
        $hal->addLink(
            'interfaces',
            $this->urlGenerator->generate("controller.device:getInterfaces", array('device' => $device))
        );
        $hal->addLink(
            'modules',
            $this->urlGenerator->generate("controller.device:getModules", array('device' => $device))
        );
        $hal->addLink(
            'events',
            $this->urlGenerator->generate("controller.device:getEvents", array('device' => $device))
        );
        $hal->addLink(
            'links',
            $this->urlGenerator->generate("controller.device:getLinks", array('device' => $device))
        );
        $hal->addLink(
            'nodes',
            $this->urlGenerator->generate("controller.device:getNodes", array('device' => $device))
        );
        $hal->addLink(
            'topology',
            $this->urlGenerator->generate("controller.device:getTopology", array('device' => $device))
        );
        $hal->addLink(
            'discover',
            $this->urlGenerator->generate("controller.device:discover", array('device' => $device))
        );

        return $hal->asJson();
    }

    public function getInterfaces($device)
    {

    }
}