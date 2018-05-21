@extends('layouts.app')

@section('other_css')
<link href="{{ asset('css/bootstrap-toggle.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-right">
                    <span>تعیین نقش کاربر </span><b>{{ $user->name }}</b>
                </div>
                <div class="panel-body">
                    <div class="row direction-ltr">
                    <div class="col-md-4 col-md-offset-4">
                        <form class="form-horizontal direction-rtl" method="POST" action="{{ route('admin.user.role', $user) }}">
                            {{ csrf_field() }}

                            <div class="form-group ">
                                <label for="role_user" >کاربر</label>

                                <label class="col-md-6">
                                    <input id="role_user" name="user" type="checkbox" @if($user->hasRole('user')) checked @endif data-toggle="toggle" data-on="دارد" data-off="ندارد" data-onstyle="success" data-offstyle="danger">
                                </label>
                            </div>
                            <div class="form-group ">
                                <label for="role_expert">کارشناس</label>
                                <label class="col-md-6">
                                    <input id="role_expert" name="expert" type="checkbox" @if($user->hasRole('expert')) checked @endif data-toggle="toggle" data-on="دارد" data-off="ندارد" data-onstyle="success" data-offstyle="danger">
                                </label>
                            </div>
                            <div class="form-group ">
                                <label for="role_admin">مدیرارشد</label>
                                <label class="col-md-6">
                                    <input id="role_admin" name="admin" type="checkbox" @if($user->hasRole('admin')) checked @endif data-toggle="toggle" data-on="دارد" data-off="ندارد" data-onstyle="success" data-offstyle="danger">
                                </label>
                            </div>
                            <div class="form-group ">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-block">ثبت</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection

@section('other_js')
    <script src="{{ asset('js/bootstrap-toggle.min.js') }}"></script>
@endsection
