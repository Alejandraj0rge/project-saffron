<template>
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 text-center">
				<H1>Title</H1>
			</div>

			<div class="col-4 text-center">
			
				<div class="btn-group dropleft">
					<i class="bi bi-envelope" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="padding: 4px; font-size:10px">4</span>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:450px;">
						<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">List group item heading</h5>
							<small>3 days ago</small>
							</div>
							<p class="mb-1" style="overflow-wrap: break-word">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
							<small>Donec id elit non mi porta.</small>
						</a>
					</div>
				</div>
						
				<button class="btn btn-dark" style="margin-left:10px;">Log out</button>

			</div>
    </div>
            
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
