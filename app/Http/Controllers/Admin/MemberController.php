<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Member;
class MemberController extends Controller
{
    public function add()
    {
//        $member = new Member();
//        $member->name='李四';
//        $member->age = 12;
//        $member->email = '12@163.com';
//        $res = $member->save();
//        var_dump($res);
        return view('admin.member.add');
    }
    public function addok(Request $request)
    {
        $this->validate($request,[
            //对于的要求是required
            'name'=>'required|min:2|unique:member,name',//前面条件：后面是对于的值  unique：跟的是对于的表格 ，对于的字段名字
            'password'=>'required|between:6,12|confirmed',
            'password_confirmation'=>'required|between:6,12',
            'email'=>'required|email|unique:member,email'
        ]);
//        $name = $request->input('name');
//        var_dump($name);
//        echo '<br>';
//        $data = $request->only(['name','age']);
//        var_dump($data);
//        $data=$request->except('name');
//        var_dump($data);
//        var_dump($request->has('id'));
//        //接收表单提交的数据
        $data = $request->all();
//        var_dump($data);die;
        //文件上传
        //先进行判断 有没有文件上传 并且是否上传成功
        if($request->hasFile('face') && $request->file('face')->isValid()){
            $file = $request->file('face');//获取上传的文件
            //获取上传文件的后缀
            $ext = $file->getClientOriginalExtension();
            //获取上传文件的真是姓名
            $truename = $file->getClientOriginalName();
            //获取上传文件的大小
            $filesize = $file->getClientSize();
            //获取上传文件的存储位置
            $temppath = $file->getRealPath();
            //这里使用move来进行文件的上传
            //但是在文件上传的时候 要对群文件 进行冲命名
            $filename = date('ymdHis').'.'.$ext;
            $file->move('./uploads/',$filename);
            $data['face'] = '/upload/'.$filename;
        }
        //进行入库操作
//        var_dump($data);die;
        $res = Member::create($data);
        if($res){
            //添加成功的话跳转到列表页
            return redirect('/admin/member/index')->with('message','添加成功');
        }else{
            return redirect('/admin/member/add')->with('message','添加失败');
        }
    }
    public function index()
    {
//        $info = Member::find(1);
//        var_dump($info);
//        $info = Member::all(['name','age']);
//        echo $info->name.'--'.$info->age.'--'.$info->email;
//        foreach($info as $v){
//            echo $v->name.'--'.$v->age;
//        }
//        $data = Member::all();
//        return view('admin.member.index',compact('data'));
//        $data = Member::orderBy('age','asc')->get();
//        return view('admin.member.index',compact('data'));
        $data = Member::paginate(2);
        return view('admin.member.index',compact('data'));

    }
    public function update($id)
    {
        $data = Member::find($id);
        return view('admin.member.update',compact('data'));
    }
    public function updateok(Request $request)
    {
//        $data = $request->all();
        //获取被修改的数据
        $member = Member::find($request->input('id'));
        $member ->name = $request->input('name');
        $member->age = $request->input('age');
        $member->email = $request->input('email');
//        var_dump($member);die;
        $res = $member->save();
//        $data = $request->all();
//        var_dump($data);die;
//        $res = Member::create($data);
        if($res){
            return redirect('/admin/member/index');
        }else{
            return redirect('/admin/member/update');
        }
    }
    public function del($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/member/index');
    }
}
