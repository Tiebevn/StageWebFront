@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Templates</h1>
                        <table>
                            <tr>
                                <th>Template name</th>
                                <th>Template VLAN</th>
                            </tr>
                            @foreach ($templates as $template)
                                <tr>
                                    <td>{{$template->name}}</td>
                                    <td>{{$template->vlan}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <a href="{{route('templates.create')}}">New template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
