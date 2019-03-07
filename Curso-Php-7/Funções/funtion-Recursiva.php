

<?php
/**
 * ====================== FUNÇÃO RECURSIVA ===========================
 * Usada em situações onde a função chama a ela mesma...
 * 
 * Exemplo:
 * - CEO
 *      - Diretor de Projetos
 *          - Gerente de Projetos
 * 
 *      - Analista de Sistema Pleno
 *          - Analista de Sistema Pleno
 *              -Analista de Sistema Senior
 *                  - Analista de Sistema Junior
 * 
 *          - Gerente de Contas a Pagar
 *              - Supervisor de Compras a Pagar
 */
$hierarquia = array(
    array(
        'nome_cargo' => 'Diretor de Projetos', // Esse é o cargo principal da hierarquia
        'subordinados'  => array( // Aqui temos um array pois podem haver mais de um subordinado
            // Inicio: Diretor Comercial
            array(
                'nome_cargo'    => 'Diretor de Projetos',
                'subordinados'  => array( // Inicio dos Subordinados
                    // Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Projetos',                 
                    ),
                    // Término: Gerente de Projetos
                    
                ) // Término dos Subordinados
            ),
            // Término: Diretor de Projetos
            
            // Inicio: Analista de Sistema
            array(
                'nome_cargo'    => 'Analista de Sistema Pleno',
                'subordinados'  => array( // Inicio dos Subordinados
                    // Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Analista de Sistema Senior',
                        'subordinados'=>array(
                            array(
                                'nome_cargo' =>'Analista de Sistema Junior',
                                
                            )
                        )
                    ),      
                    
                    // Término: Gerente de Compras
                    
                ) // Término dos Subordinados
            ),
            // Término: Diretor Financeiro
            
        )
    )
);
function exibe($cargos){
    
    $html = '<ul>'; // aqui está definindo
    
    foreach ($cargos as $cargo) { // para cada cargo em $cargos, cria um novo $cargo 
        
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
       
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            
            $html .= exibe($cargo['subordinados']);
            
        }
        $html .= "</li>";
    }
    
    $html .= "</ul>"; // aqui concatenando
    
    return $html;
}
echo exibe($hierarquia);

