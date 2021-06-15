var app = angular.module("app", ['ngRoute','datatables']);

            app.config(function ($routeProvider) {
            $routeProvider
                    .when("/", {
                    templateUrl: "app/components/details/list.html",
                    controller: "DetailsController",    
                    })
                 
            });