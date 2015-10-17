<?php

namespace Yass\BlogBundle\Model;

use Doctrine\ORM\Mapping as ORM;


class Publication
{
    protected $id;

    /**
     * @ORM\Column(name="titre", type="string")
     */
    protected $titre;

    /**
     * @ORM\Column(name="contenu", type="text")
     */
    protected $contenu;

}

