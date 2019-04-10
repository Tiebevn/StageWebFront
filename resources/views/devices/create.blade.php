@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Devices</h1>
                        <form method="post" action="{{ route('devices.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="name">Device name</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="ip">Device IP</label>
                                <input type="text" class="form-control" name="ip"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
