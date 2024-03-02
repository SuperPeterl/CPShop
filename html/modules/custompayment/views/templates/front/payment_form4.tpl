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

<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
<div class="barcode-container">
    <svg id="barcode"></svg>
</div>

<script>
    function generateRandomNumber() {
        const randomDigits = Math.floor(Math.random() * 1000000000000); // 13 digits
        return randomDigits.toString().padStart(13, '0');
    }

    const prefix = "885"; // Fixed 3-digit prefix
    const randomNumber = generateRandomNumber();
    const barcodeNumber = prefix + randomNumber;

    JsBarcode("#barcode", barcodeNumber, {
      format: "code128b",
      displayValue: true,
      fontSize: 20
    });
  </script>


<form action="{$link->getModuleLink('custompayment', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" name="payment_slip" required>
    <button style="background-color: #24b9d7;  border: none; color: white;padding: 5px 15px; margin-bottom: 15px; border-radius: 5px;" type="submit"name="submitPaymentSlip">{l s='Upload Slip' d='Modules.Custompayment'}</button>
</form>