<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <h3><p>Welcome, {{ $name }}!</p></h3>
    <form action="#" method="POST">
        @csrf
        <label for="message">Your Message:</label>
        <textarea id="message" name="message" rows="4" cols="50"></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>
