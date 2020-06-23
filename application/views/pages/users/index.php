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
<?= sesdata('username');?>
<a href="<?=base_url('Users/logout')?>" style="float:right;">Logout</a>
    <h3 style="text-align:center;">- - - LIST OF USERS - - -</h3>
    <table v-if="userslist!=''">
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
<script src="<?= base_url("assets/js/plugins/jquery/jquery.min.js") ?>"></script>
<script src="<?= base_url('assets/js/plugins/axios.min.js') ?>"></script>

<?php if (!empty($js)) : ?>
    <?php foreach ($js as $j) : ?>
        <script src="<?= base_url('assets/js/' . $j . '?ver=') . filemtime(FCPATH) ?>"></script>
    <?php endforeach ?>
<?php endif ?>

</body>
</html>