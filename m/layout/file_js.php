<script type="text/javascript">
  $(document).ready(function(e) {
    $('#listVideo').change(function(){
      id=$(this).val();
      $.ajax({
        url:'video.php',
        data:'id='+id,
        type:'get',
        async:true,
        success: function(res){
          $('#video').html(res);
          }
        });
      return false;
    });
  });
</script>