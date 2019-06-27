<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('admin/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
            <table  border=1>
                <tr>
                    <td>姓名: </td>
                    <td><input type="text" name="username" value="{{$data->username}}"></td>
                </tr>
                <tr>
                    <td>库存：</td>
                    <td><input type="text" name="num"  value="{{$data->num}}"></td>
                </tr>
                <tr>
                    <td>原图：</td>
                    <td><img src="{{$data->file}}" width="100"></td>
                </tr>
              
                <tr>
                    <td>图片：</td>
                    <td>
                    <input type="file" name="file" >
                    </td>
                </tr>
                <tr>
                    <td>库存：</td>
                    <td><input type="text" name="price"  value="{{$data->price}}"></td>
                </tr>
                 <tr>
                    <td><input type="submit" value="提交"></td>
                    <td></td>
                </tr>
            </table>
    </form>
</body>
</html>