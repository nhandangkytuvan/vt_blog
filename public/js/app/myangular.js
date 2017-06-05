var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/http://localhost/vt_blog/terms", {
        templateUrl : "http://localhost/vt_blog/terms"
    })
    .when("/http://localhost/vt_blog/terms/create", {
        templateUrl : "http://localhost/vt_blog/terms/create"
    })
    .when("/http://localhost/vt_blog/terms/:id/edit", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/terms/"+routeParams.id+"/edit";
        }
    })
    .when("/http://localhost/vt_blog/posts:query?", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/posts?"+$.param(routeParams);
        }
    })
    .when("/http://localhost/vt_blog/posts/create", {
        templateUrl : "http://localhost/vt_blog/posts/create"
    })
    .when("/http://localhost/vt_blog/posts/:id/edit", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/posts/"+routeParams.id+"/edit";
        }
    })
    .when("/http://localhost/vt_blog/medias:query?", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/medias?"+$.param(routeParams);
        }
    })
    .when("/http://localhost/vt_blog/medias/create", {
        templateUrl : "http://localhost/vt_blog/medias/create"
    })
    .when("/http://localhost/vt_blog/medias/:id/edit", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/medias/"+routeParams.id+"/edit";
        }
    })
    .when("/http://localhost/vt_blog/configs", {
        templateUrl : "http://localhost/vt_blog/configs"
    })
    .when("/http://localhost/vt_blog/configs/create", {
        templateUrl : "http://localhost/vt_blog/configs/create"
    })
    .when("/http://localhost/vt_blog/users", {
        templateUrl : "http://localhost/vt_blog/users"
    })
    .when("/http://localhost/vt_blog/users/create", {
        templateUrl : "http://localhost/vt_blog/users/create"
    })
    .when("/http://localhost/vt_blog/users/:id/edit", {
        templateUrl : function(routeParams){
            return "http://localhost/vt_blog/users/"+routeParams.id+"/edit";
        }
    })
});