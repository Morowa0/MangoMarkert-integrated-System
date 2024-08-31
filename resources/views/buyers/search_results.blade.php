<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style type="text/css">
          /* General styling */
          .h2 {
            padding-top: 10px;
            text-align: center;
            font-weight: bold;
        }

        /* Table border styling */
        table {
            border-collapse: collapse;
            width: 100%; /* Let the table take full width of its container */
            max-width: 1300px; /* Max width for the table */
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
            table-layout: fixed;
            background-color: white;
        }

        /* Table header styling */
        th, td {
            border: 1px solid #D89837;
            text-align: left;
            padding: 8px;
            word-wrap: break-word;
        }

        /* Table header background color */
        th {
            background-color: #f2f2f2;
        }

        /* Alternating row colors */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Hover effect on rows */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Print-specific styles */
        @media print {
            body {
                margin: 0;
                padding: 0;
                -webkit-print-color-adjust: exact; /* Ensure colors are printed as defined */
            }

            /* Hide elements not necessary for printing */
            .no-print {
                display: none;
            }

            /* Remove table borders for print */
            table, th, td {
                border: none;
            }

            /* Adjust table for print */
            table {
                max-width: 100%; /* Ensure table fits within page width */
                font-size: 14px; /* Adjust font size for print */
            }

            th, td {
                padding: 6px;
            }

            th {
                background-color: #D89837; /* Ensure header background prints correctly */
                color: white; /* Ensure text is readable */
            }

            /* Center the table on the print view */
            center {
                display: block;
                text-align: center;
            }
        }
        .print-button button {
        background-color: transparent;
        border: none;
        color: red;
        cursor: pointer;
        font-size: 30px;

    }
    </style>
</head>
<body>
    @if($product->isEmpty())
        <p>No results found.</p>
    @else
  
    <center>
        <div class="print-button no-print">
            <button onclick="window.print()">
                <i class="fas fa-print"></i>
            </button>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="6">
                        <h2 class="h2">Search Result(s)</h2>
                    </th>
                </tr>
                <tr>
                    <th style="width: 20%;">Order Number</th>
                    <th style="width: 25%;">Farmer Name</th>
                    <th style="width: 15%;">Payment</th>
                    <th style="width: 10%;">Price in Ksh/Kg</th>
                    <th style="width: 10%;">Status</th>
                    <th style="width: 10%;">Order Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                <tr>
                    <td>{{$item->order_number}}</td>
                    <td>{{$item->farmer_name}}</td>
                    <td>{{$item->duration}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->status}}</td>
                    <td>{{$item->order_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </center>
    @endif
   
</body>
</html>
