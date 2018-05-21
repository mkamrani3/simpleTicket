@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">کابران</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <th class="col-sm-2">نام</th>
                                <th class="col-sm-4">ایمیل</th>
                                <th style="width: 200px">تاریخ ایجاد</th>
                                <th style="width: 50px">-</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ ($users->currentpage()-1) * $users->perpage() + $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ convertToJalaliDate($user->created_at) }}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="{{ route('admin.user.role', [$user]) }}"><i class="fa fa-list"></i> نقش ها </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        <div class="text-center">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
