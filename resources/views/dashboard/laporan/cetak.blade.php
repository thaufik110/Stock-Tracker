</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Laporan - {{$judul}}</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
   <style>
      @page {
         size: A4
      }

      h1 {
         font-weight: bold;
         font-size: 20pt;
         text-align: center;
      }

      table {
         border-collapse: collapse;
         width: 100%;
      }

      .table th {
         padding: 3px 8px;
         border: 1px solid #000000;
         text-align: center;
      }

      .table td {
         padding: 3px 10px;
         border: 1px solid #000000;
      }

      .text-center {
         text-align: center;
      }
   </style>
</head>

<body class="A4">
   <section class="sheet padding-10mm">
      <h1>Laporan Daftar {{$judul}}</h1>
      @if($model)
      <table class="table">
         <thead>
            <tr>
               <th>#No</th>
               @foreach ($model->first()->getFillable() as $column)
               @unless(in_array($column, ['created_at', 'updated_at']))
               <th>{{ $column }}</th>
               @endunless
               @endforeach
            </tr>
         </thead>
         <tbody>
            @foreach ($model as $index => $item)
            <tr>
               <td>{{ $index + 1 }}</td>
               @foreach ($item->getAttributes() as $key => $value)
               @unless(in_array($key, ['id','created_at', 'updated_at']))
               <td>{{ $value }}</td>
               @endunless
               @endforeach
            </tr>
            @endforeach
         </tbody>
      </table>
      @else
      <p>Data {{$judul}} Tidak Ada</p>
      @endif
   </section>
   <script>
      window.onload = function() {
         window.print();
      }
   </script>
</body>

</html>