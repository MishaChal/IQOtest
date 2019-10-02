function inputRangeSum() {
    range = document.getElementById("range").value;
    sum = document.getElementById("Sum");
    sum.value = range;
}
function inputSum() {
    range = document.getElementById("range");
    sum = document.getElementById("Sum").value;
    range.value=sum;
}
function inputSpv() {
    range = document.getElementById("rangeSpv");
    sum = document.getElementById("SumPopVkl").value;
    range.value=sum;
}
function inputRangeSpv() {
    range = document.getElementById("rangeSpv").value;
    sum = document.getElementById("SumPopVkl");
    sum.value = range;
}
$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'calc.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_form').html('Результат: '+result);
    	},
    	error: function(response) { 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}