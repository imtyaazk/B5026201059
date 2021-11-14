<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hasil Pangkat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .alert {
        background-color:gainsboro;
        align-items:center;
        justify-content: center;
        padding: 30px;
      }
  </style>
</head>
<body>

<div class="container">
<h2>
</h2>
  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h3>Perhitungan :</h3>
            <div class="row mt-3">
                <div class="col-2">
                    <label><?php echo  "Hasil ".$_POST["singer"]." pangkat ".$_POST["songs"]." =";?></label>
                </div>
                <div class="col-8">
                    <?php echo pow ($_POST["singer"],$_POST["songs"]); ?>
                </div>
            </div>
  </div>

</div>

</body>
</html>
