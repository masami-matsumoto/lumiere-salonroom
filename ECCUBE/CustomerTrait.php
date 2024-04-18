<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    /**
     * @var string|null
     * @ORM\Column(type="string", length=20, nullable=true)
     * @Eccube\Annotation\FormAppend(
     *     auto_render=false,
     *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
     *     options={
     *          "required": false,
     *          "label": "ご紹介者名",
     *          "attr": {"placeholder": "ご紹介者名入力"}
     *     })
     */
    private $introducer_name;

    /**
     * @return string|null
     */
    public function getIntroducerName()
    {
        return $this->introducer_name;
    }

    /**
     * @param string|null $introducer_name
     * @return CustomerTrait
     */
    public function setIntroducerName($introducer_name)
    {
        $this->introducer_name = $introducer_name;
        return $this;
    }
}