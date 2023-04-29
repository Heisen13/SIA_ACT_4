<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
Class StudentController extends Controller {
private $request;
public function __construct(Request $request){
$this->request = $request;
}
public function getUsers(){
    $users = User::all();
    return response()->json($users, 200);
    }

public function insert(){


}

public function delete(){


}

public function update(){


}

public function search(){


}

public function browse(){
    


    }


public function add(Request $request ){
    $rules = [
    'username' => 'required|max:20',
    'password' => 'required|max:20',
    'gender' => 'required|in:Male,Female',
    ];
    $this->validate($request,$rules);
    $user = User::create($request->all());
    
    return $this->successResponse($user,
    Response::HTTP_CREATED);
}
}