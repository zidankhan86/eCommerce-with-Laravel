@extends('backend.master')

@section('content')




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<div class="card">
    <div class="card-body">
      <div class="container mb-5 mt-3">
        <div class="row d-flex align-items-baseline">
          <div class="col-xl-9">
            <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>INV{{$invoice->total_price}}{{$invoice->id}}</strong></p>
          </div>
          <div class="col-xl-3 float-end">

            {{-- <button class="btn btn-light text-capitalize border-0 no-print" data-mdb-ripple-color="dark" onclick="printInvoice()">
                <i class="fas fa-print text-primary"></i> Print
            </button> --}}


            {{-- <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                class="far fa-file-pdf text-danger"></i> Export</a> --}}
          </div>
          <hr>
        </div>

        <div class="container">
          <div class="col-md-12">
            <div class="text-center">

              <p class="pt-0">nongorfood.com</p>
            </div>

          </div>


          <div class="row">
            <div class="col-xl-8">
              <ul class="list-unstyled">
                <li class="text-muted">To: <span style="color:#5d9fc5 ;">{{$invoice->first_name}}</span></li>
                <li class="text-muted">Address :{{$invoice->address}}</li>
                <li class="text-muted">City :{{$invoice->city}}</li>
                <li class="text-muted"><i class="fas fa-phone"></i> {{$invoice->phone}}</</li>
              </ul>
            </div>
            <div class="col-xl-4">
              <p class="text-muted">Invoice</p>
              <ul class="list-unstyled">
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">ID:</span>NF{{$invoice->total_price}}{{$invoice->id}}</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="fw-bold">Order Date: </span>{{$invoice->updated_at}}</li>
                <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                    class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                    Paid</span></li>
              </ul>
            </div>
          </div>

          <div class="row my-2 mx-1 justify-content-center">
            <table class="table table-striped table-borderless">
              <thead style="background-color:#84B0CA ;" class="text-white">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Products</th>
                  {{-- <th scope="col">Qty</th> --}}
                  <th scope="col">Unit Price</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{$invoice->id}}</th>
                  <td>{{$invoice->name}}</td>
                  {{-- <td>4</td> --}}
                  <td>{{$invoice->total_price}} Tk.</td>
                  <td>{{$invoice->total_price}} Tk.</td>
                </tr>


              </tbody>

            </table>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <p class="ms-3">Add additional notes and payment information</p>

            </div>
            <div class="col-xl-3">
              <ul class="list-unstyled">
                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>{{$invoice->total_price}} Tk.</li>

              </ul>
              <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                  style="font-size: 25px;">{{$invoice->total_price}} Tk.</span></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-xl-10">
              <p>Thank you for your purchase</p>
            </div>
            <div class="col-xl-2">
                <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark" onclick="printInvoice()">
                    <i class="fas fa-print text-primary"></i> Print
                </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    function printInvoice() {
        window.print();
    }

    function generatePDF() {
        const doc = new jsPDF();
        const element = document.getElementById("invoice");

        // Use html2canvas to capture the content of the "invoice" element
        html2canvas(element).then((canvas) => {
            const imgData = canvas.toDataURL("image/png");
            doc.addImage(imgData, "PNG", 10, 10, 190, 250);
            doc.save("invoice.pdf");
        });
    }
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

@endsection
