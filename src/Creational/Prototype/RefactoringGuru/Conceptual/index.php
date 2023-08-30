<?php

namespace Creational\Prototype\RefactoringGuru\Conceptual;

/**
 * Пример класса, имеющего возможность клонирования. Мы посмотрим как происходит
 * клонирование значений полей разных типов.
 */
class Prototype
{
    public $primitive;
    public $component;
    public $circularReference;
    
    /**
     * PHP имеет встроенную поддержку клонирования. Вы можете "клонировать" объект
     * без определения каких-либо специальных меодов
     */
}
