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
     * без определения каких-либо специальных меодов, при условии, что его поля имеют примитивые типы.
     * Поля, содержащие объекты, сохраняют свои ссылки в клонированном объекте. Поэтому в некоторых
     * случаях вам может понадобиться клонировать также и вложенные объекты. Это можно
     * сделать специальным методом clone.
     */
    public function __clone()
    {
        $this->component = clone $this->component;

        // Клонирование объекта, который имеет вложенный объект с обратной
        // ссылкой, требует специального подхода. После завершения клонирования
        // вложенный объект должен указывать на клонированный объект, а не
        // на исходный объект.
        $this->circularReference = clone $this->circularReference;
        $this->circularReference->prototpe = $this;
    }
}

class ComponentWithBackReference
{

}