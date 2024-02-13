<p>
    {l s='V101:' d='Modules.Custompayment'}
</p>

{if isset($errors) && $errors}
    <div class="alert alert-danger">
        <ul>
            {foreach from=$errors item=error}
                <li>{$error}</li>
            {/foreach}
        </ul>
    </div>
{/if}
<p>
    this is Counter Service
</p>

<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>