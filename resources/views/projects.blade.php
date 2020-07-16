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
            <p>On this web page, you can interact with my personal projects that have helped me to acquire some skills
                in web development</p>

            <div class="projects">

                <div class="row">

                    <div class="col-sm-6">
                        <p>The objective of this project was to code a fully functional login interface</p>
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

@section('end_scripts')
    <script src="{{ mix('/js/projects_page.js') }}"></script>
@endsection
