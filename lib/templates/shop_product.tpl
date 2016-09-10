	<a href="product.php?id=<%id%>" id="dress<%id%>">
		<li class="flex-item-product">
			<div class="proguct">
				<div class="placeholder">
					<div class="row">
						<div class="like"></div>
						<div class="bag"></div>
					</div>
				</div>

				<div class="product-info">
					<div class="name-of-product nav-margin-top50" id="name">
						<%name%>
					</div>
					<div class="my-prise">
						<span class="main-color-text"><%price%> UAH</span>
						<span class="old-prise left-mar"><%last_price%> UAH</span>
						<p>
							<%stars%>
						</p>
						<p class="info-icons"><img src="image/weight.png"><img src="image/information.png" class="let-mar-inf"></p>
					</div>
				</div>
			</div>
		</li>
	</a>

	<script type="text/javascript">
		$.ajax({
		  type: 'POST',
		  url: 'response.php?action=sample2',
		  data: 'name=Andrew&nickname=Aramis',
		  success: function(data){
		    $('#name').html(data);
		  }
		});

	</script>
