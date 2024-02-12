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
        $logoPath = _PS_MODULE_DIR_ . 'custompayment/views/front/logo.png';
        $qrCodePath = _PS_MODULE_DIR_ . 'custompayment/views/front/qrcode.png';
        $this->context->smarty->assign([
            'logo' => $logoPath,
            'qrcode' => $qrCodePath,
        ]);
        $paymentForm = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form.tpl');

        $newOption = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption->setCallToActionText($this->l('Pay by Custom Payment'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm);
            
        return [$newOption];
    }

    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        return $this->fetch('module:custompayment/views/templates/hook/payment_return.tpl');
    }
}
