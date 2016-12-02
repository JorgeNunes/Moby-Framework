<?php

namespace Auth;

use Session\Session;
use Auth\Interfaces\InterfaceAuth;
use Exception\RenderException;

/**
 * Auth class responsible for the autentication users
 */
class Auth implements InterfaceAuth
{
    /**
     * All autentication users 
     * @var array
     */
    private $_users = [];
    
    
    /**
     * Exchange $_users
     * 
     * @return void
     */
    public function auth()
    {
        $this->_users = $this->users();
    }
    
    
    /**
     * Verify if has user 
     * 
     * @param string $user
     * @return bool
     */
    public function hasAuth($user)
    {
        $this->auth();
        
        foreach ($this->_users as $u) {
            if ($u['name'] == $user && Session::has($user))
                return true;
        }

        return false;
    }
    
    
    /**
     * Redirect user for route corresponding
     * 
     * @param string $user
     * @return string
     */
    public function redirecAuth($user)
    {
        $this->auth();
        
        foreach ($this->_users as $u) {
            if ($u['name'] == $user)
                return $u['redirect'];
        }


        return '/';
    }
}