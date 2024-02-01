<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Espace admin</title>
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
    <!-- Header -->
@include('admin.header')
@include('admin.menu')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->


            <!-- Contenu du formulaire -->

                <br><br><br>
            </div>
            <br><br><br>
            <!-- Bouton pour afficher le formulaire -->


            <!-- Modal pour afficher le formulaire -->


            <!-- Ajoutez les balises de script nécessaires -->
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

        </div>
    </div>
</body>
</html>
