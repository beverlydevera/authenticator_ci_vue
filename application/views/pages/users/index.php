<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/cerulean/bootstrap.min.css" rel="stylesheet" integrity="sha384-b+jboW/YIpW2ZZYyYdXczKK6igHlnkPNfN9kYAbqYV7rNQ9PKTXlS2D6j1QZIATW" crossorigin="anonymous">
    <script src="<?= base_url('assets/js/plugins/vue.js') ?>"></script>
    <script type="text/javascript">
        window.App = {
            "baseUrl": "<?= base_url() ?>",
            "removeDOM": "",
        };
    </script>
    <style>
        .username {
            color: #ffffff;
        }
    </style>
</head>
<body>
<div id="<?=$vueid?>">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">FULLSTACKTEST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="username"><?= strtoupper(sesdata('username')) ?></span>
            <a href="<?=base_url('Users/logout')?>" class="btn btn-secondary">Logout</a>
        </form>
    </div>
    </nav>

    <br>

    <h2 style="text-align:center;">LIST OF USERS</h2>
    <table class="table table-hover" v-if="userslist!=''">
        <thead>
            <th>Name</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Company</th>
        </thead>
        <tbody>
            <tr v-for="(list,index) in userslist">
                <td>{{list.name}}</td>
                <td>{{list.username}}</td>
                <td>{{list.phone}}</td>
                <td>{{list.company.name}}</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- REQUIRED SCRIPTS -->
<script src="<?= base_url("assets/plugins/jquery/jquery.min.js") ?>"></script>
<script src="<?= base_url('assets/js/plugins/axios.min.js') ?>"></script>

<?php if (!empty($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= base_url('assets/js/' . $j . '?ver=') . filemtime(FCPATH) ?>"></script>
    <?php endforeach ?>
<?php endif ?>

</body>
</html>