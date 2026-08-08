<?php

declare(strict_types=1);

/*
 * This file is part of the EcommitDoctrineEntitiesGeneratorBundle package.
 *
 * (c) E-commit <contact@e-commit.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ecommit\DoctrineEntitiesGeneratorBundle\Tests\App\GeneratedEntity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'with_not_null_relation')]
class WithNotNullRelation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer', name: 'id')]
    protected int $id;

    #[ORM\ManyToOne(targetEntity: 'Ecommit\DoctrineEntitiesGeneratorBundle\Tests\App\GeneratedEntity\WithNotNull', inversedBy: 'relations')]
    #[ORM\JoinColumn(name: 'with_not_null_id', referencedColumnName: 'id', nullable: true)]
    protected WithNotNull $withNotNull;

    #[ORM\OneToOne(targetEntity: 'Ecommit\DoctrineEntitiesGeneratorBundle\Tests\App\GeneratedEntity\WithNotNull', mappedBy: 'toOneOwning')]
    protected ?WithNotNull $toOneReverse = null;

    /*
     * Getters / Setters (auto-generated)
     */

    public function getId(): int
    {
        return $this->id;
    }

    public function setWithNotNull(WithNotNull $withNotNull): self
    {
        $this->withNotNull = $withNotNull;

        return $this;
    }

    public function getWithNotNull(): WithNotNull
    {
        return $this->withNotNull;
    }

    public function setToOneReverse(?WithNotNull $toOneReverse): self
    {
        if (null !== $toOneReverse) {
            $toOneReverse->setToOneOwning($this);
        }
        $this->toOneReverse = $toOneReverse;

        return $this;
    }

    public function getToOneReverse(): ?WithNotNull
    {
        return $this->toOneReverse;
    }
}
