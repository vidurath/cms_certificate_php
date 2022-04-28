
$(document).ready(function(){

  display();

  function display() {
    $.ajax({
      url: 'assets/php/process_splimiter.php',
      method: 'POST',
      data:{action: 'display'},
      success: function(response) {
        $("#show").html(response);
        $("#show").DataTable();
      }
    })
  }

});
