<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/page.css">
    <script type="text/javascript" src="{{asset('js')}}/jquery.js"></script>
<script type="text/javascript">
   $(function(){
      $("#showdiv").fadeOut(2000);
   });
</script>

<style type="text/css">
</style>
</head>
    <body>
    @if(Session::has('message'))
        <div id="showdiv" style="border: 1px solid red;background: gray;width: 100%;" class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif

    <table>
                <tr>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>邮箱</td>
                    <td>操作</td>
                </tr>
                @foreach($data as  $v)
                <tr>
                    <td>{{$v->name}}</td>
                    <td>{{$v->age}}</td>
                    <td>{{$v->email}}</td>
                    <td><a href="/admin/member/update/{{$v->id}}">修改</a>|
                        {{--<a href="/admin/member/del/{{$v->id}}">删除</a></td>--}}
                        <a href="{{url('/admin/member/del/'.$v->id)}}">删除</a></td>
                </tr>
                @endforeach
                <tr><td>共{{$data->total()}}条,当前页面是{{$data->currentPage()}}</td><td colspan="4">{{$data->render()}}</td></tr>
            </table>
        </form>
    </body>
</html>