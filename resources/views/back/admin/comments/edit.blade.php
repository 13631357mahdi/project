@extends('back.admin.Categories.indexcategory')
@section('content')
<body class="hold-transition login-page">
    @include('back/admin/sidebar')
    @include('back/admin/Header')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="login-box">
  <div class="login-logo">
  <b>ویرایش کامنت</b>
  </div>
  <!---->
  <div class="login-box-body">
    <p class="login-box-msg">فرم زیر را تکمیل کنید و ذخیره را بزنید</p>
    <form action="{{route('update.comment',$comment->id)}}" method="post">
        @method('put')
      @csrf
      <div class="form-group has-feedback">
        <label for="description">کامنت</label>
     <textarea id="" cols="30" rows="3" name="description">{{$comment->description}}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ویرایش</button>
          <a href="{{route('index.comment')}}" class="btn btn-primary btn-block btn-flat">انصراف</a>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
    <!-- /.login-box-body -->
</div>
@endsection
