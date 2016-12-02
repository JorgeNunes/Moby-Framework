<?php

namespace Exception;

use Exception;
use Exception\InterfaceException;

/**
 * Exception class for all generic functions for the Exception 
 */
class RenderException extends Exception implements InterfaceException
{
    /**
     * Render error view with existing errors
     * 
     * @param array $args
     * @param string $view
     * @return include view
     */ 
    public function render($view, $args = [])
    {
        try {
            if (!file_exists(__DIR__ . '/../../../App/Views/errors/' . $view . '.php'))
                throw new Exception('Default view error not found', 1110);
            
            return include(__DIR__ . '/../../../App/Views/errors/' . $view . '.php');
            
        } catch (Exception $e) {
            return include(__DIR__ . '/../../../App/Views/errors/default-error.php');
        }
    }
}