$(document).ready(function () {
  displayAll();

  // display all
  function displayAll() {
    $.ajax({
      url: "assets/php/process_splimiter.php",
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

  //add
  $("#addSpeedLimiterBtn").click(function (e) {
    if ($("#add-speedlimiter-form")[0].checkValidity()) {
      e.preventDefault();

      $.ajax({
        url: "assets/php/process_splimiter.php",
        method: "post",
        data: $("#add-speedlimiter-form").serialize() + "&action=add_sp",
        success: function (response) {
          $("#add-speedlimiter-form")[0].reset();
          $("#addSpeedLimiterModal").modal("hide");
          Swal.fire("Added Successfully", "success", "success");
          displayAll();
        },
      });
    }
  });

  //view
  $("body").on("click", ".editBtn", function (e) {
    e.preventDefault();
    edit_id = $(this).attr("id");
    $.ajax({
      url: "assets/php/process_splimiter.php",
      method: "post",
      data: { edit_id: edit_id },
      success: function (response) {
        data = JSON.parse(response);
        $("#id_speedlimiter").val(data.id);
        $("#txtsnumber").val(data.serialnumber);
        $("#txtmake").val(data.make);
        $("#txtbillreference").val(data.billreference);
        $("#txtvoltage").val(data.voltage);
      },
    });
  });

  // Update ajax req
  $("#editSpeedlimiterBtn").click(function (e) {
    e.preventDefault();
    $.ajax({
      url: "assets/php/process_splimiter.php",
      method: "post",
      data: $("#edit-speedlimiter-form").serialize() + "&action=update_sp",
      success: function (response) {
        Swal.fire("Updated Successfully", "success", "success");
        $("#edit-speedlimiter-form")[0].reset();
        $("#editSpeedLimiterModal").modal("hide");

        displayAll();
      },
    });
  });

  //delete
  $("body").on("click", ".deleteBtn", function (e) {
    e.preventDefault();
    del_id = $(this).attr("id");
    console.log(del_id);

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "assets/php/process_splimiter.php",
          method: "post",
          data: { del_id: del_id },
          success: function (response) {
            Swal.fire(
              "Deleted!",
              "Speedlimiter deleted successfully!",
              "success"
            );
            displayAll();
          },
        });
      }
    });
  });
});
