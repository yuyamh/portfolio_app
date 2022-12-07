@extends('layout')
@section('title', '編集画面')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>教案編集フォーム</h2>
        <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
        @csrf
            <input type="hidden" name="id" value="{{ $teaching_plan->id }}">
            <div class="form-group">
                <label for="title">
                    タイトル
                </label>
                <input id="title" name="title" class="form-control" value="{{ $teaching_plan->title }}" type="text">
                @if ($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="content">
                    概要
                </label>
                <textarea id="content" name="content" class="form-control" rows="4">{{ $teaching_plan->content }}</textarea>
                @if ($errors->has('content'))
                    <div class="text-danger">
                        {{ $errors->first('content') }}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('teaching_plans') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    更新する
                </button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection
