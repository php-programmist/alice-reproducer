<?php


namespace App\Tests;


use App\Entity\Service;
use Hautelook\AliceBundle\PhpUnit\ReloadDatabaseTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ServiceTest extends KernelTestCase
{
//    use ReloadDatabaseTrait;

    public function testService():void
    {
        self::bootKernel();
        $em = self::$container->get('doctrine')->getManager();
        $service = $em->getRepository(Service::class)->findOneBy(['name'=> 'Twitter']);
        dd($service->getAccessType());
    }
}