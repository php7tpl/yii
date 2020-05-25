<?php

namespace Packages\Product\Domain\Enums;

use PhpLab\Core\Domain\Base\BaseEnum;

class ComplexPermissionEnum extends BaseEnum
{

    const WRITE = 'oProductComplexWrite';

    //const CREATE = 'oProductComplexCreate';

    const READ = 'oProductComplexRead';

    //const UPDATE = 'oProductComplexUpdate';

    //const DELETE = 'oProductComplexDelete';

    public static function getLabels() {
        return [
            self::WRITE => 'ЖК. Запись',
            self::READ => 'ЖК. Чтение',
        ];
    }
}