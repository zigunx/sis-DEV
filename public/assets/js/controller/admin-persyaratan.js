/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
angular.module('admin').controller('persyaratan', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    $scope.jurusan = {};

    $http.get(baseURL.url('api/jurusandropdown')).success(function(data) {
        $scope.jurusan = data;
    });
});

angular.module('admin').controller('persyaratancreate', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
});
angular.module('admin').controller('persyaratanedit', function($scope, $http, $filter, $timeout, baseURL) {
    $scope.data = {};
    
    $scope.alerts = [];
    $scope.closeAlert = function(index) {
        $scope.alerts.splice(index, 1);
    };
    var id = $filter('_uriseg')(6);
    $http.get(baseURL.url('api/persyaratan/') + id).success(function(data) {
        $scope.data = data;
        console.log(data);
        $scope.data['nama_mahasiswa'] = data.mahasiswa.nama_mahasiswa;
        $scope.data['jurusan'] = data.jurusan.nama_jurusan;
        
    })
    $scope.submit = function() {
        $http.put(baseURL.url('admin/persyaratan/') + id, $scope.data).success(function(data) {
            if (data.success) {
                $timeout(function() {
                    window.location.replace(baseURL.url('admin/persyaratan'));
                }, 3000);
            }
        }).error(function(e,status) {
            if (status === 422) {
                var x;
                for (x in e) {
                    $scope.alerts.push({'type': "danger", 'msg': (e[x][0])});
                }
                $timeout(function() {
                    $scope.alerts = [];
                }, 5000);
            }
        });
    }
});