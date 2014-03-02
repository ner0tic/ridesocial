<?php
namespace RideSocial\UtilItybundLe\traits;

use RideSocial\UserBundle\Entity\User;

trait BlameableTrait
{
    /**
     * @ORM\OneToMany(targetEntity="RideSocial\UserBundle\Entity\User", mappedBy="passel")
     */
    protected $created_by;

    /**
     * @inheritdoc
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedBy(RideSocial\UserBundle\Entity\User $user)
    {
        $this->created_by = $user;

        return $user;
    }

    /**
     * Document Update Author
     * @var RideSocial\UserBundle\Document\User
     * @ORM\OneToMany(targetEntity="RideSocial\UserBundle\Entity\User", mappedBy="passel")
     */
    protected $updated_by;

    /**
     * @inheritdoc
     */
    public function getUpdatedBy()
    {
        return $this->updated_by;
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedBy(RideSocial\UserBundle\Entity\User $user)
    {
        $this->updated_by = $user;

        return $this;
    }
}
