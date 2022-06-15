<style>

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

#nama_web {
    font-family:'Montserrat', sans-serif;
    
}

#item_tulisan {
    font-family:'Poppins', sans-serif;
}

#isi_cardss {
    font-family:'Poppins', sans-serif;
    font-size: 14px;
    color: #167594;
    transition:0.5s;
}

#isi_cards {
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    transition:0.5s;
    color: #167594;
}

#tittle_card {
    font-family: 'Montserrat', sans-serif;
    font-size: 20px;
    font-style: bold;
    color: #167594;
    transition:0.5s;
}



#tiket {
    margin-top: 40px;
}

.warna.card-header {
    height: 30px;
    background: #8DBECE;
    transition:0.5s;
}



.ca.card-header {
    background: #FFF;
   
}

i {
    color: #167594;
    transition:0.5s;
}

#gambar_wahana {
    transition: transform .2s; /* Animation */
}




.card {
    box-shadow: 2px 2px rgb(195, 195, 195);
    margin-bottom: 40px;   
    transition:0.5s;
 
}

.btn.btn-primary {
    background-color:#167594;
    padding-left: 5%;
    padding-right: 5%;
    transition:0.5s;
}

.btn.btn-secondary {
    background-color:#168C94;
    padding-left: 5%;
    padding-right: 5%;
    transition:0.5s;
}

/* Hover Version */

#isi_cardss {
   
    color: #0a4255;
    transition:0.5s;
}

#isi_cards {
 
    color: #0a4255;
    transition:0.5s;
}

#tittle_card:hover {

    color: #0a4255;
    transition:0.5s;
}

/* .card:hover {
    transform: scale(1.2);
} */

i:hover {
    color: #0a4255;
    transition:0.5s;

}

#gambar_wahana:hover {
    transform: scale(1.2);
}


.warna:hover {
    background: #182a30;
    transition:0.5s;
}

.btn.btn-primary:hover {
    background-color:#182a30;
    transition:0.5s;
}

.btn.btn-secondary:hover {
    background-color:#0b494d;
    transition:0.5s;
}

.zoom{
    transition: transform .2s;
}

.zoom:hover {
  transform: scale(1.25);
}

</style>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telaga Sarangan</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    
    {{-- fontawesome kit --}}
    <script src="https://kit.fontawesome.com/ff677759a9.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="{!! asset('css/ionicons.min.css') !!}">
</head>

<body data-spy="scroll" data-offset="80">
    {{-- Navbar --}}
    @include('partials.navbar')
    {{-- Navbar End --}}

    <section class="iq-feature1 overview-block-ptb-25 grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <form action="tambah" method="post">
                        {{ csrf_field() }}
                        <div class="form-group iq-pt-10">
                            <label>Jenis</label>
                            <font color='#ff0000'>*</font>
                            <select class="form-control" name="jenis" id="combo1">
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nama Pengadu</label>
                            <font color='#ff0000'>*</font>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Email</label>
                            <font color='#ff0000'>*</font>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nomor WhatsApp</label>
                            <input type="text" name="no_hp" onkeypress="return hanyaAngka(event)" class="form-control"
                                placeholder="Masukan Nomor WhatsApp" />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Saran / Aduan</label>
                            <font color='#ff0000'>*</font>
                            <textarea name="saran_aduan" class="form-control" rows="5" placeholder="Masukan saran dan aduan anda"
                                required></textarea>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Kategori Aduan</label>
                            <font color='#ff0000'>*</font>
                            <select class="form-control" name="kategori" id="combo1">
                                @foreach ($kat_aduan as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->jenis }}</option>
                                {{-- <option value="umum">Umum</option>
                                <option value="keuangan">Keuangan</option>
                                <option value="pungli">Pungli</option>
                                <option value="teknik">Teknik</option>
                                <option value="lainnya">Lainnya</option> --}}
                                @endforeach
                            </select>
                        </div>
                        <?php
                        // init variables
                        $min_number = 1;
                        $max_number = 32;
                        
                        // generating random numbers
                        $random_number1 = mt_rand($min_number, $max_number);
                        $random_number2 = mt_rand($min_number, $max_number);
                        ?>
                        <div class="form-group iq-pt-10">
                            <label>
                                <?php
                                echo $random_number1 . ' + ' . $random_number2 . ' = ';
                                ?>
                            </label>
                            <input type="text" name="captchaResult" class="form-control" size="2" maxlength="2"
                                onkeypress="return hanyaAngka(event)"/>
                        </div>
                        <div><a>(</a>
                            <font color='#ff0000'>*</font>) Tanda Tersebut Wajib Di isi :)
                        </div>
                        <div class="form-group">
                            <input name="waktu" type="hidden" value="<?php echo date('Y-m-d h:i:s'); ?>">
                            <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
                            <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
                        </div>
                        <div class="form-group iq-pt-10">
                            <center>
                                <div>
                                    <input id="submit" name="submit" type="submit" value="Kirim"
                                        class="rounded-pill btn btn-success btn-tambah" onsubmit="return validateForm();"
                                        onclick="return validateForm();">
                                </div>
                            </center>
                        </div>

                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;
                                return true;
                            }
                        </script>
                    </form>
                </div>
                <script>
                        $details['title'];
                        $details['body'];
                </script>
                </body>
            </div>
        </div>
        </div>


    </section>
    </body>
    </html>
