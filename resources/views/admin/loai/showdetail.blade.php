<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đì tel</title>
</head>
<body>
    <h2>{{ $loai->maloai }}</h2>
    <h3>{{ $loai->tenloai }}</h3>
    <a href="{{ url('admin/loai/edit') }}/{{ $loai->maloai }}">Sửa</a>
    <form action="{{ route('ad.del') }}" method="POST">
        @csrf
        <input type="hidden" name="maloai" value = "{{ $loai->maloai }}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Xoá">
    </form>
</body>
</html>
