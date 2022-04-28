$(document).ready(function () {
  var uuid = $("#uuid").val();

  $("#addNoteBtn").click(function (e) {
    e.preventDefault();
  if ($("#add-form")[0].checkValidity()) {
    e.preventDefault();

    $.ajax({
      url: "assets/php/process_note.php",
      method: "post",
      data:
        $("#add-note-form").serialize() +
        "&action=add_Note",
      success: function (response) {
        $("#add-note-form")[0].reset();
        $("#AddNoteModal").modal("hide");

        Swal.fire("Added Successfully", "success", "success");
        display();
        },
      });
    }
  });

  display();

  function display() {
    var div = $("#showNote").html();
    $.ajax({
      url: "assets/php/process_note.php",
      method: "post",
      data: { action: "display_note", uuid: uuid },
      success: function (response) {
        if (response == "nodata") {
          $("#btn3").show();
          $("#showNote").html(div);
        } else {
          $("#showNote").html(response);
          $("#btn3").hide();
        }
      },
    });
  }
});
