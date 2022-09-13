@extends('front/auth/indexlogin')
@section('content')
        <h1>{{$article->title}}</h1>
        <p>
            {{$article->description}}
        </p>

        <form action="{{route('store.comment',$article->id)}}" method="POST">
            @csrf
            <label for="title">ارسال نظر:</label>
            <textarea name="description" id="" cols="30" rows="3"></textarea>
            <button type="submit" class="btn btn-primary btn-block btn-flat">ارسال</button>
        </form>

        @foreach($comments as $comment)
        <div>
            <ul>
                <li>
                    {{$comment->description}}
                </li>
                <hr>
            </ul>
        </div>
        @endforeach
@endsection