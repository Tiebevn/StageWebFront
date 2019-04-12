@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h2>Set port template</h2>



                        <form action="/ports/bulkUpdate" method="post" onsubmit="return confirm('Do you really want to submit the form?');">
                            {{csrf_field()}}
                            <input type="hidden" value="{{$ports}}" name="selected" id="selected">
                            <div class="form-group">
                                <label for="template">Template</label>
                                <select name="template" id="template" class="form-control">
                                    @foreach($templates as $template)
                                        <option value="{{$template->id}}">{{$template->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" id="description" name="description" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
