@foreach($categories as $category)
    <div class="col-md-12">
        <div class="box box-default alert box-solid collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">{{$category->name}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
                <x-category :categories="$category->children"/>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endforeach
