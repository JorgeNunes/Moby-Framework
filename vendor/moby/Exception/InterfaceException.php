<?php

namespace Exception;

/**
 * Interface of Exception class
 *
 * @package Exception
 * @author `Vinicius Pugliesi`
 */
interface InterfaceException
{
    public function render($view, $args = []);
}