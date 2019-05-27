(function( $ ) {
  $(function() {

    $(document).ready(function(){

        $('#formulario').submit(function(e) {
            //Captura as datas no formulario
            var dataini = $('#dataini').val();
            var datafim = $('#datafim').val();
            //Converte para timestamp
            dataini = toTimestamp(dataini);
            datafim = toTimestamp(datafim);
            //Compara, caso a data inicial seja maior não envia os dados para gerar relatório
            if(dataini <= datafim){
              e.preventDefault();
              var formulario = $(this);
              var retorno = gerarRelatorio(formulario);
            }else{
              alert("Data de inicio maior que a final. Insira valores adequados para a pesquisa");
            }
        });

        function gerarRelatorio(dados) {

                $.ajax({
                        type: "POST",
                        data:dados.serialize(),
                        url: "assets/db/gerar-relatorio-mensal.php",
                        async:false
                }).then(sucesso, falha);

                function sucesso(data) {
                        //console.log(data);
                        $dados = $.parseJSON(data);
                        console.log($dados);

                        var chart = AmCharts.makeChart( "chartdiv", {
                          "type": "serial",
                          "theme": "light",

                          "dataProvider": $dados,

                          "addClassNames": true,
                          "startDuration": 1,
                          "marginLeft": 0,

                          "categoryField": "horario",
                          "categoryAxis": {
                            "gridPosition": "start",
                            "gridAlpha": 0,
                            "tickPosition": "start",
                            //"tickLength": 20,
                            "title": "Horas"
                          },

                          "valueAxes": [{
                                "id": "a1",
                                "title": "kWh",
                                "gridAlpha": 0,
                                "axisAlpha": 0
                           }],

                          "graphs": [ {
                            "id": "g1",
                            "fillAlphas": 0.9,
                            "type": "column",
                            "title": "consumo",
                            "valueField": "potencia",
                            "valueAxis": "a1",
                            "balloonText": "[[value]] kWh",
                            "legendValueText": "[[value]] kWh",
                            "legendPeriodValueText": "total: [[value.sum]] kWh",
                            "lineColor": "#428bca",
                            "alphaField": "alpha",
                          } ],

                          "chartCursor": {
                            "categoryBalloonEnabled": false,
                            "cursorAlpha": 0,
                            "zoomable": false,
                            "valueBalloonsEnabled": false
                          },

                          "legend": {
                                "bulletType": "round",
                                "equalWidths": false,
                                "valueWidth": 120,
                                "useGraphSettings": true,
                                "horizontalGap": 15,
                                "maxColumns": 1,
                                "position": "top",
                                "useGraphSettings": true,
                                "markerSize": 10
                                //"color": "#FFFFFF"
                           },

                        } );
                }

                function falha() {
                        console.log("erro");
                }
        }

        function toTimestamp(strDate){
          var datum = Date.parse(strDate);
          return datum/1000;
        }


    });

  });
})(jQuery);
