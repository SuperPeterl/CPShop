<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.request_sql_settings.form_data_provider' shared service.

return $this->services['prestashop.admin.request_sql_settings.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\RequestSql\SqlRequestSettingsFormDataProvider(($this->services['prestashop.core.sql_manager.configuration.sql_request_configuration'] ?? $this->load('getPrestashop_Core_SqlManager_Configuration_SqlRequestConfigurationService.php')));