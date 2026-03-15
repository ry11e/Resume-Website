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
            <h1 class="title">Admin Dashboard</h1>

            <h3 class="title is-5 has-text-link">Skills</h3>
            <table class="table is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Skill Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($skills as $skill): ?>
                        <tr>
                            <td><?= $skill['id'] ?></td>
                            <td><?= $skill['name'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit-skill/' . $skill['id']) ?>" class="button is-small is-warning">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>

            <h3 class="title is-5 has-text-link">Education</h3>
            <table class="table is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>School</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($education as $educ): ?>
                        <tr>
                            <td><?= $educ['id'] ?></td>
                            <td><?= $educ['school'] ?></td>
                            <td><?= $educ['level'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit-education/' . $educ['id']) ?>" class="button is-small is-warning">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <br>


            <h3 class="title is-5 has-text-link">Experience</h3>
            <table class="table is-fullwidth is-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Company</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($experience as $exp): ?>
                        <tr>
                            <td><?= $exp['id'] ?></td>
                            <td><?= $exp['company'] ?></td>
                            <td><?= $exp['year'] ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit-experience/' . $exp['id']) ?>" class="button is-small is-warning">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>