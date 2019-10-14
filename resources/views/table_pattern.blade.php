@extends('layout.header')

@section('content')
    @includeWhen(!empty($result['data']['h1']),'table_parts.h1',['h1' => $result['data']['h1']])
    @includeWhen(!empty($result['data']['h2']),'table_parts.h2',['h2' => $result['data']['h2']])
    @includeWhen(!empty($result['data']['h3']),'table_parts.h3',['h3' => $result['data']['h3']])
    @if(empty($result['data']['h1']) and empty($result['data']['h2']) and empty($result['data']['h3']))
        <div class="row">
            <div class="col mt-2">
                <div class="alert alert-info">
                    <span>Get параментры не указаны</span>
                </div>
            </div>
        </div>
    @endif
@endsection