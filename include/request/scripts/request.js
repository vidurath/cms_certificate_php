$(document).ready(function () {
  displayAll();

  // display all
  function displayAll() {
    $.ajax({
      url: "assets/php/process_request.php",
      method: "post",
      data: { action: "displayAll" },
      success: function (response) {
        $("#show").html(response);
        //$("#show").DataTable().Destroy();
        //$('#show').DataTable().fnDestroy();
        $("#show").DataTable();
      },
    });
  }

  //delete
  $("body").on("click", ".deleteBtn", function (e) {
    e.preventDefault();
    del_id = $(this).attr("id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      // if (result.value) {
      //   $.ajax({
      //     url: "assets/php/process_certificate.php",
      //     method: "post",
      //     data: { del_id: del_id },
      //     success: function (response) {
      //       Swal.fire("Deleted!", "Accused deleted successfully!", "success");
      //       $("#show").DataTable().Destroy();
      //       displayAll();
      //     },
      //   });
      // }
    });
  });
});
