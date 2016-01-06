	    <footer class="footer">
        	<p>&copy; 2015 timdonat with love</p>
      	</footer>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript">
    	function readURL(input) {
        	if (input.files && input.files[0]) {
            	var reader = new FileReader();
            
            	reader.onload = function (e) {
                	$('#show').attr('src', e.target.result);
            	}
            
            	reader.readAsDataURL(input.files[0]);
        	}
    	}
    
    	$("#imgInp").change(function(){
        readURL(this);
    });
    </script>
    <script type="text/javascript">
    	$(document).ready(function () {
  			$('#show').imgAreaSelect({ aspectRatio: '1280:800', handles: true ,
  				onSelectEnd: function (img, selection) {
            		$('input[name="x1"]').val(selection.x1);
            		$('input[name="y1"]').val(selection.y1);
            		$('input[name="x2"]').val(selection.x2);
            		$('input[name="y2"]').val(selection.y2);            
        		} 
        	});
		});
	</script>
  </body>
</html>

