@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Devices</h1>

                            <table>
                                <tr>
                                    <th>Device name</th>
                                    <th>Device IP</th>
                                </tr>
                                @foreach ($devices as $device)
                                    <tr>
                                        <td><a href="/devices/{{$device->id}}">{{$device->name}}</a> </td>
                                        <td>{{$device->ip}}</td>
                                    </tr>
                                @endforeach
                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
