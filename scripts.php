<?php
    //INCLUDE DATABASE FILE
    include('database.php');

    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_GET['id']))  {
        $i=$_GET['id'];
    deleteTask($i);
};
    

    function getTasks($icon,$a) {
        global $conn;

        $sql="SELECT * FROM tasks where status_id =$a";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $i=$row['id'];
            echo '<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol">
            <div class="text-white-50">
                <div class="">'.$icon.$row['title'].'</div>
                <div class="ms-3">
                    <div class="">'.$row['task_datetime'].'</div>
                    <div class=""
                        title="">
                        '.$row['description'].'</div>
                </div>
                <div class="mt-3 ms-3">
                    <span class="p-1 px-2 rounded-3 text-white boBackcolor2">'.$row['priority_id'].'</span>
                    <span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor">'.$row['type_id'].'</span>
                </div>
            </div>
            <div class="text-end"><a href="index.php?id='.$i.'"><i class="bi bi-trash text-danger-400"></i></a></div>
        </button>
       ';
            }  
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

function deleteTask($i) {
        //CODE HERE
        global $conn;
        $Delete="DELETE FROM tasks WHERE id=$i";
        mysqli_query($conn,$Delete);
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }

?>