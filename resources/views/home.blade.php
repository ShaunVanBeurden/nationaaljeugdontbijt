@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>
                        You are logged in!
                    </p>
                    <p>
                        Go to <a href="{{ route('posts.index') }}">blog posts</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
