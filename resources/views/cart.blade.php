@extends('layouts.app')

@section('content')

    <div class="container" style="padding-top: 10%">

        <h1 class="text-center">Cart</h1>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="70%">Course Name</th>
                        {{-- <th width="30%">Course type</th> --}}
                        {{-- <th width="15%">Class type</th> --}}
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
                                <td width="70%">{{ $course['course_name'] }} {{ $course['course_type'] }}</td>
                                {{-- <td width="30%"></td> --}}
                                {{-- <td width="15%">{{ $course['course_type'] }}</td> --}}
                                <td width="20%">€{{ $course['course_fee'] }}</td>
                                <td width="10%"><a href="{{ route('remove', [$id]) }}" class="btn btn-danger btn-sm">X</a>
                                </td>

                            </tr>
                        @endforeach
                        {{-- @php
                            $sub_total = $course['course_fee'];
                            $total += $sub_total;
                        @endphp --}}

                    @else
                        <tr>
                            <td width="70%">This cart is empty</td>
                            {{-- <td width="20%">Virtual</td> --}}
                            <td width="20%">€ 0</td>
                            <td width="10%"><a href="#" class="btn btn-danger btn-sm">X</a></td>

                        </tr>
                    @endif


                </tbody>
                <tfoot>
                    <tr>
                        <td>

                            @guest

                                @if (Route::has('login'))
                                    <div>
                                        <a class="btn btn-success" href="{{ route('register') }}">Sign Up</a>
                                    </div>
                                @endif
                            @else
                                <div>
                                    <a class="btn btn-success"
                                        href="https://prudencecollegedublin.transfermateeducation.com/en/register_uni.aspx">Proceed
                                        to Pay</a>
                                </div>
                            @endguest





                        </td>
                        {{-- <td colspan="2"></td> --}}
                        <td><strong>Total € {{ $total }}</strong></td>
                    </tr>
                </tfoot>
            </table>

        </div>

    </div>


@endsection
