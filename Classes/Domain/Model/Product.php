<?php

namespace T10\StoreInventory\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Product extends AbstractEntity
{
    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var int
     */
    protected $quantity = 0;

    public function __construct
    (
        string $name = '', 
        string $description = '', 
        int $quantity = 0
    )
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setQuantity($quantity);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
