$(document).ready(function(){
    $(".calculator_wrp").click(function(){
        $(".fade-me").fadeToggle('slow');

        $('#submita').click(function() {
            var value   =  parseFloat($('#flatprice').val()); 
            var percent =  parseFloat(value * $('#flatpercent').val() / 100);
            var sum     =  value + percent;
            var last    =  sum / parseFloat($('#loanperiod').val());
            $("#monthamount").val(Math.round(last));
       	});
    
    });
});




$('.fla').click(function(){
	$('.zazaza').show();
	$('.zazaza').html('<img src="'+ $(this).attr("imga")+'" id="flo-pic">');

	var id = $(this).attr('id');
	
	console.log(id);

});

$('.zazaza').click(function(){
	$('.zazaza').hide();
});