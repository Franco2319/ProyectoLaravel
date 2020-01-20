<?php


$preguntas = [

  "¿TENGO QUE HACER UN PEDIDO MÍNIMO?"=>"No hay pedido mínimo en la tienda online de Valhalla.",
  "¿CÓMO SÉ SI MI PEDIDO SE HA TRAMITADO?"=>"Después de realizar tu pedido, recibirás un mensaje de confirmación (Normalmente en el plazo de 15 minutos).",
  "¿PUEDO CANCELAR MI PEDIDO?"=>"Sí, puedes cancelar tu pedido en los 30 minutos siguientes a su realización.",

]
?>

@extends('layouts.app')
@section('content')

<?php foreach ($preguntas as $key => $value): ?>
  <div class="preguntas text-center">
      <p class="preguntagrande"><?= $key ?></p>
      <p><?= $value ?></p>
    </div>
<?php endforeach; ?>

<div class="col-foot medios text-center">
    <h4 class="footer-title text-center">MEDIOS DE PAGO</h4>
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/visa@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/visa@2x.png" class="footer-payship-img card-img" alt="visa">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mastercard@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mastercard@2x.png" class="footer-payship-img card-img" alt="mastercard">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/amex@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/amex@2x.png" class="footer-payship-img card-img" alt="amex">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/diners@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/diners@2x.png" class="footer-payship-img card-img" alt="diners">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/banelco@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/banelco@2x.png" class="footer-payship-img card-img" alt="ar_banelco">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cabal@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cabal@2x.png" class="footer-payship-img card-img" alt="ar_cabal">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-naranja@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-naranja@2x.png" class="footer-payship-img card-img" alt="ar_tarjeta-naranja">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-shopping@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/tarjeta-shopping@2x.png" class="footer-payship-img card-img" alt="ar_tarjeta-shopping">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mercadopago@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/mercadopago@2x.png" class="footer-payship-img card-img" alt="mercadopago">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/argencard@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/argencard@2x.png" class="footer-payship-img card-img" alt="ar_argencard">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/nativa@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/nativa@2x.png" class="footer-payship-img card-img" alt="nativa">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cencosud@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/ar/cencosud@2x.png" class="footer-payship-img card-img" alt="ar_cencosud">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/pagofacil@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/pagofacil@2x.png" class="footer-payship-img card-img" alt="pagofacil">
      <img src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/rapipago@2x.png" data-src="//d26lpennugtm8s.cloudfront.net/assets/common/img/logos/payment/new_logos_payment/rapipago@2x.png" class="footer-payship-img card-img" alt="rapipago">
  </div>

@endsection
