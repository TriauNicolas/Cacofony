<?php

use App\Core\Helper\AuthHelper;
use App\Entity\Post;
use App\Entity\User;
?>

<?php if (AuthHelper::isLoggedIn()) : ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?= AuthHelper::getLoggedUser()->user; ?>, vous êtes connecté ! <a href="/logout">Logout</a>
    </div>
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        Vous n'êtes pas connecté ! <a href="/login">Login</a>
    </div>
<?php endif; ?>

<h1>Je suis la page d'accueil</h1>

<p><?= $strongText; ?></p>
<p>Des paramètres autowire dans le service : <?= $appSecret; ?></p>

<ul>
    <?php /** @var $posts Post[] */
    foreach ($posts as $post) : ?>
        <li><a href="/show/<?= $post->getId(); ?>-test"><?= $post->getTitle(); ?></a></li>
    <?php endforeach; ?>
</ul>

<ol>fghfh
    <?php /** @var $users User[] */
    foreach ($users as $user) : ?>
        <li><a href="/show/<?= $user->getId(); ?>-test"><?= $user->getEmail(); ?></a></li>
    <?php endforeach; ?>
</ol>


