@extends('layout')
@section('title', '教案詳細')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>{{ $teaching_plan->title }}</h2>
        <span>投稿日: {{ $teaching_plan->created_at }}</span>
        <span>更新日: {{ $teaching_plan->updated_at }}</span>
        <p>{{ $teaching_plan->content }}</p>
    </div>
</div>
@endsection
