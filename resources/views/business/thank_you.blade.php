
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<div class="thankyou-container">
    <div class="thankyou-card">
        <div class="icon">✔</div>
        
        <h2>Thank You!</h2>
        <p>Your request has been submitted successfully.<br>
        Our team will contact you shortly.</p>

        

        <div class="btn-group">
            <a href="tel:7000153244" class="btn call-btn">📞 Call Now</a>
            <!-- <a href="https://wa.me/7000153244" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>   -->
            
            <a class="whatsapp-btn" href="https://wa.me/917000153244?text=Download%20Receipt:%20{{ url('receipts/invoice_'.$id.'.pdf') }}" target="_blank">
               <i class="fab fa-whatsapp"></i> Send Receipt on WhatsApp
            </a>
        </div>

        <div class="home-btn-wrapper">
            <a href="/" class="home-btn">
                <i class="fa fa-home"></i> Back to Home
            </a>
        </div>
        
    </div>
</div>

<style>

    .home-btn-wrapper {
    margin-top: 20px;
    text-align: center;
}

.home-btn {
    display: inline-block;
    padding: 10px 20px;
    background: #f5e6df;
    color: #5a3e36;
    border-radius: 25px;
    text-decoration: none;
    font-size: 14px;
    border: 1px solid #d7ccc8;
    transition: all 0.3s ease;
}

.home-btn:hover {
    background: #6d4c41;
    color: #fff;
}

  body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
}


.whatsapp-btn {
    background-color: #25D366;
    color: #fff;
    padding: 10px 16px;
    border-radius: 6px;
    font-size: 14px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.whatsapp-btn:hover {
    background-color: #1ebe5d;
    color: #fff;
}

/* Background */
.thankyou-container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #5a3e36, #8b5e4a);
}

/* Card */
.thankyou-card {
    background: #fff;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    width: 90%;
    max-width: 400px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* Icon */
.icon {
    font-size: 40px;
    color: #7a4b3a;
    margin-bottom: 15px;
}

/* Heading */
.thankyou-card h2 {
    margin-bottom: 10px;
    color: #5a3e36;
}

/* Text */
.thankyou-card p {
    color: #6d4c41;
    font-size: 14px;
    margin-bottom: 25px;
}

/* Buttons */
.btn-group {
    display: flex;
    gap: 10px;
    justify-content: center;
}

/* Common Button */
.btn {
    padding: 10px 18px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

/* Call Button */
.call-btn {
    background: #6d4c41;
    color: #fff;
}

.call-btn:hover {
    background: #4e342e;
}

/* Contact Button */
.contact-btn {
    background: #d7ccc8;
    color: #4e342e;
}

.contact-btn:hover {
    background: #bcaaa4;
}
  </style>