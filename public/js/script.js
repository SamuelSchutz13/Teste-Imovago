function deletePerson(url, id) {
  if (confirm("Deseja deletar está pessoa?")) {
    $.ajax({
      url: url,
      method: "DELETE",
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
      data: {
        id: id,
      },
    });
  }
}

$(document).ready(function () {
  $('input[name="cpf"]')
    .keydown(function (e) {
      if (
        !(
          (e.keyCode >= 48 && e.keyCode <= 57) ||
          (e.keyCode >= 96 && e.keyCode <= 105) ||
          [8, 9, 37, 39, 46].includes(e.keyCode)
        )
      ) {
        e.preventDefault();
      }
    })
    .mask("000.000.000-00", { reverse: true });

  $('input[name="telefone"]')
    .keydown(function (e) {
      if (
        !(
          (e.keyCode >= 48 && e.keyCode <= 57) ||
          (e.keyCode >= 96 && e.keyCode <= 105) ||
          [8, 9, 37, 39, 46].includes(e.keyCode)
        )
      ) {
        e.preventDefault();
      }
    })
    .mask("(00) 00000-0000");
});
