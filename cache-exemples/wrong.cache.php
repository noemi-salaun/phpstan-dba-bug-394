<?php return array (
  'schemaVersion' => 'v9-put-null-when-valid',
  'schemaHash' => 'ff4cba5c30cfa5a08ecec10a22fbb9bc',
  'records' => 
  array (
    'SELECT id, name, \'request1\' FROM my_table WHERE id = \'1\'' => 
    array (
      'result' => 
      array (
        5 => 
        PHPStan\Type\Constant\ConstantArrayType::__set_state(array(
           'keyType' => 
          PHPStan\Type\UnionType::__set_state(array(
             'sortedTypes' => true,
             'types' => 
            array (
              0 => 
              PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
                 'value' => 0,
              )),
              1 => 
              PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
                 'value' => 1,
              )),
              2 => 
              PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
                 'value' => 2,
              )),
              3 => 
              PHPStan\Type\Constant\ConstantStringType::__set_state(array(
                 'objectType' => NULL,
                 'value' => 'id',
                 'isClassString' => false,
              )),
              4 => 
              PHPStan\Type\Constant\ConstantStringType::__set_state(array(
                 'objectType' => NULL,
                 'value' => 'name',
                 'isClassString' => false,
              )),
              5 => 
              PHPStan\Type\Constant\ConstantStringType::__set_state(array(
                 'objectType' => NULL,
                 'value' => 'request1',
                 'isClassString' => false,
              )),
            ),
          )),
           'itemType' => 
          PHPStan\Type\UnionType::__set_state(array(
             'sortedTypes' => false,
             'types' => 
            array (
              0 => 
              PHPStan\Type\IntegerType::__set_state(array(
              )),
              1 => 
              PHPStan\Type\StringType::__set_state(array(
              )),
            ),
          )),
           'allArrays' => NULL,
           'nextAutoIndexes' => 
          array (
            0 => 3,
          ),
           'keyTypes' => 
          array (
            0 => 
            PHPStan\Type\Constant\ConstantStringType::__set_state(array(
               'objectType' => NULL,
               'value' => 'id',
               'isClassString' => false,
            )),
            1 => 
            PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
               'value' => 0,
            )),
            2 => 
            PHPStan\Type\Constant\ConstantStringType::__set_state(array(
               'objectType' => NULL,
               'value' => 'name',
               'isClassString' => false,
            )),
            3 => 
            PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
               'value' => 1,
            )),
            4 => 
            PHPStan\Type\Constant\ConstantStringType::__set_state(array(
               'objectType' => NULL,
               'value' => 'request1',
               'isClassString' => false,
            )),
            5 => 
            PHPStan\Type\Constant\ConstantIntegerType::__set_state(array(
               'value' => 2,
            )),
          ),
           'valueTypes' => 
          array (
            0 => 
            PHPStan\Type\IntegerType::__set_state(array(
            )),
            1 => 
            PHPStan\Type\IntegerType::__set_state(array(
            )),
            2 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
            3 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
            4 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
            5 => 
            PHPStan\Type\StringType::__set_state(array(
            )),
          ),
           'optionalKeys' => 
          array (
          ),
           'isList' => false,
        )),
      ),
    ),
    'SELECT id, name, \'request2\' FROM my_table WHERE id = \'1\'' => 
    array (
      'error' => NULL,
    ),
  ),
  'runtimeConfig' => 
  array (
    'errorMode' => 'default',
    'debugMode' => false,
    'stringifyTypes' => false,
  ),
);