<?php
    //INCLUDE DATABASE FILE
    include('database.php');

    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    

    function getTasks()
    {
        $sql="SELECT * FROM tasks;";
        $result=mysqli($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            if($_POST['taskStatus'] = 1){
            echo '<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
            <div class="">
                <i class=""></i>
            </div>
            <div class="text-white-50">
                <div class=""><i class="bi bi-check-circle text-teal-400 me-2"></i>$title</div>
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
       ';
            }
        }







        // //CODE HERE
        $title =$_POST['title'];
        $tasks =$_POST['title'];
        $priority =$_POST['title'];
        $date=$_POST['title'];
        $description =$_POST['title'];
        //SQL SELECT
        // echo "Fetch all tasks";
    }


    function saveTask()
    {
        global $conn;
        //CODE HERE
        $Title = $_POST['title'];
        $TaskType = $_POST['taskType'];
        $Priority = $_POST['taskPrio'];
        $Status = $_POST['taskStatus'];
        $Date = $_POST['taskDate'];
        $Description = $_POST['taskDescrip'];
        //SQL INSERT
        $request="INSERT INTO tasks VALUES(null,'$Title','$TaskType','$Priority','$Status','$Date','$Description');";
        mysqli_query($conn,$request);
        $_SESSION['message'] = "Task has been added successfully !";
		header('location: index.php');
    }

//     function updateTask()
//     {
//         //CODE HERE
//         //SQL UPDATE
//         $_SESSION['message'] = "Task has been updated successfully !";
// 		header('location: index.php');
//     }

//     function deleteTask()
//     {
//         //CODE HERE
//         //SQL DELETE
//         $_SESSION['message'] = "Task has been deleted successfully !";
// 		header('location: index.php');
//     }

// ?>