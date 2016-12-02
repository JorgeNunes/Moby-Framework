<?php

namespace Routing\Interfaces;

/**
 * Interface for the Route class
 *
 * @package Route
 * @author `Vinicius Pugliesi`
 */
interface InterfaceRoute
{
    public function any($route, $call);
    
    public function get($route, $call);
    
    public function post($route, $call);
    
    public function put($route, $call);
    
    public function delete($route, $call);
    
    public function group($route, $call);
    
    public function middleware($auth, $call = false);
    
    public function name($name);
    
    public function where(array $where);
    
    public function run();
}