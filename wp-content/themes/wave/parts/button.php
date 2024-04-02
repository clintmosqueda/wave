<?php
$link = empty($link) ? '/' : $link;
$modifier = empty($modifier) ? '' : $modifier;
$text = empty($text) ? '' : $text;
?>

<a href="<?php echo $link;?>" class="button <?php echo $modifier;?>"><?php echo $text;?></a>