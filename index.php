<?php
declare(strict_types=1);

class Test {
    public function methodName(int $id): void {
        var_dump($id);
    } 
}

(new Test())->methodName(1);

$methodName = new ReflectionMethod(Test::class, 'methodName');
$parameters = $methodName->getParameters();

foreach ($parameters as $parameter) {
    $type = $parameter->getType();
    // PHP 7
    // var_dump((string)$type);
    // PHP 7 & 8
    var_dump($type->getName());
}
