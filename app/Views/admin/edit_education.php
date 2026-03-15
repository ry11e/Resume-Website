<!DOCTYPE html>
<html>

<head>
    <title>Edit Skill</title>
    <link rel="stylesheet" href="<?= base_url('css/bulma.min.css') ?>">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Edit Education: <?= $education['school'] ?></h1>

            <form action="<?= base_url('admin/update-education/' . $education['id']) ?>" method="POST">
                <?= csrf_field() ?>
                <div class="field">
                    <label class="label">School</label>
                    <div class="control">
                        <input class="input" type="text" name="school" value="<?= $education['school'] ?>">
                    </div>
                    <label class="label">Level</label>
                    <div class="control">
                        <input class="input" type="text" name="level" value="<?= $education['level'] ?>">
                    </div>
                    <label class="label">Year</label>
                    <div class="control">
                        <input class="input" type="text" name="year" value="<?= $education['year'] ?>">
                    </div>
                </div>

                <div class="control">
                    <button type="submit" class="button is-link">Save Changes</button>
                    <a href="<?= base_url('admin') ?>" class="button is-light">Cancel</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>