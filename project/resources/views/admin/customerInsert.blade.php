@extends('template.bootstrap')
@section('title', 'Customer | Insert')

@section('content')

<section class="vh-100" style="background-color: lightgreen;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <form method="post" action="{{route('admin.handleCustomerInsert')}}" class="card-body p-5 text-center">
                @csrf
                <h3 class="mb-5">Insert New Customer</h3>

                <div class="form-outline mb-4">
                    <input name="nama_customer" type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Nama Customer" >
                </div>

                <div class="form-group">
                    <select class="form-control" id="member-option" name="id_membership">
                    <option value="">Sellect membership</option>
                      @foreach ($memberships as $memberhip)
                          <option value="{{ $memberhip->id }}">{{ $memberhip->nama_membership }}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <input name="alamat_customer" type="text" id="form2Example17" class="form-control form-control-lg" placeholder="Alamat Customer" >
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger" role="alert" >
                        {{$errors->first()}}
                    </div>
                @endif

                <button class="btn btn-primary btn-lg btn-block" type="submit">Insert</button>

            </form>
          </div>
        </div>
      </div>
    </div>
</section>


@endsection
