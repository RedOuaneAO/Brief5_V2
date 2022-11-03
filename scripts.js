function popUp(id){
    $('#modal-task').modal('show');
    var id_input = document.getElementById("task-id");
    id_input.value = id;
    var titleInput = document.getElementById("titleId");
    var priorityInput = document.getElementById("prt");
    var statusInput = document.getElementById("stt");
    var dateInput = document.getElementById("date");
    var descriptionInput = document.getElementById("desc");

    var title = document.getElementById(id).querySelector('.task-title').innerHTML;
    titleInput.value=title;

    var date = document.getElementById(id).querySelector('.task-date').innerHTML;
    dateInput.value=date;

    var description = document.getElementById(id).querySelector('.task-description').getAttribute('title');
    descriptionInput.value=description;

    var type = document.getElementById(id).querySelector('.task-type').innerHTML;
    if(type=="Feature")feature.checked=true;
    else bug.checked=true;
    
    var priority = document.getElementById(id).querySelector('.task-priority').innerHTML;
    if(priority=='High') priority=1
    if(priority=='Medium') priority=2
    if(priority=='Low') priority=3
    if(priority=='Critical') priority=4
    priorityInput.value=priority;

    var status = document.getElementById(id).querySelector('.task-class').getAttribute('taskStatus');
    if(status=='To Do')status=1;
    if(status=='In Progress')status=2;
    if(status=='Done')status=3;
    statusInput.value=status;
    
    document.getElementById('saveBtn').style.display = "none";
    document.getElementById('updateId').style.display = "inline";

}

function resetForm(){
document.getElementById('formId').reset();
}


document.getElementById('addTaskBtn').addEventListener("click",addModal());
function addModal(){
document.getElementById('saveBtn').style.display = "inline";
document.getElementById('updateId').style.display = "none";
}