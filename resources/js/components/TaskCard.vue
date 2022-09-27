<template>
    <div class="card" style="margin: 10px;">
        <div id = "card-header" style="padding: 20px;">
            <h5>My Priorities</h5>
            <div id=task-status-bar>
                <div class="task-status">Upcoming</div>
                <div class="task-status">Overdue</div>
                <div class="task-status">Completed</div>
            </div>
        </div>
        <hr>
        <div  style="height: 200px;overflow-y: scroll;">
            <ul style="list-style-type:none;padding:20px">
                <li class="muted" id="add-task"><span>check_circle</span>
                    <div id="add-task-text" rows="1" contenteditable="true" maxlength="80" style="margin:0;outline: 0px solid transparent;width:100%" @keyup.enter="(e) => storeTask(e)">Click here to add a task</div>
                </li>
                <hr style="margin: 10px 0">
                <div v-for="(item, index) in tasks">
                    <li @click="(e) => completeTask(e)"><span style="margin-right:5px;" class="material-icons check-circle">check_circle</span>{{item.content}}</li><hr style="margin: 10px 0">
                </div>
                <!-- <span v-html="taskList"></span> -->
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            var tasksHtml = "";
                (this.tasks).forEach((task) => {
                    tasksHtml += this.createTask(task.title);
                });

            return{
                taskList: tasksHtml
            }
        },
        methods: {
            async storeTask(event){
                console.log(this.tasks);
                event.preventDefault();
                var res = await axios.post('api/tasks', {
                    title: event.target.innerText
                })  .then(function (response) {
                    console.log(response);
                    return response;
                })
                .catch(function (error) {
                    console.log(error);
                });

                console.log(this.taskList);
                // this.taskList = this.getTaskHtml(res.data.title) + this.taskList;
                
            },
            createTask(content){
                return `<li><span style="margin-right:5px;" class="material-icons check-circle">check_circle</span>${content}</li><hr style="margin: 10px 0">`;
            },
            completeTask(event){
                event.target.style.backgroundColor = white;
                console.log();
            }
        },
        props: ['tasks']
    }
</script>
