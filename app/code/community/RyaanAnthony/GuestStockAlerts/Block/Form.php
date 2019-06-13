<?php
class RyaanAnthony_GuestStockAlerts_Block_Form extends Mage_ProductAlert_Block_Product_View
{
  /**
   * Get form action url
   *
   * @return string
   */
  public function getFormAction()
  {
    return Mage::getUrl('guest_stock_alerts/form/post');
  }

  /**
   * Get current product instance
   *
   * @return Mage_Catalog_Model_Product
   */
  public function getProduct()
  {
    return Mage::registry('product');
  }

  /**
   * Translations helper
   *
   * @param string $message
   * @return string
   */
  public function __($message)
  {
    return Mage::helper('guest_stock_alerts')->__($message);
  }
}
