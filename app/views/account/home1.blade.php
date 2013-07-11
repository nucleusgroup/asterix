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
                <li class="nav-header"><a href="simulate"> Simulation</a></li>
                <li class="nav-header"><a href="#">Puzzles</a></li>
                <li class="nav-header"><a href="#">Playing Modules</a></li>
                <li class="nav-header"><a href="#">Games</a></li>
                <li class="nav-header"><a href="#"> Operations Pane</a></li>
            </ul>
            </div>
		</div>

		<div class="span9">
            <div class="hero-unit">
 			    <p>PLAYJECT is an Experiential project management Learning and development platform that is Uniquely designed to appreciate the dynamic, complex, and unique nature of projects.
                </p>
                <p>PLAYJECT combines the core elements of project management body of knowledge and global best practices in Project Management as espoused by PMI (Project Management Institute) with a game based experiential learning to enhance project management skills.
                </p>
                <p>PLAYJECT combines the core elements of project management body of knowledge and global best practices in Project Management as espoused by PMI (Project Management Institute) with a game based experiential learning to enhance project management skills.
                </p>

		</div>
		<div class="btn_right">
            <!--<input name="pre2" value="View document" class="btn btn_right_btn" type="button" />-->
            <input name="pre" value="Hide text" class="btnright2 btn_right_btn" type="button" id="showhide" onClick="showhidetext()" />
          
        </div>
      </div>
      <div class="main_area_video_content" id="main_content">
        <div id="videotext"></div>
      </div>
	</div>
</div>
</div>
<script type="text/javascript">

 function showhidetext() {
        if ($('.main_area_video_content').css('display') == 'none') {
            $('.main_area_video_content').css('display', 'block');
            $('#showhide').val('Hide Text');
        } else {
            $('.main_area_video_content').css('display', 'none');
            $('#showhide').val('Show Text');
        }
    }


</script>


@stop