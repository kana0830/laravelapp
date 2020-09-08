<html>
<head>
  <title>Hello/Index</title>
  <style>
  body { font-size:16pt; color:#999; }
  h1 { font-size:100pt; text-align:right; color:#eee;
      margin:-40px 0px -50px 0px; }
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>foreachディレクティブの例</p>
  <ol>
    @for ($i = 01; $i < 100; $i++)
      @if ($i % 2 == 1)
        @continue
      @elseif ($i <= 10)
        <li>No, {{$i}}
      @else
        @break
      @endif
    @endfor
  </ol>
</body>
</html>