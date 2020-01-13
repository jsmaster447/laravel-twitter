@extends('layouts.app')

@section('content')
<div class="con1tainer row">
        <div class="col-lg-3" style="text-align: center;"></div>
        <div class="col-lg-6" style="text-align: center;">
           
             
                    <h2>Spammers List</h2>
                    <table class="table-bordered table-secondary table-striped text-center" id="tbl_profile" style="width: 100%;">
                        <tr>
                            <td style="width:5%">No</td>
                            <td style="width:8%">Name</td>
                             <td style="width:8%">Applied date</td>
                            <td style="width:8%">Action</td>
                        </tr>
                     <?php $i=0;?>
                        @foreach ($spammers as $spammer)
                            <tr>
                                <td> {{ ++$i }}</td>
                                <td> {{ $spammer->name }}</td>
                                <td> {{ $spammer->created_at }}</td>
                                <td >{{ $spammer->state }}</td>
                                
                            </tr>
                        @endforeach
                    </table>
                
           </div>
            <div class="col-lg-3" style="text-align: center;"></div>
    </div>
       
    <script>
    
</script>
<style type="text/css">
    .invisible{
        display: none;
        height: 0px;
    }
    td{
        text-align: center;

    }
</style>
</div>
@endsection
