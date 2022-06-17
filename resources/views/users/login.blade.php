@extends('layouts.main')

@section('title', 'PET HOUSE')

@section('content')

    <!--breadcrumb-->
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('get-form') }}">会員登録</a></li>
        <li>会員ログイン</li>
    </ul>

    @if (session('msg'))
        <div class="alert alert-success" style="text-align: center">{{ session('msg') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" style="text-align: center">入力データが正しくありません。もう一度確認してください！</div>
    @endif

    <div class="container">
        <h1 class="form-title">ログイン</h1>
        <hr>
        <br>
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-5">
                <form action="{{route('post-login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email..."
                        value="{{old('email')}}">
                        @error('email')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password...">
                        @error('password')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-11" style="text-align: center">
                        <button type="submit" class="btn btn-primary col-3">Submit</button>
                    </div>
                    <br>
                    <a href=" {{ route('get-form') }} ">Create An Account?</a><br>
                    <a href="#">Forgot Password?</a>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection
