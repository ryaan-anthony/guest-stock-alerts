<?php
class RyaanAnthony_GuestStockAlerts_Model_Resource_Subscription_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
  protected function _construct()
  {
    $this->_init('guest_stock_alerts/subscription');
  }

  /**
   * Get collection for product
   *
   * @param int $productId
   * @param int $websiteId
   * @return self
   */
  public function forProduct($productId, $websiteId)
  {
    $this->getSelect()->where('product_id=?', $productId);
    if ($websiteId) {
      $this->getSelect()->where('website_id=?', $websiteId);
    }
    return $this;
  }
}
