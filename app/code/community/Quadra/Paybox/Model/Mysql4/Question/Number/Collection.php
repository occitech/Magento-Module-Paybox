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
class Quadra_Paybox_Model_Mysql4_Question_Number_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    protected function _construct() {
        $this->_init('paybox/question_number');
    }

}