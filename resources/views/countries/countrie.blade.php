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
    <!-- Header -->
    @include('admin.header')
    @include('admin.menu')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Ajouter countrie</h3>
                    </div>
                </div>
            </div>

            <!-- Contenu du formulaire -->
            <div class="row">
                <div class="col-lg-12">


                        <!-- Tableau de données -->
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th> name</th>
                                                <th>action</th>
                                            </tr>
                                            @foreach($countries as $countrie)
                                            <tr>
                                                <td>{{$countrie->id}}</td>
                                                <td>{{$countrie->name}}</td>
                                                <td>
                                                    <a href="countrie/edit/{{$countrie->id}}"><button type="submit" class="btn btn-primary">edit</button></a>
                                                    <form action="countrie/delete/{{$countrie->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>

                    </form>
                </div>
                <br><br><br>
            </div>
            <br><br><br>
            <!-- Bouton pour afficher le formulaire -->
            <button onclick="openFormAdd()" class="btn btn-success ">Show Form</button>

            <!-- Modal pour afficher le formulaire -->
            <div id="modalBackgroundAdd" style="display: none; position: fixed; top: 0; left: 0; width: 120%; height: 120%; background-color: rgba(0,0,0,0.5);">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 40px;width: 40%; text-align: center; font-size: 16px;">
                    <!-- Votre formulaire ici -->
                    <form action="countrie" method="post" id="linkForm">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="name"> Name :</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="nom" autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary buttonedit ml-2">Add Countrie</button>
                    </form>
                    <button onclick="closeFormAdd()" class="btn btn-danger mt-2">Close Form</button>
                </div>
            </div>

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
            <script>
                function openFormAdd() {
                    document.getElementById('modalBackgroundAdd').style.display = 'flex';
                }

                function closeFormAdd() {
                    document.getElementById('modalBackgroundAdd').style.display = 'none';
                }
            </script>
        </div>
    </div>
</body>
</html>
