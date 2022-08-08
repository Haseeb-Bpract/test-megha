<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\model\Student;

use Illuminate\Support\Facades\DB;

class Membercontroller extends Controller
{
    function addData(Request $req)
    {
    $member=new Member;
        $member->student_name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        
        return redirect('list');
       
    }



    function list()
    {
       
       $data=Member::all();
       return view('list',['members'=>$data]);
    }



    function delete($id)
    {
        $data=Member::find($id);
        $data->delete($id);
        return redirect('list');
    }


    function showData($id)
    {
        $data=Member::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        
        $data=Member::find($req->id);
        $data->student_name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }
}

