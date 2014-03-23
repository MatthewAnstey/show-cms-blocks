<?php


class MatthewAnstey_ShowBlocks_Helper_Data extends Mage_Core_Helper_Abstract
{
    
    /**
     * Check if user is admin
     *
     * @return boolean
     */
    public function isUserAdmin()
    {
        $sesId = isset($_COOKIE['adminhtml']) ? $_COOKIE['adminhtml'] : false;
        $session = false;
        if ($sesId) {
            $session = Mage::getSingleton('core/resource_session')->read($sesId);
        }
        $loggedIn = false;
        if ($session) {
            if (stristr($session, 'Mage_Admin_Model_User')) {
                $loggedIn = true;
            }
        }
        return $loggedIn;
    }
    
    
}
   