<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AXAStudios\Customer\Block\Account;

class AuthorizationLink extends \Magento\Customer\Block\Account\AuthorizationLink
{
    public function FunctionName($value='')
    {
        // code...
    //Write your code here.
    }

    public function getLabel()
    {
        return $this->isLoggedIn()
        ? __($this->_myOwnFunction().' Sign Out')
        : __($this->_myOwnFunction().' Sign In');
    }

    private function _myOwnFunction(){
      return 'Hello There';
    }

    public function anotherMethod(){
      return 'General Kenobi';
    }
}
