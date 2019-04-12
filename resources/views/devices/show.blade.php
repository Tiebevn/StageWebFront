@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h2>Details for {{$device->name}}</h2>

                        <form action="/ports/bulkEdit">
                            <div class="form-group">
                                <label for="operation">Bulk operations</label>
                                <select name="operation" id="operation">
                                    <option value="edit">Edit</option>
                                    <option value="reset">Reset</option>
                                </select>
                                <input type="submit">
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Select</th>
                                    <th>Port Name</th>
                                    <th>VLAN</th>
                                    <th>Status</th>
                                    <th>Speed</th>
                                    <th>Description</th>
                                </tr>
                                @foreach($ports as $port)
                                    <tr>
                                        <td><input type="checkbox" name="selected[]" value="{{$port->id}}"></td>
                                        <td><a href="{{route('ports.edit', $port->id)}}">{{$port->name}}</a></td>
                                        <td>{{$port->vlan}}</td>
                                        <td>Up</td>
                                        <td>1000T</td>
                                        <td>{{$port->description}}</td>
                                    </tr>

                                @endforeach
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
