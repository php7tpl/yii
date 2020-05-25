<?php

namespace Packages\Product\Domain\Entities;

use PhpLab\Core\Domain\Interfaces\Entity\EntityIdInterface;
use PhpLab\Core\Domain\Interfaces\Entity\ValidateEntityInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class ComplexEntity implements EntityIdInterface, ValidateEntityInterface
{

    private $id;
    private $cityId;
    private $title;
    private $description;
    private $status;
    private $flatTotalCount = null;
    private $longitude;
    private $latitude;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCityId()
    {
        return $this->cityId;
    }

    public function setCityId($cityId): void
    {
        $this->cityId = $cityId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getFlatTotalCount()
    {
        return $this->flatTotalCount;
    }

    public function setFlatTotalCount($flatTotalCount): void
    {
        $this->flatTotalCount = $flatTotalCount;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
    }

    public function validationRules(): array
    {
        return [
            'cityId' => [
                new NotBlank,
            ],
            'title' => [
                new NotBlank,
            ],
            'status' => [
                new NotBlank,
            ],
        ];
    }
}
