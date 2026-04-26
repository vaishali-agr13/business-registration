@extends('layout.app')

@section('content')

<div class="container-fluid">

<div class="card">
    <div class="card-header">
        <h3>Business Registration</h3>
    </div>

    <div class="card-body">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/admin/register-business" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required> 
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Business Phone</label>
                <input type="number" name="business_phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Personal Phone</label>
                <input type="number" name="personal_phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Business Type</label>
                <select id="business_type" required name="business_type">
                        <option value="">Select Your Business Type</option>
                        <option>Restaurant</option>
                        <option>Clinic</option>
                        <option>Hospital</option>
                        <option>Pharmacy</option>
                        <option>Coaching Institute</option>
                          <option>Tuition Center</option>
                          <option>Training Institute</option>
                            <option>Online Courses</option>
                          <option>Consultant</option>
                            <option>Real Estate Agent</option>
                                <option>Courier Service</option>
                                  <option>Transport Company</option>
                                      <option>Cab Service</option>
                              <option>Coaching</option>
                              <option>Salon</option>
                              <option>Shop</option>
                              <option>Other</option>
                 </select>
            </div>

            <div class="form-group">
                <label>Business Address/label>
                <textarea name="business_address" class="form-control" required></textarea>
            </div>

             <div class="form-group">
                <label>Business Description/label>
                <textarea name="business_description" class="form-control" required></textarea>
            </div>

            
            <div class="form-group">
                <label>District</label>
                <input type="text" name="district" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Registration Fees</label>
                <input type="text" name="registration_fees" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>

            <div class="form-group">
              <label><b>Services Required</b></label>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service1" type="checkbox"  name="services_required[]" value="Website Development">
                  <label for="service1" class="custom-control-label">Website Development</label>
              </div>

               <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service2" type="checkbox" name="services_required[]" value="Social Media Marketing (Facebook, Instagram)">
                  <label for="service2" class="custom-control-label">Social Media Marketing (Facebook, Instagram)</label>
              </div>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service3" type="checkbox"  name="services_required[]" value="Google Ads & Google My Business Advertisment">
                  <label for="service3" class="custom-control-label">Google Ads & Google My Business Advertisment</label>
              </div>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service4" type="checkbox" name="services_required[]" value="Website Design">
                  <label for="service4" class="custom-control-label">Website Design</label>
              </div>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service5" type="checkbox" name="services_required[]" value="SEO (Google ranking)">
                  <label for="service5" class="custom-control-label">SEO (Google ranking)</label>
              </div>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service6" type="checkbox" name="services_required[]" value="Digital Marketing">
                  <label for="service6"  class="custom-control-label">Digital Marketing</label>
              </div>
               <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service7" type="checkbox"  name="services_required[]" value="WhatsApp Marketing">
                  <label for="service7"  class="custom-control-label">WhatsApp Marketing</label>
              </div>
               <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service8" type="checkbox" name="services_required[]" value="Digital Marketing">
                  <label for="service8" class="custom-control-label">Digital Marketing</label>
              </div>

               <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service9" type="checkbox" name="services_required[]" value="Bulk SMS">
                  <label for="service9" class="custom-control-label">Bulk SMS</label>
              </div>

              <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" id="service10" type="checkbox" name="services_required[]" value="Graphic Design & Creatives">
                  <label class="custom-control-label" for="service10">Graphic Design & Creatives</label>
              </div>

              <div class="form-group">
                <label>Business Images</label>
                <div class="custom-file">
                    <input type="file" id="images" name="business_image[]" multiple class="" required>
                    <label class="" for="images">Choose files</label>
                </div>
              </div>

              <div class="form-group">
                <label>Payment Proof</label>

                <div class="custom-file">
                    <input type="file" id="image" name="payment_proof" class="" required>
                    <label class="" for="image">Choose file</label>
                </div>
            </div>

              
          </div>

            <button class="btn btn-primary">Submit</button>

        </form>

    </div>
</div>

</div>

@endsection