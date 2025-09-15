<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalho grafos</title>
    <script src="script.php"></script>

</head>
<body>
    <form action="trabalho.php?acao=cidade" method="post">
        <fieldset class="campos_cidade">
            <div class="cidade1">
                <label for="cidades_01">Cidade de origem: </label>
                <select name="cidades_01">
                    <option value="1">AGROLANDIA</option>
                    <option value="2">AGRONOMICA</option>
                    <option value="3">ATALANTA</option>
                    <option value="4">AURORA</option>
                    <option value="5">BRAÇO DO TROMBUDO</option>
                    <option value="6">CHAPADAO DO LAGEADO</option>
                    <option value="7">DONA EMMA</option>
                    <option value="8">IBIRAMA</option>
                    <option value="9">IMBUIA</option>
                    <option value="10">ITUPORANGA</option>
                    <option value="11">JOSE BOITEUX</option>
                    <option value="12">LAURENTINO</option>
                    <option value="13">LONTRAS</option>
                    <option value="14">MIRIM DOCE</option>
                    <option value="15">PETROLANDIA</option>
                    <option value="16">POUSO REDONDO</option>
                    <option value="17">PRESIDENTE GETULIO</option>
                    <option value="18">PRESIDENTE NEREU</option>
                    <option value="19">RIO DO CAMPO</option>
                    <option value="20">RIO DO OESTE</option>
                    <option value="21">RIO DO SUL</option>
                    <option value="22">SANTA TEREZINHA</option>
                    <option value="23">TROMBUDO CENTRAL</option>
                    <option value="24">TAIO</option>
                    <option value="25">VIDAL RAMOS</option>
                    <option value="26">VITOR MEIRELES</option>
                    <option value="27">WITMARSUM</option>
                </select>
            <div>
            <div class="cidade2">
                <label for="cidades_02">Cidade de destino: </label>
                <select name="cidades_02">
                    <option value="1">AGROLÂNDIA</option>
                    <option value="2">AGRONÔMICA</option>
                    <option value="3">ATALANTA</option>
                    <option value="4">AURORA</option>
                    <option value="5">BRAÇO DO TROMBUDO</option>
                    <option value="6">CHAPADÃO DO LAGEADO</option>
                    <option value="7">DONA EMMA</option>
                    <option value="8">IBIRAMA</option>
                    <option value="9">IMBUIA</option>
                    <option value="10">ITUPORANGA</option>
                    <option value="11">JOSÉ BOITEUX</option>
                    <option value="12">LAURENTINO</option>
                    <option value="13">LONTRAS</option>
                    <option value="14">MIRIM DOCE</option>
                    <option value="15">PETROLÂNDIA</option>
                    <option value="16">POUSO REDONDO</option>
                    <option value="17">PRESIDENTE GETÚLIO</option>
                    <option value="18">PRESIDENTE NEREU</option>
                    <option value="19">RIO DO CAMPO</option>
                    <option value="20">RIO DO OESTE</option>
                    <option value="21">RIO DO SUL</option>
                    <option value="22">SANTA TEREZINHA</option>
                    <option value="23">TROMBUDO CENTRAL</option>
                    <option value="24">TAIO</option>
                    <option value="25">VIDAL RAMOS</option>
                    <option value="26">VITOR MEIRELES</option>
                    <option value="27">WITMARSUM</option>
                </select>
            </div>
            <div class="botao"> 
                <input type="submit" value="Calcular distância">  
            </div> 
        </fieldset>    

    </form>    
</body>
</html>

<?php
    $sCidDestino = null;
    $sCidOrigem = null;


    $aCidades = ["Agrolandia", "Agronomica","Atalanta","Aurora","Braco Trombudo","Chapadao do lageado","Dona emma","Ibirama","Imbuia","Ituporanga","Jose Boiteux", "Laurentino", "Lontras","Mirim doce","Petrolandia","Pouso redondo","Presidente getulio","presidente nereu","Rio do campo","Rio do sul","Santa terezinha","Trombudo central","Taio","Vidal ramos","Vitor meireles","Witmarsum"];

    $aDistancias = [["Rio do sul",25,"Ituporanga"],
                    ["Rio do sul",17,"Laurentino"],
                    ["Rio do sul",10,"Trombudo central"],
                    ["Rio do sul",50,"Rio do oeste"],
                    ["Rio do sul",8.75,"Lontras"],
                    ["Rio do sul",15,"Pouso redondo"],
                    ["Rio do sul",36,"Ibirama"],
                    ["Rio do sul",66.3,"Presidente getulio"],
                    ["Ituporanga",15,"Chapadao do lageado"],
                    ["Ituporanga",13,"Vidal ramos"],
                    ["Ituporanga",33.75,"Petrolandia"],
                    ["Ituporanga",22.1,"Imbuia"],
                    ["Ituporaga",55.08,"Agrolandia"],
                    ["Ibirama",21.125,"Agrolandia"],
                    ["Ibirama",34,"Lontras"],
                    ["Ibirama",27,"Presidente getulio"],
                    ["Ibirama",28.9,"Witmarsum"],
                    ["Ibirama",29,"Dona emma"],
                    ["Presidente getulio",19.89,"Jose boiteux"],
                    ["Presidente getulio",18,"Vitor meireles"],
                    ["Presidente getulio",46.25,"Dona emma"],
                    ["Pouso redondo",42.2,"Agrolandia"],
                    ["Pouso redondo",12.6,"Mirim doce"],
                    ["Pouso redondo",8.5,"Taio"],
                    ["Pouso redondo",20,"Salete"],
                    ["Taio",25,"Salete"],
                    ["Taio",39.78,"Mirim doce"],
                    ["Taio",81.6,"Witmarsum"],
                    ["Taio",29.25,"Rio do campo"],
                    ["Laurentino",33,"Jose boiteux"],
                    ["Laurentino",45.9,"Agrolandia"],
                    ["Laurentino",30,"Aurora"],
                    ["Lontras",50.83,"Trombudo central"],
                    ["Lontras",21.25,"Rio do oeste"],
                    ["Trombudo central",10,"Braco trombudo"],
                    ["Trombudo central",38.25,"Presidente nereu"],
                    ["Rio do oeste",20,"Braco trombudo"],
                    ["Rio do oeste",37.57,"Aurora"],
                    ["Dona emma",25,"Santa terezinha"],
                    ["Mirim doce",13,"Santa terezinha"],
                    ["Vitor meireles",14,"Petrolandia"],
                    ["Vitor meireles",13.75,"Witmarsum"],
                    ["Petrolandia",13,"Vidal ramos"],
                    ["Chapadao do lageado",22.1,"Vidal ramos"],
                    ["Chapadao do lageado",13,"Atalanta"],
                    ["Agronomica",25,"Atalanta"],
                    ["Agronomica",25,"Imbuia"],
                    ["Imbuia",14,"Presidente nereu"]];



    if (isset($_POST['cidades_01']) && (isset($_POST['cidades_02']))){  //Pega os valores dos selects
        $iCid1 = $_POST['cidades_01'];
        $iCid2 = $_POST['cidades_02'];
    }
    
    if ($iCid1 == $iCid2){ //Verifica se as cidades são as mesmas
        echo("A cidade de orgiem e destino não podem ser iguais");
    }else{
        foreach($aCidades as $x => $cidade){ //recebem os nomes para origem e destino
            if ($iCid1 -1 == $x){
                $sCidOrigem = $cidade;
            }
            if($iCid2 -1 == $x){
                $sCidDestino = $cidade;
            }
        }
     echo($sCidOrigem . "---" . $sCidDestino); 
    }

?>

<?php
class Dijkstra {
    private $grafo;
    private $distancia;
    private $antecessor;
    private $naoVisitados;

    public function __construct($grafo) {
        $this->grafo = $grafo;
    }

    public function encontrarCaminho($origem, $destino) {
        $this->inicializar($origem);
        
        while (!empty($this->naoVisitados)) {
            $noAtual = $this->encontrarNoMenorDistancia();
            
            if ($noAtual === $destino || $this->distancia[$noAtual] === INF) {
                break;
            }
            
            $this->relaxarVizinhos($noAtual);
        }
        
        return $this->construirCaminho($destino);
    }

    private function inicializar($origem) {
        $this->distancia = array();
        $this->antecessor = array();
        $this->naoVisitados = array();
        
        foreach (array_keys($this->grafo) as $no) {
            $this->distancia[$no] = INF;
            $this->antecessor[$no] = null;
            $this->naoVisitados[$no] = true;
        }
        
        $this->distancia[$origem] = 0;
    }

    private function encontrarNoMenorDistancia() {
        $menorDistancia = INF;
        $noMenorDistancia = null;
        
        foreach ($this->naoVisitados as $no => $valor) {
            if ($this->distancia[$no] < $menorDistancia) {
                $menorDistancia = $this->distancia[$no];
                $noMenorDistancia = $no;
            }
        }
        
        if ($noMenorDistancia !== null) {
            unset($this->naoVisitados[$noMenorDistancia]);
        }
        
        return $noMenorDistancia;
    }

    private function relaxarVizinhos($no) {
        if (!isset($this->grafo[$no])) return;
        
        foreach ($this->grafo[$no] as $vizinho => $distancia) {
            $distanciaAlternativa = $this->distancia[$no] + $distancia;
            
            if ($distanciaAlternativa < $this->distancia[$vizinho]) {
                $this->distancia[$vizinho] = $distanciaAlternativa;
                $this->antecessor[$vizinho] = $no;
            }
        }
    }

    private function construirCaminho($destino) {
        $caminho = array();
        $distanciaTotal = $this->distancia[$destino];
        
        if ($distanciaTotal === INF) {
            return array('caminho' => null, 'distancia' => 'Inalcançável');
        }
        
        $noAtual = $destino;
        
        while ($noAtual !== null) {
            array_unshift($caminho, $noAtual);
            $noAtual = $this->antecessor[$noAtual];
        }
        
        return array('caminho' => $caminho, 'distancia' => $distanciaTotal);
    }
}

// Processamento do formulário e execução do algoritmo
if (isset($_POST['cidades_01']) && isset($_POST['cidades_02'])) {
    $iCid1 = $_POST['cidades_01'];
    $iCid2 = $_POST['cidades_02'];
    
    if ($iCid1 == $iCid2) {
        echo "A cidade de origem e destino não podem ser iguais";
    } else {
        // Mapeamento de IDs para nomes de cidades
        $aCidades = [
            1 => "AGROLÂNDIA", 2 => "AGRONÔMICA", 3 => "ATALANTA", 4 => "AURORA",
            5 => "BRAÇO DO TROMBUDO", 6 => "CHAPADÃO DO LAGEADO", 7 => "DONA EMMA",
            8 => "IBIRAMA", 9 => "IMBUIA", 10 => "ITUPORANGA", 11 => "JOSÉ BOITEUX",
            12 => "LAURENTINO", 13 => "LONTRAS", 14 => "MIRIM DOCE", 15 => "PETROLÂNDIA",
            16 => "POUSO REDONDO", 17 => "PRESIDENTE GETÚLIO", 18 => "PRESIDENTE NEREU",
            19 => "RIO DO CAMPO", 20 => "RIO DO OESTE", 21 => "RIO DO SUL",
            22 => "SANTA TEREZINHA", 23 => "TROMBUDO CENTRAL", 24 => "TAIO",
            25 => "VIDAL RAMOS", 26 => "VITOR MEIRELES", 27 => "WITMARSUM"
        ];
        
        $sCidOrigem = $aCidades[$iCid1];
        $sCidDestino = $aCidades[$iCid2];
        
        // Construir o grafo a partir das distâncias
        $grafo = array();
        
        foreach ($aDistancias as $aresta) {
            $origem = strtoupper($aresta[0]);
            $destino = strtoupper($aresta[2]);
            $distancia = $aresta[1];
            
            if (!isset($grafo[$origem])) {
                $grafo[$origem] = array();
            }
            if (!isset($grafo[$destino])) {
                $grafo[$destino] = array();
            }
            
            $grafo[$origem][$destino] = $distancia;
            $grafo[$destino][$origem] = $distancia; // Grafo não direcionado
        }
        
        // Executar o algoritmo de Dijkstra
        $dijkstra = new Dijkstra($grafo);
        $resultado = $dijkstra->encontrarCaminho($sCidOrigem, $sCidDestino);
        
        // Exibir o resultado
        echo "<h3>Resultado:</h3>";
        echo "<p>De <strong>$sCidOrigem</strong> para <strong>$sCidDestino</strong></p>";
        
        if ($resultado['caminho'] === null) {
            echo "<p>Não existe caminho entre estas cidades</p>";
        } else {
            echo "<p>Distância total: <strong>" . number_format($resultado['distancia'], 2) . " km</strong></p>";
            echo "<p>Caminho: " . implode(" → ", $resultado['caminho']) . "</p>";
        }
    }
}
?>