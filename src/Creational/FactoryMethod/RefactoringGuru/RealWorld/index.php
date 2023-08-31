<?php

namespace Creational\FactoryMethod\RefactoringGuru\RealWorld;

/**
 * Создатель объявляет фабричный метод, который может быть
 * использован вместо прямых вызовов конструктора продуктов, например:
 *
 * - До: $p = new FacebookConnector();
 * - После: $p = $this->getSocialNetwork();
 *
 * Это позволяет подсклассам SocialNetworkPoster изменять тип создаваемого
 * продукта
 */
abstract class SocialNetworkPoster
{
    /**
     * Фактический фабричный метод. Обратите внимание, что он возвращает
     * абстрактный коннектор. Это позволяет подклассам возвращать любые
     * конкретные коннекторы без нарушения контракта
     */
    abstract public function getSocialNetwrk(): SocialNetworkConnector;

    /**
     * Когда фабричный метод используется внутри бизнес-логики Создателя,
     * подклассы могут изменять лоигку косвенно, возвращая из фабричного метода
     * различные типы коннекторов.
     */
    public function post($content): void
    {
        // Вызываем фабричный метод для создания объекта Продукта...
        $network = $this->getSocialNetwrk();
        // ...а затем используем его по своему усмотрению.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}

/**
 *
 */