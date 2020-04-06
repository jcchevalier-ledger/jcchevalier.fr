@extends('layout')

@section('title', 'My projects')

@section('additional_css')
    <link href="{{ mix('/css/projects_page.css') }}" rel="stylesheet"/>
@endsection

@section('start_scripts')
@endsection

@section('navbar')
    @parent
@endsection

@section('content')
    <div class="background-1">
        <div class="jumbotron central">

            <h1>My technicals projects</h1>
            <hr>
            <p>On this web page, you can interact with my personal projects that have helped me to develop my skills in
                certain areas of IT</p>

            <div class="projects">

                <div class="row">

                    <div class="col-sm-6">
                        <p>Description here</p>
                        <button type="button" id="login-interface" class="btn btn-outline-success btn-lg">Access the
                            login interface
                        </button>
                    </div>

                    <div class="col-sm-6">
                        <p>Description here</p>
                        <button type="button" class="btn btn-outline-success btn-lg">Access the project n°2</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
