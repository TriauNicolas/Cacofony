<?php

use App\Core\Helper\AuthHelper;
use App\Entity\User;

?>

<h1>Please Sign up</h1>

<form method="post" action="/signup">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php /** @var $users User[] */
    foreach ($users as $user) : ?>
        <li><a href="/show/<?= $user->getId(); ?>-test"><?= $user->getLogin(); ?></a></li>
    <?php endforeach; ?>