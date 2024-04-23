function deletePerson(url, id) {
  if (confirm("Deseja deletar está pessoa?")) {
    $.ajax({
      url: url,
      method: "DELETE",
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
      data: {
        id: id,
      },
      beforeSend: function () {
        $.blockUI({ message: "Deletando", timeout: 3000 });
      },
    })
      .done(function (data) {
        $.unblockUI();
        data.success
          ? window.location.reload()
          : alert("Não foi possível deletar esta pessoa");
      })
      .fail(function (data) {
        $.unblockUI();
        alert("Não foi possível encontrar está pessoa");
      });
  }
}
