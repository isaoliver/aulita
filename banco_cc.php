<!DOCTYPE html>
< html  lang = " pt-BR " >
< cabeça >
 < meta  charset = " UTF-8 " >
< meta  http-equiv = " X-UA-Compatible "  content = " IE=edge " >
< meta  name = " viewport "  content = " width=device-width, initial-scale=1.0 " >
< title >Controle Bancário - Conta Corrente</ title >
</ cabeça >
< corpo >
    < form  name = " conta_corrente "  method = " post "  action = " conta_corrente.php " >
        <tabela> _ _
            < caption >Cadastro de Conta Corrente</ caption >
            <tr> _ _
                < td >< label  for = " nome " >Nome:</ label ></ td >
                <td> < input type = " text " name : " nome " size = " 40 " maxlenght = " 50 " obrigatório    
                placeholder = " Informe o nome do corretista " ></ td >
</ tr >
<tr> _ _
                < label  for = " agência " >Agência:</ td >
                < td >< input  type = " text "  name = " agencia "  size = " 20 "  maxlength = " 20 "  obrigatório
                placeholder = " Informe o número da agência " ></ td >
</ tr >
<tr> _ _
     < td >< label  for = " banco " >Banco:</ td >
     <td> _ _
         < selecione  nome = " banco " >
             < valor da opção  = " # " ></ opção >
             < opção  valor = " caixa " >Caixa Econômica Federal</ opção >
             < option  value = " brasil " >Banco do Brasil</ option >
             < option  value = " marcentil " >Banco marcentil</ option >
             < valor da opção  = " santander " >Banco Santander</ opção >
             < valor da opção  = " bradesco " >Banco Bradesco</ opção >
</ selecione >
</ td >
</ tr >
<tr> _ _
    < td >< label  for = " conta_corrente " >Conta corrente:</ label</td >
    < td >< input  type = " text "  name = " conta_corrente "  size = " 30 "  maxlength = " 25 " 
    required  placeholder = " Informe o número da conta corrente " ></ td >
</ td >
</ tr >
<tr> _ _
    < td >< label  for = " data_abertura " >Data de abertura:</ label ></ td >
    < input  type = " date "  name = " data_abertura "  obrigatório ></ label >
    </ tr >
<tr> _ _
< td >< label  for = " cpf " >CPF:</ label</td >
    < td >< input  type = " text "  name = " cpf "  tamanho necessário  = " 14 " maxlength = " 14 " ></ 
    </ td >
</td
<tr> _ _
< td >< label  for = " saldo_inicial " >Saldo Inicial:</ label</td >
    < td >< tipo de entrada  = " número " nome = " saldo_inicial " valor = " 0 " parar = " 0,01 "   
    min = " 0 " ></ td >
    </ tr >
<tr> _ _
    < td  colspan = " 2 "  alinhar = " centro " >
        < tipo de entrada  = " enviar " valor = " cadastro " nome = " cadastrar " >  
</ td >
</ tr >
</ tabela >
</forma> _ _
</ corpo >
</html>