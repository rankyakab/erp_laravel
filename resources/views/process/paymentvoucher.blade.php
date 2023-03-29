<script>

var x = 2;

$("#addsheet").click(function(){
	
	$("#sheetdata").append('<tr id="'+x+'"><td><p id="sn">'+x+'</p></td><td><input type="text" class="form-control" id="description'+x+'" name="description[]" placeholder="Description"></td><td><input type="text" class="form-control" id="qty'+x+'" name="qty[]" placeholder="0"></td><td><input type="text" class="form-control" id="price'+x+'" name="price[]" placeholder="0.00"></td><td><p class="form-control" id="amount'+x+'">0.00</p><input type="hidden" class="form-control" id="amounts'+x+'" name="amounts[]" placeholder="0.00"></td><td><input type="text" class="form-control" id="vatp'+x+'" name="vatp[]" placeholder="0.00"></td><td><p class="form-control" id="vatamount'+x+'">0.00</p><input type="hidden" class="form-control" id="vata'+x+'" name="vata[]" placeholder="0.00"></td><td><p class="form-control" id="grossamount'+x+'">0.00</p><input type="hidden" class="form-control" id="gross'+x+'" name="gross[]" placeholder="0.00"></td><td><input type="text" class="form-control" id="whtp'+x+'" name="whtp[]" placeholder="0.00"></td><td><p class="form-control" id="whtamount'+x+'">0.00</p><input type="hidden" class="form-control" id="whta'+x+'" name="whta[]" placeholder="0.00"></td><td><p class="form-control" id="netamount'+x+'">0.00</p><input type="hidden" class="form-control" id="net'+x+'" name="net[]" placeholder="0.00"></td></tr>');


	$("#counter").val(x);

	x++;

});



$("#minussheet").click(function(){

	x--;

	//$("#counter").val(x);
	
	$("#"+x).remove();

	if(x<2){
		x=2
	}

});


var a = $("#counter").val();



$("#qty"+a).keyup(function(){

	alert(a);

	var qty = $("#qty"+a).val();

	alert(qty);
});



</script>