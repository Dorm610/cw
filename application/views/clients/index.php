<h2>
    <?php echo $title; ?>
</h2>
<?php
foreach ($clients as $client): ?>

<h3><?php echo $client['id']; ?></h3>
<div class="main">
    <?php echo $client['name']; ?>
</div>
<p><a href="<?php echo site_url('clients/' . $client['id']); ?>">view more</a></p>
<?php endforeach; ?>