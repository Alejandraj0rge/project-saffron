<template>
    <div class="card" style="margin: 10px;">
        <div id = "card-header" style="padding: 20px;">
            <h5>My Priorities</h5>
            <div id=task-status-bar>
                <div class="task-status" id="upcoming" @click="(e) => showStatusTasks(e)">Upcoming</div>
                <div class="task-status" id="overdue" @click="(e) => showStatusTasks(e)">Overdue</div>
                <div class="task-status" id="completed" @click="(e) => showStatusTasks(e)">Completed</div>
            </div>
        </div>
        <hr>
        <div ref="tasks-card" style="height: 200px;overflow-y: scroll;">
            <ul style="list-style-type:none;padding:20px">
                <div id="div-add-task">
                    <li class="muted" id="add-task"><span style="margin-right:5px;" class="material-icons check-circle">check_circle</span>
                    <div id="add-task-text" rows="1" contenteditable="true" maxlength="80" style="margin:0;outline: 0px solid transparent;width:100%" @keyup.enter="(e) => storeTask(e)">Click here to add a task</div>
                    </li>
                    <hr style="margin: 10px 0">
                </div>
                <div v-for="(item, index) in taskList">
                    <li @click="(e) => completeTask(e, item)" data-status="upcoming" ref="tasks"><span style="margin-right:5px;" class="material-icons check-circle">check_circle</span>{{item.content}}</li><hr style="margin: 10px 0">
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return{
                taskList: this.tasks
            }
        },
        methods: {
            async storeTask(event){
                console.log(this.tasks);
                event.preventDefault();
                var res = await axios.post('api/tasks', {
                    content: event.target.innerText,
                    title: event.target.innerText,
                    stage: 'upcoming'
                })  .then(function (response) {
                    return response;
                })  .catch(function (error) {
                });
                this.taskList = this.taskList.concat(res.data);
            },
            async completeTask(event, item){
                event.target.style.color = "cadetblue";
                await axios.put(`api/tasks/${item.rec_id}`, {
                    completed: 1
                }) .then(function (response) {
                    return response;
                }); 
                console.log(event.target, this);
                event.target.attributes["data-status"].value = "completed";
                event.target.parentElement.style.display = 'none';
            },
            showStatusTasks(event){
                document.getElementById('div-add-task').style.display = (event.target.id != 'upcoming') ?  'none' : 'block';
                this.$refs.tasks.forEach(element => {
                    element.parentElement.style.display = (element.attributes["data-status"].value != event.target.id) ? 'none' : 'block';
                }); 
            },
        },
        props: ['tasks']
    }
</script>
