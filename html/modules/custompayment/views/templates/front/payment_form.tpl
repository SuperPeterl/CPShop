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
    Cart ID: {$cart_id}
</p>
<p>
    Module Directory: {_PS_MODULE_DIR_}custompayment/
</p>

<p>
    Your Account Number: 0645544205 (พร้อมเพย์)
</p>
<p>
    <img src="https://www.i-pic.info/i/LsBi651476.png" alt="QR Code" style="width: 400px; height: auto;">
</p>

<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>