<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ad.nxb.store') }}" method="post">
        @csrf
        mã nxb: <input type="text" name="manxb" required value="{{ old('manxb') }}"> <br>
        tên nxb: <input type="text" name="tennxb" value="{{ old('tennxb') }}"> <br>
        <input type="submit" value="nhập">
    </form>
    @if ($errors->any())
   <div class="alert alert-danger">
       <ul>
          @foreach ($errors->all() as $error)
          <li> {{ $error }}</li>
          @endforeach
       </ul>
   </div>
    @endif
    <br>
    <table border="1">
        <tr>
            <td>STT</td>
            <td>Mã NXB</td>
            <td>Tên NXB</td>
            <td>SoLuongSach</td>
            <td>Thao tác</td>
        </tr>
       @foreach ($nhaxb as $k => $item)
       <tr>
           <td>{{ $k+1 }}</td>
           <td>{{ $item->manxb }}</td>
           <td>{{ $item->tennxb }}</td>
           <td>{{ count($item->sach) }}</td>
           <td>
               @if(count($item->sach)==0)
               xoá
               @else
               Không xoá được
               @endif
           </td>
       </tr>
       @endforeach
    </table>
</body>
</html>
