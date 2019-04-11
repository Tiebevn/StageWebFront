@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Devices</h1>

                        <table class="table table-bordered">
                            <tr>
                                <th width="80px">@sortablelink('id')</th>
                                <th>@sortablelink('name')</th>
                                <th>@sortablelink('id')</th>
                            </tr>
                            @if($devices->count())
                                @foreach($devices as $key => $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->ip }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                        {!! $devices->appends(\Request::except('page'))->render() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
