<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Marry.me</title>
    <?= $this->include('layouts/partials/head'); ?>
</head>

<body>
    <div id="app">
        <?= $this->include('layouts/partials/navigation'); ?>

        <main class="py-4">
            <div class="content-wrapper">
                <?= $this->renderSection('page-content'); ?>

            </div>
        </main>
    </div>

    <?= $this->include('layouts/partials/scripts'); ?>

</body>

</html>