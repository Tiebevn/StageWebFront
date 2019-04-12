@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h2>Set port template</h2>



                        <form action="/ports/bulkUpdate" method="post">
                            {{csrf_field()}}
                            <input type="hidden" value="{{$ports}}" name="selected" id="selected">
                            <input type="submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
