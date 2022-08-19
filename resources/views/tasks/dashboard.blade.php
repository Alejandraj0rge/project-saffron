<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1 id="header"></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <div id="app">

		<div class="row flex-nowrap justify-content-between align-items-center">

			<div class="col-4 text-center">

				<H1>Title</H1>

			</div>

			<div class="col-4 text-center">

				<button type="button" class="btn btn-primary position-relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
						<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
					</svg>
					<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
						<span class="visually-hidden">New alerts</span>
					</span>
				</button>
				


				<button class="btn btn-dark">Log out</button>

				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-emoji-sunglasses-fill" viewBox="0 0 16 16">
					<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.22 4.22 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A2.99 2.99 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515L2.31 5.243zM4.969 9.75A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z"/>
				</svg>

			</div>

		</div> 

		<div class="row row-cols-3">

			<div class="col-md-auto" style="padding-left: 35px;">
				<side-menu></side-menu>
			</div>

        	<div class="col-md-5">
				<div class="card" data-masonry='{"percentPosition": true }' style="position: relative;padding:10px;">
					
					<div class="card" style="width: 18rem;">
						<div class="card-body">
						  <h5 class="card-title">Card title</h5>
						  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="card" style="width: 18rem;">
						<div class="card-body">
						  <h5 class="card-title">Card title</h5>
						  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="card" style="width: 18rem;">
						<div class="card-body">
						  <h5 class="card-title">Card title</h5>
						  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

					<div class="card" style="width: 18rem;">
						<div class="card-body">
						  <h5 class="card-title">Card title</h5>
						  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>

				</div>
          	</div>

			<div class="col-lg-6">
                <div class="card"  style="height:800px;padding:20px;" data-masonry='{"percentPosition": true }'>
					<div class="row row-cols-2">
						<div class="col-md-auto">

							<div class="card" style="width: 18rem;height:30rem" >
								<div class="card-body">
								  <h5 class="card-title" contenteditable="true">New Note</h5>
								  <h6 class="card-subtitle mb-2 text-muted" contenteditable="true">Note subtitle</h6>
								  <p class="card-text" contenteditable="true">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
								<div class="card-footer">
									
								</div>
							</div>

						</div>
						<div class="col-md-auto">

							<div class="card" style="width: 35rem;height:30rem">
								<div style="padding: 40px;">
									<div>
										<h3 class="text-center">My Tasks</h3>
										<ul class="nav">
											<li class="nav-item">
											  <a class="nav-link active" aria-current="page" href="#">Active</a>
											</li>
											<li class="nav-item">
											  <a class="nav-link" href="#">Link</a>
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
					</div>
				</div>
            </div>

        </div>

	</div>
</body>

</html>
