<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  @include("admin.admincss")
  </head>
  <body>

  <div class="container-scroller">
    
    @include("admin.navbar")

    <div style="position: relative; top:30px; right: -150px">

    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf

        <div>
            <label>Nama</label>
            <input style="color:blue;" type="text" name="nama" value="{{$data->nama}}" required>
        </div>

        <div>
            <label>Harga</label>
            <input style="color:blue;" type="num" name="harga" value="{{$data->harga}}" required>
        </div>

        <div>
            <label>Description</label>
            <input style="color:blue;" type="text" name="description" value="{{$data->description}}" required>
        </div>
        
        <div>
            <label>gambar yang dulu</label>
            <img height="200" width="200" src="/foodgambar/{{$data->gambar}}">
        </div>

        <div>
            <label>gambar baru</label>
            <input style="color:blue;" type="file" name="gambar" required>
        </div>

        <div>
        
            <input style="background-color:white; color :black;"type="submit" value="simpan">
        </div>
        <br>



</form>

    </div>

</div>
   
    @include("admin.adminscript")
  </body>
</html>