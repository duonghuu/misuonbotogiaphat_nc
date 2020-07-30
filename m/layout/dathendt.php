<script type="text/javascript">
	$(document).ready(function() {
		$('.dangkymail1').submit(function(event) {
			var dienthoai = $('.dangkymail1 input').val();
			if(dienthoai==''){
				alert('Bạn chưa nhập số điện thoại');
				$('.dangkymail1 input').focus();
			} else {
				$.ajax ({
					type: "POST",
					url: "ajax/dangky_dt.php",
					data: {dienthoai:dienthoai},
					success: function(result) { 
						if(result==0){
							$('.dangkymail1 input').attr('value','');
							alert('Đăng ký thành công ! ');
							$('.dangkymail1 input').attr('value','');
						} else if(result==1){
							alert('Số điện thoại đã được đăng ký ! ');
							$('.dangkymail1 input').attr('value','');
						} else if(result==2){
							alert(' ! Đăng ký không thành công . Vui lòng thử lại ');
						}
					}
				});
			}
			return false;
		});
	});
</script>

<div class="senddt">
	<form action="" method="post" name="dangkymail1" class="dangkymail1">
			<input name="dienthoai" type="text" class="input inputdt" placeholder="Nhập số điện thoại của bạn . ">
			<button class="guidt" type="submit" value="">Gửi</button>
	</form>
</div>