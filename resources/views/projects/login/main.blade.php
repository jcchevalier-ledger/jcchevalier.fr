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

            <h1>Login interface</h1>
            <hr>

            <form name='login_form' action='' method='post'>

                <div class='form-group'>
                    <label for='login'></label>
                    <input type='text' id='login' name='login' class='form-control' placeholder='Login' {$login}
                           required/>
                </div>

                <div class='form-group'>
                    <label for='password'></label>
                    <input type='password' id='password' name='password' class='form-control' placeholder='Password'
                           required/>
                </div>

                <button type='submit' id='login-button' class='btn btn-success btn-lg'>Login</button>

            </form>

            <p style="line-height: initial; text-indent: 0">
                <a href="/projects/register">Create an account</a>
            </p>

        </div>
    </div>
@endsection
