var urlHome = "http://localhost/vt_blog/";
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    //terms
    .when("/terms", {
        templateUrl : urlHome+"terms"
    })
    .when("/terms/create", {
        templateUrl : urlHome+"terms/create"
    })
    .when("/terms/:id/edit", {
        templateUrl : function(routeParams){
            return urlHome+"terms/"+routeParams.id+"/edit";
        }
    })
    .when("/terms/:id/delete", {
        templateUrl : function(routeParams){
            return urlHome+"terms/"+routeParams.id+"/delete";
        }
    })
    //posts
    .when("/posts:query?", {
        templateUrl : function(routeParams){
            return urlHome+"posts?"+$.param(routeParams);
        }
    })
    .when("/posts/create", {
        templateUrl : urlHome+"posts/create"
    })
    .when("/posts/:id/edit", {
        templateUrl : function(routeParams){
            return urlHome+"posts/"+routeParams.id+"/edit";
        }
    })
    .when("/posts/:id/delete", {
        templateUrl : function(routeParams){
            return urlHome+"posts/"+routeParams.id+"/delete";
        }
    })
    //medias
    .when("/medias:query?", {
        templateUrl : function(routeParams){
            return urlHome+"medias?"+$.param(routeParams);
        }
    })
    .when("/medias/create", {
        templateUrl : urlHome+"medias/create"
    })
    .when("/medias/:id/edit", {
        templateUrl : function(routeParams){
            return urlHome+"medias/"+routeParams.id+"/edit";
        }
    })
    .when("/medias/:id/delete", {
        templateUrl : function(routeParams){
            return urlHome+"medias/"+routeParams.id+"/delete";
        }
    })
    //configs
    .when("/configs", {
        templateUrl : urlHome+"configs"
    })
    .when("/configs/create", {
        templateUrl : urlHome+"configs/create"
    })
    //users
    .when("/users", {
        templateUrl : urlHome+"users"
    })
    .when("/users/create", {
        templateUrl : urlHome+"users/create"
    })
    .when("/users/:id/edit", {
        templateUrl : function(routeParams){
            return urlHome+"users/"+routeParams.id+"/edit";
        }
    })
});