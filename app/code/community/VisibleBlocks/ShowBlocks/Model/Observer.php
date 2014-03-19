<?php

class VisibleBlocks_ShowBlocks_Model_Observer
{
    public function wrapHtml($observer)
    {
        $transport = $observer->getEvent()->getTransport();
        $html = $transport->getHtml();
        $block = $observer->getEvent()->getBlock();
        $blockName = $block->getBlockAlias();
        
         if(get_class($block) == "Mage_Cms_Block_Block" || is_subclass_of($block, "Mage_Cms_Block_Block")){
             $transport->setHtml('<div class="cms-block-wrapper"><span class="cms-block-title">' . $blockName . '</span><div class="cms-block">' . $html . '</div></div>');
         }
        
    }
}
