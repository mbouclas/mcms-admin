(function () {
    'use strict';

    angular.module('mcms.components')
        .provider('dropzoneOptions', function () {
            /*
             *	Add default options here
             **/
            var defOps = {
                //Add your options here
            };

            return {
                setOptions: function (newOps) {
                    angular.extend(defOps, newOps);
                },
                $get: function () {
                    return defOps;
                }
            }
        })
        .directive('dropZone', Directive);

    Directive.$inject = ['$timeout', 'dropzoneOptions'];

    function Directive($timeout, dropzoneOps) {
        return {
            restrict: 'AE',
            template: '<div></div>',
            replace: true,
            scope: {
                options: '=?', //http://www.dropzonejs.com/#configuration-options
                callbacks: '=?', //http://www.dropzonejs.com/#events
                methods: '=?' //http://www.dropzonejs.com/#dropzone-methods
            },
            link: function (scope, iElem, iAttr) {
                if (typeof dropzoneOps.url == 'undefined') {
                    //set a watch for options
                    var watcher = scope.$watch('options', function (value) {
                        if (!value) {
                            return;
                        }
                        setUp();
                        watcher();
                    })
                    return;
                }

                setUp();

                function setUp() {
                    //Set options for dropzone {override from dropzone options provider}
                    scope.options = scope.options || {};
                    var initOps = angular.extend({}, dropzoneOps, scope.options);


                    //Instantiate dropzone with initOps
                    var dropzone = new Dropzone(iElem[0], initOps);


                    /*********************************************/


                    //Instantiate Dropzone methods (Control actions)
                    scope.methods = scope.methods || {};

                    scope.methods.getDropzone = function () {
                        return dropzone; //Return dropzone instance
                    };

                    scope.methods.getAllFiles = function () {
                        return dropzone.files; //Return all files
                    };

                    var controlMethods = [
                        'removeFile', 'removeAllFiles', 'processQueue',
                        'getAcceptedFiles', 'getRejectedFiles', 'getQueuedFiles', 'getUploadingFiles',
                        'disable', 'enable', 'confirm', 'createThumbnailFromUrl'
                    ];

                    angular.forEach(controlMethods, function (methodName) {
                        scope.methods[methodName] = function () {
                            dropzone[methodName].apply(dropzone, arguments);
                            if (!scope.$$phase && !scope.$root.$$phase) scope.$apply();
                        }
                    });


                    /*********************************************/


                    //Set invents (callbacks)
                    if (scope.callbacks) {
                        var callbackMethods = [
                            'drop', 'dragstart', 'dragend',
                            'dragenter', 'dragover', 'dragleave', 'addedfile', 'removedfile',
                            'thumbnail', 'error', 'processing', 'uploadprogress',
                            'sending', 'success', 'complete', 'canceled', 'maxfilesreached',
                            'maxfilesexceeded', 'processingmultiple', 'sendingmultiple', 'successmultiple',
                            'completemultiple', 'canceledmultiple', 'totaluploadprogress', 'reset', 'queuecomplete'
                        ];
                        angular.forEach(callbackMethods, function (method) {
                            var callback = (scope.callbacks[method] || angular.noop);
                            dropzone.on(method, function () {
                                callback.apply(null, arguments);
                                if (!scope.$$phase && !scope.$root.$$phase) scope.$apply();
                            });
                        });
                    }
                }
            }
        }
    }
})();
