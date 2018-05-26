@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tokhn</div>

                <div class="panel-body">
                   
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <wallet-table-component></wallet-table-component>


                </div>
            </div>
        </div>

          <div class="col-md-8 col-md-offset-2">
            <!-- <add-account-component></add-account-component> -->

          </div>
    </div>

</div>


@endsection
