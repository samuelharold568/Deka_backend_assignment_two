<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>
<body>
  <main class="bg-gray-300 h-screen flex justify-center items-center">
    <form class="bg-gray-400 h-3/4 w-2/3 flex flex-col justify-around items-center">
      <table>
        <tbody class="flex flex-col justify-center gap-4">
          <tr>
            <td>
              <label class="ml-5" for="name">Nama</label>
              <input class="ml-2.5"  id="name" type="text" name="name">
            </td>
          </tr>
          <tr>
            <td>
              <label class="ml-2.5"  for="password">password</label>
              <input class="ml-2.5"  id="password" type="text" name="password">
            </td>
          </tr>
        </tbody>
      </table>
      <button class="bg-gray-700 w-16 p-2">
        <a href="index.php">Login</a>
      </button>
    </form>
  </main>
</body>
</html>