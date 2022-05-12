<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('ad.sach.store') }}" method="post" enctype="multipart/form-data">
        @csrf
       <table>
           <tr>
               <td>Mã sách</td>
               <td><input type="text" name="masach" id="" value="{{ old('masach') }}"></td>
           </tr>
           <tr>
               <td>Tên sách</td>
               <td><input type="text" name="tensach" value="{{ old('tensach') }}"></td>
           </tr>
           <tr>
               <td>Giá</td>
               <td><input type="number" name="gia" id="" value=""></td>
           </tr>
           <tr>
               <td>Hình</td>
               <td><input type="file" name="hinh" id="" accept="image/*"></td>
           </tr>
           <tr>
               <td>Mô tả</td>
               <td><textarea name="mota" id="" cols="30" rows="10"></textarea></td>
           </tr>
           <tr>
               <td>Nhà xuất bản</td>
               <td>
                   <select name="manxb" id="">
                       @foreach ($nhaxb as $item)
                       <option value="{{ $item->manxb }}">{{ $item->tennxb }}</option>
                       @endforeach
                   </select>
               </td>
           </tr>
           <tr>
               <td>Loại</td>
               <td>
                   <select name="maloai" id="">
                       @foreach ($loai as $item)
                       <option value="{{ $item->maloai }}">{{ $item->tenloai }}</option>
                       @endforeach
                    </select>
                </td>
           </tr>
           <tr>
               <td colspan="2"><input type="submit" value="thêm"></td>
           </tr>
       </table>
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
</body>
</html>
