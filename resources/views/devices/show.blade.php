@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h2>Details for {{$device->name}}</h2>

                        <table>
                            <tr>
                                <th>Port Name</th>
                                <th>VLAN</th>
                                <th>Status</th>
                                <th>Speed</th>
                            </tr>
                            @foreach($ports as $port)
                                <tr>
                                    <td><a href="/ports/{{$port->id}}/edit">{{$port->name}}</a> </td>
                                    <td>{{$port->vlan}}</td>
                                    <td>Up</td>
                                    <td>1000T</td>
                                </tr>

                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
