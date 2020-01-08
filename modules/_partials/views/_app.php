<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{description}">
    <meta name="robot" content="noindex, nofollow">
    <meta name="keywords" content="{keyword}">
    <title><?= $title ?></title>
    <!-- Main CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/start-ui/lib/font-awesome/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/start-ui/lib/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/start-ui/main.css') ?>">
    <!--  Main JS  -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="<?= base_url('assets/js/start-ui/lib/popper/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/start-ui/lib/tether/tether.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/start-ui/lib/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/start-ui/plugins.js') ?>"></script>
    <script src="<?= base_url('assets/js/start-ui/app.js') ?>"></script>
    <!-- custome JS -->
    <script>
        $(function($) {
            var activeurl = window.location;
            $('a[href="' + activeurl + '"]').parents('li:eq(1)').addClass('opened');
            $('a[href="' + activeurl + '"]').css({
                "background-color": "#dbe7ee",
                "color": "#818181"
            });
        });
    </script>

</head>