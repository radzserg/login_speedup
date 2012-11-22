<?php

class Radz_LoginSpeedup_Block_Handler extends Mage_Core_Block_Template
{

    protected $_template = 'loginspeedup/login_popup.phtml';
 
    public function _toHtml() 
    {
        if (Mage::getSingleton('customer/session')->isLoggedIn()) {
            return '';
        } else {
            return parent::_toHtml();
        }
    } 
    
    public function getSelectors()
    {        
        $knownHandles = array(
            'catalog_product_view' => array('.add-to-cart button'),
            'catalog_category_view' => array('.btn-cart'), 
        );

        $handles = $this->getLayout()->getUpdate()->getHandles();
        foreach ($handles as $handle) {
            if (isset($knownHandles[$handle])) {
                return $knownHandles[$handle];
            }    
        }                
        return array();
    }
        
}