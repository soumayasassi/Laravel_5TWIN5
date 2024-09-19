<!DOCTYPE html> <html lang="en">
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

<form action="{{route('contact.submit')}}" method="POST">
    @csrf
    <label for="name">Name:</label> <br>
    <input type="text" id="name" name="name">
    <button type="submit">Submit</button>
</form>
</body>

{{--action="{{ route('contact.submit') }}"--}}
