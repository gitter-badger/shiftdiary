app.controller('textsController', function($scope, $http, API_URL) {
    //retrieve texts listing from API
    $http.get(API_URL + "texts")
            .success(function(response) {
                $scope.texts = response;
            });
    
    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Add New text";
                break;
            case 'edit':
                $scope.form_title = "text Detail";
                $scope.id = id;
                $http.get(API_URL + 'texts/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.text = response;
                        });
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //save new record / update existing record
    $scope.save = function(modalstate, id) {
        var url = API_URL + "texts";
        
        //append text id to the URL if the form is in edit mode
        if (modalstate === 'edit'){
            url += "/" + id;
        }
        
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.text),
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
        	console.dir("text: " + $scope.text);
        	console.log("ID: " + id);
            $http({
                method: 'DELETE',
                //data: $.param($scope.text),
                url: API_URL + 'texts/' + id
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