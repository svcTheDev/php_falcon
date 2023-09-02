
// let deleteButton = document.querySelector('.delete');
let taskId;
document.addEventListener('click', getTaskId);

function getTaskId(e){
    // e.preventDefault();
    if(e.target.className.includes('delete')) {
        console.log('hola?');
        taskId = e.target.id;
                
        fetch('all_views/task_managment.php', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `taskId=${taskId}`
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); 
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}