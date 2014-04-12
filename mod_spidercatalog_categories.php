<?php
defined('_JEXEC') or die('Restricted access');

require_once( dirname(__FILE__) . '/helper.php' );
$categorias = ModSpideCatalogCategoriesHelper::getCategories($params);
if(count($categorias)==0){
   $mensaje = "No hay categorias";
}
require( JModuleHelper::getLayoutPath('mod_spidercatalog_categories') );
