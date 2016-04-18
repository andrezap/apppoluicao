<?php
//incluindo a classe phplot
include('phplot-5.0.4/phplot.php');
include('request.php');

//Matriz utilizada para gerar os graficos 
$data = array(
  array('1', 40), array('2', 30), array('3', 20)
);
#Instancia o objeto e setando o tamanho do grafico na tela
$plot = new PHPlot(600,400);
#Tipo de borda, consulte a documentacao para ver opcoes
#Tipo de grafico, nesse caso barras, existem diversos(pizza...)
#Tipo de dados, nesse caso texto que esta no array
$plot->SetDataType('text-data');
#Setando os valores com os dados do array
$plot->SetDataValues($data);
#Titulo do grafico
$plot->SetTitle('Níveis de Poluentes');
# Legenda, nesse caso serao tres pq o array possui 3 valores que serao apresentados
$plot->SetLegend(array('Monoxido de Carbono'));
# Metodos utilizados para marcar labes, necessario mas nao se aplica neste ex. (manual) :
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->SetYLabel("ppb");
$plot->SetXLabel("Horas");
#Gera o grafico na tela
$plot->DrawGraph();
?>