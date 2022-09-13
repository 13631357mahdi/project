@extends('front/auth/indexlogin')
@section('content')
    @foreach($articles as $article)
        <div>
            <div>
                 <div class="card-header text-uppercase">{{$article->title}}</div>
                    <div class="card-block">
                        <p><?php echo substr($article->description,0,200).'...';?></p>
                    </div>
                    <a href="{{route('front.show.article', $article->id)}}" class="btn btn-primary-outline">بیشتر...</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

