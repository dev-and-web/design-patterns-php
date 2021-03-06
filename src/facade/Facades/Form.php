<?php

namespace Facades;

/**
 * Facade de la classe "\Form\Form".
 */
final class Form extends Facade
{
    /**
     * @var \Form\Form
     */
    protected static $instance;

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Form\Form';
    }
}
