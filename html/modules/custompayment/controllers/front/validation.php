<?php

require_once 'vendor/autoload.php';

use Zxing\QrReader;

class CustomPaymentValidationModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        $context = Context::getContext();
        $cart = $context->cart;

        // Check if the form was submitted
        if (Tools::isSubmit('submitPaymentSlip')) {
            // Check if a file was uploaded
            if (isset($_FILES['payment_slip']) && !empty($_FILES['payment_slip']['name'])) {
                // Validate the uploaded file (e.g., file type, size, etc.)
                $validFile = $this->validateFile($_FILES['payment_slip']);
                if ($validFile) {
                    $validQrcode = $this->validateQrcode($_FILES['payment_slip']);
                }
                else 
                {
                    $this->errors[] = $this->module->l('Invalid file. Please upload a valid payment slip.');
                    $validQrcode = false;
                }
                //die(var_dump($validQrcode));
                if ($validFile && $validQrcode) {
                    // Process the payment details and update order status
                    $this->module->validateOrder(
                        $cart->id,
                        Configuration::get('PS_OS_PAYMENT'), // Use the appropriate order status ID for "payment accepted"
                        $cart->getOrderTotal(),
                        $this->module->displayName,
                        null,
                        array(),
                        null,
                        false,
                        $cart->secure_key
                    );


                    $customer = new Customer($cart->id_customer);
                    if (!Validate::isLoadedObject($customer)) {
                    Tools::redirect('index.php?controller=order&step=1');
                    }
                    // Redirect back to the payment form
                    Tools::redirect('index.php?controller=order-confirmation&id_cart=' . $cart->id . '&id_module=' . $this->module->id . '&id_order=' . $this->module->currentOrder . '&key=' . $customer->secure_key);
                   // Tools::redirect($context->link->getPageLink('order-confirmation', true));
                    return;
                } else {
                    $this->errors[] = $this->module->l('Invalid file. Please upload a valid payment slip.');
                }
            } else {
                $this->errors[] = $this->module->l('Please upload a payment slip.');
            }
        }

        // Set the template for displaying errors
        //$this->setTemplate('module:custompayment/views/templates/front/payment_form.tpl');
        Tools::redirect('index.php?controller=order&step=3');
    }

    // Function to validate the uploaded file
    private function validateFile($file)
    {
        // Check if a file was uploaded
        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            return false; // No file uploaded
        }

        // Check if the file is an image
        $imageInfo = getimagesize($file['tmp_name']);
        if (!$imageInfo || !in_array($imageInfo[2], array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG))) {
            return false; // Not a valid image file
        }
        return true; // File is a valid image
    }

    private function validateQrcode($file)
    {
        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            return false; // No file uploaded
        }
        $qrcode = new QrReader($file['tmp_name']);
        $qrcode->decode();
        $result = $qrcode->getResult();
        return $result;
    }
}
