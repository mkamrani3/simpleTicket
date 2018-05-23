@extends('layouts.app')

@section('other_css')
<style>
    .table-no-line td {
        border: none !important;
    }
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-success table-no-line">
                        <div class="panel-heading">کاربران</div>
                        <div class="panel-body">
                            <table class="table table-responsive">
                                <tr>
                                    <td class="col-md-6">کل کاربران</td>
                                    <td class="col-md-6 text-center">3</td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">کاربران برخط</td>
                                    <td class="col-md-6 text-center">1</td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">کارشناسان</td>
                                    <td class="col-md-6 text-center">1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="panel panel-info table-no-line">
                        <div class="panel-heading">لاگ</div>
                        <div class="panel-body">
                            <table class="table table-responsive">
                                <tr>
                                    <td class="col-md-2"></td>
                                    <td class="col-md-2 text-center">درخواست جدید</td>
                                    <td class="col-md-2 text-center">پاسخ به درخواست</td>
                                    <td class="col-md-2 text-center">اختصاص درخواست به کاربر</td>
                                    <td class="col-md-2 text-center">کاربر جدید</td>
                                </tr>
                                <tr>
                                    <td>امروز</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td>7 روز گذشته</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td>30 روز گذشته</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
