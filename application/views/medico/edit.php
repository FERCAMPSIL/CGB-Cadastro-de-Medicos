<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Médicos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('medico');?>"> Back</a>
        </div>
    </div>
</div>


<form method="post" action="<?php echo base_url('medico/update/'.$medico->id);?>">
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
                <input type="text" name="nome" class="form-control" value="<?php echo $medico->nome; ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Crm:</strong>
                <textarea name="text" class="form-control"><?php echo $medico->crm; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefone:</strong>
                <textarea name="text" class="form-control"><?php echo $medico->telefone; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                <textarea name="text" class="form-control"><?php echo $medico->estado; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cidade:</strong>
                <textarea name="text" class="form-control"><?php echo $medico->cidade; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especialidade 1 :</strong>
                <textarea name="text" class="form-control"><?php echo $medico->especialidade_one; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especialidade 2:</strong>
                <textarea name="text" class="form-control"><?php echo $medico->especialidade_two; ?></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>


</form>