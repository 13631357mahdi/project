<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pagetitle}}</title>
      <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="back/dist/css/bootstrap-theme.css">
  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="back/dist/css/rtl.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="back/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="back/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="back/dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="back/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
  
<script src="https://cdn.tiny.cloud/1/mhi5g204hd2kkujz2dkajl2f9imeu8brje82vu9876y8kcvu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
5  
  
<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
@include('back/admin/sidebar')
@include('back/admin/Header')
@if(session('success'))
        <div class="alert alert-success">
          {{session('success')}}
        </div>
    @endif
<a href="{{route('create.Article')}}" class="badge badge-success">مدیریت مطالب</a>
<table class="table table-hover">
    <head>
        <tr>
            <th>عنوان</th>
            <th>نام مستعار</th>
            <th>دسته بندی</th>
            <th>بازدید</th>
            <th>وضعیت</th>
            <th>مدیریت</th>
        </tr>
    </head>
    <tbody>
    @foreach ($articles as $article)
    @switch($article->status)
      @case(1)
      @php
      $url = route('updatestatus.Article', $article->id);
      $status = '<a href="'.$url.'" class="badge badge-success">منتشر شده</a>'@endphp
      @break
      @case(0)
      @php
      $url = route('updatestatus.Article', $article->id);
      $status = '<a href="'.$url.'" class="badge badge-warning">منتشر نشده</a>'@endphp
      @break
      @default
      @endswitch
    <tr>
            <td>{{$article->title}}</td>
            <td>{{$article->slug}}</td>
            <td>
              @foreach($article->categories()->pluck('title') as $category)
                <span class="badge badge-warning">{{$category}}</span>
              @endforeach
            </td>
            <td>{{$article->hit}}</td>
            <td>{!!$status!!}</td>
            <td>
                <a href="{{route('edit.Article', $article->id)}}" class="badge badge-success">ویرایش</a>
                <a href="{{route('destroy.Article', $article->id)}}" 
                onclick="return confirm('ایا ایتم مورد نظر حدف شود؟')" class="badge badge-warning">حذف</a>
            </td>
    </tr>
      @endforeach
  </tbody>
</table>
{{$articles->links()}}
    <!-- jQuery 3 -->
    <script src="back/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="back/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="back/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>