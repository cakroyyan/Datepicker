<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Datepicker di Modal Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="./js/bootstrap.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>
    <style>
        .datepicker {
            z-index: 1151;
        }
    </style>
    <script>
        $(function() {
            $("#tanggal").datepicker({
                format: 'yyyy/dd/mm'
            });
        });
    </script>
</head>

<body>
    <div class="container-fluid">
        <label>Tanggal</label>
        <input type="text" id="tanggal">
    </div>

</body>

</html>
