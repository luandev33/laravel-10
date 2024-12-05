function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
    if (confirm('Realmente deseja Excluir este item?')) {
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function (data){
            $.unblockUI();
            if (data.success == true) {
                window.alert('Deletado com Sucesso');
                window.location.reload();
            } else {
                alert('nao foi possivel excluir');
            }
        }).fail(function (data) {
            $.unblockUI();
            alert('Não foi Possivel buscar os dados!');
        });
    }
}