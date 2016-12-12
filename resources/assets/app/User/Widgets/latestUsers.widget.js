(function(){
    'use strict';

    angular.module('mcms.user')
        .directive('latestUsersWidget', Component);

    Component.$inject = ['configuration', 'PageService'];

    function Component(Config, Page){

        return {
            templateUrl: Config.templatesDir + "User/Widgets/latestUsers.widget.html",
            restrict : 'E',
            link : function(scope, element, attrs, controllers){
                scope.Options = {limit : 5, showToolbar : false};

            }
        };
    }
})();
