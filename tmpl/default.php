<?php
defined("_JEXEC") or die("Restricted area");
var_dump($params);
?>
<?php if ($categorias): ?>
   <ul id="sp_categories">
      <?php foreach ($categorias as $categoria): ?>
      <li>
         <a href="" title="<?php echo $categoria->description ?>"><?php echo $categoria->name ?></a>
      </li>
      <?php endforeach; ?>
   </ul>
<?php endif; ?>

<?php if ($mensaje): ?>
   <div class="info"><?php echo $mensaje ?></div>
<?php endif; ?>


