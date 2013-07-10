@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

@section('content')
<div class="page-header">
	
<div class="container-fluid">
 	<div class="row-fluid">
		<div class="span3">
			<div class="well sidebar-nav">
 			<ul class="nav nav-list"> 
 				<li class="navbar-text"><a href="home1">Home</a></li>
				<li class="nav-header"><a href="#">Learning Module</a></li>
				<li class="nav-header"><a href="#"> Online Trainings</a></li>
                <li class="nav-header"><a href="#">Templates</a></li>                                
                <li class="nav-header"><a href="#">Case Studies</a></li>
                <li class="nav-header"><a href="#">Quizzes</a></li>
                <li class="nav-header"><a href="#"> Simulation</a></li>
                <li class="nav-header"><a href="#">Puzzles</a></li>
                <li class="nav-header"><a href="#">Playing Modules</a></li>
                <li class="nav-header"><a href="#">Games</a></li>
                <li class="nav-header"><a href="#"> Operations Pane</a></li>
            </ul>
            </div>
		</div>

		<div class="span9">
 			    <p>PLAYJECT is an Experiential project management Learning and development platform that is Uniquely designed to appreciate the dynamic, complex, and unique nature of projects.
                </p>
                <p>PLAYJECT combines the core elements of project management body of knowledge and global best practices in Project Management as espoused by PMI (Project Management Institute) with a game based experiential learning to enhance project management skills.
                </p>
                <p>PLAYJECT combines the core elements of project management body of knowledge and global best practices in Project Management as espoused by PMI (Project Management Institute) with a game based experiential learning to enhance project management skills.
                </p>
		</div>
	</div>
</div>
</div>



@stop