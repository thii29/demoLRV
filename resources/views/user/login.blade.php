<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Đăng nhập</h3>
    <hr>
    @if(session()->has('mess'))
    <div>
        {{ session('mess') }}
    </div>
    @endif
    <form action="{{ route('checklogin') }}" method="post" enctype="multipart/form-data">
        @csrf
        <table>
            
            <tr>
                <td>email: </td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>password: </td>
                <td><input type="password" name="matkhau" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</body>
</html>
