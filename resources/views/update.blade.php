@extends('layout')

@section('activeUpd')
    active
@endsection

@section('pageTitle')
    Update Details
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><strong>Personal details</strong></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @php
                        $counter = 0;
                    @endphp
                    <div class="row">
                        <div class="col-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                </tr>
                                @for ($i = 0; $i < round(count($personalDetails) / 2, 0); $i++, $counter++)
                                    <tr>
                                        <td>
                                            {{ $personalDetails[$counter]['pdTitle'] }}
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm"
                                                id="example{{ $personalDetails[$counter]['pdId'] }}"
                                                value="{{ $personalDetails[$counter]['pdValue'] }}">
                                        </td>
                                        <td>
                                            <input type="checkbox" name="traType" value="1" checked
                                                data-bootstrap-switch>
                                        </td>
                                    </tr>
                                @endfor
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                </tr>
                                @for ($i = 0; $i < floor(count($personalDetails) / 2); $i++, $counter++)
                                    <tr>
                                        <td>
                                            {{ $personalDetails[$counter]['pdTitle'] }}
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-control-sm"
                                                id="example{{ $personalDetails[$counter]['pdId'] }}"
                                                value="{{ $personalDetails[$counter]['pdValue'] }}">
                                        </td>
                                        <td>
                                            <input type="checkbox" name="traType" value="1" checked
                                                data-bootstrap-switch>
                                        </td>
                                    </tr>
                                @endfor
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary float-right">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection
