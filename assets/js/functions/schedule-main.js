$(document).ready(function () {
  columns = [
    { title: "ID", data: 0 },
    { title: "BLOCK ID", data: 1 },
    { title: "COURSE ID", data: 2 },
    { title: "SUBJECT ID", data: 3 },
    { title: "ROOM ID", data: 4 },
    { title: "TEACHER ID", data: 5 },
    { title: "DAYS", data: 11 },
    { title: "TIME START", data: 12 },
    { title: "TIME END", data: 13 },
    { title: "CREATED AT", data: 14 },
    { title: "ACTION", data: 15 },
  ];
  api = "assets/php/scripts/getSchedule.php";
  initializeDataTable(api, columns);

  submitForm("#add-form", api, columns);
  submitForm("#update-form", api, columns);
  submitForm("#remove-form", api, columns);

  $(document).on("click", 'button[data-bs-target="#update"]', function () {
    var id = $(this).data("id");
    var blockId = $(this).data("block-id");
    var courseId = $(this).data("course-id");
    var subjectId = $(this).data("subject-id");
    var roomId = $(this).data("room-id");
    var teacherId = $(this).data("teacher-id");
    var startTime = $(this).data("start-time");
    var endTime = $(this).data("end-time");
    var monday = $(this).data("monday");
    var tuesday = $(this).data("tuesday");
    var wednesday = $(this).data("wednesday");
    var thursday = $(this).data("thursday");
    var friday = $(this).data("friday");
    var saturday = $(this).data("saturday");
    var sunday = $(this).data("sunday");

    $('#update input[name="id"]').val(id);
    $('#update select[name="block"]').val(blockId);
    $('#update select[name="course"]').val(courseId);
    $('#update select[name="subject"]').val(subjectId);
    $('#update select[name="room"]').val(roomId);
    $('#update select[name="teacher"]').val(teacherId);
    $('#update input[name="start_time"]').val(startTime);
    $('#update input[name="end_time"]').val(endTime);

    $('#update input[name="monday"]').prop('checked', monday);
    $('#update input[name="tuesday"]').prop('checked', tuesday);
    $('#update input[name="wednesday"]').prop('checked', wednesday);
    $('#update input[name="thursday"]').prop('checked', thursday);
    $('#update input[name="friday"]').prop('checked', friday);
    $('#update input[name="saturday"]').prop('checked', saturday);
    $('#update input[name="sunday"]').prop('checked', sunday);

    console.log(id, blockId, courseId, subjectId, roomId, teacherId, startTime, endTime, monday, tuesday, wednesday, thursday, friday, saturday, sunday);
  });

  $(document).on("click", 'button[data-bs-target="#remove"]', function () {
    var id = $(this).data("id");
    $('#remove input[name="id"]').val(id);
    console.log(id);
  });
});