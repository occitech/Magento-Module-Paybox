<?php

/**
 * 1997-2013 Quadra Informatique
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is available
 * through the world-wide-web at this URL: http://www.opensource.org/licenses/OSL-3.0
 * If you are unable to obtain it through the world-wide-web, please send an email
 * to ecommerce@quadra-informatique.fr so we can send you a copy immediately.
 *
 *  @author Quadra Informatique <ecommerce@quadra-informatique.fr>
 *  @copyright 1997-2013 Quadra Informatique
 *  @version Release: $Revision: 2.1.4 $
 *  @license http://www.opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 */
class Quadra_Paybox_Block_Adminhtml_Api_Debug_View_Tab_Response extends Quadra_Paybox_Block_Adminhtml_Api_Debug_Response_Grid
implements Mage_Adminhtml_Block_Widget_Tab_Interface {

    /**
     * Retrieve grid url
     *
     * @return string
     */
    public function getGridUrl() {
        return false;
    }

    /**
     * Retrieve grid row url
     *
     * @return string
     */
    public function getRowUrl($item) {
        return false;
    }

    /**
     * Retrieve tab label
     *
     * @return string
     */
    public function getTabLabel() {
        return Mage::helper('paybox')->__('Paybox Response');
    }

    /**
     * Retrieve tab title
     *
     * @return string
     */
    public function getTabTitle() {
        return Mage::helper('paybox')->__('Paybox Response');
    }

    /**
     * Check whether can show tab
     *
     * @return bool
     */
    public function canShowTab() {
        return true;
    }

    /**
     * Check whether tab is hidden
     *
     * @return bool
     */
    public function isHidden() {
        return false;
    }

}
