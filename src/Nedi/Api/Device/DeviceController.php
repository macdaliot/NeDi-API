<?php

namespace Nedi\Api\Device;


use Nedi\Api\Entity\Device;
use Nedi\Api\Repository\DeviceRepository;
use Nocarrier\Hal;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeviceController
{

    /**
     * @var \Nedi\Api\Repository\DeviceRepository
     */
    private $repository;

    function __construct(DeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        $result = array();
        $hal = new Hal("/device");

        foreach ($this->repository->findAll() as $device) {
            /** @var Device $device */
            $resource = new Hal(
                "/device/" . urlencode($device->getName()), array(
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
        /** @var Device $device */
        $device = $this->repository->find($device);
        $data = array();
        foreach($device->getInterfaces() as $interface) {
            $data[] = $interface->asShortOutputArray();
        }
        return new JsonResponse($data);
    }
}