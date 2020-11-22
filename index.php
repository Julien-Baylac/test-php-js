<!DOCTYPE html>
<html>
<head>
<title>App test</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://npmcdn.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script src="./js/index.js"></script>
<link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("./views/NavBar.php"); ?>
        </div>
        <div class="row">
            <?php include("./views/Main.php"); ?>
        </div>
        <div class="row">
            <div class="col-sm-12 bg-warning">
                footer
            </div>
        </div>
    </div>
</body>

</html>
