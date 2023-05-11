<section class="section" id="project">
  <div class="container">
      <div class="row">
          <div class="col-lg-4">
              <div class="section-heading">
                  <h6>Our Project</h6>
                  <h2>Jika ingin berdonasi silahkan klik tombol donasi</h2>
              </div>
          </div>
      </div>
  </div>
  @foreach ($projects as $project)
  <div class="daftarpro">
      <div class="tomboldon">
          <button onclick="window.location.href='donasi.html'">DONASI</button>
      </div>
      <div class="namapro"><a href="Galeri.html">{{ $project->judul }}</a></div>
      <div class="namapro"><img src="{{ $project->gambar }}" style="width:450px; height: 100px;"></div>
      <div class="deskpro">
          <h3>Deskripsi Project</h3><br>
          <p>{{ $project->deskripsi }}</p>
      </div>
  </div>
  @endforeach
</section>
@endsection