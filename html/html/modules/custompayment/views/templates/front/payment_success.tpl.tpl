{**
* Custom Payment Success Template
*}
{block name='page_content'}
    <div class="alert alert-success" role="alert">
        {l s='Payment Successful!' d='Modules.Custompayment'}
    </div>
    <div>
        {l s='Thank you for your payment.' d='Modules.Custompayment'}
    </div>
    <div>
        {l s='Order Reference: ' d='Modules.Custompayment'}{$paymentDetails.order_reference}
    </div>
    <div>
        {l s='Amount Paid: ' d='Modules.Custompayment'}{$paymentDetails.amount_paid} {l s='USD' d='Modules.Custompayment'}
    </div>
    <div>
        {l s='Payment Date: ' d='Modules.Custompayment'}{$paymentDetails.payment_date}
    </div>
    {*
    Additional details or instructions can be added here
    *}
{/block}
