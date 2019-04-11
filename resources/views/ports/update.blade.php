@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h2>Set port template</h2>
                        <form method="post" action="/ports/{{$port->id}}" id="editPort" onsubmit="return confirm('Do you really want to submit the form?');">
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
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                        <h3>History</h3>

                        <table>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
