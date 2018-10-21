<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$a=1552;
// Write some HTML code:
$mpdf->WriteHTML('

<div class="clearfix">
    <div id="left">
        Name: [text* your-name]<br/>
        Address: [text Address]<br/>
    </div>
    <div id="right">
        Email: [email* your-email] <br/>
        Contact No: [text your-phone]
    </div>
</div>


<table border="0" style="width:100%;overflow:scroll;">
    <tr>



                <th >Sr no.</th>
                <th>Particulars</th>
                <th>Descriptions</th>
                <th>Hours/Qty</th>
                <th>Unit Price</th>
                <th>Amount</th>
       </tr>

  <tr>

                <td >
                   [text Sr class:sr]
                </td>
                <td >
                    [text part class:part]
                </td>
                <td >
                    [text desc class:desc]
                </td>
                <td >
                    [text hrs class:hrs]
                </td>
                <td >
                    [text unit-p class:unit-p]
                </td>
                <td >
                    [text amt class:amt]
                </td>
  </tr>
  <tr>


                <td >
                   [text srno class:sr]
                </td>
                <td >
                    [text Part class:part]
                </td>
                <td >
                    [text Desc class:desc]
                </td>
                <td >
                    [text Hrs class:hrs]
                </td>
                <td >
                    [text Unit-p class:unit-p]
                </td>
                <td >
                    [text Amt class:amt]
                </td>

  </tr>
  <tr>

                <td >
                    [text Srno class:sr]
                </td>
                <td >
                    [text Particulars class:part]
                </td>
                <td >
                    [text Description class:desc]
                </td>
                <td >
                    [text Hours class:hrs]
                </td>
                <td >
                    [text Unit-Price class:unit-p]
                </td>
                <td >
                    [text Amount class:amt]
                </td>

  </tr>
  <tr>

                <td >
                    [text sr class:sr]
                </td>
                <td >
                    [text particulars class:part]
                </td>
                <td >
                    [text description class:desc]
                </td>
                <td >
                    [text hours class:hrs]
                </td>
                <td >
                    [text U-P class:unit-p]
                </td>
                <td >
                    [text amount class:amt]
                </td>

  </tr>
  <tr>

                <td >
                    [text sr-no class:sr]
                </td>
                <td >
                    [text PART class:part]
                </td>
                <td >
                    [text DESC class:desc]
                </td>
                <td >
                    [text HRS class:hrs]
                </td>
                <td >
                    [text unit-price class:unit-p]
                </td>
                <td >
                    [text AMT class:amt]
                </td>

  </tr>
</table>

<div class="clearfix">
    <div id="left">
        Department Approval: [text depart]<br/>
        Signature: [text sign]<br/>
        Date: [date date]
    </div>
    <div id="right">
        Name: [text vendor-name]<br/>
        Signature: [text signature]
    </div>
</div>
');

// Output a PDF file directly to the browser
$mpdf->Output();
