<template>
    <div class="card" style="margin: 10px;">
        <div id = "card-header" style="padding: 10px;">
            <div style="display: flex;align-items:baseline;"><h5 style="margin-right: 20px">Projects</h5><small>Recents</small></div>
        </div>
        <div style = "display:flex;width:600px;">
            <div id="project-container">
                <div style="display:flex;align-items:center" class="muted"><div class="project"><span class="material-icons">add</span></div>Create Project</div>
                <div v-for="(project, index) in projects"><div class="project" ><span class="material-icons">add</span></div>Create Project</div>
                <div style="display:flex;align-items:center" v-for="(projects, index) in projects"><div class="project"></div>{{projects.title}}</div>
                <div style="display:flex;align-items:center"><div class="project"></div></div>
                <div style="display:flex;align-items:center"><div class="project"></div></div> 
                <div style="display:flex;align-items:center"><div class="project"></div></div> 
                <div style="display:flex;align-items:center"><div class="project"></div></div> 
                <div style="display:flex;align-items:center"><div class="project"></div></div> 
                <div style="display:flex;align-items:center"><div class="project"></div></div> 
            </div>
        </div>
    </div>
</template>

<script>
import { execPath } from 'process';

    export default {
        data() {
            return {
                projects: this.projects
            }
        },
        methods:{

        },
        props: ['projects']
    } 
</script>