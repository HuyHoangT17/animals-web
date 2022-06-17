{{-- @extends('layouts.main')

@section('title', 'User List')

@section('content')
    @if (session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <h1>USER LIST</h1>
  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="9%">順番</th>
                <th >名前</th>
                <th>メール</th>
                <th width="20%">時刻</th>
                <th width="10%">編集</th>
                <th width="10%">削除</th>
            </tr>
        </thead>
        <tbody>
            @if  (!empty($usersList))
            @foreach ($usersList as $user)
            <tr>
                <td> {{$user->id}} </td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->create_at}}</td>
                <td>
                    <a href=" {{route('get-edit', ['id'=>$user->id])}} " class="btn btn-warning btn-sm">編集</a>
                </td>
                <td>
                    <a onclick="return confirm('ユーザーを削除しますか？')" href=" {{route('delete', ['id'=>$user->id])}} " class="btn btn-danger btn-sm">削除</a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6">データがありません</td>
            </tr>
            @endif
        </tbody>
    </table>
    <a href=" {{route('add')}} " class="btn btn-primary">ユーザー追加</a>
@endsection --}}