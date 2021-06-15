app.controller('DashboardController'
        , ['Dashboard', '$scope','$route','$timeout'
                    , function (Dashboard, $scope,$route,$timeout) {
                        $scope.$on('$viewContentLoaded', function () {
                    
                        });
                        $scope.submitForm = function() {
                            Dashboard.save($scope.list).then(function(){
                                $scope.successMessage = "Data Saved successfully";
                                $scope.successMessagebool = true;
                                $timeout(function () {
                                    $scope.successMessagebool = false;
                                    $route.reload();
                                }, 2000);
                            })
                            
                        }

                    }]);