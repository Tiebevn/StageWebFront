@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h2>Set port template</h2>
                        <form method="post" action="/ports/{{$port->id}}">
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                @csrf
                                <label for="template">Template</label>
                                <select name="template" class="form-control" id="template">
                                    @foreach($templates as $template)
                                        <option value="{{$template->id}}">{{$template->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" name="description" id="description" value="{{$port->description}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>


                          @if(count($changes))
                            <h3>History</h3>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Time</th>
                                    <th>User</th>
                                    <th>Template</th>
                                </tr>
                                @foreach($changes as $change)
                                    <tr>
                                        <td>{{$change->created_at}}</td>
                                        <td>{{$change->user->name}}</td>
                                        <td>{{$change->template->name}}</td>
                                    </tr>
                                @endforeach
                            </table>
                          @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
