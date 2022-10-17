<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>each demo</title>
  <style>
  ul {
    font-size: 18px;
    margin: 0;
  }
  span {
    color: blue;
    text-decoration: underline;
    cursor: pointer;
  }
  .example {
    font-style: italic;
  }
  </style>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
 
To do list: <button>click</button>
<ul>
  <li>Eat</li>
  <li>Sleep</li>
  <li>Be merry</li>
</ul>
 
<script>
$( "button" ).click(function() {
  
  $( "li" ).each(function(index, element ) {
    // console.log( element );
      // $( element ).css("color", "yellow");
        var data = $(this).val();
        console.log($(this).html());
  });

// $.each({ one: 1, two: 2 } , function(key, value) {
//   console.log(this);
// });

});
</script>
 
</body>
</html>