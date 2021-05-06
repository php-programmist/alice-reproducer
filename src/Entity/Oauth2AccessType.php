<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Oauth2AccessType extends AbstractAccessType
{
    public const TYPE = 'oauth2';
}