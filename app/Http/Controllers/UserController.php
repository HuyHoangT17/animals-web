<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  //

  protected $users;

  public $data = [];

  public function __construct()
  {
  }

  public function getForm()
  {

    return view('users.form', $this->data);
  }

  public  function postForm(Request $request)

  {

    $request->validate(
      [
        'fullname' => 'required|min:5',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'checkbox' => 'required',

      ],
      [
        'fullname.required' => '名前を入力してください',
        'fullname.min' => '名前は :min 桁数以上です。',
        'email.required' => 'メールを入力してください。',
        'email.email' => 'メールのフォームを正しく書いてください。',
        'email.unique' => 'このメールは登録されました！',
        'password.required' => 'パスワードを入力してください',
        'checkbox.required' => 'チェックしてください'

      ]
    );
    $users = new Users();
    $users->fullname = $request->fullname;
    $users->email = $request->email;
    $users->password = Hash::make($request->password);
    $saveData = $users->save();

    if ($saveData) {
      return back()->with('msg', '登録完了。');
    } else {
      return back()->with('msg', 'Something was wrong.');
    };
    // $dataInsert = [
    //     $request->fullname,
    //     $request->email,
    //     date('Y-m-d H:i:s')
    // ];
    // $this->users->addUser($dataInsert);
    // return redirect()->route('list')->with('msg', 'ユーザー追加成功！');
  }

  public function userLogin()
  {

    return view('users.login', $this->data);
  }

  public function postLogin(Request $request)
  {

    $request->validate(
      [
        'email' => 'required|email',
        'password' => 'required',
      ],
      [
        'email.required' => 'メールを入力してください。',
        'email.email' => 'メールのフォームを正しく書いてください。',
        'password.required' => 'パスワードを入力してください',
      ]
    );
    $users = Users::WHERE('email', '=', $request->email)->first();

    if ($users) {
      if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->put('loginId', $users->id);
        return redirect()->route('home');
      } else {
        return back()->with('msg', 'パスワードが正しくありません！');
      }
    } else {
      return back()->with('msg', 'メールが登録されていません！');
    }
  }

  //   if ($users) {
  //     if (Auth::attempt($request->only('email', 'password'))) {
  //       $request->session()->put('loginId', $users->id);
  //       return redirect()->route('home');
  //     } else {
  //       return back()->with('msg', 'パスワードが正しくありません！');
  //     }
  //   } else {
  //     return back()->with('msg', 'メールが登録されていません！');
  //   }
  // }
}























//     public function getUser()
//     {


//         $usersList = $this->users->getAllUsers();


//         return view('users.list', compact('usersList'), $this->data);
//     }

//     public function add()
//     {
//         return view('users.add', $this->data);
//     }

//     public function postUser(Request $request)
//     {
//         $request->validate(
//             [
//                 'fullname' => 'required|min:5',
//                 'email' => 'required|email|unique:users'

//             ],
//             [
//                 'fullname.required' => '名前を入力してください',
//                 'fullname.min' => '名前は :min 桁数以上です。',
//                 'email.required' => 'メールを入力してください。',
//                 'email.email' => 'メールのフォームを正しく書いてください。',
//                 'email.unique' => 'このメールは登録されました！',

//             ]
//         );

//         $dataInsert = [
//             $request->fullname,
//             $request->email,
//             date('Y-m-d H:i:s')
//         ];
//         $this->users->addUser($dataInsert);
//         return redirect()->route('list')->with('msg', 'ユーザー追加成功！');
//     }



//     public function getEdit(Request $request, $id = 0)
//     {

//         if (!empty($id)) {
//             $userDetail = $this->users->getDetail($id);

//             if (!empty($userDetail[0])) {
//                 $request->session()->put('id', $id);
//                 $userDetail = $userDetail[0];
//             } else {
//                 return redirect()->route('list')->with('msg', 'ユーザー存在しません！');
//             }
//         } else {
//             return redirect()->route('list')->with('msg', 'Connection Failed');
//         }
//         return view('users.edit', $this->data, compact('userDetail'));
//     }

//     public function postEdit(Request $request, $id = 0)
//     {

//         $id = session('id');
//         if (empty($id)) {
//             return back()->with('msg', 'Connection Failed');
//         }
//         $request->validate(
//             [
//                 'fullname' => 'required|min:5',
//                 'email' => 'required|email|unique:users,email,' . $id

//             ],
//             [
//                 'fullname.required' => '名前を入力してください',
//                 'fullname.min' => '名前は :min 桁数以上です。',
//                 'email.required' => 'メールを入力してください。',
//                 'email.email' => 'メールのフォームを正しく書いてください。',
//                 'email.unique' => 'このメールは登録されました！',

//             ]
//         );

//         $dataUpdate = [
//             $request->fullname,
//             $request->email,
//             date('Y-m-d H:i:s')
//         ];
//         $this->users->updateUser($dataUpdate, $id);
//         return back()->with('msg', 'ユーザーが更新されました');
//     }

//     public function delete($id = 0)
//     {
//         if (!empty($id)) {
//             $userDetail = $this->users->getDetail($id);

//             if (!empty($userDetail[0])) {

//                 $deleteStatus = $this->users->deleteUser($id);
//                 if ($deleteStatus) {
//                     $msg = 'ユーザーを削除しました';
//                 } else {
//                     $msg = '削除出来ません。もう一度確認してください';
//                 }
//             } else {
//                 $msg = 'ユーザー存在しません！';
//             }
//         } else {
//             $msg = 'Connection Failed';
//         }
//         return redirect()->route('list')->with('msg', $msg);
//     }
// }
