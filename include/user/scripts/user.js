$(document).ready(function () {
  displayAll();

  // display all
  function displayAll() {
    $.ajax({
      url: "assets/php/process_user.php",
      method: "post",
      data: { action: "displayAll" },
      success: function (response) {
        $("#show").html(response);
        //$("#show").DataTable().Destroy();
        $("#show").DataTable();
      },
    });
  }

  //add
  $("#addUserBtn").click(function (e) {
    if ($("#add-user-form")[0].checkValidity()) {
      e.preventDefault();

      $.ajax({
        url: "assets/php/process_user.php",
        method: "post",
        data: $("#add-user-form").serialize() + "&action=add_newuser",
        success: function (response) {
          console.log(response);
          $("#add-user-form")[0].reset();
          $("#addUserModal").modal("hide");
          Swal.fire("Added Successfully", "success", "success");
          displayAll();
        },
      });
    }
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
          url: "assets/php/process_user.php",
          method: "post",
          data: { del_id: del_id },
          success: function (response) {
            Swal.fire("Deleted!", "Deleted successfully!", "success");
            displayAll();
          },
        });
      }
    });
  });
});
