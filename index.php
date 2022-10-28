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
						<!-- <button class="w-100 p-3 border-0 border-bottom text-start tasBackcol">
								<i class=""></i>
							</div>
							<div class="text-white-50">
								<div class=""><i class="bi bi-question-circle-fill text-teal-400 me-2"></i>Keep all the
									updated requirements in one place</div>
								<div class="ms-3">
									<div class="">#1 created in 2022-10-08</div>
									<div class=""
										title="There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.">
										There is hardly anything more frustrating than having t...</div>
								</div>
								<div class="mt-3 ms-3">
									<span class="p-1 px-2 rounded-3  text-white boBackcolor2">High</span>
									<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Feature</span>
								</div>
							</div>
						</button>
						
						<button class="w-100 p-3 border-0 border-bottom text-start tasBackcol">
							<div class="">
								<i class=""></i>
							</div>
							<div class="text-white-50">
								<div class=""><i class="bi bi-question-circle-fill text-teal-400 me-2"></i>Consider creating
									an acceptance criteria list</div>
								<div class="ms-3">
									<div class="">#2 created in 2022-10-08</div>
									<div class="" title="Descriptive requirements are very helpful when it comes to understanding the context of a problem, yet finally it is good to precisely specify what is expected. Thus the developer will not have to look for the actual requirements in a long, descriptive text but he will be able to easily get to the essence. One might find that sometimes — when acceptance criteria are well defined — there is little or no need for any additional information. Example:
										a) User navigates to “/accounts” and clicks on red download CSV button
										b) Popup appears with two buttons: “This year” and “Last year”
										c) If user clicked on “Last year” download is initiated
										d) CSV downloaded includes following columns…">Descriptive requirements are very helpful when it comes...
									</div>
								</div>
								<div class="mt-3 ms-3">
									<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
									<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Feature</span>
								</div>
							</div>
						</button>
						<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
							<div class="">
								<i class=""></i>
							</div>
							<div class="text-white-50">
								<div class=""><i class="bi bi-question-circle-fill text-teal-400 me-2"></i>Provide examples,
									credentials, etc</div>
								<div class="ms-3">
									<div class="">#3 created in 2022-10-08</div>
									<div class=""
										title="If the expectation is to process or generate some file — attach an example of such a file. If the goal is to integrate what is being developed with some service, ensure your devs have access to this service and its documentation. This list could go on and on — the bottom line is — if there is something that our developer might make use of, try to foresee it and provide them with (access to) it.">
										If the expectation is to process or generate some file ...</div>
								</div>
								<div class="mt-3 ms-3">
									<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
									<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Feature</span>
								</div>
							</div>
						</button>
						<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
							<div class="">
								<i class=""></i>
							</div>
							<div class="text-white-50">
								<div class=""><i class="bi bi-question-circle-fill text-teal-400 me-2"></i>Annotate</div>
								<div class="ms-3">
									<div class="">#4 created in 2022-10-08</div>
									<div class=""
										title="The mockup provided can sometimes be confusing for developers. Especially if it contains much more content than the scope of the task described. Drop a couple of arrows, outlines and annotations here and there to emphasize what are the important parts of the mockup from the task requirements perspective.">
										The mockup provided can sometimes be confusing for deve...</div>
								</div>
								<div class="mt-3 ms-3">
									<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
									<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Feature</span>
								</div>
							</div>
						</button>
						<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
							<div class="">
								<i class=""></i>
							</div>
							<div class="text-white-50">
								<div class=""><i class="bi bi-question-circle-fill text-teal-400 me-2"></i>Use charts and
									diagrams</div>
								<div class="ms-3">
									<div class="">#5 created in 2022-10-08</div>
									<div class=""
										title="While it is not always necessary, sometimes it might be beneficial to prepare a flowchart, a block diagram or some other kind of concept visualization that will render it easy for the developer to comprehend the task and its scope.">
										While it is not always necessary, sometimes it might be...</div>
								</div>
								<div class="mt-3 ms-3">
									<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
									<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Feature</span>
								</div>
							</div>
						</button> -->

					</div>

				</div>
				<div class="mb-4 col-md-4 col-sm-6">
					<div class="">
						<div class="p-2 rounded-top gradient-col">
							<h4 class="text-white">In Progress (<span id="in-progress-tasks-count">4</span>)</h4>

						</div>
						<div id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							<!-- <button class="w-100 border-0 border-bottom p-3  text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-arrow-repeat text-teal-400 me-2"></i>Describe steps to reproduce an issue</div>
									<div class="ms-3">
										<div class="">#6 created in 2022-10-08</div>
										<div class="" title="including as many details as possible.">including as many
											details as possible.</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2" >High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 border-bottom p-3 text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-arrow-repeat text-teal-400 me-2"></i>Provide access</div>
									<div class="ms-3">
										<div class="">#7 created in 2022-10-08</div>
										<div class=""
											title="to the affected account and services if possible. It might be hard to reproduce the exact environment on a local machine.">
											to the affected account and services if possible. It mi...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 border-bottom p-3 text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-arrow-repeat text-teal-400 me-2"></i>Provide environment information</div>
									<div class="ms-3">
										<div class="">#8 created in 2022-10-08</div>
										<div class=""
											title="i.e., browser version, operating system version etc. Sometimes a list of installed browser plugins and extensions might be helpful as well.">
											i.e., browser version, operating system version etc. So...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 border-bottom p-3 text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-arrow-repeat text-teal-400 me-2"></i>Provide a link to an exception and/or a stack trace</div>
									<div class="ms-3">
										<div class="">#9 created in 2022-10-08</div>
										<div class=""
											title="as investigating those is usually the first step to take in resolving the problem.">
											as investigating those is usually the first step to tak...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button> -->
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
							<!-- <button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-check-circle text-teal-400 me-2"></i>Provide access to logs</div>
									<div class="ms-3">
										<div class="">#10 created in 2022-10-08</div>
										<div class=""
											title="as they can be helpful in reproducing the steps that caused the problem in the first place.">
											as they can be helpful in reproducing the steps that ca...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-check-circle text-teal-400 me-2"></i>Provide access to the affected server or database dump</div>
									<div class="ms-3">
										<div class="">#11 created in 2022-10-08</div>
										<div class=""
											title="If it is possible and when it does not violate security policies, it is usually helpful for the developer to access the original data that might have played a role in the problem.">
											If it is possible and when it does not violate security...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-check-circle text-teal-400 me-2"></i>Make a screencast</div>
									<div class="ms-3">
										<div class="">#12 created in 2022-10-08</div>
										<div class=""
											title="It is not always necessary, but many times a short screencast (or at least a screenshot) says more than a thousand words. While working on MacOS you can use QuickTime Player for the purpose but there are plenty of tools available for other operating systems as well.">
											It is not always necessary, but many times a short scre...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button>
							<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
								<div class="">
									<i class=""></i>
								</div>
								<div class="text-white-50">
									<div class=""><i class="bi bi-check-circle text-teal-400 me-2"></i>Provide contact information</div>
									<div class="ms-3">
										<div class="">#13 created in 2022-10-08</div>
										<div class=""
											title="of the person that reported the bug. This will not always be possible, but in some cases it might be advantageous and most effective if a developer can have a chat with a person that actually experienced the bug, especially if the steps to reproduce a problem are not deterministic.">
											of the person that reported the bug. This will not alwa...</div>
									</div>
									<div class="mt-3 ms-3">
										<span class="p-1 px-2 rounded-3 text-white boBackcolor2">High</span>
										<span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">Bug</span>
									</div>
								</div>
							</button> -->
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