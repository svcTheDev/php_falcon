
// let statusButton = document.querySelector('#status');
// console.log(statusButton);

document.addEventListener('click', getTaskId)
let taskId;

function getTaskId(e){
    // e.preventDefault();
    console.log(e);
    if(e.target.id.includes('status')) {

        taskId = e.target;
        taskId = taskId.parentElement.parentElement;

        taskId.classList.add('bg-danger')
        console.log(taskId);
    }
}