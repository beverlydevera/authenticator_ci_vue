<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-b+jboW/YIpW2ZZYyYdXczKK6igHlnkPNfN9kYAbqYV7rNQ9PKTXlS2D6j1QZIATW" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/select2/css/select2.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/sweetalert2/sweetalert2.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/toastr/toastr.min.css") ?>">
    <script src="<?= base_url('assets/js/plugins/vue.js') ?>"></script>
    <script type="text/javascript">
        window.App = {
            "baseUrl": "<?= base_url() ?>",
            "removeDOM": "",
        };
    </script>
    <style>
        body {
            background-color: #9cdbd1;
        }
        .loginbox {
            text-align: center;
            display: block;
            margin: 5% auto;
            padding: 1%;
            background-color: #ffffff;
            border: 1px solid #000;
            border-radius: 1em;
        }
        .requiredval {
            color: #ff0000;
        }
    </style>
</head>
<body>
<div class="container" id="<?=$vueid?>">
    <div class="col-md-4 loginbox">
    <h3 style="text-align:center;">- - - LOGIN - - -</h3>
    <u>Sign in to start your session</u>
    <form @submit.prevent="checkUser">
        <div class="form-group">
            <label class="col-form-label" for="inputDefault"><span class="requiredval">*</span> Username:</label>
            <input type="text" class="form-control" v-model="userdata.username" placeholder="Username">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="inputDefault"><span class="requiredval">*</span> Password:</label>
            <input type="password" class="form-control" v-model="userdata.password" placeholder="Password">
        </div>
        <div class="row">
            <div class="col-6 offset-md-3">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </form>
    </div>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<script src="<?= base_url('assets/js/plugins/axios.min.js') ?>"></script>
<script src="<?= base_url("assets/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/select2/js/select2.full.min.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/sweetalert.min.js") ?>"></script>
<script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.min.js") ?>"></script>
<script src="<?= base_url('assets/plugins/toastr/toastr.min.js') ?>"></script>

<?php if (!empty($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= base_url('assets/js/' . $j . '?ver=') . filemtime(FCPATH) ?>"></script>
    <?php endforeach ?>
<?php endif ?>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select-picker').select2({
            theme: 'bootstrap4'
        })
    });

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
</script>

</body>
</html>