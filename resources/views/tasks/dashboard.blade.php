	@extends('layouts.main')

	@section('content')

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

			<dashboard-header v-bind:tasks='{!! $tasks !!}'></dashboard-header>

			<div style="display:flex;justify-content:center;">
				<div style="display:flex;flex-direction:column;">
					<task-card v-bind:tasks='{!! $tasks !!}'></task-card>
					<projects-container v-bind:projects='{!! $projects !!}'></projects-container>
				</div>
				<calendar-bar v-bind:events='{!! $events !!}'></calendar-bar>
			</div>
		</div>
	@endsection
