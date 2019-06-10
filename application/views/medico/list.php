
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CGB- Cadastro de Médicos</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('medico/create') ?>"> Novo Médico</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Nome</th>
          <th>Crm</th>
          <th>Telefone</th>
          <th>Estado</th>
          <th>Cidade</th>
          <th>Especialidade 1</th>
          <th>Especialidade 2</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $medico) { ?>      
      <tr>
          <td><?php echo $medico->nome; ?></td>
          <td><?php echo $medico->crm; ?></td> 
          <td><?php echo $medico->telefone; ?></td>
          <td><?php echo $medico->estado; ?></td>    
          <td><?php echo $medico->cidade; ?></td>
          <td><?php echo $medico->especialidade_one; ?></td>
          <td><?php echo $medico->especialidade_two; ?></td>                          
      <td>
        <form method="DELETE" action="<?php echo base_url('medico/delete/'.$medico->id);?>">
          <a class="btn btn-info" href="<?php echo base_url('medico/'.$medico->id) ?>"> show</a>
         <a class="btn btn-primary" href="<?php echo base_url('medico/edit/'.$medico->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>