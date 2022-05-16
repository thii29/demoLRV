<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <h2>Giỏ hàng - ({{ Cart::getcontent()->count() }})</h2>
      <hr>
      <table border="1">
         @foreach (Cart::getcontent() as $item)
         <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td> {{ $item->attributes['image'] }}</td>
            <td>{{ number_format($item->price) }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ number_format($item->price*$item->quantity) }} VND</td>
            <td>
                <form action="giohang" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <input type="number" name="quantity" value="{{ $item->quantity }}">
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <input type="submit" value="Cập nhật">
                </form>
            </td>
            <td>
                <form action="delgh" method="post">
                    @csrf
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="id"  value="{{ $item->id }}">
                <input type="submit" name="" value="xoá">
                </form>
            </td>
        </tr>
         @endforeach
      </table>
      <h3>{{ Cart::getTotal() }}</h3>
      <hr>
      <h3><a href="{{ route('sach.sanpham') }}">Tiếp tục mua hàng</a></h3>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
