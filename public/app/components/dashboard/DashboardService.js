app.factory('Dashboard', ['$http', function ($http) {
    var url = 'dashboard';
    return {
        query: function (param) {
            return $http.get(url + (param ? param : ''));
        },
        save: function (item) {
                return $http.post(url, JSON.stringify(item));
        },
    };
}]);