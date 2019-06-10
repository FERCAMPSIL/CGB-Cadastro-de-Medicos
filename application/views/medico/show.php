<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Mostrar Médicos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('medico');?>"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            <?php echo $medico->nome; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Crm:</strong>
            <?php echo $medico->crm; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Crm:</strong>
            <?php echo $medico->crm; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefone:</strong>
            <?php echo $medico->telefone; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Estado:</strong>
            <?php echo $medico->estado; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cidade:</strong>
            <?php echo $medico->cidade; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Especialidade 1:</strong>
            <?php echo $medico->especialidade_one; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Especialidade 2:</strong>
            <?php echo $medico->especialidade_two; ?>
        </div>
    </div>
</div>