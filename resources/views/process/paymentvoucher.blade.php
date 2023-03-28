<script>

var x = 2;

$("#addsheet").click(function(){
	$("#sheetdata").append('<tr id="'+x+'"><td><p id="sn">'+x+'</p></td><td><input type="text" class="form-control" id="description[]" name="description[]" placeholder="Description"></td><td><input type="text" class="form-control" id="qty[]" name="qty[]" placeholder="0"></td><td><input type="text" class="form-control" id="price[]" name="price[]" placeholder="0.00"></td><td><p class="form-control" id="amount[]">0.00</p><input type="hidden" class="form-control" id="amounts[]" name="amounts[]" placeholder="0.00"></td><td><input type="text" class="form-control" id="vatp[]" name="vatp[]" placeholder="0.00"></td><td><p class="form-control" id="amount[]">0.00</p><input type="hidden" class="form-control" id="vata[]" name="vata[]" placeholder="0.00"></td><td><p class="form-control" id="amount[]">0.00</p><input type="hidden" class="form-control" id="gross[]" name="gross[]" placeholder="0.00"></td><td><input type="text" class="form-control" id="whtp[]" name="whtp[]" placeholder="0.00"></td><td><p class="form-control" id="amount[]">0.00</p><input type="hidden" class="form-control" id="whta[]" name="whta[]" placeholder="0.00"></td><td><p class="form-control" id="amount[]">0.00</p><input type="hidden" class="form-control" id="net[]" name="net[]" placeholder="0.00"></td></tr>');

	x++;
});



$("#minussheet").click(function(){

	x--;
	
	$("#"+x).remove();

	if(x<2){
		x=2
	}

});

</script>