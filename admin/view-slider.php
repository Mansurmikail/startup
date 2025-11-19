<?php
include "config.php";

$slider = $pdo->query("SELECT * FROM slider ORDER BY id DESC");
?>

<div class="slider">
    <?php foreach ($slider as $item): ?>
        <div class="slide">
            <img src="<?php echo $item['image_url']; ?>" alt="" width="100%">

            <h2><?php echo $item['title']; ?></h2>
            <h3><?php echo $item['subtitle']; ?></h3>

            <?php if (!empty($item['link'])): ?>
                <a href="<?php echo $item['link']; ?>" class="btn">Learn More</a>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
