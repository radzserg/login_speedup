<?php
 
require_once Mage::getModuleDir(null, 'Mage_Customer') . DS . 'Block' . DS . 'Form' . DS . 'Login.php';

class Radz_LoginSpeedup_Block_Form_Login extends Mage_Customer_Block_Form_Login
{
    
    public function getPostActionUrl()
    {        
        $params = array(
            Mage_Customer_Helper_Data::REFERER_QUERY_PARAM_NAME => Mage::helper('core')->urlEncode(Mage::helper('core/url')->getCurrentUrl())
        );
        return Mage::getUrl('customer/account/loginPost', $params);               
    }
    
    
}
