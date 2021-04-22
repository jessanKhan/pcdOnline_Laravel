@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 10%">

        <h1 class="text-center">Cart</h1>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="50%">Course Name</th>
                        <th width="20%">Course type</th>
                        <th width="20%">Price</th>
                        <th width="10%"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="50%">Accounting</td>
                        <td width="20%">Virtual</td>
                        <td width="20%">550</td>
                        <td width="10%"><a href="#" class="btn btn-danger btn-sm">X</a></td>

                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>

                            <form action="" method="post">
                                @csrf
                                <input type="hidden" name="amount" value="">
                                <button type="submit" class="btn btn-success">Proceed to Pay
                                </button>

                            </form>

                        </td>
                        <td colspan="2"></td>
                        <td><strong>Total $</strong></td>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>


@endsection
