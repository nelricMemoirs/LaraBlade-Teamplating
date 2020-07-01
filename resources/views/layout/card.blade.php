<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$table_title}}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        @include("{$table_1}")
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Tugas Laravel
    </div>
    <!-- /.card-footer-->
</div>