<p>
    {l s=' ' d='Modules.Custompayment'}
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


<p style="margin-bottom: 10px;">
    Account Number: 0645544205 (พร้อมเพย์)
    <br>
    Account Name: นาย ธนาธร สุขสวัสดิ์
    <br>
    หากท่านโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงินเพื่อยืนยันการชำระเงิน
</p>


<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>