@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>求租信息列表</strong></div>
                    <div class="panel-body">
                        @foreach($data as $item)
                            <p> <label for="name" class="col-md-4 control-label"><a href="/post/{{ $item['pid'] }}">{{ $item['title'] }}</a> </label></p>
                            <br/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
