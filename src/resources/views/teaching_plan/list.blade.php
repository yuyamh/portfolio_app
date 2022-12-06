@extends('layout')
@section('title', '教案一覧')
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>教案一覧</h2>
        @if (session('err_msg'))
            <p class="text-danger">{{ session('err_msg') }}</p>
        @endif
        <table class="table table-striped">
            <tr>
                <th>番号</th>
                <th>タイトル</th>
                <th>日付</th>
            </tr>
            @foreach ($teaching_plans as $teaching_plan)
                <tr>
                    <td>{{ $teaching_plan->id }}</td>
                    <td><a href="/teaching_plan/{{ $teaching_plan->id }}">{{ $teaching_plan->title }}</a></td>
                    <td>{{ $teaching_plan->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
