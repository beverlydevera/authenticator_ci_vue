<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <script src="<?= base_url('assets/js/plugins/vue.js') ?>"></script>
    <script type="text/javascript">
        window.App = {
            "baseUrl": "<?= base_url() ?>",
            "removeDOM": "",
        };
    </script>
</head>
<body>
<div id="<?=$vueid?>">
    <h3 style="text-align:center;">- - - LOGIN - - -</h3>
    <p class="login-box-msg">Sign in to start your session</p>

    <form @submit.prevent="checkUser">
        <div class="input-group mb-3">
            <input type="text" class="form-control" v-model="userdata.username" placeholder="Username">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" v-model="userdata.password" placeholder="Password">
            <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
        </div>
    </form>

    <?= sesdata('username');?>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="<?= base_url("assets/js/plugins/jquery/jquery.min.js") ?>"></script>
<script src="<?= base_url('assets/js/plugins/axios.min.js') ?>"></script>


<script src="<?= base_url("assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/sweetalert.min.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/select2/js/select2.full.min.js") ?>"></script>
<script src="<?= base_url("assets/js/plugins/sweetalert2/sweetalert2.min.js") ?>"></script>
<script src="<?= base_url('assets/js/plugins/toastr/toastr.min.js') ?>"></script>

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