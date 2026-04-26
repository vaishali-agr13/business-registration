<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmation</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            background: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        .content h3 {
            margin-bottom: 15px;
        }

        .details {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }

        .details p {
            margin: 8px 0;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #777;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>Appointment Confirmed</h2>
    </div>

    <div class="content">
        <h3>Hello {{ $appointment->name }},</h3>

        <p>Your appointment has been successfully booked. Here are the details:</p>

        <div class="details">
            <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
            <p><strong>Time:</strong> {{ \Carbon\Carbon::parse($appointment->time_slot)->format('h:i A') }}</p>
            <p><strong>Service:</strong> {{ $appointment->service }}</p>
        </div>

        <p>Thank you for choosing us!</p>

       
    </div>

    <div class="footer">
        © {{ date('Y') }} Business Booking. All rights reserved.
    </div>

</div>

</body>
</html>