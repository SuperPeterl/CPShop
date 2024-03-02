

<p style="margin-bottom: 10px;">
    Store Account Number: 06455442xxxxx (Kasikorn Bank)
    <br>
    Store Account Name: นาย สมชาย ใจดี
    <br>
    Store Account Type: Savings
    <br>
    Store Account Branch: สาขา เซ็นทรัลขอนแก่น
    <br>
    เมื่อโอนเงินเรียบร้อยแล้ว กรุณาอัพโหลดสลิปการโอนเงิน
</p>



<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>
