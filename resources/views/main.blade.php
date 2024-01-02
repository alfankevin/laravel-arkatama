<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arkatama Test</title>
  <style>
    body {
      height: 100vh;
      width: 100vw;
      margin: 0;
      padding: 0;
      background-color: #f4f6f9;
    }
    .flex {
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .main {
      height: inherit;
      width: inherit;
    }
    .container {
      min-width: 500px;
      min-height: 500px;
      background: #fff;
    }
  </style>
</head>
<body>
  <section class="main flex">
    <div class="container flex">
      <div>
        <div>
          <form action="{{ route('store') }}" method="POST">
            @csrf
            <input type="text" name="user" placeholder="Nama Usia Kota" spellcheck="false" autocomplete="off">
            <button>Save</button>
          </form>
        </div>
        <div>
          <table>
            <thead>
              <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Usia</td>
                <td>Kota</td>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $key => $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->age }}</td>
                  <td>{{ $item->city }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</body>
</html>