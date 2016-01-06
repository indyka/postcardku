		<div class="row text-center">
			<div class="col-md-12">
				<div class="jumbotron">
					<p>Masukkan foto background post card</p>
					<hr>
					<form method="post" action="do_uploadbg">
					  <div class="form-group">
					    <label for="exampleInputFile">File input</label>
					    <input name="userfile" type="file" id="imgInp">
					    <input type="hidden" name="x1" value="" />
  						<input type="hidden" name="y1" value="" />
  						<input type="hidden" name="x2" value="" />
  						<input type="hidden" name="y2" value="" />
					    <br>
					    <div align="center">
					    	<img class="img-responsive" id="show" src""/>
						</div>
					  </div>
					  <button style="margin-top:30px" type="submit" name"submit" value"submit" class="btn btn-lg btn-success">Lanjut</button>
					</form>
				</div>
			</div>
		</div>