<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ad.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- post,put, đều cần csrf --}}
        maloai: <input type="text" name="maloai"> <br>
        <br>
        tenloai: <input type="text" name="tenloai"><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
