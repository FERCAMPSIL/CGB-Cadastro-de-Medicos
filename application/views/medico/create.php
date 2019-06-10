<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastre Novo Médico</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('medico');?>">Voltar</a>
        </div>
    </div>
</div>
<script>

var base_url = '<? echo base_url() ?>';
 
function busca_cidade(id_cidade){
 
$.post(base_url+"index.php/medico/create", {
id_estado : id_estado
}, function(data){
$('#cidade').html(data);
});
}
</script>


<form method="post" action="<?php echo base_url('medicoCreate');?>">
    <?php


    if ($this->session->flashdata('errors')){
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('errors');
        echo "</div>";
    }


    ?>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="nome" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Crm:</strong>
                <input type="text" name="crm" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                <input type="text" name="estado" class="form-control">
                <select name="estado" id="estado">
                    <? echo $options_estados; ?>
                </select>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                <input type="text" name="cidade" class="form-control">
             
                <select name="estado" id="estado" onchange='busca_cidade($(this).val())'>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especialidade 1:</strong>
                <input type="text" name="especialidade_one" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especialidade 2:</strong>
                <input type="text" name="especialidade_two" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>