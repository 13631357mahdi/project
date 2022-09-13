@extends('back.admin.Categories.indexcategory')
@section('content') 
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
  <b>ایجاد دسته بندی</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">فرم زیر را تکمیل کنید و ذخیره را بزنید</p>
    <form action="{{route('store.category')}}" method="post">
      @csrf
      <div class="form-group has-feedback">
        <label for="title">عنوان دسته بندی</label>
        <input type="text" class="form-control" name="title">
      </div>
      @error('title')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="form-group has-feedback">
        <label for="description">توضیحات</label>
     <textarea id="" cols="30" rows="3" name="description"></textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">دخیره</button>
          <a href="{{route('index.category')}}" class="btn btn-primary btn-block btn-flat">انصراف</a>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection