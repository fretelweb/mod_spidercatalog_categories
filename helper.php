<?php

defined("_JEXEC") or die("Restricted area");

class ModSpideCatalogCategoriesHelper
{

   public static function getHello(&$params)
   {
   }

   public static function getCategories(&$params)
   {
      $db = JFactory::getDbo();
      $query = $db->getQuery(true);
      $query
              ->select('id')
              ->select('name')
              ->select('description')
              ->from('#__spidercatalog_product_categories')
              ->where('published=1')
              ->where('parent=0', 'AND')
              ->order('ordering');
      $db->setQuery($query);
      $categorias = $db->loadObjectList();
      return $categorias;
   }

}
