$(document).ready(function () {
    columns = [
      { title: "ID", data: 0 },
      { title: "First Name", data: 1 },
      { title: "Last Name", data: 2 },
      { title: "Middle Name", data: 3 },
      { title: "Suffix", data: 4 },
      { title: "Birthdate", data: 5 },
      { title: "Sex", data: 6 },
      { title: "Region", data: 7 },
      { title: "Province", data: 8 },
      { title: "Municipality", data: 9 },
      { title: "Barangay", data: 10 },
      { title: "Address", data: 11 },
      { title: "Phone", data: 12 },
      { title: "Created At", data: 13 },
      { title: "Action", data: 14 },
    ];
    api = "assets/php/scripts/getTeacher.php";
    initializeDataTable(api, columns);
  
    submitForm("#add-form",  api, columns);
    submitForm("#update-form",  api, columns);
    submitForm("#remove-form",  api, columns);
  
    $(document).on("click", 'button[data-bs-target="#update"]', function () {
      var id = $(this).data("id");
      var firstname = $(this).data("firstname");
      var lastname = $(this).data("lastname");
      var middlename = $(this).data("middlename");
      var suffix = $(this).data("suffix");
      var birthdate = $(this).data("birthdate");
      var sex = $(this).data("sex");
      var region = $(this).data("region");
      var province = $(this).data("province");
      var municipality = $(this).data("municipality");
      var barangay = $(this).data("barangay");
      var address = $(this).data("address");
      var phone = $(this).data("phone");
      $('#update input[name="id"]').val(id);
      $('#update input[name="firstname"]').val(firstname);
      $('#update input[name="lastname"]').val(lastname);
      $('#update input[name="middlename"]').val(middlename);
      $('#update input[name="suffix"]').val(suffix);
      $('#update input[name="birthdate"]').val(birthdate);
      $('#update input[name="sex"]').val(sex);
      $('#update select[name="region"]').val(region);
      $('#update select[name="province"]').val(province);
      $('#update select[name="municipality"]').val(municipality);
      $('#update select[name="barangay"]').val(barangay);
      $('#update input[name="address"]').val(address);
      $('#update input[name="phone"]').val(phone);
      console.log(id, firstname, lastname, middlename, suffix, birthdate, sex, region, province, municipality, barangay, address, phone);
    });
  
    $(document).on("click", 'button[data-bs-target="#remove"]', function () {
      var id = $(this).data("id");
      $('#remove input[name="id"]').val(id);
      console.log(id);
    });
  });
  