@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(count($templates))
                            <h1>Templates</h1>
                            <table class="table table-bordered">
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
                        @endif
                        <a href="{{route('templates.create')}}">New template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
