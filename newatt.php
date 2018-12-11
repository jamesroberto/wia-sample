<?php
define('MAGENTO', realpath(dirname(__FILE__)));

require_once MAGENTO . '/app/Mage.php';

Mage::app();

$installer = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');
$installer->startSetup();



 

/*

$installer->removeAttribute('catalog_category', 'sw_ocat_promotional_term', array(
    'type'              => 'varchar',
    'label'             => 'Category Icon Logo',
    'input'             => 'image',
    'backend'           => 'catalog/category_attribute_backend_image',
    'required'          => false,
    'sort_order'        => 10,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Onepage Category'
));




$installer->addAttribute('catalog_category', 'promo_start_date', array(
    'group' => 'Onepage Category',
    'input' => 'date',
    'type' => 'datetime',
    'label' => 'Promo Start Date',
    'backend' => 'eav/entity_attribute_backend_datetime',
    'visible' => 1,
    'required' => 0,
    'user_defined' => 1,
    'searchable' => 1,
    'filterable' => 1,
    'comparable' => 1,
    'visible_on_front' => 1,
    'visible_in_advanced_search' => 0,
    'is_html_allowed_on_front' => 1,
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'position'            => 200,//any number will do
)); 

*/

/*
$installer->addAttribute('catalog_category', 'category_template', array(
    'group' => 'Display Settings',
    'type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Category Template',
    'input' => 'select',
    'option' => 
  array (
    'values' => 
    array (
      0 => 'Empty',
     
    ),
  ),
    'class' => '',
    'source' => '',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => true,
    'user_defined' => true,
    'default' => '',
    'searchable' => false,
    'filterable' => false,
    'comparable' => false,
    'visible_on_front' => false,
    'unique' => false,
    'apply_to' => '',
    'is_configurable' => false
));



$installer->removeAttribute('catalog_category', 'icon_logo', array(
    'type'              => 'varchar',
    'label'             => 'Category Icon Logo',
    'input'             => 'image',
    'backend'           => 'catalog/category_attribute_backend_image',
    'required'          => false,
    'sort_order'        => 10,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Onepage Category'
));


$installer->addAttribute('catalog_category', 'right-banner', array(
    'group'             => 'Onepage Category',
    'type'              => 'int',//can be int, varchar, decimal, text, datetime
    'backend'           => '',
    'frontend_input'    => '',
    'frontend'          => '',
    'label'             => 'Right Banner',
    'input'             => 'select', //text, textarea, select, file, image, multilselect
    'default' => array(0),
    'class'             => '',
    'source'            => 'eav/entity_attribute_source_boolean',//this is necessary for select and multilelect, for the rest leave it blank
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'visible'           => true,
    'frontend_class'     => '',
    'required'          => false,//or true
    'user_defined'      => true,
    'default'           => '',
    'position'            => 100,//any number will do
));


$installer->addAttribute('catalog_category', 'banner_1_url', array(
    'type'              => 'text',
    'label'             => 'Banner 1 URL',
    'input'             => 'text',
    'source'            => 'eav/entity_attribute_source_boolean',//this is necessary for select and multilelect, for the rest leave it blank
    
    'required'          => false,
    'sort_order'        => 1000,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Cross Sell'
));

$installer->addAttribute('catalog_category', 'banner_2_url', array(
    'type'              => 'text',
    'label'             => 'Banner 2 URL',
    'input'             => 'text',
    'source'            => 'eav/entity_attribute_source_boolean',//this is necessary for select and multilelect, for the rest leave it blank
    'required'          => false,
    'sort_order'        => 2000,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Cross Sell'
));

$installer->addAttribute('catalog_category', 'banner_3_url', array(
    'type'              => 'text',
    'label'             => 'Banner 3 URL',
    'input'             => 'text',
    'source'            => 'eav/entity_attribute_source_boolean',//this is necessary for select and multilelect, for the rest leave it blank
    'required'          => false,
    'sort_order'        => 3000,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Cross Sell'
));

*/

$installer->removeAttribute('catalog_category', 'sw_cat_hide_menu_item', array(
    'type'              => 'varchar',
    'label'             => 'Slider Image',
    'input'             => 'image',
    'backend'           => 'catalog/category_attribute_backend_image',
    'required'          => false,
    'sort_order'        => 10,
    'global'             => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,//scope can be SCOPE_STORE or SCOPE_GLOBAL or SCOPE_WEBSITE
    'group'             => 'Onepage Category'
));




$installer->endSetup();


echo "DONE";
