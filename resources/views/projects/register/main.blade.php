@extends('layout')

@section('title', 'Login interface')

@section('additional_css')
    <link href="{{ mix('/css/login_interface.css') }}" rel="stylesheet"/>
@endsection

@section('start_scripts')
@endsection

@section('navbar')
    @parent
@endsection

@section('content')
    <div class='background-1'>
        <div class='jumbotron central'>

            <h1>Register now!</h1>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin: 5px 0 0 0">
                        @foreach ($errors->all() as $error)
                            <li style="margin-bottom: 5px">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name='login_form' action='{{route('register')}}' method='POST' style="margin: 1em auto 1em auto;">

                @csrf

                <div class='form-group'>
                    <label for='login'></label>
                    <input type='text' id='login' name='login'
                           class='form-control @error('login') invalid-input @enderror' placeholder='Login'/>
                </div>

                <div class='form-group'>
                    <label for='email'></label>
                    <input type='text' id='email' name='email'
                           class='form-control @error("email") invalid-input @enderror'
                           placeholder='Email address'/>
                </div>

                <div class='form-group'>
                    <label for='password'></label>
                    <input type='password' id='password' name='password'
                           class='form-control @error("password") invalid-input @enderror'
                           placeholder='Password'/>
                </div>

                <div class='form-group'>
                    <label for='password_confirmation'></label>
                    <input type='password' id='password_confirmation' name='password_confirmation'
                           class='form-control @error("password") invalid-input @enderror'
                           placeholder='Confirm password'/>
                </div>

                <button type='submit' name='submit' id='register-button' class='btn btn-success btn-lg'>
                    Register
                </button>

            </form>

            <p style="line-height: initial; text-indent: 0">
                Already have an account?<br><a href="/projects/login">Connect here</a>
            </p>

        </div>
    </div>
@endsection
