@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="col-md-6 text_panel_head padnone ">
                                View Income Information
                            </div>
                            <div class="col-md-6 text-right padnone">
                                <a href="{{url('/admin/income')}}" class="btn btn-info btn-fill btn-sm btnu"><i class="fa fa-th"></i> All Income</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <table class="table table-striped table-bordered view_table">
                                    <tr>
                                        <td>Income Details</td>
                                        <td>:</td>
                                        <td>
                                            {{$data->income_details}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Income Category</td>
                                        <td>:</td>
                                        <td>
                                            {{$data->giveme->incate_name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amount</td>
                                        <td>:</td>
                                        <td>
                                            {{$data->income_amount}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Income Date</td>
                                        <td>:</td>
                                        <td>
                                            {{$data->income_date}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Created Time</td>
                                        <td>:</td>
                                        <td>
                                            {{$data->created_at}}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn btn-sm btn-fill btnu btn-primary">Print</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
