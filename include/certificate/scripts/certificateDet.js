$(document).ready(function () {
  var uuid = $("#uuid").val();
  // var id  = $('#id').val();

  $("#addHorsePowerDetailBtn").click(function (e) {
    if ($("#add-horsepower-form")[0].checkValidity()) {
      e.preventDefault();

      $.ajax({
        url: "assets/php/process_horsepower.php",
        method: "post",
        data:
          $("#add-horsepower-form").serialize() +
          "&action=add_HorsePowerDetail",
        success: function (response) {
          console.log(response);
          $("#add-horsepower-form")[0].reset();
          $("#addhorsepowerModal").modal("hide");

          Swal.fire("Added Successfully", "success", "success");
          displayAll();
        },
      });
    }
  });

  $("body").on("click", ".editBtn", function (e) {
    e.preventDefault();
    edit_id = $(this).attr("id");

    $.ajax({
      url: "ajax/horsepower_show.php",
      method: "post",
      data: { edit_id: edit_id },
      success: function (data) {
        $("#edit-horsepower-form").html(data);
      },
    });
  });

  //save update
  $("#editHorsePowerBtn").click(function (e) {
    e.preventDefault();

    $.ajax({
      url: "ajax/horsepower_save.php",
      type: "post",
      data: $("#edit-horsepower-form").serialize(),
      success: function (data) {
        console.log(data);
        Swal.fire("Updated Successfully", "success", "success");
        $("#edit-horsepower-form")[0].reset();
        $("#edithorsepowerModal").modal("hide");

        displayAll();
      },
    });
  });

  displayAll();

  function displayAll() {
    //console.log(uuid);
    //alert(uuid);

    var div = $("#showCertificateDet").html();

    $.ajax({
      url: "assets/php/process_horsepower.php",
      method: "post",
      data: { action: "display_horsePowerDetail", token: uuid },
      success: function (response) {
        if (response == "nodata") {
          $("#btn1").show();
          $("#showCertificateDet").html(div);
        } else {
          $("#showCertificateDet").html(response);
          $("#btn1").hide();
        }
      },
    });
  }
});
