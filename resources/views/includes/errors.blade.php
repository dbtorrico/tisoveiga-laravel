 <div class="container">
 	@if(count($errors) > 0)
 	<ul class="list-group">
 		@foreach($errors->all() as $erro)
 		<div class="alert alert-danger">
 			<li style="display:block;">
 				<button type="button" class="close" data-dismiss="alert">×</button>
 				{{ $erro }}
 			</li>
 		</div>
 		@endforeach
 	</ul>
 	<br>
 	@endif
 </div>