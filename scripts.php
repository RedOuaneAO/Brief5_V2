<?php
    //INCLUDE DATABASE FILE
    include('database.php');

    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))       saveTask();
    if(isset($_POST['update']))     updateTask();    
    if(isset($_GET['id']))          deleteTask();
  
/*-----------------------------------------------------------------getFunction---------------------------------------------------*/

function getTasks($icon,$tabNum) {
        global $conn;
        $inner="SELECT tasks.id, tasks.title, tasks.status_id, types.name AS typeTitle ,priorities.name AS priorityTitle, tasks.task_datetime,
            tasks.description FROM  tasks  INNER JOIN types  ON tasks.type_id = types.id
           INNER JOIN priorities ON tasks.priority_id = priorities.id WHERE status_id =$tabNum";
        $result=mysqli_query($conn,$inner);
        while($row=mysqli_fetch_assoc($result)){
            $i=$row['id']; 
            echo '<button class="w-100 border-0 p-3 border-bottom text-start tasBackcol" id="'.$i.'">
                 <input type="hidden" class="task-class" taskStatus="'.$row['status_id'].'">
                <div class="text-white-50">
                    <div >
                        '.$icon.' <span class="task-title">'.$row['title'].'</span>
                    </div>
                <div class="ms-3">
                    <div>
                    #'.$i.' creatded in <span class="task-date">'.$row['task_datetime'].'</span>
                    </div>
                    <div class="task-description"  title="'.$row['description'].'">
                    '.substr($row['description'],0,50).'...
                    </div>
                </div>
                <div class="mt-3 ms-3">
                    <span class="p-1 px-2 rounded-3 text-white boBackcolor2 task-priority">'.$row['priorityTitle'].'</span>
                    <span class="p-1 px-2 rounded-3 ms-2 text-danger boBackcolor task-type">'.$row['typeTitle'].'</span>
                </div>
            </div>
            <div class="text-end"><a href="index.php?id='.$i.'"><i class="bi bi-trash text-danger-400"></i></a>
            <a ><i class="bi bi-pencil-square text-green-400" onclick="popUp('.$i.')" ></i></a></div>
        </button>
       ';
            }  
    }

/*-----------------------------------------------------------------saveFunction---------------------------------------------------*/
function saveTask(){
        global $conn;
        //CODE HERE
        $Title = $_POST['title'];
        $TaskType = $_POST['taskType'];
        $Priority = $_POST['taskPrio'];
        $Status = $_POST['taskStatus'];
        $Date = $_POST['taskDate'];
        $Description = $_POST['taskDescrip'];

        $request="INSERT INTO tasks VALUES(null,'$Title','$TaskType','$Priority','$Status','$Date','$Description');";
        mysqli_query($conn,$request);
        //SQL INSERT
        $_SESSION['message'] = "Task has been added successfully !";
		header('location: index.php');
    }



/*-----------------------------------------------------------------deleteFunction---------------------------------------------------*/
function deleteTask() {
        //CODE HERE
        global $conn;
        $i=$_GET['id'];
        $Delete="DELETE FROM tasks WHERE id=$i";
        mysqli_query($conn,$Delete);
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }

/*-----------------------------------------------------------------updateFunction---------------------------------------------------*/

function updateTask(){
        //CODE HERE
        global $conn;
        //CODE HERE
        $i=$_POST['id'];
        $Title = $_POST['title'];
        $TaskType = $_POST['taskType'];
        $Priority = $_POST['taskPrio'];
        $Status = $_POST['taskStatus'];
        $Date = $_POST['taskDate'];
        $Description = $_POST['taskDescrip'];


        $request ="UPDATE tasks SET `title`='$Title',`type_id`=$TaskType,`priority_id`=$Priority,`status_id`=$Status,`task_datetime`='$Date',`description`='$Description' WHERE id = $i";
        mysqli_query($conn,$request);
        //SQL UPDATE
        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
    }

/*-----------------------------------------------------------------CountingTaskFunction---------------------------------------------------*/

function taskCounter($tabNum){
        global $conn;
        $sql="SELECT * FROM tasks where status_id=$tabNum";
        if ($result=mysqli_query($conn,$sql)){
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
        }
    }

?>