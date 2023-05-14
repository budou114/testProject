<!DOCTYPE html>
<html>
<head>
  <title>My CSS-styled HTML</title>
  <style>
    /* CSSスタイルの定義 */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
    }

    main {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      justify-content: space-between;
      padding: 20px;
    }

    .content {
      flex: 2;
      background-color: #fff;
      padding: 20px;
    }

    .sidebar {
      flex: 1;
      background-color: #eee;
      padding: 20px;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>My Website</h1>
  </header>
  
  <main>
    <div class="content">
      <h2>Main Content</h2>
      <p>This is the main content of the page.</p>
      @include('partial._pref')
    </div>
  </main>
  
  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
