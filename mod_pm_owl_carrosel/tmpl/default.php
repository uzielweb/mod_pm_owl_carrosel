<?php

defined('_JEXEC') or die;
?>
<div class="pm-owl-carrossel">
    <div id="<?php echo 'module'.$module->id;?>" class="owl-carousel owl-theme w-100">
   
        <?php foreach($images as $item) : ?>
        <div class="item"  class=" w-100" >
        <?php if($item->link) :?>
               <a href="<?php echo $item->link;?>">
                <?php endif;?>
                <img class="w-100" src="<?php echo $item->image;?>" /> 
                <?php if($item->link) :?>
               </a>
                <?php endif;?>
                <div class="texts">
                <div class="title"> <h4>
               <?php if($item->link) :?>
               <a href="<?php echo $item->link;?>">
                <?php endif;?>
                <?php echo $item->title;?>
                <?php if($item->link) :?>
               </a>
                <?php endif;?>
                </h4></div>
                <div class="subtitle"><?php echo $item->subtitle;?></div>
                <div class="description"><?php echo $item->description;?></div>
                </div> 
        </div>
        <?php endforeach;?>
    </div>
</div>