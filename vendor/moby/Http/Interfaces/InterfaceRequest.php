<?php

namespace Http\Interfaces;

/**
 * Interface of Request class
 *
 * @package Request
 * @author `Vinicius Pugliesi`
 */
interface InterfaceRequest
{
    public function __construct();
    
    public function input($param = null);
    
    public function filter_input($param, $restriction);
    
    public function file($param = null);
    
    public function isValid();
    
    public function getExtension($fileName);
    
    public function save();
    
    public function getErrors();
    
    public function run();
}