$(document).ready(function () {
  var uuid = $("#uuid").val();

  $("#add-form").submit(function (e) {
    e.preventDefault();
    var form_data = new FormData(this);

    $.ajax({
      url: "assets/php/process_upload.php",
      method: "post",
      data: form_data,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        $("#AddModal").modal("hide");
        $("#add-form")[0].reset();

        display();
      },
    });
  });

  display();

  function display() {
    var div = $("#showupload").html();
    $.ajax({
      url: "assets/php/process_upload.php",
      method: "post",
      data: { action: "display_upload", uuid: uuid },
      success: function (response) {
        if (response == "nodata") {
          $("#btn2").show();
          $("#showupload").html(div);
        } else {
          $("#showupload").html(response);
          $("#btn2").hide();
        }
      },
    });
  }

  //delete Accused
  $("body").on("click", ".deletebtn", function (e) {
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
          url: "assets/php/process_upload.php",
          method: "post",
          data: { del_id: del_id },
          success: function (response) {
            Swal.fire("Deleted!", "Accused deleted successfully!", "success");
            display();
          },
        });
      }
    });
  });

  //display more info
  $("body").on("click", ".infoBtn", function (e) {
    e.preventDefault();
    info_idacc = $(this).attr("id");
    $.ajax({
      url: "assets/php/process_case_accused.php",
      method: "post",
      data: { info_idacc: info_idacc },
      success: function (response) {
        data = JSON.parse(response);

        // Swal.fire({
        //   title: data.AAV_Type,
        //   type: "info",
        //   html:
        //     "<b>Surname:</b>&nbsp;" +
        //     data.AAV_Surname +
        //     "<br><b>Othername:</b>&nbsp;" +
        //     data.AAV_Othername +
        //     "<br><b>Gender:</b>&nbsp;" +
        //     data.AAV_Gender
        // });
      },
    });
  });
});
