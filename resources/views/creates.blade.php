
<section class="section" id="creates">
        
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-text-content">
                                <div class="section-heading">
                                  <br><br><br><br>
                                    <h1>Contact Us</h1>
                                    <h2>Jika Anda memiliki pertanyaan atau saran mengenai Donatur Pariwisata, silakan hubungi kami melalui informasi kontak di bawah ini: </h2>
                                </div>
                                <p>
        Alamat Kantor:
        Jl. Pariwisata No. 123, Jakarta Selatan
        Indonesia
        <br> <br>
        
        Email:
        info@donaturpariwisata.co.id
        <br> <br>
        Telepon:
        +62 812-3456-7890
        <br> <br>
        Jam Operasional:
        Senin - Jumat, 08.00 - 17.00 WIB
        <br> <br>
        Anda juga dapat menghubungi kami melalui media sosial:
        <br> <br>
        Instagram: @donaturpariwisata
        <br>
        Facebook: Donatur Pariwisata
        <br>
        Twitter: @donaturpariwisata
        <br>
        Kami akan berusaha untuk merespon pertanyaan dan saran Anda secepat mungkin. Terima kasih telah menghubungi Donatur Pariwisata! 
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="phone">
                                            <i class="fa fa-phone"></i>
                                            <h4>Nomor Telepon</h4>
                                            <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="message">
                                            <i class="fa fa-envelope"></i>
                                            <h4>Email</h4>
                                            <span><a href="#">DSP@company.com</a><br><a href="#">infoDSP@company.com</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form id="contact" action="{{url('creates')}}" method="post">
        
                                    @csrf
        
                                  <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Create Project</h4>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                      <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Nama Anda*" required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                      <fieldset>
                                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="email anda" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                      <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Nomor Handphone*" required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                     <input type="text" name="judul" id="judul" placeholder="Judul Project">
                                    </div>
                      
                                    <div class="col-lg-12">
                                      <fieldset>
                                        <textarea name="deskripsi" rows="6" id="deskripsi" placeholder="deskripsi project" required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                      <fieldset>
                                      <input style="color:blue;" type="file" id="gambar" name="gambar" required>
                                      </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                      <fieldset>
                                        <button type="submit" id="form-submit" class="main-button-icon">SUBMIT</button>
                                      </fieldset>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>