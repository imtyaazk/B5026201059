<!DOCTYPE html>
<html>
    <head>
        <style>
            .descendants * {
                display: block;
                border: 2px solid lightgrey;
                color: lightgrey;
                padding: 5px;
                margin: 15px;
            }
            div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("div").children("p.second").css({"color": "red", "border": "2px solid red"});
                $(":button").click(function(){
                    $("div").children("p.first").css({"color": "red", "border": "2px solid red"});
                    $("span").css({"color":"black"});
                });
            });
        </script>
    </head>
    <body>
        <center><h2>jQuery Descendant-Children</h2></center>
        <div class="descendants" style="width:500px;">Silsilah Keluarga
        <p class="first">Keluarga Siti<br>
            <span>Kakek <img src="https://previews.123rf.com/images/yupiramos/yupiramos1711/yupiramos171106095/89521187-cute-grandfather-avatar-character-vector-illustration-design.jpg" alt="kakek" width="130" height="130">
                <span> Bapak <img src="https://thumbs.dreamstime.com/b/father-portrait-handsome-man-shirt-jeans-sweater-wearing-glasses-cartoon-character-standing-dad-vector-illustration-86364395.jpg" alt="bapak siti" width="130" height="130">
                    <span> Siti<img src="https://png.pngtree.com/element_our/20190528/ourlarge/pngtree-children-s-day-cute-kid-illustration-material-image_1166343.jpg" alt="siti" width="130" height="130"></span>
                </span>
            </span>

        </p>

        <p class="second"> Keluarga Abdul
            <span> Bapak & Ibu <img src="https://thumbs.dreamstime.com/b/father-portrait-handsome-man-shirt-jeans-sweater-wearing-glasses-cartoon-character-standing-dad-vector-illustration-86364395.jpg" alt="bapak abdul" width="130" height="130">
                <img src="https://en.pimg.jp/047/789/289/1/47789289.jpg" alt="ibu siti" width="130" height="130">
                <span> Abdul<img src="https://previews.123rf.com/images/yupiramos/yupiramos1904/yupiramos190425616/121260642-little-boy-kid-character-vector-illustration-design.jpg" alt="abdul" width="130" height="130" ></span>
            </span>
            <span> Tante <img src="https://us.123rf.com/450wm/kinokotagawa/kinokotagawa1803/kinokotagawa180300299/97317255-a-middle-aged-housewife-wearing-an-apron-is-spreading-her-hands.jpg?ver=6" alt="tante" width="130" height="130">
            </span>
        </p>
        </div>
        <button>Keluarga Siti</button>

    </body>
</html>
