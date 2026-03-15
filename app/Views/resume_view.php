<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $info['name'] ?> | Resume</title>
    <link rel="stylesheet" href="css/bulma.min.css">
</head>
<section class="hero is-link is-bold">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                
                <div class="column">
                    <h1 class="title is-2"><?= $info['name'] ?></h1>
                    <h2 class="subtitle is-4"><?= $info['role'] ?></h2>
                </div>

                <div class="column is-narrow">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="images/profile.jpg" alt="My Profile Picture">
                    </figure>
                </div>

            </div>
            </div>
    </div>
</section>

<div class="container is-fluid mt-6">
    <div class="columns is-multiline">

        <div class="column is-3">
            <h3 class="title is-5 has-text-link">Experience/Projects</h3>
            <hr>
            <?php foreach ($info['experience'] as $job): ?>
                <div class="box p-4 mb-3">
                    <span class="tag is-info is-light is-small"><?= $job['year'] ?></span>
                    <h4 class="is-size-6 has-text-weight-bold mt-2"><?= $job['company'] ?></h4>
                    <p class="is-size-7"><?= $job['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column is-3">
            <h3 class="title is-5 has-text-link">Contact</h3>
            <hr>
            <div class="notification is-white p-4">
                <p class="is-size-6"><strong>Email:</strong></p>
                <p class="is-size-7"><a href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a></p>
            </div>
        </div>

        <div class="column is-3">
            <h3 class="title is-5 has-text-link">Skills</h3>
            <hr>
            <?php foreach ($info['skills'] as $skill): ?>
                <div class="box p-4 mb-3">
                    <h4 class="is-size-6 has-text-weight-bold"><?= $skill['name'] ?></h4>
                    <p class="is-size-7 has-text-grey"><?= $skill['level'] ?></p>
                    <p class="is-size-7"><?= $skill['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column is-3">
            <h3 class="title is-5 has-text-link">Education</h3>
            <hr>
            <?php foreach ($info['education'] as $edu): ?>
                <div class="box p-4 mb-3">
                    <h4 class="is-size-6 has-text-weight-bold"><?= $edu['school'] ?></h4>
                    <p class="is-size-7 has-text-grey"><?= $edu['level'] ?></p>
                    <p class="is-size-7"><?= $edu['year'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<footer class="footer mt-6">
    <div class="content has-text-centered">
        <p>© 2026 | Built with <strong>CodeIgniter 4</strong>, <strong>Bulma</strong>, and <strong>Gemeni</strong></p>
    </div>
</footer>
</body>

</html>