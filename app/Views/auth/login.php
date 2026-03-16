<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <div>
                        <a href="<?= base_url('resume') ?>" class="button is-light is-small">Back</a>
                        <br>
                    </div>
            <div class="columns is-centered">

                <div class="column is-4">
                    

                    <form action="<?= base_url('attempt-login') ?>" method="POST" class="box">
                        <?= csrf_field() ?>
                        <h1 class="title">Admin Login</h1>
                        <div class="field">
                            <label class="label">Password</label>
                            <input class="input" type="password" name="password" required>
                        </div>
                        <button type="submit" class="button is-primary is-fullwidth">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>