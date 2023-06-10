@extends('dashboard.layouts.main')

@section('main')

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
  <div class="col-12">
      <div class="bg-secondary rounded h-100 p-4">  
        <h6 class="mb-4">Kontak Kita</h6>
        <section class="section contact">
          <div class="row gy-4">
            <div class="col-xl-6">
              <div class="card p-4">
                <form action="/contact" method="post" class="php-email-form">
                  <div class="row gy-4">
                    <h5 class="text-dark">Butuh Bantuan ?</h5>
                    <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
    
                    <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
    
                    <div class="col-md-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
    
                    <div class="col-md-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>
    
                    <div class="col-md-12 text-center">    
                      <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
    
        </section>
      </div>
  </div>
</div>
<!-- Table End -->
@endsection