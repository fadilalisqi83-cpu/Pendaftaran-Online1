<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran TK Islam Ar-Rasyid</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Comic Sans MS', sans-serif;
        }

        body{
            height:100vh;
            overflow:hidden;
        }

        .container{
            width:100%;
            height:100vh;
            position:relative;
            background:linear-gradient(to bottom,#4fc3f7,#81d4fa);
        }

        .cloud-left1{
            position:absolute;
            top:10px;
            left:10px;
            width:380px;
        }
        .cloud-left2{
            position:absolute;
            top:10px;
            left:250px;
            width:380px;
        }
        .cloud-left3{
            position:absolute;
            top:-20px;
            left:120px;
            width:380px;
        }
        .cloud-right1{
            position:absolute;
            top:10px;
            right:10px;
            width:380px;
        }
        .cloud-right2{
            position:absolute;
            top:10px;
            right:250px;
            width:380px;
        }
        .cloud-right3{
            position:absolute;
            top:-20px;
            right:120px;
            width:380px;
}
        .sun{
            position:absolute;
            top:35px;
            right:200px;
            width:270px;
            z-index:2;
        }

        .mountain1{
            position:absolute;
            bottom:0px;
            left:-100px;
            width:800px;
            z-index:1;
        }
        .mountain2{
            position:absolute;
            bottom:20px;
            left:250px;
            width:500px;
            z-index:1;
        }                       
    .mountain3{
            position:absolute;
            bottom:20px;
            right:80px;
            width:800px;
            z-index:1;
}
        .mountain4{
            position:absolute;
            bottom:20px;
            left:100px;
            width:420px;
            z-index:1;
        }
        .mountain5{
            position:absolute;
            bottom:20px;
            left:480px;
            width:390px;
            z-index:1;
        }                       
        .mountain6{
            position:absolute;
            bottom:20px;
            right:90px;
            width:490px;
            z-index:1;
}
            .mountain7{
            position:absolute;
            bottom:20px;
            right:-90px;
            width:490px;
            z-index:1;

        }

.grass{
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    display:flex;
    z-index:2;
    overflow:hidden;
}

.grass img{
    width:50%;
    height: 45px;
    margin-left:-45px;
    margin-right:-45px;
    flex:10;
}
        
        .kids-left{
            position:absolute;
            bottom:0px;
            left:50px;
            width:480px;
            z-index:3;
            margin-bottom:-19px;
        }

         .kids-right{
            position:absolute;
            bottom:0px;
            right:50px;
            width:400px;
            z-index:3;
            margin-bottom:2px;
        }

        .card{
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:300px;
            height:445px;
            background:#f5f5f5;
            border-radius:35px;
            box-shadow:0 13px 28px rgba(0,0,0,.25);
            text-align:center;
            padding:35px;
            z-index:5;
        }

        .card h1{
            color:#2e7d32;
            font-size:38px;
            line-height:1;
        }

        .tagline{
            margin-top:7px;
            color:#4caf50;
            font-size:16px;
        }

        .btn{
            display:block;
            width:100%;
            padding:18px;
            border-radius:18px;
            text-decoration:none;
            font-size:20px;
            font-weight:bold;
            margin-top:20px;
            color:black;
            transition:.3s;
            width:230px;
            height:53px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-daftar{
            background:#ffc107;
            margin-top:50px;
             text-align:center;
        }

        .btn-daftar:hover{
            background:#ffb300;
        }

        .btn-login{
            background:#4caf50;
            color:white;
        }

        .btn-login:hover{
            background:#43a047;
        }
    </style>
</head>
<body>

</div>
<div class="container">

    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-left1">
    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-left2">
    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-left3">


    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-right1">
    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-right2">
    <img src="{{ asset('images/Gambar-Awan-Kartun-2 6.png') }}" class="cloud-right3">


    <img src="{{ asset('images/Gambar-Matahari-Kartun-13 1.png') }}" class="sun">

    <img src="{{ asset('images/image 2.png') }}" class="kids-left">
    <img src="{{ asset('images/image 1.png') }}" class="kids-right">
    
    <div class="card">
        <h1>TK Islam<br>Ar-Rasyid</h1>

        <p class="tagline">
            Membentuk Generasi Islami,<br>
            Cerdas dan Berakhlak Mulia
        </p>

        <a href="/register" class="btn btn-daftar">
            📝 Daftar
        </a>

        <a href="/login" class="btn btn-login">
            🔑 Login
        </a>
    </div>
    
    <div class="grass">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
    <img src="{{ asset('images/gambar rumput.png') }}" alt="">
</div>
    

<div class="mountains">
    <img src="{{ asset('images/gunung.png') }}" class="mountain1">
    <img src="{{ asset('images/gunung.png') }}" class="mountain2">
    <img src="{{ asset('images/gunung.png') }}" class="mountain3">
    <img src="{{ asset('images/gunung.png') }}" class="mountain4">
    <img src="{{ asset('images/gunung.png') }}" class="mountain5">
    <img src="{{ asset('images/gunung.png') }}" class="mountain6">
    <img src="{{ asset('images/gunung.png') }}" class="mountain7">
    </div>


</div>

</body>
</html>