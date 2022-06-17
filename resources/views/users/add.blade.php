{{-- @extends('layouts.main')

@section('title', 'User List')

@section('content')
    @if (session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">入力データが正しくありません。もう一度確認してください！</div> 
    @endif
    <h1>ADD USER</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="">名前</label>
            <input type="text" class="form-control" name="fullname" 
            placeholder="名前を入力してください" value="{{old('fullname')}}">
            @error('fullname')
                <span style="color: red"> {{$message}} </span> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="">メール</label>
            <input type="text" class="form-control" name="email" 
            placeholder="メールを入力してください" value="{{old('email')}}">
            @error('email')
                <span style="color: red"> {{$message}} </span> 
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">追加</button>
       <a href=" {{route('list')}} " class="btn btn-warning">戻る</a>
       @csrf
    </form>
@endsection
     --}}
