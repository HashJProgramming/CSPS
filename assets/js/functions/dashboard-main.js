$(document).ready(function () {
    columns = [
      { title: "BLOCK", data: 1 },
      { title: "COURSE", data: 2 },
      { title: "SUBJECT", data: 3 },
      { title: "ROOM", data: 4 },
      { title: "TEACHER", data: 5 },
      { title: "DAYS", data: 6 },
      { title: "TIME START", data: 7 },
      { title: "TIME END", data: 8 },
    ];
    api = "assets/php/scripts/getScheduleToday.php";
    initializeDataTable(api, columns);

});