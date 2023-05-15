<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar project</title>
    <link rel="stylesheet" type="text/css" href="assets/css/sistem.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css"

</head>
<body>
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ** Logo Start ** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png" >
                        </a>
                        <!-- ** Logo End ** -->
                        <!-- ** Menu Start ** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route ('home')}}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/viewcreates')}}"  class="active">Project</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                            <li class="scroll-to-section"><a href="#creates">Create</a></li>


                            <li>

                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                        <li>

                                        <x-app-layout>

                                        </x-app-layout>

                                        </li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif




                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span></span>
                        </a>   

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