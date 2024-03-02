{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='customer_form'}
  {block name='customer_form_errors'}
    {include file='_partials/form-errors.tpl' errors=$errors['']}
  {/block}



<form action="{block name='customer_form_actionurl'}{$action}{/block}" id="customer-form" class="js-customer-form" method="post">
    {block name='needinvoice' }
        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <input name = "needinvoice" id="needinvoice" type = "checkbox" value = "1" >
            <label for="needinvoice">{l s='need invoice' d='Shop.Theme.Checkout'}</label>
          </div>
        </div>
    {/block}

  

  <div id = "xform">
    {block "form_fields"}
      {foreach from=$formFields item="field"}
      {if $field.name == "id_gender"}{continue}{/if}
        {block "form_field"}
          {if $field.type === "password"}
            <div class="field-password-policy">
              {form_field field=$field}
            </div>
          {else}
            {form_field field=$field}
          {/if}
        {/block}
      {/foreach}
      {$hook_create_account_form nofilter}
    {/block}
  </div>


  {block name='customer_form_footer'}
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      {block "form_buttons"}
        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          {l s='Save' d='Shop.Theme.Actions'}
        </button>
      {/block}
    </footer>
  {/block}

</form>
{/block}

<script>
  document.addEventListener("DOMContentLoaded", function() {
  
    var checkbox = document.getElementById("needinvoice");
    var form = document.getElementById("xform");
    var checkbox1 = document.querySelector('input[name="psgdpr"]');
    var checkbox2 = document.querySelector('input[name="customer_privacy"]');
    var f1 = document.querySelector('input[name="firstname"]');
    var l1 = document.querySelector('input[name="lastname"]');
    var e1 = document.querySelector('input[name="email"]');

    // Hide the form initially
    form.style.display = "none";
    checkbox1.checked = true;
    checkbox2.checked = true;
    f1.value = "quest";
    l1.value = "quest";
    e1.value = "quest@gmail.com";

    // Add event listener to the checkbox
    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            // If checkbox is checked, show the form
            form.style.display = "block";
            checkbox1.checked = false;
            checkbox2.checked = false;
            f1.value = "";
            l1.value = "";
            e1.value = "";
        } else {
            // If checkbox is unchecked, hide the form
            form.style.display = "none";
            checkbox1.checked = true;
            checkbox2.checked = true;
            f1.value = "quest";
            l1.value = "quest";
            e1.value = "quest@gmail.com";
        }
    });
});
</script>