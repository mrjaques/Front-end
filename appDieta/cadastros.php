<?php
// Definir as dietas por categoria
$dietas = [
    "vegana" => [
        "Café da manhã: Smoothie de frutas com leite de amêndoas.",
        "Almoço: Salada de quinoa com grão-de-bico, abacate e molho de limão.",
        "Jantar: Curry de vegetais com arroz integral."
    ],
    "para_hemorroida" => [
        "Café da manhã: Mingau de aveia com linhaça e frutas.",
        "Almoço: Salada de espinafre com abóbora assada e sementes de chia.",
        "Jantar: Sopa de lentilha com batata-doce e cenoura."
    ],
    "sem_acucar" => [
        "Café da manhã: Ovos mexidos com abacate e espinafre.",
        "Almoço: Salada de frango grelhado com azeite e nozes.",
        "Jantar: Filé de peixe assado com legumes cozidos."
    ],
    "low_carb" => [
        "Café da manhã: Omelete de espinafre com queijo.",
        "Almoço: Salada de atum com abacate e azeite.",
        "Jantar: Bife grelhado com brócolis refogado."
    ],
    "alcalina" => [
        "Café da manhã: Smoothie verde com couve, pepino e maçã.",
        "Almoço: Salada de folhas verdes com pepino e abacate.",
        "Jantar: Sopa de abóbora com gengibre."
    ],
    "cetogenica" => [
        "Café da manhã: Ovos com bacon e abacate.",
        "Almoço: Salada de frango com abacate e azeite.",
        "Jantar: Peixe grelhado com couve-flor refogada."
    ]
];

// Função para recomendar dieta com base na categoria
function recomendarDieta($categoria, $dietas) {
    if (isset($dietas[$categoria])) {
        echo "<h2>Recomendações para a dieta $categoria:</h2>";
        foreach ($dietas[$categoria] as $refeicao) {
            echo "<p>$refeicao</p>";
        }
    } else {
        echo "<p>Categoria de dieta não encontrada.</p>";
    }
}

// Exibir as recomendações apenas se o formulário for submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoriaEscolhida = $_POST['categoria'];
    recomendarDieta($categoriaEscolhida, $dietas);
}
?>


