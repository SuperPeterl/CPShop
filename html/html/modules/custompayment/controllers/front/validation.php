<?php

class CustomPaymentValidationModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();

        // Check if the form was submitted
        if (Tools::isSubmit('submitPaymentSlip')) {
            // Check if a file was uploaded
            if (isset($_FILES['payment_slip']) && !empty($_FILES['payment_slip']['name'])) {
                // Validate the uploaded file (e.g., file type, size, etc.)
                $validFile = $this->validateFile($_FILES['payment_slip']);

                if ($validFile) {
                    // Process the payment details and update order status
                    $paymentDetails = $this->processPayment($_FILES['payment_slip']);

                    // Display success message to the customer
                    $this->context->smarty->assign('paymentSlip', $_FILES['payment_slip']['name']); // Assign the file name to display it
                    $this->context->smarty->assign('paymentDetails', $paymentDetails);
                    $this->setTemplate('module:custompayment/views/templates/front/payment_success.tpl');
                    return;
                } else {
                    $this->errors[] = $this->module->l('Invalid file. Please upload a valid payment slip.');
                }
            } else {
                $this->errors[] = $this->module->l('Please upload a payment slip.');
            }
        }

        // If validation fails or the form hasn't been submitted, display the payment form again
        $this->setTemplate('module:custompayment/views/templates/front/payment_form.tpl');
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
    
    

    // Function to process the payment details and update order status
    private function processPayment($file)
    {
        // Add your payment processing logic here
        // This could involve reading the file, validating payment details, updating order status, etc.

        // Example: Displaying payment details to the customer
        $paymentDetails = array(
            'order_reference' => '123456', // Replace with actual order reference
            'amount_paid' => '100.00', // Replace with actual amount paid
            'payment_date' => date('Y-m-d H:i:s'), // Replace with actual payment date
        );

        return $paymentDetails;
    }
}
