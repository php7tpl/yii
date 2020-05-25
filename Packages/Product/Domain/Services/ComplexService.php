<?php

namespace Packages\Product\Domain\Services;

use Packages\Product\Domain\Interfaces\Repositories\ComplexRepositoryInterface;
use Packages\Product\Domain\Interfaces\Services\ComplexServiceInterface;
use PhpLab\Core\Domain\Base\BaseCrudService;

class ComplexService extends BaseCrudService implements ComplexServiceInterface
{

    public function __construct(ComplexRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


}

