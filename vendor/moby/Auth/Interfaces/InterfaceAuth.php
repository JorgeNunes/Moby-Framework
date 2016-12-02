<?php

namespace Auth\Interfaces;

/**
 * Interface of Auth class
 *
 * @package Auth
 * @author `Vinicius Pugliesi`
 */
interface InterfaceAuth
{
    public function auth();
    
    public function hasAuth($user);
    
    public function redirecAuth($user);
}