<!DOCTYPE html>
<html>

<head>
    <title>Edit Skill</title>
    <link rel="stylesheet" href="<?= base_url('css/bulma.min.css') ?>">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Edit Experience: <?= $experience['company'] ?></h1>

            <form action="<?= base_url('admin/update-experience/' . $experience['id']) ?>" method="POST">
                <?= csrf_field() ?>
                <div class="field">
                    <label class="label">Company</label>
                    <div class="control">
                        <input class="input" type="text" name="company" value="<?= $experience['company'] ?>">
                    </div>
                    <label class="label">Year</label>
                    <div class="control">
                        <input class="input" type="text" name="year" value="<?= $experience['year'] ?>">
                    </div>
                    <label class="label">Description</label>
                    <div class="control">
                        <input class="input" type="text" name="desc" value="<?= $experience['desc'] ?>">
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