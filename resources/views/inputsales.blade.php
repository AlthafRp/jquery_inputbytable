@extends('layouts.main')
@section('style')
  <style>
    #number_Q {
      display: none;
    }
  </style>
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Input Sales</h1>
        </div>
        <div class="section-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">nama client</th>
                <th scope="col">nama project</th>
                <th scope="col">tanggal buat</th>
                <th scope="col">Q1</th>
                <th scope="col">Q2</th>
                <th scope="col">Q3</th>
                <th scope="col">Q4</th>
                <th scope="col">action</th>

              </tr>
            </thead>
            @php $no = 1; @endphp
            @foreach ($aa as $item)
            <tbody>
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$item->NamaClient}}</td>
                <td>{{$item->NamaProject}}</td>
                <td>{{$item->Date}}</td>
                <td>{{$item->Q1}}</td>
                <td>{{$item->Q2}}</td>
                <td>{{$item->Q3}}</td>
                <td>{{$item->Q4}}</td>
                <td>{{$item->Status}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>

        <form action="{{route ('simpan-data')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="mb-3 row">
            <label for="inputNamaClient" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Nama Client</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="NamaClient" placeholder="Nama Client" id="inputNamaClient">
            </div>
          </div>

          <div class="mb-2 row">
            <label for="inputNamaProject" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Nama Project</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="NamaProject" placeholder="Nama Project" id="inputNamaProject">
            </div>
          </div>
          <div class="mb-2 row">
            <label for="inputtl" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">tl</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="timeline" placeholder="Nama Project" id="inputtl">
            </div>
          </div>

          <div class="mb-2 row">
            <label for="inputTimeline" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Timeline</label>
            <div class="col-sm-10">
            <select class="form-control" id="timeline">
                <option value="" for="angka" selected readonly>-- Timeline --</option>
                <option value="Q1">Q1</option>
                <option value="Q2">Q2</option>
                <option value="Q3">Q3</option>
                <option value="Q4">Q4</option>
            </select>
            <div class="form-group pt-3" id="number_Q">
              <label>
                Angka <strong id="title_Q"></strong>
              </label>
              <input type="number" class="form-control" id="val_timeline">
            </div>
            </div>
          </div>
    

          <div class="mb-2 row">
            <label class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Date</label>
            <div class="col-sm-10">
              <input type="date" name="Date" class="form-control date">
            </div>
          </div>

          {{-- <div class="mb-2 row">
            <label for="inputAngka" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Angka</label>
            <div class="col-sm-10">
              <input type="number" name="Q1,Q2,Q3,Q4" class="form-control" placeholder="Angka" id="angka">
            </div>
          </div> --}}

          <div class="mb-2 row">
            <label for="inputStatus" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Status</label>
            <div class="col-sm-10">
            <select class="form-control" name="Status">
                <option value="">-- Tender, Menang, Kalah --</option>
                <option value="Tender"> Tender</option>
                <option value="Menang"> Menang</option>
                <option value="Kalah"> Kalah</option>
            </select>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="inputta" class="col-sm-2 col-form-label" style="color:black;font-weight:bold">Note</label>
            <div class="col-sm-10">
              <textarea name="Note" id="inputta" name="Note" class="form-control"></textarea>
            </div>
          </div>

          <div class="col-sm-12 col-md-7">
            <button class="btn btn-primary">Save</button>
          </div>
        </form>
    </section>
@endsection
@section('js')
<script>
  $( document ).ready(function() {
    $('#timeline').on('change', function() {
      $('#number_Q').css('display', 'block')
      $('#title_Q').text(this.value)
      $("#val_timeline").attr('name', this.value).val(this.value)
    })
  });
</script>
@endsection