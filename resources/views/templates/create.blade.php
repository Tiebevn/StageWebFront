@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h2>Add a new template</h2>
                        <form method="post" action="{{ route('templates.store') }}">
                            <div class="form-group">
                                @csrf
                                <label for="name">Template name</label>
                                <input type="text" class="form-control" name="name"/>
                            </div>
                            <div class="form-group">
                                <label for="vlan">VLAN</label>
                                <input type="text" class="form-control" name="vlan"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
