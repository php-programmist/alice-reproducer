<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class ApiKeyAccessType extends AbstractAccessType
{
    public const TYPE = 'api-key';
}