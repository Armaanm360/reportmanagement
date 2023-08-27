    $(document).ready(function () {
       
    $("#myTable").on('input', '#txtCal1', function () {
       let calculated_total_sum = 0;
     
       $("#myTable #txtCal1").each(function () {
           let get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
             $("input#total_sum_value1").val(calculated_total_sum);
             console.log(calculated_total_sum);
	});
		
		
    $("#myTable").on('input', '#txtCal2', function () {
       let calculated_total_sum = 0;
     
       $("#myTable #txtCal2").each(function () {
           let get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
             $("input#total_sum_value2").val(calculated_total_sum);
             console.log(calculated_total_sum);
	});
		
		
         $("#myTable").on('input', '#txtCal3', function () {
       let calculated_total_sum = 0;
     
       $("#myTable #txtCal3").each(function () {
           let get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum += parseFloat(get_textbox_value);
              }                  
            });
             $("input#total_sum_value3").val(calculated_total_sum);
             console.log(calculated_total_sum);
		 });
		
		
		
  });