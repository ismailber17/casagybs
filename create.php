<?php

$token = getenv("ECOTRACK_TOKEN");

$url = "curl --location -g --request POST '{{url}}/api/v1/create/order?reference=null&nom_client=&telephone=&telephone_2=null&adresse=&code_postal=null&commune=&code_wilaya=&montant=&remarque=null&produit=null&boutique=null&type=&stop_desk=null'"; // ضع الرابط الصحيح هنا

$data = [
    "nom_client" => $_POST['customer_name'],
    "telephone" => $_POST['phone'],
    "wilaya" => $_POST['wilaya'],
    "commune" => $_POST['commune'],
    "adresse" => $_POST['address'],
    "montant" => $_POST['price'],
    "commentaire" => $_POST['note']
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $token"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);

curl_close($ch);

echo "<pre>";
print_r($response);
echo "</pre>";


?>
