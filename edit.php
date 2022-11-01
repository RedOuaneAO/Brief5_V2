<!-- <?php
include('script.php')
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
	<!-- ================== END core-css ================== -->
</head>

<body  style="background:#16213E;">
<?php
echo '	<div>
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header border-bottom-0 gradient-col">
            <h5 class="modal-title text-white">Edit Task</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    <!--data-bs-dismiss : to exit modal -->
          </div>
          <div class="modal-body tasBackcol text-white">
            <form  id="formId" action="scripts.php" method="POST">
            <label >Title</label><br> 
            <input id="titleId" class="form-control mt-1" type="text" name="title" value=""><br>						<!--form-control : let the input bar take 100 of the width-->
            <label class="mt-1">Type</label><br>
            <div class="d-flex mt-2" >
                <div class="ms-4">
                    <input class="form-check-input"  id="feature" type="radio" name="taskType" value="1" checked><label class="ms-2" for="feature">Feature</label>
                </div><br>
                <div class="ms-5">
                    <input class="form-check-input" id="bug" type="radio" name="taskType" value="2" ><label class="ms-2 " for="bug">Bug</label>
                </div><br>
            </div>
            <label class="mt-2">Priority</label><br>
            <select id="prt" class=" mt-1 form-select " name="taskPrio">										<!--form-select : to let the select bar take 100 of the width-->
                <option class="fw-bold" disabled selected value="">Please select</option>
                <option class="fw-bold" value="1">High</option>
                <option class="fw-bold" value="2">Medium</option>
                <option class="fw-bold" value="3">Low</option>
                <option class="fw-bold" value="4">Critical</option>
            </select><br>
            <label class="mt-1">Status</label><br>
            <select id="stt" class="form-select  mt-1" name="taskStatus">              
                <option class="fw-bold" selected disabled value="">Please select</option>
                <option class="fw-bold" value="1">To Do</option>
                <option class="fw-bold" value="2">In Progress</option>
                <option class="fw-bold" value="3">Done</option>
            </select><br>
            <label class="mt-1">Date</label><br>
            <input id="date" class="form-control mt-1" type="date" name="taskDate"><br>						
            <label class="mt-1">Description</label><br>
            <textarea id="desc" class="w-100 p-4 mt-1" name="taskDescrip"></textarea>
            <div class="modal-footer tasBackcol border-top-0">
                 <button type="button" class="btn btn-white text-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" name="save" class="btn btn-danger" id="saveBtn" data-bs-dismiss="modal">Save</button>
          </div>
        </form>
          </div>	 
        </div>
      </div>
</div>
</div>
'
?>
</body>

</html>
