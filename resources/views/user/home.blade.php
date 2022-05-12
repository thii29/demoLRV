<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <tr>
            <td>Home</td>
            <td>Sach</td>
            <td>Gioi thieu</td>
            <td>Tìm kiếm</td>
            <td>
                @if (session()->has('dangnhap'))
                    {{-- {{ dd(session('dangnhap')) }} --}}
                    Hello {{ session('dangnhap')['tenkh'] }}-<a href="{{ url('/logout') }}">Logout</a>
                @else
                <a href="{{ route('login') }}">Đăng nhập</a> - Đăng ký
                @endif
            </td>
        </tr>
    </table>
    <table class="table">
        @foreach ($data as $item)
       <tr>
           <td>{{ $item->masach }}</td>
           <td>{{ $item->tensach }}</td>
           <td>{{ $item->nhaxb->tennxb }}</td>
           <td>{{ $item->loai->tenloai }}</td>
           <td><img src="{{ url('public') }}/asset/image/ {{ $item->hinh }}" alt=""></td>
           <td>......</td>
       </tr>
       @endforeach
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
