<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee Attendance Report</title>
    <link rel="stylesheet" href="{{ asset('public/backend') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <style type="text/css">
      table{
        border-collapse : collapse;
      }
      h2,h3{
        margin:0;
        padding:0;
      }
      .table{
        width:100%;
        margin-bottom: 1rem;
        background-color: transparent;
      }
      .table th,
      .table td{
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
      }
      .table thead th{
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
      }
      .table tbody + tbody{
        border-top: 2px solid #dee2e6;
      }
      .table .table{
        background-color: #fff;
      }
      .table bordered{
        border: 1px solid #dee2e6;
      }
      .table bordered th,
      .table bordered td{
        border-bottom-width: 2px;
      }
      .text-center{
        text-align: center;
      }
      .text-center{
        text-align: right;
      }
      table tr td{
        padding: 5px;
      }
      .table bordered thead th, .table bordered td, .table bordered th{
        border: 1px solid black !important;
      }
      .table bordered thead th{
        background-color: #cacaca;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table width="100%">
            <tr>
              <td width="20%" class="text-center"> <img src="{{ url('public/upload/logo.png') }}" alt="" style="width:80px; height:70px;"> </td>
              <td class="text-center" width="20%">
                <h4><strong>Durgapur School</strong></h4>
                <h5><strong>Sylhet, Bangladesh</strong></h5>
                <h6><strong>www.afzalshuhag.com</strong></h6>
              </td>
              <td width="25%" class="text-center"> <img src="{{ url('public/upload/employee_images/'. $allData['0']->user->image) }}" alt="" style="width:80px; height:70px;"> </td>
            </tr>
          </table>
        </div>
        <div class="col-md-12 text-center">
          <h5 style="font-weight:bold; padding-top:-25px; text-align:center;">Employee Attendance Report</h5>
        </div>
        <div class="col-md-12">
          <strong>Employee Name : </strong> {{ $allData['0']->user->name }}, <strong>ID No :</strong> {{ $allData['0']->user->id_no }}, <strong>Month :</strong> {{ $month }}
          <table border="1" width="100%">
            <thead>
              <th>Date</th>
              <th>Attend Status</th>
            </thead>
            <tbody>
              @foreach($allData as $value)
              <tr>
                <td style="width:50%;">{{ date('d-m-Y',strtotime($value->date)) }}</td>
                <td style="width:50%;">{{ $value->attend_status }}</td>
              </tr>
              @endforeach
              <tr>
                <td colspan="2">
                  <strong>Total Absent :</strong> {{ $absents }} <strong>Total Leave :</strong> {{ $leaves }}
                </td>
              </tr>
            </tbody>
          </table>
          <br>
        </div>
        <br>
        <div class="col-md-12">
          <table border="0" width="100%">
            <tbody>
              <tr>
                <td style="width:30%;"></td>
                <td style="width:30%;"></td>
                <td style="width:40%; text-align:center;">
                  <hr>
                  <p style="text-align:center;">Authority</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      </div>
    </div>
  </body>
</html>
