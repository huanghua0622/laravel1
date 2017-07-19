<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
	<link rel="stylesheet" href="{{asset('admins')}}/style/font/css/font-awesome.min.css">
	<script type="text/javascript" src="{{asset('admins')}}/style/js/jquery.js"></script>
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h2>欢迎使用XX管理平台</h2>
		<div class="form" style="width:248px;">
			@if(count($errors > 0))
				@foreach($errors->all() as $error)
			<span style="color: red">{{$error}}</span><br/>
				@endforeach
			@endif
			<form action="{{url('admin\login_check')}}" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
                    <li>
						<input type="text" class="code" name="captcha"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img  id="captcha" style="cursor: pointer;" src="{{captcha_src()}}" alt="">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.abc.com" target="_blank">http://www.abc.com</a></p>
		</div>
	</div>
</body>
</html>
<script>
	$("#captcha").click(function(){
	   $(this).attr('src','{{captcha_src()}}/'+Math.random());
	});
</script>