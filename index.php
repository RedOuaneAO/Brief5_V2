<?php
    include('scripts.php');
	include('database.php');
?>


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

<body>

	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar" style="background:linear-gradient(#16213E ,#533483) ;">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="row">
				<div class="col-6">
					<ol class=" list-unstyled breadcrumb">
						<!--to make list items side by side -->
						<li class="breadcrumb-item"><a class="text-decoration-none text-white"
								href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header text-white fs-1">
						Scrum Board
					</h1>
					<?php if (isset($_SESSION['message'])): ?> 						<!--the message of adding or deleting task -->
						<div class="alert alert-green alert-dismissible fade show">
						<strong>Success!</strong>
						<?php 
						echo $_SESSION['message']; 
						unset($_SESSION['message']);
					?>
					<button type="button" class="btn-close" data-bs-dismiss="alert"></span>
				</div>
			<?php endif ?>
					<!-- END page-header -->
				</div>

				<div class="col-6 text-end mt-5 mb-5">
					<button class="text-white boBackcolor2 rounded-pill border-0 p-2 px-3 " data-bs-toggle="modal" data-bs-target="#modal-task"><i
							class="bi bi-plus-lg "></i> Add Task</button>
				</div>
			</div>
			<div class="row ">
				<div class="mb-4 col-md-4 col-sm-6">
					<div class=" p-2 rounded-top gradient-col">
						<h4 class="text-white">To do (<span id="to-do-tasks-count">5</span>)</h4>
					</div>
					<div id="to-do-tasks">
						<!-- TO DO TASKS HERE -->
						<?php
							$icon='<i class="bi bi-question-circle-fill text-teal-400 me-2"></i>';
							getTasks($icon,1);
						?>
					</div>

				</div>
				<div class="mb-4 col-md-4 col-sm-6">
					<div class="">
						<div class="p-2 rounded-top gradient-col">
							<h4 class="text-white">In Progress (<span id="in-progress-tasks-count">4</span>)</h4>

						</div>
						<div id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							<?php
								$icon='<i class="bi bi-arrow-repeat text-teal-400 me-2"></i>';
								getTasks($icon,2);
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="">
						<div class="gradient-col p-2 rounded-top" >
							<h4 class="text-white">Done (<span id="done-tasks-count">4</span>)</h4>

						</div>
						<div id="done-tasks">
							<!-- DONE TASKS HERE -->
							<?php
								$icon='<i class="bi bi-check-circle text-teal-400 me-2"></i>';
								getTasks($icon,3);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
			data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<!-- Modal content goes here -->
			<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header border-bottom-0 gradient-col">
					<h5 class="modal-title text-white">Add Task</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    <!--data-bs-dismiss : to exit modal -->
				  </div>
				  <div class="modal-body tasBackcol text-white">
					<form  id="formId" action="scripts.php" method="POST">
					<label >Title</label><br> 
					<input id="titleId" class="form-control mt-1" type="text" name="title"><br>						<!--form-control : let the input bar take 100 of the width-->
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

	<!-- ================== BEGIN core-js ================== -->
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/data.js"></script>
	<script src="assets/js/app.js">	</script>
	<!-- ================== END core-js ================== -->
</body>

</html>