<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CustomPayment extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'custompayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_,
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom Payment');
        $this->description = $this->l('Custom Payment Method with QR Code and Slip Upload');
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('paymentOptions') ||
            !$this->registerHook('paymentReturn')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        $cartId = $params['cart']->id;

         //Pass the cart ID to the payment form template
        $paymentForm1 = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form1.tpl', array(
            'cart_id' => $cartId,
        ));
        $paymentForm2 = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form2.tpl', array(
            'cart_id' => $cartId,
        ));
        $paymentForm3 = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form3.tpl', array(
            'cart_id' => $cartId,
        ));
        $paymentForm4 = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form4.tpl', array(
            'cart_id' => $cartId,
        ));

        $newOption1 = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption1->setCallToActionText($this->l('Bank Transfer'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm1);
        
        $newOption2 = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption2->setCallToActionText($this->l('QR Code'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm2);
        
        $newOption3 = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption3->setCallToActionText($this->l('PrompPay'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm3);
        
        $newOption4 = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();       
        $newOption4->setCallToActionText($this->l('Counter Service'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm4);

        

        return [$newOption1,$newOption2,$newOption3,$newOption4];
    }

    public function hookPaymentReturn($params)
{
    if (!$this->active) {
        return;
    }

    // Check if payment was successful
    if ($params['order']->getCurrentState() == Configuration::get('PS_OS_PAYMENT')) {
        // Update order status to "Payment accepted"
        $newOrderStatus = Configuration::get('PS_OS_PAYMENT');
        $params['order']->setCurrentState($newOrderStatus);

        // Display success message to the customer
        $message = $this->l('Your payment was successful.');

        // Get the confirmation page URL
        $orderConfirmationUrl = $this->context->link->getPageLink('order-confirmation', true);

        // Display a button/link to redirect back to the confirmation page
        $confirmationLink = '<a href="' . $orderConfirmationUrl . '" class="btn btn-primary">' . $this->l('Back to confirmation page') . '</a>';

        // Assign the message and confirmation link to the template
        $this->context->smarty->assign(array(
            'payment_message' => $message,
            'confirmation_link' => $confirmationLink,
        ));

        // Fetch the template
        return $this->fetch($this->local_path .'views/templates/front/payment_return.tpl');
    }
}
}
