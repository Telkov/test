<?=$data['title']; ?>

<?php
foreach ($data['users'] as $user) :?>
    <li><?= $user ?></li>
<?php endforeach; ?>

