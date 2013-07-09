<!doctype html>
<html ng-app="plunker">
  <head>
    <script src="../vendor/js/angular.js"></script>
    <script src="../vendor/js/ui-bootstrap-tpls-0.4.0.js"></script>
    <script src="../vendor/js/example.js"></script>
    <link href="../vendor/css/bootstrap-combined.min.css" rel="stylesheet">
  </head>
  <body>

<div ng-controller="ModalDemoCtrl">
    <button class="btn" ng-click="open()">Open me!</button>
    <div modal="shouldBeOpen" close="close()" options="opts">
        <div class="modal-header">
            <h3>This Boy name is!</h3>
        </div>
        <div class="modal-body">
            <ul>
                <li ng-repeat="item in items">{{item}}</li>
            </ul>
        </div>
        <div class="modal-footer">
            <button class="btn btn-warning cancel" ng-click="close()">Cancel</button>
        </div>
    </div>
</div>
<br>
<div ng-controller="AlertDemoCtrl">
  <alert ng-repeat="alert in alerts" type="alert.type" close="closeAlert($index)">{{alert.msg}}</alert>
  <button class='btn' ng-click="addAlert()">Add Alert</button>
</div>

<div ng-controller="CarouselDemoCtrl">
  <carousel interval="myInterval">
    <slide ng-repeat="slide in slides" active="slide.active">
      <img ng-src="{{slide.image}}" style="margin:auto;">
      <div class="carousel-caption">
        <h4>Slide {{$index}}</h4>
        <p>{{slide.text}}</p>
      </div>
    </slide>
  </carousel>
  <div class="row-fluid">
    <div class="span6">
      <ul>
        <li ng-repeat="slide in slides">
          <button class="btn btn-mini" ng-class="{'btn-info': !slide.active, 'btn-success': slide.active}" ng-disabled="slide.active" ng-click="slide.active = true">select</button>
          {{$index}}: {{slide.text}}
        </li>
      </ul>
      <a class="btn" ng-click="addSlide()">Add Slide</a>
    </div>
    <div class="span6">
      Interval, in milliseconds: <input type="number" ng-model="myInterval">
      <br />Enter a negative number to stop the interval.
    </div>
  </div>
</div>
<div ng-controller="PaginationDemoCtrl" class="well well-small">
    <h4>Default</h4>

    <pagination num-pages="noOfPages" current-page="currentPage"></pagination>
    <pagination boundary-links="true" num-pages="noOfPages" current-page="currentPage" class="pagination-small" previous-text="'&lsaquo;'" next-text="'&rsaquo;'" first-text="'&laquo;'" last-text="'&raquo;'"></pagination>
    <pagination direction-links="false" boundary-links="true" num-pages="noOfPages" current-page="currentPage"></pagination>
    <pagination direction-links="false" num-pages="noOfPages" current-page="currentPage"></pagination>

    <button class="btn" ng-click="setPage(3)">Shiva Set current page to: 3</button>
    The selected page no: {{currentPage}}

    <hr />
    <h4>Pager</h4>
    <pager num-pages="noOfPages" current-page="currentPage"></pager>

    <hr />
    <h4>Limit the maximimum visible page-buttons</h4>
    <pagination num-pages="bigNoOfPages" current-page="bigCurrentPage" max-size="maxSize" class="pagination-mini" boundary-links="true"></pagination>
    <pagination rotate="false" num-pages="bigNoOfPages" current-page="bigCurrentPage" max-size="maxSize" class="pagination-mini" boundary-links="true"></pagination>
</div>
<div ng-controller="PopoverDemoCtrl">
  <div class="well">
    <div>
      <h4>Dynamic</h4>
      <div>Dynamic Popover : <input type="text" ng-model="dynamicPopoverText"></div>
      <div>Dynamic Popover Popup Text: <input type="text" ng-model="dynamicPopover"></div>
      <div>Dynamic Popover Popup Title: <input type="text" ng-model="dynamicPopoverTitle"></div>
      <div><button popover="{{dynamicPopover}}" popover-title="{{dynamicPopoverTitle}}" class="btn">{{dynamicPopoverText}}</button></div>
    </div>
    <div>
      <h4>Positional</h4>
      <button popover-placement="top" popover="On the Top!" class="btn">Top</button>
      <button popover-placement="left" popover="On the Left!" class="btn">Left</button>
      <button popover-placement="right" popover="On the Right!" class="btn">Right</button>
      <button popover-placement="bottom" popover="On the Bottom!" class="btn">Bottom</button>
      <button popover-placement="mouse" popover="relative to mouse" class="btn">Mouse</button>
    </div>
    <div>
      <h4>Triggers</h4>
      <button popover="I appeared on mouse enter!" popover-trigger="mouseenter" class="btn">Mouseenter</button>
      <input type="text" value="Click me!" 
        popover="I appeared on focus! Click away and I'll vanish..." 
        popover-trigger="focus" />
    </div>
    <div>
      <h4>Other</h4>
      <button Popover-animation="true" popover="I fade in and out!" class="btn">fading</button>
      <button popover="I have a title!" popover-title="The title." class="btn">title</button>
    </div>
  </div>
</div>
  </body>
</html>
