<?php
class RyaanAnthony_GuestStockAlerts_Block_Adminhtml_Alerts_Stock extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Alerts_Stock
{
  protected function _prepareCollection()
  {
    $productId = $this->getRequest()->getParam('id');
    $websiteId = 0;
    if ($store = $this->getRequest()->getParam('store')) {
      $websiteId = Mage::app()->getStore($store)->getWebsiteId();
    }

    $collection = Mage::getModel('guest_stock_alerts/subscription')
      ->getCollection()
      ->forProduct($productId, $websiteId);

    $this->setCollection($collection);
    return $this;
  }

  protected function _prepareColumns()
  {
    $this->addColumn('name', [
      'header'    => Mage::helper('catalog')->__('Name'),
      'index'     => 'name',
    ]);

    $this->addColumn('email', [
      'header'    => Mage::helper('catalog')->__('Email'),
      'index'     => 'email',
    ]);

    $this->sortColumnsByOrder();
    return $this;
  }
}
