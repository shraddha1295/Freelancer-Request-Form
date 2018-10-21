<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$a=1552;
print_r($_POST);
exit;
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
                  '.$_POST['requestId'].'
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
