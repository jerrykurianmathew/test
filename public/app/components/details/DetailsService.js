app.factory('Details', ['$http', function ($http) {
    var url = 'details';
    return {
        query: function (param) {
            return $http.get(url + (param ? param : ''));
        },
    };
}]);