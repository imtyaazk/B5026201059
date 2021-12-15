<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>

      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
      <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
          .footer {
            position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                color: white;
                text-align: center;
                padding: 5px;
                background-color: DarkSalmon;
            }

            .header {
                right: 0;
                top: 0;
                width: 100%;
                color: black;
                text-align: right;
                padding: 3px;
                padding-left: 50px;
            }

            body {
            font-family: "Lato", sans-serif;
            }

            img{border-radius: 50%;}
        </style>
  </head>

  <body style="background-color: powderblue">
    <div class="row">

    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
      <h3 class="w3-bar-item">Menu</h3>
      <a href="/pegawai" class="w3-bar-item w3-button">Pegawai</a>
      <a href="/absen" class="w3-bar-item w3-button">Absen</a>
      <a href="/bagian" class="w3-bar-item w3-button">Bagian</a>
      <a href="/nilai" class="w3-bar-item w3-button">UAS</a>
    </div><br>

    <div style="margin-left:25%">

    <div class="w3-container">
      <table class="header">
        <tr>
            <th>Imtyaaz Achsanul Kamila</th>
            <td rowspan="2"><img src="/gambar/profil.jpeg" style="width:80px;height:80px "></td>
        </tr>
        <tr>
            <td>5026201059</td>
        </tr>
    </table>
    </div>
    <br>

    <div class="row">
    <h3>@yield('judulhalaman')</h3><br>
    @section('isikonten')
      @show
    </div>
    <br>


    <div class="footer">
      <p>Hak Cipta 5026201059 - Imtyaaz Achsanul Kamila</p>
    </div>

  </body>
</html>
