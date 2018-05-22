@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">درخواست ها</div>

                    <div class="panel-body">
                        <table class="table table-responsive table-bordered table-striped">
                            <tr>
                                <th>#</th>
                                <th class="col-sm-6">عنوان</th>
                                <th>وضعیت</th>
                                <th style="width: 200px">تاریخ ایجاد</th>
                                <th style="width: 200px">اخرین تغییر</th>
                                <th style="width: 50px">-</th>
                            </tr>
                            @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->getStatusDesc() }}</td>
                                <td>{{ convertToJalaliDate($ticket->created_at) }}</td>
                                <td>{{ convertToJalaliDate($ticket->updated_at) }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{ route('ticket.show', [$ticket]) }}"><i class="fa fa-list"></i> مشاهده </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
