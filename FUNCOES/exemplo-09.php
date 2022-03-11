<?php
//FUNÇÕES RECURSIVAS

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=> array(
                    //Inicio: Gerente de VEndas
                    'nome_cargo'=>'Gerente de Vendas'
                    )
                    //Termino: Gerente de VEndas
                )
            ),
            //termino: Diretor Comercial
            //Inicio: Diretor Financeiro                
            array(
                'nome_cargo'=>'Diretor financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //inicio: supervisor de pagamentos
                                'nome_cargo'=> 'Supervisor de Pagamentos'
                        )//termino: supervisor de pagamentos
                    )
                )
            )//termino: Diretor Financeiro
        )
    );


?>