<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 0;
            border-bottom: 1px solid #ddd;
        }
        th {
            text-align: left;
            background-color: #f2f2f2;
        }
        td {
            vertical-align: top;
        }
    </style>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <table>
        <tr>
            <th>Field</th>
            <th>Details</th>
        </tr>
        <tr>
            <td><strong>First Name</strong></td>
            <td>{{ $mailData['first_name'] }}</td>
        </tr>
        <tr>
            <td><strong>Last Name</strong></td>
            <td>{{ $mailData['last_name'] }}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $mailData['email'] }}</td>
        </tr>
        <tr>
            <td><strong>Contact Number</strong></td>
            <td>{{ $mailData['phone_number'] }}</td>
        </tr>
        <tr>
            <td><strong>Meeting Date and Time</strong></td>
            <td>{{ $mailData['datetime'] }}</td>
        </tr>
        <tr>
            <td><strong>Company Name</strong></td>
            <td>{{ $mailData['company_name'] }}</td>
        </tr>
        <tr>
            <td><strong>Message</strong></td>
            <td>{{ $mailData['message'] }}</td>
        </tr>
    </table>
</body>
</html>
