<?php

return [

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute n�o � uma URL v�lida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash'           => 'O campo :attribute deve conter apenas letras, n�meros e tra�os.',
    'alpha_num'            => 'O campo :attribute deve conter apenas letras e n�meros.',
    'array'                => 'O campo :attribute deve ser um array.',
    'before'               => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file'    => 'O arquivo :attribute deve ter entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirma��o do campo :attribute n�o confere.',
    'date'                 => 'O campo :attribute n�o � uma data v�lida.',
    'date_equals'          => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format'          => 'O campo :attribute n�o corresponde ao formato :format.',
    'different'            => 'Os campos :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve ter :digits d�gitos.',
    'digits_between'       => 'O campo :attribute deve ter entre :min e :max d�gitos.',
    'dimensions'           => 'O campo :attribute tem dimens�es de imagem inv�lidas.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O campo :attribute deve ser um endere�o de e-mail v�lido.',
    'ends_with'            => 'O campo :attribute deve terminar com um dos seguintes: :values.',
    'exists'               => 'O campo :attribute selecionado � inv�lido.',
    'file'                 => 'O campo :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute � obrigat�rio.',
    'gt'                   => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file'    => 'O arquivo :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior que :value caracteres.',
        'array'   => 'O campo :attribute deve ter mais de :value itens.',
    ],
    'gte'                  => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file'    => 'O arquivo :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array'   => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image'                => 'O campo :attribute deve ser uma imagem.',
    'in'                   => 'O campo :attribute selecionado � inv�lido.',
    'in_array'             => 'O campo :attribute n�o existe em :other.',
    'integer'              => 'O campo :attribute deve ser um n�mero inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endere�o IP v�lido.',
    'ipv4'                 => 'O campo :attribute deve ser um endere�o IPv4 v�lido.',
    'ipv6'                 => 'O campo :attribute deve ser um endere�o IPv6 v�lido.',
    'json'                 => 'O campo :attribute deve ser uma string JSON v�lida.',
    'lt'                   => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file'    => 'O arquivo :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor que :value caracteres.',
        'array'   => 'O campo :attribute deve ter menos de :value itens.',
    ],
    'lte'                  => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file'    => 'O arquivo :attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor ou igual a :value caracteres.',
        'array'   => 'O campo :attribute n�o deve ter mais de :value itens.',
    ],
    'max'                  => [
        'numeric' => 'O campo :attribute n�o pode ser maior que :max.',
        'file'    => 'O arquivo :attribute n�o pode ser maior que :max kilobytes.',
        'string'  => 'O campo :attribute n�o pode ser maior que :max caracteres.',
        'array'   => 'O campo :attribute n�o pode ter mais de :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser no m�nimo :min.',
        'file'    => 'O arquivo :attribute deve ter no m�nimo :min kilobytes.',
        'string'  => 'O campo :attribute deve ter no m�nimo :min caracteres.',
        'array'   => 'O campo :attribute deve ter no m�nimo :min itens.',
    ],
    'not_in'               => 'O campo :attribute selecionado � inv�lido.',
    'not_regex'            => 'O formato do campo :attribute � inv�lido.',
    'numeric'              => 'O campo :attribute deve ser um n�mero.',
    'password'             => 'A senha est� incorreta.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato do campo :attribute � inv�lido.',
    'required'             => 'O campo :attribute � obrigat�rio.',
    'required_if'          => 'O campo :attribute � obrigat�rio quando :other � :value.',
    'required_unless'      => 'O campo :attribute � obrigat�rio, a menos que :other esteja em :values.',
    'required_with'        => 'O campo :attribute � obrigat�rio quando :values est� presente.',
    'required_with_all'    => 'O campo :attribute � obrigat�rio quando todos os :values est�o presentes.',
    'required_without'     => 'O campo :attribute � obrigat�rio quando :values n�o est� presente.',
    'required_without_all' => 'O campo :attribute � obrigat�rio quando nenhum dos :values est�o presentes.',
    'same'                 => 'Os campos :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O arquivo :attribute deve ter :size kilobytes.',
        'string'  => 'O campo :attribute deve ter :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with'          => 'O campo :attribute deve come�ar com um dos seguintes: :values.',
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve ser uma zona v�lida.',
    'unique'               => 'O campo :attribute j� est� em uso.',
    'uploaded'             => 'O campo :attribute falhou ao ser carregado.',
    'url'                  => 'O formato da URL de :attribute � inv�lido.',
    'uuid'                 => 'O campo :attribute deve ser um UUID v�lido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Mensagens de Valida��o
    |--------------------------------------------------------------------------
    |
    | Aqui voc� pode especificar mensagens personalizadas para atributos usando a
    | conven��o "attribute.rule" para nomear as linhas.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensagem-personalizada',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Atributos de Valida��o
    |--------------------------------------------------------------------------
    |
    | As linhas de idioma a seguir s�o usadas para trocar nosso marcador de
    | posi��o de atributo por algo mais amig�vel ao leitor como "E-Mail" em vez de "email".
    |
    */

    'attributes' => [],

];
