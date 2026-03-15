<!DOCTYPE html>
<html>
<head>
    <title>Edit Skill</title>
    <link rel="stylesheet" href="<?= base_url('css/bulma.min.css') ?>">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Edit Skill: <?= $skill['name'] ?></h1>
            
            <form action="<?= base_url('admin/update-skill/' . $skill['id']) ?>" method="POST">
                <?= csrf_field() ?> <div class="field">
                    <label class="label">Skill Name</label>
                    <div class="control">
                        <input class="input" type="text" name="skill_name" value="<?= $skill['name'] ?>">
                    </div>
                    <label class="label">Level</label>
                    <div class="control">
                        <input class="input" type="text" name="skill_level" value="<?= $skill['level'] ?>">
                    </div>
                    <label class="label">Description</label>
                    <div class="control">
                        <input class="input" type="text" name="skill_desc" value="<?= $skill['desc'] ?>">
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