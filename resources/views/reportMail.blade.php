<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #nomer_surat {
            text-align: center;
        }

        .nama_surat {
            text-transform: uppercase;
            text-decoration: underline;
            font-weight: bolder;
        }

        #surat {
            padding: 10px;
            border: 1px solid green;
            min-width: 300px;
            min-height: 400px;
            overflow: auto;
        }

        #surat div {
            margin: 4px;
        }

        #par_pembuka {
            text-align: justify;
        }

        #content_surat {
            position: auto;
            //  border:1px solid red;
            overflow: auto;
            padding-left: 30px;
            min-height: 300px;
        }

        #content_surat1 {
            position: auto;
            //  border:1px solid red;
            overflow: auto;
            padding-left: 30px;
            min-height: 300px;
        }

        #content_surat2 {
            position: auto;
            //  border:1px solid red;
            overflow: auto;
            padding-left: 30px;
            min-height: 300px;
        }

        #content_surat div {
            position: relative;
            padding: 1px;
        }

        #content_surat1 div {
            position: relative;
            padding: 1px;
        }

        #content_surat2 div {
            position: relative;
            padding: 1px;
        }

        label.l_form {
            //  display: inline-block;
        }

        .isian_surat {
            position: absolute;
            left: 170px;
            width: auto;


        }

        * {
            background: none;
            border: none;
        }

        body {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            line-height: 1.4;
            word-spacing: 1.5pt;
            letter-spacing: 0.2pt;
            font-family: Garamond, "Times New Roman", serif;
            color: #000;
            background: none;
            font-size: 12pt;
        }

        #header,
        #left-column,
        #footer {
            display: none;
        }

        #middle,
        #center-column,
        #main {
            background: #FFF;
            width: 100%;
            border: none;
            box-shadow: none;
        }

        #surat_tampil {
            width: 95%;
            padding: 3px;
            margin: 0 auto;
            border: none;
            background: none;
        }

        #kepala_surat {
            width: 95%;
            margin: 0 auto;
            text-align: center;
            font-size: 13pt;
        }

        #kepalasurat {
            width: 95%;
            margin: 0 auto;
            background: url("logo.png");
            text-align: center;
            font-size: 13pt;
        }

        #logo_surat {
            display: block;
            position: absolute;
            top: 10px;
            left: 50px;
        }

        .garis {
            border-bottom: 3px solid #000;
            width: 100%;
            margin: 0 auto;
            margin-bottom: 15px;
            clear: both;
        }

        #content_surat {
            width: 95%;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat1 {
            width: 95%;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat2 {
            width: 95%;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat label {
            display: block;
            width: 29%;
            float: left;
            clear: both;
        }

        #content_surat1 label {
            display: block;
            width: 29%;
            float: left;
            clear: both;
        }

        #content_surat2 label {
            display: block;
            width: 29%;
            float: left;
            clear: both;
        }

        #content_surat span.titik {
            float: left;
            width: 1%;
        }

        #content_surat1 span.titik {
            float: left;
            width: 1%;
        }

        #content_surat2 span.titik {
            float: left;
            width: 1%;
        }

        #content_surat span.s_kanan {
            float: left;
            max-width: 50%;
            text-align: justify;
        }

        #content_surat1 span.s_kanan {
            float: left;
            max-width: 50%;
            text-align: justify;
        }

        #content_surat2 span.s_kanan {
            float: left;
            max-width: 50%;
            text-align: justify;
        }

        #par_penutup,
        #par_pembuka,
        #nomer_surat {
            clear: both;
            position: relative;
            width: 95%;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        #nomer_surat {
            text-align: center;
        }

        .masuk_alinea {
            margin-right: 20px;
        }

        .tanda_tangan {
            float: left;
            text-align: center;
            width: 50%;
        }

        .kosong {
            margin-bottom: 70px;
        }

        #surat_tampil {
            width: 480px;
            border: 1px solid #4D4D4D;
            overflow: auto;
            padding: 3px;
            margin: 0 auto;
        }

        #kepala_surat {
            width: 450px;
            margin: 0 auto;
            text-align: center;
        }

        #logo_surat {
            display: none;
        }

        #isi {
            display: inline-block;
            width: 200px;
        }

        .garis {
            border-bottom: 3px solid #000;
            width: 600px;
            margin: 0 auto;
            margin-bottom: 10px;
            clear: both;
        }

        #content_surat {
            width: 450px;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat1 {
            width: 450px;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat2 {
            width: 450px;
            position: auto;
            padding-left: 30px;
            margin: 0 auto;
        }

        #content_surat label {
            display: block;
            width: 140px;
            float: left;
            clear: both;
        }

        #content_surat1 label {
            display: block;
            width: 140px;
            float: left;
            clear: both;
        }

        #content_surat2 label {
            display: block;
            width: 140px;
            float: left;
            clear: both;
        }

        #content_surat span.s_kanan {
            float: left;
            max-width: 200px;
            text-align: justify;
        }

        #content_surat1 span.s_kanan {
            float: left;
            max-width: 200px;
            text-align: justify;
        }

        #content_surat2 span.s_kanan {
            float: left;
            max-width: 200px;
            text-align: justify;
        }

        #content_surat span.titik {
            float: left;
            width: 10px;
        }

        #content_surat1 span.titik {
            float: left;
            width: 10px;
        }

        #content_surat2 span.titik {
            float: left;
            width: 10px;
        }

        #par_penutup,
        #par_pembuka,
        #nomer_surat {
            clear: both;
            position: relative;
            width: 650px;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        #nomer_surat {
            text-align: center;
        }

        .masuk_alinea {
            margin-right: 20px;
        }

        .tanda_tangan {
            float: left;
            text-align: center;
            width: 50%;
        }

        .kosong {
            margin-bottom: 60px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div id="kepala_surat">
        <img src="http://administrator.test/vendors/images/paten.jpg" width="70px" height="auto" id="logo_surat"
            valign="baseline" />
        <strong>DIGIPARK CREATIVE HUB</strong><br />
        Jl Cilik Riwut Km 7 Palangkaraya<br />
        Email : digiparkcreativehub@gmail.com<br />
        KODE POS(73112) KALIMANTAN TENGAH
    </div>
    <div class="garis"></div>
    <div style="padding-left: 50px;">
        <div>
            <div style="display:inline-block; width: 70px;">Nomor</div>
            <div style="display:inline-block; width: 2px;">: </div>
            <div style="display:inline-block; width: 100px;">1234678 </div>
            <br>
        </div>
        <div>
            <div style="display:inline-block; width: 70px;">Lampiran</div>
            <div style="display:inline-block; width: 2px;">: </div>
            <div style="display:inline-block; width: 100px;"> <strong> 1234678 </strong></div>
            <br>
        </div>
        <div>
            <div style="display:inline-block; width: 70px;">Perihal</div>
            <div style="display:inline-block; width: 2px;">: </div>
            <div style="display:inline-block; width: 100px;"> <strong> 1234678 </strong></div>
            <br><br>
        </div>
        {{-- pembuka --}}
        <div>
            <div style="display:inline-block; width: 200px;"><strong>Dengan Hormat,</strong></div>
            <br>
        </div>
        <div>
            <div style="display:inline-block; width: 500px;">Yang bertanda tangan dibawah ini:</div>
            <br>
            <div style="padding-left: 30px;">
                <div style="display:inline-block; width: 70px;">Nama</div>
                <div style="display:inline-block; width: 2px;">: </div>
                <div style="display:inline-block; width: 100px;">Ahmadi </div>
                <br>
            </div>
            <div style="padding-left: 30px;">
                <div style="display:inline-block; width: 70px;">Alamat</div>
                <div style="display:inline-block; width: 2px;">: </div>
                <div style="display:block; width: 600px;">Jl. Temanggung Tilung XXII 22B, Kota Palangka Raya
                    fsfsd fsdfsd fsd f fsd sdf sdf sdfsdfsd f sf
                </div>
            </div>
        </div>
    </div>

    {{-- <p>{{ session('email') }}</p> --}}
</body>

</html>
