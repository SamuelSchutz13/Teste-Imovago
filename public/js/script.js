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
  $('input[name="cpf"]').mask("000.000.000-00", { reverse: true });
  $('input[name="telefone"]').mask("(00) 00000-0000");
});
