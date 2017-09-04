</section>
<!--main content end-->
</section>
<!-- container section end -->
<!-- javascripts -->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/jquery-ui-1.10.4.min.js"></script>
<script src="/assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="/assets/js/jquery.scrollTo.min.js"></script>
<script src="/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- custom select -->
<script src="/assets/js/jquery.customSelect.min.js" ></script>
<!--custome script for all page-->
<script src="/assets/js/scripts.js"></script>
<!-- custom script for this page-->
<script src="/assets/js/jquery.autosize.min.js"></script>
<script src="/assets/js/jquery.placeholder.min.js"></script> 
<script src="/assets/js/morris.min.js"></script>
<script src="/assets/js/sparklines.js"></script>    
<script src="/assets/js/jquery.slimscroll.min.js"></script>
<script>
//knob
$(function() {
$(".knob").knob({
'draw' : function () { 
$(this.i).val(this.cv + '%')
}
})
});
//carousel
$(document).ready(function() {
$("#owl-slider").owlCarousel({
navigation : true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true
});
});
//custom select box
$(function(){
$('select.styled').customSelect();
});
</script>
</body>
</html>
