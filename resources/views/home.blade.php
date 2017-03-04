@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    Services:<br>
                    @foreach (Auth::user()->services as $service)
                      {{ $service->id }}. {{ $service->name }} => {{ $service->status }}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
