<?php //include base_path() . '/public/templates/sb-admin-2/pages/index.html'; ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="/templates/sb-admin-2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/templates/sb-admin-2/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/templates/sb-admin-2/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/templates/sb-admin-2/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/templates/sb-admin-2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('admin')}}">Admin Dashboard - Visits overview</a>
            </div>

        </nav>

        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Visits
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Visit ID</th>
                                        <th>User</th>
                                        <th>Number of visits to homepage</th>
                                        <th>Client IP</th>
                                        <th>Visit started</th>
                                        <th>Visit ended</th>
                                        <th>Device</th>
                                        <th>Model</th>
                                        <th>Platform</th>
                                        <th>Mobile device</th>
                                        <th>Language</th>
                                        <th>Agent</th>
                                        <th>Referer</th>
                                        <th>Cookie</th>
                                        <th>Logs</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($visits as $visit)
                                    <tr class="odd gradeX">
                                        <td><a href="{{route('logs', $visit->id)}}">{{ $visit->id }}</a></td>
                                        <td>{{ $visit->user->email ?? null }}</td>
                                        <td>{{ count($visit->log)}}</td>
                                        <td>{{ $visit->client_ip}}</td>
                                        <td>{{ $visit->created_at }}</td>
                                        <td>{{ $visit->updated_at }}</td>
                                        <td>{{ $visit->device->kind }}</td>
                                        <td>{{ $visit->device->model}}</td>
                                        <td>{{ $visit->device->platform}}</td>
                                        <td>{{ $visit->device->is_mobile ? 'Yes' : 'No'}}</td>
                                        <td>{{ $visit->language->preference }}</td>
                                        <td><a href="{{route('agent', $visit->id)}}">Check agent</a></td>
                                        <td><a href="{{route('referer', $visit->id)}}">Check referer</a></td>
                                        <td><a href="{{route('cookie', $visit->id)}}">Check cookie</a></td>
                                        <td><a href="{{route('logs', $visit->id)}}">Check logs</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>
    <a href="{{route('home')}}" class="btn btn-primary">Go home!</a>
<!-- /#wrapper -->

<!-- jQuery -->
    <footer>
    <script src="/templates/sb-admin-2/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/templates/sb-admin-2/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/templates/sb-admin-2/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/templates/sb-admin-2/vendor/raphael/raphael.min.js"></script>
    <script src="/templates/sb-admin-2/vendor/morrisjs/morris.min.js"></script>
    <script src="/templates/sb-admin-2/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/templates/sb-admin-2/dist/js/sb-admin-2.js"></script>
</footer>
</body>

</html>
