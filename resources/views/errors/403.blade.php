@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel">
                <div class="panel-heading">توجه</div>
                <div class="panel-body text-center">
                    <img src="{{ asset('img/error-403.png') }}" alt="error-403">
                    <h3>شما اجازه دسترسی به این صفحه را ندارید!</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
