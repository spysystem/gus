<?php


 function autoload_3d5e003fa94e0bd2d8c5e7a424e7bdb5($class)
{
    $classes = array(
        'GUS\GUSNWSService' => __DIR__ .'/GUSNWSService.php',
        'GUS\makeSaleObjectWithErrorDesc' => __DIR__ .'/makeSaleObjectWithErrorDesc.php',
        'GUS\saleDTO' => __DIR__ .'/saleDTO.php',
        'GUS\makeSaleObjectWithErrorDescResponse' => __DIR__ .'/makeSaleObjectWithErrorDescResponse.php',
        'GUS\makeSaleObject' => __DIR__ .'/makeSaleObject.php',
        'GUS\makeSaleObjectResponse' => __DIR__ .'/makeSaleObjectResponse.php',
        'GUS\makeAssortmentObjectWithErrorDesc' => __DIR__ .'/makeAssortmentObjectWithErrorDesc.php',
        'GUS\assortmentDTO' => __DIR__ .'/assortmentDTO.php',
        'GUS\makeAssortmentObjectWithErrorDescResponse' => __DIR__ .'/makeAssortmentObjectWithErrorDescResponse.php',
        'GUS\makeSpecificationObject' => __DIR__ .'/makeSpecificationObject.php',
        'GUS\specificationDTO' => __DIR__ .'/specificationDTO.php',
        'GUS\makeSpecificationObjectResponse' => __DIR__ .'/makeSpecificationObjectResponse.php',
        'GUS\makeAssortmentObject' => __DIR__ .'/makeAssortmentObject.php',
        'GUS\makeAssortmentObjectResponse' => __DIR__ .'/makeAssortmentObjectResponse.php',
        'GUS\makeMaterialDataObjectWithErrorDesc' => __DIR__ .'/makeMaterialDataObjectWithErrorDesc.php',
        'GUS\materialDataDTO' => __DIR__ .'/materialDataDTO.php',
        'GUS\makeMaterialDataObjectWithErrorDescResponse' => __DIR__ .'/makeMaterialDataObjectWithErrorDescResponse.php',
        'GUS\makeSpecificationObjectWithErrorDesc' => __DIR__ .'/makeSpecificationObjectWithErrorDesc.php',
        'GUS\makeSpecificationObjectWithErrorDescResponse' => __DIR__ .'/makeSpecificationObjectWithErrorDescResponse.php',
        'GUS\makeCorrectionObjectWithErrorDesc' => __DIR__ .'/makeCorrectionObjectWithErrorDesc.php',
        'GUS\correctionDTO' => __DIR__ .'/correctionDTO.php',
        'GUS\makeCorrectionObjectWithErrorDescResponse' => __DIR__ .'/makeCorrectionObjectWithErrorDescResponse.php',
        'GUS\makeCorrectionObject' => __DIR__ .'/makeCorrectionObject.php',
        'GUS\makeCorrectionObjectResponse' => __DIR__ .'/makeCorrectionObjectResponse.php',
        'GUS\makeMaterialDataObject' => __DIR__ .'/makeMaterialDataObject.php',
        'GUS\makeMaterialDataObjectResponse' => __DIR__ .'/makeMaterialDataObjectResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3d5e003fa94e0bd2d8c5e7a424e7bdb5');

// Do nothing. The rest is just leftovers from the code generation.
{
}
