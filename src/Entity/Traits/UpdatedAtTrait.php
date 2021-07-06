<?php

namespace App\Entity\Traits;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait UpdatedAtTrait
 * @package App\Entity\Traits
 * @ORM\HasLifecycleCallbacks
 */

trait UpdatedAtTrait
{
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */protected $updatedAt;

    /**
     * @return mixed
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = new DateTime();
    }
}