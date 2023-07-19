$(document).on("click", "#edit-kriteria", function () {
  $(".modal-body #id").val($(this).data("id"));
  $(".modal-body #code").val($(this).data("code"));
  $(".modal-body #keterangan").val($(this).data("keterangan"));
});

$(document).on("click", "#edit-sub", function () {
  $(".modal-body #id").val($(this).data("id"));
  $(".modal-body #code").val($(this).data("code"));
  $(".modal-body #keterangan").val($(this).data("keterangan"));
});

$(document).on("click", "#edit-dokumen", function () {
  $(".modal-body #id").val($(this).data("id"));
  $(".modal-body #image").val($(this).data("image"));
  $(".modal-body #judul").val($(this).data("judul"));
  $(".modal-body #kriteria_id").val($(this).data("kriteria_id"));
  $(".modal-body #sub_id").val($(this).data("sub_id"));
});
$(document).on("click", "#lihat-document", function () {
  $(".modal-body #id").text($(this).data("id"));
  $(".modal-body #image").text($(this).data("asset/assets/img/profile/"));
  $(".modal-body #judul").text($(this).data("judul"));
  $(".modal-body #nama_kriteria").text($(this).data("nama_kriteria"));
  $(".modal-body #nama_sub").text($(this).data("nama_sub"));
});
//gambar
$(document).ready(function () {
  $(".dropify").dropify();
});
