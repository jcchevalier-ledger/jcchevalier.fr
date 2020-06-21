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

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul style="margin: 5px 0 0 0">
                        @foreach ($errors->all() as $error)
                            <li style="margin-bottom: 5px">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name='login_form' action='{{route('login')}}' method='POST'>

                @csrf

                <div class='form-group'>
                    <label for='login'></label>
                    <input type='text' id='login' name='login'
                           class='form-control @error('login') invalid-input @enderror' placeholder='Login'/>
                </div>

                <div class='form-group'>
                    <label for='password'></label>
                    <input type='password' id='password' name='password'
                           class='form-control @error("password") invalid-input @enderror'
                           placeholder='Password'/>
                </div>

                <button type='submit' id='login-button' class='btn btn-success btn-lg'>Login</button>

            </form>

            <p style="line-height: initial; text-indent: 0">
                <a href="/projects/register">Create an account</a>
            </p>

        </div>
    </div>
@endsection
