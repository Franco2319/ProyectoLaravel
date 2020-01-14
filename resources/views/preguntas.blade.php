<?php


$preguntas = [

  "pregunta1"=>"respuesta1",
  "pregunta2"=>"respuesta2",
  "pregunta3"=>"respuesta3",
  "pregunta4"=>"respuesta4",



]
?>

@extends('layouts.app')
@section('content')

<?php foreach ($preguntas as $key => $value): ?>
  <div class="preguntas">
      <p class="preguntagrande"><?= $key ?></p>
      <p><?= $value ?></p>
    </div>
<?php endforeach; ?>

@endsection
