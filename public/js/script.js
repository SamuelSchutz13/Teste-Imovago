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
