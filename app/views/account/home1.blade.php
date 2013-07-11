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
            
 			    <p>PLAYJECT is an Experiential project management Learning and development platform that is Uniquely designed to appreciate the dynamic, complex, and unique nature of projects.
                </p>
                <p>PLAYJECT combines the core elements of project management body of knowledge and global best practices in Project Management as espoused by PMI (Project Management Institute) with a game based experiential learning to enhance project management skills.
                </p>
                
          
            <div class="hero-unit">
            <div class="row-fluid">
                <div class="span5">
                </div>
        <!--            DIV for Playing the FLASH
               
               <div class="flash_obj" >
                 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="600" HEIGHT="303" id="movie" ALIGN>
                   <param NAME="movie" value="FOBfrictionlessPush.swf">
                   <param NAME="quality" value="High">
                   <param NAME="bgcolor" value="FFFFFF">
                   <param name="_cx" value="5794">
                   <param name="_cy" value="4524">
                   <param name="FlashVars" value="-1">
                   <param name="Src" value="flash/video_02.swf">
                   <param name="WMode" value="Window">
                   <param name="Play" value="-1">
                   <param name="Loop" value="0">
                   <param name="SAlign" value>
                   <param name="Menu" value="-1">
                   <param name="Base" value>
                   <param name="AllowScriptAccess" value="always">
                   <param name="Scale" value="ShowAll">
                   <param name="DeviceFont" value="0">
                   <param name="EmbedMovie" value="0">
                   <param name="SWRemote" value>
                   <EMBED src="flash/video_02.swf" quality=high bgcolor=#FFFFFF  WIDTH="246" HEIGHT="187" NAME="movie" ALIGN=""  TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
                 </object>
               </div> 
                DIV for Playing the FLASH  END -->
            </div>
              </div>
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