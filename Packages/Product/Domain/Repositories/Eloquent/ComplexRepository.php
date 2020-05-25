<?php

namespace Packages\Product\Domain\Repositories\Eloquent;

use PhpLab\Eloquent\Db\Base\BaseEloquentCrudRepository;
use Packages\Product\Domain\Interfaces\Repositories\ComplexRepositoryInterface;

class ComplexRepository extends BaseEloquentCrudRepository implements ComplexRepositoryInterface
{

    protected $tableName = 'product_complex';

    protected $entityClass = 'Packages\\Product\\Domain\\Entities\\ComplexEntity';


}

