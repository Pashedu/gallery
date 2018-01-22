<?php
/**
 * Created by PhpStorm.
 * User: pashed
 * Date: 18.01.18
 * Time: 15:55
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="photo")
 */
class Photo
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    public $name;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    public $price;

    /**
     * @ORM\Column(type="text")
     */
    public $description;
}