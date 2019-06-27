<link rel="stylesheet" href="{{asset('css/page.css')}}" type="text/css">
<form action="">
    <input type="text" name='username' value="{{$query['username']??''}}">
   <button>搜索</button>
</form>
<table border=1>
    <tr>
        <td>ID</td>
        <td>姓名</td>
        <td>性别</td>
        <td>时间</td>
        <td>图片</td>
        <td>价格</td>
        <td>操作</td>
    </tr>
    @if($data)
    @foreach($data as $v)
    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->username}}</td>
        <td>{{$v->num}}</td>
        <td>{{date('Y-m-d')}}</td>
      <td><img src="{{$v->file}}" width="150"></td>
      <td>{{$v->price}}</td>
        <td>
        <a href="{{url('admin/del',['id'=>$v->id])}}">删除</a>
        <a href="{{url('admin/edit',['id'=>$v->id])}}">修改</a>
        </td>
    </tr>
    @endforeach
    @endif
</table>
{{$data->appends($query)->links()}}