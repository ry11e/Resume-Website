<!DOCTYPE html>
<html>

<head>
    <title>Edit Skill</title>
    <link rel="stylesheet" href="<?= base_url('css/bulma.min.css') ?>">
</head>

<body>
    <section class="section">
        <div class="container">
            <div>
                <a href="<?= base_url('admin') ?>" class="button is-light is-small">Back</a>
            </div>
            <h1 class="title">Edit Information</h1>

            <?php if (session()->getFlashdata('status')): ?>
                <div class="notification is-success"><?= session()->getFlashdata('status') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('admin/update-account') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="field">
                    <label class="label">Username</label>
                    <input class="input" type="text" name="username" value="<?= $user['username'] ?>">
                </div>

                <div class="field">
                    <label class="label">First Name</label>
                    <input class="input" type="text" name="first_name" value="<?= $user['first_name'] ?>">
                </div>

                <div class="field">
                    <label class="label">Last Name</label>
                    <input class="input" type="text" name="last_name" value="<?= $user['last_name'] ?>">
                </div>

                <div class="field">
                    <label class="label">Middle Name</label>
                    <input class="input" type="text" name="middle_name" value="<?= $user['middle_name'] ?>">
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <input class="input" type="text" name="email_address" value="<?= $user['email_address'] ?>">
                </div>

                <div class="field">
                    <label class="label">Birthdate</label>
                    <input class="input" type="date" name="birthdate" value="<?= $user['birthdate'] ?>">
                </div>

                <div class="field">
                    <label class="label">Address</label>
                    <input class="input" type="text" name="address" value="<?= $user['address'] ?>">
                </div>



                <div class="notification is-info is-light is-size-7">
                    Leave the password field blank if you don't want to change it.
                </div>

                <div class="field">
                    <label class="label">New Password</label>
                    <input class="input" type="password" name="password" placeholder="********">
                </div>

                <button type="submit" class="button is-primary">Save Changes</button>
            </form>
        </div>
    </section>
</body>

</html>