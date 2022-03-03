# Objetivo
Criado para facilitar a busca do endereço pelo CEP

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho\cep-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho\cep-php": "dev-master",
        "php": ">=7.0"
    }

```

# Exemplos de uso

```

<?php

require __DIR__ . '/vendor/autoload.php';

use OizumiJunho\CEP\CEP;

var_dump(CEP::BuscarEnderecoPeloCEP(81200500));

```