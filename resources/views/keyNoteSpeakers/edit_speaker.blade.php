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
<h3 class="page-title mt-5">Update speaker</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form action="../../keynote/update/{{$keynote->id}}" method="post">
     @csrf
     @method('PUT')


<div class="row formtype">
    <div class="col-md-4">
        <div class="form-group">
        <label>firstname</label>
        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{$keynote->firstname}}" required autocomplete="nom" autofocus>
        </div>
        </div>
<div class="col-md-4">
<div class="form-group">
<label>lastname</label>
<input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{$keynote->lastname}}" required autocomplete="nom" autofocus>
</div>
</div>

<div class="col-md-4">
    <div class="form-group">
    <label>website </label>
    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{$keynote->website}}" required autocomplete="nom" autofocus>
    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
        <label>description </label>
        <textarea  class="form-control @error('website') is-invalid @enderror"  name="description" id="description" cols="30" rows="10">{{$keynote->description}}</textarea>
        </div>
        </div>
<div class="col-md-4">
    <div class="form-group">
<button type="submit" class="btn btn-primary buttonedit ml-2">Update speaker</button>
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
