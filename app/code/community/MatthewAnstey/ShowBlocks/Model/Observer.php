<?php

class MatthewAnstey_ShowBlocks_Model_Observer
{
    public function wrapHtml($observer)
    {
        $enabled = Mage::getStoreConfig('matthewanstey/matthewanstey_group/matthewanstey_select',Mage::app()->getStore());
    
        if(Mage::helper('showblocks')->isUserAdmin() && $enabled){
            
            $transport = $observer->getEvent()->getTransport();
            $html = $transport->getHtml();
            $block = $observer->getEvent()->getBlock();
            $blockName = $block->getBlockAlias();
        
         if($block instanceof Mage_Cms_Block_Block){
            $transport->setHtml('<div class="cms-block-wrapper"><span class="cms-block-title">' . $blockName . '</span><div class="cms-block">' . $html . '</div></div>');
         }
         
        }  
    }
    
}
