@extends('layout')
@section('title', '教案一覧')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>教案一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th>概要</th>
            </tr>
            @foreach ($teaching_plans as $teaching_plan)
            <tr>
                <td>{{ $teaching_plan->id }}</td>
                <td>{{ $teaching_plan->updated_at }}</td>
                <td>{{ $teaching_plan->title }}</td>
                <td>{{ $teaching_plan->content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
