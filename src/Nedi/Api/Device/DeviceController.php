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
        $hal = new Hal($this->urlGenerator->generate("controller.device:getAll"));

        foreach ($this->repository->findAll() as $device) {
            /** @var Device $device */
            $resource = new Hal(
                $this->urlGenerator->generate("controller.device:get", array('device' => $device->getName())),
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
        return new DeviceHalResponse($this->getDeviceObject($device), $this->urlGenerator);
    }

    public function getInterfaces($device)
    {
        $deviceObject = $this->getDeviceObject($device);
        $hal = new Hal($this->urlGenerator->generate("controller.device:getInterfaces", array('device' => $device)));

        foreach ($deviceObject->getInterfaces() as $interface) {
            $hal->addResource(
                'interface',
                new Hal(
                    $this->urlGenerator->generate(
                        "controller.interface:get",
                        array(
                            'device' => $device,
                            'index' => urlencode($interface->getIndex()),
                        )
                    )
                    , $interface->asShortOutputArray()
                )
            );
        };

        return $hal->asJson();
    }

    /**
     * Returns a DeviceObject from the Repository
     * @param $device
     * @return Device
     */
    private function getDeviceObject($device)
    {
        $deviceObject = $this->repository->find($device);
        return $deviceObject;
    }

    public function getEvents($device)
    {
        $deviceObject = $this->getDeviceObject($device);
        $events = $deviceObject->getEvents();
        $hal = new Hal($this->urlGenerator->generate("controller.device:getEvents", array('device' => $device)));

        foreach ($events as $event) {
            $hal->addResource(
                'event',
                new Hal(
                    '/event/' . $event->getId(), $event->asLongOutputArray()
                )
            );
        }
        return $hal->asJson();
    }
}