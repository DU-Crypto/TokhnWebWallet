@extends('layouts.app')

@section('content')
<head>
        <title> TokhnW </title>
    </head>
    <body>
        <h1>Wallet</h1>
    </body>
<div style="width: 500px; margin-left: 20px;">
<load-wallet-component></load-wallet-component>
<add-wallet-component></add-wallet-component>

</div>
 @endsection('content')
