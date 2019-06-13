# Guest Stock Alerts

Override Magento's stock alerts to accept name/email from guest users.

### Installation

Add the extension to your project's composer file:

```
  "require": {
  
    ...
    
    "ryaan-anthony/magento-guest-stock-alerts": "^0",
    
    ...
    
  },
```

> **If you don't have a Magento v1 composer project, [you can fork mine](https://github.com/ryaan-anthony/magento-dev)**

### Setup

Follow the setup/configuration steps for Magento's Product Alerts feature: https://docs.magento.com/m1/ce/user_guide/catalog/inventory-product-alert.html

Navigate to an out of stock product page and click the link "Sign up to get notified ..."

![Screenshot](https://github.com/ryaan-anthony/magento-guest-stock-alerts/raw/master/docs/assets/screenshot.png)

Navigate to the product edit screen in the admin and click "Product Alerts" tab

![Screenshot](https://github.com/ryaan-anthony/magento-guest-stock-alerts/raw/master/docs/assets/adminhtml.png)


### Roadmap

- Send email to customers awaiting notification once item is back in stock
­ Once email is sent, ensure that customer is removed from list
