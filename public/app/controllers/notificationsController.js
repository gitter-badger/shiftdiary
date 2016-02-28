app.controller('notificationsController', function($scope, $http, API_URL) {
    //retrieve diaries listing from API
    $http.get(API_URL + "notifications")
            .success(function(response) {
                $scope.notifications = response;
            });
    
    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New Notification";
                break;
            case 'edit':
                $scope.form_title = "Notification Detail";
                $scope.id = id;
                $http.get(API_URL + 'notifications/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.notification = response;
                        });
                console.dir($scope.notification);
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id) {
        var url = API_URL + "notifications";
        
        //append notification id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }
        console.log($.param($scope.notification));
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.notification),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            console.log(response);
            location.reload();
        }).error(function(response) {
            console.log(response);
            alert('This is embarassing. An error has occured. Please check the log for details');
        });
    }

    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
        	console.dir("notification: " + $scope.notification);
        	console.log("ID: " + id);
            $http({
                method: 'DELETE',
                //data: $.param($scope.diary),
                url: API_URL + 'notifications/' + id
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                    	console.log(id);
                        console.log(data);
                        alert('Unable to delete');
                    });
        } else {
            return false;
        }
    }
});