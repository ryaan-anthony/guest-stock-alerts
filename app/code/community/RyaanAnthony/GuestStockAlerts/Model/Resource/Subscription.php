<?php
class RyaanAnthony_GuestStockAlerts_Model_Resource_Subscription extends Mage_Core_Model_Resource_Db_Abstract
{
  protected function _construct()
  {
    $this->_init('guest_stock_alerts/subscription', 'id');
  }
}
