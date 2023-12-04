$(function () {
  // $(".ubah-tombol").on("click", function () {
  //   const id = $(this).data("id");
  //   $.ajax({
  //     url: "http://localhost:8080/Latihan-PHP/ToDoList-Project/app/view/Aksi/getJSON.php",
  //     data: { id: id },
  //     method: "post",
  //     dataType: "json",
  //     success: function (data) {
  //       $("#judul-modal").val(data.judul);
  //       $("#deskripsi-modal").val(data.deskripsi);
  //       $("#deadline-modal").val(data.deadline);
  //       $("#prioritas-modal").val(data.prioritas);
  //       $("input[name='btnradio'][value='" + data.status + "']").prop(
  //         "checked",
  //         true
  //       );
  //       $("#id-modal").val(data.id);
  //       console.log(data);
  //     },
  //     error: function (xhr, status, error) {
  //       console.log(xhr.responseText);
  //     },
  //   });
  // });

  $(".filter-btn").on("change", function() {
    filterData();
  });

  function filterData() {
    const selectedStatus = $(".filter-btn[data-status]:checked").map(function() {
      return $(this).data("status");
    }).get();

    const selectedPrioritas = $(".filter-btn[data-prioritas]:checked").map(function() {
      return $(this).data("prioritas");
    }).get();

    $(".data-row").each(function() {
      const status = $(this).data("status");
      const prioritas = $(this).data("prioritas");

      if (selectedStatus.includes(status) && selectedPrioritas.includes(prioritas)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }

  filterData();
});
