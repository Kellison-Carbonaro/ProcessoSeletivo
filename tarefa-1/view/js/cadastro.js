$(".btn-cadastrar").click(function (e) {
    e.preventDefault();
    var marca = $("#marca").val();
    var modelo = $("#modelo").val();
    var cor = $("#cor").val();
    var motor = $("#motor").val();
    var data = { marca: marca, modelo: modelo, cor: cor, motor: motor }    
    $.ajax({
        dataType: "json",
        method: 'POST',
        url: "http://localhost/kryptontech/ProcessoSeletivo/tarefa-1/controller/cadastrar.php",
        data: { data: data }
    }).done(function (result) {
        console.log(result);
        if (result == 'Carro cadastrado com sucesso') {
            $("#marca").val('');
            $("#modelo").val('');
            $("#cor").val('');
            $('.msg').css({"display" : "block", "background-color" : "#39ff14"});
            $('.mensagem').css({"display" : "block", "color" : "#000"});       
            $('.mensagem').text('Sucesso ao cadastrar veículo');
        } else {
            marcaNull = "Marca ";
            modeloNull = "Modelo ";
            corNull = "cor ";
            motorNull = "Motor ";
            if( $("#marca").val().length > 0 ){
                var marcaNull = " ";
            }
            if( $("#modelo").val().length > 0 ){
                var modeloNull = " ";
            }
            if( $("#cor").val().length > 0 ){
                var corNull = " ";
            }
            if( $("#motor").val().length > 0 ){
                var motorNull = " ";
            }
            $('.msg').css({"display" : "block", "background-color" : "#F00"});
            $('.mensagem').css({"display" : "block", "color" : "#fff"});       
            $('.mensagem').text('Veículo não cadastrado, Preencher os campos obrigátorios: ' + marcaNull + modeloNull + corNull + motorNull);
        }
    });
});