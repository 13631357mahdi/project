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
  <b>ایجاد مطلب</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">فرم زیر را تکمیل کنید و ذخیره را بزنید</p>
    <form action="{{route('store.Article')}}" method="post">
      @csrf
      <div class="form-group has-feedback">
        <label for="title">عنوان مطلب</label>
        <input type="text" class="form-control" name="title">
      @error('title')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      </div>
      <div class="form-group has-feedback">
        <label for="slug">نام مستعار</label>
        <input type="text" class="form-control" name="slug">
      @error('slug')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      </div>
      <div class="form-group has-feedback">
        <label for="description">محتوای مطلب</label>
     <textarea id="textarea" cols="30" rows="5" name="description"></textarea>
      @error('description')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      </div>
      <div class="form-group has-feedback">
        <label for="status">وضعیت</label>
        <select name="status" class="form-control">
            <option value="0">منتشر نشده</option>
            <option value="1">منتشر شده</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <label for="slug"> انتخاب دسته بندی</label>
        <div id="output"></div>
        <select name="categories[]" class="chosen-select" multiple style="width: 400px">
              @foreach($categories as $cat_id=>$cat_title)
              <option value="{{$cat_id}}">{{$cat_title}}</option>
              <option value="{{$cat_id}}">{{$cat_title}}</option>
              <option value="{{$cat_id}}">{{$cat_title}}</option>
              @endforeach
        </select>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">دخیره</button>
        <a href="{{route('index.Article')}}" class="btn btn-primary btn-block btn-flat">انصراف</a>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection