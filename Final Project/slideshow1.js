function duplicate() {    
    var original = document.getElementById('duplicater');
    var rows = original.parentNode.rows;
    var i = rows.length - 1;
    var clone = original.cloneNode(true); // "deep" clone
    clone.id = "duplic" + (i); // there can only be one element with an ID
    original.parentNode.insertBefore(clone, rows[i]);
}

$('table').on('click', 'input[type="button"]', function(e){
	   $(this).closest('tr').remove();
	});