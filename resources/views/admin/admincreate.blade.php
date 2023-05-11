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


<div style="position: relative; top: 70px; right: -150;">

<table bgcolor="grey" border="1px">
    <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">email</th>
        <th style="padding: 30px">phone</th>
        <th style="padding: 30px">judul project</th>
        <th style="padding: 30px">deskripsi</th>
        <th style="padding: 30px">gambar</th>

    </tr>

    @foreach($data as $data)
    <tr align="center">
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->judul}}</td>
        <td>{{$data->deskripsi}}</td>
        <td>{{$data->gambar}}</td>

    </tr>

    @endforeach
</table>




</div>



</div>
   
    @include("admin.adminscript")
  </body>
</html>