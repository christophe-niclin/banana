<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">    
</head>

<?php 
echo date('d/m/Y h:i:s');
?>
<br />
<?php 
/* $phone_info[0] = array (
    'marque' => 'Apple',
    'modele' => 'XR',
    'price' => 64.999
);

 $phone_info[1] = array (
    'marque' => 'Apple',
    'modele' => 'XS',
    'price' => 84.999
);

for ($x=0; $x<2; $x++ )

foreach ($phone_info[$x] as $numero)
{
     echo $numero . '<br />';
    }
$x=1;
while ($x<=10)
{
    echo "here i am! n°$x <br />";
    $x++; 
}
$age=19;
if ($age>10)
{echo "hey hey hey <br />";
$autorisation=true;}

else
{
    echo "bye bye <br />";
    $autorisation=false;
}

function meAll ($me,$her,$him)
{
    $alone=$me-$her-$him;
    return $alone;
}

$people=meAll(100,50,10);
echo $people;
*/
?>
<body>
<div class="container py-5">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-7 mx-auto">
            <h1 class="display-4">Liste de produits</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- list group -->
            <ul class="list-group shadow">
                <!-- list group item -->

                <li class="list-group-item">
                    <!-- custom content -->
                    <div class="media align_items-lg-center flex-column flex-lg-row p-3">                        
                        <div class="media-body order-2 order-lg-1">
                            <h5 class="mt-0 font-weight-bold mb-2">Titre</h5>
                            <p class="font-italic text-muted mb-0 small">description</p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2">Price</h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div><img src="#" alt="Image NULL" width="200" class="ml-lg-5 order-1 order-lg-2">
                    </div>
                </li>

                

            </ul>
        </div>
    </div>
</div>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
