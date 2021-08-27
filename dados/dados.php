<?php
	$quem_somos = array(
		'empresa' =>'Mochi box',
		'imagem'=>'logo.png',
		'ramo' => 'Venda de mochi artesanal',
        'endereco' => 'R. Gerôncio Thives, 790 - Barreiros, São José - SC, 88117-290',
        'email' => 'mochibox@gmail.com',
        'telefone'=>'33423199'
	);

	$produtos = array(
		0 => array('id'=>1, 'titulo'=> 'Daifuku', 'info' => "Doce milenar japonês com brigadeiro de feijão.", 'foto' => './images/Daifuku.png'),
		1 => array('id'=>2, 'titulo'=> 'Chikara', 'info' => "Prato quente de udon com mochi e acompanhamentos.", 'foto' => './images/Chikara-Udon.png'),
		2 => array('id'=>3, 'titulo'=> 'Sakuramochi', 'info' => "Mochi com feijão vermelho envolto de folha de cerejeira.", 'foto' => './images/Sakuramochi.png'),
        3 => array('id'=>4, 'titulo'=> 'Dango', 'info' => "Doce feito de mochiko e coberto com shoyu.", 'foto' => './images/dango.png')
    );

	$produtos_descricao = array(
		0 => array(
            'titulo' => 'Daifuku', 
			'info' => 'O Daifuku é um doce curiosamente feito com arroz (mochi) e feijão (anko). É acrescentado morango e envolvido em uma pequena porção de ancho. A palavra "daifuku" significa "sorte grande". Por este motivo, o doce é considerado símbolo de sorte.',
			'ingrediente' => 'Mochi, feijão e morango.',
            'embalagem' => 'Unidade com 200g',
			'calorias' => '200 kcal',
			'preco' => 'R$5,00'
        ),
		1 => array(
            'titulo' => 'Chikara Udon', 
			'info' => 'Chikara Udon é um prato quente de udon (macarrão japonês feito com farinha de trigo) coberto com mochi, algas, Kamaboko(massa de peixe prensada), cebolinha, tempura e carne. Chikara udon significa de forma literal "Udon da força" e se caracteriza por ter um sabor forte, marcante e reconfortante.',
			'ingrediente' => 'Mochi, udon, peixe, cebolinha e carne.',
			'embalagem' => 'Prato com aproximadamente 400g',
			'calorias' => '300 kcal',
			'preco' => 'R$15,00'
        ),
		2 => array(
            'titulo' => 'Sakuramochi', 
			'info' => 'Sakuramochi é o nome dado ao mochi aromatizado e colorido com flores de cerejeira. É recheado com pasta de feijão vermelho (anko) e envolto em uma folha de cerejeira(sakura) em conserva levemente salgada. O contraste entre o salgado da folha e o doce do anko resulta em um sabor interessante e apreciado.',
			'ingrediente' => 'Mochi, feijão vermelho e folha de cerejeira.',
			'embalagem' => 'Porção com 2 unidades de 150g',
			'calorias' => '220 kcal',
			'preco' => 'R$8,00'
        ),
		3 => array(
            'titulo' => 'Dango', 
			'info' => 'Dango é um bolinho japonês feito de mochiko (farinha de arroz) e coberto com molho shoyu. É vendido em quatro unidades em um palito.',
			'ingrediente' => 'Mochi e shoyu',
			'embalagem' => '4 unidades de 80g',
			'calorias' => '285 kcal',
			'preco' => 'R$7,00'
		),
	);