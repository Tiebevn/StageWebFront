@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Devices</h1>
                        <form action="{{route('devices.index')}}">
                            <input name="name" id="name" type="text">
                            <input type="submit">
                        </form>
                        <table class="table table-bordered">
                            <tr>
                                <th width="80px">@sortablelink('id')</th>
                                <th>@sortablelink('name')</th>
                                <th>@sortablelink('id')</th>
                            </tr>
                            @if($devices->count())
                                @foreach($devices as $key => $device)
                                    <tr>
                                        <td>{{ $device->id }}</td>
                                        <td><a href="{{route('devices.show', $device->id)}}">{{ $device->name }}</a> </td>
                                        <td>{{ $device->ip }}</td>
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
