<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <strong>Name:</strong> {{ $data->name }} <br>
        <strong>Email:</strong> {{ $data->email }} <br>
        <strong>Phone:</strong> {{ $data->phone }} <br>
        <strong>Subject:</strong> {{ $data->subject }} <br>
        <strong>Message:</strong> <pre>{{ $data->message }}</pre><br><br>
        <a href="mailto:{{ $data->email }}" class="btn">Reply to this email</a>
    </div>
</body>
</html>
