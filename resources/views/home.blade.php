<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sales and Invertory Management System">
    <meta name="author" content="Jerry">
    <title>Test App</title>

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="app/css/app.css" rel="stylesheet">
    <link href="app/assets/css/all.css" rel="stylesheet">
    <link href="app/assets/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="app/assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Scripts-->

    <script src="app/assets/js/jquery.js" type="text/javascript"></script>
    <script src="app/assets/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="app/assets/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="app/assets/js/angular.js" type="text/javascript"></script>
    <script src="app/assets/js/angular-route.js" type="text/javascript">
    <script src ="app/assets/js/jquery.slim.js"type = "text/javascript"></script>
    <script src ="app/assets/js/angular-datatables.js"type = "text/javascript"></script>
    <script src="app/components/main.js" type="text/javascript"></script>
    <script src="app/js/app.js" type="text/javascript"></script>
    <script src="app/assets/js/sb-admin-2.js" type="text/javascript">
    <script src="app/assets/js/jquery.easing.js" type="text/javascript"></script>

    <script src="app/components/dashboard/DashboardController.js"></script>
    <script src="app/components/dashboard/DashboardService.js"></script>
    <script src="app/components/details/DetailsController.js"></script>
    <script src="app/components/details/DetailsService.js"></script>


</head>
<body id="page-top">
    <div id="wrapper">
        
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" class="bg">
                <div ng-include="'app/components/tpl/topbar.html'"> </div>
                <div class="container-fluid" ng-view>

                </div>
            </div>
        </div>

    </div>
    <script>
        $("#sidebarToggle, #sidebarToggleTop").on('click', function (e) {
            $("body").toggleClass("sidebar-toggled");
            $(".sidebar").toggleClass("toggled");
            if ($(".sidebar").hasClass("toggled")) {
                $('.sidebar .collapse').collapse('hide');
            };
        });

    </script>
</body>

</html>
