<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kalkulator pangkat</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
           /* $(document).ready(function(){
                $(".submit").click(function(){
                    var singer = $(".nama").val();
                    if (!singer.match(huruf)) {
                        alert("Nama penyanyi harus alfabet dan lebih dari 1 huruf")
                        return false;
                    }
                    var songs = $(".nrp").val();
                    if (!songs.match(huruf)) {
                        alert("NRP mahasiswa harus alfabet dan lebih dari satu huruf")
                        return false;
                    }

                })
            })*/
        </script>
        <style>
            body {
                margin: 50px;
            }
            p {
                text-align: left;
            }
            h2 {
                text-align: center;
            }
            .container {
                background-color:gainsboro;
                align-items:center;
                justify-content: center;
                padding: 30px;
                width: 400px;
            }
            label {
                width: 400px;
                text-align:right;
                margin-left: 20px;
                font-size: 20px;
            }
            .submit, .reset {
                width: 150px
            }
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
            <h2>Kalkulator Pangkat</h2>
            <form action="pangkat" method="POST"  name="pangkat">
                @csrf

            <div class="row mt-3">
                <div class="col-3">
                    <label></label>
                </div>
                <div class="col-7">
                    <input name="singer" class="singer" type="number" size="50"  placeholder="Masukkan nilai" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label></label>
                </div>
                <div class="col-7">
                    <input name="songs" class="songs" type="number" size="50" placeholder="Masukkan pangkat" required>
                </div>
            </div>
            <br>
            <div class="button mt-3 text-center">
                    <button class="btn-primary submit mr-3" type="submit">Hitung</button>
                    <button class="btn-danger reset" type="reset">Reset</button>
            </div>
            </form>
        </div>



    </body>

</html>
