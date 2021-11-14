<html lang="en">
    <head>
    <title>UTS Imtyaaz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $("input[type=submit]").click(function(){
                alert("Terima Kasih");
            });
            $('#myform').validate({
                rules: {
                    namaBarang: {
                        required: true,
                    },
                    kode: {
                        required: true,
                        minlength: 10
                    },
                    harga: {
                        required: true
                    }
                },
                messages: {
                    namaBarang: {
                        required: 'masukkan nama barang',
                    },
                    kode: {
                        required: 'masukkan kode barcode',
                        min: 'username should be at least 10 characters'
                    },
                    harga: {
                        required: "masukkan harga"
                    }
                }
            })
        });
    </script>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        input[type=submit]{
            padding: 10px 40px;
            border: none;
            border-radius: 4px;
            background-color:blue;
            cursor: pointer;
            color: white;
            text-decoration: none;
            margin: 4px 2px;
        }
        input[type=reset]{
            padding: 10px 40px;
            border: none;
            border-radius: 4px;
            background-color:greenyellow;
            cursor: pointer;
            color: black;
            text-decoration: none;
            margin: 4px 2px;
        }
        p{
            margin-left: 40px;
            font-size: 13px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
        #teksform{
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
    </head>

    <body>
        <br>
        <p>Nama Mahasiswa : Imtyaaz Achsanul Kamila</p>
        <p>Nama Panggilan : Tyas</p>
        <p>NRP : 5026201059</p>

        <div class="container">
        <center><h1>Form Input Data Barang</h1></center>
            <form class="form-horizontal" action="/action_page.php"  class="needs-validation">
                <div class="form-group">
                <label class="control-label col-sm-2" for="namaBarang" style="text-align-last: left;">Nama Barang:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaBarang" name="namaBarang" minlength="10" required>
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-2" for="harga" style="text-align-last: left;">Harga:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" min="5000" required>
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="country" style="text-align-last: left;">Country:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="country" required>
                            <option>Makanan</option>
                            <option>Minuman</option>
                            <option>Non Mamin</option>
                        </select>
                    </div>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="kode" style="text-align-last: left;">Kode Barcode:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="kode" name="kode" minlength="10" required>
                        </div>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group alert">
                    <div class="col-sm-offset-4 col-sm-2">
                        <input type="submit" id="klik" class="btn btn-default" value="Kirim" >
                    </div>
                    <div class="col-sm-2">
                        <input type="reset" id="klik" class="btn btn-default" value="Reset">
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>
