<footer>
			   <p>&copy 2017 K.U.--Admin Panel. All Rights Reserved | Design by <a href="#" target="_blank">Milan Thapa </a></p>
			</footer>

<script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>bootstrap/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>

<!-- date and time picker -->
<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/bootstrap-datetimepicker.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>bootstrap/js/locales/bootstrap-datetimepicker.fr.js"></script>
<script type="text/javascript">
    $('.form_date').datetimepicker({
      format: "yyyy-mm-dd hh:ii",
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
      });
</script>

   <!-- file uploader -->
<script>
	$(document).ready(function(){
  $("input[name=file]").on('change',function(){
      var brochore = $(this).val();
      alert(brochore);
    });
// enable and disable slider
$(".s_flag").click(function(){

 var flag = $(this).val();
 var img_id = $(this).parents('div.switch-right').attr('id');
  img_id = img_id.split("s-").join("");
 if(flag==1){
      var flag_val = 0;
  }else{
    var flag_val = 1;
  }
var flag_link = '<?php echo base_url();?>'+'index.php/Admin/sliderStatus';
  $.ajax({
      method:"POST",
      url:flag_link,
      data:{'id':img_id,'flag':flag_val},
      success:function(success){
        if(success=='changed'){
           
        }else{

        }
      }
  });
});
// end and disable slide
$(".delete").click(function(){
  var d_id = $(this).parents('.switch-right').attr('id');
  d_id = d_id.split('s-').join("");
  var d_url = '<?php echo base_url();?>'+'index.php/Admin/deleteS_image';
  $.ajax({
    method:"POST",
    url:d_url,
    data:{'id':d_id},
    success:function(data){
      if(data==1){
        $('#s-'+d_id).hide(1500);
      }else{
        
      }
    }
  });
});

$(".you-clicked").on('click',function(){

  var mail = $(this).attr('name');
  var m_id = mail.split("mail-").join("");
  var link = '<?php echo base_url();?>'+'index.php/Admin/check_mail';
var redirect = '<?php echo base_url();?>'+'index.php/Admin/mailreply';

  $(".mail-display").append('<label class="loading" style="padding-left: 10px;color: #209119;font-size: 50px;position: absolute;top: 30%;left: 45%;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');


  $.ajax({
    method:"POST",
    url:link,
    data:{'id':m_id},
    dataType:'json',
    async:'true',
    success:function(data){
      $.each(data,function(key,val){

        $(".mail-display").empty().append('<div class="well mailvisitor"><div class="panel-header header"><h4><i class="lnr lnr-envelope fa-2x"></i></h4></div><div class="panel-body view-msg"><div class="form-group"><label>Full Name:</label>'+val.full_name+'</div><div class="form-group"><label>Contact Number:</label>'+val.phone_no+'</div><div class="form-group"><label>Registered Program:</label>'+val.program+'<div class="form-group"><label>Email:</label>'+val.email+'</div><div class="form-group"><label>Message:</label><p>'+val.message+'</p></div><a href="'+redirect+'?mailkey='+val.v_id+'" class="btn-new"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a></div></div></div></div>');
          $(".loading").hide();
        });
    }
  });
});

$('.remove').on('click',function(){
  var r_id = $(this).parents('div.single-box').attr('id');
  r_id = r_id.split("r-").join("");
  var d_link = '<?php echo base_url();?>'+'index.php/Admin/delete';
  var table = $(this).attr('tb-name');
  $(".loading").append('<label class="spiner" style="padding-left: 10px;color: #209119;font-size: 50px;position: absolute;top: 30%;left: 45%;"><i class="fa fa-spinner fa-pulse fa-fw"></i><span class="sr-only">Wait...</span></label>');

   $.ajax({
    method:"POST",
    url:d_link,
    data:{'id':r_id,'table':table},
    success:function(data){
     $('#r-'+r_id).hide(1000);
       $(".spiner").remove();
    },
    error: function() {
          alert("There was an error. Try again please!");
           $(".spiner").remove();
        }

});
});

(function(){
    var showChar = 100;
    var ellipsestext = "...";
    
    $('.truncate').each(function() {
        var content = $(this).html();
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content;    
            var html = '<div class="truncate-text" style="display:block">' + c + '<span class="moreellipses">' + ellipsestext + '&nbsp;&nbsp;<a href="" class="moreless more">Show more</a></span></span></div><div class="truncate-text" style="display:none">' + h + '<a href="" class="moreless less">Show less</a></span></div>';
 
            $(this).html(html);
        }
 
    });
 
    $(".moreless").click(function(){
        var thisEl = $(this); 
        if(thisEl.hasClass("less")) {
            thisEl.closest('.truncate-text').prev('.truncate-text').toggle();
            thisEl.closest('.truncate-text').slideToggle(1000);
        } else {
            thisEl.closest('.truncate-text').toggle();
            thisEl.closest('.truncate-text').next('.truncate-text').fadeToggle(1000);
        }
        return false;
    });
    /* end iffe */
    }());


});
</script>
<script src="<?php echo base_url();?>bootstrap/js/jasny-bootstrap.js"></script>
</body>
</html>