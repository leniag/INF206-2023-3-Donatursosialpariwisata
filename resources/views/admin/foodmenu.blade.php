<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">
    
    @include("admin.navbar")

    <div style="position: relative; top:60px; right: -150px">

    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf

        <div>
            <label>Nama</label>
            <input style="color:blue;" type="text" name="nama" placeholder="tulis sebuah nama" required>
        </div>

        <div>
            <label>Harga</label>
            <input style="color:blue;" type="num" name="harga" placeholder="harga" required>
        </div>

        <div>
            <label>gambar</label>
            <input style="color:blue;" type="file" name="gambar" required>
        </div>

        <div>
            <label>Description</label>
            <input style="color:blue;" type="text" name="description" placeholder="deskripsi" required>
        </div>
        
        <div>
        
            <input style="background-color:white; color :black;"type="submit" value="simpan">
        </div>
        <br>



    </form>


    <div>

    <table bgcolor="black">
        <tr>
            <th style="padding: 30px">Nama Menu</th>
            <th style="padding: 30px">harga</th>
            <th style="padding: 30px">deskripsi</th>
            <th style="padding: 30px">gambar</th>
            <th style="padding: 30px">Action</th>
            <th style="padding: 30px">Action</th>

        </tr>



        @foreach($data as $data)
        <tr align="center">

            <td>{{$data->nama}}</td>
            <td>{{$data->harga}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200" width="200" src="/foodgambar/{{$data->gambar}}"></td>

            <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
            <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>

        </tr>


        @endforeach



    </table>
    </div>












    </div>

</div>
   
    @include("admin.adminscript")
  </body>
</html>