<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'components/jquery' => array(
            'pretty_version' => '3.5.1',
            'version' => '3.5.1.0',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(),
            'reference' => 'b33e8f0f9a1cb2ae390cf05d766a900b53d2125b',
            'dev_requirement' => false,
        ),
        'predis/predis' => array(
            'pretty_version' => 'v1.1.7',
            'version' => '1.1.7.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../predis/predis',
            'aliases' => array(),
            'reference' => 'b240daa106d4e02f0c5b7079b41e31ddf66fddf8',
            'dev_requirement' => false,
        ),
    ),
);