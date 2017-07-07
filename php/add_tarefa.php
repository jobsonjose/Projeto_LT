<?php include 'cabecalho.php'; ?>

<div class="py-5 w-100 mx-auto h-75">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-12 my-4 py-4">
                <h2 class="text-center py-1">Criando uma tarefa</h2>
                <form class="">
                    <div class="form-group"><label>Tarefa</label>
                        <textarea class="form-control" rows="5" cols="50"> </textarea>
                        <div class="form-group"><label>Data</label>
                            <input type="date" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Adicionar Tarefa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
