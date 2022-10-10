<template>
	<div id="side-bar" class="shadow bg-body rounded">
		<div style="width:100%;" id="menu">
			<div id="title" style="justify-content: space-between;display:flex;width:100%;padding:20px;align-items:center;">Title<span @click=modal(status) style="cursor: pointer;" class="material-icons">menu</span></div>
			<div>
				<ul style="list-style-type:none;align-items:flex-start;display:flex;flex-direction:column;font:medium;">
					<li v-for="(module, index) in modules">
						<span class="material-icons">{{module.icon}}</span>{{module.label}}
					</li>
				</ul>
			</div>
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Favorites</div>
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Saved searches</div>
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Teams</div>
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Browse teams</div>
		</div>

		<div style="width:100%;">
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Invite teammates</div>
			<hr>
				<div style="padding-left:2rem;margin: 1rem 0;">Help</div>
			<hr>
		</div>
	</div>
</template>

<script>
    export default {
        data() {
            return{
                status: false,
				modules: this.modules
            }
        },
        methods: {
            modal(status) {
                console.log(status, this);
                document.getElementById("side-bar").style.width = (status ? '250px' : '70px');
                return this.status = !(status);
            }
        },
		props:['modules']
    }
</script>
