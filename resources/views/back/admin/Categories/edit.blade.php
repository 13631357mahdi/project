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
  <b>ویرایش دسته بندی</b>
  </div>
  <!---->
  <div class="login-box-body">
    <p class="login-box-msg">فرم زیر را تکمیل کنید و ذخیره را بزنید</p>
    <form action="{{route('update.category',$category->id)}}" method="post">
        @method('put')
      @csrf
      <div class="form-group has-feedback">
        <label for="title">عنوان دسته بندی</label>
        <input type="text" class="form-control" name="title" value="{{$category->title}}">
      </div>
      @error('title')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="form-group has-feedback">
        <label for="description">توضیحات</label>
     <textarea id="" cols="30" rows="3" name="description">{{$category->description}}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ویرایش</button>
          <a href="{{route('index.category')}}" class="btn btn-primary btn-block btn-flat">انصراف</a>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
    <!-- /.login-box-body -->
</div>
@endsection
