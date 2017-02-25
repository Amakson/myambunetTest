@extends('layouts.app')
@section('content')

<main class="container-fluid">

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Hello, {{ $user->name }}</h1>
            <p>Please make changes to make your profile awesome</p>
        </div>

        <div class="col-sm-8 col-sm-offset-2">
            {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->username], 'files' => true]) !!}
            @include('partials.error-message')
                <div class="form-group">
                    {!! Form::label("name", "Name") !!}
                    {!! Form::text("name", null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("about", "About") !!}
                    {!! Form::textarea("about", null, ['class' => 'form-control', 'placeholder' => 'Write about yourself']) !!}
                </div>
                {{-- new start --}}
                <div class="form-group">
                    {!! Form::label("address", "Address") !!}
                    {!! Form::text("address", null, ['class' => 'form-control', 'placeholder' => 'Place your address here']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("location", "Location") !!}
                    {!! Form::text("location", null, ['class' => 'form-control', 'placeholder' => 'Enter your location here']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("tel", "Phone") !!}
                    {!! Form::text("tel", null, ['class' => 'form-control', 'placeholder' => 'Enter your tel url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("cert_Level", "Level") !!}
                    {!! Form::text("cert_Level", null, ['class' => 'form-control', 'placeholder' => 'Enter your cert_Level here']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("licence_number", "Github") !!}
                    {!! Form::text("licence_number", null, ['class' => 'form-control', 'placeholder' => 'Enter licence number here']) !!}
                </div>
                {{-- new end --}}
                <div class="form-group">
                    {!! Form::label("website", "Website") !!}
                    {!! Form::url("website", null, ['class' => 'form-control', 'placeholder' => 'Paste your website url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("facebook", "Facebook") !!}
                    {!! Form::url("facebook", null, ['class' => 'form-control', 'placeholder' => 'Paste your facebook url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("twitter", "Twitter") !!}
                    {!! Form::url("twitter", null, ['class' => 'form-control', 'placeholder' => 'Paste your twitter url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("github", "Github") !!}
                    {!! Form::url("github", null, ['class' => 'form-control', 'placeholder' => 'Paste your github url']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label("photo_id", "Profile Picture") !!}
                    {!! Form::file("photo_id") !!}
                </div>
                <div class="form-group">
                    {!! Form::label("get_email", "Email alert on new Blog post") !!}
                    {!! Form::select("get_email", ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit("Update", ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="form-group">

<input class="placepicker form-control" data-map-container-id="collapseOne"/>

        </div>

        <div id="collapseOne" class="collapse">

            <div class="placepicker-map thumbnail"></div>

        </div>

            </div>


</main>
<script>
    $(".placepicker").placepicker();

</script>

@endsection
