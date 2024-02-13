
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
    Store Account Number: 06455442xxxxx (Kasikorn Bank)
    <br>
    Store Account Name: นาย สมชาย ใจดี
    <br>
    Store Account Type: Savings
    <br>
    Store Account Branch: สาขา สุราษฎร์ธานี
    <br>
    เมื่อโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงิน
</p>



<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>