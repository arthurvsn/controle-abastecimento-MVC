angular.module('postLogin', [])
    .controller('PostController', ['$scope', '$http', function($scope, $http) {        
            this.postForm = function() {
                var encodedString = 'username=' +
                    encodeURIComponent(this.inputData.username) +
                    '&password=' +
                    encodeURIComponent(this.inputData.password);
 
                $http({
                    method: 'POST',
                    url: '/logar',
                    data: encodedString,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                })
                .then(function(response) {
                        console.log(response.data);
                        if ( response.data === "sucess") {
                            window.location.href = '/painel';
                            //$scope.errorMsg = "Username and password do not match.";
                        }else {
                            $scope.errorMsg = "Username and password do not match.";
                        }S
                })
            }
    }]);
angular.module('getCadastro', [])