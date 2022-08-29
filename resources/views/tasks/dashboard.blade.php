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

		<div id="side-bar" class="shadow mb-5 bg-body rounded" style="display: flex;flex-direction:column;align-items:flex-start;height:99vh;width:250px;justify-content:space-between;">
			<div style="width:100%;" id="menu">

				<div id="title" style="justify-content: space-between;display:flex;width:100%;padding:20px;align-items:center;">Title <span class="material-icons" style="">menu</span></div>
				<div>
					<ul style="list-style-type:none;align-items:flex-start;display:flex;flex-direction:column;font:medium;">
						<li><span class="material-icons">home</span>Home</li>
						<li><span class="material-icons">home</span>My Tasks</li>
						<li><span class="material-icons">home</span>Inbox</li>
						<li><span class="material-icons">home</span>Reporting</li>
						<li><span class="material-icons">home</span>Portfolios</li>
						<li><span class="material-icons">home</span>Goals</li>
					</ul>
				</div>
				<hr>
					<div style="padding-left:2rem;">Favorites</div>
				<hr>
					<div style="padding-left:2rem;">saved searches</div>
				<hr>
					<div style="padding-left:2rem;">teams</div>
				<hr>
					<div style="padding-left:2rem;">Browse teams</div>

			</div>

			<div style="width:100%;">
				<hr>
					<div style="padding-left:2rem;">Invite teammates</div>
				<hr>
					<div style="padding-left:2rem;">Help</div>
				<hr>
			</div>
			
		</div>

		<div id="main" style="width:100%">
			<div style="display: flex; justify-content:space-between;">
				<h4>Home</h4>
				<div>
					<input type="text" placeholder="Search">
					<button>Upgrade</button>
					<button>+</button>
				</div>
			</div>
			<div style="display: flex;justify-content:center;flex-direction:column;text-align:center;margin:30px;">
				Monday, August 29
				<h2>Good afternoon, Alejandra</h2>
				<div>
					<div style="display:flex; flex-direction: row;justify-content:center;">
						<div>My week</div>
						<div>0 tasks completed</div>
						<div>0 collaborators</div>
					</div>
					<div>Customize</div>
				</div>
			</div>
			<div>
				<div style="display:flex;justify-content:center;">
					<div class="card" style="margin: 10px;">
						<div>My Priorities</div>
						GHGH
					</div>
					<div class="card" style="margin: 10px;">
						FDGFG
					</div>
				</div>
				<div class="card" style="display:flex;justify-content:center;">
					dffdf
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
