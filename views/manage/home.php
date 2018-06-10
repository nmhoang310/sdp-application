<?php
echo "$title<br/>";
echo "$content<br/>";
// echo "$product<br/>";
?>

<ul>
<?php foreach ($product as $item): ?>
    <li><?php echo $item->name ?></li>
<?php endforeach;?>
</ul>

<ul>
<?php foreach ($todo_list as $item): ?>
    <li><?php echo $item ?></li>
<?php endforeach;?>
</ul>

<a href="<?php echo base_url('blog/comments'); ?>">Click here</a>