<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
<?php foreach ($product['images'] as $image):?>
    <img width="200"  src="/img/small/<?=$image['path']?>" alt="">
<?php endforeach;?>
