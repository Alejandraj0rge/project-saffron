<template>
    <div style="display: flex;justify-content:center;flex-direction:column;text-align:center;">
        Monday, August 29
        <h2>Good afternoon, Alejandra</h2>
        <div style="display:flex;justify-content:center;flex-direction: column;">
            <div>
                <div id="recap-bar" style="display:flex;align-items:center;">
                    <div style="margin-right:20px;">My week</div>
                    <div style="margin-right:20px;display:flex;align-items:center"><h3 style="margin-right:10px;">{{completedTasks}}</h3> tasks completed</div>
                    <div style="display:flex;align-items:center;"><h3 style="margin-right:10px;">0</h3> collaborators</div>
                </div>
            </div>
            <div>Customize</div>
        </div>
    </div>
</template>

<script>
export default {
data() {
    let completedTasks = 0;
    this.tasks.forEach((element) => {
        if(parseInt(element.completed)){
            completedTasks += parseInt(element.completed);
        }
    }); 
 
return {
    taskList: this.tasks,
    completedTasks: completedTasks
}
},
methods:{

},
props: ['tasks']
}
</script>
