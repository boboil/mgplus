<h1>Новая заявка</h1>
<p>Имя - {{ $name }}</p>
<p>Телефон - {{$phone}}</p>

@if(isset($email))
    <p>Email - {{$email}}</p>
@endif

@if(isset($question))
    <p>Вопрос - {{$question}}</p>
@endif