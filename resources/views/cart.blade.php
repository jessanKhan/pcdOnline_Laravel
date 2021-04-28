@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 10%">

        <h1 class="text-center">Cart</h1>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="40%">Course Name</th>
                        <th width="15%">Course type</th>
                        <th width="15%">Class type</th>
                        <th width="20%">Fee</th>
                        <th width="10%"></th>

                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $course)
                            @php
                                $sub_total = $course['course_fee'] * $course['quantity'];
                                $total += $sub_total;
                            @endphp
                            <tr>
                                <td width="40%">{{ $course['course_name'] }}</td>
                                <td width="15%">{{ $course['course_type'] }}</td>
                                <td width="15%">{{ $course['course_type'] }}</td>
                                <td width="20%">{{ $course['course_fee'] }}</td>
                                <td width="10%"><a href="{{ route('remove', [$id]) }}" class="btn btn-danger btn-sm">X</a>
                                </td>

                            </tr>
                        @endforeach
                        {{-- @php
                            $sub_total = $course['course_fee'];
                            $total += $sub_total;
                        @endphp --}}

                    @endif

                    {{-- <tr>
                        <td width="50%">Accounting</td>
                        <td width="20%">Virtual</td>
                        <td width="20%">550</td>
                        <td width="10%"><a href="#" class="btn btn-danger btn-sm">X</a></td>

                    </tr> --}}
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <div>
                                <a class="btn btn-success"
                                    href="https://prudencecollegedublin.transfermateeducation.com/en/register_uni.aspx">Proceed
                                    to Pay</a>
                            </div>




                        </td>
                        <td colspan="2"></td>
                        <td><strong>Total {{ $total }}</strong></td>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>


@endsection
