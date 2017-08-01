<?php
foreach($avatar as $key => $value)
{
    ?>
         <img link="<?php echo $value->name?>" src="<?=base_url()?>images/products/<?php echo $value->name?>" alt="" width="100px" id="list_image" id_pr="<?php echo $pr_id?>">
    <?php
}
?>