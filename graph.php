<?php
//incluindo a classe phplot
include('phplot-5.0.4/phplot.php');
include('request.php');


$feedOzonio = requestFeed(25);
$feedNO2 = requestFeed(28);
$feedSO2 = requestFeed(27);
$datapoints = $feedOzonio->data[0]->datapoints;
$datapointsNO2 = $feedNO2->data[0]->datapoints;
$datapointsSO2 = $feedSO2->data[0]->datapoints;

foreach ($datapoints as $point) {
    $valuesOzonio[] = $point->value[0]->value;
}

foreach ($datapointsNO2 as $point) {
    $valuesNO2[] = $point->value[0]->value;
}

foreach ($datapointsSO2 as $point) {
    $valuesSO2[] = $point->value[0]->value;
}
//Matriz utilizada para gerar os graficos
$data = array(
  array('1/2', $feedOzonio->data[0]->currentValue->value,
                    $feedSO2->data[0]->currentValue->value,
                    $feedNO2->data[0]->currentValue->value),
    array('1', $valuesOzonio[0] , $valuesSO2[0], $valuesNO2[0] ),
    array('1 1/2', $valuesOzonio[1] , $valuesSO2[1], $valuesNO2[1] ),
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
$plot->SetLegend(array('Monoxido de Carbono', 'Ozonio', 'Dioxido de Enxofre'));
# Metodos utilizados para marcar labes, necessario mas nao se aplica neste ex. (manual) :
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->SetYLabel("ppb");
$plot->SetXLabel("Horas");
#Gera o grafico na tela
$plot->DrawGraph();
?>