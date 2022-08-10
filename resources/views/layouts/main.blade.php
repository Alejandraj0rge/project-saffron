<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Planner</title>

</head>

<style>  

th, tr, td {

    border: 1px  #ddd;
    text-align: left;
    border-bottom: 2px dotted black;
    border-right: solid 1px WhiteSmoke;
    
    
}

td:hover {background-color: WhiteSmoke;}



#btn_add_new_task1, .btn_add_new_task2{
    background-color: Lavender;
    border: none;
    color: black;
    padding: 20px 30px;
    text-align: center;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 35px;
    font-size: 15px;
 
}

#btn_add_new_task1:hover, .btn_add_new_task2:hover {
  background-color: WhiteSmoke;
}

#right_menu{
    display: none;
 
}

#overflow {
    overflow: auto;
    height: 100vh;
    
}

#sideAdd {
    padding: 8px 30px;
}

input[type=text] {
  
  padding: 12px;  
  border: 1px solid #ccc; 
  border-radius: 4px; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  
}

.page_title {
  background-color: white;
  font-family: "Garamond";
  font-size: 30px;
  color: black;
  display: inline;

}

a {
    text-decoration: none; 
    padding: 15px;
    display: block;
    color: black;
}

textarea {
    border: none;
    overflow: auto;
    outline: none;

    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    resize: none; 
    
}

#title_show {
    background: none;
    border: none;
    font-family: "Times New Roman";
    font-size: 15px;
    padding:10px;
    background-color: AliceBlue;
    border-radius: 15px;
    box-sizing: border-box;  
    width: 100%;
    
}

#title_show:focus, textarea:focus {
    
    outline: none;
    border: 2px dotted RoyalBlue; 
    border-radius: 15px; 
    background-color: AliceBlue;

}

 textarea {
    font-family: "Times New Roman";
    font-size: 15px;
    box-sizing: border-box;
    padding:25px;
    background-color: AliceBlue;
    border-radius: 15px; 
    width: 100%;

} 

#show_page, #header_show{
    width: 300px;
    margin-left: 50px;
    
}

#header_show{
    text-align: left;
    margin-left: 50px;
}

</style>

<body>

    <a class="page_title" href=""><strong> PROJECT</strong> PLANNER </a>

{{-- 
 <script>

    async function updateTask(event, form)
    {
        
        event.preventDefault();
        
        const formData = new FormData(form);

        const response = await fetch(form.action, {
            method: form.method,
            body: formData,
        })  .then(res => res.json())
            .catch(error => console.log('ERROR'));

    }

    function newTaskbtn() 
    {
        const newTaskForm = document.getElementById('right_menu');
        const btnNewTask = document.getElementById('btn_add_new_task1');

                    newTaskForm.style.display = 'block';
                    btnNewTask.style.display = 'none';
           

    }

    async function addNewTask(event, form)
    {
        event.preventDefault();
        
        const formData = new FormData(form);

        const response = await fetch(form.action, {
            method: form.method,
            body: formData,
        })  .then(res => res.json())
            .catch(error => console.log('ERROR'));

        
        const task = response.data;

        addTaskToTable(task);

    }

    function addTaskToTable(task, table = null)
    {

        if(! table) {
            table = document.getElementById('view_tasks_table').querySelector('tbody');
        }

        let showTaskUrl = "{{ route('web.tasks.show', ['task' => ':task']) }}";
        showTaskUrl = showTaskUrl.replace(':task', task.id);

        const taskRow = document.createElement('tr');

        taskRow.innerHTML = `
            <td>
                <input class='check_completed' type='checkbox' onclick="checkboxCompleted(this, ${task.id})">
            </td>

            <td><a href="${showTaskUrl}">${task.id}</a></td>

            <td><a href="${showTaskUrl}">${task.title}</a></td>
            
            <td><a href="${showTaskUrl}">${task.content ?? ''}</a></td>
        `;

        table.prepend(taskRow);
    }

    async function checkboxCompleted(checkbox, task)
    {
        let url = "{{ route('api.tasks.toggle-completed', ['task' => ':task']) }}";
        url = url.replace(':task', task);

       fetch(url, {
           method: 'post'
       })
       .then(res => res.json())
       .then(res => checkbox.checked = res.data.completed);

       

    }
 </script> --}}
  
  @yield('content')

</body>
</html>