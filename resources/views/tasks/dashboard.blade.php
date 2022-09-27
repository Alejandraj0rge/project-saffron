<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
	<link href="\project_saffron\resources\sass\app.css" rel="stylesheet">
</head>
<body>
    <h1 id="header"></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div id="app" style="display: flex;">

		<side-menu v-bind:tasks='{!! $tasks !!}'></side-menu>

		<div id="main" style="width:100%;margin-left:20px;margin-right:20px;">
			
			<div style="display: flex; justify-content:space-between;">
				<h4>Home</h4>
				<div style="display: flex;justify-content:space-between;align-items:center">
					<div style="display: flex;">
						<div id="plus-button" style="margin-right: 10px"><span class="material-icons">add</span></div>
						<input type="text" id="search-task" placeholder="Search a task!">
					</div>
					<div style="margin-left: 20px;display: flex;">
						<div id="plus-button" style="margin-right: 10px;background-color:lightgreen"></div>
						<button class="btn btn-outline-light" style="font-size: small;" data-bs-toggle="modal" data-bs-target="#signInModal">Sign out</button>
					</div>
				</div>
			</div>

			<div style="display: flex;justify-content:center;flex-direction:column;text-align:center;">
				Monday, August 29
				<h2>Good afternoon, Alejandra</h2>
				<div style="display:flex;justify-content:center;flex-direction: column;">
					<div>
						<div id="recap-bar" style="display:flex;align-items:center;">
							<div style="margin-right:20px;">My week</div>
							<div style="margin-right:20px;display:flex;align-items:center"><h3 style="margin-right:10px;">0</h3> tasks completed</div>
							<div style="display:flex;align-items:center;"><h3 style="margin-right:10px;">0</h3> collaborators</div>
						</div>
					</div>
					<div>Customize</div>
				</div>
			</div>

			<div style="display:flex;justify-content:center;">
				<div style="display:flex;flex-direction:column;">
					<task-card v-bind:tasks='{!! $tasks !!}'></task-card>
					<div class="card" style="margin: 10px;">
						<div id = "card-header" style="padding: 10px;">
							<div style="display: flex;align-items:baseline;"><h5 style="margin-right: 20px">Projects</h5><small>Recents</small></div>
						</div>
						<div style = "display:flex;">
							<div  style = "display:flex;flex-direction:column;width:300px;">
								<div style = "display:flex;align-items:center" class="muted"><div class="project"><span class="material-icons">add</span></div>Create Project</div>
								<div><div class="project"></div></div>
								<div><div class="project"></div></div>
								<div><div class="project"></div></div>
							</div>
							<div style = "display:flex;flex-direction:column;width:300px">
								<div style = "display:flex;align-items:center"><div class="project"></div></div>
								<div><div class="project"></div></div>
								<div><div class="project"></div></div>
								<div><div class="project"></div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="card" style="display:flex;justify-content:start;margin:10px">
					<div style="display: flex;padding:20px">
						<div>Today <h3>Monday, 22 March</h3></div>
						<span class="material-icons">expand_more</span>
					</div>
					<div style="display: flex; justify-content:center">
						<div class="card date-card" style="padding: 5px;margin:10px;">SUN<h2>21</h2></div>
						<div class="card date-card" style="padding: 5px;margin:10px;">MON<h2>22</h2></div>
						<div class="card date-card" style="padding: 5px;margin:10px;">TUS<h2>23</h2></div>
						<div class="card date-card" style="padding: 5px;margin:10px;">TUR<h2>24</h2></div>
					</div>
					<div style="display: flex;padding:20px">
						<div style="display: flex;flex-direction:column;justify-content:space-between">
							<div>00:00</div>
							<div>01:00</div>
						</div>
						<div id="calendar-event" class ="green-event" >
							<div style="margin-left:10px;">
								<div>Please Change</div>
								<div>Please Change</div>
								<div>Please Change</div>
							</div>
						</div>
					</div>
					<div style="display: flex;padding:20px">
						<div style="display: flex;flex-direction:column;justify-content:space-between">
							<div>01:00</div>
							<div>02:00</div>
						</div>
						<div id="calendar-event" class ="yellow-event">
							<div style="margin-left:10px;">
								<div>Please Change</div>
								<div>Please Change</div>
								<div>Please Change</div>
							</div>
						</div>
					</div>
					<div style="display: flex;padding:20px">
						<div style="display: flex;flex-direction:column;justify-content:space-between">
							<div>02:00</div>
							<div>03:00</div>
						</div>
						<div id="calendar-event" class ="blue-event">
							<div style="margin-left:10px;">
								<div>Please Change</div>
								<div>Please Change</div>
								<div>Please Change</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
