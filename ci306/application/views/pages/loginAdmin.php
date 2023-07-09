<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
</head>

<body>
        <div class="pulse animated p-5">
            <div class="text-center">
                <h4 class="text-dark mb-4">Login Admin</h4>
            </div>
            <form class="user" action="<?php echo site_url('login/verify_admin'); ?>" method="post">
                <div class="mb-3"><input class="form-control form-control-user" type="email" name="email" value="<?php echo $admin['email'] ?>"></div>
                <div class="mb-3"><input class="form-control form-control-user" type="password" name="pwd" value="<?php echo $admin['mdp'] ?>"></div>
                <div class="mb-3">
                    <div class="custom-control custom-checkbox small"></div>
                </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #01703E;">Login</button>
                <hr>
                <hr>
            </form>
            <div class="text-center"><a class="small" style="color: #01703E;" href="<?php echo site_url('login/index'); ?>">S'inscrire en tant que simple utilisateur</a></div>
        </div>
</body>

</html>