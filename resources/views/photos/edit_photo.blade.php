<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title></title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@include('admin.header')
@include('admin.menu')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Update Photo</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form action="../../photo/update/{{$photo->id}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('PUT')

<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>photo:</label>
<input id="vpath" type="file" class="form-control @error('vpath') is-invalid @enderror" name="vpath" value="{{$photo->vpath}}" required autocomplete="nom" autofocus>
</div>
</div>
<div class="col-md-4">
    <div class="form-group">
    <label>title:</label>
    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$photo->title}}" required autocomplete="nom" autofocus>
    </div>
    </div>
<div class="col-md-4">
    <div class="form-group">
    <label>alt:</label>
    <input id="alt" type="text" class="form-control @error('alt') is-invalid @enderror" name="alt" value="{{$photo->alt}}" required autocomplete="nom" autofocus>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
        <label>order:</label>
        <input id="order" type="text" class="form-control @error('order') is-invalid @enderror" name="order" value="{{$photo->order}}" required autocomplete="nom" autofocus>
        </div>
        </div>


<div class="col-md-4">
    <div class="form-group">
<button type="submit" class="btn btn-primary buttonedit ml-2">Update Photo</button>
</div>
</div>
</div>
</form>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
