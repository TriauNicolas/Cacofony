<h1>Please LogIn</h1>

<ol>
    <?php /** @var $response string */?>
        <h4>
            <?php 
                if(!empty($response)) { 
                    echo '<h4 style="color:red">Mot de passe ou identifiant renseigné incorrect</h4>';
                }else {
                    echo '';
                } 
            ?>
        </h4>
</ol>


<form method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>