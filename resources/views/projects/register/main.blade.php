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

            <form name='login_form' action='' method='post' style="margin: 1em auto 1em auto;">

                @csrf

                @if($errors->get('login'))
                    <div class='form-group invalid-input'>
                        <label for='login'></label>
                        <input type='text' id='login' name='login' class='form-control' placeholder='Login'/>
                    </div>
                @else
                    <div class='form-group'>
                        <label for='login'></label>
                        <input type='text' id='login' name='login' class='form-control' placeholder='Login'/>
                    </div>
                @endif

                @if($errors->get('email'))
                    <div class='form-group invalid-input'>
                        <label for='email'></label>
                        <input type='text' id='email' name='email' class='form-control' placeholder='Email address'/>
                    </div>
                @else
                    <div class='form-group'>
                        <label for='email'></label>
                        <input type='text' id='email' name='email' class='form-control' placeholder='Email address'/>
                    </div>
                @endif

                @if($errors->get('password'))
                    <div class='form-group invalid-input'>
                        <label for='password'></label>
                        <input type='password' id='password' name='password' class='form-control'
                               placeholder='Password'/>
                    </div>

                    <div class='form-group invalid-input'>
                        <label for='password_confirmation'></label>
                        <input type='password' id='password_confirmation' name='password_confirmation'
                               class='form-control'
                               placeholder='Confirm password'/>
                    </div>
                @else
                    <div class='form-group'>
                        <label for='password'></label>
                        <input type='password' id='password' name='password' class='form-control'
                               placeholder='Password'/>
                    </div>

                    <div class='form-group'>
                        <label for='password_confirmation'></label>
                        <input type='password' id='password_confirmation' name='password_confirmation'
                               class='form-control'
                               placeholder='Confirm password'/>
                    </div>
                @endif

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
