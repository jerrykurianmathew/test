app.controller('DetailsController'
        , ['Details', '$scope','$route','$timeout'
                    , function (Details, $scope,$route,$timeout) {
                        $scope.$on('$viewContentLoaded', function () {
                            Details.query().then(function(data){
                                $scope.details =data.data;
                                
                            })
                            console.log($scope.details);
                        })
                    }]);