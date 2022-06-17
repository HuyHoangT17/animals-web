@extends('layouts.main')

@section('title', 'PET HOUSE')

@section('content')

    <!--breadcrumb-->
    <ul class="breadcrumb">
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li>会員登録</li>
    </ul>
    @if (session('msg'))
        <div class="alert alert-success" style="text-align: center">{{ session('msg') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" style="text-align: center">入力データが正しくありません。もう一度確認してください！</div>
    @endif
    <!--navigation-->
    <div class="container">
        <h1 class="form-title">会員登録</h1>
        <div class="row">
            <div class="col-md-8">
            </div>
            <div class="col-md-4">
                <h4>
                    <a href=" {{ route('login') }} " class="col-md-4">Login Page</a>
                </h4>

            </div>



            <hr>


            <div class="col-4">

            </div>
            <div class="col-5">

                <form action="{{ route('post-form') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="fullname" placeholder="Enter Your Name..."
                            value="{{ old('fullname') }}">
                        @error('fullname')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email..."
                            value="{{ old('email') }}">
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
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
                        <a href="#" class="form-check-label" for="exampleCheck1">Terms & Privacy</a>
                        @error('checkbox')
                            <span style="color: red"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-11" style="text-align: center">
                        <button type="submit" class="btn btn-primary col-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>

@endsection
