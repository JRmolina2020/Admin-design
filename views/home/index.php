
<!-- /////////////includes///////////// -->
<title>App</title>
<?php include '../components/menu/index.php';?>
<link rel="import" href="../src/index.html">
<!-- /////end//////////// -->



<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
<div class="card">
<div class="header bg-red">
<h2>
Red - Title <small>Description text here...</small>
</h2>
</div>
<div class="body">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
</div>
</div>
</div>	
<!-- modal insert -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</body>
</html>
