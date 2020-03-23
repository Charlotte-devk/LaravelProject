<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  <style>
    * {
      box-sizing: border-box;
    }

    html,
    body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 84px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 30px;
    }

    #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;
    }

    #myTable {
      border-collapse: collapse;
      width: 100%;
      border: 1px solid #ddd;
      font-size: 18px;
    }

    #myTable th,
    #myTable td {
      text-align: left;
      padding: 12px;
    }

    #myTable tr {
      border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>

<body>

  <h2>Search for articles in warehouse</h2>

  <form action="/articles/search" method="get">
    <input type="text" name="article" placeholder="Search for article.." title="Type in a name">
    <input type="submit" value="Search">
  </form>
  <table id="myTable">
    <tr class="header">
      <th style="width:60%;">Name</th>
      <th style="width:40%;">Price</th>
    </tr>

    @foreach($articles as $article)
    <tr>
      <td>{{ $article->name ?? '' }}</td>
      <td>{{ $article->price ?? '' }}</td>
    </tr>
    @endforeach

  </table>
  <div class="links">
    <a href="/welcome">Home</a>
  </div>
</body>

</html>