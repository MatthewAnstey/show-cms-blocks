<?php

class MatthewAnstey_ShowBlocks_Model_Observer
{
    public function wrapHtml($observer)
    {
        if(Mage::helper('showblocks')->isUserAdmin()){
            $transport = $observer->getEvent()->getTransport();
            $html = $transport->getHtml();
            $block = $observer->getEvent()->getBlock();
            $blockName = $block->getBlockAlias();
        }
         if($block instanceof Mage_Cms_Block_Block){
            $transport->setHtml('<div class="cms-block-wrapper"><span class="cms-block-title">' . $blockName . '</span><div class="cms-block">' . $html . '</div></div>');
         }
    }
    
}
