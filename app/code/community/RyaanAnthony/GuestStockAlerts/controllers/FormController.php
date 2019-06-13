<?php

class RyaanAnthony_GuestStockAlerts_FormController extends Mage_Core_Controller_Front_Action
{
  /**
   * Handle the form submission
   */
  public function postAction()
  {
    $post = $this->getRequest()->getPost();

    try {
      $result = $this->saveSubmission(
        $post['guest-stock-alerts']['product_id'],
        $post['guest-stock-alerts']['name'],
        $post['guest-stock-alerts']['email']
      );
    } catch(Error $error) {
      $result = false;
    }

    if ($result) {
      $result_message = $this->__("Alert subscription has been saved.");
    } else {
      $result_message = $this->__("Unable to update the alert subscription.");
    }
    $this->getResponse()->setBody($result_message);
    return;
  }

  /**
   * Persist the submission to data model
   * @param string $productId
   * @param string $name
   * @param string $email
   * @return bool
   */
  private function saveSubmission(string $productId, string $name, string $email)
  {
    /* @var $subscription RyaanAnthony_GuestStockAlerts_Model_Subscription */
    $subscription = Mage::getModel('guest_stock_alerts/subscription')
      ->setName($name)
      ->setEmail($email)
      ->setProductId($productId)
      ->setWebsiteId(Mage::app()->getStore()->getWebsiteId());

    return $subscription->save();
  }
}
