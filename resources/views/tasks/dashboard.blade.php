<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

		<div id="side-bar" class="shadow bg-body rounded" style="display: flex;flex-direction:column;align-items:flex-start;height:99vh;width:250px;justify-content:space-between;">
			<div style="width:100%;" id="menu">
				<div id="title" style="justify-content: space-between;display:flex;width:100%;padding:20px;align-items:center;">Title <span class="material-icons" style="">menu</span></div>
				<div>
					<ul style="list-style-type:none;align-items:flex-start;display:flex;flex-direction:column;font:medium;">
						<li><span class="material-icons">home</span>Home</li>
						<li><span class="material-icons">star</span>My Tasks</li>
						<li><span class="material-icons">notifications</span>Inbox</li>
						<li><span class="material-icons">query_stats</span>Reporting</li>
						<li><span class="material-icons">emoji_objects</span>Portfolios</li>
						<li><span class="material-icons">emoji_nature</span>Goals</li>
					</ul>
				</div>
				<hr>
					<div style="padding-left:2rem;margin: 1rem 0;">Favorites</div>
				<hr>
					<div style="padding-left:2rem;margin: 1rem 0;">saved searches</div>
				<hr>
					<div style="padding-left:2rem;margin: 1rem 0;">teams</div>
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

		<div id="main" style="width:100%;margin-left:20px;margin-right:20px;">
			
			<div style="display: flex; justify-content:space-between;">
				<h4>Home</h4>
				<div>
					<input type="text" placeholder="Search">
					<button>Upgrade</button>
					<button>+</button>
				</div>
			</div>

			<div style="display: flex;justify-content:center;flex-direction:column;text-align:center;">
				Monday, August 29
				<h2>Good afternoon, Alejandra</h2>
				<div style="display:flex;justify-content:center;flex-direction: column;">
					<div>
						<div id="recap-bar">
							<div style="margin-right:20px;">My week</div>
							<div style="margin-right:20px;">0 tasks completed</div>
							<div>0 collaborators</div>
						</div>
					</div>
					<div>Customize</div>
				</div>
			</div>

			<div style="display:flex;justify-content:center;">
				<div style="display:flex;flex-direction:column;">
					<div class="card" style="margin: 10px;">
						<div id = "card-header" style="padding: 20px;">
							<h5>My Priorities</h5>
							<div style="display:flex;font-size:small;width:200px;justify-content:space-between;">
								<div>Upcoming</div>
								<div>Overdue</div>
								<div>Completed</div>
							</div>
						</div>
						<hr>
						<div>
							<ul style="list-style-type:none;padding:20px">
								<li class="muted"><span class="material-icons">check_circle</span>Click here to add a task</li>
								<hr style="margin: 10px 0">
								<li><span class="material-icons">check_circle</span>Click here to add a task</li>
								<hr style="margin: 10px 0">
								<li><span class="material-icons">check_circle</span>Click here to add a task</li>
								<hr style="margin: 10px 0">
								<li><span class="material-icons">check_circle</span>Click here to add a task</li>
								<hr style="margin: 10px 0">
							</ul>
						</div>
					</div>
					<div class="card" style="margin: 10px;">
						<div id = "card-header" style="padding: 10px;">
							<div style="display: flex;align-items:baseline;"><h5 style="margin-right: 20px">Projects</h5><small>Recents</small></div>
						</div>
						<div style = "display:flex;">
							<div style = "display:flex;flex-direction:column;width:300px;">
								<div style = "display:flex;align-items:center" class="muted"><div class="project"></div>Create Project</div>
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
				<div class="card" style="display:flex;justify-content:start;">
					<div style="display: flex;padding:20px">
						<div>Today <h3>Monday, 22 March</h3></div>
						<span class="material-icons">expand_more</span>
					</div>
					<div style="display: flex">
						<div class="card" style="padding: 5px;margin:10px;">SUN<h2>21</h2></div>
						<div class="card" style="padding: 5px;margin:10px;">MON<h2>22</h2></div>
						<div class="card" style="padding: 5px;margin:10px;">TUS<h2>23</h2></div>
						<div class="card" style="padding: 5px;margin:10px;">TUR<h2>24</h2></div>
					</div>
					<div style="display: flex;justify-content:space-between;padding:20px">
						<div style="display: flex;flex-direction:column;justify-content:space-between">
							<div>00:00</div>
							<div>12:00</div>
						</div>
						<div style="display:flex;flex-direction:column;justify-content:flex-start;">
							<div>Please Change</div>
							<div>Please Change</div>
							<div>Please Change</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- <top-header></top-header> --}}
		
{{-- 		<div class="row row-cols-3" style="height:100vh;">
			
			<div class="col" style="padding:20px;width:max-content;padding-left:30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius:10px;">
				<side-menu></side-menu>
				<ul style="list-style-type: none;margin: 0;padding: 0;">
					<li><span class="material-icons">menu</span></li>
					<li><span class="material-icons">check_box_outline_blank</span></li>
					<li><span class="material-icons">radio_button_unchecked</span></li>
						</span>
				</ul>
				 --}}
				
					{{-- <div>
						<span class="material-symbols-outlined" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">menu</span>
				
						<div style="min-height: 120px;">
							<div class="collapse collapse-horizontal" id="collapseWidthExample">
								<div class="card" style="width:max-content;">
									<ul class="list-group">
										<span v-html="options"></span>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
{{-- 			</div>

        	<div class="col">
				<main-card></main-card>
          	</div>

			<div class="col-sm-6">
                <div class="container"  style="padding:20px;" data-masonry='{"percentPosition": true }'>
					<div class="row row-cols-2">

						<div class="col-sm-auto" style="margin:10px;">
							<div class="card" style="width: 35rem;height:30rem">
								<div class="row justify-content-center" style="padding: 40px;">
									<div class="card" style="width: max-content;height:max-content;">
										<div class="hstack gap-3">
											First item
											<div class="vr"></div>
											0 tasks completed
											<div class="vr"></div>
											0 collaborators
										</div>
									</div>
									<div>
										<h3 class="text-center" style="padding:10px">My Tasks</h3>
										<ul class="nav">
											<li class="nav-item">
											  <a class="nav-link active" aria-current="page" href="#">Upcoming</a>
											</li>
											<li class="nav-item">
											  <a class="nav-link" href="#">whatt</a>
											</li>
											<li class="nav-item">
											  <a class="nav-link" href="#">Link</a>
											</li>
											<li class="nav-item">
											  <a class="nav-link disabled">Disabled</a>
											</li>
										  </ul>
									</div>
									<div>
										<ul class="list-group">
											<li class="list-group-item text-muted" contenteditable="true">Write something funny!</li>
											<li class="list-group-item">
											  <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
											  <label class="form-check-label" for="firstCheckbox">First checkbox</label>
											</li>
											<li class="list-group-item">
											  <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
											  <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
											</li>
											<li class="list-group-item">
											  <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
											  <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
											</li>
										  </ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-auto" style="margin:10px;">
							<div class="card" style="width:18rem;height:30rem">
								<div class="card-body">
								  <h5 class="card-title" contenteditable="true">New Note</h5>
								  <h6 class="card-subtitle mb-2 text-muted" contenteditable="true">Note subtitle</h6>
								  <p class="card-text" contenteditable="true">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
								<div class="card-footer d-flex justify-content-between">
										<div class="col-4">
											<span class="material-icons">skateboarding</span>
											<span class="material-icons">color_lens</span>
											<span class="material-icons">photo_camera_back</span>
										</div>
										
										<div class="col-1">
											<span class="material-icons">done_outline</span>
										</div>
										
								</div>
							</div>
						</div>

					</div>
				</div>
            </div>

        </div> --}}

	</div>
</body>

</html>
