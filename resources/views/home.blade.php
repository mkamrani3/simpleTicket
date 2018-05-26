@extends('layouts.app')

@section('content')
    @guest
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                سامانه ی تیکت ساده
            </div>
        </div>
    @else
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    @endguest

@endsection
