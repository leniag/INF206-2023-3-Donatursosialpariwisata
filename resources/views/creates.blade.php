
    <section class="section" id="creates">
        

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