    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}" />
<script>
    setTimeout(function(){
        let alert=document.querySelector('.alert');
            if(alert){
                alert.style.display='none';
            }
    },3000);
</script>

@extends('layout')

@section('content')


<div class="container py-5 form-wrapper">

<div class="col-md-8 col-lg-7 mx-auto">

<div class="card shadow-lg border-0 p-3">


<div class="card-body">

<div class="progress-bar-wrapper mb-4">
    <div class="progress-step active">1</div>
    <div class="progress-step">2</div>
    <div class="progress-step">3</div>
</div>
    <h4 class="text-center mb-4">Business Registration Form</h4>

@php
    $step1 = session('step1');
     $registration_id = session('registration_id');
@endphp


@if($errors->any())
    <div class="alert alert-danger" style="background:#fff2f2; border-left:5px solid red; padding:10px; margin-bottom:10px;">
        <strong style="color:red;">Please fix the following errors:</strong>
        <ul style="margin:5px 0 0 20px; color:#d10000;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





<form method="POST" action="{{route('business.step1')}}">

@csrf

<div class="step {{ session('step') == 2 ? '' : 'active' }}" id="step1">

<h5 class="mb-3 section-heading">👤 Basic Information</h5>

<div class="mb-3">
<label>Your Name</label>
<input type="text" name="name" placeholder="   Enter Your Name" value="{{ $step1['name'] ?? '' }}" required class="form-control custom-input">
</div>



<div class="mb-3">
<label>Mobile Number</label>
<input type="text" name="personal_phone" required placeholder="   Enter Your Mobile Number" value="{{ $step1['personal_phone'] ?? '' }}" class="form-control custom-input">
</div>

<div class="mb-3">
<label>District</label>
<input type="text" required name="district" placeholder="   Enter Your District" value="{{ $step1['district'] ?? '' }}" class="form-control custom-input">
</div>

<input type="hidden" name="registration_id" value="{{ session('registration_id') }}">

<a href="/" class="btn home-btn">Home</a>

<button type="submit" class="btn next-btn">Next</button>

</div>

</form>

<form method="POST" action="/step2/{{ session('registration_id') }}" novalidate enctype="multipart/form-data">
@csrf

<div class="step {{ session('step') == 2 ? 'active' : '' }}" id="step2">

<h5 class="mb-3">Step 2 : Business Details</h5>

<div class="mb-3">
<label>Business Name</label>
<input type="text" required name="company_name" placeholder="   Enter Your Business Name" class="form-control custom-input">
</div>




<div class="mb-3">
<label>Business Email ID</label>
<input type="email" name="email" placeholder="   Enter Your Email ID" required class="form-control custom-input">
</div>

<div class="mb-3">
<label>Business Mail Id  Password</label>
<input type="password" name="password" placeholder="   Enter Your Mail Id Password" required minlength="6" class="form-control custom-input">
</div>

<div class="mb-3">
<label>Business Mobile Number</label>
<input type="text" name="business_phone" required placeholder="   Enter Your Business Mobile Number" class="form-control custom-input">
</div>



<div class="mb-3">
<label>Business Address</label>
<textarea name="business_address" placeholder="   Enter Your Business Address" required class="form-control custom-input"></textarea>
</div>


<div class="form-group mb-3">
    <label for="business_type">Business Type</label>
    <div class="custom-select-wrapper">
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
</div>



<div class="mb-3">

<label>Business Description</label>

<textarea name="business_description" placeholder="   Enter Your Business Description" required class="form-control custom-input"></textarea>

</div>




<div class="mb-3 mt-4">
        <label class="fw-bold d-block mb-2">Upload Business Poster</label>
        <div class="file-upload mb-3 upload-box" onclick="triggerFile()">
            <input type="file" id="fileInput" required  name="business_image[]" hidden multiple accept="image/*" class="form-control custom-input">
                
                <div class="upload-content text-center">
                    <div class="icon">📤</div>
                    <p class="upload-text">Click to upload Business Poster</p>
                    <span class="file-name" id="fileName">No file chosen</span>
                </div>
        </div>

</div>




<label class="mb-2">Services Required</label>

<div class="form-check">
<input type="checkbox" name="services_required[]" required value="Website Development"> Website Development
</div>



<div class="form-check">
    <label class="custom-check">
        <input type="checkbox" name="services_required[]"  value="Social Media Marketing (Facebook, Instagram)">
        <span>Social Media Marketing (Facebook, Instagram)</span>
    </label>
</div>

<!-- <div class="form-check">
<input type="checkbox" name="services_required[]"  value="Social Media Marketing (Facebook, Instagram)"> Social Media Marketing (Facebook, Instagram)
</div> -->

<!-- <div class="form-check">
<input type="checkbox" name="services_required[]"  value="Google Ads & Google My Business Advertisment"> Google Ads & Google My Business Advertisment
</div> -->


<div class="form-check">
    <label class="custom-check">
        <input type="checkbox" name="services_required[]"  value="Google Ads & Google My Business Advertisment">
        <span>Google Ads & Google My Business Advertisment</span>
    </label>
</div>



<div class="form-check">
<input type="checkbox" name="services_required[]" value="Website Design"> Website Design
</div>

<div class="form-check">
<input type="checkbox" name="services_required[]" value="SEO (Google ranking)"> SEO (Google ranking)

</div>




<div class="form-check">
<input type="checkbox" name="services_required[]" value="Digital Marketing"> Digital Marketing
</div>

<div class="form-check">
<input type="checkbox" name="services_required[]" value="WhatsApp Marketing"> WhatsApp Marketing
</div>

<div class="form-check">
<input type="checkbox" name="services_required[]" value="Bulk SMS"> Bulk SMS
</div>



<div class="form-check">
    <label class="custom-check">
        <input type="checkbox" name="services_required[]" value="Graphic Design & Creatives ">  
        <span>Graphic Design & Creatives</span>
    </label>
</div>



<br>

<button type="button" class="btn back-btn prev">Back</button>

<button type="button" class="btn next-btn next">Next</button>

</div>

<div class="step" id="step3">

<h5 class="mb-3">Step 3 : Payment</h5>

<!-- <div class="mb-3">
<label>Registration Fees</label>
<input type="number" name="registration_fees" class="form-control border-0 border-bottom rounded-0">
</div> -->


<div class="fee-section">
    <label class="section-title">Registration Fees</label>

    <div class="fee-options">
        
        <label class="fee-card">
            <input type="radio" required name="registration_fees" value="99" >
            <div class="fee-content">
                ₹99
            </div>

           
        </label>
        <label class="fee-card">
         <input type="radio" required name="registration_fees" value="2100" >
            <div class="fee-content">
                ₹2100
            </div>
       </label>

    </div>
</div>


<!-- 

<div class="mb-3">
<label>Payment Proof</label>
<input type="file" name="payment_proof" class="form-control border-0 border-bottom rounded-0">
</div> -->

<div class="qr-payment-box">
    <h5 class="mb-3">Scan & Pay</h5>

    <img src="{{ asset('assets/images/qr-code.jpeg') }}" class="qr-img" alt="QR Code">

    <p class="mt-2 small-text">
        Scan this QR code using any UPI app (PhonePe, GPay, Paytm)
    </p>
</div>



<div class="file-upload mb-3 upload-box" onclick="triggerFile2()">
    <input type="file" id="fileInput2"required name="payment_proof" hidden class="form-control border-0 border-bottom rounded-0">
        
        <div class="upload-content">
            <div class="icon">📤</div>
            <p class="upload-text">Click to upload Payment Proof</p>
            <span class="file-name" id="fileName2">No file chosen</span>
        </div>
</div>



<button type="button" class="btn back-btn prev">Back</button>

<!-- <button type="submit" class="btn submit-btn">Submit</button> -->

<button type="button" class="btn submit-btn" id="finalSubmit">Submit</button>

</div>

</form>

</div>

</div>

</div>

</div>


@endsection


@push('scripts')

<script>


function triggerFile() {
    document.getElementById("fileInput").click();
}

// document.getElementById("fileInput").addEventListener("change", function () {
//     let fileNames = [];

//     for (let i = 0; i < this.files.length; i++) {
//         fileNames.push(this.files[i].name);
//     }

//     let text = "";

//     if (fileNames.length > 0) {
//         text = this.files.length + " files selected: " + fileNames.join(", ");
//     } else {
//         text = "No file chosen";
//     }

//     document.getElementById("fileName").textContent = text;
// });


document.getElementById("fileInput").addEventListener("change", function () {

    let files = this.files;
    let fileNames = [];

    // ✅ rules
    let allowedTypes = ["image/jpeg", "image/png", "image/jpg", "image/webp"];
    let maxSize = 2 * 1024 * 1024; // 2MB

    for (let i = 0; i < files.length; i++) {

        let file = files[i];

        // ❌ type check
        if (!allowedTypes.includes(file.type)) {
            alert("Only JPG, PNG, WEBP images allowed");
            this.value = "";
            return;
        }

        // ❌ size check
        if (file.size > maxSize) {
            alert("Each image must be less than 2MB");
            this.value = "";
            return;
        }

        fileNames.push(file.name);
    }

    // ✅ UI update
    let text = files.length > 0 
        ? files.length + " files selected: " + fileNames.join(", ")
        : "No file chosen";

    document.getElementById("fileName").textContent = text;
});

function triggerFile2() {
    document.getElementById("fileInput2").click();
}


// document.getElementById("fileInput2").addEventListener("change", function () {
//     document.getElementById("fileName2").textContent =
//         this.files[0]?.name || "No file chosen";
// });

document.getElementById("fileInput2").addEventListener("change", function () {

    let file = this.files[0];

    if (!file) {
        document.getElementById("fileName2").textContent = "No file chosen";
        return;
    }

    // ✅ allow image + pdf
    let allowedTypes = ["image/jpeg", "image/png", "image/jpg", "application/pdf"];
    let maxSize = 2 * 1024 * 1024; // 2MB

    // ❌ type check
    if (!allowedTypes.includes(file.type)) {
        alert("Only JPG, PNG or PDF allowed");
        this.value = "";
        return;
    }

    // ❌ size check
    if (file.size > maxSize) {
        alert("File size must be less than 2MB");
        this.value = "";
        return;
    }

    document.getElementById("fileName2").textContent = file.name;
});


function toggleRequired(step, enable) {
    let fields = step.querySelectorAll("[required]");
    fields.forEach(field => {
        if (!enable) {
            field.dataset.required = "true";
            field.removeAttribute("required");
        } else {
            if (field.dataset.required) {
                field.setAttribute("required", "required");
            }
        }
    });
}


function validateStep1() {

    let step1 = document.getElementById("step1");

    let name = step1.querySelector('input[name="name"]');
    let phone = step1.querySelector('input[name="personal_phone"]');

    if (name.value.trim() === "") {
        alert("Name is required");
        name.focus();
        return false;
    }

    if (phone.value.trim() === "") {
        alert("Phone number is required");
        phone.focus();
        return false;
    }

    if (!/^[0-9]{10}$/.test(phone.value)) {
        alert("Enter valid 10 digit phone number");
        phone.focus();
        return false;
    }

    return true;
}



document.addEventListener("DOMContentLoaded", function(){

let steps = document.querySelectorAll('.step');
//let current = 0;
let current = {{ session('step') ? session('step') - 1 : 0 }};

updateProgress(current); // 🔥 important
// validation function
function validateStep(step) {

console.log(step.id);

    let inputs = step.querySelectorAll("input, textarea, select");

    for (let input of inputs) {

        // normal fields
        if (input.type !== "file" && input.type !== "radio" && input.type !== "checkbox") {
            if (input.hasAttribute("required") && input.value.trim() === "") {
                alert("Please fill all required fields");
                input.focus();
                return false;
            }
        }

        // radio
        if (input.type === "radio") {
            let checked = step.querySelectorAll('input[type="radio"]:checked');
            if (checked.length === 0) {
                alert("Please select registration fees");
                return false;
            }
            break;
        }

        // checkbox
        if (input.type === "checkbox") {
            let checked = step.querySelectorAll('input[type="checkbox"]:checked');
            if (checked.length === 0) {
                alert("Please select at least one service");
                return false;
            }
            break;
        }
    }


    if (step.id === "step2") {
            let posterInput = document.getElementById("fileInput");

            if (posterInput.files.length === 0) {
                alert("Please upload at least one business poster");
                return false;
            }
    }

    // ✅ SPECIAL: payment proof validation
    if (step.id === "step3") {
            let paymentFile = document.getElementById("fileInput2");

            if (paymentFile.files.length === 0) {
                alert("Please upload payment proof");
                return false;
            }

            let file = paymentFile.files[0];

            let allowedTypes = ["image/jpeg", "image/png", "image/jpg", "application/pdf"];
            let maxSize = 2 * 1024 * 1024; // 2MB

            // ❌ type check
            if (!allowedTypes.includes(file.type)) {
                alert("Only JPG, PNG or PDF allowed");
                return false;
            }

            // ❌ size check
            if (file.size > maxSize) {
                alert("File size must be less than 2MB");
                return false;
            }
        }

    return true;
}


document.getElementById("finalSubmit").addEventListener("click", function () {

    let step3 = document.getElementById("step3");

    if (!validateStep(step3)) {
        return;
    }

    // ✅ agar validation pass ho gayi to form submit karo
    this.closest("form").submit();
});
// NEXT
document.querySelectorAll(".next").forEach(function(btn){
    btn.addEventListener('click', function(e){
        if(btn.type === "submit"){
            return true;
        }

        e.preventDefault();

        if(current === 0){
            if (!validateStep1()) return;
        } else {
            if (!validateStep(steps[current])) return;
        }

        if(current < steps.length - 1){
            steps[current].classList.remove('active');
            current++;
            steps[current].classList.add('active');

            updateProgress(current);
        }
    });
});

// PREV
document.querySelectorAll(".prev").forEach(function(btn){
    btn.addEventListener('click', function(e){
        e.preventDefault(); 
        if(current > 0){
            steps[current].classList.remove('active');
            current--;
            steps[current].classList.add('active');
            updateProgress(current);
        }

    });
});

 document.querySelector("form").addEventListener("submit", function(e){

        let currentStep = document.querySelector('.step.active');
           if(current === 0){
                if (!validateStep1()){
                    e.preventDefault();
                }
            } 
            else {
                if (!validateStep(currentStep)) {
                    e.preventDefault();
            }
}
    });


});
function updateProgress(current){
    let stepsUI = document.querySelectorAll(".progress-step");

    stepsUI.forEach((step, index) => {
        step.classList.remove("active");
        if(index <= current){
            step.classList.add("active");
        }
    });
}
</script>




@endpush
