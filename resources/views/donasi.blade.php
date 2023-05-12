

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donasit</title>
    <link rel="stylesheet" type="text/css" href="assets/css/sistem.css">

</head>
<body>
    
    

<section class="section" id="donasi">
<form id="contact" action="{{url('donasi')}}" method="post">
@csrf


<div class="upload">
        <div class="updes">DONASI</div>
        <div class="fix space">
            <span class="fa fa-user"></span>
            <input name="nama" type="text" id="nama" placeholder="Nama Anda*" required="">
        </div>
        <div class="fix space">
            <span class="fa fa-money-bill"></span>
            <input name="bank" type="text" id="bak" placeholder="Nama bank*" required="">
        </div>
        <div class="fix space">
            <span class="fa fa-money-bill"></span>
            <input name="norek" type="text" id="norek" placeholder="Nomor rekening*" required="">
        </div>
        <div class="fix space">
            <span class="fa fa-money-bill"></span>
            <input name="jumlah" type="text" id="jumlah" placeholder="Jumlah*" required="">
        </div>
        <div class="tomupload space">
        <button type="submit" id="form-submit" class="main-button-icon">SUBMIT</button>        </div>
    </div>
    <script>
    function uploadFile() {
        // do something with the uploaded file
        // ...
      
        // show a thank you message to the user
        alert("Terima kasih, data anda akan diproses");
      }
      </script>
  
  
  
  </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>




