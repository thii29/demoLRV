<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Danh mục loại
    </h1>
    <hr>
    <h3>
        <a href="{{ route('ad.create') }}">Thêm</a>
    </h3>
    <br>
    <table border="1">
        <tr>
            <td><b>STT </b></td>
            <td><b>Mã loại</b></td>
            <td><b>Tên loại</b></td>
            <td>--Sua--</td>
            <td>--Xoa--</td>
            <td>--Chi tiet--</td>
        </tr>
        @foreach ($data as $v=>$l)
        <tr>
            <td>{{ $v+1 }}</td>
            <td>{{ $l->maloai }}</td>
            <td>{{ $l->tenloai }}</td>
            <td>'#'</td>
            <td>
                <form action="{{ route('ad.del') }}" method="post">
                    @csrf
                    <input type="hidden" name="maloai" value = "{{ $l->maloai }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Xoá">
                </form>
            </td>
            <td><a href="{{ url('admin/loai/showdetail')}}/{{ $l->maloai }}">Chi tiet</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
