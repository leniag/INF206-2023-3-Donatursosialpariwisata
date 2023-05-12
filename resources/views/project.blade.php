

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar project</title>
    <link rel="stylesheet" type="text/css" href="assets/css/sistem.css">

</head>
<body>
    

<section class="section" id="project">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                       <center> <h1>Our Project</h1> </center>
                        <h3>Jika ingin berdonasi silahkan klik tombol <br> donasi pada project yang ingin di donasikan</h3>
                    </div>
                </div>
            </div>
        </div>
        <body>
  
  <div style="position: relative; top: 50px; right: -200;">
  
  <table bgcolor="lightblue" border="3px">
    <tr>
        <th bgcolor="lightgray" style="padding: 30px" >Name</th>
        <th bgcolor="lightgray" style="padding: 30px">email</th>
        <th bgcolor="lightgray" style="padding: 30px">phone</th>
        <th bgcolor="lightgray" style="padding: 30px">judul project</th>
        <th bgcolor="lightgray" style="padding: 30px">deskripsi</th>
        <th bgcolor="lightgray" style="padding: 30px">gambar</th>
        <th bgcolor="lightgray" style="padding: 30px">Donasi</th>

    </tr>

    @foreach($data as $data)
    <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->judul}}</td>
        <td>{{$data->deskripsi}}</td>
        <td><img height="200" width="200" src="/gambar/{{$data->gambar}}"></td>
        <td>    <button ><a href="#donasi"> DONASI</button></a>
</td>

    </tr>

    @endforeach
</table>

<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>

@include("donasi")


  </div>
  
  
  
  </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>




